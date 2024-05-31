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
            'titulo' => 'Paseo de Niños por la Playa',
            'descripcion' => 'Este encantador cuadro, titulado "Paseo de Niños por la Playa", captura la inocencia y la alegría de la infancia en un escenario idílico junto al mar. La escena está impregnada de una sensación de libertad y aventura, mientras los niños corretean y juegan en la orilla, dejando huellas de sus pasos en la suave arena dorada. El artista ha empleado la técnica del óleo con maestría para retratar la luz del sol que brilla sobre las aguas cristalinas y las nubes esponjosas que flotan en el cielo azul. Los tonos cálidos y vibrantes dan vida a la escena, creando un ambiente lleno de vitalidad y felicidad. Cada detalle, desde las risas de los niños hasta las olas que rompen suavemente en la costa, está pintado con una precisión meticulosa que invita al espectador a sumergirse en este momento de felicidad y serenidad. "Paseo de Niños por la Playa" es más que una pintura: es un recordatorio de los simples placeres de la vida y la belleza eterna de la naturaleza',
            'imagen' => 'imagen_obra2.jpg',
            'id_usuario' => '2',
            'subcategoria_id' => '1',
            'autor' => 'Ruben de Luis',
        ],

        [
            'titulo' => 'Puerto de Sitges',
            'descripcion' => 'En la obra maestra "Puerto de Sitges", el artista nos transporta a las pintorescas orillas de este encantador enclave mediterráneo. A través de pinceladas magistrales de óleo, se captura la esencia misma de la vida portuaria: desde el bullicio matutino de los pescadores preparando sus embarcaciones hasta el sosegado atardecer, cuando las aguas tranquilas reflejan la calidez del cielo anaranjado. Las casas blancas, con sus tejados rojizos, se alzan majestuosas a lo largo del puerto, testigos silenciosos del devenir diario. Las tabernas y restaurantes emanan el aroma tentador de la cocina mediterránea, mientras los visitantes pasean por el muelle, deleitándose con la brisa marina y el sonido suave de las olas que acarician la costa. Los barcos, con sus velas ondeando al viento, aguardan pacientes su próximo viaje mar adentro, donde aguardan historias de aventura y pesca. Las gaviotas, en su danza aérea, parecen ser las guardianas de este paisaje costero, observando con curiosidad y gracia todo lo que ocurre a su alrededor. En cada pincelada, se percibe la pasión del artista por este rincón del Mediterráneo, transmitiendo una sensación de paz y armonía que invita al espectador a sumergirse en la atmósfera mágica del puerto de Sitges y a perderse en sus infinitas historias por descubrir.',
            'imagen' => 'imagen_obra3.jpg',
            'id_usuario' => '2',
            'subcategoria_id' => '1',
            'autor' => 'Ruben de Luis',
        ],

        // ESCULTURA
        [
            'titulo' => 'Escultura Maya',
            'descripcion' => 'En el corazón de una densa selva tropical, se encuentra una enigmática escultura maya que ha resistido el paso del tiempo. Tallada en piedra con una precisión y detalle que desafían los siglos, esta obra es un testimonio mudo de una civilización rica en historia y misterio.  La escultura, de un metro de altura, representa a un sacerdote o un dios maya, de pie con una postura imponente. Su rostro, sereno y autoritario, está adornado con intrincadas marcas y símbolos que cuentan historias de rituales antiguos y poderes divinos. Los ojos, tallados con precisión, parecen mirar más allá del tiempo, guardando secretos de una era pasada. El cuerpo de la escultura está cubierto con una serie de grabados detallados que representan escenas de la vida maya: desde sacrificios rituales hasta celebraciones festivas. Cada línea y curva en la piedra parece vibrar con la energía de una cultura que veneraba a sus dioses y a la naturaleza. Las manos del sacerdote están extendidas, sosteniendo un objeto sagrado, posiblemente una ofrenda a los dioses, mientras sus pies están firmemente plantados sobre un pedestal decorado con glifos que narran su linaje y poder. Aunque el artista detrás de esta majestuosa obra permanece en el anonimato, su habilidad y devoción son evidentes en cada detalle. La escultura no solo muestra un dominio técnico impresionante, sino también una profunda comprensión de la espiritualidad y la cosmología maya.  Descubierta por un arqueólogo en los años 70, esta escultura ha sido objeto de estudio y admiración, atrayendo a historiadores y turistas por igual. Su presencia es un recordatorio tangible de la grandeza y el misterio de la civilización maya, un eco de un tiempo cuando los hombres vivían en armonía con los dioses y la naturaleza. Esta escultura, ahora en exhibición en un museo, continúa inspirando asombro y reverencia, invitando a los espectadores a imaginar las historias y los rituales de una era desaparecida, y a rendir homenaje a los artistas desconocidos que dieron vida a la piedra con su arte y su devoción.',
            'imagen' => 'imagen_escultura1.jpg',
            'id_usuario' => '2',
            'subcategoria_id' => '4',
            'autor' => 'Desconocido',
        ],
        
        [
            'titulo' => 'Esclavo Romano',
            'descripcion' => 'En una vitrina discreta, oculta entre las grandes y majestuosas estatuas de emperadores y dioses, se encuentra una pequeña escultura romana que capta la atención por su notable humanidad. Tallada en mármol con una delicadeza que contrasta con la dureza de su material, esta escultura de apenas treinta centímetros de altura representa a un esclavo romano, un testimonio silencioso de una clase que sostenía el vasto Imperio Romano en sus hombros. El esclavo, esculpido con una postura humilde y servil, se muestra arrodillado con una expresión de cansancio y resignación en su rostro. Sus rasgos faciales, detalladamente trabajados, revelan un dolor contenido, una vida de arduo trabajo y sacrificio. Los ojos hundidos, tallados con una precisión conmovedora, parecen mirar al suelo, reflejando una existencia de obediencia y sometimiento. El cuerpo del esclavo, aunque pequeño, está esculpido con una atención meticulosa a los detalles anatómicos. Los músculos tensos y las costillas ligeramente visibles sugieren una vida de trabajo físico extenuante. Las manos, hábilmente detalladas, están atadas con una soga que cae con realismo sobre sus muñecas, simbolizando la perpetua restricción de su libertad. Su ropa, sencilla y desgastada, está representada con pliegues finamente esculpidos, acentuando la simplicidad y la modestia de su condición. Aunque el artista de esta obra permanece en el anonimato, su maestría es innegable. A través de esta pequeña escultura, ha logrado captar la esencia de la vida de un esclavo en la Roma antigua: una existencia de sufrimiento y resignación, pero también de resistencia y humanidad. La escultura no solo destaca por su perfección técnica, sino también por la profundidad emocional que transmite, convirtiéndola en una pieza única en su género.  Descubierta en una villa romana hace varias décadas, esta pequeña escultura ha sido objeto de estudio y admiración. A pesar de su tamaño modesto, posee un poder emocional que ha conmovido a historiadores y visitantes de museos por igual. Ahora, exhibida con orgullo en un museo, la escultura invita a los espectadores a reflexionar sobre la vida de aquellos que vivieron en las sombras de la historia, ofreciendo un homenaje a los innumerables esclavos que, a pesar de su anonimato, dejaron una huella imborrable en el legado de la antigua Roma. Esta obra, con su conmovedora representación de la condición humana, continúa inspirando una profunda empatía y reflexión, recordándonos las historias no contadas de aquellos que vivieron y trabajaron en los márgenes del gran imperio.',
            'imagen' => 'imagen_escultura2.jpg',
            'id_usuario' => '3',
            'subcategoria_id' => '4',
            'autor' => 'Desconocido',
        ],

        // FOTOGRAFIAS
        [
            'titulo' => 'Ecos del Tiempo',
            'descripcion' => 'Es una evocadora fotografía monocromática que captura la esencia de un momento congelado en el tiempo. Con una composición impecable, la imagen presenta un paisaje urbano desierto, donde las sombras alargadas de edificios antiguos se proyectan sobre calles adoquinadas. Los detalles arquitectónicos, cuidadosamente resaltados, muestran la grandeza y el desgaste de una época pasada. Los toques sutiles de sepia añaden una cálida nostalgia, transformando la fotografía en un puente entre el presente y el pasado. La tonalidad sepia suaviza las líneas duras del blanco y negro, infundiendo a la escena una melancolía serena y atemporal. La textura del grano, perceptible en cada rincón de la imagen, evoca las fotografías analógicas de antaño, donde cada imperfección contribuye a la autenticidad y profundidad emocional de la obra. "Ecos del Tiempo" no solo es una captura visual, sino una invitación a reflexionar sobre la historia, el paso del tiempo y la belleza persistente en la quietud de los momentos olvidados.',
            'imagen' => 'imagen_fotografia1.jpg',
            'id_usuario' => '2',
            'subcategoria_id' => '7',
            'autor' => 'Gabriel Montenegro',
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
