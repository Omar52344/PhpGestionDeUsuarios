-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2021 a las 07:16:58
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nota`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroalumno`
--

CREATE TABLE `registroalumno` (
  `Id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `horacrea` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `horachange` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registroalumno`
--

INSERT INTO `registroalumno` (`Id_usuario`, `nombre_usuario`, `apellido`, `telefono`, `password`, `Correo`, `horacrea`, `horachange`) VALUES
(21, 'omarluis', 'camilopena', '55fffff', 'omar1234', 'omarluis23@gmail.com', '09-16-2021 06:39:10 am', '09-16-2021 06:39:41 am'),
(56, 'amanda23', 'henao medina', '2860457', 'medina1234', 'medina@gmail.com', '09-16-2021 06:42:12 am', '09-16-2021 06:42:12 am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuario`
--

CREATE TABLE `t_usuario` (
  `Id_usuario` int(11) NOT NULL,
  `nombre_usu` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password_usu` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t_usuario`
--

INSERT INTO `t_usuario` (`Id_usuario`, `nombre_usu`, `password_usu`, `estado`) VALUES
(1, 'omar5234', '1234', b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registroalumno`
--
ALTER TABLE `registroalumno`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD UNIQUE KEY `Id_usuario` (`Id_usuario`),
  ADD UNIQUE KEY `correo` (`Correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
