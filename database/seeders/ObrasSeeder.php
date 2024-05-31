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
$obrasCreadas = [
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
            'titulo' => 'Florecer del Cerezo',
            'descripcion' => 'En esta cautivadora obra de arte, titulada "Florecer del Cerezo", el artista nos transporta a un mundo de delicadeza y esplendor primaveral. Con maestría y sensibilidad, la pintura captura la efímera belleza de los cerezos en flor en todo su esplendor. En el lienzo, los suaves tonos rosados y blancos se entrelazan en una danza etérea de pinceladas, creando un paisaje etéreo que parece cobrar vida ante nuestros ojos. Cada flor, meticulosamente representada, irradia una luminosidad casi celestial, mientras que las ramas desnudas se alargan hacia el cielo en un ballet de elegancia natural. La luz del sol filtra a través de las delicadas flores, creando un juego de luces y sombras que añade profundidad y misterio a la escena. El ambiente está impregnado de una sensación de serenidad y renovación, como si el propio aire estuviera impregnado del dulce aroma de las flores en floración. Al contemplar esta obra, nos sumergimos en un mundo de calma y contemplación, donde el tiempo parece detenerse y solo queda espacio para la admiración ante la maravilla de la naturaleza. Es un recordatorio conmovedor de la fugacidad de la vida y la belleza efímera que nos rodea, capturada para siempre en el lienzo por el talento del artista',
            'imagen' => 'imagen_obra5.jpg',
            'id_usuario' => '3',
            'subcategoria_id' => '1',
            'autor' => 'Isodoro',
        ],

       [
            'titulo' => 'Horizontes Infinitos',
            'descripcion' => 'En este magnífico lienzo, titulado "Horizontes Infinitos", el espectador es transportado a vastas y ondulantes llanuras que se extienden hasta donde alcanza la vista. Con pinceladas magistrales de óleo, el artista ha capturado la inmensidad y la majestuosidad de estos paisajes abiertos. Los tonos cálidos y terrosos dominan la paleta de colores, reflejando la riqueza de la tierra y el sol que acaricia suavemente la superficie de las llanuras. El cielo se funde armoniosamente con la tierra en un degradado de azules y naranjas, creando un efecto de infinitud que invita a perderse en el horizonte lejano. En primer plano, podemos vislumbrar la silueta de árboles solitarios y arbustos dispersos, que rompen la monotonía de la llanura con su presencia esparcida. El viento parece susurrar entre las hojas y las hierbas altas se mecen suavemente, añadiendo movimiento y vida a la escena estática. La luz del atardecer baña todo con una suave luminiscencia dorada, creando contrastes y sombras que dan profundidad y textura a la composición. Cada detalle está representado con una precisión impresionante, desde la hierba que se mece en el viento hasta las nubes que flotan perezosamente en el cielo. Al contemplar esta obra, nos sumergimos en un estado de contemplación y tranquilidad, donde el tiempo se diluye y solo queda espacio para la admiración ante la belleza atemporal de la naturaleza. Es un recordatorio de la grandeza del mundo que nos rodea y de la capacidad del arte para capturar la esencia misma de la existencia humana.',
            'imagen' => 'imagen_obra6.jpg',
            'id_usuario' => '3',
            'subcategoria_id' => '1',
            'autor' => 'Ruben de Luis',
        ],

       [
            'titulo' => 'Marina del sol',
            'descripcion' => 'En esta cautivadora pintura al óleo titulada "Marina del Sol", el espectador es transportado a un encantador puerto pesquero en la costa mediterránea de España. Con pinceladas vibrantes y ricas en color, el artista ha capturado la vida y el carácter único de este pintoresco lugar. El puerto, bautizado como "Puerto Dorado", se encuentra bañado por la cálida luz del sol de la tarde, que ilumina los edificios blancos y las embarcaciones pintorescas que descansan en las tranquilas aguas. Los tonos dorados y ocres dominan la escena, creando un ambiente acogedor y nostálgico que invita a la contemplación. Los barcos pesqueros, con sus cascos de madera desgastada y velas ondeando al viento, añaden un toque de autenticidad y vida al puerto. Algunos pescadores trabajan en reparaciones, mientras que otros descansan en las tabernas cercanas, disfrutando de la camaradería y el bullicio característicos del lugar. Las casas encaladas y los edificios tradicionales se apiñan alrededor del puerto, creando un laberinto de callejuelas estrechas y sinuosas. Las terrazas de los restaurantes y cafeterías están llenas de gente que disfruta de deliciosos manjares y vistas impresionantes del mar y el puerto. En el horizonte, el sol se pone lentamente sobre el mar, tiñendo el cielo de tonos rosados y dorados que se reflejan en las tranquilas aguas. Es un momento mágico y efímero, capturado para siempre en esta magnífica obra de arte que celebra la belleza y la serenidad del Mediterráneo español.',
            'imagen' => 'imagen_obra7.jpg',
            'id_usuario' => '3',
            'subcategoria_id' => '1',
            'autor' => 'Juan Javier Mendez',
        ],

       [
            'titulo' => 'Reflejos Urbanos',
            'descripcion' => 'En esta enigmática pintura al óleo titulada "Reflejos Urbanos", el espectador es transportado a las orillas de "Villamar", una ciudad ficticia creada por el ilustre artista Lucas Montalbán. Con maestría, Montalbán ha capturado la esencia dinámica y vibrante de esta metrópolis imaginaria en una obra que rebosa de energía y movimiento. La ribera de Villamar, bañada por las aguas cristalinas de un río serpenteante, se encuentra enmarcada por una línea de imponentes rascacielos que se alzan hacia el cielo. Las torres de vidrio y acero se reflejan en el agua, creando un efecto de espejo que duplica la majestuosidad de la ciudad. En las orillas del río, bulliciosas avenidas y bulevares cobran vida con la actividad frenética de la vida urbana. Transeúntes pasean por las aceras, mientras que bicicletas y coches zigzaguean entre el tráfico, creando un vaivén constante de movimiento y color. Las luces de neón parpadean en los letreros de los comercios y restaurantes, iluminando la noche con destellos de magia y misterio. La música flota en el aire, mezclándose con el murmullo de la gente y el suave chapoteo del agua contra los muelles. En el horizonte, los últimos rayos del sol poniente tiñen el cielo de tonos dorados y rosados, creando una atmósfera de ensueño que envuelve la ciudad en un halo de belleza y nostalgia. Es un momento fugaz, capturado por Montalbán en esta obra maestra que celebra la grandeza y la vitalidad de la vida urbana en "Villamar".',
            'imagen' => 'imagen_obra8.jpg',
            'id_usuario' => '3',
            'subcategoria_id' => '1',
            'autor' => 'Lucas Montalbán',
        ],

       [
            'titulo' => 'Riberas de Azur',
            'descripcion' => 'En esta magnífica obra de arte titulada "Riberas de Azur", el renombrado artista Catalina Sánchez nos transporta a las orillas de "Marbella del Mar", una ciudad ficticia creada por su imaginación prodigiosa. Con pinceladas magistrales de óleo, Sánchez ha plasmado la esencia encantadora y sofisticada de esta ciudad costera en un lienzo que rebosa de vitalidad y encanto. A lo largo de la ribera de Marbella del Mar, la brisa marina acaricia suavemente la costa dorada, mientras las olas rompen con delicadeza en la playa de arena blanca. Las palmeras se mecen al compás del viento, ofreciendo sombra y frescor a los transeúntes que pasean por el malecón. Los edificios de estilo mediterráneo se alzan con elegancia a lo largo del paseo marítimo, con fachadas pintadas de blanco resplandeciente que reflejan la luz del sol. Las terrazas de los cafés y restaurantes están llenas de vida, con clientes disfrutando de la brisa marina y las vistas panorámicas del mar. En el puerto deportivo, yates y veleros se mecen suavemente en las aguas tranquilas, creando una estampa idílica de lujo y opulencia. El reflejo del sol sobre el agua crea destellos dorados que bailan en la superficie, añadiendo un toque de magia a la escena. A medida que cae la tarde, el cielo se tiñe de tonos cálidos y dorados, iluminando la ciudad con una luz mágica y evocadora. Es un momento de calma y serenidad, capturado por Catalina Sánchez en esta obra de arte que invita al espectador a sumergirse en la belleza atemporal de "Marbella del Mar".',
            'imagen' => 'imagen_obra9.jpg',
            'id_usuario' => '4',
            'subcategoria_id' => '1',
            'autor' => 'Catalina Sánchez',
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
            'titulo' => 'Canción del Mar',
            'descripcion' => 'En la enigmática obra titulada "Canción del Mar", el imaginario artista Victoria Marín nos transporta a las profundidades del océano, donde el mar embravecido canta su eterna melodía. En este impresionante lienzo, las olas se alzan majestuosas, como gigantes de espuma y agua que bailan al ritmo de los vientos salvajes. Las olas, con sus crestas blancas y espumosas, rompen con fuerza contra las rocas erosionadas, enviando ráfagas de sal y bruma al aire. El sonido del mar es ensordecedor, un rugido poderoso que llena el espacio y despierta los sentidos con su energía primordial. El cielo está cubierto por nubes oscuras y amenazadoras, que presagian una tormenta inminente. Los rayos de sol se filtran entre las nubes, creando destellos dorados en el agua turbulenta y pintando el paisaje con una luz mágica y efímera. En la distancia, se vislumbran siluetas borrosas de barcos pesqueros luchando contra las olas, su estructura resistiendo el embate del mar con valentía y determinación. El horizonte se pierde en la neblina, una línea difusa entre el cielo y el mar, donde el mundo conocido se encuentra con lo desconocido y lo misterioso. En "Canción del Mar", Victoria Marín captura la fuerza y la belleza del océano en todo su esplendor, invitándonos a contemplar la majestuosidad de la naturaleza y a reflexionar sobre la fragilidad y la fortaleza de la vida. Es una obra que nos recuerda la inmensidad y la grandeza del mar, así como nuestra conexión intrínseca con él, como seres que emergen de las profundidades primordiales del océano.',
            'imagen' => 'imagen_obra16.png',
            'id_usuario' => '6',
            'subcategoria_id' => '1',
            'autor' => 'Victoria Marín',
        ],

       [
            'titulo' => 'Sinfonía de Lilas',
            'descripcion' => 'En la obra titulada "Sinfonía de Lilas", el talentoso artista Sebastián Montoya nos sumerge en un jardín encantado donde las flores lilas bailan al ritmo de la brisa primaveral. En este magnífico lienzo, los tonos suaves y etéreos de las flores se mezclan armoniosamente, creando una sinfonía de color y belleza. Las lilas, con sus delicadas y fragantes flores, se alzan orgullosas hacia el cielo, sus pétalos ondulantes como faldas de bailarinas en un escenario celestial. Cada flor parece vibrar con vida propia, emanando una energía tranquila y serena que impregna el aire a su alrededor. El jardín está impregnado de un suave resplandor dorado, que se filtra entre las hojas y las flores, iluminando cada rincón con una luz cálida y acogedora. Los rayos de sol acarician suavemente los pétalos, resaltando su textura y revelando una paleta de colores que va desde el púrpura intenso hasta el blanco perlado. El aroma embriagador de las lilas llena el aire, mezclándose con el susurro de las hojas y el canto de los pájaros que revolotean entre las ramas. Es un momento de paz y armonía, donde el tiempo se detiene y el alma encuentra consuelo en la belleza efímera de la naturaleza. En "Sinfonía de Lilas", Sebastián Montoya captura la esencia misma de la primavera, celebrando la belleza y la fragilidad de la vida en todas sus formas. Es una obra que nos invita a detenernos y apreciar la magia que nos rodea, recordándonos la importancia de encontrar la belleza en los pequeños detalles y de cultivar un espíritu de gratitud y asombro ante el mundo que nos rodea.',
            'imagen' => 'imagen_obra17.png',
            'id_usuario' => '6',
            'subcategoria_id' => '1',
            'autor' => 'Sebastián Montoya',
        ],

        // ABSTRACTO
       [
            'titulo' => 'Olas Marinas',
            'descripcion' => 'En esta fascinante obra de arte abstracto, titulada "Olas Marinas", el artista desafía las convenciones tradicionales para transportarnos a un mundo de sensaciones y emociones. A través de una explosión de colores y formas, la pintura evoca la energía indomable y la belleza tumultuosa del océano. Las pinceladas enérgicas y fluidas dan vida a las olas que danzan en el lienzo, capturando la esencia misma del movimiento perpetuo del mar. Los tonos azules profundos se entrelazan con pinceladas de blanco espumoso, creando un contraste dinámico que evoca la inmensidad y la fuerza del océano. En medio de esta sinfonía de colores y formas, el espectador se sumerge en un viaje visual donde cada trazo parece narrar una historia única. La abstracción permite interpretaciones infinitas, invitando a cada observador a explorar sus propias emociones y experiencias frente al lienzo. Desde la calma serena de las aguas tranquilas hasta la furia desatada de una tormenta en alta mar, "Olas Marinas" nos invita a contemplar la vastedad y la majestuosidad del océano en toda su gloria. Es una celebración de la belleza caótica y la inagotable inspiración que el mar proporciona a aquellos que se atreven a contemplarlo.',
            'imagen' => 'imagen_obra4.jpg',
            'id_usuario' => '2',
            'subcategoria_id' => '3',
            'autor' => 'Desconocido',
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

        // Iterar sobre cada obra y crearla con su respectiva imagen
        foreach ($obrasCreadas as $obra) {
            // Copiar la imagen de perfil predefinida al directorio de almacenamiento
            $rutaImagenPredefinida = public_path('assets/img/imagenesObras/' . $obra->imagen); // Ruta completa de la imagen
            $nombreImagen = time() . '_' . $obra->imagen; // Nombre único para la imagen
            $rutaDestino = storage_path('app/public/assets/img/imagenesObras/' . $nombreImagen);
            copy($rutaImagenPredefinida, $rutaDestino);
        
            // Asignar la imagen de perfil a la obra
            $obra->imagen = $nombreImagen;
            $obra->save();
        }

    }
}
