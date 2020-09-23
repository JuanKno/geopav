-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2020 a las 20:24:21
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `goepav`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `editado` datetime NOT NULL,
  `nivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id_admin`, `usuario`, `nombre`, `password`, `editado`, `nivel`) VALUES
(99, 'admin', 'Maria Antonia', '$2y$12$qmOm4n9GeHmLoZ.kHIpWIOaJ8w6dC87n0yQdonU2o2p/ykKlYgjyC', '0000-00-00 00:00:00', 1),
(100, 'admin2', 'Xiomara Gomez Uribe', '$2y$12$eNTriaKo0R2yGBOMygRVHOcSd5gdSgBwhiF3OdYdCAAkn6rS4Icam', '2020-07-12 17:01:03', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `id_categoria` tinyint(10) NOT NULL,
  `cat_evento` varchar(50) NOT NULL,
  `icono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria_evento`
--

INSERT INTO `categoria_evento` (`id_categoria`, `cat_evento`, `icono`) VALUES
(1, 'Talleres', 'fa-edit'),
(2, 'Conferencias', 'fa-comment'),
(3, 'Clases', 'fa-users');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `evento_id` tinyint(10) NOT NULL,
  `nombre_evento` varchar(60) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `id_cat_evento` tinyint(10) NOT NULL,
  `id_inv` tinyint(4) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `id_cat_evento`, `id_inv`, `clave`, `editado`) VALUES
