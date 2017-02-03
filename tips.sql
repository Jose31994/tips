-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2017 a las 00:38:54
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tips`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frases`
--

CREATE TABLE `frases` (
  `num` int(3) NOT NULL,
  `frase` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frases`
--

INSERT INTO `frases` (`num`, `frase`, `autor`) VALUES
(1, 'Nunca consideres el estudio como un deber, sino como una oportunidad para penetrar en el maravilloso mundo del saber.', 'EINSTEIN, Albert'),
(2, 'Estudia no para saber algo más sino para saber algo mejor.', 'SÉNECA, Lucio Anneo'),
(3, 'El arte de enseñar es el arte de ayudar al descubrimiento.', 'Mark Van Doren'),
(4, 'Muchos estudiantes toman al estudio como un líquido que hay que tragar, y no como un sólido que debe masticarse. luego se preguntan por qué proporciona tan poco nutrimento real.', 'HARRIS, S.'),
(5, 'Quisiera vivir para estudiar, no estudiar para vivir.', 'BACON, Francis Bacon de Verulam'),
(6, 'En el estudio no existe la saciedad.', 'ERASMO de ROTTERDAM ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(3) NOT NULL,
  `nombre` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(700) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ruta` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url1` varchar(777) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url2` varchar(777) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `nombre`, `autor`, `descripcion`, `ruta`, `url1`, `url2`) VALUES
