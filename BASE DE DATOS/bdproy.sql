-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2020 a las 02:09:33
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdproy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleador`
--

CREATE TABLE `empleador` (
  `dni_empleador` char(5) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contraseña` varchar(8) NOT NULL,
  `razon_social` varchar(70) NOT NULL,
  `RUC` varchar(20) NOT NULL,
  `telefono_empre` varchar(9) NOT NULL,
  `direccion_empre` varchar(40) NOT NULL,
  `tipo_industria` varchar(30) NOT NULL,
  `cant_empleados` int(4) NOT NULL,
  `fecha_creacion_empre` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleador`
--

INSERT INTO `empleador` (`dni_empleador`, `nombre`, `apellido`, `email`, `contraseña`, `razon_social`, `RUC`, `telefono_empre`, `direccion_empre`, `tipo_industria`, `cant_empleados`, `fecha_creacion_empre`) VALUES
('100', 'Laura', 'Toledo Barzola', 'tbarzola@gmail.com', '123456', 'RCHP INGENIERIA & CONSTRUCCION SAC', '45835791645', '4587269', 'Alameda Lorem ipsum dolor sit, 149A 9ºG', 'Construccion', 20, '2000-07-14'),
('101', 'Diego Alonso', 'Lino Caceres', 'lcaceres@gmail.com', 'eneurtr', 'SAMITEX', '65789205703', '956724763', 'Avenida Las Palmeras 275', 'Textil', 105, '1990-10-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

CREATE TABLE `postulante` (
  `dni_postulante` char(8) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contraseña` varchar(40) NOT NULL,
  `fecha_nac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postulante`
--

INSERT INTO `postulante` (`dni_postulante`, `nombre`, `apellido`, `email`, `contraseña`, `fecha_nac`) VALUES
('08065019', 'Joel', 'Huaman', 'jhuaman@gmail.com', 'j12345', '1997-03-19'),
('12345678', 'Jose', 'Espejo', 'jespejo@gmail.com', 'e12345', '1999-07-10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleador`
--
ALTER TABLE `empleador`
  ADD PRIMARY KEY (`dni_empleador`);

--
-- Indices de la tabla `postulante`
--
ALTER TABLE `postulante`
  ADD PRIMARY KEY (`dni_postulante`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