(2, 'Baile - Salsa', '2020-12-11', '10:00:00', 3, 1, 'clase_01', '0000-00-00 00:00:00'),
(3, 'Guitarra', '2020-12-11', '12:00:00', 3, 2, 'clase_02', '0000-00-00 00:00:00'),
(4, 'Carreras del futuro', '2020-12-11', '14:00:00', 2, 3, 'conf_01', '0000-00-00 00:00:00'),
(5, 'Fotografia - sesion 1', '2020-12-11', '17:00:00', 1, 5, 'taller_01', '0000-00-00 00:00:00'),
(6, 'pintura - sesion 1', '2020-12-11', '19:00:00', 1, 6, 'taller_02', '0000-00-00 00:00:00'),
(7, 'Baile - Merengue', '2020-12-12', '10:00:00', 3, 1, 'clase_03', '0000-00-00 00:00:00'),
(8, 'Piano', '2020-12-12', '17:00:00', 3, 2, 'clase_04', '0000-00-00 00:00:00'),
(10, 'Redes sociales', '2020-12-12', '10:00:00', 2, 4, 'conf_04', '0000-00-00 00:00:00'),
(11, 'Fotografia - sesion 2', '2020-12-12', '10:00:00', 1, 5, 'taller_03', '0000-00-00 00:00:00'),
(12, 'Pintura - Sesion 2', '2020-12-12', '12:00:00', 1, 6, 'taller_04', '0000-00-00 00:00:00'),
(13, 'Marketing Digital', '2020-12-11', '20:00:00', 2, 4, 'conf_02', '0000-00-00 00:00:00'),
(14, 'Baile - Bachataxd', '2020-12-13', '17:00:00', 3, 1, 'clase_05', '2020-07-14 17:19:05'),
(15, 'Flauta', '2020-12-13', '19:00:00', 3, 2, 'clase_06', '0000-00-00 00:00:00'),
(17, 'Como ganar dinero en linea', '2020-12-13', '10:00:00', 2, 4, 'conf_06', '0000-00-00 00:00:00'),
(18, 'Fotografia - sesion 3', '2020-12-13', '17:00:00', 1, 5, 'taller_05', '0000-00-00 00:00:00'),
(19, 'Pintura - Sesion 3', '2020-12-13', '19:00:00', 1, 6, 'taller_06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE `invitados` (
  `invitado_id` tinyint(4) NOT NULL,
  `nombre_invitado` varchar(30) NOT NULL,
  `apellido_invitado` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `url_imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`invitado_id`, `nombre_invitado`, `apellido_invitado`, `descripcion`, `url_imagen`) VALUES
(1, 'Camilo', 'Ramirez', 'Habitante del corregimiento de San Cristobal bailarin profesional', 'invitado1.jpg'),
(2, 'Daniela', 'Franco', 'Habitante del corregimiento de San Cristobal que es estudiante de musica en Bellas artes. Muy comprometida con su estudio y con la comunidad', 'invitado2.jpg'),
(3, 'Daniel', 'Moreno', 'Habitante del corregimiento de San Cristobal, egresado de la Universidad de Antioquia como ingeniero fisico y actualmente se dedica a su pasion, siendo floricultor en el corregimiento', 'invitado3.jpg'),
(4, 'Carolina', 'Correa', 'Habitante del corregimiento de San Cristobal egresada de negocios internacionales de la universidad EAFIT, con maestria en bolsa de valores. ', 'invitado4.jpg'),
(5, 'Davier', 'Marmol', 'Habitante del corregimiento de San Cristobal, estudiante de Diseño grafico y sin duda el mejor fotografo que tenemos en el corregimiento, su optica es impecable y sin duda aprenderemos mucho de el', 'invitado5.jpg'),
(6, 'Susana', 'Ramirez', 'Habitante del corregimiento de San Cristobal que es estudiante de artes plasticas en la Universidad de Antioquia. Muy comprometida con su estudio y con la comunidad', 'invitado6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regalos`
--

CREATE TABLE `regalos` (
  `ID_regalo` int(11) NOT NULL,
  `nombre_regalo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `regalos`
--

INSERT INTO `regalos` (`ID_regalo`, `nombre_regalo`) VALUES
(1, 'Pulsera'),
(2, 'Etiquetas'),
(3, 'Plumas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrados`
--

CREATE TABLE `registrados` (
  `ID_Registrado` bigint(20) UNSIGNED NOT NULL,
  `nombre_registrado` varchar(50) NOT NULL,
  `apellido_registrado` varchar(50) NOT NULL,
  `email_registrado` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `pases_articulos` longtext NOT NULL,
  `talleres_registrados` longtext NOT NULL,
  `regalo` int(11) NOT NULL,
  `total_pagado` varchar(50) NOT NULL,
  `pagado` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registrados`
--

INSERT INTO `registrados` (`ID_Registrado`, `nombre_registrado`, `apellido_registrado`, `email_registrado`, `fecha_registro`, `pases_articulos`, `talleres_registrados`, `regalo`, `total_pagado`, `pagado`) VALUES
(42, 'Xiomara', 'Gomez', 'xiomara@gmail.com', '2020-05-15 18:00:47', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":3,\"etiquetas\":4}', '{\"eventos\":[\"conf_01\",\"conf_02\",\"clase_03\",\"clase_04\",\"conf_05\",\"conf_06\"]}', 1, '290.9', 1),
(43, 'Andres', 'Mora', 'carlosmora055@gmail.com', '2020-05-15 18:08:18', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":2}', '{\"eventos\":[\"conf_01\",\"conf_02\",\"clase_03\",\"clase_04\",\"clase_05\",\"clase_06\"]}', 3, '83.3', 1),
(44, 'Xiomara', 'Gomez', 'xiomara@gmail.com', '2020-05-15 22:35:59', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"clase_01\",\"clase_02\",\"conf_03\",\"conf_04\",\"clase_05\",\"clase_06\"]}', 1, '71.3', 1),
(45, '', '', '', '2020-05-20 16:43:39', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1}', '[]', 2, '9.3', 0),
(46, 'Xiomara', 'Mascherano', 'danielisaza080@gmail.com', '2020-05-21 05:17:20', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":2}', '{\"eventos\":[\"conf_01\",\"clase_03\",\"conf_03\"]}', 2, '53.3', 0),
(47, 'camoraf', 'Mora', 'carlosmora055@gmail.com', '2020-06-27 22:39:28', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":3,\"etiquetas\":2}', '{\"eventos\":[\"taller_03\"]}', 2, '76.9', 1),
(48, 'Andres', 'Mora', 'carlosmora055@gmail.com', '2020-07-14 23:58:57', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":2}', '[]', 2, '93.3', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`evento_id`),
  ADD KEY `id_cat_evento` (`id_cat_evento`),
  ADD KEY `id_inv` (`id_inv`);

--
-- Indices de la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`invitado_id`);

--
-- Indices de la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD PRIMARY KEY (`ID_regalo`);

--
-- Indices de la tabla `registrados`
--
ALTER TABLE `registrados`
  ADD PRIMARY KEY (`ID_Registrado`),
  ADD KEY `regalo` (`regalo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `id_categoria` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `evento_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `invitados`
--
ALTER TABLE `invitados`
  MODIFY `invitado_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `regalos`
--
ALTER TABLE `regalos`
  MODIFY `ID_regalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registrados`
--
ALTER TABLE `registrados`
  MODIFY `ID_Registrado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cat_evento`) REFERENCES `categoria_evento` (`id_categoria`),
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_inv`) REFERENCES `invitados` (`invitado_id`);

--
-- Filtros para la tabla `registrados`
--
ALTER TABLE `registrados`
  ADD CONSTRAINT `registrados_ibfk_1` FOREIGN KEY (`regalo`) REFERENCES `regalos` (`ID_regalo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
