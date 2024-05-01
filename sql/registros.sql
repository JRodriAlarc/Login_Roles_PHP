-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2023 a las 02:25:17
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

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
  `lectura` tinyint(1) DEFAULT NULL COMMENT 'ver',
  `escritura` tinyint(1) DEFAULT NULL COMMENT 'editar',
  `status` tinyint(1) DEFAULT NULL COMMENT 'estado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Almacena Datos de Usuarios';

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombre`, `email`, `telefono`, `contrasenia`, `rol`, `lectura`, `escritura`, `status`) VALUES
(1, 'John Smith', 'moydutogno@gufum.com', '7714981574', 'qwerty000', 'Cliente', "No", "Si", "Si"),
(2, 'Jona Rodri', 'JonaRod@gmail.com', '7711460824', 'qwerty000', 'Administrador', "Si", "Si", "Si"),
(3, 'Juan Perez', 'JuanPer3z@gmail.com', '7713751637', 'qwerty000', 'Vendedor', "No", "No", "Si"),
(4, 'Tomas Gómez', 'Tom45@edu.mx', '7715623943', 'qwerty000', 'Cliente', "Si", "Si", "Si"),
(5, 'Fernando', 'Frenan145@gmail.com', '7716453689', 'qwerty000', 'Vendedor', "Si", "No", "Si");

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