(1, 'asdadad', 'sdadada', 'asdadadadfsdfadfhgghjkhjljkñlkhl.hjk.hjk', 'imagenes/baldor.jpg', 'http://www.xclusivejams.co/category/albums', 'No Aplica'),
(2, 'asdfgvbhjguhj', 'dsdsfdsffdsfds', 'dsafdsdsfadsffdasfagthyiuo.ñl-ñ´{dsdsdsdsdssdfds', 'imagenes/project-8.jpg', 'http://www.xclusivejams.co/category/albums', 'No Aplica'),
(3, '544343rer', 'reregreg453e', 'erggshgjkoñ´pfsdcsvsdsff\r\nlñkljffgfg', 'imagenes/project-9.jpg', 'http://www.xclusivejams.co/category/albums', 'No Aplica'),
(4, 'sdfjhnhg', 'sjhplñ-o', 'hgnnhgnhndgndndgngdhngdnnghdn', 'imagenes/work_1.jpg', 'http://www.xclusivejams.co/category/albums', 'http://www.xclusivejams.co/category/albums'),
(5, 'asd', 'asd', 'asdasdasdasd', 'imagenes/1 (2).jpg', 'sdasdasdasd', 'No Aplica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mapa`
--

CREATE TABLE `mapa` (
  `id` int(5) NOT NULL,
  `nombre` varchar(555) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ruta` varchar(777) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url1` varchar(666) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mapa`
--

INSERT INTO `mapa` (`id`, `nombre`, `ruta`, `url1`) VALUES
(1, 'America division politica sin nombres', 'mapasimg/america division politica con nombres.JPG', 'tizimin/MAPAS/america division politica con nombres.pdf'),
(2, 'America division politica sin nombres', 'mapasimg/America division politica sin nombres.JPG', 'tizimin/MAPAS/America division politica sin nombres.pdf'),
(3, 'America orografia con nombres', 'mapasimg/America orografia con nombres.jpg', 'tizimin/MAPAS/America orografia con nombres.pdf'),
(4, 'mapa mundi sin division politica y sin nombres', 'mapasimg/mapa mundi sin division politica y sin nombres.jpg', 'tizimin/MAPAS/mapa mundi sin division politica y sin nombres.pdf'),
(5, 'Mapa Tizimin', 'mapasimg/Mapa Tizimin.jpg', 'tizimin/MAPAS/Mapa Tizimin.pdf'),
(6, 'mapa mundi con division politica Sin nombres', 'mapasimg/mapa mundi con division politica Sin nombres.jpg', 'tizimin/MAPAS/mapa mundi con division politica Sin nombres.pdf'),
(7, 'Mapa mundi con nombres', 'mapasimg/Mapa mundi con nombres.JPG', 'tizimin/MAPAS/Mapa mundi con nombres.pdf'),
(8, 'planisferio con nombres', 'mapasimg/planisferio con nombres.JPG', 'tizimin/MAPAS/planisferio con nombres.pdf'),
(9, 'republica con nombre y coordenadas', 'mapasimg/republica con nombre y coordenadas.jpg', 'tizimin/MAPAS/republica con nombre y coordenadas.pdf'),
(10, 'republica con nombres a color', 'mapasimg/republica con nombres a color.jpg', 'tizimin/MAPAS/republica con nombres a color.pdf'),
(11, 'republica mexicana con division politica sin nombres', 'mapasimg/republica mexicana con division politica sin nombres.jpg', 'tizimin/MAPAS/republica mexicana con division politica sin nombres.pdf'),
(12, 'Republica mexicana con nombres', 'mapasimg/Republica mexicana con nombres.JPG', 'tizimin/MAPAS/Republica mexicana con nombres.pdf'),
(13, 'Republica hidrografia', 'mapasimg/Republica mexicana hidrografia.jpg', 'tizimin/MAPAS/Republica mexicana hidrografia.pdf'),
(14, 'Republica orografia', 'mapasimg/Republica mexicana orografia.jpg', 'tizimin/MAPAS/Republica mexicana orografia.pdf'),
(15, 'tizimin mapa', 'mapasimg/tizimin mapa.JPG', 'tizimin/MAPAS/tizimin mapa.pdf'),
(16, 'yucatan con nombres atras a color', 'mapasimg/yucatan con nombres atras a color.jpg', 'tizimin/MAPAS/yucatan con nombres atras a color.pdf'),
(17, 'yucatan con nombres atras', 'mapasimg/yucatan con nombres atras.jpg', 'tizimin/MAPAS/yucatan con nombres atras.pdf'),
(18, 'yucatan con nombres', 'mapasimg/yucatan con nombres.JPG', 'tizimin/MAPAS/yucatan con nombres.pdf'),
(19, 'yucatan sin nombres', 'mapasimg/yucatan sin nombres.JPG', 'tizimin/MAPAS/yucatan sin nombres.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE `software` (
  `id` int(4) NOT NULL,
  `nombre` varchar(444) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ruta` varchar(666) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `proveedor` varchar(444) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(888) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url1` varchar(777) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url2` varchar(777) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url3` varchar(777) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `software`
--

INSERT INTO `software` (`id`, `nombre`, `ruta`, `proveedor`, `descripcion`, `url1`, `url2`, `url3`) VALUES
(1, 'Ashampoo® Photo Commander 15', 'imagenes/Ashampoo-PhotoCommander-15.jpg', 'Ashampoo®', 'Solución completa para ver, editar y organizar sus fotos, geoetiquetado incluido! Poner orden en la biblioteca de fotos, optimizar por lotes varios archivos a la vez o crear y diseñar sus propios calendarios, tarjetas de felicitación y presentaciones de diapositivas con facilidad.\r\n\r\nControlar y navegar por sus presentaciones de diapositivas en el PC mientras aparecen las diapositivas en una pantalla o en un proyector! Con sólo unos pocos clics, los principiantes, aficionados y profesionales lograrán por igual unos resultados impresionantes.\r\n', 'https://www.ashampoo.com/es/eur/pin/2018/multimedia-software/Ashampoo-Photo-Commander-15', 'http://www.ashampoo.com/ashampoo_photo_commander_15_sm.exe', 'No Aplica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tizimin`
--

CREATE TABLE `tizimin` (
  `id` int(5) NOT NULL,
  `nombre` varchar(666) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `lugar` varchar(666) COLLATE utf8_unicode_ci NOT NULL,
  `ruta` varchar(666) COLLATE utf8_unicode_ci NOT NULL,
  `url1` varchar(766) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tizimin`
--

INSERT INTO `tizimin` (`id`, `nombre`, `fecha`, `lugar`, `ruta`, `url1`) VALUES
(1, 'Concierto Angeles Azules', '2017-01-13', 'Área de Conciertos Masivos', 'imagenes/13117.jpg', 'http://tusboletos.mx/evento/923/conciertos/angeles-azules-en-tizimin'),
(2, 'Show Comico - Jorge Falcon', '2017-01-06', 'Salon Internacional', 'imagenes/6117.jpg', 'No Aplica'),
(3, 'Concierto Junior Klan', '2017-01-07', 'Sala de Fiestas Tizimín', 'imagenes/7117.jpg', 'No Aplica'),
(4, 'Concierto Edwin Luna y la Trakalosa de Monterrey', '2017-01-21', 'Área de Conciertos Masivos', 'imagenes/21117.jpg', 'http://tusboletos.mx/evento/922/conciertos/la-trakalosa-en-tizimin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `frases`
--
ALTER TABLE `frases`
  ADD PRIMARY KEY (`num`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mapa`
--
ALTER TABLE `mapa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tizimin`
--
ALTER TABLE `tizimin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `frases`
--
ALTER TABLE `frases`
  MODIFY `num` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `mapa`
--
ALTER TABLE `mapa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `software`
--
ALTER TABLE `software`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tizimin`
--
ALTER TABLE `tizimin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
