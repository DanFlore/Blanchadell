-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2020 a las 17:40:46
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blanchadell`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `astillero`
--

CREATE TABLE `astillero` (
  `Nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Tipo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Servicio` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Grupo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Casco` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `EsloraToral` int(99) NOT NULL,
  `EsloraPP` int(99) NOT NULL,
  `Manga` int(99) NOT NULL,
  `Puntal` int(99) NOT NULL,
  `TonelajeTBR` int(99) NOT NULL,
  `TonelajeGT` int(99) NOT NULL,
  `Calado` int(99) NOT NULL,
  `Peso` int(99) NOT NULL,
  `Desplazamiento` int(99) NOT NULL,
  `CargaMax` int(99) NOT NULL,
  `DesplazamientoMax` int(99) NOT NULL,
  `PotenciaPropulsora` int(99) NOT NULL,
  `PotenciaAuxiliar` int(99) NOT NULL,
  `Velocidad` int(99) NOT NULL,
  `Combustible` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `AguasPotable` int(99) NOT NULL,
  `AguasNegras` int(99) NOT NULL,
  `AguasOleosas` int(99) NOT NULL,
  `Tripulacion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Grua` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Cabrestante` int(99) NOT NULL,
  `Generador` int(99) NOT NULL,
  `Texto` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `Foto1` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Foto2` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Foto3` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Foto4` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Foto5` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Foto6` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Enlace1` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Enlace2` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Enlace3` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `astillero`
--

INSERT INTO `astillero` (`Nombre`, `Tipo`, `Servicio`, `Grupo`, `Casco`, `EsloraToral`, `EsloraPP`, `Manga`, `Puntal`, `TonelajeTBR`, `TonelajeGT`, `Calado`, `Peso`, `Desplazamiento`, `CargaMax`, `DesplazamientoMax`, `PotenciaPropulsora`, `PotenciaAuxiliar`, `Velocidad`, `Combustible`, `AguasPotable`, `AguasNegras`, `AguasOleosas`, `Tripulacion`, `Grua`, `Cabrestante`, `Generador`, `Texto`, `Foto1`, `Foto2`, `Foto3`, `Foto4`, `Foto5`, `Foto6`, `Enlace1`, `Enlace2`, `Enlace3`) VALUES
('Blanchadellf', 'pesca', 'dfgadr', 'sfa', 'asdf', 22, 22, 22, 22, 2, 2, 22, 22, 22, 22, 22, 22, 22, 22, '22', 22, 22, 22, '2', '22', 22, 22, '32tyuty', 'C:/Users/Dan/Desktop/PW_Blanchadell/imagenes/imagenesSubidaBarco/IMG_1027.jpg', 'C:/Users/Dan/Desktop/PW_Blanchadell/imagenes/imagenesSubidaBarco/IMG_1037.jpg', 'C:/Users/Dan/Desktop/PW_Blanchadell/imagenes/imagenesSubidaBarco/IMG_1021.jpg', '', '', '', 'https://www.lawebera.es/xhtml-css/estilo-de-textos-con-css-html.php', 'https://www.lawebera.es/xhtml-css/estilo-de-textos-con-css-html.php', 'https://www.lawebera.es/xhtml-css/estilo-de-textos-con-css-html.php'),
('Blanchadellg', 'pesca', 'dfgadr', 'sfa', 'asdf', 22, 22, 22, 22, 2, 2, 22, 22, 22, 22, 22, 22, 22, 22, '22', 22, 22, 22, '2', '22', 22, 22, '32tyuty', 'C:/Users/Dan/Desktop/PW_Blanchadell/imagenes/imagenesSubidaBarco/IMG_1027.jpg', 'C:/Users/Dan/Desktop/PW_Blanchadell/imagenes/imagenesSubidaBarco/IMG_1037.jpg', 'C:/Users/Dan/Desktop/PW_Blanchadell/imagenes/imagenesSubidaBarco/IMG_1021.jpg', '', '', '', 'https://www.lawebera.es/xhtml-css/estilo-de-textos-con-css-html.php', 'https://www.lawebera.es/xhtml-css/estilo-de-textos-con-css-html.php', 'https://www.lawebera.es/xhtml-css/estilo-de-textos-con-css-html.php'),
('Blanchadellh', 'pesca', 'dfgadr', 'sfa', 'asdf', 22, 22, 22, 22, 2, 2, 22, 22, 22, 22, 22, 22, 22, 22, '22', 22, 22, 22, '2', '22', 22, 22, '32tyuty', 'C:/Users/Dan/Desktop/PW_Blanchadell/imagenes/imagenesSubidaBarco/IMG_1027.jpg', 'C:/Users/Dan/Desktop/PW_Blanchadell/imagenes/imagenesSubidaBarco/IMG_1037.jpg', 'C:/Users/Dan/Desktop/PW_Blanchadell/imagenes/imagenesSubidaBarco/IMG_1021.jpg', '', '', '', 'https://www.lawebera.es/xhtml-css/estilo-de-textos-con-css-html.php', 'https://www.lawebera.es/xhtml-css/estilo-de-textos-con-css-html.php', 'https://www.lawebera.es/xhtml-css/estilo-de-textos-con-css-html.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanica`
--

CREATE TABLE `mecanica` (
  `werf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `passwd` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `nivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `passwd`, `nivel`) VALUES
('cdj6rXZxNc', 'rLdgVpZunCEE9aq', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
