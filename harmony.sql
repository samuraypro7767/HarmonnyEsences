-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2023 a las 01:38:27
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `harmony`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cod_categoria` int(20) NOT NULL,
  `cantidad_categoria` varchar(100) NOT NULL,
  `precio_categoria` int(60) NOT NULL,
  `nom_categoria` varchar(50) NOT NULL,
  `año_categoria` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cod_categoria`, `cantidad_categoria`, `precio_categoria`, `nom_categoria`, `año_categoria`) VALUES
(5, '300', 5000, 'losion de plastico', '2023-07-12'),
(7, '20', 25000, 'fragancia', '2023-09-03'),
(8, '30', 80000, 'losiones', '2023-10-12'),
(9, '12', 40000, 'fragancias', '2023-10-18'),
(10, '20', 5000, 'botellla de vidrio', '2023-10-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(15) NOT NULL,
  `nom_cliente` varchar(20) NOT NULL,
  `contra_cliente` varchar(20) NOT NULL,
  `tel_cliente` bigint(13) NOT NULL,
  `dir_cliente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nom_cliente`, `contra_cliente`, `tel_cliente`, `dir_cliente`) VALUES
(11, 'Liliana Maria', 'lilianamariapinedas', 320127812, 'Calarca/Quindio'),
(12, 'mario arenas', 'mario alexander123@', 3219038931, 'llanitos gualara'),
(13, 'franco', 'asdasdas', 3244235423, 'asdasdadaf'),
(14, 'melical', 'melical123', 3234252313425, 'mz F2 barrio la maria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_producto`
--

CREATE TABLE `cliente_producto` (
  `id_cliente` int(15) DEFAULT NULL,
  `cod_prod` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_prod` int(15) NOT NULL,
  `nom_prod` varchar(20) NOT NULL,
  `prec_prod` bigint(30) NOT NULL,
  `desc_prod` varchar(300) NOT NULL,
  `descuento_prod` bigint(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_prod`, `nom_prod`, `prec_prod`, `desc_prod`, `descuento_prod`) VALUES
(12, 'losion mexicana', 30000, 'muy buena', 2),
(13, 'losion gucci', 30000, 'losion de alta calidad ', 5),
(14, 'dia del aroma', 40000, 'donde se da un pequeña muestra con nuestros productos', 1),
(15, 'losion gucci', 30000, 'muy buena', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_proveedor`
--

CREATE TABLE `producto_proveedor` (
  `id_prov` int(15) NOT NULL,
  `cod_Prod` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_prov` int(15) NOT NULL,
  `nom_prov` varchar(20) NOT NULL,
  `dir_prov` varchar(30) NOT NULL,
  `tel_prov` bigint(15) NOT NULL,
  `sumi_prov` varchar(30) NOT NULL,
  `nit` int(15) NOT NULL,
  `nom_producto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_prov`, `nom_prov`, `dir_prov`, `tel_prov`, `sumi_prov`, `nit`, `nom_producto`) VALUES
(121312, 'el bosque', 'calle 10 norte 20n-40 Armenia1', 3121313255, '31', 4323, 'fertilizante'),
(123123, 'carolina gonzales pi', 'calle 10 norte 20n-40 Armenia1', 321346964, '21', 87645, 'tarros muestras ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_usuario` int(100) NOT NULL,
  `name_usuario` varchar(20) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `password_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_usuario`, `name_usuario`, `email_usuario`, `password_usuario`) VALUES
(39, 'santiago florez', 'florezsantiago123@outlook.com', 'santiago frgance'),
(40, 'samuel', '123@gmail.com', '123'),
(41, 'samanta', 'samanta23@gmail.com', 'samanta123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cliente_producto`
--
ALTER TABLE `cliente_producto`
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `cod_prod` (`cod_prod`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod_prod`);

--
-- Indices de la tabla `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
  ADD KEY `id_prov` (`id_prov`),
  ADD KEY `cod_Prod` (`cod_Prod`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `name` (`name_usuario`),
  ADD KEY `email` (`email_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cod_categoria` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `cod_prod` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente_producto`
--
ALTER TABLE `cliente_producto`
  ADD CONSTRAINT `cliente_producto_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `cliente_producto_ibfk_2` FOREIGN KEY (`cod_prod`) REFERENCES `producto` (`cod_prod`);

--
-- Filtros para la tabla `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
  ADD CONSTRAINT `producto_proveedor_ibfk_1` FOREIGN KEY (`id_prov`) REFERENCES `proveedor` (`id_prov`),
  ADD CONSTRAINT `producto_proveedor_ibfk_2` FOREIGN KEY (`cod_Prod`) REFERENCES `producto` (`cod_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
