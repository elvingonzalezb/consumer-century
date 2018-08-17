-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2018 a las 00:18:30
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
  `id_categoria` int(6) NOT NULL DEFAULT '0',
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `introtext` mediumtext NOT NULL,
  `fulltext` mediumtext NOT NULL,
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
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

INSERT INTO `articulos` (`id`, `id_categoria`, `titulo`, `url`, `introtext`, `fulltext`, `state`, `created`, `destacado`, `imagen`, `id_autor`, `title`, `description`, `keywords`) VALUES
(7, 1, 'Taxis Ejecutivos', 'taxis-ejecutivos', 'Taxis ejecutivos', 'Taxis ejecutivos Taxis ejecutivos Taxis ejecutivos', 1, '2018-08-17 00:00:00', '1', 'Super-Autos-Deportivos-de-Lujo5_thumb.jpg', 1, 'Taxis Ejecutivos', '', ''),
(2, 3, 'Buses para salir de paseo', 'buses-para-salir-de-paseo', '                                        Nuevos buses                                    ', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas &quot;Letraset&quot;, las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 1, '2018-08-14 00:00:00', '0', 'flotabus.jpg', 1, 'Buses para salir de paseo', '', ''),
(4, 1, 'Taxi Marca Gol', 'taxi-marca-gol', '                                                                                Taxi marca gol                                                                                                                                           ', '<ul>\r\n	<li>\r\n	<h2 style=\"font-style:italic\"><strong>Taxi marca gol</strong></h2>\r\n	</li>\r\n</ul>\r\n', 1, '2018-08-16 00:00:00', '1', 'taxi.jpg', 1, 'Taxi Marca Gol', 'descriptiontaximarcagol', 'keytaximarcagol'),
(6, 4, 'Camiones de transporte', 'camiones-de-transporte', 'Camiones para transportar todo tipo de escombros', 'Camiones para transportar todo tipo de escombrosCamiones para transportar todo tipo de escombrosCamiones para transportar todo tipo de escombrosCamiones para transportar todo tipo de escombros', 1, '2018-08-17 00:00:00', '1', 'flota_4.jpg', 1, 'Camiones de transporte', 'des', 'des'),
(5, 2, 'Patrullas Toyotas', 'patrullas-toyotas', 'Patrullas', 'Patrullas nuevas', 1, '2018-08-16 00:00:00', '1', 'patrullas.jpg', 1, 'Patrullas Toyotas', 'descriptionpatrullas', 'keypatrullas');

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
(2, '¡Excelencia y Calidad!', 'Siempre atenderemos la solicitud', '', '', '', '20180817095958.jpg', 1, 'right', 'A'),
(4, '¡Seguridad y Confort!', 'Seremos mejores personas', '', '', '', '20180817100149.jpg', 3, 'right', 'A'),
(5, '¡Accesible y Seguro!', 'Tomaremos mediadas drasticas, dentro del seno politico', '', '', '', '20180816094221.jpg', 4, 'right', 'A');

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
(4, 'gandolas.jpg', 'Camiones', 'camiones', 4, 'A', 'Camiones', '', '');

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
('033p9ahrt1non94uigjan6fd1v2okjmn', '::1', 1534532856, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533323835363b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('0c6hvctfq2m2nt9rrigu0dj4hd25ckvs', '::1', 1534540436, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343534303433363b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('220oa5d9tlb93v7kcce8co4ph0ul6osq', '::1', 1534543032, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343534333033323b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('22b4mh0rqgna9brgnk4b4m6uc4asuflq', '::1', 1534541299, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343534313239393b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('3ca242k15gepffao9q3r1796mrgnfk57', '::1', 1534535809, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533353830393b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('4kntc2tmbc4jhapqcfedch6k7pf6c6or', '::1', 1534530226, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533303232363b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('50fpg4ag8183jdnjl1rf47jacjgqdsl7', '::1', 1534519276, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343531393237363b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('55njcolctpmsk0vlitl79k0qtlgm4for', '::1', 1534527899, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532373839393b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('5d5kh2niivjbck1l1r0adq5s93r5g7aa', '::1', 1534539975, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533393937353b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('61054ts506if4i5o118sk8p7e0b2l2an', '::1', 1534517321, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343531373332313b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('6ta1i4rhrr2qa1ja16q0sgeg4js982j7', '::1', 1534523334, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532333333343b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('7bk25rmcjo6v27n4bqvprub9766pvqtj', '::1', 1534541781, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343534313738313b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('7e6mfrac7rj45eqnq5qnpihn605eutda', '::1', 1534524441, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532343434313b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('959g4aki712u54r8urerasas004mhm4f', '::1', 1534534130, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533343133303b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('9c1gpep09sp816qavajqaag8k47cu36n', '::1', 1534536176, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533363137363b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('c165errfmhonfcti3nbqjtc3681h8ci6', '::1', 1534522802, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532323830323b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('f1qnk1m7rff624tvonq2o3h81hpksp4s', '::1', 1534522032, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532323033323b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('f79qjkbk14f2v60m12k00v05jfsk43j7', '::1', 1534535495, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533353439353b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('frsp09nqpurhiqja0fk06u97289d0jdb', '::1', 1534534461, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533343436313b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('g2nq21i155fikcv8j566f5390gr5823k', '::1', 1534521352, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532313335323b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('gl7g2ngsfg1n3uj7m4t9rpg9q4tgbu3t', '::1', 1534519776, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343531393737363b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('h3uv2o60saprnir7fde80h6rpr0g3skl', '::1', 1534535113, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533353131333b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('i98j8hris2b22ckbfbu7il2gbeolffro', '::1', 1534521659, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532313635393b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('ir8d0rd41palg7qbkads6fl5nt0a922k', '::1', 1534537163, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533373136333b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('jbm8575tnaglhcudl9kb8dmn6i3r5s5k', '::1', 1534525466, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532353436363b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('jgnvdl4lk6bv1cpdvab3tccfnjchr5lv', '::1', 1534538274, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533383237343b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('jgqvcr021otbbulnvv6dc0elb4hq6u57', '::1', 1534526094, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532363039343b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('kauf97ept6660q600qnph44nu03k31rd', '::1', 1534518966, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343531383936363b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('kp3gto8sclag3kmta9cuc1i8sqfq0skc', '::1', 1534524742, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532343734323b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('lh3pt5vk7dq72vb1s3upqel8m3sur80k', '::1', 1534524104, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532343130343b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('ljbhk2av29ughfb27776o1nkomp2egaa', '::1', 1534537807, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533373830373b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('lubj2a5om87fpam97mcv7ub9nfo7n74n', '::1', 1534523693, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532333639333b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('mdp19fn8vpoket1533pis66t0dgchili', '::1', 1534543270, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343534333033323b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('n3o1emkqgm71jt5g5c10ja95pd44hedn', '::1', 1534536485, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533363438353b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('nujsotev431ddalneh2fui792r0517lf', '::1', 1534525783, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532353738333b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('ooo3skah7a3fcg65k2vq2rqtujossfj5', '::1', 1534538593, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533383539333b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('oubpgnlaq1muef637ccf3htauhu117j8', '::1', 1534520959, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532303935393b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('pjaaoaqv2q1p5hi2e48qqt82cvf7molh', '::1', 1534539618, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533393631383b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('ql0739v2ksrujh6rt4tv1f43eni7ngmi', '::1', 1534534787, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533343738373b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('rabag6im0bnsiopbq8qm43kfutrl6raa', '::1', 1534538940, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533383934303b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('ru6ofe5eihp1t0u3nicnp13jmm1e3mne', '::1', 1534532337, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533323333373b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('sfu9ockml2b4t3i4448sbd622rf8nris', '::1', 1534518296, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343531383239363b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('si86j85m43k6esb9i6hpsav11eush77j', '::1', 1534533682, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533333638323b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('sl5c80tf1d752kkj1bo7eb850ghge5m7', '::1', 1534539250, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343533393235303b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('t3fge1s1ne6m26jt0flohkof7hnlhm6g', '::1', 1534516658, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343531363635383b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('uienip16r4gvj9df1ias0hri7hurasa8', '::1', 1534522432, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532323433323b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('upomuae9hdbrnqmbebn7cmlvpss4ebuf', '::1', 1534520647, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343532303634373b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('vpffvg106qu84qgttpb0tum9kojscvuq', '::1', 1534518598, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343531383539383b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('vpv16ds0fb0vob8jclv4at2km3og4i61', '::1', 1534517883, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343531373838333b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b),
('vv77jjpqalif0r77nvso6uj52sf1ugfe', '::1', 1534542715, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533343534323731353b7265676973747261646f7c623a313b6e6f6d6272655f61646d696e7c733a31343a22456c76696e20476f6e7a616c657a223b69645f61646d696e7c733a313a2231223b6e6976656c7c733a313a2231223b);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `fulltext` mediumtext NOT NULL,
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `destacado` tinyint(4) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `id_autor` int(5) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `url`, `fulltext`, `state`, `created`, `destacado`, `imagen`, `id_autor`, `title`, `description`, `keywords`) VALUES
(1, 'Empresa Ajax', 'empresa-ajax', 'empresa dedicada al ramo tecnologico', 1, '2018-08-17 00:00:00', 1, 'clientes.jpg', 1, 'title', 'ds', 'key');

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
(1, 'carreras_x_pagina', '100', 'Número de carreras por página en la sección Guia de Carreras', 0, '1'),
(2, 'instituciones_x_pagina', '12', 'Número de Instituciones Educativas por página de resultados', 0, '1'),
(3, 'telefono_footer', '+51 1 945 430 973', 'Telefono que aparece en el pie de página', 0, '1'),
(4, 'correo_footer', 'informes@logrosperu.com', 'Email que aparece en el pie de pagina', 0, '1'),
(5, 'articulos_x_pagina', '25', 'Número de artículos por página en el Blog', 0, '1'),
(6, 'max_articulos_relacionados', '5', 'Número máximo de artículos relacionados por tags', 0, '1'),
(7, 'remitente_registros', 'registros@logrosperu.com', 'Dirección de correo que figurará como remitente de los correos de registro y activación de anunciantes', 0, '1'),
(8, 'notificaciones_registros', 'l14307@gmail.com, erosadio@ajaxperu.com', 'Direcciones de correo a donde llegaran las notificaciones de registros de anunciantes y activaciones', 0, '1'),
(9, 'remitente_contactenos', 'informes@logrosperu.com', 'Email que figura como remitente de los mensajes de contacto que genera la pagina', 0, '1'),
(10, 'notificaciones_contactenos', 'erosadio@ajaxperu.com', 'Lista de emails a donde llegan las notificaciones de los mensajes enviados por el formulario de contacto de la página', 0, '1'),
(11, 'enlace_facebook', 'https://www.facebook.com/Logros.edu/', 'Enlace a la fanpage', 0, '1'),
(12, 'enlace_twitter', '', 'Enlace a pagina en twitter', 0, '1'),
(13, 'enlace_instagram', NULL, 'Enlace a instagram', 0, '1'),
(14, 'enlace_linkedin', NULL, 'Enlace a Linkedin', 0, '1');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones_pagina`
--

CREATE TABLE `secciones_pagina` (
  `id` int(3) NOT NULL,
  `seccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `secciones_pagina`
--

INSERT INTO `secciones_pagina` (`id`, `seccion`, `valor`, `orden`) VALUES
(1, 'Que es Orientacion Vocacional', 'orientacion', 1),
(2, 'Quienes Somos', 'empresa', 2),
(3, 'Servicios', 'servicios', 3),
(4, 'Preguntas Frecuentes', 'faq', 4),
(5, 'Políticas de Privacidad', 'politicas', 5),
(6, 'Bolsa de Trabajo', 'bolsa', 6),
(7, 'Becas', 'becas', 7),
(8, 'Carreras', 'carreras', 8),
(9, 'Instituciones Educativas', 'instituciones', 9),
(10, 'Términos y Condiciones', 'terminos', 10),
(11, 'Testimonios', 'testimonios', 11);

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
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
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
(1, 'Transporte de residuos solidos', 'transporte-de-residuos-solidos', 'Un automóvil de carreras está modificado para usarse en competencias de automovilismo. Según la disciplina y la categoría, un automóvil de carreras puede estar basado en un automóvil de calle o puede haber sido modificado específicamente para las carreras.', 1, '2018-08-17 00:00:00', '1', 'Super-Autos-Deportivos-de-Lujo5_thumb.jpg', 1, 'Transporte de residuos solidos', 'desautos', 'keyautos'),
(2, 'Transporte de residuos liquidos', 'transporte-de-residuos-liquidos', 'Una ambulancia es un vehículo destinado al transporte de personas enfermas o heridas,1​ hacia, desde o entre lugares de tratamiento.', 1, '2018-08-17 00:00:00', '1', '67_1.jpg', 1, 'Transporte de residuos liquidos', 'desambulancia', 'keyambulancia'),
(3, 'Motos de Carga', 'motos-de-carga', 'El autobús, bus, ruta, colectivo, bondi, guagua, micro u ómnibus (véase la sección &laquo;Regionalismos&raquo;) son los nombres más comunes del vehículo diseñado para transportar numerosas personas a través de vías urbanas. Generalmente es usado en los servicios de transporte público urbano e interurbano y con trayecto fijo. Su capacidad puede variar entre 10 y 120 pasajeros. En sistemas de autobús de tránsito rápido, la capacidad de los buses puede variar entre 160 y 240 pasajeros.', 1, '2018-08-17 00:00:00', '1', 'motos.jpg', 1, 'Motos de Carga', 'destra', 'keybuses'),
(4, 'Transporte de residuos químicos', 'transporte-de-residuos-quimicos', 'Algunas marcas de autos trajeron al Perú modelos específicos para realizar el servicio de taxi.', 1, '2018-08-17 00:00:00', '1', 'taxi1.jpg', 1, 'Transporte de residuos químicos', 'destaxi', 'keytaxi'),
(5, 'Vehículos Patrullas', 'vehiculos-patrullas', 'Es un automóvil utilizado para patrullar un área concreta asignada. ... Los vehículos patrulla también son capaces de responder a', 1, '2018-08-17 00:00:00', '1', 'patrullas.jpg', 1, 'Vehículos Patrullas', 'despa', 'keypa');

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
(1, 'Pagina de Transportes', 'Aqui va el texto', 'Transportes', 'Transportes', 'aqui va la description', 'inicio'),
(2, 'Aqui va el titulo', 'Aqui va el texto', ' Aqui va el title', ' Aqui va el keywords', 'Aqui va la descripcion', 'nosotros'),
(3, 'Aqui va el titulo privacidad', 'Aqui va el titulo&nbsp;privacidad', 'Aqui va el titulo privacidad', 'Aqui va el titulo privacidad', 'Aqui va el titulo privacidad', 'privacidad'),
(4, 'Aquí va titulo modificado', 'Aquí va titulo', 'Aquí va titulo', 'Aquí va titulo', 'Aquí va titulo', 'terminos'),
(5, 'Contactanos', 'Aqui va el texto', 'title', 'aqui va el keywords', 'aqui va la description', 'contactanos'),
(6, 'Ubicanos', 'Aqui va el texto', 'title', 'aqui va el keywords', 'aqui va la description', 'ubicanos'),
(7, 'Blog', 'Blog', 'Blog', 'Blog', 'Blog', 'servicios'),
(8, 'Titulo Empresa', 'Texto de contenido,Texto de contenido,Texto de contenido,​Texto de contenido,Texto de contenido,​Texto de contenido,Texto de contenid<strong>o,​Texto de contenido,</strong>Texto de contenido,​Texto de contenido,Texto de contenido,​Texto de contenido,Texto de contenido,​Texto de contenido,', 'Title Empresa', 'keywords Empresa', 'Description empresa', 'empresa');

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
  `id_autor` int(5) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `textos_web`
--

INSERT INTO `textos_web` (`id`, `titulo`, `url`, `fulltext`, `state`, `seccion`, `imagen`, `id_autor`, `title`, `description`, `keywords`) VALUES
(3, 'Quienes Somos', 'quienes-somos', 'Somos la solución inteligente de gestión de flotas de vehículos utilizada por clientes en todo el mundo. Tenemos los mejores precios y un servicio de calidad, trabajamos con pequeñas y grandes flotas y por compañías de todos los sectores con necesidades muy diferentes Somos la solución inteligente de gestión de flotas de vehículos utilizada por clientes en todo el mundo. Tenemos los mejores precios y un servicio de calidad, trabajamos con pequeñas y grandes flotas y por compañías de todos los sectores con necesidades muy diferentes', 1, 'nosotros', 'mislogros.jpg', 1, 'Quienes Somos', 'descrmosotros', 'keynostro'),
(4, 'Contamos con todo tipo de servicio', 'contamos-con-todo-tipo-de-servicio', 'Contamos con todo tipo de servicio Si deseas ir al mar', 1, 'paralax', 'paralax.jpg', 1, 'Contamos con todo tipo de servicio', 'des', 'key'),
(5, 'Nuestros Servicios', 'nuestros-servicios', 'Ofrecemos servicios de todo tipo de transporte, contamos con una gran variedad de transporte, poseemos las mejores marcas y mejores precios', 1, 'texto_servicio', 'servicios.jpg', 1, 'title', 'des', 'key');

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
(1, 'admin', 'gelvin', 'Elvin Gonzalez', 1, 1),
(3, 'digitador', 'digitador', 'Digitador', 2, 1);

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
-- Indices de la tabla `secciones_pagina`
--
ALTER TABLE `secciones_pagina`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id_banner` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categorias_articulos`
--
ALTER TABLE `categorias_articulos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `contactenos`
--
ALTER TABLE `contactenos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `secciones_pagina`
--
ALTER TABLE `secciones_pagina`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `textos_secciones`
--
ALTER TABLE `textos_secciones`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `textos_web`
--
ALTER TABLE `textos_web`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
