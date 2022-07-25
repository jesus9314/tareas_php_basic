-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-07-2022 a las 02:14:57
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisuni_basic`
--
CREATE DATABASE IF NOT EXISTS `sisuni_basic` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sisuni_basic`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nameCate` varchar(50) NOT NULL,
  `stateCate` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nameCate`, `stateCate`) VALUES
(1, 'Lácteos', 1),
(2, 'confitería', 1),
(3, 'Frutas', 1),
(4, 'verduras', 1),
(5, 'Bebidas Alcoholicas', 0),
(7, 'Perecibles', 0);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `produccat`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `produccat` (
`id` int(11)
,`productName` varchar(50)
,`productPrice` decimal(18,2)
,`productStock` int(11)
,`nameCate` varchar(50)
,`cid` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` decimal(18,2) NOT NULL,
  `productStock` int(11) NOT NULL,
  `idCat` int(11) NOT NULL,
  `productState` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `productName`, `productPrice`, `productStock`, `idCat`, `productState`) VALUES
(1, 'Leche', '3.50', 20, 1, 1),
(2, 'Galletas Óreo', '1.50', 18, 2, 1),
(3, 'queso (k)', '3.50', 20, 1, 1),
(4, 'Peras (k)', '2.50', 20, 3, 1),
(5, 'Papaya (k)', '3.50', 20, 3, 0),
(6, 'Lechuga', '0.50', 16, 4, 1),
(8, 'zanahoria', '3.00', 5, 4, 1),
(9, 'Mantequilla Dorina', '4.00', 20, 1, 0),
(10, 'Cebolla (k)', '1.50', 4, 4, 1),
(11, 'Plátano (mano)', '3.00', 3, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(30) NOT NULL,
  `userPass` varchar(50) NOT NULL,
  `userName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `userEmail`, `userPass`, `userName`) VALUES
(1, 'jesus.9314@gmail.com', '123456', 'Jesús'),
(5, 'pedro@gmail.com', '123456', 'Pedro'),
(6, 'pepito.perez@gmail.com', '123456', 'Pepito Perez');

-- --------------------------------------------------------

--
-- Estructura para la vista `produccat`
--
DROP TABLE IF EXISTS `produccat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `produccat`  AS SELECT `p`.`id` AS `id`, `p`.`productName` AS `productName`, `p`.`productPrice` AS `productPrice`, `p`.`productStock` AS `productStock`, `c`.`nameCate` AS `nameCate`, `c`.`id` AS `cid` FROM (`productos` `p` join `categorias` `c` on((`p`.`idCat` = `c`.`id`))) WHERE ((`p`.`productState` = 1) AND (`c`.`stateCate` = 1))  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productCate` (`idCat`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productCate` FOREIGN KEY (`idCat`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
