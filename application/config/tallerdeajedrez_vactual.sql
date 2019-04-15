-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-04-2019 a las 05:58:27
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tallerdeajedrez_vactual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `album_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `album` varchar(200) NOT NULL,
  `lugar` varchar(200) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `albums`
--

INSERT INTO `albums` (`album_id`, `album`, `lugar`, `fecha`) VALUES
(1, 'Día de los Maestros', 'Almacén Cultural de Zárate, Buenos Aires, Argentina.', '11/09/2010'),
(2, 'Grand Prix en Zárate', 'Zárate, Buenos Aires, Argentina.', '09/10/2010'),
(3, 'Torneo por Equipos', 'Belén de Escobar, Buenos Aires, Argentina.', '21/11/2010'),
(4, 'LXI Torneo Abierto de Verano, 80 Aniversario. (1er. y 2da. rondas)', 'Villa Ballester, Buenos Aires, Argentina.', '22/01/2011'),
(5, 'LXI Torneo Abierto de Verano, 80 Aniversario. (3er. y 4ta. rondas)', 'Villa Ballester, Buenos Aires, Argentina.', '23/01/2011'),
(6, 'LXI Torneo Abierto de Verano, 80 Aniversario. (5ta. ronda)', 'Villa Ballester, Buenos Aires, Argentina', '25/01/2011'),
(7, 'LXI Torneo Abierto de Verano, 80 Aniversario. (6ta. ronda)', 'Villa Ballester, Buenos Aires, Argentina', '26/01/2011'),
(8, 'LXI Torneo Abierto de Verano, 80 Aniversario. (7ma. ronda)', 'Villa Ballester, Buenos Aires, Argentina', '28/01/2011'),
(9, 'LXI Torneo Abierto de Verano, 80 Aniversario. (8va. ronda)', 'Villa Ballester, Buenos Aires, Argentina', '29/01/2011'),
(10, 'LXI Torneo Abierto de Verano, 80 Aniversario. (9na. ronda)', 'Villa Ballester, Buenos Aires, Argentina', '30/01/2011'),
(11, 'IX Torneo Abierto en Memoria de Jorge Adelman (1er. ronda)', 'Belén de Escobar, Buenos Aires, Argentina', '04/02/2011'),
(12, 'IX Torneo Abierto en Memoria de Jorge Adelman (2da., 3er. y 4ta. rondas)', 'Belén de Escobar, Buenos Aires, Argentina', '05/02/2011'),
(13, 'IX Torneo Abierto en Memoria de Jorge Adelman (5ta., 6ta. y 7ma. rondas)', 'Belén de Escobar, Buenos Aires, Argentina', '06/02/2011'),
(14, 'Villa Martelli (Con la visita de Judith Polgar)', 'Villa Martelli, Buenos Aires, Argentina', '11/06/2011');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frases`
--

