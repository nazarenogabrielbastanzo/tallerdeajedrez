
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-02-2018 a las 18:14:58
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u286954684_chess`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `album_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `album` varchar(200) NOT NULL,
  `lugar` varchar(200) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `vinculo` varchar(200) NOT NULL,
  PRIMARY KEY (`album_id`),
  UNIQUE KEY `vinculo` (`vinculo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `albums`
--

INSERT INTO `albums` (`album_id`, `album`, `lugar`, `fecha`, `vinculo`) VALUES
(1, 'Día de los Maestros', 'Almacén Cultural de Zárate, Buenos Aires, Argentina.', '11/09/2010', '?page=fotos_torneo1'),
(2, 'Grand Prix en Zárate', 'Zárate, Buenos Aires, Argentina.', '09/10/2010', '?page=fotos_torneo2'),
(3, 'Torneo por Equipos', 'Belén de Escobar, Buenos Aires, Argentina.', '21/11/2010', '?page=fotos_torneo3'),
(4, 'LXI Torneo Abierto de Verano, 80 Aniversario. (1er. y 2da. rondas)', 'Villa Ballester, Buenos Aires, Argentina.', '22/01/2011', '?page=fotos_torneo4_1-2'),
(5, 'LXI Torneo Abierto de Verano, 80 Aniversario. (3er. y 4ta. rondas)', 'Villa Ballester, Buenos Aires, Argentina.', '23/01/2011', '?page=fotos_torneo4_3-4'),
(6, 'LXI Torneo Abierto de Verano, 80 Aniversario. (5ta. ronda)', 'Villa Ballester, Buenos Aires, Argentina', '25/01/2011', '?page=fotos_torneo4_5'),
(7, 'LXI Torneo Abierto de Verano, 80 Aniversario. (6ta. ronda)', 'Villa Ballester, Buenos Aires, Argentina', '26/01/2011', '?page=fotos_torneo4_6'),
(8, 'LXI Torneo Abierto de Verano, 80 Aniversario. (7ma. ronda)', 'Villa Ballester, Buenos Aires, Argentina', '28/01/2011', '?page=fotos_torneo4_7'),
(9, 'LXI Torneo Abierto de Verano, 80 Aniversario. (8va. ronda)', 'Villa Ballester, Buenos Aires, Argentina', '29/01/2011', '?page=fotos_torneo4_8'),
(10, 'LXI Torneo Abierto de Verano, 80 Aniversario. (9na. ronda)', 'Villa Ballester, Buenos Aires, Argentina', '30/01/2011', '?page=fotos_torneo4_9'),
(11, 'IX Torneo Abierto en Memoria de Jorge Adelman (1er. ronda)', 'Belén de Escobar, Buenos Aires, Argentina', '04/02/2011', '?page=fotos_torneo5_1'),
(12, 'IX Torneo Abierto en Memoria de Jorge Adelman (2da., 3er. y 4ta. rondas)', 'Belén de Escobar, Buenos Aires, Argentina', '05/02/2011', '?page=fotos_torneo5_2-3-4'),
(13, 'IX Torneo Abierto en Memoria de Jorge Adelman (5ta., 6ta. y 7ma. rondas)', 'Belén de Escobar, Buenos Aires, Argentina', '06/02/2011', '?page=fotos_torneo5_5-6-7'),
(14, 'Villa Martelli (Con la visita de Judith Polgar)', 'Villa Martelli, Buenos Aires, Argentina', '11/06/2011', '?page=fotos_torneo6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidas`
--

CREATE TABLE IF NOT EXISTS `partidas` (
  `partida_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `blancas` varchar(200) NOT NULL,
  `negras` varchar(200) NOT NULL,
  `resultado` varchar(200) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `evento` varchar(200) NOT NULL,
  `vinculo` varchar(200) NOT NULL,
  `partida_categoria` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`partida_id`),
  UNIQUE KEY `vinculo` (`vinculo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `partidas`
--

INSERT INTO `partidas` (`partida_id`, `blancas`, `negras`, `resultado`, `fecha`, `evento`, `vinculo`, `partida_categoria`) VALUES
(1, 'Bastanzo, Jorge Raúl', 'Carlos', '1 - 0', '??/??/1980', 'Partida Amistosa', 'https://lichess.org/embed/oaaGWMMu', 'amistosas'),
(2, 'Bastanzo, Jorge Raúl', '?', '1 - 0', '??/??/1984', 'Partida Amistosa', 'https://lichess.org/embed/gsJ8wEuF', 'amistosas'),
(8, 'Hikaru Nakamura', 'Garry Kasparov', '1/2 - 1/2', '14/08/2017', 'St. Louis Rapid & Blitz (Rapid)', 'https://lichess.org/embed/dlg3JZ6Q', 'kasparov'),
(9, 'Garry Kasparov', 'Leinier Dominguez Perez', '1/2 - 1/2', '14/08/2017', 'St. Louis Rapid & Blitz (Rapid)', 'https://lichess.org/embed/mjryatxu', 'kasparov'),
(10, 'Garry Kasparov', 'Sergey Karjakin', '1/2 - 1/2', '14/08/2017', 'St. Louis Rapid & Blitz (Rapid)', 'https://lichess.org/embed/cR8rWuoz', 'kasparov'),
(15, 'szurtos', 'nazarenobastanzo', '0 - 1', '07/01/2017', 'Partida de Internet', 'https://lichess.org/embed/avrwpr8j', 'internet'),
(16, 'hyderho', 'nazarenobastanzo', '0 - 1', '07/01/2017', 'Partida de Internet', 'https://lichess.org/embed/oBhKY6PD', 'internet'),
(17, 'jbastanzo', 'MirekVeverka', '1 - 0', '07/01/2017', 'Partida de Internet', 'https://lichess.org/embed/SLvRgYVR', 'internet'),
(18, 'OliverOnion', 'nazarenobastanzo', '0 - 1', '08/01/2017', 'Partida de Internet', 'https://lichess.org/embed/zSAOBJXh', 'internet'),
(19, 'nazarenobastanzo', 'Spillpants', '1 - 0', '10/01/2017', 'Partida de Internet', 'https://lichess.org/embed/tKNOQBsV', 'internet'),
(20, 'jbastanzo', 'mozartpraga', '1 - 0', '02/01/2017', 'Partida de Internet', 'https://lichess.org/embed/pEabnC0e', 'internet'),
(21, 'AfolabiS', 'nazarenobastanzo', '0 - 1', '17/02/2017', 'Partida de Internet', 'https://lichess.org/embed/SKWsr1tm', 'internet'),
(22, 'nazarenobastanzo', 'TinasheEr', '1 - 0', '29/08/2017', 'Partida de Internet', 'https://lichess.org/embed/kmAuMsqU', 'internet'),
(23, 'Adams, Michael (2505)', 'Psakhis, Lev (2565)', '1 - 0', '??/??/1989', 'GMA Baleares Open', 'https://lichess.org/embed/IUkMCgUk', 'Lev Psakhis'),
(24, 'Psakhis, Lev (2570)', 'Adams, Michael (2610)', '1/2 - 1/2', '??/??/1992', 'Chalkidiki', 'https://lichess.org/embed/eeaZjXAv', 'Lev Psakhis'),
(25, 'Adams, Mi (2740)', 'Psakhis, Lev (2545)', '1 - 0', '07/11/2004', 'EuChampionship Internet KO', 'https://lichess.org/embed/J2hrwq5q', 'Lev Psakhis'),
(26, 'Psakhis, Lev (2545)', 'Adams, Mi (2740)', '1/2 - 1/2', '07/11/2004', 'EuChampionship Internet KO', 'https://lichess.org/embed/KZCD84rR', 'Lev Psakhis'),
(27, 'Adams, Mi (2740)', 'Psakhis, Lev (2545)', '1/2 - 1/2', '07/11/2004', 'EuChampionship Internet KO', 'https://lichess.org/embed/AOBw4ZWd', 'Lev Psakhis'),
(28, 'Psakhis, Lev (2545)', 'Adams, Mi (2740)', '0 - 1', '07/11/2004', 'EuChampionship Internet KO', 'https://lichess.org/embed/cVp2dNCu', 'Lev Psakhis'),
(29, 'Akopian, Vladimir (2460)', 'Psakhis, Lev (2550)', '0 - 1', '??/??/1988', 'Yerevan', 'https://lichess.org/embed/a454gLaJ', 'Lev Psakhis'),
(30, 'nazarenobastanzo', 'Franiol', '1 - 0', '31/10/2017', 'Partida de Internet', 'https://lichess.org/embed/ZsDWw4Kw', 'internet'),
(31, 'nazarenobastanzo', 'gambit09', '1 - 0', '04/11/2017', 'Partida de Internet', 'https://lichess.org/embed/BBE8TOoI', 'internet'),
(32, 'Sergey Karjakin (2757)', 'Andrey Esipenko (2438)', '0 - 1', '27/12/2017', 'World Rapid Championship', 'https://lichess.org/embed/AdS7ROU6', ''),
(33, 'carevchess (1566)', 'nazarenobastanzo (1560)', '0 - 1', '30/12/2017', 'Partida de Internet', 'https://lichess.org/embed/MTbqZAof', 'internet'),
(34, 'djangofan (1554)', 'nazarenobastanzo (1656)', '0 - 1', '30/12/2017', 'Partida de Internet', 'https://lichess.org/embed/T7axDE2s', 'internet'),
(35, 'nazarenobastanzo (1655)', 'opxah27 (1594)', '1 - 0', '03/01/2018', 'Partida de Internet', 'https://lichess.org/embed/RwQaWTtJ', 'internet'),
(36, 'jbastanzo (1751)', 'Theborg1149 (1661)', '1 - 0', '01/01/2018', 'Partida de Internet (15 minutos por jugador)', 'https://lichess.org/embed/R6VyXHXR', 'internet'),
(37, 'nazarenobastanzo (1638)', 'Ruchka2 (1600)', '1 - 0', '03/01/2018', 'Partida de Internet (15 minutos por jugador)', 'https://lichess.org/embed/9CH6quIJ', 'internet'),
(38, 'Noziel (1484)', 'nazarenobastanzo (1521)', '0 - 1', '04/01/2018', 'Partida de Internet (3 minutos por jugador)', 'https://lichess.org/embed/GYL5clpG', 'internet'),
(39, 'nazarenobastanzo (1642)', 'ulruslan333 (1692)', '1 - 0', '25/01/2018', 'Partida de Internet (10 minutos por jugador)', 'https://lichess.org/embed/zvf3Bus6', 'Internet'),
(40, 'nazarenobastanzo (1654)', 'barbaroja (1614)', '1 - 0', '25/01/2018', 'Partida de Internet (10 minutos por jugador)', 'https://lichess.org/embed/CCNhN5Ps', 'internet'),
(41, 'nazarenobastanzo (1663)', 'dimasss007 (1468?)', '1 - 0', '25/01/2018', 'Partida de Internet (10 minutos por jugador)', 'https://lichess.org/embed/uulOUSMa', 'internet');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
