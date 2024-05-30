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










