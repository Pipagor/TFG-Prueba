-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2024 a las 19:22:45
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
  `requisitos` varchar(2000) NOT NULL,
  `competencias` varchar(999) NOT NULL,
  `salvaciones` varchar(999) NOT NULL,
  `habilidades_aelegir` varchar(999) NOT NULL,
  `puntos_de_golpe` varchar(100) NOT NULL,
  `equipamiento` varchar(999) NOT NULL,
  `autor` varchar(350) NOT NULL,
  `validado` tinyint(1) NOT NULL,
  `img` varchar(2000) DEFAULT NULL,
  `magia` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `nombre`, `requisitos`, `competencias`, `salvaciones`, `habilidades_aelegir`, `puntos_de_golpe`, `equipamiento`, `autor`, `validado`, `img`, `magia`, `ip_address`, `created_at`) VALUES
(1, 'Guerrero', 'Ninguno', 'Armadura: Todas y Escudos\nArmas Simples y 3 Complejas\nElección: 4 Complejas o A Distancia adicionales ó 1 Con Truco\nHerramientas: Reparación', 'Fuerza y Constitución', '2 a elegir entre: Acrobacias, Trato con Animales, Atletismo, Historia, Perspicacia, Intimidación, Percepción, Supervivencia', '1d10', '1 Armadura inicial a tu elección\nCualquier Arma ó 1 Arma Ligera + Escudo\n2 Hachas de mano ó Ballesta ligera + 20 virotes\nHerramientas de Reparación ó Kit de Saqueador/Explorador', 'Clash of Fates', 1, 'https://s3-eu-west-2.amazonaws.com/dungeon20/images/561/medium-1c353fa114b17e29befb179c74cd030da806ee0c.jpg?1536946156', 1, '', NULL),
(2, 'Mago', 'Ninguno', 'Armaduras: Ninguna\nArmas: Bastón, Daga, Ballesta Ligera, Dardos y Honda\nHerramientas: Ninguna', 'Inteligencia y Sabiduría', '2 a elegir entre: Arcano, Historia, Investigación, Medicina, Perspicacia y Religión.', '1d6', 'Grimorio\nBastón o 2 Dagas\nBallesta Ligera + 20 Virotes o 2 pergaminos', 'Clash of Fates', 1, 'https://s3-eu-west-2.amazonaws.com/dungeon20/images/565/medium-47223096f79c5e30e812ea2747adc7de8f34f2c7.jpg?1536946435', 4, '', NULL),
(3, 'Artista', 'Ninguno', 'Armadura: Armadura Ligera, Rodela\nArmas: Simples y 1 Compleja\nHerramientas: Ninguna', 'Destreza y Carisma', '3 a elegir entre: Historia, Trato con Animales, Perspicacia, Persuasión, Religión, Engaño, Interpretación, Percepción.', '1d8', 'Instrumento o 10 de plata\nArma Compleja o 2 Dagas\nArmadura de Cuero o Rodela', 'Clash of Fates', 1, 'https://purepng.com/public/uploads/large/purepng.com-paint-brushbrushesbristlescleaningpaintmakeup-1421526462406sx6qy.png', 4, '', NULL),
(4, 'Cultista', 'Realizar un pacto, dicho pacto decidirá tu subclase', 'Armadura: Armadura Ligera, Armadura Media, Rodelas, Escudos, Escudo de Torre.\r\nArmas: Simples y 2 Complejas.\r\nHerramientas: Ninguna.', 'Sabiduría y Carisma', '2 a elegir entre: Historia, Medicina, Perspicacia, Persuasión y Religión.', '1d8', 'Escudo, Símbolo Sagrado\r\nMaza o Martillo de Guerra\r\nCota de Escamas o Armadura de Cuero\r\nBallesta Ligera + 20 virotes 0 1 Arma Simple\r\nEquipo de Sacerdote o Equipo de Explorador.', 'Clash of Fates', 1, 'https://s3-eu-west-2.amazonaws.com/dungeon20/images/555/medium-7fb8a5247ae92826b0ddd8977c1588da2295cea7.jpg?1536945807', 4, '', NULL),
(5, 'Explorador', 'Ninguno', 'Armadura: Armadura Ligera, Armadura Mediana, Rodela, Escudo\r\nArmas Simples, Arco Corto, Arco Largo, Ballesta Ligera, Ballesta de Mano y 1 Compleja.\r\nElección: 1 Compleja adicional ó Ballesta Pesada Herramientas: Cazador, Curtidor', 'Fuerza y Destreza', '3 A elegir entre: Atletismo, Trato Animal, Perspicacia, Investigación, Naturaleza, Percepción, Sigilo y Supervivencia', '1d10', 'Arco Largo y un carcaj de 20 Flechas\r\nCualquier Arma ó 1 Arma Ligera + Escudo\r\n2 Hachas de mano ó Ballesta ligera + 20 virotes\r\nHerramientas de Reparación ó Kit de Saqueador/Explorador', 'Clash of Fates', 1, 'https://s3-eu-west-2.amazonaws.com/dungeon20/images/559/medium-28a7a10320e76a811bd9eadca61ce9e6ab91c495.jpg?1536945924', 1, '', NULL),
(6, 'Pícaro', 'Ninguno', 'Armadura: Armadura Ligera \r\nArmas Simples, Ballesta de Mano, Katana, Arco Corto, Estoque y Espada Corta. 1 a elegir entre Arco Largo y un arma compleja.\r\nHerramientas: Herramientas de Ladrón.', 'Destreza e Inteligencia', '4 A elegir entre: Acrobacias, Atletismo, Engaño, Perspicacia, Investigación, Intimidación, Percepción, Actuación, Persuasión, Juego de Manos y Sigilo', '1d8', '1 Armadura inicial a tu elección\r\nEstoque ó Espada Corta\r\nArco corto + 20 Flechas ó Arco Largo\r\n2 Dagas y Herramientas de Ladrón', 'Clash of Fates', 1, 'https://s3-eu-west-2.amazonaws.com/dungeon20/images/571/medium-ee87ad62b458dcf28b3fcf13d8d8304def14ef4b.jpg?1536946787', 1, '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dotes`
--

CREATE TABLE `dotes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(999) NOT NULL,
  `requisitos` varchar(100) DEFAULT NULL,
  `beneficios` varchar(200) DEFAULT NULL,
  `validado` tinyint(1) NOT NULL,
  `autor` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dotes`
--

INSERT INTO `dotes` (`id`, `nombre`, `descripcion`, `requisitos`, `beneficios`, `validado`, `autor`) VALUES
(1, 'Dotes de Actor', 'Aprendiste a imitar voces y sonidos con extrema precisión.', 'Ninguno', '+1 a tu puntuación de Carisma y ventaja en las tiradas de Engaño e Interpretación.', 1, 'Clash of Fates');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidades`
--

CREATE TABLE `habilidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(9999) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `validado` tinyint(1) NOT NULL,
  `origen_id` varchar(255) NOT NULL,
  `origen_nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `habilidades`
--

INSERT INTO `habilidades` (`id`, `nombre`, `descripcion`, `autor`, `validado`, `origen_id`, `origen_nivel`) VALUES
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
(35, 'Estilo de Batalla', 'Elige un estilo de combate:{|S|}\r\n{|B|}Mayor Puntería{|/B|}{|S|}\r\nObtienes +1 a las tiradas de ataque hechas con armas a distancia y competencia con un Arma a Distancia a tu elección.{|S|}\r\n{|B|}Defensivo{|/B|}{|S|}\r\nSi llevas armadura obtienes +1 a tu CA.{|S|}\r\n{|B|}Duelista{|/B|}{|S|}\r\nSi blandes un arma cuerpo a cuerpo en una mano y ninguna otra arma, ganas +2 a las tiradas de daño con ese arma.{|S|}\r\n{|B|}Luchador Pesado{|/B|}{|S|}\r\nCuando saques un 1 o 2 en una tirada de daño hecha por un arma cuerpo a cuerpo que lleves a dos manos, puedes volver a tirar el dado, debes usar la nueva tirada incluso si es un 1 o 2. El arma debe tener la propiedad A dos manos o versátil para ganar este beneficio.{|S|}\r\n{|B|}Protector{|/B|}{|S|}\r\nCuando una criatura que puedas ver ataca a otra a 5ft o menos de ti, puedes usar tu reacción para dar desventaja al ataque. Debes llevar escudo para ello.{|S|}\r\n{|B|}Luchador Dual{|/B|}{|S|}\r\nCuando te involucras en una pelea con dos armas, puedes añadir tu modificador de característica al daño del segundo ataque{|S|}', 'Clash of Fates', 1, 'clases_1', 1),
(36, 'Acción Súbita', 'Durante tu turno, puedes llevar a cabo una acción extra junto a tu conjunto de acciones natural.\r\nPodrás usarlo 1 vez por descanso corto.\r\n{17}: Podrás usarlo 2 veces por descanso corto. ', 'Clash of Fates', 1, 'clases_1', 2),
(37, 'Multiataque', 'A partir de nivel 5, cuando uses tu acción para atacar puedes dar 2 golpes.\r\nA partir de nivel 11, 3 golpes.\r\nA partir de nivel 20, 4 golpes.', 'Clash of Fates.', 1, 'clases_1', 5),
(38, 'Indómito', 'Puedes repetir una tirada de Salvación que hayas fallado, pero tendrás que quedarte con la nueva tirada.\r\nNivel 9: Puedes usarlo 1 vez por descanso corto.\r\nNivel 13: Puedes usarlo 2 veces por descanso corto.\r\nNivel 17: Puedes usarlo 3 veces por descanso corto.', 'Clash of Fates', 1, 'clases_1', 9),
(39, 'Visión de la Batalla', 'Obtienes competencia con Percepción, y si ya la tuvieras eres experto.\nAdemás, puedes conocer una vez cada hora como acción gratuita o como reacción, realizando una tirada de Percepción (CD 20-Competencia), la movilidad de un objetivo.', 'Clash of Fates', 1, 'subclases_1', 3),
(40, 'Tácticas de Batalla', 'Aprendes diferentes tácticas que puedes usar en batalla, puedes usarlas como reacción si se dan las condiciones tantas veces como el doble de tu bonificador de Inteligencia.\nobtienes 3 tácticas a nivel 3 y una más a tu elección por nivel hasta alcanzar el nivel 8.\nRetirada: Puedes hacer que un aliado a 15ft o menos de ti y a 5ft de un enemigo se desplace a tu lado sin generar ataques de oportunidad.\nPinza: Si un enemigo se encuentra entre 10ft y 20ft de ti en línea recta y tienes a dos aliados entre 10ft y 15ft de él también en línea recta, puedes hacer que ambos se desplacen hacia él, si se estaba moviendo detienes su movilidad.\nGuía: Si un aliado a 10ft o menos de ti dispara con un arma a distancia a un objetivo que puedas ver, nunca tendrá desventaja en su tirada e ignorará coberturas medias.\nFlanqueo a Distancia: Si te encuentras a 5ft de un objetivo y otro aliado va a disparar con un arma a distancia a ese objetivo, contará como flanqueo si te encuentras en línea con él.\nTajo Cruzado: Si dos aliados (o un aliado y tú) están a 25ft o menos el uno del otro y en medio de la línea que forman hay un objetivo, puedes hacer que ambos se desplacen hacia el objetivo y realicen una tirada de ataque conjunta contra él, sumando la Destreza de ambos aliados. Si el ataque acierta causará el daño conjunto de las dos armas.\nPaliza: Si un enemigo que puedas ver a 50ft o menos de ti está siendo flanqueado por 4 aliados, esos aliados tendrán un ataque adicional contra ese objetivo, además, su Índice de Crítico se reduce en 1 con ese ataque adicional.\nOpresión: Si un aliado que puedas ver a 40ft o menos de ti tiene a un enemigo a 5ft, ese enemigo no puede usar reacciones ni desplazarse fuera del rango de tu aliado hasta el final de su próximo turno. (Si tu aliado sale del rango del enemigo sí podrá usar su reacción para hacer un ataque de oportunidad)\nCarrera: Si un aliado que puedas ver (o tú mismo) utiliza su acción para correr, puedes hacer que al terminar su movimiento pueda realizar un ataque con arma sin perder su bonificador de competencia.', 'Clash of Fates', 1, 'subclases_1', 3),
(41, 'Liderazgo', 'Puedes, como acción adicional o reacción, tantas veces como tu bonificador de Inteligencia (Mínimo 1) por combate, otorgar a un aliado a tu elección que puedas ver un bonificador a su próxima tirada de ataque igual a tu bonificador de Competencia.', 'Clash of Fates', 1, 'subclases_1', 7),
(42, 'Coordinador', 'Cuando utilices una Táctica de Batalla, todos los aliados involucrados reciben el bonificador de Liderazgo.\r\nAdemás, puedes estar en la misma casilla que tus aliados si son de tu tamaño o inferior, pero si tu aliado es atacado recibirás el mismo ataque, repartiendo el daño entre los acertados (excepto para ataques con efecto de área).\r\nAl final de tu turno, si no has usado tu acción para atacar, obtienes tantas reacciones adicionales como golpes adicionales des por tu multiataque, puedes usar esas reacciones hasta el comienzo de tu próximo turno.', 'Clash of Fates', 1, 'subclases_1', 10),
(43, 'Mandato', 'Usando tu acción, 2 veces por descanso corto, puedes hacer que una criatura siga tus órdenes voluntariamente, podrás realizar un turno completo con esa criatura utilizando las acciones que conozcas sobre esa criatura, la criatura obtiene el bonificador de Liderazgo.', 'Clash of Fates', 1, 'subclases_1', 15),
(44, 'Flujo de la Batalla', '1 vez por descanso largo, cuando uses una Táctica de Batalla, puedes hacer que tus todos los aliados involucrados en la Táctica obtengan una acción, acción adicional y reacción extra durante su próximo turno.', 'Clash of Fates', 1, 'subclases_1', 18),
(45, 'Crisálida Vítrea', 'Usando 5 minutos, puedes crear una crisálida de cristal del tamaño de una mano, dentro de ella podrás introducir cualquier objeto, al pasar 1 hora nacerá un Insecto Vítreo con fragmentos cristalinos por su cuerpo, dicho insecto vivirá durante 10 minutos.\r\nPuedes tener tantas Crisálidas Vítreas en gestación como tu Nivel de Pacto.', 'Clash of Fates', 1, 'pactos_1', 1),
(46, 'Familiar Cristalino', 'Puedes vincularte con un Insecto Vítreo para tomarlo como familiar, los efectos del insecto son variables.\r\nSi el familiar muere se destruye en incontables fragmentos de cristal.', 'Clash of Fates', 1, 'pactos_1', 2),
(47, 'Alas de Polilla', 'Tantas veces al día como tu nivel de pacto, puedes usar este rasgo para impulsar tu movilidad o salto 25ft, sin generar ataques de oportunidad.', 'Clash of Fates', 1, 'pactos_1', 3),
(48, 'Afinidad Lunar', 'Tu Familiar Cristalino duplica su daño a la luz de la luna, además, en luna llena, cuando lances un hechizo tira 1d10, si sale 8 o superior no gastas hueco de hechizo.', 'Clash of Fates', 1, 'pactos_1', 4),
(49, 'Reinado Neóptero', 'Una vez al día, gastando tu turno, puedes invocar un Hijo de Vitria, dura invocado 5 minutos y al morir se destruye en cristales.\r\nAl obtener este rasgo elige uno de los dos Hijos de Vitria  siguientes: Mariposa de Cristal y Escarabajo de Cristal\r\nCada 35 insectos enviados a partir de obtener este rasgo obtienes una nueva posibilidad de invocación.', 'Clash of Fates', 1, 'pactos_1', 5),
(50, 'Grimorio de Hechizos', 'Almacenas tus Hechizos en tu Grimorio, un artículo esencial para un Mago.\r\nPuedes elegir 5 Hechizos Personales, dichos Hechizos deberán girar en torno a una temática, por ejemplo, elemento, escuela o cualquier otro elemento común, ese concepto es tu Tópico.\r\nTienes 10 Hechizos iniciales en tu Grimorio, pueden ser de cualquier nivel.\r\nAl subir de nivel tienes 3 opciones:\r\nElegir un Hechizo nuevo para aprender de los niveles que puedas lanzar.\r\nAprender el Hechizo de un Pergamino de los niveles que puedas lanzar.\r\nModificar y personalizar un Hechizo que conozcas que no sea personalizado.', 'Clash of Fates', 1, 'clases_2', 1),
(51, 'Documentar', 'Puedes ver la magia representada como partículas de diferentes colores y formas en función del tipo y uso.\r\nTras ver un tipo de Magia puedes usar una tirada de Arcana para identificarla temporalmente durante 1 hora, pasado ese tiempo deberás volver a identificarla.\r\nTras identificar un tipo de Magia al menos una vez puedes documentarla en tu Grimorio durante tu descanso, al hacerlo, la añades y no tendrás que volver a identificarla, pues la reconocerás al instante.\r\nPuedes documentar la Magia de tus Hechizos y también la Magia de un Conjurador en concreto.', 'Clash of Fates', 1, 'clases_2', 3),
(52, 'Reajustar Magia', 'Utilizando un descanso largo puedes elegir uno:\r\nSustituir un Hechizo que conozcas que no sea personalizado por otro del mismo nivel que no conozcas, el que has olvidado no puede ser recuperado.\r\nIntentar sustituir un Hechizo que conozcas que no sea personalizado por otro de un nivel superior que no conozcas, deberás realizar una tirada de Arcana de dificultad 12 + Nivel del Nuevo Hechizo, si fallas puedes repetir la tirada en cada descanso que hagas hasta superarla, el Hechizo que has olvidado no puede ser recuperado.\r\nIntentar personalizar un Hechizo que conozcas que no sea personalizado, deberás realizar una tirada de Arcana de dificultad 12 + Nivel de Hechizo + Nivel del Nuevo Hechizo, si fallas puedes repetir la tirada en cada descanso que hagas hasta superarla, el Hechizo que has olvidado no puede ser recuperado.', 'Clash of Fates', 1, 'clases_2', 5),
(53, 'Magia Residual', 'Cuando se lance un Hechizo y falle, ya sea porque la tirada de ataque no acertó o la Salvación fue superada, deja una esencia de magia residual que puedes ver y sentir.\r\nComo acción adicional, puedes gastar un hueco de hechizo del nivel de dicha esencia para moldearla y lanzar el hechizo.', 'Clash of Fates', 1, 'clases_2', 8),
(54, 'Tinta Mágica', 'Puedes escribir usando tu magia como tinta, el color depende del tipo de magia que utilices entre la magia que hayas documentado.\r\nAl escribir puedes esconder información entre las frases que solo quién cumpla las condiciones que impongas al escribirlo pueda leer.\r\nPuedes convertir tinta normal en tinta mágica con una pasada de hojas.\r\nPuedes acceder a la tinta mágica que hayas creado si la tienes a 30ft o menos de ti, pudiendo usarla como base de datos, puedes leerla a gran velocidad de forma mental.\r\nPuedes introducir conjuros que conozcas del tipo de magia que uses como tinta, gastarías el hueco de hechizo y tú concentración para mantenerlo dentro.', 'Clash of Fates', 1, 'clases_2', 10),
(55, 'Tópico Mágico', 'Los Hechizos que entren dentro de tu Tópico pueden ser utilizado como acción adicional, sigues pudiendo lanzar solo un Hechizo por turno.\r\nCuando utilices un Hechizo de tu Tópico puedes usar tu Acción para hacer una onda mágica de 10ft donde termina el efecto del Hechizo, puedes escoger un Hechizo de tu Tópico de nivel inferior al que generó la onda y debe ser de nivel 4 o inferior y lanzarlo haciendo efecto solo dentro del área generada.', 'Clash of Fates', 1, 'clases_2', 12),
(56, 'Glosario Personal', 'Puedes crear páginas especiales de tu Grimorio, dichas páginas pueden almacenar objetos o recuerdos, puedes tener hasta 5 Páginas de Objetos y sin límite de páginas de Recuerdos.\r\nUtilizando un descanso puedes crear una de estas páginas.\r\nUn objeto almacenado en tu Grimorio debe pesar menos de 5 y no puede tener un efecto mágico que supere el nivel 2.\r\nUn Objeto almacenado es analizado automáticamente y conoces todas sus propiedades y usabilidad.\r\nCuando extraigas un objeto almacenado del Grimorio mantendrás una página con toda la información de dicho objeto.\r\nUn Recuerdo almacenado puede durar entre unos segundos y varias horas pero no más de 6.\r\nPuedes visualizar un Recuerdo almacenado cuando quieras, pudiendo ver y oír en tercera persona, parar, avanzar y retroceder.\r\nPuedes llevar a cualquier aliado a visualizar un Recuerdo. \r\nVisualizar un Recuerdo gasta 1 minuto de tiempo, no importa la longitud del Recuerdo.\r\nEl mundo del recuerdo no es real, por tanto, no podrás analizar, documentar ni interactuar con nada, aunque si podrás observar y sacar tus conclusiones.', 'Clash of Fates', 1, 'clases_2', 16),
(57, 'Torrente de Magia', 'Cuando lances un Hechizo, puedes elegir un segundo Hechizo que tenga al menos dos niveles menos y lanzarlo seguidamente.\r\nSi ambos Hechizos son de tu Tópico puedes repetir esta habilidad.\r\nAl terminar de usar esta habilidad obtienes 1 punto de cansancio.', 'Clash of Fates', 1, 'clases_2', 20),
(58, 'Corriente Artística', 'Cuando lances un Hechizo, puedes elegir un segundo Hechizo que tenga al menos dos niveles menos y lanzarlo seguidamente.\r\nSi ambos Hechizos son de tu Tópico puedes repetir esta habilidad.\r\nAl terminar de usar esta habilidad obtienes 1 punto de cansancio.\r\nTu magia se manifiesta a través de tu arte y de tu forma de manifestar tus emociones.\r\nElige un estilo de arte dominante:\r\n{|B|}Música:{|/B|}\r\nLa música es tu forma de expresión, tu magia toma forma de notas, partituras y melodías al son de tu propio compás.\r\nTienes 3 tipos de ritmo y tu magia se adapta al ritmo usado. Son ataques de hechizo a distancia de 40ft de rango: Adagio, Allegro y Andante, para cambiar de Adagio a Allegro debes pasar por Andante.\r\nAdagio: 1d6 de daño Sónico. Reduce la movilidad del objetivo 5ft hasta el final de la composición.\r\nAllegro: 1d4 de daño Sónico. Aumenta tu movilidad 5ft hasta el final de la composición.\r\nAndante: 1d8 de daño Sónico.\r\n{|S|}{|B|}Baile:{|/B|}\r\nEl baile es tu forma de expresión, tu magia toma forma alrededor tuya siguiente el ritmo de tu danza.\r\nTienes 4 tipos de pasos, son ataques cuerpo a cuerpo, puedes usar un arma Simple o tu ataque desarmado: Salto, Giro, Pirueta y Plie, no puedes usar dos seguidos iguales.\r\nSalto: Te desplazas 5ft y realizas un golpe.\r\nGiro: Realizas un golpe hasta a dos criaturas a 5ft de ti.\r\nPirueta: Ataque potente, añade 1d8 al daño del golpe. Solo puede usarse al inicio o final de una composición.\r\nPlie: Ataque normal.\r\n{|S|}{|B|}Pintura:{|/B|}\r\nEl dibujo y la pintura son tus formas de expresión, tu magia toma forma de tinta y colores siguiendo la dirección de tus ideas.\r\nTienes una paleta de hasta 9 colores de tu elección, son ataques de hechizo cuerpo a cuerpo o de hasta 25ft de rango.\r\nCada color causa 1d6 de daño de un tipo de tu elección, no puedes repetir color en tus composiciones.', 'Clash of Fates', 1, 'clases_3', 1),
(59, 'Despliegue Artístico', 'Tu magia nace de la expresión de tu arte.\nNo puedes lanzar hechizos de forma habitual, solo mediante composiciones. El nivel más alto de tus hechizos corresponde con el de un lanzador completo. Además, cada vez que subas de nivel en esta clase, aprendes 2 conjuros, excepto a partir de nivel 9 que aprenderás 1 conjuro.\nSí puedes lanzar trucos de forma habitual.\nSiempre que un aliado recupere PG fuera de combate debido a un hechizo que lances usando una composición, en lugar de eso, obtiene esa misma cantidad de PG temporales durante 1 minuto.\nComo acción, puedes realizar diferentes golpes de tu Corriente Artística, tantas como el número indicado en la tabla de Despliegue Artístico.\nCada uno de tus hechizos tiene una composición definida por ti tras finalizar un descanso. Estas composiciones son combinaciones de tus golpes de Corriente Artística. Una combinación debe tener, como mínimo, tantos golpes como el nivel del hechizo enlazado más uno.\nTambién puedes crear composiciones a partir de trucos.', 'Clash of Fates', 1, 'clases_3', 1),
(60, 'Inspiración Artística', 'Como acción adicional, puedes utilizar tu arte para inspirar a un aliado a 50ft o menos de ti.\r\nLa criatura inspirada obtiene un dado de inspiración igual al dado de la última acción de Despliegue Artístico que hayas usado.\r\nPuede usar este dado durante los próximos 10 minutos para sumarlo a una tirada de ataque, estadística o salvación a su elección, debe tirarlo antes de saber el resultado.\r\nAdemás, si utilizas esta habilidad en mitad de una composición, puedes avanzar esa composición como si hubieras realizado la siguiente acción necesaria. No puedes empezar ni terminar una composición de esta manera.', 'Clash of Fates', 1, 'clases_3', 2),
(61, 'Aprendiz Talentoso', 'Obtienes competencia con una habilidad de tu elección.\r\nAdemás, siempre que fueras a realizar una tirada de habilidad de la que no seas competente, puedes realizar una tirada de Interpretación con la misma dificultad. Si superas dicha tirada de Interpretación, independientemente del resultado de la tirada original, obtienes +1 en las tiradas de la habilidad original permanentemente, hasta un máximo de la mitad de tu competencia.', 'Clash of Fates', 1, 'clases_3', 2),
(62, 'Entretenimiento Grupal', 'Durante un descanso, tu grupo se entretiene al verte practicar tu arte.\r\nSiempre que finalices un descanso con éxito, tus compañeros y tú obtenéis 1d4 + Carisma PG temporales hasta tu próximo descanso.\r\n{6}: 1d6 + Carisma.\r\n{11}: 1d8 + Carisma.\r\n{17}: 1d10 + Carisma.', 'Clash of Fates', 1, 'clases_3', 3),
(63, 'Interpretación Extendida', 'Has aprendido a extender tu arte, de forma que eres capaz de continuar una composición iniciando otra nueva.\r\nAl terminar una composición, puedes elegir uno:\r\nLanzar el hechizo vinculado.\r\nLanzar el hechizo vinculado con la mitad de su efectividad y concatenar una composición nueva.\r\nUna composición concatenada acumula la mitad de los efectos concatenados.\r\nEl número de concatenaciones que puedes realizar aumenta con tu nivel en esta clase.\r\n{5}: 2 concatenaciones.\r\n{9}: 3 concatenaciones.\r\n{12}: 4 concatenaciones.\r\n{16}: 5 concatenaciones.', 'Clash of Fates', 1, 'clases_3', 5),
(64, 'Interrupción', 'Si un enemigo a rango de tu Despliegue Artístico realiza un ataque o lanza un hechizo, si te encuentras a mitad de una composición, puedes utilizar tu reacción para interrumpir tu composición e intentar cancelar su ataque.{|S|}\nEl objetivo realiza una tirada de salvación de la estadística de la acción que está realizando (CD 10+Competencia), si falla cancelas su ataque. Si acierta, continúa con su ataque, aunque con desventaja. En cualquier caso pierdes tu composición y deberás empezar otra.', 'Clash of Fates', 1, 'clases_3', 7),
(65, 'Matices del Arte', 'Tu arte ha avanzado, evolucionado a lo largo de tu experiencia y se ha complementado con diferentes matices. Aquello que has visto o sentido te sirve como inspiración.\r\nAl obtener esta habilidad, elige un hechizo de cualquier clase y cualquier nivel (que puedas lanzar), añádelo a tu lista de conjuros y crea una composición para ese hechizo.\r\nAdicionalmente, siempre que una criatura que puedas ver realice una acción realmente extraordinaria (crítico) o realmente vergonzosa (pifia) obtienes los beneficios de tu rasgo Inspiración Artística, además, podrás practicar una composición que, al finalizarse, materialice un efecto similar al que te inspiró.', 'Clash of Fates', 1, 'clases_3', 11),
(66, 'Inspiración Orquestada', 'Siempre que inspires a una criatura (incluido tú), puedes inspirar a cualquier número de otras criaturas a 40ft o menos de la primera criatura.', 'Clash of Fates', 1, 'clases_3', 20),
(67, 'Lanzamiento de Conjuros', 'Lanzador de Conjuros de Máxima Capacidad, escoges tantos conjuros de la Lista de Conjuros de Cultista como tu nivel de Cultista + tu modificador de Sabiduría, siempre que tengas huecos de conjuro de ese nivel.\r\nCuando subas un nivel en esta clase puede elegir cambiar un hechizo que conozcas por otro que no conozcas y puedas lanzar.\r\nPuedes lanzar hechizos sin tener en cuenta los componentes materiales básicos.', 'Clash of Fates', 1, 'clases_4', 1),
(68, 'Truco Potenciado', '{1} Tus trucos causan 1 de daño adicional.\r\n{8} Tus trucos causan daño adicional igual a tu modificador de Sabiduría.', 'Clash of Fates', 1, 'clases_4', 1),
(69, 'Poder de Divinidad', 'Puedes potenciar el poder que tu divinidad te otorga por el pacto, aumentando las capacidades mágicas.\r\nComo acción adicional, durante 1 minuto, todos los dados de efectos beneficiosos para ti o tus aliados y de daño de tus habilidades de pacto aumentarán en un dado adicional.\r\nEl número de usos de la habilidad aumenta conforme subas niveles en esta clase:\r\n{2}: 1 vez por descanso largo.\r\n{6}: 2 veces por descanso largo.\r\n{9}: 2 veces por descanso corto.\r\n{18}: 3 veces por descanso corto.', 'Clash of Fates', 1, 'clases_4', 2),
(70, 'Oración Divina', 'Durante un descanso o invirtiendo 1 hora puedes realizar una Oración Divina que otorgará beneficios seleccionables entre los siguientes:\r\nCura una enfermedad leve o veneno que padezca una criatura que escuche la oración.\r\nUna criatura que escuche la oración recupera tantos usos como tu nivel de pacto de una habilidad que pueda usar, no puede superar el máximo de usos habituales.\r\nUna criatura recupera tantos huecos de hechizo de nivel 1 y 2 como tu nivel de pacto, no puede superar el máximo de usos habituales.\r\nEvocas el poder de tu Deidad, todas las criaturas que escuchen la oración no pueden sufrir maldiciones nuevas y las que tuvieran dejan de tener efecto durante 8h.\r\nEl número de beneficios seleccionables aumenta conforme subas niveles en esta clase:\r\n{3}: 1 beneficio.\r\n{7}: 2 beneficios.\r\n{13}: 3 beneficios.\r\n{15}: 4 beneficios.', 'Clash of Fates', 1, 'clases_4', 3),
(71, 'Acabar con la Herejía', 'Eres capaz de saber si una criatura ha sido creada de forma mágica sin la intervención de poder divino, de ser así, eres capaz de destruirla con mayor facilidad.\r\nComo acción, puedes obligar a una criatura que cumpla las condiciones anteriores a realizar una Salvación de Constitución (CD Conjuros), si falla recibirá tantos d12 como tu nivel de Pacto.\r\nA medida que subas niveles en esta clase aumentarán tus usos de esta habilidad, además, el daño que causas con esta habilidad puede ser letal a ciertas criaturas.\r\n{5}: 2 usos. Las criaturas con PG máximos inferiores a 20 morirán instantáneamente en vez de recibir daño al fallar la Salvación.\r\n{11}: 3 usos. Las criaturas con PG máximos inferiores a 30 morirán instantáneamente en vez de recibir daño al fallar la Salvación.\r\n{14}: 5 usos. Las criaturas con PG máximos inferiores a 45 morirán instantáneamente en vez de recibir daño al fallar la Salvación.\r\n{17}: 7 usos. Las criaturas con PG máximos inferiores a 60 morirán instantáneamente en vez de recibir daño al fallar la Salvación.', 'Clash of Fates', 1, 'clases_4', 5),
(72, 'Intercesión Divina', 'Puedes solicitar a tu deidad que interceda por ti en momentos de necesidad.\r\nDebes usar tu acción, describe el tipo de ayuda y tu deidad podrá asistirte.\r\nSi la divinidad intercede no podrás usar este rasgo hasta pasados 7 días.\r\n{10} tira 2d20, si sacas un resultado igual o inferior a tu nivel de cultista + tu nivel de pacto tu deidad intercederá.\r\n{20} no es necesario tirar, asiste automáticamente.', 'Clash of Fates', 1, 'clases_4', 10),
(73, 'Enemigo Predilecto', 'Conoces mejor a tus presas, por tanto eres experto en cazarlas.\r\nAl saquear Enemigos Predilectos que has matado, saqueas el doble de materiales.\r\nNo puedes ser sorprendido por tus Enemigos Predilectos, si atacasen en sigilo no tendrán ventaja contra ti.\r\nTienes ventaja en las tiradas de Supervivencia, Percepción e Inteligencia hechas para rastrear o recabar información sobre tu Enemigo Predilecto, si rastreas una criatura que no es tu Enemigo Predilecto y el rastreo es satisfactorio obtendrás los beneficios de esta habilidad para esa criatura durante 1 hora.\r\nAprendes un idioma hablado por tu Enemigo Predilecto si habla.\r\nElige un tipo de Enemigo Predilecto entre: Aberraciones, Bestias, Celestiales, Constructos, Dragones, Elementales, Féericos, Demonios, Gigantes, Monstruosidades, Oozes, Plantas, No Muertos\r\nAlternativamente, puedes seleccionar hasta dos razas humanoides como Enemigo Predilecto (tales como Trasgos o Humanos).\r\nTienes 1 Enemigo Predilecto.\r\n{6}: Tienes 2 Enemigos Predilectos.\r\n{14}: Tienes 3 Enemigos Predilectos.', 'Clash of Fates', 1, 'clases_5', 1),
(74, 'Explorador Natural', 'Estás familiarizado con el terreno y te resulta más sencillo moverte por él.\r\nCuando hace una tirada de Inteligencia o Sabiduría relacionada con tu Terreno Favorable, tu bonificador de competencia se dobla si tienes competencia con esa habilidad.\r\nMientras viajes durante 1 hora o más por tu Terreno Favorable, ganas los siguientes beneficios:\r\nEl terreno difícil no hace que viajéis más lento.\r\nTu grupo solo puede perderse por medios mágicos.\r\nPermaneces alerta realizando actividades de viaje.\r\nSi viajas solo puedes viajar en sigilo.\r\nCuando recolectas, recoges el doble.\r\nRastreando criaturas conocer el número, tamaño y cuán recientes son las huellas.\r\nElige un Terreno Favorable entre: Ártico, Costa, Desierto, Bosque, Llanura, Montaña, Pantano, Cueva, Urbano\r\nTienes 1 Terreno Favorable.\r\n{6}: Tienes 2 Terrenos Favorables.\r\n{10}: Tienes 3 Terrenos Favorables.', 'Clash of Fates', 1, 'clases_5', 1),
(75, 'Estilo de Combate', 'Elige un estilo de combate:\r\nArquería: Obtienes +2 a las tiradas de ataque hechas con armas a distancia.\r\nEvasivo: Si usaste toda tu movilidad obtienes +1 a la CA.\r\nImpasible: Si no te moviste el turno anterior tienes ventaja en tu primera tirada de ataque con arma a distancia.\r\nÁgil: Si no realizaste ningún ataque en tu turno anterior tienes un ataque adicional en tu multiataque durante tu turno.\r\nManos Rápidas: Como reacción, si un aliado realiza un ataque con ventaja o crítico puedes realizar una tirada de ataque con arma a distancia con ventaja al mismo objetivo.\r\nLigero: Si llevas un arma A Distancia o Lanzable equipada y ninguna otra arma ni escudo tu movilidad aumenta 10ft y tu velocidad de escalado es 30ft.', 'Clash of Fates', 1, 'clases_5', 2),
(76, 'Instintos Mejorados', 'Tantas veces como tu bonificador de Sabiduría por descanso largo puedes hacer que una tirada de habilidad de Sabiduría fallida se considere como exitosa, excepto pifias.', 'Clash of Fates', 1, 'clases_5', 3),
(77, 'Multiataque', 'Cuando uses tu acción para atacar puedes dar 2 golpes.\r\n{12}: 3 golpes.', 'Clash of Fates.', 1, 'clases_5', 5),
(78, 'Movimiento Natural', 'Ignoras las penalizaciones de terreno difícil, además, dentro de terreno difícil podrás moverte sin generar ataques de oportunidad.\r\nTu velocidad base, de nado y escalado aumentan 10ft.\r\nPuedes correr como acción adicional excepto si estas en terreno difícil o superas tu capacidad de carga.', 'Clash of Fates', 1, 'clases_5', 8),
(79, 'Camuflaje Perfecto', 'Si estás en tu Terreno Favorable puedes estar 1 minuto ocupado estableciendo un escondite usando tu entorno, dentro de ese escondite serás indetectable excepto por medios mágicos.\r\nSi estás escondido y realizas una tirada de ataque a distancia contra un objetivo, dicho objetivo deberá realizar una tirada de Percepción y superar el resultado de tu tirada de ataque para detectarte, si no lo consigue seguirás escondido y el enemigo no conocerá tu ubicación.', 'Clash of Fates', 1, 'clases_5', 10),
(80, 'Experiencia Múltiple', 'Puedes elegir +2 puntos de Estadística o la primera habilidad de cualquier subclase no mágica, incluso de las que no pertenezcan a esta clase o no pudieras cogerla por requisitos.', 'Clash of Fates', 1, 'clases_5', 13),
(81, 'Desvanecerse', 'Puedes la acción de esconderse como acción adicional durante tu turno asimismo no puedes ser rastreado mediante magia a menos que decidas dejar un rastro.', 'Clash of Fates', 1, 'clases_5', 14),
(82, 'Detección Absoluta', 'Como acción adicional, tantas veces como tu bonificador de destreza por descanso largo, puedes concentrarte, al hacerlo, obtienes la posición de todas las criaturas a 80ft, incluso si están escondidas, las penalizaciones por ceguera no te afectan al usar esta habilidad y tienes ventaja contra las criaturas reveladas de esta manera hasta el final de tu turno.', 'Clash of Fates', 1, 'clases_5', 18),
(83, 'Cazador Implacable', 'Cada vez que realices un ataque contra una criatura que sea Enemigo Predilecto puedes elegir tirar un d8 adicional y sumar el resultado a la tirada o sumar tu bonificador de Sabiduría a la tirada de ataque y daño si acertase.\r\nAdicionalmente, cuando derrotes a un Enemigo Predilecto puedes usar tu reacción para realizar una tirada de ataque con ventaja contra otro Enemigo Predilecto dentro de tu rango de ataque.', 'Clash of Fates', 1, 'clases_5', 20),
(84, 'Comunicador Universal', 'Puedes comunicarte con cualquier ser vivo aunque no compartas idioma, debes realizar una tirada de Arcana, si aciertas os comunicáis bidireccionalmente y por telepatía, si fallas es unidireccional de ti al ser.\r\nEres competente con Arcana si lo usas para este rasgo.\r\nElige entre Destreza, Inteligencia, Sabiduría y Carisma para sumar +1 a tu puntuación de esa característica.', 'Clash of Fates', 1, 'razas_2', 0),
(85, 'Maestro de la Magia', 'El daño que causas con hechizos y/o ataques de origen mágico aumenta en función a tu nivel:\r\nNivel 1: +1d2\r\nNivel 4: +1d4\r\nNivel 9: +1d6\r\nNivel 16: +2d4', 'Clash of Fates', 1, 'razas_2', 0),
(86, 'Magia élfica de Luz', 'Tu poder ancestral élfico se manifiesta a través de la luz, obtienes diferentes capacidades mágicas que puedes utilizar:{|S|}\n{|B|}Magia élfica de luz: Invisibilidad{|/B|}\nPuedes usar tu acción, manteniendo la concentración, para volverte invisible a ti o a una criatura voluntaria u objeto que puedas tocar. Esa entidad se volverá invisible durante 10 minutos, no podrá ser vista, excepto por medios mágicos, y la luz rebotará a través de ella. Si recibe daño radiante, sónico o necrótico en este estado, evita ese daño y genera una luz deslumbrante que ciega a todas las otras criaturas a 15ft de la entidad.\n\n{|B|}Magia élfica de luz: Salto de luz{|/B|}\nComo acción adicional, tantas veces por descanso corto como tu modificador de Sabiduría, puedes convertirte en un rayo de luz y desplazarte hasta 15ft en una línea recta. Al hacerlo, generas luz durante unos instantes a 30ft de ti y del punto final, esa luz no es suficiente para cegar.\n\n{|B|}Magia élfica de luz: Luz Desintegradora{|/B|}\nUna vez por descanso largo, puedes usar tu acción para crear un rayo de luz solar concentrada, en una línea de 5ft de ancho y 15ft de largo vuelcas toda tu magia de luz para causar 2d6 de daño Radiante. Las criaturas dentro del área deberán realizar una Salvación de Destreza (CD 12), si fallan recibirán la mitad de daño. \nPuedes gastar un hueco de hechizo al usar este rasgo, por cada nivel, suma 5ft de largo, 1d4 de daño adicional y +1 a la tirada de salvación.\n\n{|B|}Magia élfica de luz: Aura de Luz{|/B|}\nComo acción gratuita, hasta 3 veces por descanso corto, puedes emanar luz tenue a 10ft de ti o de una criatura u objeto que puedas tocar, puedes mantener este rasgo durante 1 hora sin usar concentración, pero solo puede afectar a una entidad a la vez.', 'Clash of Fates', 1, 'subrazas_4', 0),
(87, 'Arte de la Guerra', 'Obtienes tres competencias con arma de tu elección.\r\nAdemás, de entre todas tus competencias de arma puedes elegir un {|B|}Arma Predilecta{|/B|}.', 'Clash of Fates', 1, 'subclases_2', 3),
(88, 'Impacto Crítico', 'Las tiradas de ataque con arma que realices causan crítico a partir de 19.\r\nLas tiradas de ataque que realices con un {|B|}Arma Predilecta{|/B|} causan crítico a partir de 18.', 'Clash of Fates', 1, 'subclases_2', 3),
(89, 'Frenesí de Golpes', 'Cuando realices una tirada de ataque que resulte en crítico, tantas veces por descanso corto como tu puntuación de fuerza, puedes elegir una de las siguientes opciones:\r\n{|B|}Cadena de golpes:{|/B|}\r\nNo causas el daño adicional del golpe crítico, pero obtienes un golpe adicional.\r\n{|B|}Último golpe:{|/B|}\r\nEl ataque causa 1d10 + Fuerza de daño adicional. Si este ataque es el último golpe que das este turno, duplica el daño adicional de esta habilidad.\r\n{|B|}Cambio de arma:{|/B|}\r\nNo causas el daño adicional del golpe crítico, pero puedes cambiar de arma y realizar una tirada de daño con la nueva arma.', 'Clash of Fates', 1, 'subclases_2', 7),
(90, 'Maestría de Guerra', 'Elige una maestría de guerra al obtener esta habilidad y otra al nivel 18:\r\n{|B|}Maestría de Armas a Distancia:{|/B|}\r\nRecargas automáticamente las armas a distancia con las que tengas competencia. Además, si una tirada de ataque que hagas con ese arma resulta en crítico, si hay otro enemigo en la línea del ataque, el ataque atraviesa al primer objetivo y avanza hasta el segundo, perderá -8 en la tirada.\r\n{|B|}Maestría de Armas Versátiles:{|/B|}\r\nCausas el dado máximo de la versatilidad del arma aunque la lleves a una mano. Además, si una tirada de ataque que hagas con ese arma resulte en crítico, puedes realizar un golpe adicional aplicando el dado mínimo de la versatilidad del arma.\r\n{|B|}Maestría de Armas Pesadas:{|/B|}\r\nPuedes llevar armas pesadas a una mano, aunque no podrás llevar dos armas pesadas al mismo tiempo. Además, si una tirada de ataque que hagas con ese arma resulte en crítico, el objetivo quedará derribado.\r\n{|B|}Maestría de Armas Arrojadizas:{|/B|}\r\nUsas el rango máximo de las armas arrojadizas sin desventaja. Cuando lances un arma arrojadiza, puedes coger otra de tu inventario. Además, si una tirada de ataque que hagas con ese arma resulta en crítico, el objetivo recibirá 2d6 de daño adicional.\r\n{|B|}Maestría de Armas de Rango:{|/B|}\r\nSiempre que aciertes un golpe con un arma de rango, puedes desplazarte 5ft en la dirección que quieras sin generar ataques de oportunidad. Además, si una tirada de ataque que hagas con ese arma resulte en crítico, podrás realizar una ligera embestida que causará daño a todas las criaturas en una línea del rango del arma.\r\n{|B|}Maestría de Armas Ligeras:{|/B|}\r\nPuedes cubrirte con armas ligeras, sumando un +2 a su bonificador de cubrirse. Además, si llevas un arma ligera en cada mano, cuando una tirada de ataque que hagas con esas armas resulte en crítico, puedes dar un golpe adicional con esa otra arma, aunque ese golpe adicional no podrá ser crítico.', 'Clash of Fates', 1, 'subclases_2', 10),
(91, 'Habilidad Predilecta', 'Puedes elegir una segunda {|B|}Arma Predilecta.{|/B|}\r\nGracias a tu maestría con las armas predilectas, como acción adicional, tantas veces como tu modificador de destreza por descanso largo, realizas una finta con tu {|B|}Arma Predilecta{|/B|}, al hacerlo, la próxima tirada de ataque realices con un {|B|}Arma Predilecta{|/B|} tiene ventaja. ', 'Clash of Fates', 1, 'subclases_2', 15),
(92, 'Último Recurso', 'Una vez por descanso largo, tras hacer una tirada de ataque, puedes sustituir el resultado de la tirada por una tirada crítica.', 'Clash of Fates', 1, 'subclases_2', 18),
(93, 'Viento de Cephiros', 'Tienes una reserva de puntos mágicos otorgada por Cephiros, con ellos podrás potenciar tus técnicas de Viento.\r\nTus usos de Viento de Cephiros aumentan conforme subes niveles en esta clase, empiezas con 3 + Nivel de Pacto:\r\n{5}: Tienes 5 + Nivel de Pacto usos.\r\n{7}: Tienes 8 + Nivel de Pacto usos.\r\n{10}: Tienes 12 + Nivel de Pacto usos.\r\nPuedes usar las siguientes opciones como acción adicional:\r\nPuedes gastar 2 usos de Viento de Cephiros para aumentar tu velocidad 20ft este turno.\r\nPuedes gastar 1 uso de Viento de Cephiros para destrabarte.\r\nPuedes gastar 3 usos de Viento de Cephiros para obtener una reacción adicional hasta el principio de tu próximo turno.', 'Clash of Fates', 1, 'subclases_3', 3),
(94, 'Tajos Celestes', 'Cuando aciertes un golpe, puedes utilizar tu reacción y un uso de Viento de Cephiros para recubrir tu espada con el poder del viento, causando daño adicional.\r\nAl nivel 3, causas 1d4 de daño adicional, si una criatura muere de esta manera recuperas un uso de Viento de Cephiros.\r\n{6} 1d6 de daño adicional, si una criatura muere de esta manera recuperas un uso de Viento de Cephiros.\r\n{12} 1d6 de daño adicional, si una criatura muere de esta manera recuperas dos usos de Viento de Cephiros.\r\n{16} 1d8 de daño adicional, si una criatura muere de esta manera recuperas dos usos de Viento de Cephiros y tu acción de ataque.', 'Clash of Fates', 1, 'subclases_3', 3),
(95, 'Campo Céfiro', 'Gastando un uso de Viento de Cephiros puedes usar tu acción adicional para crear un campo de 10ft alrededor tuya durante 1 minuto.\r\nEl campo permanece hasta que te muevas o pase el tiempo, dentro de ese campo tienes ventaja en la primera tirada de ataque que hagas por turno, además los enemigos tienen desventaja en los ataques de arma que hagan contra ti.', 'Clash of Fates', 1, 'subclases_3', 7),
(96, 'Deslizamiento Aéreo', 'Puedes usar tu acción adicional para desplazarte hasta 20ft, además, puedes realizar desplazamientos adicionales por cada uso de Viento de Cephiros que gastes al usar esta habilidad.\r\nEl primer desplazamiento no genera ataques de oportunidad, pero a partir del segundo sí.', 'Clash of Fates', 1, 'subclases_3', 10),
(97, 'Filo Danzante', 'Como acción adicional, durante 1 minuto y manteniendo tu concentración, puedes gastar hasta 3 usos de Viento de Cephiros, al hacerlo, elige hasta esa misma cantidad de armas que tengas equipadas o nadie esté sosteniendo hasta 120ft de ti, las haces flotar con el poder de tu Deidad.\r\nLas armas flotarán alrededor tuya y atacarán cuando tú lo hagas, cuando uses tu acción para atacar cada Filo Danzante causará un ataque.\r\nPuedes usar tu reacción para aplicar Tajo Celeste a todos tus Filos Danzantes (tendrás que gastar un uso por cada arma).', 'Clash of Fates', 1, 'subclases_3', 15),
(98, 'Danza del Viento', 'Una vez por descanso largo, cuando causes daño de Viento puedes gastar dos usos de Viento de Cephiros y crear un pequeño tornado.\r\nEl tornado empujará a la criatura 15ft, además le causará 4d8 de daño de Viento. Adicionalmente, el tornado empujará a todas las criaturas alrededor 5ft, las criaturas con constitución 19 o superior pueden intentar evitarlo con una tirada de Salvación de Constitución (CD de Conjuros).', 'Clash of Fates', 1, 'subclases_3', 18),
(99, 'Aprendizaje', 'Cuando subas de nivel, puedes usar un Pergamino de cualquier nivel para aprender ese Hechizo usando tu rasgo Grimorio de Hechizos.\r\nMediante una tirada de Arcana puedes aprender un Hechizo de un pergamino que puedas lanzar, la dificultad es 13 + Nivel del Hechizo.', 'Clash of Fates', 1, 'subclases_4', 2),
(100, 'Generación de Textos', 'Tras finalizar un descanso largo, los vestigios de tu magia que emanas innatamente se manifiestan en forma de un pergamino que contiene, a elección de tu GM, uno de tus hechizos o un hechizo nuevo creado a partir de tu documentación.', 'Clash of Fates', 1, 'subclases_4', 2),
(101, 'Documentación Adicional', 'Tienes ventaja en las tiradas de Arcana para crear Pergaminos.\r\nCuando hagas objetivo a una sola criatura con un Hechizo que aprendieras de un Pergamino puedes hacer que esa criatura realice una Salvación de Inteligencia (CD Conjuros), si falla, podrás crear una página en tu Grimorio con todos los datos sobre esa criatura, incluidas habilidades.\r\nCuando crees un Hechizo usando tu rasgo Grimorio de Hechizos puedes basarte en una habilidad de una criatura que hayas documentado con este rasgo.', 'Clash of Fates', 1, 'subclases_4', 6),
(102, 'Facilidad de Uso', 'Los pergaminos que hayas creado mediante tus habilidades de mago pueden ser utilizados innatamente por cualquier criatura que designes para ello.\r\nAl crear el pergamino o al entregarlo a mano, puedes elegir cualquier número de criaturas que conoces para que sean capaces de utilizarlo.', 'Clash of Fates', 1, 'subclases_4', 6);
INSERT INTO `habilidades` (`id`, `nombre`, `descripcion`, `autor`, `validado`, `origen_id`, `origen_nivel`) VALUES
(103, 'Extensión de Tinta', 'Siempre que utilices tu acción para lanzar un Hechizo que hayas aprendido de un Pergamino puedes gastar tu acción adicional para marcar a las criaturas afectadas por tu Hechizo con tinta mágica.\r\nUna criatura puede usar su acción para quitarse la tinta mágica sobre ella.\r\nPuedes lanzar Hechizos que hayas aprendido de un pergamino a través de la tinta mágica, también cuenta la tinta de tu rasgo Tinta Mágica.\r\nSi una criatura está en contacto con la tinta mágica puedes usar un hechizo de Toque sobre ella, pero no Propio.', 'Clash of Fates', 1, 'subclases_4', 10),
(104, 'Materializar', 'Como acción, puedes gastar un hueco de hechizo del nivel que quieras para crear una materialización de una criatura que hayas documentado con tu rasgo de Documentación Adicional, la criatura debe ser de CR igual al hueco de hechizo empleado.\r\nLa criatura materializada dura 1 minuto, puedes comandarla como acción gratuita. Solo puedes tener una criatura creada con este rasgo.\r\nTambién puedes materializar objetos que hayas almacenado usando tu rasgo Glosario Personal, dichos objetos serán de 1 uso o durarán 1 minuto, tendrás que gastar un hueco de hechizo de nivel 4 para materializar un objeto.', 'Clash of Fates', 1, 'subclases_4', 14),
(105, 'Bastión del Conocimiento', 'Tu grimorio crece y aumenta de tamaño, este orbita alrededor tuya o de una criatura voluntaria que puedas ver a 35ft o menos de ti.\r\nEste cuenta como un Grimorio de Combate, tienes competencia con él.\r\nTu grimorio acumula energía mágica defensiva que puede transferir a su portador actual. Comienza cada combate con 10 + Nivel de Mago puntos mágicos, genera 1d4 por nivel de hechizo siempre que tú o el portador lance un hechizo.\r\nSiempre que el portador reciba daño, el grimorio intervendrá, restando al daño cualquier cantidad de puntos mágicos acumulados a tu voluntad.\r\nComo acción adicional, puedes cambiar el portador del grimorio. También puede hacerse como reacción gastando 3 puntos mágicos del grimorio, al hacerlo de esta manera, el nuevo portador obtendrá +2 a su CA y a sus tiradas de salvación de hechizo durante ese turno.', 'Clash of Fates', 1, 'subclases_5', 2),
(106, 'Esencia del Logos', 'Siempre tienes en mente los conocimientos esenciales sobre aquello que conoces, y puedes profundizar en ellos cuando lo necesites.\r\nCuando hagas una prueba de inteligencia, si sacas 9 o menos en 1d20 puedes considerarlo como si fuera 10.\r\nA partir de nivel 14, tras concentrarte o estudiar sobre una materia relacionada con una habilidad durante 1 hora, puedes obtener pericia con esa habilidad hasta el próximo descanso largo.', 'Clash of Fates', 1, 'subclases_5', 2),
(107, 'Marcador Mágico', 'Puedes generar un marcapáginas mágico en tu grimorio, marcando la página de uno de tus hechizos.\r\nEl portador del grimorio puede lanzar como reacción el hechizo marcado sin utilizar componentes verbales o somáticos, gasta tus huecos de hechizo para ello y esa misma cantidad de puntos mágicos de tu grimorio.\r\nAdicionalmente, si no eres el portador del grimorio, el portador podrá lanzar dicho hechizo de forma habitual gastando tus huecos de hechizo mientras sea de tu tópico o de nivel 3 o inferior. Aplicará las reglas habituales de lanzamiento de hechizos. Si cambias de portador o el grimorio pierde todos sus puntos mágicos, los efectos de concentración terminarán.\r\nPuedes usar este rasgo tantas veces como tu competencia por descanso largo.', 'Clash of Fates', 1, 'subclases_5', 6),
(108, 'Autodefensa', 'Tras obtener esta habilidad o terminar un descanso largo, puedes designar un hechizo de tu tópico que haga objetivo únicamente al portador. Ese hechizo se lanzará automáticamente siempre que el portador reciba un ataque.\r\nUn hechizo lanzado de esta manera gasta espacios de conjuro, solo puede usarse una vez por ronda salvo que sea un truco y solo podrá afectar al portador.', 'Clash of Fates', 1, 'subclases_5', 10),
(109, 'Manifestación de la Biblioteca', 'Como acción adicional, tu grimorio se divide en pequeños libros que pasan a orbitar alrededor de cualquier número de criaturas voluntarias que puedas ver a 35ft o menos de ti.\r\nEsas criaturas se consideran portadores de tu grimorio.\r\nTodos tus pequeños libros comparten los puntos mágicos entre sí.\r\nPuedes lanzar hechizos a través de cualquiera de estos pequeños libros.\r\nAl comienzo de tu turno, tu grimorio perderá tantos puntos mágicos como el doble de libros manifestados de esta manera. Si no puede mantenerlos activos, la habilidad terminará.\r\nPuedes activar esta habilidad una vez por descanso largo.', 'Clash of Fates', 1, 'subclases_5', 14),
(110, 'Mira Inspiradora', 'Siempre que una criatura sea inspirada por ti, esa criatura recupera tantos PG como tu modificador de competencia.\r\nSi sus PG estuvieran al máximo, en vez de eso, obtiene el doble de esa cantidad como PG temporales.\r\nAdicionalmente, siempre que termines una composición, puedes utilizar tu acción adicional para inspirar vida en esa composición. En lugar de lanzar el hechizo asignado, podrás crear un pequeño elemental nacido de tu arte. Esa criatura tiene 10 de CA, 10 PG + 5 adicionales por nivel del hechizo y contiene en su misma esencia la composición que le dió vida. Esa criatura puede usar su acción para realizar una de tus acciones de Corriente Artística, pero no puede empezar ni terminar una composición. Además, puedes usar tu acción para consumir dicha criatura y lanzar el hechizo dentro de ella. Si muere de otra manera, no se lanzará el hechizo.', 'Clash of Fates', 1, 'subclases_6', 3),
(111, 'Vitalidad Artística', 'Siempre que una criatura recupere PG por un efecto mágico que tu has creado, recuperas esa misma cantidad de PG.\r\nAdicionalmente, siempre que empieces una composición nueva, hasta una criatura de tu elección que puedas ver a 40ft o menos de ti recupera tantos PG como tu modificador de competencia.', 'Clash of Fates', 1, 'subclases_6', 6),
(112, '¡El arte es vida!', 'Tu arte deja huellas en aquello que lo presencia, ese resquicio de vida crece y crece a medida que utilizas tu arte.\r\nCuando una criatura reciba un efecto mágico creado por una de tus composiciones, obtiene, además, un resquicio de vida, puede acumular hasta 5.\r\nTus tiradas de ataque y efectos mágicos tienen +1 contra criaturas con resquicios de vida, además, tu CD de salvación aumenta en +1 contra esas criaturas.\r\nSiempre que un efecto mágico creado por una de tus composiciones afecte a una criatura con 5 resquicios de vida, puedes elegir uno y consumir todos los resquicios:\r\nUna fuente de vitalidad emana de la criatura, cualquier número de criaturas a 10ft de esa criatura recuperan tantos d6 PG como nivel del efecto mágico de composición.\r\nDrenas la vitalidad de dicha criatura, causando tantos d4 de daño adicional como nivel del efecto mágico de composición.\r\nPequeños elementales brotan de su cuerpo, alimentados por tu magia, crea un número de elementales de tu rasgo Vida Inspiradora igual al nivel del efecto mágico de composición, estas criaturas tendrán únicamente 10 PG.', 'Clash of Fates', 1, 'subclases_6', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidades5`
--

CREATE TABLE `habilidades5` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(2500) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `validado` tinyint(1) NOT NULL,
  `origen_id` varchar(255) NOT NULL,
  `origen_nivel` int(11) NOT NULL,
  `nombre2` varchar(200) NOT NULL,
  `descripcion2` varchar(2500) NOT NULL,
  `autor2` varchar(200) NOT NULL,
  `validado2` tinyint(1) NOT NULL,
  `origen_id2` varchar(255) NOT NULL,
  `origen_nivel2` int(11) NOT NULL,
  `nombre3` varchar(200) NOT NULL,
  `descripcion3` varchar(2500) NOT NULL,
  `autor3` varchar(200) NOT NULL,
  `validado3` tinyint(1) NOT NULL,
  `origen_id3` varchar(255) NOT NULL,
  `origen_nivel3` int(11) NOT NULL,
  `nombre4` varchar(200) NOT NULL,
  `descripcion4` varchar(2500) NOT NULL,
  `autor4` varchar(200) NOT NULL,
  `validado4` tinyint(1) NOT NULL,
  `origen_id4` varchar(255) NOT NULL,
  `origen_nivel4` int(11) NOT NULL,
  `nombre5` varchar(200) NOT NULL,
  `descripcion5` varchar(2500) NOT NULL,
  `autor5` varchar(200) NOT NULL,
  `validado5` tinyint(1) NOT NULL,
  `origen_id5` varchar(255) NOT NULL,
  `origen_nivel5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hechizos`
--

CREATE TABLE `hechizos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(999) NOT NULL,
  `nivel` varchar(10) NOT NULL,
  `escuela` varchar(100) NOT NULL,
  `rango` int(11) NOT NULL,
  `componentes` varchar(999) NOT NULL,
  `validado` tinyint(1) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `zona_efecto` varchar(200) NOT NULL,
  `tiempo_de_ejecucion` varchar(100) NOT NULL,
  `duracion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `hechizos`
--

INSERT INTO `hechizos` (`id`, `nombre`, `descripcion`, `nivel`, `escuela`, `rango`, `componentes`, `validado`, `autor`, `zona_efecto`, `tiempo_de_ejecucion`, `duracion`) VALUES
(1, 'Sentimiento Dudoso', 'Generas dudas sobre una criatura objetivo que puedas ver a\r\n30ft o menos de ti, esa criatura se replantea su próxima\r\nacción, pues ahora no está segura de si debe o no realizarla.\r\nEsa criatura deberá realizar una tirada de Salvación de\r\nSabiduría (CD Conjuros), si falla, no sumará su bonificador\r\nde competencia en la próxima tirada de ataque o habilidad\r\nque realice.', '0', 'Encantamiento', 30, 'V', 1, 'Clash of Fates', 'Una criatura', 'Acción adicional', 'Instantáneo'),
(2, 'Frío de Aura', 'Una criatura que puedas ver a 30ft o menos de ti recibe 1d6 de daño de Frío, después, debe hacer una Salvación de Constitución, si falla recibirá un Punto de Escarcha y 1d6 por cada Punto de Escarcha sobre ella o a 5ft de ella.', '1', 'Evocación', 30, 'V S M', 1, 'Clash of Fates', 'Una criatura', 'Acción', 'Instantáneo'),
(3, 'Soledad de Aura', 'Durante 1 minuto, los Puntos de Escarcha a 40ft o menos de ti se cargan de la soledad que experimentó Aura, desde ese momento, todas las criaturas que pasen por un Punto de Escarcha afectado deben hacer una Salvación de Carisma, si fallan soltarán lo que lleven y se moverán hasta salir de la escarcha, incluso si ya han superado su movilidad.', '1', 'Encantamiento', 40, 'V S M', 1, 'Clash of Fates', 'Área', 'Acción', '1 minuto'),
(4, 'Observar los Miedos', 'Observas los miedos de una criatura y eres capaz de hacérselos ver.\nEl siguiente ataque o hechizo que lances y que le haga objetivo a una criatura creará una sombra, el resto de personas solo verán una pequeña oscuridad, pero tú y la criatura afectada veréis los miedos más profundos.\nEl objetivo deberá hacer una Salvación de Sabiduría o estará asustada por ti.\nPuede repetir la salvación al principio de cada uno de sus turnos, si la supera será inmune a este Hechizo durante 1 día.', '1', 'Nigromancia', 120, 'V S', 1, 'Clash of Fates', 'Una criatura', 'Acción adicional', 'Instantáneo'),
(5, 'Voz de Nesses', 'Conjuras la melodiosa voz de Nesses.\nTodas las criaturas en un área de 15ft o menos de ti deben hacer una Salvación de Carisma, si fallan quedarán aturdidas por la melodiosa voz de Nesses por 1 minuto o hasta recibir daño.\nUna criatura que no pueda oir supera automáticamente la Salvación.\nPueden repetir la tirada de Salvación una vez en su turno.', '1', 'Encantamiento', 15, 'V S ', 1, 'Clash of Fates', 'Área', 'Acción', 'Instantáneo'),
(6, 'Filo Arcano', 'Imbuyes un arma al toque con poder mágico. Al hacerlo, elnivel del arma, así como las tiradas de ataque y daño realizadas con el arma aumentan en 1d4 durante 1 minuto.\n{|B|}En niveles superiores.{|/B|} Cuando lanzas este conjuro usando un espacio de nivel 2 o superior, las tiradas de daño aumentan en +1d2 por cada nivel por encima de 1.', '1', 'Abjuración', 0, 'V S', 1, 'Clash of Fates', 'Propio', 'Acción adicional', '1 minuto'),
(7, 'Círculo de Espadas', 'Convocas 4 espadas espectrales alrededor de una criatura voluntaria hasta 40ft o menos de ti durante 1 minuto.\nEstas espadas no atacan por su cuenta y se mueven alrededor de esa criatura junto a ella. Como acción adicional, puedes hacer que las cuatro espadas se movilicen contra una criatura a 10ft o menos de la criatura afectada.\nRealiza una tirada de ataque de hechizo, si acierta, causará 1d4+3 de daño cortante mágico y podrás repetir la tirada de ataque. Puedes acertar hasta cuatro veces.', '1', 'Conjuración', 40, 'V S', 1, 'Clash of Fates', 'Una criatura', 'Acción', '1 minuto'),
(8, 'Salto de Luz', 'Invocas la luz innata en ti, mezclandote con ella hasta volverte uno. En este estado puedes desplazarte hasta 30ft como un rayo de luz, atravesando superficies transparentes, como un cristal, y pudiendo pasar por agujeros pequeños o zonas similares.', '1', 'Transmutación', 0, 'V', 1, 'Clash of Fates', 'Propio', 'Reacción', 'Instantáneo'),
(9, 'Melodía de Protección', 'Una melodía familiar y protectora resuena en la cabeza de una criatura aliada que puedas ver a 40ft o menos de ti.\nDurante sus próximos 3 turnos, esa criatura recibe 1d4 menos de daño de cualquier fuente. No puede acumularse.', '1', 'Abjuración', 40, 'V S', 1, 'Clash of Fates', 'Una criatura', 'Acción', 'Instantáneo'),
(10, 'Melodía de Presteza', 'Una melodía familiar y acelerada resuena en el cabeza de una criatura aliada que puedas ver a 40ft o menos de ti.\nDurante sus próximos 3 turnos, la velocidad de esa criatura aumenta en 10ft. No puede acumularse', '1', 'Abjuración', 40, 'V S', 1, 'Clash of Fates', 'Una criatura', 'Acción', 'Instantáneo'),
(11, 'Melodía del Despertar', 'Una melodía familiar y sonora resuena en la cabeza de una criatura aliada que puedas ver a 40ft o menos de ti.\nEsa criatura despierta si estuviera dormida y durante sus próximos 3 turnos, no puede dormirse ni por efectos mágicos. No puede acumularse.', '1', 'Abjuración', 40, 'V S', 1, 'Clash of Fates', 'Una criatura', 'Acción', 'Instantáneo');

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
  `descripcion` varchar(999) NOT NULL,
  `fuerza` varchar(2) NOT NULL,
  `destreza` varchar(2) NOT NULL,
  `inteligencia` varchar(2) NOT NULL,
  `carisma` varchar(2) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `velocidad` int(11) NOT NULL,
  `ataque_desarmado` varchar(999) NOT NULL,
  `validado` tinyint(1) NOT NULL,
  `constitucion` varchar(2) NOT NULL,
  `sabiduria` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `razas`
--

INSERT INTO `razas` (`id`, `nombre`, `descripcion`, `fuerza`, `destreza`, `inteligencia`, `carisma`, `autor`, `velocidad`, `ataque_desarmado`, `validado`, `constitucion`, `sabiduria`) VALUES
(1, 'Humano', 'Raza creada por Athenii, Dios Rúnico de la Batalla.\r\nSon la especie predominante del continente, hábiles maestros de la batalla, saben adaptarse a cualquier conflicto y normalmente los usan a su propio beneficio.', '1', '1', '1', '0', 'Clash of Fates', 30, 'Golpe: 1d4 (Contundente, Fuerza)', 1, '0', '0'),
(2, 'Elfo', 'Raza creada por Igariel, Diosa Rúnica de la Vida, son místicos y conectan con toda la vida que les rodea, no suelen involucrarse en combates a menos que sea necesario.\r\nComo raza portan magia, débil pero suficiente para poder conjurar ciertos hechizos.', '-1', '0', '1', '0', 'Clash of Fates', 30, 'Golpe: 1d4 (Contundente, Fuerza)', 1, '0', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `insercion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subclases`
--

CREATE TABLE `subclases` (
  `id` int(11) NOT NULL,
  `clase_id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `requisitos` varchar(999) DEFAULT NULL,
  `autor` varchar(200) NOT NULL,
  `validado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subclases`
--

INSERT INTO `subclases` (`id`, `clase_id`, `nombre`, `requisitos`, `autor`, `validado`) VALUES
(1, 1, 'Estratega', 'Puntuación de Inteligencia de 12 o superior.', 'Clash of Fates', 1),
(2, 1, 'Bélico', 'Puntuación de Fuerza 12 o superior', 'Clash of Fates', 1),
(3, 1, 'Domador del Viento', 'Pacto con Cephiros', 'Clash of Fates', 1),
(4, 2, 'Escuela del Pergamino', 'Ninguno', 'Clash of Fates', 1),
(5, 2, 'Escuela del Gran Tomo', 'Ninguno', 'Clash of Fates', 1),
(6, 3, 'Corriente de la Vida', 'Ninguno', 'Clash of Fates', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subrazas`
--

CREATE TABLE `subrazas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(999) NOT NULL,
  `fuerza` varchar(2) NOT NULL,
  `destreza` varchar(2) NOT NULL,
  `inteligencia` varchar(2) NOT NULL,
  `carisma` varchar(2) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `ataque_desarmado` varchar(999) NOT NULL,
  `validado` tinyint(1) NOT NULL,
  `raza_id` int(11) NOT NULL,
  `constitucion` varchar(2) NOT NULL,
  `sabiduria` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subrazas`
--

INSERT INTO `subrazas` (`id`, `nombre`, `descripcion`, `fuerza`, `destreza`, `inteligencia`, `carisma`, `autor`, `ataque_desarmado`, `validado`, `raza_id`, `constitucion`, `sabiduria`) VALUES
(1, 'Oriental', 'Humanos de rasgos orientales, piel blanca, pelo de tonalidades negras y ojos generalmente rasgados.\r\nViven en lo que se conoce como Imperio de Hanafu y sus proximidades, no son muy abiertos por lo que no aceptan a según que razas.\r\nCreen en el honor como estilo de vida y lo llevan al límite en sus costumbres.', '1', '0', '0', '0', 'Clash of Fates', 'Golpe: 1d4 (Contundente, Fuerza)', 1, 0, '0', '0'),
(2, 'Desértico', 'Humanos que habitan principalmente el Imperio de Pheros, de piel oscura y constitución fuerte.\r\nEstán acostumbrados a las extremas temperaturas del desierto y a caminar por sus dunas, hacen lo que sea por su supervivencia.', '0', '0', '-1', '0', 'Clash of Fates', 'Golpe: 1d4 (Contundente, Fuerza)\r\n', 1, 0, '0', '0'),
(3, 'Continental', 'Humanos de piel blanca o morena, habitan la mayor parte del Continente de Deitia, desde el Reino de Orsfon hasta República, son persuasivos y tienden al engaño.', '0', '0', '0', '1', 'Clash of Fates', 'Golpe: 1d4 (Contundente, Fuerza)\r\n', 1, 0, '0', '0'),
(4, 'Elfo de la Luz', 'Elfos afines a la luz, son capaces de iluminar con su poder mágico innato.\r\nPor lo general suelen ser extrovertidos y lanzados. \r\nSu pelo suele ser blanco o rubio, su piel blanca y sus ojos amarillos.', '0', '0', '0', '0', 'Clash of Fates', 'Golpe: 1d4 (Contundente, Fuerza)', 1, 0, '0', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trasfondo`
--

CREATE TABLE `trasfondo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(999) NOT NULL,
  `origen` int(11) NOT NULL,
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

INSERT INTO `trasfondo` (`id`, `nombre`, `descripcion`, `origen`, `idiomas`, `objetos_iniciales`, `competencias`, `validado`, `autor`, `plano`) VALUES
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
-- Indices de la tabla `habilidades5`
--
ALTER TABLE `habilidades5`
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
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subclases`
--
ALTER TABLE `subclases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subrazas`
--
ALTER TABLE `subrazas`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `dotes`
--
ALTER TABLE `dotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de la tabla `habilidades5`
--
ALTER TABLE `habilidades5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hechizos`
--
ALTER TABLE `hechizos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subclases`
--
ALTER TABLE `subclases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `subrazas`
--
ALTER TABLE `subrazas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
