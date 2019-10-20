-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 20-10-2019 a las 23:55:51
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(100) DEFAULT NULL,
  `es_activa` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Categorias de los productos almacenados';

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` VALUES
(4, 'ssdfsdf', 1),
(5, 'SELECCION 512', 1),
(6, 'sfsdfsfd', NULL),
(7, 'CAMBIADO 2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_subcategoria`
--

DROP TABLE IF EXISTS `categoria_subcategoria`;
CREATE TABLE `categoria_subcategoria` (
  `id_catsub` int(11) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_sub_categoria` int(11) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `es_activa` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla para unir las categorias a las subcategorias.';

--
-- Volcado de datos para la tabla `categoria_subcategoria`
--

INSERT INTO `categoria_subcategoria` VALUES
(1, 7, NULL, 'PRUEBA INSERCION', NULL),
(3, 7, 5, 'NUEVA DESCRIPCION', NULL),
(4, 7, 5, 'NUEVO COMBO', NULL),
(5, 3, 3, 'TEST', NULL),
(6, 5, 5, 'CAMBIAME NUEVAMENTE', 1),
(7, 4, 5, 'NUEVA CREADA', 0),
(8, 3, 3, 'NUEVA DOS VECES INACTIva', 1),
(9, 7, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(100) DEFAULT NULL,
  `descripcion_producto` varchar(100) DEFAULT NULL,
  `es_activo` int(11) DEFAULT '0',
  `valor_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla para almacenar productos';

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` VALUES
(2, 'PROD', 'DES', 1, 100000),
(3, 'PRODUCTOTRES', 'DESCRIPCION', 1, 20000),
(4, 'PRODUCTO CUATRO', 'DESCRIPCION CUATRO', 1, 15900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_cat`
--

DROP TABLE IF EXISTS `product_cat`;
CREATE TABLE `product_cat` (
  `id_prodcat` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `es_activo` int(11) DEFAULT '0',
  `id_subcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Union categorias productos';

--
-- Volcado de datos para la tabla `product_cat`
--

INSERT INTO `product_cat` VALUES
(2, 5, 4, 0, 5),
(3, 3, 4, 1, 0),
(5, 7, 3, 1, 0),
(6, 5, 4, 1, 0),
(7, 5, 3, 1, 5),
(8, 5, 4, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

DROP TABLE IF EXISTS `subcategoria`;
CREATE TABLE `subcategoria` (
  `id_subcategoria` int(11) NOT NULL,
  `nombre_subcategoria` varchar(100) DEFAULT NULL,
  `es_activa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Categorias de los productos almacenados' ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` VALUES
(3, 'CUATROCIENTOS DOCE', 1),
(5, 'UNO DOS', 1),
(6, NULL, 0),
(7, NULL, 0),
(8, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `totales_actuales`
--

DROP TABLE IF EXISTS `totales_actuales`;
CREATE TABLE `totales_actuales` (
  `id_producto` int(11) DEFAULT NULL,
  `cantidad_producto` int(11) DEFAULT NULL,
  `id_totales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Total de productos.';

--
-- Volcado de datos para la tabla `totales_actuales`
--

INSERT INTO `totales_actuales` VALUES
(4, 9999, 5),
(3, 100999, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD KEY `Índice 1` (`id_categoria`);

--
-- Indices de la tabla `categoria_subcategoria`
--
ALTER TABLE `categoria_subcategoria`
  ADD KEY `Índice 1` (`id_catsub`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD KEY `id` (`id_producto`);

--
-- Indices de la tabla `product_cat`
--
ALTER TABLE `product_cat`
  ADD KEY `id_product` (`id_prodcat`),
  ADD KEY `FK_product_cat_categoria_subcategoria` (`id_categoria`),
  ADD KEY `FK_product_cat_productos` (`id_product`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD KEY `Índice 1` (`id_subcategoria`);

--
-- Indices de la tabla `totales_actuales`
--
ALTER TABLE `totales_actuales`
  ADD PRIMARY KEY (`id_totales`),
  ADD KEY `FK__productos` (`id_producto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indices de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `categoria_subcategoria`
--
ALTER TABLE `categoria_subcategoria`
  MODIFY `id_catsub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `product_cat`
--
ALTER TABLE `product_cat`
  MODIFY `id_prodcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id_subcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `totales_actuales`
--
ALTER TABLE `totales_actuales`
  MODIFY `id_totales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `product_cat`
--
ALTER TABLE `product_cat`
  ADD CONSTRAINT `FK_product_cat_categoria_subcategoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria_subcategoria` (`id_catsub`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_product_cat_productos` FOREIGN KEY (`id_product`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `totales_actuales`
--
ALTER TABLE `totales_actuales`
  ADD CONSTRAINT `FK__productos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
