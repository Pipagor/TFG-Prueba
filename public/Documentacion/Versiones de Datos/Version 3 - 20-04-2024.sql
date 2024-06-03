-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2024 a las 19:56:17
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tfg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `requisitos` varchar(999) NOT NULL,
  `competencias` varchar(999) NOT NULL,
  `salvaciones` varchar(999) NOT NULL,
  `habilidades_aelegir` varchar(999) NOT NULL,
  `puntos_de_golpe` varchar(100) NOT NULL,
  `equipamiento` varchar(999) NOT NULL,
  `autor` varchar(350) NOT NULL,
  `validado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `nombre`, `requisitos`, `competencias`, `salvaciones`, `habilidades_aelegir`, `puntos_de_golpe`, `equipamiento`, `autor`, `validado`) VALUES
(1, 'Guerrero', 'Ninguno', 'Armadura: Todas y Escudos\nArmas Simples y 3 Complejas\nElección: 4 Complejas o A Distancia adicionales ó 1 Con Truco\nHerramientas: Reparación', 'Fuerza y Constitución', '2 a elegir entre: Acrobacias, Trato con Animales, Atletismo, Historia, Perspicacia, Intimidación, Percepción, Supervivencia', '1d10', '1 Armadura inicial a tu elección\nCualquier Arma ó 1 Arma Ligera + Escudo\n2 Hachas de mano ó Ballesta ligera + 20 virotes\nHerramientas de Reparación ó Kit de Saqueador/Explorador', 'Clash of Fates', 1),
(2, 'Mago', 'Ninguno', 'Armaduras: Ninguna\nArmas: Bastón, Daga, Ballesta Ligera, Dardos y Honda\nHerramientas: Ninguna', 'Inteligencia y Sabiduría', '2 a elegir entre: Arcano, Historia, Investigación, Medicina, Perspicacia y Religión.', '1d6', 'Grimorio\nBastón o 2 Dagas\nBallesta Ligera + 20 Virotes o 2 pergaminos', 'Clash of Fates', 1),
(3, 'Artista', 'Ninguno', 'Armadura: Armadura Ligera, Rodela\nArmas: Simples y 1 Compleja\nHerramientas: Ninguna', 'Destreza y Carisma', '3 a elegir entre: Historia, Trato con Animales, Perspicacia, Persuasión, Religión, Engaño, Interpretación, Percepción.', '1d8', 'Instrumento o 10 de plata\nArma Compleja o 2 Dagas\nArmadura de Cuero o Rodela', 'Clash of Fates', 1),
(4, 'Cultista', 'Realizar un pacto, dicho pacto decidirá tu subclase', 'Armadura: Armadura Ligera, Armadura Media, Rodelas, Escudos, Escudo de Torre.\r\nArmas: Simples y 2 Complejas.\r\nHerramientas: Ninguna.', 'Sabiduría y Carisma', '2 a elegir entre: Historia, Medicina, Perspicacia, Persuasión y Religión.', '1d8', 'Escudo, Símbolo Sagrado\r\nMaza o Martillo de Guerra\r\nCota de Escamas o Armadura de Cuero\r\nBallesta Ligera + 20 virotes 0 1 Arma Simple\r\nEquipo de Sacerdote o Equipo de Explorador.', 'Clash of Fates', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dotes`
--

CREATE TABLE `dotes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripción` varchar(999) NOT NULL,
  `requisitos` varchar(100) DEFAULT NULL,
  `beneficios` varchar(200) DEFAULT NULL,
  `validado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidades`
--

