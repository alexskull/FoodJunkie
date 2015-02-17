-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2015 a las 01:50:53
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `foodjunkie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
`idCliente` int(11) NOT NULL,
  `Nombre` varchar(25) COLLATE utf8_bin NOT NULL,
  `Apellido` varchar(25) COLLATE utf8_bin NOT NULL,
  `Email` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Direccion` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Foto` blob,
  `Telefono` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Celular` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Usuario_User` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `Nombre`, `Apellido`, `Email`, `FechaNacimiento`, `Direccion`, `Foto`, `Telefono`, `Celular`, `Usuario_User`) VALUES
(2, 'Peter', 'Parker', 'Amazing@spiderman.com', '2015-02-06', 'New York', '', '13264892', '2366841', 8),
(4, 'Jose', 'Martinez', 'jm@mail.com', '1993-02-11', 'New York', NULL, '13264892', '2366841', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `local`
--

CREATE TABLE IF NOT EXISTS `local` (
`idLocal` int(11) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `Estado` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `Ciudad` varchar(25) COLLATE utf8_bin NOT NULL,
  `Direccion` varchar(25) COLLATE utf8_bin NOT NULL,
  `Email` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `Telefono` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `Reservas` char(1) COLLATE utf8_bin NOT NULL,
  `Capacidad` int(11) NOT NULL,
  `Hora_Ini` date NOT NULL,
  `Hora_Fin` date NOT NULL,
  `Rating` float NOT NULL,
  `Tipo_Local_ID` int(11) NOT NULL,
  `Usuario_User` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `local`
--

INSERT INTO `local` (`idLocal`, `Nombre`, `Estado`, `Ciudad`, `Direccion`, `Email`, `Telefono`, `Reservas`, `Capacidad`, `Hora_Ini`, `Hora_Fin`, `Rating`, `Tipo_Local_ID`, `Usuario_User`) VALUES
(1, 'McDonalds', 'Tachira', 'San Cristobal', 'Av. tal', 'perez@gmail.com', '2364841', 'S', 50, '0000-00-00', '0000-00-00', 0, 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
`idReserva` int(11) NOT NULL,
  `Hora` date NOT NULL,
  `Cant_Personas` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Activa` char(1) COLLATE utf8_bin NOT NULL,
  `Usuario_User` int(11) NOT NULL,
  `Local_idLocal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `review`
--

CREATE TABLE IF NOT EXISTS `review` (
`idReview` int(11) NOT NULL,
  `Comentario` varchar(240) COLLATE utf8_bin DEFAULT NULL,
  `RatingPrecio` float NOT NULL,
  `RatingAtencion` float NOT NULL,
  `RatingCalidad` float NOT NULL,
  `Usuario_User` int(11) NOT NULL,
  `Local_idLocal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`idRoles` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRoles`, `Nombre`, `Descripcion`) VALUES
(1, 'Admin', 'Administrador'),
(2, 'Usuario', 'Usuario estandar'),
(3, 'Local', 'Usuario tipo local');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_local`
--

CREATE TABLE IF NOT EXISTS `tipo_local` (
`ID` int(11) NOT NULL,
  `Nombre` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_local`
--

INSERT INTO `tipo_local` (`ID`, `Nombre`) VALUES
(1, 'Cafe'),
(2, 'Postre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL,
  `Usuario` varchar(45) COLLATE utf8_bin NOT NULL,
  `Password` varchar(45) COLLATE utf8_bin NOT NULL,
  `Roles_idRoles` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Usuario`, `Password`, `Roles_idRoles`) VALUES
(1, 'JC', '1234', 1),
(6, 'J.Cas', '1234', 2),
(8, 'Spiderman', '123', 2),
(9, 'L.Perez', '123', 3),
(12, 'J.martinez', '123', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`idCliente`), ADD KEY `fk_Cliente_Usuario` (`Usuario_User`);

--
-- Indices de la tabla `local`
--
ALTER TABLE `local`
 ADD PRIMARY KEY (`idLocal`), ADD KEY `fk_Tipo_local` (`Tipo_Local_ID`), ADD KEY `fk_Local_Usuario` (`Usuario_User`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
 ADD PRIMARY KEY (`idReserva`), ADD KEY `fk_Reser_Usuario` (`Usuario_User`), ADD KEY `fk_Reser_local` (`Local_idLocal`);

--
-- Indices de la tabla `review`
--
ALTER TABLE `review`
 ADD PRIMARY KEY (`idReview`), ADD KEY `fk_Rev_user` (`Usuario_User`), ADD KEY `fk_Rev_local` (`Local_idLocal`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`idRoles`);

--
-- Indices de la tabla `tipo_local`
--
ALTER TABLE `tipo_local`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `Usuario_UNIQUE` (`Usuario`), ADD KEY `fk_Usuario_Roles1_idx` (`Roles_idRoles`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `local`
--
ALTER TABLE `local`
MODIFY `idLocal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `review`
--
ALTER TABLE `review`
MODIFY `idReview` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
MODIFY `idRoles` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_local`
--
ALTER TABLE `tipo_local`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
ADD CONSTRAINT `fk_Cliente_Usuario` FOREIGN KEY (`Usuario_User`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `local`
--
ALTER TABLE `local`
ADD CONSTRAINT `fk_Local_Usuario` FOREIGN KEY (`Usuario_User`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Tipo_local` FOREIGN KEY (`Tipo_Local_ID`) REFERENCES `tipo_local` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
ADD CONSTRAINT `fk_Reser_Usuario` FOREIGN KEY (`Usuario_User`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Reser_local` FOREIGN KEY (`Local_idLocal`) REFERENCES `local` (`idLocal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `review`
--
ALTER TABLE `review`
ADD CONSTRAINT `fk_Rev_local` FOREIGN KEY (`Local_idLocal`) REFERENCES `local` (`idLocal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Rev_user` FOREIGN KEY (`Usuario_User`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `fk_Usuario_Roles1` FOREIGN KEY (`Roles_idRoles`) REFERENCES `roles` (`idRoles`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
