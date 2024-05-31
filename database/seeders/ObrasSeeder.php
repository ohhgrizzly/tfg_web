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

      
        [
            'titulo' => 'Valle de Ensueño',
            'descripcion' => 'En esta impresionante pintura titulada "Valle de Ensueño", el virtuoso artista Javier Montoya nos invita a adentrarnos en un paisaje de ensueño, donde la naturaleza despliega toda su majestuosidad y belleza. Con trazos magistrales de óleo, Montoya ha creado una obra maestra que transporta al espectador a un mundo de serenidad y asombro. El valle se extiende ante nuestros ojos en una sinfonía de colores y texturas, con suaves colinas cubiertas de exuberante vegetación y bosques frondosos que se pierden en el horizonte. Los tonos verdes y dorados se funden armoniosamente, creando una paleta de colores que dan vida a la escena con una luminosidad cautivadora. En el centro del valle, un río serpentea sinuosamente entre los campos y prados, reflejando el cielo azul y las nubes blancas que flotan perezosamente en el firmamento. El agua cristalina brilla con una luz iridiscente, invitando a sumergirse en su frescura y serenidad. A lo lejos, las montañas se yerguen imponentes, con picos cubiertos de nieve que se recortan contra el cielo claro. La bruma matutina se eleva suavemente desde el suelo, envolviendo el paisaje en un velo etéreo que añade un toque de misterio y magia. En primer plano, flores silvestres salpican el paisaje con pinceladas de color, creando un contraste vibrante con el verde exuberante de la vegetación circundante. Mariposas revolotean entre las flores, llenando el aire con su delicada belleza y efímera gracia. Es un paisaje de una belleza indescriptible, capturado con maestría por Javier Montoya en esta obra de arte que invita al espectador a perderse en la tranquilidad y la armonía de este valle de ensueño.',
            'imagen' => 'imagen_obra10.jpg',
            'id_usuario' => '4',
            'subcategoria_id' => '1',
            'autor' => 'Javier Montoya',
        ],

        [
            'titulo' => 'Atardecer en el Puerto de Azulmar',
            'descripcion' => 'En la magnífica obra titulada "Atardecer en el Puerto de Azulmar", el talentoso artista Carmen Ruiz nos sumerge en un paisaje marítimo de una belleza cautivadora. Con pinceladas magistrales de óleo, Ruiz ha capturado la atmósfera mágica y serena de un puerto al caer la tarde, llenando la escena con una sensación de calma y nostalgia. El puerto se extiende a lo largo de la costa, con muelles y embarcaderos que se adentran en las aguas tranquilas del mar. Los barcos y veleros están atracados en el puerto, sus velas ondeando suavemente al ritmo de la brisa marina, mientras los últimos rayos del sol doran sus cascos y mástiles. El cielo está pintado en tonos cálidos y vibrantes, con nubes de color naranja y rosa que se reflejan en las aguas del puerto, creando un espectáculo de luz y color que parece sacado de un sueño. El sol se desliza lentamente hacia el horizonte, tiñendo el cielo con tonos dorados y creando un resplandor dorado que se refleja en las tranquilas aguas. En la orilla, las casas y edificios del puerto se iluminan con las luces del atardecer, sus fachadas de colores cálidos brillando con una luz suave y dorada. La silueta de los edificios se recorta contra el cielo en tonos pastel, creando una vista impresionante que evoca una sensación de paz y tranquilidad. En el aire flota el suave murmullo de las olas rompiendo suavemente contra el muelle, mezclado con el sonido distante de las gaviotas que vuelan en círculos sobre el puerto. Es un momento mágico, un instante suspendido en el tiempo, capturado para la eternidad por la hábil mano de Carmen Ruiz en esta obra maestra que invita al espectador a perderse en la belleza del atardecer en el puerto de Azulmar.',
            'imagen' => 'imagen_obra11.jpg',
            'id_usuario' => '4',
            'subcategoria_id' => '1',
            'autor' => 'Carmen Ruiz',
        ],

        [
            'titulo' => 'Ruinas del Tiempo',
            'descripcion' => 'En la enigmática pintura titulada "Ruinas del Tiempo", el virtuoso artista Andrés Molina nos transporta a un mundo perdido de misterio y grandeza. Con trazos magistrales de óleo, Molina ha plasmado la majestuosidad de unas ruinas antiguas envueltas en el velo del tiempo, evocando la grandiosidad y el misterio de civilizaciones olvidadas. Las ruinas se alzan imponentes contra el cielo, testigos silenciosos de un pasado glorioso que se desvanece lentamente en la bruma del olvido. Columnas rotas y arcos derruidos se elevan hacia el cielo, sus formas angulares y esculpidas por el paso de los siglos, mientras que enredaderas y vegetación se entrelazan entre los escombros, reclamando la tierra que una vez fue suya. El paisaje que rodea las ruinas está envuelto en una atmósfera de misterio y melancolía. Un cielo nublado se extiende sobre el horizonte, teñido de tonos grises y azules que sugieren la llegada de una tormenta inminente. En el aire flota el eco de antiguos secretos y leyendas olvidadas, susurros de un pasado que se niega a ser olvidado. A pesar del paso del tiempo y la devastación del abandono, las ruinas aún conservan su esplendor y grandeza, testigos mudos de la fuerza indomable del espíritu humano. En cada grieta y cada piedra desgastada por el tiempo, se pueden leer las historias de aquellos que una vez caminaron por estos pasillos y contemplaron estas vistas con asombro y reverencia. "Ruinas del Tiempo" es más que una simple representación de un lugar olvidado; es un recordatorio de la fugacidad de la grandeza humana y la eterna lucha entre la creación y la destrucción, la memoria y el olvido. En esta obra, Molina nos invita a reflexionar sobre nuestro lugar en el flujo del tiempo y la impermanencia de todas las cosas, recordándonos que, al final, todo lo que queda es el eco de nuestras acciones y el legado que dejamos atrás.',
            'imagen' => 'imagen_obra12.jpg',
            'id_usuario' => '4',
            'subcategoria_id' => '1',
            'autor' => 'Andrés Molina',
        ],

        [
            'titulo' => 'Paseo al Atardecer',
            'descripcion' => 'En la fascinante obra "Paseo al Atardecer", el artista ficticio Santiago Velázquez nos sumerge en un paseo marítimo lleno de encanto y nostalgia. Con trazos de óleo magistralmente aplicados, Velázquez captura la serenidad y la belleza efímera de un atardecer en la costa, invitándonos a perdernos en la calma de este paisaje costero.  El paseo marítimo se extiende a lo largo de la pintura, serpenteando suavemente junto a la línea costera bañada por la luz dorada del sol poniente. Lámparas antiguas se alzan a lo largo del camino, iluminando la senda con una suave luz amarillenta que se refleja en el agua tranquila del mar. Las sombras alargadas de los árboles y farolas dan testimonio del avance del crepúsculo, mientras que las siluetas de las personas que pasean a lo largo del malecón añaden una sensación de vida y movimiento a la escena. En el horizonte, el sol se hunde lentamente bajo el horizonte, tiñendo el cielo de tonos cálidos y dorados que se funden con el azul profundo del océano. Nubes esponjosas y rosadas flotan en el firmamento, reflejando los últimos destellos de luz del día y creando un espectáculo celestial que parece sacado de un sueño. El aire está impregnado con el suave aroma del mar y el sonido de las olas rompiendo suavemente contra la costa, creando una sinfonía tranquila y envolvente que acaricia los sentidos. En este momento mágico, el tiempo parece detenerse, y los espectadores se ven transportados a un mundo de paz y serenidad donde pueden escapar del ajetreo y el bullicio de la vida cotidiana. "Paseo al Atardecer" es más que una simple representación de un momento en el tiempo; es una invitación a contemplar la belleza efímera de la naturaleza y a encontrar la tranquilidad en medio del caos del mundo moderno. Con esta obra, Velázquez nos recuerda la importancia de detenernos y apreciar los pequeños momentos de belleza que la vida tiene para ofrecer, y nos invita a sumergirnos en la paz y la serenidad que solo el mar puede brindar.',
            'imagen' => 'imagen_obra13.jpg',
            'id_usuario' => '4',
            'subcategoria_id' => '1',
            'autor' => 'Santiago Velázquez',
        ],

        [
            'titulo' => 'Reflejos del Silencio',
            'descripcion' => 'En la mística pintura titulada "Reflejos del Silencio", el artista imaginario Javier Montoya nos sumerge en un paisaje de serenidad y contemplación donde un antiguo monasterio se refleja majestuosamente en las tranquilas aguas de un lago. Con maestría en el uso del óleo, Montoya crea una atmósfera de quietud y misterio que invita al espectador a adentrarse en la esencia del silencio y la introspección. El monasterio, una imponente estructura de piedra con torres y cúpulas, se alza en la distancia, emergiendo entre los árboles frondosos que lo rodean. Su arquitectura antigua y venerable parece fusionarse con el paisaje circundante, creando una sensación de armonía entre lo humano y lo divino. Las ventanas iluminadas por la luz crepuscular emiten una suave luminiscencia que contrasta con la oscuridad de la noche que se avecina, evocando la idea de que la fe y la esperanza pueden brillar incluso en los momentos más oscuros. El lago, como un espejo líquido, refleja con fidelidad la imagen del monasterio y los árboles que lo rodean, creando un efecto visual hipnótico que añade una dimensión de profundidad y misterio a la escena. Las aguas tranquilas y serenas del lago sugieren una sensación de calma y quietud, como si el tiempo mismo se hubiera detenido para permitir la contemplación y la reflexión. En el cielo, las estrellas comienzan a brillar una a una, formando constelaciones que parecen susurrar antiguos secretos y misterios. La luna, radiante y llena, se eleva lentamente sobre el horizonte, bañando el paisaje en una luz plateada que ilumina cada rincón con un resplandor etéreo. Una suave neblina se cierne sobre el paisaje, añadiendo un toque de misterio y magia a la escena y evocando la sensación de estar en el umbral entre el mundo terrenal y el celestial. En "Reflejos del Silencio", Montoya nos invita a sumergirnos en la tranquilidad y la contemplación de un mundo donde el tiempo parece detenerse y el alma encuentra reposo. Es una invitación a descubrir la belleza y la profundidad que se encuentran en los rincones más silenciosos de nuestro ser, y a encontrar inspiración y renovación en la quietud y la paz que solo el silencio puede ofrecer.',
            'imagen' => 'imagen_obra14.jpg',
            'id_usuario' => '5',
            'subcategoria_id' => '1',
            'autor' => 'Javier Montoya',
        ],

        [
            'titulo' => 'Melodía Otoñal',
            'descripcion' => 'En la cautivadora obra "Melodía Otoñal", el artista ficticio Santiago Rivera nos transporta a un paisaje encantado donde la belleza del otoño se despliega en toda su gloria. En el lienzo, un grupo de árboles se erige majestuoso, sus ramas adornadas con una paleta de colores cálidos que iluminan el paisaje con un resplandor dorado. Los árboles, vestidos con hojas que cambian de tonalidad, parecen arder con el fuego del otoño, sus tonos rojizos, dorados y anaranjados vibrando en perfecta armonía. Las hojas caídas cubren el suelo como una alfombra de colores, creando un tapiz mágico que invita a perderse en su belleza efímera y fugaz. El cielo, teñido con pinceladas de naranja y rosa, parece encenderse con los últimos destellos de luz del día, mientras que las nubes dispersas flotan en el aire como suaves pinceladas en el lienzo del firmamento. El sol, en su descenso hacia el horizonte, baña el paisaje con una luz dorada y melancólica, que añade una sensación de nostalgia y romanticismo al ambiente. En el fondo, se vislumbra una hilera de montañas cubiertas por una neblina dorada, que se funde con los colores del atardecer y crea una sensación de profundidad y misterio en la distancia. El aire está impregnado con el suave aroma de la tierra mojada y las hojas secas, mientras que una suave brisa agita las ramas de los árboles, susurrando secretos antiguos y melancólicas melodías de despedida. En "Melodía Otoñal", Santiago Rivera nos invita a sumergirnos en la magia del otoño, a contemplar la belleza efímera de la naturaleza en su plenitud y a encontrar inspiración en la armonía y el equilibrio de sus colores y formas. Es una invitación a detenernos por un momento y a maravillarnos con la belleza del mundo que nos rodea, a celebrar la vida y la renovación que trae consigo cada cambio de estación.',
            'imagen' => 'imagen_obra15.png',
            'id_usuario' => '5',
            'subcategoria_id' => '1',
            'autor' => 'Santiago Rivera',
        ],


        [
            'titulo' => 'Sinfonía de Lilas',
            'descripcion' => 'En la obra titulada "Sinfonía de Lilas", el talentoso artista Sebastián Montoya nos sumerge en un jardín encantado donde las flores lilas bailan al ritmo de la brisa primaveral. En este magnífico lienzo, los tonos suaves y etéreos de las flores se mezclan armoniosamente, creando una sinfonía de color y belleza. Las lilas, con sus delicadas y fragantes flores, se alzan orgullosas hacia el cielo, sus pétalos ondulantes como faldas de bailarinas en un escenario celestial. Cada flor parece vibrar con vida propia, emanando una energía tranquila y serena que impregna el aire a su alrededor. El jardín está impregnado de un suave resplandor dorado, que se filtra entre las hojas y las flores, iluminando cada rincón con una luz cálida y acogedora. Los rayos de sol acarician suavemente los pétalos, resaltando su textura y revelando una paleta de colores que va desde el púrpura intenso hasta el blanco perlado. El aroma embriagador de las lilas llena el aire, mezclándose con el susurro de las hojas y el canto de los pájaros que revolotean entre las ramas. Es un momento de paz y armonía, donde el tiempo se detiene y el alma encuentra consuelo en la belleza efímera de la naturaleza. En "Sinfonía de Lilas", Sebastián Montoya captura la esencia misma de la primavera, celebrando la belleza y la fragilidad de la vida en todas sus formas. Es una obra que nos invita a detenernos y apreciar la magia que nos rodea, recordándonos la importancia de encontrar la belleza en los pequeños detalles y de cultivar un espíritu de gratitud y asombro ante el mundo que nos rodea.',
            'imagen' => 'imagen_obra17.png',
            'id_usuario' => '6',
            'subcategoria_id' => '1',
            'autor' => 'Sebastián Montoya',
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