CREATE TABLE `habilidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripción` varchar(9999) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `validado` tinyint(1) NOT NULL,
  `origen_id` varchar(255) NOT NULL,
  `origen_nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `habilidades`
--

INSERT INTO `habilidades` (`id`, `nombre`, `descripción`, `autor`, `validado`, `origen_id`, `origen_nivel`) VALUES
(1, 'Ciudadano de República', 'Tienes +1 a las tiradas de Perspicacia e Investigación, además, tienes competencia en una de esas dos habilidades a tu elección.', 'Clash of Fates', 1, 'trasfondo_1', 0),
(2, 'Ciudadano de Hanafu', 'Tienes -1 a las tiradas de Perspicacia y Engaño pero tienes competencia con Investigación y +1 a Persuasión.', 'Clash of Fates', 1, 'trasfondo_2', 0),
(3, 'Ciudadano de Orsfon', 'Elige una aspiración:\nAquellos que Mandan: Perteneces o quieres pertenecer al\nselecto grupo de personas que toman las decisiones.\nTienes +2 en las tiradas de Persuasión e Intimidación y -1\na las tiradas de Historia y Religión.\nAquellos que Obedecen: Perteneces o quieres pertenecer\nal grupo de los que siguen ordenes.\nTienes +2 a todas las tiradas de habilidad de Carisma,\nDestreza o Fuerza si recibes ayuda en dicha tirada.', 'Clash of Fates', 1, 'trasfondo_3', 0),
(4, 'Ciudadano de Sylfaria', 'Tienes +1 a tus tiradas de Arcana, Supervivencia y Trato con Animales.', 'Clash of Fates', 1, 'trasfondo_4', 0),
(5, 'Ciudadano de Pheros', 'Tienes +3 a las tiradas de Religión e Historia relacionadas con Pheros y +1 a las tiradas de Religión de otras culturas.', 'Clash of Fates', 1, 'trasfondo_5', 0),
(6, 'Ciudadano de Ormius', 'Tienes +2 a las tiradas relacionadas con la creación de objetos.', 'Clash of Fates', 1, 'trasfondo_6', 0),
(7, 'Ojo de Comerciante', 'Puedes saber el precio exacto de cada artículo, además, tienes ventaja en las tiradas de Perspicacia (Insight) para saber si te están timando.', 'Clash of Fates', 1, 'trasfondo_7', 0),
(8, 'Convencer a la clientela', 'Cuando vendas un producto puedes realizar una tirada de Persuasión, en función del resultado añadirás valor adicional a tu venta.\r\nResultado 8-10: 1d6 Monedas de Cobre.\r\nResultado 11-13: 3d6 Monedas de Cobre.\r\nResultado 14-15: 3d8 Monedas de Cobre.\r\nResultado 16-18: 1d4 Monedas de Plata.\r\nResultado 19-23: 1d8 Monedas de Plata.\r\nResultado 24+: 1 Moneda de Oro.', 'Clash of Fates', 1, 'trasfondo_7', 0),
(9, 'Peletería', 'Puedes extraer pieles de los monstruos y criaturas, puedes usar esas pieles para crear distintos objetos.\r\nTira 1d4 por tamaño de criatura.', 'Clash of Fates', 1, 'trasfondo_8', 0),
(10, 'Mano talentosa', 'Utilizando pieles puedes fabricar ciertos objetos:\r\nPiel de Monstruo: Bolsita de Piel.\r\nPiel de Monstruo x2: Piel Curtida.\r\nPiel Curtida x3: Mochila Ligera.\r\nPiel Curtida x5: Armadura de Cuero.\r\nPiel Curtida x2: Cuero Improvisado.\r\nCuero Improvisado: Parche de Armadura.\r\nCuero Improvisado x3: Mochila Mediana.\r\nAdicionalmente, puedes usar tu creatividad con las pieles para crear diferentes artículos a tu conveniencia.\r\nLos artículos creados con Pieles de Monstruo no pueden ser encantados. Los creados con Pieles Curtidas pueden ser encantados con efectos mágicos de nivel 1. Los creados con Cuero Improvisado pueden ser encantados con efectos mágicos de nivel 2.', 'Clash of Fates', 1, 'trasfondo_8', 0),
(11, 'Vida de Batalla', 'Has dedicado tu vida a la batalla, tus instintos te permiten estar alerta y concentrado en la batalla, una vez por descanso largo puedes tener ventaja en las tiradas para aguantar la concentración hasta el final del turno y no puedes ser sorprendido.', 'Clash of Fates', 1, 'trasfondo_9', 0),
(12, 'Destreza con Armas', 'Ganas competencia con 2 armas a tu elección que no sean Armas con Truco, además, el daño que causas con armas aumenta 1d4.\r\n', 'Clash of Fates', 1, 'trasfondo_9', 0),
(13, 'Manos Hábiles Multiusos', 'Puedes usar distintos materiales para confeccionar objetos varios de una calidad básica.\r\nPuedes fabricar objetos de hasta nivel 3 utilizando cualquier material y herramienta a tu disposición.', 'Clash of Fates', 1, 'trasfondo_10', 0),
(14, 'Aprendizaje', 'Puedes aprender a fabricar un objeto tras un descanso largo utilizado para su investigación y prototipo.', 'Clash of Fates', 1, 'trasfondo_10', 0),
(15, 'Caminante', 'Has recorrido muchos caminos y conoces atajos y formas de viaje más eficientes.\r\nMientras viajas, si lideras la marcha, tu grupo podrá realizar 4 acciones de día en vez de 3 consumiendo las mismas raciones.', 'Clash of Fates', 1, 'trasfondo_11', 0),
(16, 'Viaje Ameno', 'Si lideras la marcha, la velocidad de viaje de tu grupo aumenta en 5 si vas caminando o en 10 si vas en un vehículo.', 'Clash of Fates', 1, 'trasfondo_11', 0),
(17, 'Orientación', 'Si te pierdes o no sabes que camino tomar puedes realizar tiradas de Orientación, es una habilidad única del Viajero, suma tu Competencia + Sabiduría + Inteligencia.', 'Clash of Fates', 1, 'trasfondo_11', 0),
(18, 'Materiales Improvisados', 'Puedes crear tus propios lienzos y pinturas utilizando pigmentos de la naturaleza.\r\nUtilizando 2 Pergaminos podrás crear un Lienzo, usando flores podrás crear pinturas, en función de la rareza de la flor añadirá cierto modificador a tus tiradas de Dibujar.', 'Clash of Fates', 1, 'trasfondo_12', 0),
(19, 'Calidad de Arte', 'Tus pinturas tienen cierta calidad, dicha calidad les confiere un valor tanto económico como mágico.\r\nLas pinturas de calidad Desastrosa y Mediocre apenas valen unas monedas de plata y se consideran objetos de nivel 1.\r\nLas pinturas de calidad Normal y Aceptable valen una cantidad aceptable de monedas de plata y se consideran objetos de nivel 2.\r\nLas pinturas de calidad Buena y Excelente pueden llegar a alcanzar unas monedas de oro y se consideran objetos de nivel 3.\r\nLas Obras Maestras tienen un gran valor en oro y se consideran objetos de nivel 4.', 'Clash of Fates', 1, 'trasfondo_12', 0),
(20, 'Plasmar en Pintura', 'Puedes crear magníficas obras de arte basándote en tu imaginación o en referencias que hayas visto.\r\nDurante un Descanso, puedes usar una de tus acciones de día para crear una pintura, realiza una tirada de Dibujar, es una habilidad única del Pintor, suma tu Competencia + Carisma + Destreza.\r\nEl resultado de tu tirada define la calidad de tu obra:\r\nResultado 7-: Desastroso. (Las Pifias siempre son Desastrosas)\r\nResultado 8-12: Mediocre.\r\nResultado 13-14: Normal.\r\nResultado 15-17: Aceptable.\r\nResultado 17-21: Buena.\r\nResultado 22-28: Excelente.\r\nResultado 29+: Obra Maestra. (Un Crítico es siempre Obra Maestra)', 'Clash of Fates', 1, 'trasfondo_12', 0),
(21, 'Raciones Duraderas', 'Siempre que tu grupo realice un Descanso y comáis, puedes tirar 1d6 por cada integrante del grupo, por cada 5 ó 6 obtienes una ración de Restos.\r\n(No puedes usar esta habilidad sobre una ración de Restos)', 'Clash of Fates', 1, 'trasfondo_13', 0),
(22, 'Comida para todos', 'Cuando tu grupo realice un Descanso y comáis, puedes compartir tu comida con un integrante del grupo, ambos os saciaréis pero no podrás utilizar Raciones duraderas.', 'Clash of Fates', 1, 'trasfondo_13', 0),
(23, 'Cocinar', 'Puedes utilizar 1 hora para realizar una receta utilizando instrucciones e ingredientes de tu recetario.\r\nPara indicar la calidad de la comida realiza una tirada de Cocina, es una habilidad única del Cocinero, suma tu Competencia + Destreza + Sabiduría.\r\n(Consulta todo sobre las recetas en el Manual de Cocina.)', 'Clash of Fates', 1, 'trasfondo_13', 0),
(24, 'Dosificar', 'Puedes utilizar 1 hora para extraer las cantidades justas de una poción para maximizar sus usos, elige una poción y tira 1d2+1, podrás dividir la poción en un número de Viales igual al resultado.', 'Clash of Fates', 1, 'trasfondo_14', 0),
(25, 'Elaborar Pociones', 'Puedes utilizar 1 hora para realizar una poción o ungüento utilizando instrucciones e ingredientes de tu recetario.\r\nPara superar la dificultad de la receta realiza una tirada de Herbolaria, es una habilidad única del Herborista, suma tu Competencia + Constitución + Sabiduría.\r\n(Consulta todo sobre las recetas en el Manual de Herborista.)', 'Clash of Fates', 1, 'trasfondo_14', 0),
(26, 'Versatilidad', 'Eres competente con 3 armas a tu elección y un tipo de armadura a tu elección.', 'Clash of Fates', 1, 'razas_1', 0),
(27, 'Maestro de Armas', 'El daño que causas con armas aumenta en función a tu nivel.\r\nNivel 1: +1d2\r\nNivel 4: +1d4\r\nNivel 9: +1d6\r\nNivel 16: +2d4', 'Clash of Fates', 1, 'razas_1', 0),
(28, 'Código de Honor', 'Aquellas criaturas (o razas) que hayan causado un impacto negativo en ti o que se hayan declarado tus enemigos son considerados tus enemigos de honor.\r\nContra tus enemigos de honor obtienes +1 a tus tiradas de ataque y daño, además, doblas tu competencia en las tiradas de Intimidación, Perspicacia y Percepción hechas contra tus enemigos de honor.', 'Clash of Fates', 1, 'subrazas_1', 0),
(29, 'Represalia', 'Cuando hayas visto a un aliado ser asesinado o derribado potencialmente por un enemigo, puedes proclamarlo tu enemigo de honor.\r\nTambién, hasta que termine la batalla obtienes 1d4 adicional a las tiradas de ataque realizadas contra ese enemigo.', 'Clash of Fates', 1, 'subrazas_1', 0),
(30, 'Resistencia Adversa', 'El terreno difícil solo reduce en 5ft tu movilidad, además, tienes ventaja en las tiradas de Salvación que fueran a causarte daño de frío o fuego.', 'Clash of Fates', 1, 'subrazas_2', 0),
(31, 'Forzar el Límite', 'Cuando falles una tirada de cualquier tipo puedes obtener un punto de cansancio y tirar 1d20 adicional en esa tirada.', 'Clash of Fates', 1, 'subrazas_2', 0),
(32, 'Labia Inherente', 'Eres diestro en palabras, obtienes competencia en Persuasión, además, si ayudas a un aliado en una tirada de Persuasión o Engaño, sumas a su tirada tu bonificador de competencia.', 'Clash of Fates', 1, 'subrazas_3', 0),
(33, 'Regateo', 'Cuando compres o vendas puedes realizar una tirada de Persuasión para intentar sacar algo más de la transacción, tu GM decidirá la dificultad y recompensa.', 'Clash of Fates', 1, 'subrazas_3', 0),
(34, 'Tomar Aliento', 'Una vez por descanso corto, puedes usar tu acción adicional para recuperar 1d10+Nivel PG', 'Clash of Fates', 1, 'clases_1', 1),
(35, 'Estilo de Batalla', 'Una vez por descanso corto, puedes usar tu acción adicional para recuperar 1d10+Nivel PG\r\nElige un estilo de combate:\r\nMayor Puntería: Obtienes +1 a las tiradas de ataque hechas con armas a distancia y competencia con un Arma a Distancia a tu elección.\r\nDefensivo: Si llevas armadura obtienes +1 a tu CA.\r\nDuelista: Si blandes un arma cuerpo a cuerpo en una mano y ninguna otra arma, ganas +2 a las tiradas de daño con ese arma.\r\nLuchador Pesado: Cuando saques un 1 o 2 en una tirada de daño hecha por un arma cuerpo a cuerpo que lleves a dos manos, puedes volver a tirar el dado, debes usar la nueva tirada incluso si es un 1 o 2. El arma debe tener la propiedad A dos manos o versátil para ganar este beneficio.\r\nProtector: Cuando una criatura que puedas ver ataca a otra a 5ft o menos de ti, puedes usar tu reacción para dar desventaja al ataque. Debes llevar escudo para ello.\r\nLuchador Dual: Cuando te involucras en una pelea con dos armas, puedes añadir tu modificador de característica al dañ', 'Clash of Fates', 1, 'clases_1', 1),
(36, 'Acción Súbita', 'Durante tu turno, puedes llevar a cabo una acción extra junto a tu conjunto de acciones natural.\r\nNivel 2: Podrás usarlo 1 vez por descanso corto.\r\nNivel 17: Podrás usarlo 2 veces por descanso corto. ', 'Clash of Fates', 1, 'clases_1', 2),
(37, 'Multiataque', 'A partir de nivel 5, cuando uses tu acción para atacar puedes dar 2 golpes.\r\nA partir de nivel 11, 3 golpes.\r\nA partir de nivel 20, 4 golpes.', 'Clash of Fates.', 1, 'clases_1', 5),
(38, 'Indómito', 'Puedes repetir una tirada de Salvación que hayas fallado, pero tendrás que quedarte con la nueva tirada.\r\nNivel 9: Puedes usarlo 1 vez por descanso corto.\r\nNivel 13: Puedes usarlo 2 veces por descanso corto.\r\nNivel 17: Puedes usarlo 3 veces por descanso corto.', 'Clash of Fates', 1, 'clases_1', 9),
(39, 'Visión de la Batalla', 'Obtienes competencia con Percepción, y si ya la tuvieras eres experto.\r\nAdemás, puedes conocer una vez cada hora como acción gratuita o como reacción, realizando una tirada de Percepción (CD 20-Competencia), la movilidad de un objetivo.', 'Clash of Fates', 1, 'subclases_1', 3),
(40, 'Tácticas de Batalla', 'Aprendes diferentes tácticas que puedes usar en batalla, puedes usarlas como reacción si se dan las condiciones tantas veces como el doble de tu bonificador de Inteligencia.\nobtienes 3 tácticas a nivel 3 y una más a tu elección por nivel hasta alcanzar el nivel 8.\nRetirada: Puedes hacer que un aliado a 15ft o menos de ti y a 5ft de un enemigo se desplace a tu lado sin generar ataques de oportunidad.\nPinza: Si un enemigo se encuentra entre 10ft y 20ft de ti en línea recta y tienes a dos aliados entre 10ft y 15ft de él también en línea recta, puedes hacer que ambos se desplacen hacia él, si se estaba moviendo detienes su movilidad.\nGuía: Si un aliado a 10ft o menos de ti dispara con un arma a distancia a un objetivo que puedas ver, nunca tendrá desventaja en su tirada e ignorará coberturas medias.\nFlanqueo a Distancia: Si te encuentras a 5ft de un objetivo y otro aliado va a disparar con un arma a distancia a ese objetivo, contará como flanqueo si te encuentras en línea con él.\nTajo Cruzado: Si dos aliados (o un aliado y tú) están a 25ft o menos el uno del otro y en medio de la línea que forman hay un objetivo, puedes hacer que ambos se desplacen hacia el objetivo y realicen una tirada de ataque conjunta contra él, sumando la Destreza de ambos aliados. Si el ataque acierta causará el daño conjunto de las dos armas.\nPaliza: Si un enemigo que puedas ver a 50ft o menos de ti está siendo flanqueado por 4 aliados, esos aliados tendrán un ataque adicional contra ese objetivo, además, su Índice de Crítico se reduce en 1 con ese ataque adicional.\nOpresión: Si un aliado que puedas ver a 40ft o menos de ti tiene a un enemigo a 5ft, ese enemigo no puede usar reacciones ni desplazarse fuera del rango de tu aliado hasta el final de su próximo turno. (Si tu aliado sale del rango del enemigo sí podrá usar su reacción para hacer un ataque de oportunidad)\nCarrera: Si un aliado que puedas ver (o tú mismo) utiliza su acción para correr, puedes hacer que al terminar su movimiento pueda realizar un ataque con arma sin perder su bonificador de competencia.', 'Clash of Fates', 1, 'subclases_1', 3),
(41, 'Liderazgo', 'Puedes, como acción adicional o reacción, tantas veces como tu bonificador de Inteligencia (Mínimo 1) por combate, otorgar a un aliado a tu elección que puedas ver un bonificador a su próxima tirada de ataque igual a tu bonificador de Competencia.', 'Clash of Fates', 1, 'subclases_1', 7),
(42, 'Coordinador', 'Cuando utilices una Táctica de Batalla, todos los aliados involucrados reciben el bonificador de Liderazgo.\r\nAdemás, puedes estar en la misma casilla que tus aliados si son de tu tamaño o inferior, pero si tu aliado es atacado recibirás el mismo ataque, repartiendo el daño entre los acertados (excepto para ataques con efecto de área).\r\nAl final de tu turno, si no has usado tu acción para atacar, obtienes tantas reacciones adicionales como golpes adicionales des por tu multiataque, puedes usar esas reacciones hasta el comienzo de tu próximo turno.', 'Clash of Fates', 1, 'subclases_1', 10),
(43, 'Mandato', 'Usando tu acción, 2 veces por descanso corto, puedes hacer que una criatura siga tus órdenes voluntariamente, podrás realizar un turno completo con esa criatura utilizando las acciones que conozcas sobre esa criatura, la criatura obtiene el bonificador de Liderazgo.', 'Clash of Fates', 1, 'subclases_1', 15),
(44, 'Flujo de la Batalla', '1 vez por descanso largo, cuando uses una Táctica de Batalla, puedes hacer que tus todos los aliados involucrados en la Táctica obtengan una acción, acción adicional y reacción extra durante su próximo turno.', 'Clash of Fates', 1, 'subclases_1', 18),
(45, 'Crisálida Vítrea', 'Usando 5 minutos, puedes crear una crisálida de cristal del tamaño de una mano, dentro de ella podrás introducir cualquier objeto, al pasar 1 hora nacerá un Insecto Vítreo con fragmentos cristalinos por su cuerpo, dicho insecto vivirá durante 10 minutos.\r\nPuedes tener tantas Crisálidas Vítreas en gestación como tu Nivel de Pacto.', 'Clash of Fates', 1, 'pactos_1', 1),
(46, 'Familiar Cristalino', 'Puedes vincularte con un Insecto Vítreo para tomarlo como familiar, los efectos del insecto son variables.\r\nSi el familiar muere se destruye en incontables fragmentos de cristal.', 'Clash of Fates', 1, 'pactos_1', 2),
(47, 'Alas de Polilla', 'Tantas veces al día como tu nivel de pacto, puedes usar este rasgo para impulsar tu movilidad o salto 25ft, sin generar ataques de oportunidad.', 'Clash of Fates', 1, 'pactos_1', 3),
(48, 'Afinidad Lunar', 'Tu Familiar Cristalino duplica su daño a la luz de la luna, además, en luna llena, cuando lances un hechizo tira 1d10, si sale 8 o superior no gastas hueco de hechizo.', 'Clash of Fates', 1, 'pactos_1', 4),
(49, 'Reinado Neóptero', 'Una vez al día, gastando tu turno, puedes invocar un Hijo de Vitria, dura invocado 5 minutos y al morir se destruye en cristales.\r\nAl obtener este rasgo elige uno de los dos Hijos de Vitria  siguientes: Mariposa de Cristal y Escarabajo de Cristal\r\nCada 35 insectos enviados a partir de obtener este rasgo obtienes una nueva posibilidad de invocación.', 'Clash of Fates', 1, 'pactos_1', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hechizos`
--

