-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-01-2022 a las 02:22:04
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
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
