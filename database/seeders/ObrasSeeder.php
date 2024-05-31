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
    public function run()
    {
    $obras = [
        
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

        [
            'titulo' => 'Toro Montes de Jade',
            'descripcion' => 'En el corazón de la imaginaria ciudad de Valdoria, situada en la región de los Montes de Jade, se erige una plaza que ha capturado la fascinación de locales y turistas por igual: la Plaza del Centauro. En el centro de esta plaza, rodeada por edificios históricos y cafés con terrazas soleadas, se alza una escultura que, con su imponente presencia, provoca una mezcla de admiración y asombro: un toro sin cabeza, esculpido con una maestría que roza lo sobrehumano. La escultura, obra del enigmático artista renacentista Alejo de la Vega, es una pieza de mármol blanco de una altura imponente de tres metros. De la Vega, conocido por su habilidad para capturar la esencia de la fuerza y la tragedia en sus obras, ha creado una representación poderosa y enigmática con este toro decapitado. A lo largo de los años, su significado ha sido objeto de innumerables interpretaciones y debates. El cuerpo del toro, detallado con precisión anatómica, muestra una musculatura tensa y robusta. Cada fibra muscular, cada pliegue de la piel, ha sido esculpido con un realismo asombroso, evidenciando el esfuerzo hercúleo del animal. Las patas, en una postura de embestida congelada en el tiempo, transmiten una sensación de movimiento y fuerza contenida. El torso del toro, aunque sin cabeza, irradia una sensación de poder y lucha, como si estuviera en medio de una batalla épica. La ausencia de la cabeza, el elemento más intrigante de la escultura, añade un aire de misterio y tragedia. La decapitación, representada con una crudeza que evita el sensacionalismo, sugiere una historia de sacrificio y pérdida. Algunos historiadores del arte especulan que De la Vega quería simbolizar la lucha eterna y a menudo infructuosa de la humanidad contra fuerzas superiores, mientras que otros creen que es un comentario sobre la naturaleza de la fuerza bruta y la vulnerabilidad. El mármol blanco, trabajado con una destreza excepcional, brilla con un resplandor etéreo bajo el sol de la tarde, realzando cada detalle de la escultura. La superficie pulida refleja la luz, creando un contraste dramático con las sombras profundas que se forman en las partes más intrincadas de la anatomía del toro. Las heridas y las cicatrices, esculpidas con una precisión casi dolorosa, cuentan historias de batallas libradas y sufrimientos soportados. Inaugurada en la Plaza del Centauro hace más de cuatro siglos, esta escultura ha sido un testigo silencioso de la evolución de Valdoria. Desde celebraciones festivas hasta momentos de introspección, la escultura del toro sin cabeza ha estado en el epicentro de la vida pública de la ciudad, invitando a la contemplación y a la admiración. Los visitantes que se acercan a esta obra no pueden evitar sentir una mezcla de respeto y sobrecogimiento, reflexionando sobre las múltiples interpretaciones que sugiere. La obra de Alejo de la Vega sigue siendo un emblema de Valdoria, un símbolo de su rica historia cultural y su capacidad para inspirar una profunda reflexión sobre la condición humana. La escultura del toro sin cabeza en la Plaza del Centauro no solo destaca por su perfección técnica, sino también por la profundidad emocional que transmite, convirtiéndola en una pieza única y eternamente relevante en el panorama artístico mundial.',
            'imagen' => 'imagen_escultura3.jpg',
            'id_usuario' => '4',
            'subcategoria_id' => '4',
            'autor' => 'Juan Ruiz',
        ],

        [
            'titulo' => 'Chica Lianzhou',
            'descripcion' => 'En el museo de la ficticia ciudad de Lianzhou, situada en el corazón de la región de los Montes de Jade, se encuentra una obra maestra que ha intrigado a arqueólogos y visitantes durante generaciones: una antigua escultura de una figura china con ojos azules. Esta enigmática pieza, descubierta en un remoto templo olvidado, ha sido objeto de numerosos estudios y especulaciones, debido a su singularidad y belleza. La escultura, tallada en jade blanco, mide aproximadamente un metro de altura y representa a un hombre en una postura solemne, con una expresión de serenidad y sabiduría. Los detalles meticulosamente esculpidos revelan la mano de un maestro artesano desconocido, cuya destreza ha permitido que la figura transmita una sensación de vida y presencia a pesar de su antigüedad. El rostro del personaje es de una belleza inusual, con facciones finamente delineadas que reflejan una combinación de fuerza y tranquilidad. Los pómulos altos, la nariz delicadamente esculpida y la boca ligeramente curvada en una expresión contemplativa capturan la esencia de una figura venerada. Sin embargo, son los ojos de la escultura los que más capturan la atención de quienes la contemplan. Tallados en lapislázuli, una piedra preciosa de un azul profundo, los ojos contrastan vívidamente con el tono pálido del jade, creando una mirada hipnótica y misteriosa. El cabello de la figura, tallado con precisión en ondas suaves, cae sobre sus hombros en mechones bien definidos. Está adornado con un tocado tradicional, ricamente decorado con intrincados grabados que sugieren su alta posición social y posiblemente una conexión divina. Las ropas, representadas con pliegues detallados, envuelven el cuerpo en una túnica que denota elegancia y autoridad. Cada pliegue y textura ha sido esculpido con una habilidad excepcional, demostrando el dominio del artista sobre el material. La postura de la figura es majestuosa y relajada, con una mano extendida hacia adelante, mientras que la otra descansa sobre su pecho. Esta pose sugiere una actitud de bienvenida y protección, como si la figura estuviera ofreciendo sabiduría y guía a quienes se acercan. Los detalles en las manos y los dedos, cada uno perfectamente proporcionado, añaden un realismo que realza la presencia casi etérea de la escultura. La historia detrás de esta escultura es tan fascinante como su apariencia. Se cree que data de la dinastía Tang, una época de gran florecimiento cultural y artístico en China. La inclusión de ojos azules, un rasgo inusual en el arte chino de la época, ha llevado a muchos a especular sobre influencias extranjeras y contactos interculturales. Algunos historiadores sugieren que podría representar a un monje o sabio que viajó desde tierras lejanas, simbolizando la riqueza de conocimientos y tradiciones que China absorbió durante ese período. Ubicada en una sala especialmente dedicada a tesoros antiguos, la escultura se ilumina con una luz suave que acentúa su resplandor y misterio. Los visitantes, desde escolares hasta académicos, se detienen a admirar esta obra única, muchos de ellos reflexionando sobre su significado y el talento del artesano que la creó. En resumen, la escultura antigua de una persona china con ojos azules en el museo de Lianzhou es mucho más que una pieza de arte. Es un testimonio silencioso de la historia y la habilidad artística, un puente entre culturas y épocas, y una fuente continua de inspiración y asombro para todos los que tienen la fortuna de contemplarla.',
            'imagen' => 'imagen_escultura4.jpg',
            'id_usuario' => '5',
            'subcategoria_id' => '5',
            'autor' => 'Desconocido',
        ],

        [
            'titulo' => 'Joven Causar',
            'descripcion' => 'En el corazón de la ficticia ciudad de Valentia, ubicada en una colina con vistas al mar Mediterráneo, se erige el Museo Imperial, hogar de una de las piezas más enigmáticas y veneradas de la antigüedad: la escultura de un emperador romano. Esta majestuosa obra, esculpida en mármol blanco, ha fascinado a historiadores, arqueólogos y visitantes desde su descubrimiento en las ruinas de un antiguo palacio. La escultura, que mide poco más de dos metros de altura, representa a un emperador en toda su gloria imperial. Su postura es erguida y digna, irradiando autoridad y poder. La figura está vestida con una toga exquisitamente detallada, que cae en pliegues majestuosos hasta los pies. Cada pliegue de la toga ha sido esculpido con una precisión que transmite la suavidad del tejido y la gravedad de la autoridad imperial. El rostro del emperador es de una impresionante serenidad, con facciones que combinan severidad y benevolencia. Sus ojos, esculpidos con un detalle meticuloso, parecen mirar a través del tiempo, como si observaran tanto el pasado como el futuro del imperio. La nariz prominente y la boca firmemente cerrada reflejan la determinación y el liderazgo del gobernante. El cabello rizado, cuidadosamente tallado, enmarca su rostro y su corona de laurel, símbolo de victoria y honor, reposa sobre su cabeza, destacando su estatus divino. Uno de los detalles más impresionantes de la escultura es la armadura parcialmente visible bajo la toga. Decorada con relieves de dioses y héroes romanos, la armadura no solo protege al emperador, sino que también cuenta una historia de mitología y poder. Cada relieve es una obra maestra en sí misma, mostrando escenas de batallas y victorias que glorifican el imperio romano. La mano derecha del emperador se eleva en un gesto de discurso, como si estuviera dirigiéndose a su pueblo o a sus legiones. Este gesto, lleno de elocuencia y autoridad, sugiere un momento de proclamación o decreto. La mano izquierda, en contraste, descansa sobre una espada envainada, símbolo de su poder militar y disposición para defender el imperio. El pedestal sobre el que se alza la escultura está adornado con inscripciones latinas que narran los logros del emperador y los años de su reinado. Aunque el texto está parcialmente erosionado por el paso del tiempo, se pueden discernir fragmentos que mencionan campañas militares, reformas políticas y construcciones monumentales, pintando una imagen de un líder visionario y ambicioso. La historia de esta escultura es tan fascinante como la figura que representa. Se cree que fue creada durante el reinado del emperador ficticio Aurelius Maximus, conocido por su expansión del imperio y sus reformas administrativas. La escultura fue encontrada en lo que se cree que fue la sala del trono de su palacio, un lugar que habría sido testigo de decisiones cruciales y eventos históricos. En su hogar actual, el Museo Imperial de Valentia, la escultura ocupa un lugar de honor en una sala dedicada a la gloria de Roma. Iluminada por luces que resaltan cada detalle del mármol, la figura del emperador se presenta a los visitantes en todo su esplendor. Paneles informativos y reconstrucciones digitales acompañan la exhibición, proporcionando contexto histórico y permitiendo a los espectadores imaginar el mundo del antiguo imperio romano. En resumen, la escultura antigua de un emperador romano en el Museo Imperial de Valentia no es solo una obra de arte; es un portal a una era de grandeza y poder, un testimonio de la habilidad artística y la visión de un gobernante. La figura del emperador, tallada con tanto cuidado y devoción, continúa inspirando admiración y respeto, recordándonos la rica historia y legado del imperio romano.',
            'imagen' => 'imagen_escultura5.jpg',
            'id_usuario' => '6',
            'subcategoria_id' => '6',
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

        [
            'titulo' => 'Elegancia Felina',
            'descripcion' => 'En esta impresionante obra, titulada "Elegancia Felina", el renombrado fotógrafo Eduardo Sánchez nos sumerge en el misterioso mundo de los gatos a través de su lente magistral. Con un dominio excepcional del contraste y la composición, Sánchez logra capturar la esencia misma de la elegancia felina en esta fotografía en blanco y negro. La imagen transmite una sensación de gracia y serenidad mientras el gato posa con una mirada penetrante, destacando su belleza natural y su cautivador magnetismo. Cada detalle, desde las delicadas texturas del pelaje hasta el brillo sutil en los ojos, se revela con una claridad impresionante, creando una obra de arte que trasciende lo visual para evocar una profunda conexión emocional.',
            'imagen' => 'imagen_fotografia2.jpg',
            'id_usuario' => '2',
            'subcategoria_id' => '7',
            'autor' => 'Eduardo Sánchez',
        ],

        [
            'titulo' => 'Refrescante Tentación',
            'descripcion' => 'En esta fotografía, titulada "Refrescante Tentación", el talentoso fotógrafo Manuel Gómez nos brinda una visión cautivadora de una botella de Coca-Cola. Con una composición meticulosa y un enfoque nítido, Gómez logra destacar la icónica forma de la botella mientras se erige en el centro de la imagen. La botella, brillante y seductora, parece invitar al espectador a disfrutar de un momento de deleite y satisfacción. La iluminación cuidadosamente seleccionada resalta los reflejos en el vidrio, agregando un brillo extra a la escena. A través de esta fotografía, Gómez captura la esencia de la marca Coca-Cola, transmitiendo su atemporalidad y su capacidad para evocar emociones de placer y nostalgia.',
            'imagen' => 'imagen_fotografia3.jpg',
            'id_usuario' => '3',
            'subcategoria_id' => '7',
            'autor' => 'Manuel Gómez',
        ],

        [
            'titulo' => 'Ruinas del Pasado',
            'descripcion' => 'En esta fotografía, titulada "Ruinas del Pasado", la talentosa fotógrafa Elena Martínez nos transporta a un mundo olvidado y misterioso a través de su lente. En el centro de la imagen, una estructura antigua y desgastada se yergue como un testigo silencioso del paso del tiempo. Las paredes desmoronadas y las ventanas vacías narran historias de un pasado glorioso ahora sumido en el abandono. La luz filtrada por entre los huecos crea un juego de sombras y luces que realza la atmósfera melancólica y evocadora del lugar. Cada grieta y cada detalle revela la huella del tiempo y la naturaleza implacable que reclama su espacio. Con esta fotografía, Martínez nos invita a reflexionar sobre la fugacidad de la vida humana y la eterna lucha entre la creación y la destrucción.',
            'imagen' => 'imagen_fotografia4.jpg',
            'id_usuario' => '4',
            'subcategoria_id' => '7',
            'autor' => 'Elena Martínez',
        ],

        [
            'titulo' => 'Luces en la Penumbra',
            'descripcion' => 'En este autorretrato, titulado "Luces en la Penumbra", el fotógrafo Daniel López nos sumerge en una atmósfera íntima y misteriosa. Con la tenue luz que apenas ilumina el ambiente, López captura la esencia de la introspección y la reflexión. La sombra juega en su rostro, creando un contraste sugerente entre la luz y la oscuridad, reflejando la dualidad de la naturaleza humana. La cámara, apenas visible en su mano, agrega un elemento metafórico, insinuando la búsqueda constante de la verdad y la autoexpresión a través del arte de la fotografía. En este selfie, López nos invita a explorar los rincones más profundos de nuestra mente y a contemplar la belleza que se encuentra en la penumbra de nuestra propia existencia.',
            'imagen' => 'imagen_fotografia5.jpg',
            'id_usuario' => '4',
            'subcategoria_id' => '7',
            'autor' => 'Daniel López',
        ],

        [
            'titulo' => 'La Diversidad de la Mirada',
            'descripcion' => 'En esta fotografía titulada "La Diversidad de la Mirada", la fotógrafa Eva Martínez nos presenta un retrato conmovedor de un niño africano con vitiligo y ojos azules. La imagen captura la belleza única y la riqueza de la diversidad humana, desafiando las convenciones estéticas y sociales. El niño mira directamente a la cámara con una expresión serena pero penetrante, desafiando cualquier estereotipo preconcebido y transmitiendo una sensación de confianza y autenticidad. El vitiligo en su piel crea un patrón intrigante y hermoso, mientras que sus ojos azules resaltan su singularidad y reflejan la pureza de su alma. A través de esta fotografía, Martínez nos invita a reflexionar sobre la belleza que reside en la diversidad y nos recuerda la importancia de celebrar nuestras diferencias como una fuente de fuerza y enriquecimiento mutuo.',
            'imagen' => 'imagen_fotografia6.jpg',
            'id_usuario' => '5',
            'subcategoria_id' => '8',
            'autor' => 'Eva Martínez',
        ],

        [
            'titulo' => 'La Sabiduría del Tiempo',
            'descripcion' => 'En esta fotografía titulada "La Sabiduría del Tiempo", el fotógrafo Alejandro García nos brinda un retrato conmovedor de un señor mayor. La imagen captura la esencia de la experiencia y la sabiduría acumulada a lo largo de los años. El rostro del anciano está marcado por las líneas del tiempo, cada arruga cuenta una historia, cada surco revela una lección aprendida. Sus ojos, profundos y serenos, reflejan la vida vivida, la alegría compartida, y quizás también el peso de los momentos difíciles atravesados. La luz suave y envolvente resalta los rasgos del rostro, creando una atmósfera de calma y contemplación. A través de esta fotografía, García nos invita a reflexionar sobre el valor del paso del tiempo y la belleza que reside en la experiencia acumulada. Nos recuerda la importancia de honrar y respetar a nuestros mayores, quienes son guardianes de la historia y ejemplos de fortaleza y perseverancia.',
            'imagen' => 'imagen_fotografia7.jpg',
            'id_usuario' => '5',
            'subcategoria_id' => '8',
            'autor' => 'Alejandro García',
        ],

        [
            'titulo' => 'Explosión de Color',
            'descripcion' => 'En esta fotografía titulada "Explosión de Color", el fotógrafo David Martínez nos presenta un retrato impactante de una joven con un maquillaje vibrante y llamativo. El rostro de la chica está adornado con una explosión de colores brillantes que contrastan entre sí, creando una paleta visualmente estimulante. Los tonos intensos de azul, verde, rosa y amarillo se entrelazan en intrincados patrones, resaltando la creatividad y la expresión individual. La mirada de la modelo, enérgica y llena de confianza, refleja la personalidad audaz y la actitud positiva. La iluminación cuidadosamente seleccionada resalta los detalles del maquillaje, capturando la textura y el brillo de los pigmentos. A través de esta fotografía, Martínez nos invita a celebrar la diversidad y la belleza única de cada individuo. Nos recuerda que el arte del maquillaje es una forma poderosa de expresión personal y una manifestación de creatividad y estilo.',
            'imagen' => 'imagen_fotografia8.jpg',
            'id_usuario' => '6',
            'subcategoria_id' => '8',
            'autor' => 'David Martínez',
        ],

        [
            'titulo' => 'Cumbres Neblinosas',
            'descripcion' => 'En esta fotografía titulada "Cumbres Neblinosas", el renombrado fotógrafo paisajista Elena García nos brinda una vista impresionante de un paisaje montañoso envuelto en una atmósfera mágica y etérea. La imagen captura la majestuosidad de las altas cumbres que se elevan hacia el cielo, adornadas con un manto de nieve resplandeciente que refleja la luz del sol. Las montañas se destacan contra un fondo de nubes espesas y neblina, creando un efecto de profundidad y misterio en la escena. En el primer plano, un sereno cuerpo de agua serpentea entre los valles, reflejando la grandeza de las montañas y añadiendo un toque de calma y serenidad a la composición. La combinación de los picos nevados, las nubes flotantes y el agua tranquila crea una sensación de tranquilidad y asombro ante la belleza natural del entorno. Esta fotografía invita al espectador a sumergirse en la grandiosidad de la naturaleza y a contemplar la magnificencia de las montañas en todo su esplendor.',
            'imagen' => 'imagen_fotografia9.jpg',
            'id_usuario' => '7',
            'subcategoria_id' => '9',
            'autor' => 'Elena García',
        ],

        [
            'titulo' => 'Senderos Dorados',
            'descripcion' => 'En esta cautivadora fotografía titulada "Senderos Dorados", la reconocida fotógrafa paisajista Marta Sánchez nos transporta a un escenario de ensueño donde las montañas se encuentran con el cielo en un espectáculo visual inolvidable. La imagen nos muestra una carretera serpenteante que se adentra en el corazón de las montañas, iluminada por los cálidos tonos dorados del atardecer. Las curvas sinuosas de la carretera guían nuestra mirada hacia el horizonte, creando una sensación de aventura y exploración. A medida que el sol se sumerge lentamente en el horizonte, sus rayos dorados pintan el cielo con tonos anaranjados y rosados, llenando el paisaje de una atmósfera mágica y nostálgica. Las montañas se recortan majestuosamente contra el cielo crepuscular, creando una silueta imponente que contrasta con los tonos suaves del cielo al atardecer. La combinación de la carretera sinuosa, las montañas escarpadas y el cielo pintado de colores cálidos evoca una sensación de libertad y asombro ante la belleza de la naturaleza. Esta fotografía nos invita a embarcarnos en un viaje de descubrimiento y contemplación, explorando los senderos dorados que conducen hacia lo desconocido.',
            'imagen' => 'imagen_fotografia10.jpg',
            'id_usuario' => '7',
            'subcategoria_id' => '9',
            'autor' => 'Marta Sánchez',
        ],
    ];

    // Iterar sobre cada obra de arte y crearla con sus respectivas imágenes
        foreach ($obras as $obraData) {
            $obra = new Obra($obraData);

            // Copiamos la imagen de la obra de arte al directorio de almacenamiento
            $rutaImagenPredefinida = public_path('assets/img/imagenesObras/' . $obraData['imagen'], // Ruta completa de la imagen
            $nombreImagen = time() . '_' . $obraData['imagen']; // Nombre único para la imagen
            $rutaDestino = storage_path('app/public/assets/img/imagenesObras/' . $nombreImagen);
            copy($rutaImagenPredefinida, $rutaDestino);

            // Asignamos la imagen de la obra de arte
            $obra->imagen = $nombreImagen;
            $obra->save();
        }
        
    }
}
