-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2018 a las 14:58:17
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `transportes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `introtext` mediumtext NOT NULL,
  `fulltext` mediumtext NOT NULL,
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `created` date NOT NULL,
  `destacado` tinytext NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `id_autor` int(5) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `url`, `introtext`, `fulltext`, `state`, `created`, `destacado`, `imagen`, `id_autor`, `title`, `description`, `keywords`) VALUES
(1, 'Aviones tipo boing', 'aviones-tipo-boing', 'Ahora puedes pagar tu taxis ejecutivos desde cualquier punto de pago y trasladarte de un lugar a otro con rapidez', 'Taxis ejecutivos Taxis ejecutivos Taxis ejecutivos,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago.<br />\r\n<br />\r\nTaxis ejecutivos Taxis ejecutivos Taxis ejecutivos,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago', 1, '2018-01-30', '1', 'avion_1.jpg', 1, 'Aviones tipo boing', 'Aviones tipo boing', ''),
(2, 'Buses para salir de paseo', 'buses-para-salir-de-paseo', 'Nuevos buses, para salir de paseo con confort y elegancia en cada uno de sus viajes, brindándole comodidad a sus pasajeros', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas &quot;Letraset&quot;, las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 1, '2018-02-28', '0', 'bus.jpg', 1, 'Buses para salir de paseo', '', ''),
(3, 'Taxi Marca Gol', 'taxi-marca-gol', 'Dedicado a los taxistas emprendedores con ganas de ser mejor en lo que hacen y disfrutar su trabajo', 'Taxis ejecutivos Taxis ejecutivos Taxis ejecutivos,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago<br />\r\n<br />\r\nTaxis ejecutivos Taxis ejecutivos Taxis ejecutivos,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago', 1, '2018-03-24', '0', '35.jpeg', 1, 'Taxi Marca Gol', 'descriptiontaximarcagol', 'keytaximarcagol'),
(4, 'Camiones de transporte', 'camiones-de-transporte', 'Ahora puedes pagar tu taxis ejecutivos desde cualquier punto de pago, Ahora puedes pagar tu taxis ejecutivos desde cualquier punto de pago', 'Camiones para transportar todo tipo de escombrosCamiones para transportar todo tipo de escombrosCamiones para transportar todo tipo de escombrosCamiones para transportar todo tipo de escombros', 1, '2018-04-22', '0', '747000.jpg', 1, 'Camiones de transporte', 'des', 'des'),
(5, 'Patrullas Toyotas', 'patrullas-toyotas', 'Ahora puedes pagar tu taxis ejecutivos desde cualquier punto de pago, Ahora puedes pagar tu taxis ejecutivos desde cualquier punto de pago', 'Taxis ejecutivos Taxis ejecutivos Taxis ejecutivos,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago.<br />\r\n<br />\r\nTaxis ejecutivos Taxis ejecutivos Taxis ejecutivos,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago', 1, '2018-05-18', '1', 'patrullas.jpg', 1, 'Patrullas Toyotas', 'descriptionpatrullas', 'keypatrullas'),
(6, 'Candidato a San Luis', 'candidato-a-san-luis', 'Ahora puedes pagar tu taxis ejecutivos desde cualquier punto de pago, Ahora puedes pagar tu taxis ejecutivos desde cualquier punto de pago', 'Candidato a las alcaldias de los distritos, Candidato a las alcaldias de los distritos, Candidato a las alcaldias de los distritos, Candidato a las alcaldias de los distritos.\r\n<div style=\"margin-left: 40px;\">Taxis ejecutivos Taxis ejecutivos Taxis ejecutivos,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago<br />\r\n&nbsp;</div>\r\n\r\n<div>Taxis ejecutivos Taxis ejecutivos Taxis ejecutivos,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago,Ahora puedes pagar tu taxis ejecutivos, desde cualquier punto de pago</div>\r\n', 1, '2018-06-10', '1', 'candidato.jpg', 1, 'Candidato a San Luis', '', ''),
(7, 'Nuevo Estadio', 'nuevo-estadio', 'Ahora puedes pagar tu taxis ejecutivos desde cualquier punto de pago, Ahora puedes pagar tu taxis ejecutivos desde cualquier punto de pago.', '<div style=\"margin-left: 40px;\">Candidato a las alcaldias de los distritos, Candidato a las alcaldias de los distritos, Candidato a las alcaldias de los distritos, Candidato a las alcaldias de los distritos.<br />\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <strong>ut labore et dolore magna aliqua.</strong> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei<em>usmod tempor incididunt </em>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit', 1, '2018-09-04', '1', 'DgU8Ds2UYAAEDsj.jpg', 1, 'Nuevo Estadio', '', ''),
(8, 'Articulo Nuevo', 'articulo-nuevo', 'Articulo Nuevo, dedicado a las personas con interés en ser emprendedores desde sus casa y poder compartir en familia', 'Articulo Nuevo', 1, '2018-07-26', '1', '1.jpeg', 1, 'Articulo Nuevo', 'Articulo Nuevo', 'Articulo Nuevo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id_banner` int(10) NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subtitulo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `sumilla` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `boton` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `enlace` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `posicion` varchar(255) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'left',
  `estado` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id_banner`, `titulo`, `subtitulo`, `sumilla`, `boton`, `enlace`, `imagen`, `orden`, `posicion`, `estado`) VALUES
(1, 'Transporte de', 'Mercancia', 'Brindamos nuestros servicios, garantizando obtener la confianza', 'y satisfacción de nuestros clientes', '', 'slider1.jpg', 1, 'right', 'A'),
(2, '¡Seguridad y Confort!', 'Seremos mejores', 'Brindamos nuestros servicios, garantizando obtener', 'Para mejorar', '', 'slider2.jpg', 3, 'right', 'A'),
(3, '¡Accesible y Seguro!', 'Simpre innovando', 'Brindamos nuestros servicios', 'Simpre innovando', '', 'slider3.jpg', 4, 'right', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_articulos`
--

