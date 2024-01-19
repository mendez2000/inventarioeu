-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2023 a las 00:42:04
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdinventarioeu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acc`
--

CREATE TABLE `acc` (
  `id` int(11) NOT NULL,
  `inv` text NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` text NOT NULL,
  `serie` text NOT NULL,
  `tipo` text NOT NULL,
  `id_est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acc`
--

INSERT INTO `acc` (`id`, `inv`, `id_marca`, `modelo`, `serie`, `tipo`, `id_est`) VALUES
(26, '456789', 1, 'Generico', '123', 'LED', 1),
(27, '456789', 3, 'Generico', '123', 'LED', 2),
(28, '01-315-0000', 4, 'Generico', '123', 'Desconocida', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacidad`
--

CREATE TABLE `capacidad` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `capacidad`
--

INSERT INTO `capacidad` (`id`, `nom`) VALUES
(1, '240GB'),
(2, '500 GB'),
(3, '320 GB'),
(4, '1 TB'),
(5, '2 TB'),
(6, '512 MB'),
(7, '128 MB'),
(8, '2GB'),
(9, '32 GB'),
(10, '5 TB'),
(11, '320 GHz'),
(12, '210 GHz'),
(13, '8 GB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciu`
--

CREATE TABLE `ciu` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciu`
--

INSERT INTO `ciu` (`id`, `nom`) VALUES
(2, 'Tegucigalpa'),
(3, 'San Pedro Sula'),
(4, 'Ceiba'),
(5, 'Comayagua');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clas`
--

CREATE TABLE `clas` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clas`
--

INSERT INTO `clas` (`id`, `nom`) VALUES
(1, 'Editora'),
(3, 'Desktop'),
(4, 'Laptop'),
(5, 'Animadora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cpu`
--

CREATE TABLE `cpu` (
  `id` int(11) NOT NULL,
  `inv` text NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` text NOT NULL,
  `serie` text NOT NULL,
  `tag` text NOT NULL,
  `id_clas` int(11) NOT NULL,
  `id_est` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `nom_user` text NOT NULL,
  `nom_equ` text NOT NULL,
  `id_ubi` int(11) NOT NULL,
  `id_edi` int(11) NOT NULL,
  `id_dep` int(11) NOT NULL,
  `id_proc` int(11) NOT NULL,
  `id_ram` int(11) NOT NULL,
  `id_hdd` int(11) NOT NULL,
  `id_tvideo` int(11) NOT NULL,
  `id_mon` int(11) NOT NULL,
  `id_ups` int(11) NOT NULL,
  `id_acc` int(11) NOT NULL,
  `id_sof` int(11) NOT NULL,
  `id_edic` int(11) NOT NULL,
  `id_ip` int(11) NOT NULL,
  `obs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cpu`
--

INSERT INTO `cpu` (`id`, `inv`, `id_marca`, `modelo`, `serie`, `tag`, `id_clas`, `id_est`, `id_emp`, `nom_user`, `nom_equ`, `id_ubi`, `id_edi`, `id_dep`, `id_proc`, `id_ram`, `id_hdd`, `id_tvideo`, `id_mon`, `id_ups`, `id_acc`, `id_sof`, `id_edic`, `id_ip`, `obs`) VALUES
(46, '01-315-00123', 1, 'Optiplex', '760', '123456', 1, 1, 9, 'soporte', 'soporteequipo', 2, 1, 1, 1, 6, 9, 5, 7, 26, 26, 11, 11, 1, 'primera fase'),
(47, '01-315-00124', 4, 'Workstation', '5055', '789456', 5, 4, 11, 'soporte2', 'quipo2', 5, 3, 6, 4, 10, 19, 7, 12, 30, 28, 12, 12, 3, 'Segunda fase');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dep`
--

CREATE TABLE `dep` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dep`
--

INSERT INTO `dep` (`id`, `nom`) VALUES
(1, 'Operaciones'),
(5, 'Logistica'),
(6, 'IT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discoinst`
--

CREATE TABLE `discoinst` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `discoinst`
--

INSERT INTO `discoinst` (`id`, `nom`) VALUES
(1, 'Interno'),
(2, 'Externo'),
(5, 'Camara Portatil'),
(6, 'Temporal'),
(7, 'Camara Portatil 2'),
(8, 'Interno 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edi`
--

CREATE TABLE `edi` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `edi`
--

INSERT INTO `edi` (`id`, `nom`) VALUES
(1, 'TVC'),
(3, 'CNT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `id_dep` int(11) NOT NULL,
  `id_edi` int(11) NOT NULL,
  `id_ciu` int(11) NOT NULL,
  `nom` varchar(40) CHARACTER SET utf8 NOT NULL,
  `ape` varchar(40) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emp`
--

INSERT INTO `emp` (`id`, `id_dep`, `id_edi`, `id_ciu`, `nom`, `ape`) VALUES
(9, 6, 1, 2, 'Wilson', 'Mendez'),
(11, 6, 1, 2, 'Cristia', 'Aguilar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `nom`) VALUES
(1, 'Operando'),
(2, 'Bodega'),
(3, 'Desechado'),
(4, 'Prestamo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hdd`
--

CREATE TABLE `hdd` (
  `id` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` text NOT NULL,
  `serie` text NOT NULL,
  `id_tdisco` int(11) NOT NULL,
  `id_cap` int(11) NOT NULL,
  `id_inst` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hdd`
--

INSERT INTO `hdd` (`id`, `id_marca`, `modelo`, `serie`, `id_tdisco`, `id_cap`, `id_inst`) VALUES
(9, 1, 'Generico', '123', 3, 2, 2),
(10, 1, 'Generico', '123', 1, 1, 1),
(17, 1, 'Quadro FX520', '123456', 8, 2, 2),
(18, 4, '74747', '123456', 8, 5, 1),
(19, 5, 't4t4', '123456', 8, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ip`
--

CREATE TABLE `ip` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ip`
--

INSERT INTO `ip` (`id`, `nom`) VALUES
(1, '192.168.10.101'),
(2, '192.168.100.101'),
(3, '192.168.20.10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencia`
--

CREATE TABLE `licencia` (
  `id` int(11) NOT NULL,
  `id_soft` int(11) NOT NULL,
  `ver` text DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  `serie` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `licencia`
--

INSERT INTO `licencia` (`id`, `id_soft`, `ver`, `id_tipo`, `serie`) VALUES
(11, 2, 'ededed', 1, 'ededde'),
(12, 5, 'CCS2020', 3, 'Freee'),
(13, 2, '10', 1, 'Propiedad del fabricantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `nom`) VALUES
(1, 'DELL'),
(2, 'Nvidia'),
(3, 'MAC'),
(4, 'HP'),
(5, 'KINSTONG'),
(6, 'Intel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitor`
--

CREATE TABLE `monitor` (
  `id` int(11) NOT NULL,
  `inv` text NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` text NOT NULL,
  `serie` text NOT NULL,
  `tipo` text NOT NULL,
  `tam` text NOT NULL,
  `id_est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `monitor`
--

INSERT INTO `monitor` (`id`, `inv`, `id_marca`, `modelo`, `serie`, `tipo`, `tam`, `id_est`) VALUES
(7, '123456789', 1, 'Generico', '', 'LED', '22\"', 1),
(8, '456789', 5, '123', 'Generico', 'LED', '24\"', 2),
(9, '456789', 3, '7852', 'Generico', 'LED', '24\"', 2),
(10, '456789', 3, '45sddff', 'Adfer', 'LED', '24\"', 2),
(11, '456789', 3, '123', 'Generico', 'LED', '24\"', 2),
(12, '4567898888', 2, '123', 'Generico', 'LED', '24\"', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proc`
--

CREATE TABLE `proc` (
  `id` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` text NOT NULL,
  `id_cap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proc`
--

INSERT INTO `proc` (`id`, `id_marca`, `modelo`, `id_cap`) VALUES
(1, 6, 'Core i5', 11),
(2, 4, 'Generico', 2),
(3, 6, 'Core i6', 11),
(4, 6, 'Corei i3', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ram`
--

CREATE TABLE `ram` (
  `id_ram` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_cap` int(11) NOT NULL,
  `fre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ram`
--

INSERT INTO `ram` (`id_ram`, `id_marca`, `id_tipo`, `id_cap`, `fre`) VALUES
(6, 5, 4, 8, '3200GHz'),
(7, 1, 2, 2, '3200GHz'),
(8, 1, 8, 8, '1333MHz'),
(9, 5, 2, 9, '1333MHz'),
(10, 5, 4, 13, '1333MHz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nom_rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nom_rol`) VALUES
(8, 'Administrador'),
(9, 'Empleado'),
(17, 'Mantenimiento'),
(18, 'Supervisor'),
(25, 'Casad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE `software` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `software`
--

INSERT INTO `software` (`id`, `nom`) VALUES
(2, 'Windows'),
(3, 'Offices'),
(4, '3DMAX'),
(5, 'Adobe ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `switcher`
--

CREATE TABLE `switcher` (
  `id` int(11) NOT NULL,
  `inv` text NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` text NOT NULL,
  `serie` text NOT NULL,
  `puertos` text NOT NULL,
  `rfisica` text NOT NULL,
  `id_dep` int(11) NOT NULL,
  `id_edi` int(11) NOT NULL,
  `id_est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `switcher`
--

INSERT INTO `switcher` (`id`, `inv`, `id_marca`, `modelo`, `serie`, `puertos`, `rfisica`, `id_dep`, `id_edi`, `id_est`) VALUES
(16, '01-315-0000', 1, 'Generico', '123456', '48', '10', 1, 1, 1),
(17, '01-315-0010', 4, 'Generico', '7852', '24', '20', 6, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdisco`
--

CREATE TABLE `tdisco` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tdisco`
--

INSERT INTO `tdisco` (`id`, `nom`) VALUES
(1, 'SATA'),
(2, 'ID'),
(3, 'M2'),
(5, 'Micro SD'),
(6, 'SD'),
(7, 'USB'),
(8, 'SSD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `nom`) VALUES
(1, 'OEM'),
(2, 'Corporativa'),
(3, 'Open Source'),
(6, 'Dongol'),
(8, 'Inscripcion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tram`
--

CREATE TABLE `tram` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tram`
--

INSERT INTO `tram` (`id`, `nom`) VALUES
(1, 'DDR2'),
(2, 'DDR1'),
(3, 'DDR3'),
(4, 'DDR4'),
(5, 'DDR5'),
(6, 'DDR6'),
(7, 'DDR7'),
(8, 'SDRAM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tvideo`
--

CREATE TABLE `tvideo` (
  `id` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` text NOT NULL,
  `id_cap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tvideo`
--

INSERT INTO `tvideo` (`id`, `id_marca`, `modelo`, `id_cap`) VALUES
(5, 2, 'Quadro FX520', 10),
(7, 2, 'GeForce GTX 550', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ups`
--

CREATE TABLE `ups` (
  `id` int(11) NOT NULL,
  `inv` text NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` text NOT NULL,
  `serie` text NOT NULL,
  `cap` text NOT NULL,
  `id_est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ups`
--

INSERT INTO `ups` (`id`, `inv`, `id_marca`, `modelo`, `serie`, `cap`, `id_est`) VALUES
(26, '01-315-00325', 1, 'A1200', '', '1200VA', 1),
(27, '01-315-00326', 4, 'A2000', '', '2000VA', 2),
(28, '456789', 4, 'Generico', '123', '2400V', 1),
(29, '4567898888', 4, 'Generico', '123456789', '4400V', 2),
(30, '456789', 2, 'Generico', '123', '240GB', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `pass` text CHARACTER SET utf8 NOT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `id_emp`, `id_rol`, `email`, `pass`, `fecha`) VALUES
(33, 9, 8, 'wmendez@hotmail.com', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', '2023-05-08 02:33:27'),
(34, 11, 8, 'cristian@hotmail.com', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', '2023-05-08 02:33:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `id_emp`, `email`, `pass`) VALUES
(7, 9, 'wmendez@hotmail.com', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy'),
(9, 11, 'cristian@hotmail.com', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_est` (`id_est`);

--
-- Indices de la tabla `capacidad`
--
ALTER TABLE `capacidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciu`
--
ALTER TABLE `ciu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clas`
--
ALTER TABLE `clas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_clas` (`id_clas`),
  ADD KEY `id_est` (`id_est`),
  ADD KEY `id_emp` (`id_emp`),
  ADD KEY `id_ubi` (`id_ubi`),
  ADD KEY `id_edi` (`id_edi`),
  ADD KEY `id_dep` (`id_dep`),
  ADD KEY `id_ram` (`id_ram`),
  ADD KEY `id_hdd` (`id_hdd`),
  ADD KEY `id_tvideo` (`id_tvideo`),
  ADD KEY `id_mon` (`id_mon`),
  ADD KEY `id_ups` (`id_ups`),
  ADD KEY `id_so` (`id_sof`),
  ADD KEY `id_edic` (`id_edic`),
  ADD KEY `id_ip` (`id_ip`),
  ADD KEY `id_acc` (`id_acc`),
  ADD KEY `id_proc` (`id_proc`);

--
-- Indices de la tabla `dep`
--
ALTER TABLE `dep`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `discoinst`
--
ALTER TABLE `discoinst`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `edi`
--
ALTER TABLE `edi`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dep` (`id_dep`),
  ADD KEY `id_ubi` (`id_edi`),
  ADD KEY `id_ciu` (`id_ciu`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hdd`
--
ALTER TABLE `hdd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mar` (`id_marca`),
  ADD KEY `id_tdisco` (`id_tdisco`),
  ADD KEY `id_cap` (`id_cap`),
  ADD KEY `inst` (`id_inst`),
  ADD KEY `id_inst` (`id_inst`);

--
-- Indices de la tabla `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `licencia`
--
ALTER TABLE `licencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_software` (`id_soft`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_est` (`id_est`);

--
-- Indices de la tabla `proc`
--
ALTER TABLE `proc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_cap` (`id_cap`);

--
-- Indices de la tabla `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`id_ram`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_cap` (`id_cap`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `switcher`
--
ALTER TABLE `switcher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_est` (`id_est`),
  ADD KEY `id_edi` (`id_edi`),
  ADD KEY `id_dep` (`id_dep`);

--
-- Indices de la tabla `tdisco`
--
ALTER TABLE `tdisco`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tram`
--
ALTER TABLE `tram`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tvideo`
--
ALTER TABLE `tvideo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_cap` (`id_cap`);

--
-- Indices de la tabla `ups`
--
ALTER TABLE `ups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_est` (`id_est`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_emp` (`id_emp`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_emp` (`id_emp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acc`
--
ALTER TABLE `acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `capacidad`
--
ALTER TABLE `capacidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ciu`
--
ALTER TABLE `ciu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clas`
--
ALTER TABLE `clas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cpu`
--
ALTER TABLE `cpu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `dep`
--
ALTER TABLE `dep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `discoinst`
--
ALTER TABLE `discoinst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `edi`
--
ALTER TABLE `edi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `hdd`
--
ALTER TABLE `hdd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `ip`
--
ALTER TABLE `ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `licencia`
--
ALTER TABLE `licencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `monitor`
--
ALTER TABLE `monitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `proc`
--
ALTER TABLE `proc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ram`
--
ALTER TABLE `ram`
  MODIFY `id_ram` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `switcher`
--
ALTER TABLE `switcher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tdisco`
--
ALTER TABLE `tdisco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tram`
--
ALTER TABLE `tram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tvideo`
--
ALTER TABLE `tvideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ups`
--
ALTER TABLE `ups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acc`
--
ALTER TABLE `acc`
  ADD CONSTRAINT `acc_ibfk_1` FOREIGN KEY (`id_est`) REFERENCES `estado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `acc_ibfk_2` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cpu`
--
ALTER TABLE `cpu`
  ADD CONSTRAINT `cpu_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_10` FOREIGN KEY (`id_tvideo`) REFERENCES `tvideo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_11` FOREIGN KEY (`id_edi`) REFERENCES `edi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_12` FOREIGN KEY (`id_ubi`) REFERENCES `ciu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_13` FOREIGN KEY (`id_hdd`) REFERENCES `hdd` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_14` FOREIGN KEY (`id_sof`) REFERENCES `licencia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_15` FOREIGN KEY (`id_ip`) REFERENCES `ip` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_16` FOREIGN KEY (`id_proc`) REFERENCES `proc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_2` FOREIGN KEY (`id_est`) REFERENCES `estado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_3` FOREIGN KEY (`id_clas`) REFERENCES `clas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_4` FOREIGN KEY (`id_ram`) REFERENCES `ram` (`id_ram`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_5` FOREIGN KEY (`id_emp`) REFERENCES `emp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_6` FOREIGN KEY (`id_ups`) REFERENCES `ups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_7` FOREIGN KEY (`id_dep`) REFERENCES `dep` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_8` FOREIGN KEY (`id_mon`) REFERENCES `monitor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_ibfk_9` FOREIGN KEY (`id_acc`) REFERENCES `acc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `emp`
--
ALTER TABLE `emp`
  ADD CONSTRAINT `emp_ibfk_1` FOREIGN KEY (`id_dep`) REFERENCES `dep` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emp_ibfk_3` FOREIGN KEY (`id_ciu`) REFERENCES `ciu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emp_ibfk_4` FOREIGN KEY (`id_edi`) REFERENCES `edi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `hdd`
--
ALTER TABLE `hdd`
  ADD CONSTRAINT `hdd_ibfk_1` FOREIGN KEY (`id_inst`) REFERENCES `discoinst` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hdd_ibfk_2` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hdd_ibfk_3` FOREIGN KEY (`id_tdisco`) REFERENCES `tdisco` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hdd_ibfk_4` FOREIGN KEY (`id_cap`) REFERENCES `capacidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `licencia`
--
ALTER TABLE `licencia`
  ADD CONSTRAINT `licencia_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `licencia_ibfk_2` FOREIGN KEY (`id_soft`) REFERENCES `software` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD CONSTRAINT `monitor_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `monitor_ibfk_2` FOREIGN KEY (`id_est`) REFERENCES `estado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proc`
--
ALTER TABLE `proc`
  ADD CONSTRAINT `proc_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proc_ibfk_2` FOREIGN KEY (`id_cap`) REFERENCES `capacidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ram`
--
ALTER TABLE `ram`
  ADD CONSTRAINT `ram_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ram_ibfk_2` FOREIGN KEY (`id_cap`) REFERENCES `capacidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ram_ibfk_3` FOREIGN KEY (`id_tipo`) REFERENCES `tram` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `switcher`
--
ALTER TABLE `switcher`
  ADD CONSTRAINT `switcher_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `switcher_ibfk_2` FOREIGN KEY (`id_dep`) REFERENCES `dep` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `switcher_ibfk_3` FOREIGN KEY (`id_edi`) REFERENCES `edi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `switcher_ibfk_4` FOREIGN KEY (`id_est`) REFERENCES `estado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tvideo`
--
ALTER TABLE `tvideo`
  ADD CONSTRAINT `tvideo_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tvideo_ibfk_2` FOREIGN KEY (`id_cap`) REFERENCES `capacidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ups`
--
ALTER TABLE `ups`
  ADD CONSTRAINT `ups_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ups_ibfk_2` FOREIGN KEY (`id_est`) REFERENCES `estado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_emp`) REFERENCES `emp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_emp`) REFERENCES `emp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
