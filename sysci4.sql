-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-01-2022 a las 02:22:32
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
-- Base de datos: `sysci4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nit` int(11) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nit`, `nombre`, `telefono`, `direccion`) VALUES
(1, 2147483647, 'Walter Chávez Rodriguez', 98090066, 'Jr. Cangallo 368'),
(2, 2147483647, 'Juan Castro Clean', 856652, 'Av. Abancay 658');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE `detallefactura` (
  `correlativo` bigint(11) NOT NULL,
  `nofactura` bigint(11) DEFAULT NULL,
  `codproducto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `preciototal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_temp`
--

CREATE TABLE `detalle_temp` (
  `correlativo` int(11) NOT NULL,
  `nofactura` bigint(11) NOT NULL,
  `codproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `preciototal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `correlativo` int(11) NOT NULL,
  `codproducto` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `nofactura` bigint(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `usuario` int(11) DEFAULT NULL,
  `codcliente` int(11) DEFAULT NULL,
  `totaltactura` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codproducto` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `proveedor` int(11) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `existencia` int(11) DEFAULT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `codproveedor` int(11) NOT NULL,
  `proveedor` varchar(100) DEFAULT NULL,
  `contacto` varchar(100) DEFAULT NULL,
  `telefono` bigint(11) DEFAULT NULL,
  `direccion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`codproveedor`, `proveedor`, `contacto`, `telefono`, `direccion`) VALUES
(1, 'BIC', 'Claudia Rosales', 789877889, 'Avenida las Americas'),
(2, 'CASIO', 'Jorge Herrera', 565656565656, 'Calzada Las Flores'),
(3, 'Omega', 'Julio Estrada', 982877489, 'Avenida Elena Zona 4, Guatemala'),
(4, 'Dell Compani', 'Roberto Estrada', 2147483647, 'Guatemala, Guatemala'),
(5, 'Olimpia S.A', 'Elena Franco Morales', 564535676, '5ta. Avenida Zona 4 Ciudad'),
(6, 'Oster', 'Fernando Guerra', 78987678, 'Calzada La Paz, Guatemala'),
(7, 'ACELTECSA S.A', 'Ruben PÃ©rez', 789879889, 'Colonia las Victorias'),
(8, 'Sony', 'Julieta Contreras', 89476787, 'Antigua Guatemala'),
(9, 'VAIO', 'Felix Arnoldo Rojas', 476378276, 'Avenida las Americas Zona 13'),
(10, 'SUMAR', 'Oscar Maldonado', 788376787, 'Colonia San Jose, Zona 5 Guatemala'),
(11, 'HP', 'Angel Cardona', 2147483647, '5ta. calle zona 4 Guatemala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Vendedor'),
(3, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `condicion` int(11) NOT NULL DEFAULT '1',
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_edit` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `correo`, `usuario`, `clave`, `rol`, `condicion`, `fecha_alta`, `fecha_edit`) VALUES
(1, 'Alberto Chávez', 'albetho@hotmail.com', 'camisea', '9dcc1417af6a8f4c33a87f38e714a0e5', 1, 1, '2020-09-19 02:49:36', NULL),
(2, 'José Carlos Perez', 'josecarlos_arteaga@hotmail.com', 'juanca', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, '2020-09-19 02:49:36', NULL),
(3, 'Eva Davinson', 'evago@gmail.com', 'evago', '77b3e6926e7295494dd3be91c6934899', 2, 1, '2020-09-19 02:49:36', NULL),
(4, 'Peta Perez Gonzales', 'petape@gmail.com', 'petape', '3292b64225849daae9a7da78b89422af', 2, 1, '2020-09-19 02:49:36', NULL),
(5, 'Pablo Neruda Estrada', 'pablo@hotmail.com', 'pneruda', '952ea6a87d918bfa63cbe9543af1d79a', 2, 1, '2020-09-19 02:49:36', NULL),
(6, 'Gerardo Chávez Rodríguez', 'gercha@gmail.com', 'gercharod', '9dcc1417af6a8f4c33a87f38e714a0e5', 2, 1, '2020-09-19 02:49:36', NULL),
(7, 'Juan José Ramirez', 'juf@hotmail.com', 'juanjosefa', '3292b64225849daae9a7da78b89422af', 3, 1, '2020-09-19 02:49:36', NULL),
(9, 'Joaquin Ramirez Garay', 'joaq@gmail.com', 'joaka', '3292b64225849daae9a7da78b89422af', 3, 0, '2020-09-19 21:15:06', NULL),
(10, 'Ronal Vera Davinson', 'ronaldino@gmail.com', 'ronaldiño', '9dcc1417af6a8f4c33a87f38e714a0e5', 3, 1, '2020-09-19 02:49:36', NULL),
(11, 'Josue Chavez Rodriguez', 'josues@hotmail.com', 'joshu', '63d3901c4e9e7b97835c2b56fa7c8bb5', 2, 1, '2020-09-19 02:49:36', NULL),
(12, 'Maria Reyes Ganoza', 'marirey@outlook.com', 'marirey', '3292b64225849daae9a7da78b89422af', 2, 1, '2020-09-19 02:49:36', NULL),
(13, 'Juana de Arco Valdez', 'jsss@gmail.com', 'januela', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1, '2020-09-19 02:49:36', NULL),
(14, 'Luis Gonzales', 'luisgonza@gmail.com', 'luisgonza', '3292b64225849daae9a7da78b89422af', 2, 1, '2020-09-19 02:49:36', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD PRIMARY KEY (`correlativo`),
  ADD KEY `codproducto` (`codproducto`),
  ADD KEY `nofactura` (`nofactura`);

--
-- Indices de la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  ADD PRIMARY KEY (`correlativo`),
  ADD KEY `nofactura` (`nofactura`),
  ADD KEY `codproducto` (`codproducto`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`correlativo`),
  ADD KEY `codproducto` (`codproducto`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`nofactura`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `codcliente` (`codcliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codproducto`),
  ADD KEY `proveedor` (`proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`codproveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  MODIFY `correlativo` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  MODIFY `correlativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `correlativo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `nofactura` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codproducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `codproveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD CONSTRAINT `detallefactura_ibfk_1` FOREIGN KEY (`nofactura`) REFERENCES `factura` (`nofactura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detallefactura_ibfk_2` FOREIGN KEY (`codproducto`) REFERENCES `producto` (`codproducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  ADD CONSTRAINT `detalle_temp_ibfk_1` FOREIGN KEY (`nofactura`) REFERENCES `factura` (`nofactura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_temp_ibfk_2` FOREIGN KEY (`codproducto`) REFERENCES `producto` (`codproducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `entradas_ibfk_1` FOREIGN KEY (`codproducto`) REFERENCES `producto` (`codproducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`codcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`proveedor`) REFERENCES `proveedor` (`codproveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
