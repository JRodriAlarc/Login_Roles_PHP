-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2024 a las 01:31:08
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `nombre` varchar(50) DEFAULT NULL COMMENT 'nombre',
  `email` varchar(80) DEFAULT NULL COMMENT 'email',
  `telefono` char(10) DEFAULT NULL COMMENT 'phone',
  `contrasenia` varchar(30) DEFAULT NULL COMMENT 'password',
  `rol` varchar(13) DEFAULT NULL COMMENT 'rol',
  `lectura` char(2) DEFAULT NULL COMMENT 'ver',
  `escritura` char(2) DEFAULT NULL COMMENT 'editar',
  `status` char(2) DEFAULT NULL COMMENT 'estado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Almacena Datos de Usuarios';

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombre`, `email`, `telefono`, `contrasenia`, `rol`, `lectura`, `escritura`, `status`) VALUES
(1, 'John Smith', 'moydutogno@gufum.com', '7712983217', 'qwerty000', 'Cliente', 'No', 'No', 'Si'),
(2, 'Jona Rodri', 'JonaRod@gmail.com', '7711460284', 'qwerty000', 'Administrador', 'Si', 'Si', 'Si'),
(3, 'Juan Perez', 'JuanPer3z@gmail.com', '7713751532', 'qwerty000', 'Vendedor', 'No', 'Si', 'Si'),
(4, 'Juan Gomez', 'juanGomez@mail.com', '7715487595', 'qwerty000', 'Cliente', 'Si', 'No', 'No'),
(5, 'Carlos García', 'carlosGarza@mail.com', '7715487595', 'qwerty000', 'Vendedor', 'Si', 'No', 'Si'),
(6, 'Rosa', 'rosahernan@mail.com', '7713217678', 'qwerty000', 'Administrador', 'Si', 'No', 'Si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
