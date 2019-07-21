-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2018 a las 10:36:06
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aquejugamos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `NombreCategoria` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `NombreCategoria`) VALUES
(1, 'Mesa'),
(2, 'Alternativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
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
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`idJuego`, `idCategoria`, `NombreJuego`, `Dificultad`, `Edad`, `Jugadores`, `Descripcion`, `Tiempo`, `Valoracion`, `Materiales`, `idTipo`, `Imagen`) VALUES
(1, 1, 'Catan', 2, 18, '3-4', 'Juego supeeeeeeeeeeer chulooo óooo', '30min', 100, '', 1, 'https://aquejugamos.000webhostapp.com/catan.jpg'),
(2, 2, 'Tres en raya', 0, 3, '2', 'haz tres en raya', '1min', 100, 'Lapiz,Boli', 1, 'https://aquejugamos.000webhostapp.com/tres.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegosusuario`
--

CREATE TABLE `juegosusuario` (
  `idJuego` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegosusuario`
--

INSERT INTO `juegosusuario` (`idJuego`, `idUsuario`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partida`
--

CREATE TABLE `partida` (
  `idPartida` int(11) NOT NULL,
  `Juego` int(11) NOT NULL,
  `Duracion` int(11) NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `isValid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partida`
--

INSERT INTO `partida` (`idPartida`, `Juego`, `Duracion`, `Fecha`, `isValid`) VALUES
(1, 1, 20, '24/03/2018', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidasusuario`
--

CREATE TABLE `partidasusuario` (
  `idUsuario` int(11) NOT NULL,
  `idPartida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partidasusuario`
--

INSERT INTO `partidasusuario` (`idUsuario`, `idPartida`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `idTipo` int(11) NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idTipo`, `Nombre`) VALUES
(1, 'Estrategia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
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
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Email`, `Nombre`, `password`, `Activo`, `Bloqueado`, `isAdmin`, `Grupo`) VALUES
(1, 'test@gmail.com', 'test', 'prueba', 1, 0, 1, 'test'),
(2, 'sergi.p-@hotmail.com', 'sergi', 'hola', 1, 0, 0, 'test');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`idJuego`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idTipo` (`idTipo`);

--
-- Indices de la tabla `juegosusuario`
--
ALTER TABLE `juegosusuario`
  ADD PRIMARY KEY (`idJuego`,`idUsuario`),
  ADD KEY `idJuego` (`idJuego`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `partida`
--
ALTER TABLE `partida`
  ADD PRIMARY KEY (`idPartida`),
  ADD KEY `Juego` (`Juego`);

--
-- Indices de la tabla `partidasusuario`
--
ALTER TABLE `partidasusuario`
  ADD PRIMARY KEY (`idUsuario`,`idPartida`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idPartida` (`idPartida`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `idJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `partida`
--
ALTER TABLE `partida`
  MODIFY `idPartida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `juego`
--
ALTER TABLE `juego`
  ADD CONSTRAINT `Juego_` FOREIGN KEY (`idTipo`) REFERENCES `tipo` (`idTipo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Juego_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `juegosusuario`
--
ALTER TABLE `juegosusuario`
  ADD CONSTRAINT `JuegosUsuario_juego_fk` FOREIGN KEY (`idJuego`) REFERENCES `juego` (`idJuego`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `JuegosUsuario_usuario_fk` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `partida`
--
ALTER TABLE `partida`
  ADD CONSTRAINT `Partida_Juego_fk` FOREIGN KEY (`Juego`) REFERENCES `juego` (`idJuego`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `partidasusuario`
--
ALTER TABLE `partidasusuario`
  ADD CONSTRAINT `PartidasUsuario_Partida_fk` FOREIGN KEY (`idPartida`) REFERENCES `partida` (`idPartida`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PartidasUsuario_Usuario_fk` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
