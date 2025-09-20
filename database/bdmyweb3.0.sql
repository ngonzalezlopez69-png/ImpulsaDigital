-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-09-2025 a las 01:51:06
-- Versión del servidor: 11.8.3-MariaDB-log
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u806172345_bdtest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL,
  `descripcion_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre_categoria`, `descripcion_cat`) VALUES
(1, 'Desarrollo de Software', 'Software a la Medida'),
(2, 'Diseño UX/UI', 'Diseño Experiencia Usuario'),
(3, 'Gestión Estratégica', 'Gestión Estratégica para pymes y empresas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `empresa` varchar(20) NOT NULL,
  `telefono_empresa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `correo`, `empresa`, `telefono_empresa`) VALUES
(1, 'Nelson Gonzalez', 'impulsa@hotmail.com', 'Impulsa edita', '569568945'),
(3, 'Nelson', 'exampletest@email.cl', 'Impulsa editado', '123123123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pago`
--

CREATE TABLE `detalle_pago` (
  `id` int(10) UNSIGNED NOT NULL,
  `pago_id` int(11) DEFAULT NULL,
  `rut_cliente` varchar(20) NOT NULL,
  `numero_cuenta` varchar(30) NOT NULL,
  `monto` varchar(30) NOT NULL,
  `cuenta_tranfer` varchar(30) NOT NULL,
  `tipo_cuenta` varchar(30) NOT NULL,
  `banco` varchar(30) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_pago`
--

INSERT INTO `detalle_pago` (`id`, `pago_id`, `rut_cliente`, `numero_cuenta`, `monto`, `cuenta_tranfer`, `tipo_cuenta`, `banco`, `estado`, `fecha`) VALUES
(1, NULL, '15197938-k', '0012000340059', '11861000878', '1230002100034', 'cuenta_corriente', 'banco_estado', 'Pendiente', '2025-09-11 12:56:45'),
(2, NULL, '12345667778', '098001009920101', '10000000', '010102020203030', 'cuenta_corriente', 'banco_estado', 'Finalizado', '2025-09-10 00:21:50'),
(3, NULL, '12345667778', '09800100992010', '100000000', '010102020203030', 'cuenta_corriente', 'banco_estado', 'Finalizado', '2025-09-10 00:22:11'),
(5, NULL, '12312345676', '098001009920101', '90000000', '010102020203030', 'cuenta_corriente', 'banco_chile', 'Finalizado', '2025-09-10 00:22:33'),
(6, NULL, '151979394-k', '0980010099201011234432', '1000000000', '010102020203131', 'cuenta_corriente', 'banco_santander', 'Pagado', '2025-09-10 00:22:54'),
(7, NULL, '12345667778', 'domasodmoas', '10000000', '1230002100034', 'cuenta_corriente', 'banco_santander', '', '2025-09-11 14:05:22'),
(8, NULL, '12345667778', '0012000340059', '10000000', '010102020203030', 'cuenta_corriente', 'banco_chile', '', '2025-09-11 14:19:43'),
(9, NULL, '12345667778', '0012000340059', '10000000', '010102020203030', 'cuenta_corriente', 'banco_chile', '', '2025-09-11 14:32:40'),
(10, NULL, '12345667778', 'domasodmoas', '10000000', '1230002100034', 'cuenta_corriente', 'banco_bci', '', '2025-09-18 01:50:27'),
(11, NULL, '15197938-k', '0012000340059', '10000000', '1230002100034', 'cuenta_corriente', 'banco_chile', '', '2025-09-18 15:50:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id` int(11) NOT NULL,
  `venta_id` int(11) DEFAULT NULL,
  `fecha_emision` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tipo_documento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `user_id`) VALUES
(1, 'Nelson', '123456', NULL),
(13, 'test1', '123456', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_asesor`
--

CREATE TABLE `login_asesor` (
  `id` int(11) NOT NULL,
  `user` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login_asesor`
--

INSERT INTO `login_asesor` (`id`, `user`, `password`, `user_id`) VALUES
(1, 'Gonzalez', '123456', 45),
(3, 'nelson', '123456', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(11) NOT NULL,
  `sub_total` double NOT NULL,
  `tipo_pago` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio`
--

CREATE TABLE `portafolio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `subtitulo` varchar(30) NOT NULL,
  `imagen_portafolio` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `cliente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `portafolio`
--

INSERT INTO `portafolio` (`id`, `titulo`, `subtitulo`, `imagen_portafolio`, `descripcion`, `cliente`) VALUES
(1, 'Impulsa', 'Aplicación Web Impulsa', 'itserv.jpeg', 'Desarrollo de software', 'ImpulsaDigital'),
(2, 'Proyecto 2', 'Proyecto web banco santander', '', 'Desarrollo de Software a La Medida', 'Banco santander'),
(6, 'Proyecto 3', 'Diseño UX', 'uxui.jpeg', 'Diseño Experiencia Usuario', 'TeleTrabajo'),
(7, 'prueba1', 'ingresado', '', 'nada', 'cliente importante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre_rol` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre_rol`, `fecha_registro`) VALUES
(45, 'Administrador Ngonzalez', '2025-09-09 17:04:54'),
(46, 'Asesor Editado', '2025-09-09 22:11:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(11) NOT NULL,
  `nombre_servicio` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `precio` double NOT NULL,
  `imagen_servicio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `portafolio_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `date_updated_service` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `nombre_servicio`, `descripcion`, `categoria_id`, `precio`, `imagen_servicio`, `portafolio_id`, `usuario_id`, `date_updated_service`) VALUES
(1, 'Desarrollo de software', 'software a la medida', 1, 11861000, '1738034631_actividadesClave.jpeg', 1, 45, '2025-05-24 02:16:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `rut` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `rut`, `correo`, `telefono`, `direccion`, `fecha_registro`, `rol_id`) VALUES
(1, 'prueba4', 'prueba4', '99999-9', 'prueba4@hotmail.com', '999999', 'tititititi', '2025-09-10 02:05:10', 0),
(45, 'Carlos', 'Altamirano', '151762345-2', 'correomr@hotmail.com', '1122334455', 'test #1247', '2025-09-10 00:18:43', 46),
(46, 'Dario', 'Urrutia', '123123123-1', 'example@email.cl', '999999964', 'living in my job #123', '2025-09-10 00:19:20', 46),
(57, 'Usuario Test ', 'Post Delete', '123123123-4', 'correomr@hotmail.com', '9999999456', 'direccion test 1234', '2025-09-09 17:37:05', 45),
(58, 'Nombre Test', 'Apellidos Test', '123123123-4', 'correomr@hotmail.com', '999999964', 'direccion in my job 1234', '2025-09-09 17:37:05', 45),
(59, 'Miguel', 'Tester', '151762345-9', 'exampletest@email.cl', '999999964', 'direccion in my job 1232', '2025-09-10 00:19:42', 45),
(61, 'Mario', 'Aguilera', '123123123-k', 'correomr@hotmail.com', '999999964', 'direccion in my job', '2025-09-10 00:20:10', 45),
(62, 'Pablo', 'Pedrovich', '1212121234-0', 'example@email.cl', '123123123', 'direccion fifticia', '2025-09-09 17:37:05', 46),
(63, 'Juan', 'Paco pedro', '123123123-4', 'example@email.cl', '43214325123', 'direccion falsa', '2025-09-09 17:37:05', 45),
(64, 'we', 'prueba3', '1616565', 'jojaosjd@hotmail.com', '54224562', 'test9', '2025-09-10 02:49:50', 3),
(65, 'tito', 'prueba3', '1616565', 'prueba5@hotmail.com', '98495929', 'test9', '2025-09-10 02:52:07', 3),
(66, 'sdfddsfdfd', 'sdfgwefwefwef', '1616565', 'jojaosjd@hotmail.com', '52626261', 'asdasdsdasdasd', '2025-09-10 02:53:09', 3),
(67, 'kpopkpkpewf', 'qwiheihqwe', '999999-9', 'wewe@hotmail.com', '98495929', 'test9', '2025-09-10 02:55:04', 3),
(68, 'prueba9', 'prueba9', '4589859585', 'prueba9@hotmail.com', '879654', 'prueba los aromos', '2025-09-10 12:29:42', 3),
(69, 'sadasd', 'pedro', '999999-9', 'prueba4@hotmail.com', '999999', 'asdasdsdasdasd', '2025-09-10 12:33:12', 3),
(70, 'prueba10', 'prueba10', '123456789', 'prueba10@hotmail.com', '123456', 'prueba10 con prueba 10', '2025-09-10 12:48:59', 3),
(71, 'Alejandro Galaz', 'galaz', '1245862', 'hasdoge@hotmail.com', '25445', 'hiasohfdoas', '2025-09-11 12:57:50', 3),
(72, 'prueba3', 'pedro', '999999-9', 'jojaosjd@hotmail.com', '999999', 'los tilos', '2025-09-18 01:44:16', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `servicio_id` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `pago_id` int(11) DEFAULT NULL,
  `fecha_venta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cliente_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_pago`
--
ALTER TABLE `detalle_pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_detallepago_pago` (`pago_id`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venta_id` (`venta_id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `user` (`id`),
  ADD KEY `usuario_id` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `login_asesor`
--
ALTER TABLE `login_asesor`
  ADD UNIQUE KEY `user` (`id`),
  ADD KEY `usuario_id` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria` (`categoria_id`),
  ADD KEY `portafolio_id` (`portafolio_id`,`usuario_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `rol_id_2` (`rol_id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicio_id` (`servicio_id`,`pago_id`,`cliente_id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `pago_id` (`pago_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detalle_pago`
--
ALTER TABLE `detalle_pago`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `login_asesor`
--
ALTER TABLE `login_asesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pago`
--
ALTER TABLE `detalle_pago`
  ADD CONSTRAINT `fk_detallepago_pago` FOREIGN KEY (`pago_id`) REFERENCES `pago` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_login_usuario` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `rol_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `servicio_ibfk_2` FOREIGN KEY (`portafolio_id`) REFERENCES `portafolio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `servicio_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`pago_id`) REFERENCES `pago` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