CREATE TABLE `hechizos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripción` varchar(999) NOT NULL,
  `nivel` int(11) NOT NULL,
  `escuela` varchar(100) NOT NULL,
  `tiempo_de_ejecución` varchar(100) NOT NULL,
  `rango` int(11) NOT NULL,
  `componentes` varchar(999) NOT NULL,
  `validado` tinyint(1) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `duración` varchar(100) NOT NULL,
  `zona_efecto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `hechizos`
--

INSERT INTO `hechizos` (`id`, `nombre`, `descripción`, `nivel`, `escuela`, `tiempo_de_ejecución`, `rango`, `componentes`, `validado`, `autor`, `duración`, `zona_efecto`) VALUES
(1, 'Sentimiento Dudoso', 'Generas dudas sobre una criatura objetivo que puedas ver a\r\n30ft o menos de ti, esa criatura se replantea su próxima\r\nacción, pues ahora no está segura de si debe o no realizarla.\r\nEsa criatura deberá realizar una tirada de Salvación de\r\nSabiduría (CD Conjuros), si falla, no sumará su bonificador\r\nde competencia en la próxima tirada de ataque o habilidad\r\nque realice.', 0, 'Encantamiento', '1 acción adicional', 30, 'V', 1, 'Clash of Fates', 'instantáneo', 'Una criatura'),
(2, 'Frío de Aura', 'Una criatura que puedas ver a 30ft o menos de ti recibe 1d6 de daño de Frío, después, debe hacer una Salvación de Constitución, si falla recibirá un Punto de Escarcha y 1d6 por cada Punto de Escarcha sobre ella o a 5ft de ella.', 1, 'Evocación', '1 acción', 30, 'V S M', 1, 'Clash of Fates', 'instantáneo', 'Una criatura'),
(3, 'Soledad de Aura', 'Durante 1 minuto, los Puntos de Escarcha a 40ft o menos de ti se cargan de la soledad que experimentó Aura, desde ese momento, todas las criaturas que pasen por un Punto de Escarcha afectado deben hacer una Salvación de Carisma, si fallan soltarán lo que lleven y se moverán hasta salir de la escarcha, incluso si ya han superado su movilidad.', 1, 'Encantamiento', '1 acción', 40, 'V S M', 1, 'Clash of Fates', '1 minuto', 'Área');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_hechizos`
--