DROP TABLE IF EXISTS `frases`;
CREATE TABLE IF NOT EXISTS `frases` (
  `frase_id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT,
  `frase` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`frase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `frases`
--

INSERT INTO `frases` (`frase_id`, `frase`, `autor`) VALUES
(1, 'La táctica consiste en saber qué hacer cuando hay algo que hacer. La estrategia, en saber qué hacer cuando no hay nada que hacer.', 'Savielly Tartakower'),
(2, 'La técnica del ajedrez comprende muchos aspectos, pero el más agradable de considerar es el de la combinación, que es la técnica de la belleza objetiva del juego.', 'Roberto Gabriel Grau'),
(3, 'El ajedrecista experimentado estudia una posición y atrapa rápidamente los detalles típicos de la misma.', 'Roberto Gabriel Grau'),
(4, 'Hay dos clases de sacrificios: los correctos y los míos...', 'Mijaíl Tal'),
(5, 'En la apertura ... debe aspirarse a conseguir una buena posición y no a obtener ventaja material', 'Siegbert Tarrasch'),
(6, 'La belleza de un movimiento no se refleja sólo en su apariencia, sino en el pensamiento detrás de él.', 'Siegbert Tarrasch'),
(7, 'De pocas partidas he aprendido tanto como de la mayoría de mis derrotas.', 'José Raúl Capablanca'),
(8, 'El Ajedrez es un juego útil y honesto, indispensable en la educación de la juventud.', 'Simón Bolívar'),
(9, 'El Ajedrez es algo más que un juego; es una diversión intelectual que tiene algo de Arte y mucho de Ciencia. Es además, un medio de acercamiento social e intelectual.', 'José Raúl Capablanca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidas`
--

DROP TABLE IF EXISTS `partidas`;
CREATE TABLE IF NOT EXISTS `partidas` (
  `partida_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blancas` varchar(200) NOT NULL,
  `negras` varchar(200) NOT NULL,
  `resultado` varchar(200) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `evento` varchar(200) NOT NULL,
  `vinculo` varchar(200) NOT NULL,
  `meGusta` int(11) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`partida_id`),
  UNIQUE KEY `vinculo` (`vinculo`)
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partidas`
--

INSERT INTO `partidas` (`partida_id`, `blancas`, `negras`, `resultado`, `fecha`, `evento`, `vinculo`, `meGusta`) VALUES
(1, 'Bastanzo, Jorge Raúl', 'Carlos', '1 - 0', '??/??/1980', 'Partida Amistosa', 'https://lichess.org/embed/oaaGWMMu', 1),
(2, 'Bastanzo, Jorge Raúl', '?', '1 - 0', '??/??/1984', 'Partida Amistosa', 'https://lichess.org/embed/gsJ8wEuF', 1),
(8, 'Hikaru Nakamura', 'Garry Kasparov', '1/2 - 1/2', '14/08/2017', 'St. Louis Rapid & Blitz (Rapid)', 'https://lichess.org/embed/dlg3JZ6Q', 1),
(9, 'Garry Kasparov', 'Leinier Dominguez Perez', '1/2 - 1/2', '14/08/2017', 'St. Louis Rapid & Blitz (Rapid)', 'https://lichess.org/embed/mjryatxu', 1),
(10, 'Garry Kasparov', 'Sergey Karjakin', '1/2 - 1/2', '14/08/2017', 'St. Louis Rapid & Blitz (Rapid)', 'https://lichess.org/embed/cR8rWuoz', 1),
(15, 'szurtos', 'nazarenobastanzo', '0 - 1', '07/01/2017', 'Partida de Internet', 'https://lichess.org/embed/avrwpr8j', 1),
(16, 'hyderho', 'nazarenobastanzo', '0 - 1', '07/01/2017', 'Partida de Internet', 'https://lichess.org/embed/oBhKY6PD', 1),
(17, 'jbastanzo', 'MirekVeverka', '1 - 0', '07/01/2017', 'Partida de Internet', 'https://lichess.org/embed/SLvRgYVR', 1),
(18, 'OliverOnion', 'nazarenobastanzo', '0 - 1', '08/01/2017', 'Partida de Internet', 'https://lichess.org/embed/zSAOBJXh', 1),
(19, 'nazarenobastanzo', 'Spillpants', '1 - 0', '10/01/2017', 'Partida de Internet', 'https://lichess.org/embed/tKNOQBsV', 1),
(20, 'jbastanzo', 'mozartpraga', '1 - 0', '02/01/2017', 'Partida de Internet', 'https://lichess.org/embed/pEabnC0e', 1),
(21, 'AfolabiS', 'nazarenobastanzo', '0 - 1', '17/02/2017', 'Partida de Internet', 'https://lichess.org/embed/SKWsr1tm', 1),
(22, 'nazarenobastanzo', 'TinasheEr', '1 - 0', '29/08/2017', 'Partida de Internet', 'https://lichess.org/embed/kmAuMsqU', 0),
(23, 'Adams, Michael (2505)', 'Psakhis, Lev (2565)', '1 - 0', '??/??/1989', 'GMA Baleares Open', 'https://lichess.org/embed/IUkMCgUk', 0),
(24, 'Psakhis, Lev (2570)', 'Adams, Michael (2610)', '1/2 - 1/2', '??/??/1992', 'Chalkidiki', 'https://lichess.org/embed/eeaZjXAv', 1),
(25, 'Adams, Mi (2740)', 'Psakhis, Lev (2545)', '1 - 0', '07/11/2004', 'EuChampionship Internet KO', 'https://lichess.org/embed/J2hrwq5q', 0),
(26, 'Psakhis, Lev (2545)', 'Adams, Mi (2740)', '1/2 - 1/2', '07/11/2004', 'EuChampionship Internet KO', 'https://lichess.org/embed/KZCD84rR', 1),
(27, 'Adams, Mi (2740)', 'Psakhis, Lev (2545)', '1/2 - 1/2', '07/11/2004', 'EuChampionship Internet KO', 'https://lichess.org/embed/AOBw4ZWd', 1),
(28, 'Psakhis, Lev (2545)', 'Adams, Mi (2740)', '0 - 1', '07/11/2004', 'EuChampionship Internet KO', 'https://lichess.org/embed/cVp2dNCu', 0),
(29, 'Akopian, Vladimir (2460)', 'Psakhis, Lev (2550)', '0 - 1', '??/??/1988', 'Yerevan', 'https://lichess.org/embed/a454gLaJ', 2),
(30, 'nazarenobastanzo', 'Franiol', '1 - 0', '31/10/2017', 'Partida de Internet', 'https://lichess.org/embed/ZsDWw4Kw', 1),
(31, 'nazarenobastanzo', 'gambit09', '1 - 0', '04/11/2017', 'Partida de Internet', 'https://lichess.org/embed/BBE8TOoI', 1),
(32, 'Sergey Karjakin (2757)', 'Andrey Esipenko (2438)', '0 - 1', '27/12/2017', 'World Rapid Championship', 'https://lichess.org/embed/AdS7ROU6', 2),
(33, 'carevchess (1566)', 'nazarenobastanzo (1560)', '0 - 1', '30/12/2017', 'Partida de Internet', 'https://lichess.org/embed/MTbqZAof', 1),
(34, 'djangofan (1554)', 'nazarenobastanzo (1656)', '0 - 1', '30/12/2017', 'Partida de Internet', 'https://lichess.org/embed/T7axDE2s', 1),
(35, 'nazarenobastanzo (1655)', 'opxah27 (1594)', '1 - 0', '03/01/2018', 'Partida de Internet', 'https://lichess.org/embed/RwQaWTtJ', 1),
(36, 'jbastanzo (1751)', 'Theborg1149 (1661)', '1 - 0', '01/01/2018', 'Partida de Internet (15 minutos por jugador)', 'https://lichess.org/embed/R6VyXHXR', 1),
(37, 'nazarenobastanzo (1638)', 'Ruchka2 (1600)', '1 - 0', '03/01/2018', 'Partida de Internet (15 minutos por jugador)', 'https://lichess.org/embed/9CH6quIJ', 1),
(38, 'Noziel (1484)', 'nazarenobastanzo (1521)', '0 - 1', '04/01/2018', 'Partida de Internet (3 minutos por jugador)', 'https://lichess.org/embed/GYL5clpG', 1),
(39, 'nazarenobastanzo (1642)', 'ulruslan333 (1692)', '1 - 0', '25/01/2018', 'Partida de Internet (10 minutos por jugador)', 'https://lichess.org/embed/zvf3Bus6', 1),
(40, 'nazarenobastanzo (1654)', 'barbaroja (1614)', '1 - 0', '25/01/2018', 'Partida de Internet (10 minutos por jugador)', 'https://lichess.org/embed/CCNhN5Ps', 1),
(41, 'nazarenobastanzo (1663)', 'dimasss007 (1468?)', '1 - 0', '25/01/2018', 'Partida de Internet (10 minutos por jugador)', 'https://lichess.org/embed/uulOUSMa', 1),
(42, 'Sandro Mareco (2632)', 'Denes Boros (2457)', '1 - 0', '18/01/2018', 'Pro Chess League', 'https://lichess.org/embed/4HUDhW8M', 2),
(43, 'Lemos, Damian (2556)', 'Vernay, Clovis (2442)', '1 - 0', '02/02/2010', '8th Gibtelecom Masters', 'https://lichess.org/embed/LW4YcisC', 2),
(44, 'A. Ushenina (2.445, Ucrania)', 'A. Matnadze (2.368, España)', '0 - 1', '05/11/2017', 'Europeo Nac. Fem. (8). Hersonissos(Gr.)', 'https://lichess.org/embed/SVZP38aq', 2),
(45, 'Aronian, Levon', 'Navara,D', '1 - 0', '??/??/????', 'Saint Louis 2017', 'https://lichess.org/embed/6kWXbiAN', 2),
(46, 'Kamsky, Gata (2655)', 'Kasparov, Garry (2780)', '0 - 1', '??/??/1992', 'Manila (ol) 55/606', 'https://lichess.org/embed/Yk7krsl7', 1),
(47, 'Georgi Tringov', 'Robert James Fischer', '0 - 1', '31/08/1965', 'Havana', 'https://lichess.org/embed/cVInrSCo', 2),
(48, 'WizardofWarsaw (1589)', 'jbastanzo (1755)', '0 - 1', '06/04/2018', 'Partida de Internet', 'https://lichess.org/embed/kNOoeyLe', 1),
(49, 'GBP_Morphy', 'nazarenobastanzo', '0 - 1', '08/04/2018', 'Partida de internet', 'https://lichess.org/embed/6FZfnEB8', 1),
(50, 'Julian Proleiko (2119)', 'Federico Perez Ponsa (2553)', '0 - 1', '07/03/2018', 'Pro Chess League', 'https://lichess.org/embed/m9eWZyyg', 1),
(51, 'jbastanzo (1755)', 'fklausner (1643)', '1 - 0', '13/04/2018', 'Partida de Internet', 'https://lichess.org/embed/92mtqmzK', 1),
(52, 'jbastanzo (1755)', 'srcntzcn (1637)', '1 - 0', '13/04/2018', 'Partida de Internet', 'https://lichess.org/embed/agmueScn', 1),
(53, 'Flores, Diego (2601)', 'Song, Yuxin (2075)', '1 - 0', '03/04/2018', '20th Dubai Open 2018', 'https://lichess.org/embed/dLjjq94I', 2),
(54, 'nazarenobastanzo (1685)', 'tercoer (1603)', '1 - 0', '16/04/2018', 'Partida de Internet', 'https://lichess.org/embed/r6OccqwT', 1),
(55, 'marillo (1516)', 'nazarenobastanzo (1697)', '0 - 1', '27/04/2018', 'Partida de Internet', 'https://lichess.org/embed/IMzeM1qv', 0),
(56, 'Skino86 (1788)', 'nazarenobastanzo (1703)', '1/2 - 1/2', '28/04/2018', 'Partida de Internet', 'https://lichess.org/embed/E01LIzTr', 0),
(57, 'nazarenobastanzo (1674)', 'kurubaco (1740)', '1 - 0', '29/04/2018', 'Partida de Internet', 'https://lichess.org/embed/pi6Bakdd', 1),
(58, 'tallerdeajedrez (1371)', 'FernandoPava (1341)', '1 - 0', '07/05/2018', 'Partida de Internet', 'https://lichess.org/embed/f6ULEaDn', 1),
(59, 'nazarenobastanzo (1686)', 'mocorongo (1864)', '1 - 0', '07/05/2018', 'Partida de Internet', 'https://lichess.org/embed/UWmNmWgI', 1),
(60, 'jbastanzo (1755)', 'Curvo (1659)', '1 - 0', '13/05/2018', 'Partida de Internet', 'https://lichess.org/embed/mMNtWIhS', 1),
(61, 'metin51 (1762)', 'nazarenobastanzo (1658)', '0 - 1', '21/05/2018', 'Partida de Internet', 'https://lichess.org/embed/G5k6GmmR', 1),
(62, 'jbastanzo (1755)', 'p37030703 (1446)', '1 - 0', '20/05/2018', 'Partida de Internet', 'https://lichess.org/embed/oXgSapgM', 1),
(63, 'Perez Ponsa, Federico (2577)', 'Salazar, Arturo (1656)', '1 - 0', '18/11/2017', '3rd Patagonia Open 2017', 'https://lichess.org/embed/AnhN28IF', 2),
(64, 'nazarenobastanzo (1671)', 'Rokjunior (1655)', '1 - 0', '22/05/2018', 'Partida de Internet', 'https://lichess.org/embed/cSkb2lyq', 1),
(65, 'Dr_rezaie28 (1299)', 'nazarenobastanzo (1364)', '0 - 1', '30/05/2018', 'Partida de Internet', 'https://lichess.org/embed/TlTuT9Pe', 1),
(66, 'nazarenobastanzo (1243)', 'HUARI_10 (1307)', '1 - 0', '30/05/2018', 'Partida de Internet', 'https://lichess.org/embed/JUD4dnuw', 2),
(67, 'nazarenobastanzo (1410)', 'galletto7 (1262)', '1 - 0', '02/06/2018', 'Partida de Internet', 'https://lichess.org/embed/SR0vqo4a', 1),
(68, 'jbastanzo (1755)', 'nivalen292 (1772)', '1 - 0', '2018-07-09', 'Partida a 15 minutos', 'https://lichess.org/embed/vju87X0I', 0),
(69, 'nazarenobastanzo (1416)', 'fferer (1379)', '1 - 0', '2018-07-07', 'Partida a 5 minutos', 'https://lichess.org/embed/k4UVpWzT', 1),
(70, 'Josefo (1768)', 'nazarenobastanzo (1665)', '0 - 1', '2018-07-02', 'Partida a 10 minutos', 'https://lichess.org/embed/SMOACze5', 1),
(71, 'nazarenobastanzo (1673)', 'Chutney (1706)', '1 - 0', '2018-07-02', 'Partida a 10 minutos', 'https://lichess.org/embed/0BHgwLlm', 1),
(72, 'nbastanzo (1554)', 'tom fitz (1631)', '1 - 0', '28/VIII/2018', 'Partida a 15 minutos', 'https://lichess.org/embed/8T7NWAHB', 1),
(73, 'BEZYJMBLA (1547)', 'tallerdeajedrez (1536)', '0 - 1', '16/09/2018', 'Partida en internet, a 5 min/jugador', 'https://lichess.org/embed/QMn1JRKX', 0),
(74, 'tallerdeajedrez (1601)', 'culukan (1453)', '1 - 0', '16/09/2018', 'Por puntos, a 10 min/jugador', 'https://lichess.org/embed/05TDitDj', 0),
(75, 'tallerdeajedrez', 'JosueGz01', '1 - 0', '19/09/2018', 'Por puntos, en Internet', 'https://lichess.org/embed/X4nOaN7t', 0),
(76, 'nazarenobastanzo', 'squidgie', '1 - 0', '14/10/2018', 'Partida en internet a 10 min/jugador', 'https://lichess.org/embed/WjvO8l61', 0),
(77, 'nazarenobastanzo', 'sinus-virus', '1 - 0', '25/11/2018', 'Partida de Internet', 'https://lichess.org/embed/gv6FCDQJ', 0),
(78, 'ghoshd1', 'nbastanzo', '0 - 1', '20/12/2018', 'Partida online', 'https://lichess.org/embed/oqoDsexA', 0),
(79, 'tallerdeajedrez', 'cornerthrees', '1 - 0', '22/12/2018', 'Partida Online', 'https://lichess.org/embed/vrbAdtBg', 0),
(80, 'Ankedo', 'tallerdeajedrez', '0 - 1', '22/12/2018', 'Partida Online', 'https://lichess.org/embed/ureQp8Q5', 0),
(3, 'Jovana Rapport (2318)', 'Anna Muzychuck (2550)', '0 - 1', '06/09/2016', 'Chess Olympiad (Women)', 'https://lichess.org/embed/TMcLzq4m', 0),
(4, 'Alexander Morozevich (2675)', 'Yifan Hou (2666)', '0 - 1', '24/07/2017', 'Biel', 'https://lichess.org/embed/V2mPyjgI', 0),
(5, 'desso2b', 'nazarenobastanzo', '0 - 1', '21/12/2018', 'Partida Online', 'https://lichess.org/embed/cgmmrAv0', 0),
(6, 'nazarenobastanzo', 'Hamidi1986', '1 - 0', '21/12/2018', 'Partida Online', 'https://lichess.org/embed/xixk4tGY', 0),
(7, 'nazarenobastanzo', 'plenitude', '1 - 0', '21/12/2018', 'Partida Online', 'https://lichess.org/embed/virGpwfo', 0),
(11, 'Johann Hjartarson', 'Garry Kasparov', '0 - 1', '30/09/1989', 'Interpolis 13th', 'https://lichess.org/embed/6Wb7fgUe', 0),
(12, 'Garry Kasparov', 'Johann Hjartarson', '1 - 0', '21/09/1989', 'Interpolis 13th', 'https://lichess.org/embed/HjHDApER', 0),
(13, 'Anatoly Karpov', 'Garry Kasparov', '0 - 1', '15/10/1985', 'Karpov - Kasparov World Championship Match', 'https://lichess.org/embed/0lFyl6X6', 0),
(14, 'david-artiles', 'nazarenobastanzo', '0 - 1', '20/12/2018', 'Partida Online', 'https://lichess.org/embed/0PH9XWlr', 0),
(81, 'nazarenobastanzo', 'vjovanov', '1 - 0', '20/12/2018', 'Partida Online', 'https://lichess.org/embed/sCI7WamH', 0),
(82, 'jbastanzo', 'kreulpion', '1 - 0', '26/12/2018', 'Partida Amistosa Online', 'https://lichess.org/embed/H05wkb8r', 0),
(83, 'nazarenobastanzo', 'lopi88', '1 - 0', '27/12/2018', 'Partida Online', 'https://lichess.org/embed/pM6v1ReO', 0),
(84, 'nazarenobastanzo', 'cheserX', '1 - 0', '02/01/2019', 'Partida Online', 'https://lichess.org/embed/fFXGJXFX', 0),
(85, 'cheserX', 'nazarenobastanzo', '0 - 1', '02/01/2019', 'Partida Online', 'https://lichess.org/embed/YLoazlUY', 0),
(86, 'nazarenobastanzo', 'Zeon_Lussander', '1 - 0', '03/01/2019', 'Partida Online', 'https://lichess.org/embed/8WBKu8ii', 0),
(87, 'esco2340', 'nazarenobastanzo', '0 - 1', '06/01/2019', 'Partida Online', 'https://lichess.org/embed/6YXbCvip', 0),
(88, 'nazarenobastanzo', 'DanielS7', '1 - 0', '07/01/2019', 'Partida Online', 'https://lichess.org/embed/w3nkA2sy', 0),
(89, 'rafa8688', 'jbastanzo', '0 - 1', '06/01/2019', 'Partida Online (ChessTempo)', 'https://lichess.org/embed/G9rw8fcA', 0),
(90, 'neraslapula', 'nazarenobastanzo', '0 - 1', '07/01/2019', 'Partida Online (Lichess)', 'https://lichess.org/embed/H7Af9vFd', 0),
(91, 'Magnus Carlsen', 'Maxime Vachier-Lagrave', '1 - 0', '17/04/2015', 'Gashimov Memorial', 'https://lichess.org/embed/saeblWWd', 0),
(92, 'Mareco, Sandro (2661)', 'Cuenca Jimenez, Jose Fernando (2512)', '1 - 0', '11/01/2019', 'IRT Club Caissa 2019 (Guatemala)', 'https://lichess.org/embed/kZ4FWOHA', 0),
(93, 'Magnus Carlsen', 'Jan-Krzysztof Duda', '1 - 0', '26/01/2019', 'Tata Steel Masters', 'https://lichess.org/embed/kW8TRt3y', 0),
(94, 'jbastanzo', 'lechuzon', '1 - 0', '23/02/2019', 'Partida Online (Lichess)', 'https://lichess.org/embed/8zlaKAcc', 0),
(95, 'Wei Yi', 'Alexandr Hilario Takeda dos Santos Fier', '1 - 0', '21/02/2019', '17th Aeroflot Open (Group A)', 'https://lichess.org/embed/dYLjn4tp', 0),
(96, 'nazarenobastanzo', 'sekerlama', '1 - 0', '04/03/2019', 'Partida Online (Lichess)', 'https://lichess.org/embed/FlgC2IUr', 0),
(97, 'Nazarenobastanzo', 'Kat Stam', '1 - 0', '09/03/2019', 'Partida Online (ChessBase)', 'https://lichess.org/embed/ernQunW7', 0),
(98, 'Kris147', 'tallerdeajedrez', '1/2 - 1/2', '26/03/2019', 'Partida Online (Lichess)', 'https://lichess.org/embed/JImnTTVQ', 0),
(99, 'Wanda Zartobliwy', 'Karol Józef Wojtyla', '0 - 1', '01/01/1946', 'Partida de Ajedrez (Cracovia, Polonia)', 'https://lichess.org/embed/ljWZhZdp', 0),
(100, 'szachjuve', 'jbastanzo', '0 - 1', '28/03/2019', 'Partida Online (Lichess)', 'https://lichess.org/embed/CPXCwCaQ', 0),
(101, 'alexwarnolf', 'tallerdeajedrez', '1 - 0', '28/03/2019', 'Partida Online (Lichess)', 'https://lichess.org/embed/7vUBR7Ix', 0),
(102, 'tallerdeajedrez', 'burlacucatalin', '1 - 0', '31/03/2019', 'Partida Online (Lichess)', 'https://lichess.org/embed/g1BitEiU', 0),
(103, 'nikola2202', 'tallerdeajedrez', '0 - 1', '04/04/2019', 'Partida Online (Lichess)', 'https://lichess.org/embed/PqdmoI0s', 0),
(104, 'Jorge Raúl', 'Ooibos', '1 - 0', '05/04/2019', 'Partida Online (play.chessbase.com)', 'https://lichess.org/embed/rB9vTJRO', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

DROP TABLE IF EXISTS `visitas`;
CREATE TABLE IF NOT EXISTS `visitas` (
  `visita_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `visitas` int(11) UNSIGNED NOT NULL,
  `fecha_inicio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`visita_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`visita_id`, `visitas`, `fecha_inicio`) VALUES
(0, 66, '6 de abril de 2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
