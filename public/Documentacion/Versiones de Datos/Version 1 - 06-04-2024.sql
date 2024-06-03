-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2024 a las 17:11:57
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
  `string` varchar(999) NOT NULL,
  `autor` varchar(350) NOT NULL,
  `validado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `descripción` varchar(999) NOT NULL,
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
(23, 'Cocinar', 'Puedes utilizar 1 hora para realizar una receta utilizando instrucciones e ingredientes de tu recetario.\r\nPara indicar la calidad de la comida realiza una tirada de Cocina, es una habilidad única del Cocinero, suma tu Competencia + Destreza + Sabiduría.\r\n(Consulta todo sobre las recetas en el Manual de Cocina.)', 'Clash of Fates', 1, 'trasfondo_13', 0);

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
  `validado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(13, 'Cocinero', 'Te dedicas a la elaboración de platos en cocinas', 0, NULL, '5 monedas de oro, 20 Raciones, Herramientas de Cocinero, Recetario.', 'Elige 2 entre: Naturaleza, Historia, Investigación, Medicina, y Juego de Manos.', 1, 'Clash of Fates', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dotes`
--
ALTER TABLE `dotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `hechizos`
--
ALTER TABLE `hechizos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `razas`
--
ALTER TABLE `razas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subclases`
--
ALTER TABLE `subclases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subrazas`
--
ALTER TABLE `subrazas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trasfondo`
--
ALTER TABLE `trasfondo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