CREATE TABLE `lista_hechizos` (
  `id` int(11) NOT NULL,
  `clase_id_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_hechizos_hechizos`
--

CREATE TABLE `lista_hechizos_hechizos` (
  `lista_hechizos_id` int(11) NOT NULL,
  `hechizos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pactos`
--

CREATE TABLE `pactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripción` varchar(999) NOT NULL,
  `nivel_1` int(11) NOT NULL,
  `nivel_2` int(11) NOT NULL,
  `nivel_3` int(11) NOT NULL,
  `nivel_4` int(11) NOT NULL,
  `nivel_5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pactos`
--

INSERT INTO `pactos` (`id`, `nombre`, `descripción`, `nivel_1`, `nivel_2`, `nivel_3`, `nivel_4`, `nivel_5`) VALUES
(1, 'Pacto de Vitria', 'Vitria es una deidad infantil y juguetona, ama los insectos.\r\nPara mostrar tu devoción a ella debes realizar un ritual de Envío de Insectos\r\n(Pronunciar unas oraciones bajo el símbolo de una mariposa).', 1, 10, 18, 35, 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razas`
--

CREATE TABLE `razas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripción` varchar(999) NOT NULL,
  `fuerza` int(11) NOT NULL,
  `destreza` int(11) NOT NULL,
  `constitución` int(11) NOT NULL,
  `inteligencia` int(11) NOT NULL,
  `sabiduría` int(11) NOT NULL,
  `carisma` int(11) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `velocidad` int(11) NOT NULL,
  `ataque_desarmado` varchar(999) NOT NULL,
  `validado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `razas`
--

INSERT INTO `razas` (`id`, `nombre`, `descripción`, `fuerza`, `destreza`, `constitución`, `inteligencia`, `sabiduría`, `carisma`, `autor`, `velocidad`, `ataque_desarmado`, `validado`) VALUES
(1, 'Humano', 'Raza creada por Athenii, Dios Rúnico de la Batalla.\r\nSon la especie predominante del continente, hábiles maestros de la batalla, saben adaptarse a cualquier conflicto y normalmente los usan a su propio beneficio.', 1, 1, 1, 1, -1, 0, 'Clash of Fates', 30, 'Golpe: 1d4 (Contundente, Fuerza)', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subclases`
--

CREATE TABLE `subclases` (
  `id` int(11) NOT NULL,
  `clase_id_id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `requisitos` varchar(999) DEFAULT NULL,
  `autor` varchar(200) NOT NULL,
  `validado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subclases`
--

INSERT INTO `subclases` (`id`, `clase_id_id`, `nombre`, `requisitos`, `autor`, `validado`) VALUES
(1, 1, 'Estratega', 'Puntuación de Inteligencia de 12 o superior.', 'Clash of Fates', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subrazas`
--

CREATE TABLE `subrazas` (
  `id` int(11) NOT NULL,
  `raza_id_id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripción` varchar(999) NOT NULL,
  `fuerza` int(11) NOT NULL,
  `destreza` int(11) NOT NULL,
  `constitución` int(11) NOT NULL,
  `inteligencia` int(11) NOT NULL,
  `sabiduría` int(11) NOT NULL,
  `carisma` int(11) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `ataque_desarmado` varchar(999) NOT NULL,
  `validado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subrazas`
--

INSERT INTO `subrazas` (`id`, `raza_id_id`, `nombre`, `descripción`, `fuerza`, `destreza`, `constitución`, `inteligencia`, `sabiduría`, `carisma`, `autor`, `ataque_desarmado`, `validado`) VALUES
(1, 1, 'Oriental', 'Humanos de rasgos orientales, piel blanca, pelo de tonalidades negras y ojos generalmente rasgados.\r\nViven en lo que se conoce como Imperio de Hanafu y sus proximidades, no son muy abiertos por lo que no aceptan a según que razas.\r\nCreen en el honor como estilo de vida y lo llevan al límite en sus costumbres.', 1, 0, 0, 0, 0, 0, 'Clash of Fates', 'Golpe: 1d4 (Contundente, Fuerza)', 1),
(2, 1, 'Desértico', 'Humanos que habitan principalmente el Imperio de Pheros, de piel oscura y constitución fuerte.\r\nEstán acostumbrados a las extremas temperaturas del desierto y a caminar por sus dunas, hacen lo que sea por su supervivencia.', 0, 0, 1, -1, 0, 0, 'Clash of Fates', 'Golpe: 1d4 (Contundente, Fuerza)\r\n', 1),
(3, 1, 'Continental', 'Humanos de piel blanca o morena, habitan la mayor parte del Continente de Deitia, desde el Reino de Orsfon hasta República, son persuasivos y tienden al engaño.', 0, 0, -1, 0, 0, 1, 'Clash of Fates', 'Golpe: 1d4 (Contundente, Fuerza)\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trasfondo`
--

CREATE TABLE `trasfondo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripción` varchar(999) NOT NULL,
  `origen` tinyint(1) NOT NULL,
  `idiomas` varchar(999) DEFAULT NULL,
  `objetos_iniciales` varchar(999) DEFAULT NULL,
  `competencias` varchar(999) DEFAULT NULL,
  `validado` tinyint(1) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `plano` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `trasfondo`
--

INSERT INTO `trasfondo` (`id`, `nombre`, `descripción`, `origen`, `idiomas`, `objetos_iniciales`, `competencias`, `validado`, `autor`, `plano`) VALUES
(1, 'República', 'Como ciudadano habituado a República has desarrollado una mente más abierta y no te\r\ncontentas con cualquier información sin contrastar.', 1, 'Común y uno a tu elección entre: Orsfon, Élfico y Hanafu.', NULL, NULL, 1, 'Clash of Fates', 'Synfol'),
(2, 'Hanafu', 'Como ciudadano habituado a Hanafu te tomas las normas y el honor muy en serio.', 1, 'Común, Hanafu y uno a tu elección entre: Elfico y Nooru.', NULL, NULL, 1, 'Clash of Fates', 'Synfol'),
(3, 'Orsfon', 'Como ciudadano habituado a Orsfon crees que todo debe seguir las órdenes de alguien, así que crees que hay dos tipos de personas, las que mandan y las que obedecen.', 1, 'Común, Orsfon y uno a tu elección entre: Hanafu, Elfico y Nooru.', NULL, NULL, 1, 'Clash of Fates', 'Synfol'),
(4, 'Sylfaria', 'Como ciudadano habituado a Sylfaria tienes una profunda conexión con la magia y la naturaleza.', 1, 'Común, Elfico y Nooru.', NULL, NULL, 1, 'Clash of Fates', 'Synfol'),
(5, 'Pheros', 'Como ciudadano habituado a Pheros valoras tus costumbres y culto a las diferentes deidades protectoras.', 1, 'Común, Pheros.', NULL, NULL, 1, 'Clash of Fates', 'Synfol'),
(6, 'Ormius', 'Como ciudadano de Ormius eres muy tradicional y artesano.', 1, 'Común, Ormius, y uno a tu elección entre: Trasgo y Draconido.', NULL, NULL, 1, 'Clash of Fates', 'Synfol'),
(7, 'Mercader', 'Te dedicaste a comerciar objetos', 0, NULL, '8 monedas de oro, 1d4 gemas de valor de 5 de oro, un arma o escudo a tu elección, una balanza y 20 raciones.', 'Perspicacia y Persuasión.', 1, 'Clash of Fates', NULL),
(8, 'Sastre', 'Trabajas con las pieles', 0, NULL, '3 monedas de oro, 2d4 Pieles de Monstruo, herramientas de sastre, una daga y 10 raciones.\r\n', 'Juego de Manos.', 1, 'Clash of Fates', NULL),
(9, 'Soldado', 'Luchaste en batallas', 0, NULL, '5 monedas de oro, 1 arma simple a tu elección y 10 raciones.', 'Supervivencia.', 1, 'Clash of Fates', NULL),
(10, 'Artesano', 'Eres un especialista en hacer de todo', 0, NULL, '6 monedas de oro, 3 kits de herramientas a tu elección y 10 raciones.\r\n', 'Juego de Manos', 1, 'Clash of Fates', NULL),
(11, 'Viajero', 'Te dedicas a viajar mucho', 0, NULL, '2 monedas de oro, un mapa del Continente o Carta Náutica, 20 raciones y un caballo.', 'Supervivencia y Naturaleza.', 1, 'Clash of Fates', NULL),
(12, 'Pintor', 'Te dedicas a la pintura', 0, NULL, '5 monedas de oro, 10 Lienzos, Herramientas de Pintor, 6 raciones.', 'Elige 3 entre: Naturaleza, Religión, Interpretación, Persuasión, Juego de Manos.', 1, 'Clash of Fates', NULL),
(13, 'Cocinero', 'Te dedicas a la elaboración de platos en cocinas', 0, NULL, '5 monedas de oro, 20 Raciones, Herramientas de Cocinero, Recetario.', 'Elige 2 entre: Naturaleza, Historia, Investigación, Medicina, y Juego de Manos.', 1, 'Clash of Fates', NULL),
(14, 'Herborista', 'Trabajas con hierbas medicinales', 0, NULL, '6 monedas de oro, 10 Raciones, Herramientas de Herborista, Recetario.', 'Elige 2 entre: Naturaleza, Historia, Investigación, Medicina, y Juego de Manos.', 1, 'Clash of Fates', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `password`) VALUES
(1, 'Prueba', '[]', '$2y$13$TR1rMuuFmXzFrEf7l.uZeeN6ktgWHAq1ai1sLp9yVkB3I7WJPYVfm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dotes`
--
ALTER TABLE `dotes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hechizos`
--
ALTER TABLE `hechizos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista_hechizos`
--
ALTER TABLE `lista_hechizos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B997BF3C9D9D1695` (`clase_id_id`);

--
-- Indices de la tabla `lista_hechizos_hechizos`
--
ALTER TABLE `lista_hechizos_hechizos`
  ADD PRIMARY KEY (`lista_hechizos_id`,`hechizos_id`),
  ADD KEY `IDX_5218FC1E46066DED` (`lista_hechizos_id`),
  ADD KEY `IDX_5218FC1E9FC1DB97` (`hechizos_id`);

--
-- Indices de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indices de la tabla `pactos`
--
ALTER TABLE `pactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `razas`
--
ALTER TABLE `razas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subclases`
--
ALTER TABLE `subclases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1B737359D9D1695` (`clase_id_id`);

--
-- Indices de la tabla `subrazas`
--
ALTER TABLE `subrazas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5095ACE8EC1B155` (`raza_id_id`);

--
-- Indices de la tabla `trasfondo`
--
ALTER TABLE `trasfondo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_IDENTIFIER_USERNAME` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `dotes`
--
ALTER TABLE `dotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `hechizos`
--
ALTER TABLE `hechizos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `lista_hechizos`
--
ALTER TABLE `lista_hechizos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pactos`
--
ALTER TABLE `pactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `razas`
--
ALTER TABLE `razas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `subclases`
--
ALTER TABLE `subclases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `subrazas`
--
ALTER TABLE `subrazas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `trasfondo`
--
ALTER TABLE `trasfondo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lista_hechizos`
--
ALTER TABLE `lista_hechizos`
  ADD CONSTRAINT `FK_B997BF3C9D9D1695` FOREIGN KEY (`clase_id_id`) REFERENCES `clases` (`id`);

--
-- Filtros para la tabla `lista_hechizos_hechizos`
--
ALTER TABLE `lista_hechizos_hechizos`
  ADD CONSTRAINT `FK_5218FC1E46066DED` FOREIGN KEY (`lista_hechizos_id`) REFERENCES `lista_hechizos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5218FC1E9FC1DB97` FOREIGN KEY (`hechizos_id`) REFERENCES `hechizos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `subclases`
--
ALTER TABLE `subclases`
  ADD CONSTRAINT `FK_1B737359D9D1695` FOREIGN KEY (`clase_id_id`) REFERENCES `clases` (`id`);

--
-- Filtros para la tabla `subrazas`
--
ALTER TABLE `subrazas`
  ADD CONSTRAINT `FK_5095ACE8EC1B155` FOREIGN KEY (`raza_id_id`) REFERENCES `razas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
