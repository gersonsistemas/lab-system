-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-10-2018 a las 02:09:48
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lab-system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biopsia`
--

CREATE TABLE `biopsia` (
  `id_biopsia` int(11) NOT NULL,
  `correlativo_biopsia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `edad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `id_databiopsia` int(11) NOT NULL,
  `hallazgomacro` text COLLATE utf8_unicode_ci NOT NULL,
  `hallazgomicro` text COLLATE utf8_unicode_ci NOT NULL,
  `conclusion` text COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` text COLLATE utf8_unicode_ci NOT NULL,
  `material` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_biopsia` date NOT NULL,
  `firma_digital` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `historial` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citologia`
--

CREATE TABLE `citologia` (
  `id_citologia` int(11) NOT NULL,
  `correlativo_citologia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `edad` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `id_datacitologia` int(11) NOT NULL,
  `hallazgo` text COLLATE utf8_unicode_ci NOT NULL,
  `conclusion` text COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha_citologia` date NOT NULL,
  `firma_digital` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinica`
--

CREATE TABLE `clinica` (
  `id_clinica` int(11) NOT NULL,
  `nombre_clinica` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_clinica` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `observacion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `name_company` text COLLATE utf8_unicode_ci NOT NULL,
  `prefix_company` text COLLATE utf8_unicode_ci NOT NULL,
  `img_logo` text COLLATE utf8_unicode_ci NOT NULL,
  `img_login` text COLLATE utf8_unicode_ci NOT NULL,
  `img_profile` text COLLATE utf8_unicode_ci NOT NULL,
  `title_html` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `databiopsia`
--

CREATE TABLE `databiopsia` (
  `id_databiopsia` int(8) NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `hallazgomacro` text COLLATE utf8_unicode_ci NOT NULL,
  `hallazgomicro` text COLLATE utf8_unicode_ci NOT NULL,
  `conclusion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datacitologia`
--

CREATE TABLE `datacitologia` (
  `id_datacitologia` int(11) NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `hallazgo` text COLLATE utf8_unicode_ci NOT NULL,
  `conclusion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE `doctor` (
  `id_doctor` int(11) NOT NULL,
  `nombre_doctor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_doctor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `especialidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail`
--

CREATE TABLE `mail` (
  `id_mail` int(11) NOT NULL,
  `host` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `port` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SMTPAuth` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SMTPDebug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username_mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password_mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `realname_mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `security`
--

CREATE TABLE `security` (
  `id_security` int(11) NOT NULL,
  `name_security` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `realname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_security` int(11) NOT NULL,
  `security` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `proffession` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `education` text COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `db_insert` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_update` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `db_delete` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `username`, `realname`, `password`, `id_security`, `security`, `proffession`, `education`, `location`, `notes`, `permission`, `status`, `db_insert`, `db_update`, `db_delete`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', 'Administrador', 'Activo', 'Activo', 'Activo', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `biopsia`
--
ALTER TABLE `biopsia`
  ADD PRIMARY KEY (`id_biopsia`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_bitacora`);

--
-- Indices de la tabla `citologia`
--
ALTER TABLE `citologia`
  ADD PRIMARY KEY (`id_citologia`);

--
-- Indices de la tabla `clinica`
--
ALTER TABLE `clinica`
  ADD PRIMARY KEY (`id_clinica`);

--
-- Indices de la tabla `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indices de la tabla `databiopsia`
--
ALTER TABLE `databiopsia`
  ADD PRIMARY KEY (`id_databiopsia`);

--
-- Indices de la tabla `datacitologia`
--
ALTER TABLE `datacitologia`
  ADD PRIMARY KEY (`id_datacitologia`);

--
-- Indices de la tabla `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id_doctor`);

--
-- Indices de la tabla `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id_mail`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`id_security`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_pregunta` (`id_security`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `biopsia`
--
ALTER TABLE `biopsia`
  MODIFY `id_biopsia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `citologia`
--
ALTER TABLE `citologia`
  MODIFY `id_citologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `clinica`
--
ALTER TABLE `clinica`
  MODIFY `id_clinica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `databiopsia`
--
ALTER TABLE `databiopsia`
  MODIFY `id_databiopsia` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT de la tabla `datacitologia`
--
ALTER TABLE `datacitologia`
  MODIFY `id_datacitologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id_doctor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
--
-- AUTO_INCREMENT de la tabla `mail`
--
ALTER TABLE `mail`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `security`
--
ALTER TABLE `security`
  MODIFY `id_security` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_security`) REFERENCES `security` (`id_security`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
