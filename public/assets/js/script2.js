$(document).ready(function() {
    $('#categoria').change(function() {
        var categoriaId = $(this).val();
        if (categoriaId) {
            $.ajax({
                url: '/subcategorias/' + categoriaId,
                type: 'GET',
                success: function(data) {
                    $('#subcategoria').empty();
                    $('#subcategoria_group').show();
                    $('#subcategoria').append('<option value="" disabled selected>Selecciona el tipo</option>');
                    $.each(data, function(key, subcategoria) {
                        $('#subcategoria').append('<option value="'+ subcategoria.id +'">'+ subcategoria.tipo +'</option>');
                    });
                }
            });
        } else {
            $('#subcategoria_group').hide();
            $('#subcategoria').empty();
            $('#subcategoria').append('<option value="" disabled selected>Selecciona el tipo</option>');
        }
    });

   // JavaScript para rellenar las estrellas al pasar el ratón
  $('.stars input[type="radio"]').on('mouseover', function() {
    var index = $(this).attr('id').split('star')[1];
    $('.stars input[type="radio"]').each(function() {
      var currentIndex = $(this).attr('id').split('star')[1];
      if (currentIndex <= index) {
        $(this).next('label').addClass('filled');
      } else {
        $(this).next('label').removeClass('filled');
      }
    });
  });

  // Para mantener el estado de las estrellas seleccionadas al salir del área de las estrellas
  $('.stars').on('mouseleave', function() {
    var selectedRating = $('input[name="rating"]:checked').val();
    $('.stars input[type="radio"]').each(function() {
      var currentIndex = $(this).attr('id').split('star')[1];
      if (currentIndex <= selectedRating) {
        $(this).next('label').addClass('filled');
      } else {
        $(this).next('label').removeClass('filled');
      }
    });
  });

  // Para rellenar las estrellas según la selección actual
  var selectedRating = $('input[name="rating"]:checked').val();
  $('.stars input[type="radio"]').each(function() {
    var currentIndex = $(this).attr('id').split('star')[1];
    if (currentIndex <= selectedRating) {
      $(this).next('label').addClass('filled');
    }
  });

});

function mostrarFormularioRespuesta(idComentario, nombreUsuario) {
  document.getElementById('idComentarioPadre').value = idComentario;
  document.getElementById('etiquetaContenido').textContent = 'Respondiendo a @' + nombreUsuario + ':';
}

document.addEventListener('DOMContentLoaded', function () {
  var categoriaSelect = document.getElementById('categoria');
  if (categoriaSelect) {
    categoriaSelect.addEventListener('change', function () {
      if (this.value === 'add_new') {
        var formato = prompt('Introduce el nuevo formato de categoría:');
        if (formato) {
          if (!esAdmin) {
            alert('Acceso denegado');
            return;
        }
          // Verificar la existencia de la categoría
          fetch('/admin/verificar-categoria', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ formato: formato })
          })
          .then(response => response.json())
          .then(data => {
            if (data.exists) {
              alert('Error: Esta categoría ya existe.');
            } else {
              // Si la categoría no existe, enviar el formulario para crearla
              fetch(crearCategoriaUrl, {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ formato: formato })
              })
              .then(response => response.json())
              .then(data => {
                if (data.success) {
                  alert(data.message);
                  location.reload(); // Recargar la página para actualizar el desplegable
                } else {
                  alert('Hubo un error al crear la categoría.');
                }
              })
              .catch(error => {
                console.error('Error:', error);
                alert('Hubo un error al crear la categoría.');
              });
            }
          })
          .catch(error => {
            console.error('Error:', error);
            alert('Hubo un error al verificar la categoría.');
          });
        }
      }
    });
  }
});

document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('subcategoriaForm').addEventListener('submit', function (event) {
      event.preventDefault();
      
      fetch('/admin/crearSubcategoria', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': csrfToken
          },
          body: JSON.stringify({
              categoria: document.getElementById('categoria').value,
              tema: document.getElementById('tema').value,
              material: document.getElementById('material').value,
              tipo: document.getElementById('tipo').value,
              epoca: document.getElementById('epoca').value,
          })
      })
      .then(response => response.json())
      .then(data => {
          if (data.error) {
              alert(data.error);
          } else if (data.success) {
              alert(data.success);
              location.reload();
          }
      })
      .catch(error => {
          console.error('Error:', error);
          alert('Hubo un error al enviar el formulario.');
      });
  });
  
});








