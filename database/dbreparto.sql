-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2022 a las 20:21:55
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbreparto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accion_pedidos`
--

CREATE TABLE `accion_pedidos` (
  `id_acci` int(11) NOT NULL,
  `nombre_acci` varchar(50) NOT NULL,
  `estado_acci` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_productos`
--

CREATE TABLE `categoria_productos` (
  `id_categoria_productos` int(11) NOT NULL,
  `nombre_categoria_productos` varchar(100) NOT NULL,
  `descripccion_categoria_productos` text DEFAULT NULL,
  `estado_categoria_productos` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_clie` int(11) NOT NULL,
  `nombre_clie` varchar(150) NOT NULL,
  `telefono_clie` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_pedidos`
--

CREATE TABLE `detalles_pedidos` (
  `id_pedi` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `precioUnidad_deta` decimal(10,2) NOT NULL,
  `cantidad_deta` int(11) NOT NULL,
  `descuento_deta` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modo_pago`
--

CREATE TABLE `modo_pago` (
  `id_modo` int(11) NOT NULL,
  `nombre_modo` varchar(30) NOT NULL,
  `descripcion_modo` varchar(90) NOT NULL,
  `estado_modo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` int(11) NOT NULL,
  `monto_pago` decimal(10,2) NOT NULL,
  `fecha_pago` datetime NOT NULL,
  `modoPago` int(11) NOT NULL,
  `estado_pago` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedi` int(11) NOT NULL,
  `destinatario_pedi` int(11) NOT NULL,
  `direccionDestinatario_pedi` text NOT NULL,
  `fecha_pedi` datetime NOT NULL,
  `fechaEnvio_pedi` datetime NOT NULL,
  `fechaEntrega_pedi` datetime NOT NULL,
  `motorizado` int(11) NOT NULL,
  `modo_pago_pedi` int(11) NOT NULL,
  `accion_pedi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perf` int(11) NOT NULL,
  `nombre_perf` varchar(50) NOT NULL,
  `estado_perf` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 
--------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(11) NOT NULL,
  `nombre_prod` varchar(150) NOT NULL,
  `precioUnidad_prod` decimal(10,2) NOT NULL,
  `stock_prod` int(11) DEFAULT NULL,
  `foto_prod` varchar(150) NOT NULL,
  `categoria_prod` int(11) NOT NULL,
  `estado_prod` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usua` int(11) NOT NULL,
  `nombre_usua` varchar(100) NOT NULL,
  `apellidos_usua` varchar(100) NOT NULL,
  `dni_usua` int(8) DEFAULT NULL,
  `fechaNacimiento_usua` date NOT NULL,
  `sexo_usua` char(1) DEFAULT NULL,
  `telefono_usua` int(9) NOT NULL,
  `nick_usua` varchar(30) NOT NULL,
  `password_usua` varchar(50) NOT NULL,
  `fechaRegistro_usua` datetime NOT NULL,
  `perfil_usua` int(11) NOT NULL,
  `estado_usua` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accion_pedidos`
--
ALTER TABLE `accion_pedidos`
  ADD PRIMARY KEY (`id_acci`);

--
-- Indices de la tabla `categoria_productos`
--
ALTER TABLE `categoria_productos`
  ADD PRIMARY KEY (`id_categoria_productos`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_clie`);

--
-- Indices de la tabla `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  ADD KEY `fk_7` (`id_pedi`),
  ADD KEY `fk_8` (`id_prod`);

--
-- Indices de la tabla `modo_pago`
--
ALTER TABLE `modo_pago`
  ADD PRIMARY KEY (`id_modo`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `fk_9` (`modoPago`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedi`),
  ADD KEY `fk_2` (`destinatario_pedi`),
  ADD KEY `fk_3` (`motorizado`),
  ADD KEY `fk_4` (`modo_pago_pedi`),
  ADD KEY `fk_5` (`accion_pedi`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perf`),
  ADD UNIQUE KEY `nombre_perf` (`nombre_perf`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `fk_6` (`categoria_prod`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usua`),
  ADD UNIQUE KEY `dni_usua` (`dni_usua`),
  ADD KEY `fk_1` (`perfil_usua`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accion_pedidos`
--
ALTER TABLE `accion_pedidos`
  MODIFY `id_acci` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria_productos`
--
ALTER TABLE `categoria_productos`
  MODIFY `id_categoria_productos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_clie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modo_pago`
--
ALTER TABLE `modo_pago`
  MODIFY `id_modo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usua` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  ADD CONSTRAINT `fk_7` FOREIGN KEY (`id_pedi`) REFERENCES `pedidos` (`id_pedi`),
  ADD CONSTRAINT `fk_8` FOREIGN KEY (`id_prod`) REFERENCES `productos` (`id_prod`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `fk_9` FOREIGN KEY (`modoPago`) REFERENCES `modo_pago` (`id_modo`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_2` FOREIGN KEY (`destinatario_pedi`) REFERENCES `clientes` (`id_clie`),
  ADD CONSTRAINT `fk_3` FOREIGN KEY (`motorizado`) REFERENCES `usuarios` (`id_usua`),
  ADD CONSTRAINT `fk_4` FOREIGN KEY (`modo_pago_pedi`) REFERENCES `modo_pago` (`id_modo`),
  ADD CONSTRAINT `fk_5` FOREIGN KEY (`accion_pedi`) REFERENCES `accion_pedidos` (`id_acci`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_6` FOREIGN KEY (`categoria_prod`) REFERENCES `categoria_productos` (`id_categoria_productos`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`perfil_usua`) REFERENCES `perfil` (`id_perf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
