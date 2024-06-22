-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2024 a las 02:24:26
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `huella_verde`
--
CREATE DATABASE IF NOT EXISTS `huella_verde` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `huella_verde`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id_contenido` int(10) NOT NULL,
  `id_nivel_dificultad` int(10) DEFAULT NULL,
  `id_modulo` int(10) DEFAULT NULL,
  `id_tema` int(10) DEFAULT NULL,
  `comentario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lecciones_usuarios`
--

CREATE TABLE `lecciones_usuarios` (
  `id_leccion_usuario` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_contenido` int(10) NOT NULL,
  `completada` bit(1) DEFAULT b'0',
  `agil` time DEFAULT NULL,
  `porcentaje_increible` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id_modulo` int(10) NOT NULL,
  `titulo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles_dificultad`
--

CREATE TABLE `niveles_dificultad` (
  `id_nivel_dificultad` int(10) NOT NULL,
  `nivel_dificultad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `niveles_dificultad`
--

INSERT INTO `niveles_dificultad` (`id_nivel_dificultad`, `nivel_dificultad`) VALUES
(1, 'Basico'),
(2, 'Intermedio'),
(3, 'Avanzado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_nivel_dificultad` int(10) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `apellido` varchar(55) NOT NULL,
  `correo_electronico` varchar(80) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `id_usuario`, `id_nivel_dificultad`, `nombre`, `apellido`, `correo_electronico`, `fecha_nacimiento`) VALUES
(3, 3, 1, 'Edgar', 'Maldonado', 'e@gmail.com', '2024-05-30'),
(4, 4, 2, 'Carlos', 'Perez', 'c@gmail.com', '2024-06-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_usuarios`
--

CREATE TABLE `procesos_usuarios` (
  `id_proceso_usuario` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `porcentaje_completo` tinyint(3) NOT NULL,
  `estrellas` tinyint(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(10) NOT NULL,
  `rol` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Usuarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `id_tema` int(10) NOT NULL,
  `tema` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `id_rol` int(10) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `clave` varchar(8) NOT NULL,
  `estado` bit(1) DEFAULT b'0',
  `fecha_creacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_rol`, `usuario`, `clave`, `estado`, `fecha_creacion`) VALUES
(3, 2, 'Edgar25', '123456', b'1', '2024-06-21 00:00:00'),
(4, 2, 'Carlitox', '123456', b'1', '2024-06-21 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id_contenido`),
  ADD KEY `id_nivel_dificultad` (`id_nivel_dificultad`),
  ADD KEY `id_modulo` (`id_modulo`),
  ADD KEY `id_tema` (`id_tema`);

--
-- Indices de la tabla `lecciones_usuarios`
--
ALTER TABLE `lecciones_usuarios`
  ADD PRIMARY KEY (`id_leccion_usuario`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_estructura_contenidos` (`id_contenido`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id_modulo`);

--
-- Indices de la tabla `niveles_dificultad`
--
ALTER TABLE `niveles_dificultad`
  ADD PRIMARY KEY (`id_nivel_dificultad`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`),
  ADD UNIQUE KEY `correo_electronico` (`correo_electronico`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_nivel_dificultad` (`id_nivel_dificultad`);

--
-- Indices de la tabla `procesos_usuarios`
--
ALTER TABLE `procesos_usuarios`
  ADD PRIMARY KEY (`id_proceso_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id_contenido` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lecciones_usuarios`
--
ALTER TABLE `lecciones_usuarios`
  MODIFY `id_leccion_usuario` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id_modulo` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `niveles_dificultad`
--
ALTER TABLE `niveles_dificultad`
  MODIFY `id_nivel_dificultad` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `procesos_usuarios`
--
ALTER TABLE `procesos_usuarios`
  MODIFY `id_proceso_usuario` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `id_tema` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD CONSTRAINT `contenidos_ibfk_1` FOREIGN KEY (`id_nivel_dificultad`) REFERENCES `niveles_dificultad` (`id_nivel_dificultad`),
  ADD CONSTRAINT `contenidos_ibfk_2` FOREIGN KEY (`id_modulo`) REFERENCES `modulos` (`id_modulo`),
  ADD CONSTRAINT `contenidos_ibfk_3` FOREIGN KEY (`id_tema`) REFERENCES `temas` (`id_tema`),
  ADD CONSTRAINT `contenidos_ibfk_4` FOREIGN KEY (`id_nivel_dificultad`) REFERENCES `niveles_dificultad` (`id_nivel_dificultad`),
  ADD CONSTRAINT `contenidos_ibfk_5` FOREIGN KEY (`id_modulo`) REFERENCES `modulos` (`id_modulo`),
  ADD CONSTRAINT `contenidos_ibfk_6` FOREIGN KEY (`id_tema`) REFERENCES `temas` (`id_tema`),
  ADD CONSTRAINT `contenidos_ibfk_7` FOREIGN KEY (`id_nivel_dificultad`) REFERENCES `niveles_dificultad` (`id_nivel_dificultad`),
  ADD CONSTRAINT `contenidos_ibfk_8` FOREIGN KEY (`id_modulo`) REFERENCES `modulos` (`id_modulo`),
  ADD CONSTRAINT `contenidos_ibfk_9` FOREIGN KEY (`id_tema`) REFERENCES `temas` (`id_tema`);

--
-- Filtros para la tabla `lecciones_usuarios`
--
ALTER TABLE `lecciones_usuarios`
  ADD CONSTRAINT `lecciones_usuarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `lecciones_usuarios_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `lecciones_usuarios_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `lecciones_usuarios_ibfk_4` FOREIGN KEY (`id_contenido`) REFERENCES `contenidos` (`id_contenido`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `personas_ibfk_2` FOREIGN KEY (`id_nivel_dificultad`) REFERENCES `niveles_dificultad` (`id_nivel_dificultad`);

--
-- Filtros para la tabla `procesos_usuarios`
--
ALTER TABLE `procesos_usuarios`
  ADD CONSTRAINT `procesos_usuarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
