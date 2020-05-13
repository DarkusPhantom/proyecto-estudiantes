-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2020 a las 04:38:49
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `institucion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `ci` varchar(11) NOT NULL COMMENT 'Cédula del estudiante',
  `nombre` varchar(30) NOT NULL COMMENT 'Nombre del estudiante',
  `apellido` varchar(30) NOT NULL COMMENT 'Apellido del estudiante',
  `edad` int(2) NOT NULL COMMENT 'Edad del estudiante',
  `sexo` enum('Masculino','Femenino') DEFAULT NULL COMMENT 'Genero del estudiante',
  `carrera` enum('Computacion','Quimica','Biologia','Matematica','Fisica') NOT NULL COMMENT 'Carrera del estudiante',
  `semestre` int(2) NOT NULL COMMENT 'Semestre del estudiante'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacena la información personal de cada estudiante';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `codigo` varchar(10) NOT NULL COMMENT 'Codigo de la asignatura',
  `nombre-c` varchar(30) NOT NULL COMMENT 'Nombre de la asignatura',
  `nivel` int(2) NOT NULL COMMENT 'Semestre de la asignatura'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacena la información personal de las asignaturas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `ci-d` varchar(11) NOT NULL COMMENT 'Cedula del docente',
  `nombre-d` varchar(30) NOT NULL COMMENT 'Nombre del docente',
  `apellido-d` varchar(30) NOT NULL COMMENT 'Apellido del docente',
  `sexo-d` enum('Masculino','Femenino') NOT NULL COMMENT 'Genero del docente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacena la informacion personal de los docentes';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imparte`
--

CREATE TABLE `imparte` (
  `ci-d` varchar(11) NOT NULL COMMENT 'Cedula del docente',
  `codigo-c` varchar(10) NOT NULL COMMENT 'Codigo de la asignatura',
  `turno` enum('Manana','Tarde','Noche') NOT NULL COMMENT 'Horario de la clase'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacena información de las asignaturas que dicta un profeso';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `ci-a` varchar(11) NOT NULL COMMENT 'Cedula del estudiante',
  `codigo-c` varchar(10) NOT NULL COMMENT 'Codigo de la asignatura',
  `calificacion` int(2) NOT NULL COMMENT 'Nota del estudiante'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacena informacion sobre las notas del estudiante';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se-inscribe`
--

CREATE TABLE `se-inscribe` (
  `ci-a` varchar(11) NOT NULL COMMENT 'Cedula del estudiante',
  `codigo-c` varchar(10) NOT NULL COMMENT 'Codigo de la asignatura',
  `fecha` date NOT NULL DEFAULT current_timestamp() COMMENT 'Fecha de inscripcion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacena informacion de la inscripcion del estudiante';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`ci-d`);

--
-- Indices de la tabla `imparte`
--
ALTER TABLE `imparte`
  ADD PRIMARY KEY (`ci-d`,`codigo-c`),
  ADD KEY `ci-d` (`ci-d`,`codigo-c`),
  ADD KEY `imparte-2` (`codigo-c`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`ci-a`,`codigo-c`),
  ADD KEY `ci-a` (`ci-a`,`codigo-c`),
  ADD KEY `nota-2` (`codigo-c`);

--
-- Indices de la tabla `se-inscribe`
--
ALTER TABLE `se-inscribe`
  ADD PRIMARY KEY (`ci-a`,`codigo-c`),
  ADD KEY `ci-a` (`ci-a`,`codigo-c`),
  ADD KEY `inscripcion-2` (`codigo-c`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imparte`
--
ALTER TABLE `imparte`
  ADD CONSTRAINT `imparte-1` FOREIGN KEY (`ci-d`) REFERENCES `docente` (`ci-d`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `imparte-2` FOREIGN KEY (`codigo-c`) REFERENCES `curso` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota-1` FOREIGN KEY (`ci-a`) REFERENCES `alumno` (`ci`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nota-2` FOREIGN KEY (`codigo-c`) REFERENCES `curso` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `se-inscribe`
--
ALTER TABLE `se-inscribe`
  ADD CONSTRAINT `inscripcion-1` FOREIGN KEY (`ci-a`) REFERENCES `alumno` (`ci`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcion-2` FOREIGN KEY (`codigo-c`) REFERENCES `curso` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
