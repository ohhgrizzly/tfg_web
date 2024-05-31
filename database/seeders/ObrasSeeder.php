<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Obra;

class ObrasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $obras = [
        // ÓLEO
        [
            'titulo' => 'Amapolas y Margaritas',
            'descripcion' => 'Este cuadro encantador, titulado "Amapolas y Margaritas en Óleo", despierta una sensación de serenidad y frescura con su vibrante paleta de colores. Las amapolas, con sus pétalos rojos intensos, contrastan maravillosamente con las suaves tonalidades blancas y amarillas de las margaritas, creando una armonía visual que cautiva al espectador. La técnica del óleo utilizada por el artista resalta la textura y profundidad de cada flor, permitiendo que los tonos se mezclen suavemente y creen una sensación de movimiento natural. Las pinceladas delicadas y precisas capturan la luz del sol que se filtra a través de un prado, evocando una atmósfera cálida y acogedora. Esta obra maestra floral no solo es un tributo a la belleza de la naturaleza, sino también un recordatorio de la efímera pero eterna gracia de las flores, que florecen con esplendor efímero para deleitar nuestros sentidos y elevar nuestros espíritus.',
            'imagen' => 'imagen_obra1.jpg',
            'id_usuario' => '2',
            'subcategoria_id' => '1',
            'autor' => 'Mariman Maria Roldan',
        ],

       

        [
            'titulo' => 'Esclavo Romano',
            'descripcion' => 'En una vitrina discreta, oculta entre las grandes y majestuosas estatuas de emperadores y dioses, se encuentra una pequeña escultura romana que capta la atención por su notable humanidad. Tallada en mármol con una delicadeza que contrasta con la dureza de su material, esta escultura de apenas treinta centímetros de altura representa a un esclavo romano, un testimonio silencioso de una clase que sostenía el vasto Imperio Romano en sus hombros. El esclavo, esculpido con una postura humilde y servil, se muestra arrodillado con una expresión de cansancio y resignación en su rostro. Sus rasgos faciales, detalladamente trabajados, revelan un dolor contenido, una vida de arduo trabajo y sacrificio. Los ojos hundidos, tallados con una precisión conmovedora, parecen mirar al suelo, reflejando una existencia de obediencia y sometimiento. El cuerpo del esclavo, aunque pequeño, está esculpido con una atención meticulosa a los detalles anatómicos. Los músculos tensos y las costillas ligeramente visibles sugieren una vida de trabajo físico extenuante. Las manos, hábilmente detalladas, están atadas con una soga que cae con realismo sobre sus muñecas, simbolizando la perpetua restricción de su libertad. Su ropa, sencilla y desgastada, está representada con pliegues finamente esculpidos, acentuando la simplicidad y la modestia de su condición. Aunque el artista de esta obra permanece en el anonimato, su maestría es innegable. A través de esta pequeña escultura, ha logrado captar la esencia de la vida de un esclavo en la Roma antigua: una existencia de sufrimiento y resignación, pero también de resistencia y humanidad. La escultura no solo destaca por su perfección técnica, sino también por la profundidad emocional que transmite, convirtiéndola en una pieza única en su género.  Descubierta en una villa romana hace varias décadas, esta pequeña escultura ha sido objeto de estudio y admiración. A pesar de su tamaño modesto, posee un poder emocional que ha conmovido a historiadores y visitantes de museos por igual. Ahora, exhibida con orgullo en un museo, la escultura invita a los espectadores a reflexionar sobre la vida de aquellos que vivieron en las sombras de la historia, ofreciendo un homenaje a los innumerables esclavos que, a pesar de su anonimato, dejaron una huella imborrable en el legado de la antigua Roma. Esta obra, con su conmovedora representación de la condición humana, continúa inspirando una profunda empatía y reflexión, recordándonos las historias no contadas de aquellos que vivieron y trabajaron en los márgenes del gran imperio.',
            'imagen' => 'imagen_escultura2.jpg',
            'id_usuario' => '3',
            'subcategoria_id' => '4',
            'autor' => 'Desconocido',
        ],

        [
            'titulo' => 'Toro Montes de Jade',
            'descripcion' => 'En el corazón de la imaginaria ciudad de Valdoria, situada en la región de los Montes de Jade, se erige una plaza que ha capturado la fascinación de locales y turistas por igual: la Plaza del Centauro. En el centro de esta plaza, rodeada por edificios históricos y cafés con terrazas soleadas, se alza una escultura que, con su imponente presencia, provoca una mezcla de admiración y asombro: un toro sin cabeza, esculpido con una maestría que roza lo sobrehumano. La escultura, obra del enigmático artista renacentista Alejo de la Vega, es una pieza de mármol blanco de una altura imponente de tres metros. De la Vega, conocido por su habilidad para capturar la esencia de la fuerza y la tragedia en sus obras, ha creado una representación poderosa y enigmática con este toro decapitado. A lo largo de los años, su significado ha sido objeto de innumerables interpretaciones y debates. El cuerpo del toro, detallado con precisión anatómica, muestra una musculatura tensa y robusta. Cada fibra muscular, cada pliegue de la piel, ha sido esculpido con un realismo asombroso, evidenciando el esfuerzo hercúleo del animal. Las patas, en una postura de embestida congelada en el tiempo, transmiten una sensación de movimiento y fuerza contenida. El torso del toro, aunque sin cabeza, irradia una sensación de poder y lucha, como si estuviera en medio de una batalla épica. La ausencia de la cabeza, el elemento más intrigante de la escultura, añade un aire de misterio y tragedia. La decapitación, representada con una crudeza que evita el sensacionalismo, sugiere una historia de sacrificio y pérdida. Algunos historiadores del arte especulan que De la Vega quería simbolizar la lucha eterna y a menudo infructuosa de la humanidad contra fuerzas superiores, mientras que otros creen que es un comentario sobre la naturaleza de la fuerza bruta y la vulnerabilidad. El mármol blanco, trabajado con una destreza excepcional, brilla con un resplandor etéreo bajo el sol de la tarde, realzando cada detalle de la escultura. La superficie pulida refleja la luz, creando un contraste dramático con las sombras profundas que se forman en las partes más intrincadas de la anatomía del toro. Las heridas y las cicatrices, esculpidas con una precisión casi dolorosa, cuentan historias de batallas libradas y sufrimientos soportados. Inaugurada en la Plaza del Centauro hace más de cuatro siglos, esta escultura ha sido un testigo silencioso de la evolución de Valdoria. Desde celebraciones festivas hasta momentos de introspección, la escultura del toro sin cabeza ha estado en el epicentro de la vida pública de la ciudad, invitando a la contemplación y a la admiración. Los visitantes que se acercan a esta obra no pueden evitar sentir una mezcla de respeto y sobrecogimiento, reflexionando sobre las múltiples interpretaciones que sugiere. La obra de Alejo de la Vega sigue siendo un emblema de Valdoria, un símbolo de su rica historia cultural y su capacidad para inspirar una profunda reflexión sobre la condición humana. La escultura del toro sin cabeza en la Plaza del Centauro no solo destaca por su perfección técnica, sino también por la profundidad emocional que transmite, convirtiéndola en una pieza única y eternamente relevante en el panorama artístico mundial.',
            'imagen' => 'imagen_escultura3.jpg',
            'id_usuario' => '4',
            'subcategoria_id' => '4',
            'autor' => 'Juan Ruiz',
        ],
    ];

    // Iterar sobre cada obra de arte y crearla con sus respectivas imágenes
        foreach ($obras as $obraData) {
            $obra = new Obra($obraData);

            // Copiamos la imagen de la obra de arte al directorio de almacenamiento
            $rutaImagenPredefinida = public_path('assets/img/imagenesObras/' . $obraData['imagen']); // Ruta completa de la imagen
            $nombreImagen = time() . '_' . $obraData['imagen']; // Nombre único para la imagen
            $rutaDestino = storage_path('app/public/assets/img/imagenesObras/' . $nombreImagen);
            copy($rutaImagenPredefinida, $rutaDestino);

            // Asignamos la imagen de la obra de arte
            $obra->imagen = $nombreImagen;
            $obra->save();
        }
        
    }
}
