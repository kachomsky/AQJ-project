-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql11.freemysqlhosting.net
-- Tiempo de generación: 28-03-2018 a las 19:24:05
-- Versión del servidor: 5.5.58-0ubuntu0.14.04.1
-- Versión de PHP: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sql11229247`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categoria`
--

CREATE TABLE `Categoria` (
  `idCategoria` int(11) NOT NULL,
  `NombreCategoria` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Categoria`
--

INSERT INTO `Categoria` (`idCategoria`, `NombreCategoria`) VALUES
(1, 'Mesa'),
(2, 'Alternativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Juego`
--

CREATE TABLE `Juego` (
  `idJuego` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `NombreJuego` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Dificultad` int(11) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Jugadores` varchar(11) NOT NULL,
  `Descripcion` varchar(1000) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Tiempo` varchar(20) NOT NULL,
  `Valoracion` int(11) NOT NULL,
  `Materiales` varchar(1000) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idTipo` int(11) NOT NULL,
  `Imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Juego`
--

INSERT INTO `Juego` (`idJuego`, `idCategoria`, `NombreJuego`, `Dificultad`, `Edad`, `Jugadores`, `Descripcion`, `Tiempo`, `Valoracion`, `Materiales`, `idTipo`, `Imagen`) VALUES
(1, 1, 'Catan', 2, 18, '3-4', 'Juego supeeeeeeeeeeer chulooo óooo', '30min', 100, '', 1, 'https://aquejugamos.000webhostapp.com/catan.jpg'),
(2, 2, 'Tres en raya', 0, 3, '2', 'haz tres en raya', '1min', 100, 'Lapiz,Boli', 1, 'https://aquejugamos.000webhostapp.com/tres.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `JuegosUsuario`
--

CREATE TABLE `JuegosUsuario` (
  `idJuego` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `JuegosUsuario`
--

INSERT INTO `JuegosUsuario` (`idJuego`, `idUsuario`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Partida`
--

CREATE TABLE `Partida` (
  `idPartida` int(11) NOT NULL,
  `Juego` int(11) NOT NULL,
  `Duracion` int(11) NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `isValid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Partida`
--

INSERT INTO `Partida` (`idPartida`, `Juego`, `Duracion`, `Fecha`, `isValid`) VALUES
(1, 1, 20, '24/03/2018', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PartidasUsuario`
--

CREATE TABLE `PartidasUsuario` (
  `idUsuario` int(11) NOT NULL,
  `idPartida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `PartidasUsuario`
--

INSERT INTO `PartidasUsuario` (`idUsuario`, `idPartida`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo`
--

CREATE TABLE `Tipo` (
  `idTipo` int(11) NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Tipo`
--

INSERT INTO `Tipo` (`idTipo`, `Nombre`) VALUES
(1, 'Estrategia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `idUsuario` int(11) NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(12) NOT NULL,
  `Activo` tinyint(1) NOT NULL,
  `Bloqueado` tinyint(1) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `Grupo` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`idUsuario`, `Email`, `Nombre`, `password`, `Activo`, `Bloqueado`, `isAdmin`, `Grupo`) VALUES
(1, 'test@gmail.com', 'test', 'prueba', 1, 0, 1, 'test');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `Juego`
--
ALTER TABLE `Juego`
  ADD PRIMARY KEY (`idJuego`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idTipo` (`idTipo`);

--
-- Indices de la tabla `JuegosUsuario`
--
ALTER TABLE `JuegosUsuario`
  ADD PRIMARY KEY (`idJuego`,`idUsuario`),
  ADD KEY `idJuego` (`idJuego`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `Partida`
--
ALTER TABLE `Partida`
  ADD PRIMARY KEY (`idPartida`),
  ADD KEY `Juego` (`Juego`);

--
-- Indices de la tabla `PartidasUsuario`
--
ALTER TABLE `PartidasUsuario`
  ADD PRIMARY KEY (`idUsuario`,`idPartida`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idPartida` (`idPartida`);

--
-- Indices de la tabla `Tipo`
--
ALTER TABLE `Tipo`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Juego`
--
ALTER TABLE `Juego`
  MODIFY `idJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Partida`
--
ALTER TABLE `Partida`
  MODIFY `idPartida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Tipo`
--
ALTER TABLE `Tipo`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Juego`
--
ALTER TABLE `Juego`
  ADD CONSTRAINT `Juego_` FOREIGN KEY (`idTipo`) REFERENCES `Tipo` (`idTipo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Juego_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `Categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `JuegosUsuario`
--
ALTER TABLE `JuegosUsuario`
  ADD CONSTRAINT `JuegosUsuario_usuario_fk` FOREIGN KEY (`idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `JuegosUsuario_juego_fk` FOREIGN KEY (`idJuego`) REFERENCES `Juego` (`idJuego`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Partida`
--
ALTER TABLE `Partida`
  ADD CONSTRAINT `Partida_Juego_fk` FOREIGN KEY (`Juego`) REFERENCES `Juego` (`idJuego`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `PartidasUsuario`
--
ALTER TABLE `PartidasUsuario`
  ADD CONSTRAINT `PartidasUsuario_Usuario_fk` FOREIGN KEY (`idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PartidasUsuario_Partida_fk` FOREIGN KEY (`idPartida`) REFERENCES `Partida` (`idPartida`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