CREATE TABLE `categorias_articulos` (
  `id` int(3) NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(3) NOT NULL,
  `estado` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias_articulos`
--

INSERT INTO `categorias_articulos` (`id`, `banner`, `categoria`, `url`, `orden`, `estado`, `title`, `keywords`, `description`) VALUES
(1, 'camiones.jpg', 'Taxi', 'taxi', 1, 'A', 'Taxi', 'taxi', 'noticias sobre taxi'),
(2, 'patrullas.jpg', 'Patrullas', 'patrullas', 2, 'A', 'Patrullas', '', ''),
(3, 'flotabus.jpg', 'Buses', 'buses', 3, 'A', 'Buses', '', ''),
(4, 'gandolas.jpg', 'Camiones', 'camiones', 4, 'A', 'Camiones', '', ''),
(5, 'avion_1.jpg', 'Avion', 'avion', 5, 'A', 'Avion', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('010kc2opn86thb8b5d3cq6epkpi55794', '::1', 1536092760, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039323736303b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b737563636573737c733a34313a2253652070726f636573c3b320636f7272656374616d656e7465206c6120696e666f726d616369c3b36e223b),
('1614hjis061t6jn9b9pst2atc75telu5', '::1', 1536083298, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038333239383b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('1emsk71qhtlhoe8t9d3b8csc7qrjd713', '::1', 1536087059, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038373035393b),
('1hkjj9hvnjb2ru1qksbt1al14vkda4qe', '::1', 1536085841, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038353834313b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('5fca492u16erh4ddhl3sohblub3bfn8n', '127.0.0.1', 1536095940, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039353934303b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('5hp1k65n30bh634offt97ptunne33qcs', '::1', 1536089133, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038393133333b),
('72cgigdpo8obabvpv93ia4l98otefjuq', '::1', 1536093077, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039333037373b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('7ctra8jrbr8tsgpcje00ghtpaasqhdc0', '::1', 1536086529, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038363532393b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('8bv2ae4r3vqbohflsph2j5imgk8qpjnb', '127.0.0.1', 1536099309, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039393330393b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('9euh4aeob0pk8f73u91h9snhees9nlm3', '::1', 1536085527, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038353532373b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('9t8g66pmkjkqolsu2b8l4qjlg7fh92ue', '::1', 1536431853, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363433313835323b),
('ae0604soufblu6bcc4l7avhdi72ulj4s', '::1', 1536101042, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363130313034323b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('asrddhvsbim5enf86kpj62d85s3qacic', '127.0.0.1', 1536099635, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039393633353b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('asrj2smh5df0uqslf0ts2pa3esbmns7v', '::1', 1536084101, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038343130313b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('b04lf3o9aegkeviqlqaidkfo0n380i2d', '::1', 1536083624, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038333632343b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('c2op6t988fuobn0c7ppge8cj0k1p5u40', '::1', 1536442772, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363434323737323b),
('co2s3cdo2de4h3v9la12266kor3e77jr', '::1', 1536084422, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038343432323b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('cut21jacv78aslrufass90dc70gu3bii', '::1', 1536086529, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038363532393b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('dtv4c9h9b5tr8pi94ior10uqpbuc5b5q', '::1', 1536086142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038363134323b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('fhffp35ple2bccfck0nqnefrora1o6af', '::1', 1536330301, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363333303330313b),
('fqojlcpi5l4u3h7vkhb8sui1tf38vr6j', '::1', 1536090649, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039303634393b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('g8bhmvqrr4he930imocf21ib6c29hcdq', '::1', 1536084792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038343739323b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('il5llhl36ii3crqml39il7nr9vej50u7', '::1', 1536095212, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039353231323b),
('ipe5vki2lv34cuarn506o7dcrmkei2gb', '::1', 1536089922, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038393932323b),
('jla4cfj3j3jovtkc4qsbvq8b5f6055sb', '127.0.0.1', 1536095336, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039353333363b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('k6ka56ndqohl8iahbb1j99k42f3t2mva', '127.0.0.1', 1536095639, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039353633393b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('kuvdv82fgggd9pb85cppi0j01gs4lbgg', '::1', 1537795568, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533373739353536383b),
('n5kea9p7cov4siut86pj9dofkk034bdp', '::1', 1536089557, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038393535373b),
('nm2trul5tc1o7sqkbi7g7rpal24ggno3', '127.0.0.1', 1536100035, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363130303033353b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('o499t4e9oajc8jhe6esf65u5dr5ilr6d', '::1', 1536090235, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039303233353b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('rgt11s8dff7cnfpj18alrvj7f010pvjt', '127.0.0.1', 1536096479, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039363437393b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('rotpbrfv6eld1534slhth3rf4fntu4uo', '::1', 1536090767, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039303634393b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('s962jf59qh6ifkn4gsnmii724vt4fl58', '127.0.0.1', 1536100506, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363130303530363b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('t5liti6ilefemcketiq1d3crk3kab62c', '::1', 1536094999, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039343939393b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('teet4tr2ta83dhrg4v2fpbhr9geus7cs', '::1', 1536085150, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038353135303b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('tocm5qi2tl6mn8c01r0jnbio2takipbr', '::1', 1536253029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363235333032373b),
('u2cpt1552og1h8sadlkms9p1tsr0e3fi', '::1', 1536087399, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038373339393b),
('uteul4m6m4pp6kvhmejg6jbatpiei4ti', '::1', 1536101089, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363130313034323b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b6d656e73616a657c733a34343a22537520696e666f726d616369c3b36e2073652061637475616c697ac3b320636f7272656374616d656e74652e223b),
('v2p2hj9otc7eip25jkv9k1j1l49n8v7s', '::1', 1536086707, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038363730373b),
('v4mbtcpltjaude3iatpeabu6tp6uaet4', '::1', 1536088716, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038383731363b),
('v66g8p4om3ud997hbig0hdf0tmcdiflo', '::1', 1536092407, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039323430373b);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `imagen` varchar(255) NOT NULL,
  `orden` int(5) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `url`, `state`, `imagen`, `orden`, `title`, `description`, `keywords`) VALUES
(1, 'Coca Cola', 'coca-cola', 1, 'COCA-COLA.jpg', 2, 'Coca Cola', 'Coca Cola', 'Coca Cola'),
(2, 'IIrsa Sur', 'iirsa-sur', 1, 'iirsa-sur_1_1.png', 1, 'IIrsa Sur', 'IIrsa Sur', 'IIrsa Sur'),
(3, 'Jhoselin distribuciones', 'jhoselin-distribuciones', 1, 'JHOSELIN_1_1.png', 3, 'Jhoselin distribuciones', 'Jhoselin distribuciones', 'Jhoselin distribuciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(5) NOT NULL,
  `llave` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `valor` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `tipo` tinyint(1) NOT NULL DEFAULT '0',
  `visible` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `llave`, `valor`, `descripcion`, `tipo`, `visible`) VALUES
(1, 'horario', 'Horario de trabajo:  Lun - Sab : 6.00 am - 10.00 pm, Domingos Cerrado', 'Horario laboral', 0, '1'),
(2, 'telefono', '084-277109', 'Número de contacto, central', 0, '1'),
(3, 'telefono_footer', 'RPM: 984685304 / #532073', 'Telefono que aparece en el pie de página', 0, '1'),
(4, 'correo', 'wsalas@transporteswilliam.com', 'Email que aparece en el pie de pagina', 0, '1'),
(5, 'direccion', 'Av. Ramón Castilla N° 02 San Jerónimo-Cusco-Cusco', 'Direccion fisica de la empresa', 0, '1'),
(6, 'linkpagina', 'https://www.transporteperu.com', 'Direccion de la pagina web', 0, '1'),
(7, 'remitente_registros', 'registros@logrosperu.com', 'Dirección de correo que figurará como remitente de los correos de registro y activación de anunciantes', 0, '1'),
(8, 'notificaciones_registros', 'l14307@gmail.com, erosadio@ajaxperu.com', 'Direcciones de correo a donde llegaran las notificaciones de registros de anunciantes y activaciones', 0, '1'),
(9, 'remitente_correos', 'informes@logrosperu.com', 'Email que figura como remitente de los mensajes de contacto que genera la pagina', 0, '1'),
(10, 'correos_notificaciones', 'erosadio@ajaxperu.com', 'Lista de emails a donde llegan las notificaciones de los mensajes enviados por el formulario de contacto de la página', 0, '1'),
(11, 'enlace_facebook', 'https://www.facebook.com/transportesperu/', 'Enlace a la fanpage', 0, '1'),
(12, 'enlace_twitter', 'https://www.twitter.com/transportesperu/', 'Enlace a pagina en twitter', 0, '1'),
(13, 'enlace_instagram', 'https://www.instagram.com/transportesperu/', 'Enlace a instagram', 0, '1'),
(14, 'enlace_linkedin', 'https://www.linkedin.com/transportesperu/', 'Enlace a Linkedin', 0, '1'),
(15, 'horario_especial', 'Horario de trabajo:  Lun - Sab : 6.00 am - 10.00 pm, Domingos 8:00 am - 8:00 pm', 'Horario de trabajo especial por cualquier temporada', 0, '1'),
(16, 'enlace_youtube', 'https://www.youtube.com/transportesperu/', 'Enlace a youtube', 0, '1'),
(17, 'enlace_skype', '', 'Enlace a skype', 0, '1'),
(18, 'enlace_pinterest', '', 'Enlace a pinterest', 0, '1'),
(19, 'copyright', 'Copyright ©2018 TRANSPORTES WILLIAM E.I.R.L. All Rights Reserved', 'Datos de los derechos', 0, '1'),
(20, 'fotos_x_pagina', '1', 'Numero de imagenes que se muestran  de las pagina', 0, '1'),
(21, 'articulos_x_pagina', '6', 'Numero de articulos por pagina', 0, '1'),
(22, 'titulodespuesbanner', 'Viaja seguros con nosotros', 'Titulo que va despues de los banner en la seccion Home', 0, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactenos`
--

CREATE TABLE `contactenos` (
  `id` int(6) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_ingreso` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contactenos`
--

INSERT INTO `contactenos` (`id`, `nombre`, `apellido`, `email`, `telefono`, `mensaje`, `estado`, `fecha_ingreso`) VALUES
(1, 'elvin', 'gonzalez', 'ing.elvngonzalez@gmail.com', '898898898', 'mensaje', 'Pendiente', '2018-08-28 04:08:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flota`
--

CREATE TABLE `flota` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `titulo` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL DEFAULT '',
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `imagen` varchar(255) NOT NULL,
  `orden` int(5) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `flota`
--

INSERT INTO `flota` (`id`, `nombre`, `titulo`, `url`, `state`, `imagen`, `orden`, `title`, `description`, `keywords`) VALUES
(1, 'Flota de Trailer', 'Flota de Trailers', 'flota-de-trailer', 1, '26.jpeg', 2, 'Flota de Trailer', 'Flota de Trailer', 'Flota de Trailer'),
(2, 'Flota de Trailers', 'Camiones especiales para el transporte de maquinaria pesada', 'flota-de-trailers', 1, '29.jpeg', 3, 'Flota de Trailers', 'Flota de Trailers', 'Flota de Trailers'),
(3, 'Flota de Trailers', 'Flota de Flota de Trailers', 'flota-de-trailers', 1, '14.jpeg', 1, 'Flota de Trailers', 'Flota de Trailers', 'Flota de Trailers'),
(4, 'Flota de Trailer', 'Flota de Trailers', 'flota-de-trailer', 1, '31.jpeg', 4, 'Flota de Trailer', 'Flota de Trailer', 'Flota de Trailer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `imagen` varchar(255) NOT NULL,
  `orden` int(5) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `titulo`, `url`, `state`, `imagen`, `orden`, `title`, `description`, `keywords`) VALUES
(1, 'Transportes a todo dar', 'transportes-a-todo-dar', 1, '16.jpeg', 6, 'Transportes a todo dar', 'Transportes a todo dar', 'Transportes a todo dar'),
(2, 'Trailers en la via', 'trailers-en-la-via', 1, '26.jpeg', 4, 'Trailers en la via', 'Trailers en la via', 'Trailers en la via'),
(3, 'Centro de despacho', 'centro-de-despacho', 1, '4.jpeg', 2, 'Centro de despacho', 'Centro de despacho', 'Centro de despacho'),
(4, 'Trailers toto terreno', 'trailers-toto-terreno', 1, '35.jpeg', 5, 'Trailers toto terreno', 'Trailers toto terreno', 'Trailers toto terreno'),
(5, 'Trailers', 'trailers', 1, '5.jpeg', 3, 'Trailers', 'Trailers', 'Trailers'),
(6, 'Transportes Coca cola', 'transportes-coca-cola', 1, '1.jpeg', 1, 'Transportes Coca cola', 'Transportes Coca cola', 'Transportes Coca cola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mapa`
--

CREATE TABLE `mapa` (
  `id_mapa` int(3) UNSIGNED NOT NULL,
  `titulo_globo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `texto_globo` text COLLATE utf8_spanish_ci,
  `orden` int(3) UNSIGNED DEFAULT NULL,
  `latitud_centro` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `longitud_centro` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `latitud_punto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `longitud_punto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `zoom` int(5) NOT NULL,
  `tipomapa` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mapa`
--

INSERT INTO `mapa` (`id_mapa`, `titulo_globo`, `texto_globo`, `orden`, `latitud_centro`, `longitud_centro`, `latitud_punto`, `longitud_punto`, `zoom`, `tipomapa`, `estado`) VALUES
(1, 'Almacen Chorrillos', 'Almacen Los Gorriones 256  La Campiña Chorrillos  Telef. 249-0292', 1, '-12.072022361830859', ' -76.99195424025879', '-12.068623070624064', ' -76.9954303831421', 16, 'roadmap', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `fulltext` mediumtext NOT NULL,
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `created` date NOT NULL DEFAULT '0000-00-00',
  `destacado` tinytext NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `id_autor` int(5) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `titulo`, `url`, `fulltext`, `state`, `created`, `destacado`, `imagen`, `id_autor`, `title`, `description`, `keywords`) VALUES
(1, 'Transporte de residuos solidos', 'transporte-de-residuos-solidos', 'Un automóvil de carreras está modificado para usarse en competencias de automovilismo. Según la disciplina y la categoría, un automóvil de carreras puede estar basado en un automóvil de calle o puede haber sido modificado específicamente para las carreras.', 1, '2018-08-17', '1', '25.jpeg', 1, 'Transporte de residuos solidos', 'desautos', 'keyautos'),
(2, 'Transporte de residuos liquidos', 'transporte-de-residuos-liquidos', 'Una ambulancia es un vehículo destinado al transporte de personas enfermas o heridas,1​ hacia, desde o entre lugares de tratamiento.', 1, '2018-08-17', '1', '26.jpeg', 1, 'Transporte de residuos liquidos', 'desambulancia', 'keyambulancia'),
(3, 'Motos de Carga', 'motos-de-carga', 'El autobús, bus, ruta, colectivo, bondi, guagua, micro u ómnibus (véase la sección &laquo;Regionalismos&raquo;) son los nombres más comunes del vehículo diseñado para transportar numerosas personas a través de vías urbanas. Generalmente es usado en los servicios de transporte público urbano e interurbano y con trayecto fijo. Su capacidad puede variar entre 10 y 120 pasajeros. En sistemas de autobús de tránsito rápido, la capacidad de los buses puede variar entre 160 y 240 pasajeros.', 1, '2018-08-17', '1', 'APC941.png', 1, 'Motos de Carga', 'destra', 'keybuses'),
(4, 'Transporte de residuos químicos', 'transporte-de-residuos-quimicos', 'Algunas marcas de autos trajeron al Perú modelos específicos para realizar el servicio de taxi.', 1, '2018-08-17', '1', '28.jpeg', 1, 'Transporte de residuos químicos', 'destaxi', 'keytaxi'),
(5, 'Vehículos Patrullas', 'vehiculos-patrullas', 'Es un automóvil utilizado para patrullar un área concreta asignada. ... Los vehículos patrulla también son capaces de responder a', 1, '2018-08-17', '1', '12.jpeg', 1, 'Vehículos Patrullas', 'despa', 'keypa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos_secciones`
--

CREATE TABLE `textos_secciones` (
  `id` int(5) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `seccion` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `textos_secciones`
--

INSERT INTO `textos_secciones` (`id`, `titulo`, `texto`, `title`, `keywords`, `description`, `seccion`) VALUES
(1, 'Transportes W C.A', 'Transportes W', 'Titulo pagina de inicio para SEO', 'Keywords pagina inicio para SEO', 'Description pagina inicio para SEO', 'inicio'),
(2, 'Quienes Somos', 'Quienes Somos', 'Empresa encargada de venta de maquinaria', 'Keywords quienes somos para SEO', 'Aqui va la descripcion', 'nosotros'),
(3, 'Galeria', 'Galeria', 'Galeria', 'Galeria', 'Galeria', 'galeria'),
(4, 'Políticas de Privacidad', 'Texto de Políticas de Privacidad', 'Políticas de Privacidad', 'Políticas de Privacidad', 'Description Políticas de Privacidad', 'privacidad'),
(5, 'Contactanos', 'Aqui va el texto', 'title', 'aqui va el keywords', 'aqui va la description', 'contactanos'),
(6, 'Flota', 'Flota', 'Flota', 'Flota', 'Flota', 'flota'),
(7, 'Articulos', 'Articulos', 'Articulos', 'Articulos', 'Articulos', 'articulos'),
(8, 'Clientes', 'Clientes', 'Clientes', 'Clientes', 'Clientes', 'clientes'),
(9, 'Servicios', 'Servicios', 'Servicios', 'Servicios', 'Servicios', 'servicios'),
(10, 'Categoria', 'Categoria', 'Categoria', 'Categoria', 'Categoria', 'categoria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos_web`
--

CREATE TABLE `textos_web` (
  `id` int(11) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `fulltext` mediumtext NOT NULL,
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `seccion` varchar(255) NOT NULL DEFAULT '',
  `imagen` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `textos_web`
--

INSERT INTO `textos_web` (`id`, `titulo`, `url`, `fulltext`, `state`, `seccion`, `imagen`, `title`, `description`, `keywords`) VALUES
(1, 'Quienes Somos', 'quienes-somos', '<div style=\"text-align: justify;\"><strong>TRANSPORTES WILLIAM</strong><br />\r\n&nbsp;</div>\r\n\r\n<div style=\"text-align: justify; margin-left: 40px;\">Es una empresa responsable que ofrece el servicio de transporte de mercancías en general por carretera a nivel nacional, iniciando operaciones 04 de enero del 2012, teniendo una experiencia por más de 16 años en el rubro de transporte. Teniendo como domicilio fiscal Av. Ramón Castilla N&deg; 02 del Distrito de San Jerónimo, Provincia y Departamento del Cusco.</div>\r\n', 2, 'nosotros', 'frontal_2.jpg', 'Quienes Somos', 'Quienes Somos des ', 'Quienes Somos des'),
(2, 'Nuestra Visión', 'nuestra-vision', '<div style=\"text-align: justify; margin-left: 40px;\">Constituirnos una empresa líder en el mercado del transporte, innovando y capacitando a nuestro recurso humano como mejorando temas técnicos y operacionales para poder lograr un alto estándar de calidad y diferenciarnos en el servicio brindado</div>\r\n', 2, 'vision', '', 'Nuestra Visión', 'vision de la empresa', 'vision de la empresa'),
(3, 'Nuestra Misión', 'nuestra-mision', '<div style=\"text-align: justify; margin-left: 40px;\">Prestamos servicio de transporte a empresas y personas en general a través del desarrollo de productos a la medida y necesidad de nuestros clientes, brindando seguridad y calidad a la hora de realizar la labor.</div>\r\n', 2, 'mision', 'frontal_4.jpg', 'Nuestra Misión', 'Mision de  la empresa', 'Mision de  la empresa'),
(4, 'Nuestros Valores', 'nuestros-valores', '<p style=\"margin-left:40px\">&bull; Seguridad: Es de suma prioridad realizar las labores de manera segura, concientizando al uso de EPPs y respetar las normas al momento de conducción.</p>\r\n\r\n<p style=\"margin-left:40px\">&bull; Puntualidad: Permanente en nuestro trabajo diario y refleja el respeto por el tiempo de nuestros clientes.</p>\r\n\r\n<p style=\"margin-left:40px\">&bull; Innovación: Ofreciendo siempre las mejores alternativas de solución dentro de la empresa como también acorde a la necesidad de los clientes.</p>\r\n\r\n<div style=\"margin-left: 40px;\">&bull; Actitud de servicio: Todos en la empresa, procuramos ser amables, proactivos e interesados en la prestación eficiente y eficaz de nuestros servicios.</div>\r\n', 2, 'valores', 'frontal_5.jpg', 'Nuestros Valores', 'Valores de la empresa', 'Valores de la empresa'),
(5, 'Nuestros servicios', 'nuestros-servicios', 'Vamos a cambiar, únete a nosotros ahora<br />\r\n&nbsp;', 1, 'servicios', 'frontal.jpg', 'Nuestros servicios', 'Servicios de la empresa ', 'Servicios de la empresa '),
(6, 'Políticas de Privacidad', 'politicas-de-privacidad', '<h3 style=\"text-align: justify;\"><strong>Política de Seguridad y salud en el trabajo</strong></h3>\r\n\r\n<div style=\"text-align: justify;\">Es una empresa privada dedicada al transporte terrestre de mercadería en general, buscando la satisfacción de sus clientes cumpliendo con altos estándares en cada actividad de transporte logística. Por tanto transportes William EIRL asume el reto de mantener y mejorar la seguridad y la salud de sus trabajadores, la protección del medioambiente, manteniéndose a la vanguardia para efectos de mejorar sus operaciones y servicios; por lo que se compromete a:</div>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Otorgar un servicio de transporte de carga de mercadería en general, manteniendo los parámetros de seguridad con garantía y eficiencia para el bienestar de nuestros trabajadores, clientes, comunidades y todos los grupos de interés involucrados con la actividad.</li>\r\n</ul>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Identificar y controlar los riesgos relacionados con la ocurrencia de incidentes o enfermedades ocupacionales, así como la identificación de impactos ambientales producto de las labores que desempeñamos comprometiéndonos a mejorar continuamente.</li>\r\n</ul>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Proveer un ambiente de trabajo seguro y saludable para nuestros trabajadores, controlando los riesgos en todas nuestras actividades.</li>\r\n</ul>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Fomentar la cultura de seguridad, basada en la prevención de riesgos y en la adopción de un comportamiento responsable para alcanzar nuevos objetivos.</li>\r\n</ul>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Respetar y cumplir leyes, normas y regulaciones aplicables, nacionales e internacionales relacionados al objeto de nuestros servicios, así como cumplir con las normas de nuestros clientes a efecto de garantizar un servicio eficiente.</li>\r\n</ul>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Promover la formación, capacitación y sensibilización de nuestro personal, para un adecuado y eficaz desempeño de las labores.</li>\r\n</ul>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Implementar acciones preventivas y correctivas enfocadas a la protección del medi ambiente así como la seguridad y salud de nuestros trabajadores y de las personas que presten servicio dentro de nuestras instalaciones áreas de responsabilidad.</li>\r\n</ul>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Respetar la cultura, tradiciones, valores y costumbres de las diversas comunidades regionales, nacionales, donde realizamos nuestras operaciones</li>\r\n</ul>\r\n\r\n<div style=\"text-align:justify\">&nbsp;</div>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Un mejoramiento continúo de los estándares de calidad, seguridad, salud ocupacional y protección medio ambiental promoviendo una conducta responsable.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Esta política será difundida a todo el personal de TRANSPORTES WILLIAM EIRL y partes interesadas.<br />\r\n<br />\r\nPROCEDIMIENTO DE LOS RIESGOS EN EL TRANSPORTE<br />\r\n<br />\r\n<strong>1. INTRODUCCIÓN</strong></p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\">Transportar mercadería en general, es una actividad aislada y que conlleva riesgos, y más aún hacerlo con la frecuencia y tiempo de exposición de los conductores profesionales a quienes se les ha de proveer de medidas preventivas para la eliminación y control de los riesgos del transporte por carretera. Sin embargo, es frecuente comprobar que algunas de las medidas preventivas facilitadas a los conductores para hacer frente a ciertos riesgos, o que los conductores han aplicado directamente, no se ajustan a la magnitud real de tales riesgos. En estos casos el riesgo subjetivo &ndash; el riesgo estimado por una persona &ndash; es menor que el riesgo real, lo que aumenta la probabilidad de accidente. El objetivo principal de cualquier sistema de prevención es eliminar los riesgos laborales en su origen o posteriormente si lo primero no fue posible.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>2. OBJETIVO</strong></p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\">Establecer un proceso continuo, para la evaluación de los riesgos iníciales y las revisiones periódicas que permita identificar los peligros y los factores de riesgo en el transporte por carretera, con el fin de eliminarlos, controlarlos o minimizarlos, priorizando las medidas preventivas a adoptar y estableciendo los oportunos medios de control.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>3. ALCANCE</strong></p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\">El procedimiento se debe considerar inicial y periódicamente todos los riesgos que puedan ocasionar; muerte, lesiones y/o pérdida de salud en las personas, daños al medio ambiente, daños a la propiedad, pérdida o deterioro o merma de la mercancía transportada, fugas de gases y/o vapores, derrame de líquidos, o cualquier otra consecuencia sobre las personas, los productos, las propiedades y el medio ambiente. Quedan excluidos los riesgos que han sido totalmente eliminados, que han desaparecido, por la adopción de medidas técnicas. Las medidas administrativas, por lo general, controlan o reducen el riesgo, pero casi nunca lo hacen totalmente desaparecer, quedando un riesgo latente a revisar.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>4. PROCEDIMIENTO</strong></p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\">AV. Ramón Castilla N&deg; 02 San Jerónimo Cusco 084-277109/ 984685304</p>\r\n\r\n<p style=\"text-align:justify\">wsalas@transporteswilliam.com<br />\r\nRESPONSABLE ACCIONES<br />\r\nRESPONSABLE SEGURIDAD<br />\r\nDE<br />\r\nEvaluar periódicamente la efectividad de los sistemas y medios de control de seguridad.<br />\r\nCORDINADOR TRANSPORTE<br />\r\nDE<br />\r\nControlar que el personal a su cargo cumpla con los requisitos establecidos.<br />\r\nCORDINADOR TRANSPORTE<br />\r\nDE<br />\r\nCapacitar al personal involucrado en temas de seguridad y riesgos.<br />\r\nCORDINADOR TRANSPORTE<br />\r\nDE<br />\r\nDifundir las políticas y procedimientos de seguridad y riesgos.<br />\r\n5. REQUISITOS DE SEGURIDAD<br />\r\nVERIFICAR<br />\r\nCOMENTARIO<br />\r\nCINTURON DE SEGURIDAD<br />\r\nTodas las unidades deben de tener implementado cinturón de seguridad en buenas condiciones<br />\r\nEXTINTOR<br />\r\nTodas las unidades deben contar con extintor de una capacidad adecuada y en buen estado<br />\r\nBOTIQUIN DE PRIMEROS<br />\r\nAUXILIOS<br />\r\nDeberán contar con botiquín de primeros auxilios<br />\r\nTRIANGULO/ CONOS CINTA DE SEGURIDAD<br />\r\nTodas la unidades deberán contar con sus triángulos y/o conos de seguridad en forma obligatoria<br />\r\nEPP`S<br />\r\nAdecuado uso de los Epp`s de seguridad, cascos, guantes, botas, chaleco, lentes, etc.<br />\r\nKIT ANTI DERRAME<br />\r\nKit anti derrame compuesto por, arena, aserrín, trapos absorbentes.<br />\r\n6. RIESGOS DURANTE EL ESTIBADO Y TRASLADO DE LA MERCADERIA<br />\r\nRIEGOS<br />\r\nACCIONES<br />\r\nExposiciones a pérdidas de producto<br />\r\nDeterminar los requerimientos y características de los dispositivos de protección (sunchos, correas..etc.)<br />\r\nAV. Ramón Castilla N&deg; 02 San Jerónimo Cusco 084-277109/ 984685304<br />\r\nwsalas@transporteswilliam.com<br />\r\nAccidente dentro establecimiento<br />\r\ndel<br />\r\nDeterminar las zonas de acceso Evaluar periódicamente el lugar<br />\r\nChoque vehicular<br />\r\ningreso a planta<br />\r\npor<br />\r\nVerificar las señales de transito Verificar los horarios de ingreso<br />\r\nDesprendimiento producto<br />\r\ndel<br />\r\nEvaluar los quillas antes de cargar<br />\r\nCapacitar al personal de estiba<br />\r\n<br />\r\nCERTIFICADO CESVI MEXICO- FORMACIÓN DE INSTRUCTORES EN SEGURIDAD VÍAL</p>\r\n', 3, 'privacidad', 'frontal.jpg', 'Políticas de Privacidad', 'Política de Seguridad', 'Política de Seguridad'),
(7, 'Viaja seguros con nosotros', 'viaja-seguros-con-nosotros', 'Viaja seguros con nosotros', 3, 'titulodespuesbanner', '', 'Viaja seguros con nosotros', 'descripcion', 'key'),
(8, 'Inicio', 'inicio', 'inicio', 1, 'inicio', 'inicio.jpg', 'iniciomod', 'descripcioninicio', 'keyinicio'),
(9, 'Nuestros Articulos', 'nuestros-articulos', 'Articulos', 1, 'articulos', 'frontal_1.jpg', 'Nuestros Articulos', 'Articulos', 'Articulos'),
(10, 'Nuestra flota vehícular', 'nuestra-flota-vehicular', 'flota', 1, 'flota', 'frontal.jpg', 'Nuestra flota vehícular', 'flota', 'flota'),
(11, 'Galeria de Imagenes', 'galeria-de-imagenes', 'galeria', 1, 'galeria', 'frontal.jpg', 'Galeria de Imagenes', 'galeria', 'galeria'),
(12, 'Nuestros clientes', 'nuestros-clientes', 'clientes', 1, 'clientes', 'frontal.jpg', 'Nuestros clientes', 'clientes', 'clientes'),
(13, 'contáctanos', 'contactanos', 'Contáctanos a traves de nuestras redes', 1, 'contactanos', 'frontal.jpg', 'contáctanos    ', 'contactanos', 'contactanos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` mediumint(5) NOT NULL,
  `usuario` varchar(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nivel` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:normal - 1:god',
  `estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `nivel`, `estado`) VALUES
(1, 'gelvin', 'gelvin', 'Elvin Gonzalez', 1, 1),
(2, 'digitador', 'digitador', 'Digitador', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_state` (`state`);

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indices de la tabla `categorias_articulos`
--
ALTER TABLE `categorias_articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactenos`
--
ALTER TABLE `contactenos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `flota`
--
ALTER TABLE `flota`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mapa`
--
ALTER TABLE `mapa`
  ADD PRIMARY KEY (`id_mapa`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `textos_secciones`
--
ALTER TABLE `textos_secciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `textos_web`
--
ALTER TABLE `textos_web`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id_banner` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categorias_articulos`
--
ALTER TABLE `categorias_articulos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `contactenos`
--
ALTER TABLE `contactenos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `flota`
--
ALTER TABLE `flota`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `textos_secciones`
--
ALTER TABLE `textos_secciones`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `textos_web`
--
ALTER TABLE `textos_web`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
