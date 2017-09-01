-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2017 a las 04:17:33
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cnsm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indice_movimiento`
--

CREATE TABLE IF NOT EXISTS `indice_movimiento` (
  `id_mov` int(11) NOT NULL,
  `nombre_mov` text NOT NULL,
  `tipo_mov` text NOT NULL,
  `asigna_region` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='indice de movimientos posibles del varadero';

--
-- Volcado de datos para la tabla `indice_movimiento`
--

INSERT INTO `indice_movimiento` (`id_mov`, `nombre_mov`, `tipo_mov`, `asigna_region`) VALUES
(1, 'login', 'login', '0'),
(2, 'logout', 'logout', '0'),
(3, 'add_barco', 'add_barco', '0'),
(4, 'disable_barco', 'disable_barco', '0'),
(5, 'Solicitud Varadero', 'Solicitud Varadero', '1'),
(6, 'Sacada a Varadero', 'Sacar a VAradero', '3'),
(7, 'Bajada al Agua', 'Bajada al Agua', '2'),
(8, 'Uso de Palera', 'Uso de PAlera', '2'),
(9, 'Uso de Pluma x Dias', 'Uso de Pluma x Dias', '1'),
(10, 'Lavado de Fondo', 'Lavado de Fondo', '1'),
(11, 'barco_modificado', 'barco_modificado', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `id` int(11) NOT NULL,
  `titulo` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `contenido` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `editor` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img_1` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img_2` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img_3` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8 COMMENT='Tabla de Notas';

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `titulo`, `contenido`, `editor`, `fecha`, `timestamp`, `img_1`, `img_2`, `img_3`) VALUES
(138, '', '', '', '0000-00-00', '2016-02-25 15:37:03', 'X6b2j0gwza.jpg', '', ''),
(139, '', '', '', '0000-00-00', '2016-02-25 15:38:29', 'E_ue8pIUqC.jpg', '', ''),
(143, '', '', '', '0000-00-00', '2016-02-25 15:43:17', 'tE5dsQcMZB.jpg', '', ''),
(144, '', '', '', '0000-00-00', '2016-02-25 15:46:54', 'CHVW4UIBpA.jpg', '', ''),
(145, '', '', '', '0000-00-00', '2016-02-25 15:47:06', 'Xeco_KTZvq.jpg', 'nada', 'nada'),
(146, '', '', '', '0000-00-00', '2016-02-25 15:52:26', 'n5iFeNBr1H.jpg', 'lvy2dj9hK7.jpg', 'nada'),
(147, '', '', '', '0000-00-00', '2016-02-25 15:53:31', 'tp3JDCnZ9z.jpg', 'vV8abgf0Er.jpg', 'u5fLjoQ1hU.jpg'),
(148, '', '', '', '0000-00-00', '2016-02-25 15:53:43', '3ZnckW_fdy.jpg', 'Y6QaGfoCNH.jpg', 'rESNItHu3m.jpg'),
(149, '', '', '', '0000-00-00', '2016-02-25 15:54:40', 'VuxPXfglcO.jpg', 'nada', 'nada'),
(150, '', '', '', '0000-00-00', '2016-02-25 15:55:08', 'hm8fFnesZq.jpg', 'Ch_eUEZHQo.jpg', 's3VqulzCcw.jpg'),
(151, '', '', '', '0000-00-00', '2016-02-26 19:59:26', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_optimist`
--

CREATE TABLE IF NOT EXISTS `notas_optimist` (
  `id` int(11) NOT NULL,
  `titulo` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `contenido` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `editor` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img_portada` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img_1` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img_2` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img_3` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COMMENT='Tabla de Notas';

--
-- Volcado de datos para la tabla `notas_optimist`
--

INSERT INTO `notas_optimist` (`id`, `titulo`, `contenido`, `editor`, `fecha`, `timestamp`, `img_portada`, `img_1`, `img_2`, `img_3`) VALUES
(22, 'sdf', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'sdf', '2015-11-05', '2015-11-06 00:57:59', '', '', '', ''),
(23, 'sdf', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'sdf', '2015-11-05', '2015-11-06 00:58:02', '', '', '', ''),
(24, 'sdf', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'sdf', '2015-11-05', '2015-11-06 00:58:02', '', '', '', ''),
(25, 'sdf', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'sdf', '2015-11-05', '2015-11-06 00:58:02', '', '', '', ''),
(26, 'sdf', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'sdf', '2015-11-05', '2015-11-06 00:58:02', '', '', '', ''),
(27, 'sdf', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'sdf', '2015-11-05', '2015-11-06 00:58:02', '', '', '', ''),
(30, 'sdf', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'sdf', '2015-11-05', '2015-11-06 00:58:03', '', '', '', ''),
(31, 'sdf', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'sdf', '2015-11-05', '2015-11-06 00:58:03', '', '', '', ''),
(32, 'sdf', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'sdf', '2015-11-05', '2015-11-06 00:58:03', '', '', '', ''),
(34, 'sdf', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'sdf', '2015-11-05', '2015-11-06 00:58:04', '', '', '', ''),
(35, 'sdf', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdf\r\nsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'sdf', '2015-11-05', '2015-11-06 00:58:04', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_zonas`
--

CREATE TABLE IF NOT EXISTS `rel_zonas` (
  `id_rel` int(11) NOT NULL,
  `zona_actual` int(11) NOT NULL,
  `mov_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rel_zonas`
--

INSERT INTO `rel_zonas` (`id_rel`, `zona_actual`, `mov_id`) VALUES
(1, 0, 5),
(2, 0, 8),
(3, 0, 9),
(4, 0, 10),
(5, 1, 4),
(6, 1, 6),
(7, 1, 8),
(8, 1, 9),
(9, 1, 10),
(10, 2, 4),
(11, 2, 5),
(12, 2, 6),
(13, 2, 8),
(14, 2, 9),
(15, 2, 10),
(16, 3, 7),
(17, 4, 7),
(18, 5, 4),
(19, 5, 5),
(20, 5, 6),
(21, 5, 8),
(22, 5, 9),
(23, 5, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_barcos`
--

CREATE TABLE IF NOT EXISTS `tabla_barcos` (
  `id_barco` int(11) NOT NULL,
  `enabled_barco` tinyint(1) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nombre_barco` text NOT NULL,
  `clase_barco` text NOT NULL,
  `rey_barco` text NOT NULL,
  `tipo_barco` text NOT NULL,
  `eslora_barco` text NOT NULL,
  `manga_barco` text NOT NULL,
  `desplazamiento_barco` text NOT NULL,
  `ton_total_barco` text NOT NULL,
  `ton_neto_barco` text NOT NULL,
  `m2_barco` text NOT NULL,
  `comp_seguro_barco` text NOT NULL,
  `num_poliza_barco` text NOT NULL,
  `venc_poliza` text NOT NULL,
  `due_nombre_barco` text NOT NULL,
  `due_dni_barco` text NOT NULL,
  `due_direccion_barco` text NOT NULL,
  `due_tel_barco` text NOT NULL,
  `due_cel_barco` text NOT NULL,
  `due_email_barco` text NOT NULL,
  `due_club_barco` text NOT NULL,
  `nota` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1262 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabla_barcos`
--

INSERT INTO `tabla_barcos` (`id_barco`, `enabled_barco`, `time_stamp`, `nombre_barco`, `clase_barco`, `rey_barco`, `tipo_barco`, `eslora_barco`, `manga_barco`, `desplazamiento_barco`, `ton_total_barco`, `ton_neto_barco`, `m2_barco`, `comp_seguro_barco`, `num_poliza_barco`, `venc_poliza`, `due_nombre_barco`, `due_dni_barco`, `due_direccion_barco`, `due_tel_barco`, `due_cel_barco`, `due_email_barco`, `due_club_barco`, `nota`) VALUES
(1053, 0, '2017-06-04 23:56:43', 'LEONIDES III', 'Velero', '11545', '', '9.1', '3', '', '', '', '', '', '', '', 'ALDEGANI MARIANA ISABEL', '24030097', 'SANTA FE 838', '1567425582', '', 'uliseabloom@gmail.com', '', ''),
(1054, 1, '2017-06-04 23:12:49', 'CHIP', '', '6758', '', '7.8', '2.6', '', '', '', '', '', '', '', 'ALDEGANI PABLO', '22500586', 'ACHEGA 2927', '', '15-3216-1919', 'pabloaldegani@hotmail.com', '', ''),
(1055, 1, '2017-06-04 23:12:49', 'DEIMOS', '', '22647', 'VELERO', '6.3', '2.8', '', '', '', '', '', '', '', 'ALLEVATTO ROBERTO', '12028958', 'MERCEDES 4796', '4504-1907', '15 36883522', 'roberto.allevatto@bbva.com', '', ''),
(1056, 1, '2017-06-04 23:12:49', 'PATO', '', '20385', '', '6.13', '2.13', '', '', '', '', '', '', '', 'ALONSO CARLOS', '11286023', 'AV.CABILDO 212 4* B', '778-1460', '', 'carlitoswey54@gmail.com', '', ''),
(1057, 1, '2017-06-04 23:12:49', 'DESAFIO', '', '15136', '', '7.75', '2.71', '', '', '', '', '', '', '', 'ALONSO ROBERTO FLORENTINO', '11405391', 'A. DEL VALLE 600', '4299-0379', '', 'roberto.alonso@speedy.com.ar', '', ''),
(1058, 1, '2017-06-04 23:12:49', 'INCONSCIENTE 2', '', '13315', '', '7.8', '2.8', '', '', '', '', '', '', '', 'ANDREALLI RAFAEL', '18136107', 'A ALSINA 2745', '4932-1008', '', 'randrealli@clermonttextil.com.ar', '', ''),
(1059, 1, '2017-06-04 23:12:49', 'CHATARRA', '', '8701', '', '7.6', '2.4', '', '', '', '', '', '', '', 'ANDRES JORGE', '8557198', 'BELAUSTEGUI 3383', '4583-4147/45814799', '1532889363', 'juanignacio.andres@gmail.com', '', ''),
(1060, 1, '2017-06-04 23:12:49', 'PAPITO BANCA', '', '9786', '', '10.26', '3.43', '', '', '', '', '', '', '', 'ARAMAYONA GUSTAVO ADOLFO', '12307743', 'RUBEN DARIO 2969', '4797-6686', '1558880303', 'simesrl@gmail.com', '', ''),
(1061, 1, '2017-06-04 23:12:49', 'SOSIEGO', '', '11761', 'VELERO', '9', '3.06', '', '8', '', '', '', '', '', 'ARIAS MARTIN', '26691072', 'GUAMINI 5373', '4605-0340', '1556201896', 'martinarias@gmail.com', '', ''),
(1062, 1, '2017-06-04 23:12:49', 'SAPUCAY', '', '', 'REGGE 30', '9', '3', '', '', '', '', '', '', '', 'BISIGNANI JUAN', '27150611', 'DIEGO PALMA 1535', '4723-4559', '', 'juanbisignani@hotmail.com', '', ''),
(1063, 1, '2017-06-04 23:12:49', 'SPIRIT', '', '21786', 'VELERO', '8.3', '3.2', '', '', '', '', '', '', '', 'BOGE HORST', '93472503', 'AV. SAN MARTIN 865', '4755-3155', '', 'eduardoboge@escabo.com.ar', '', ''),
(1064, 1, '2017-06-04 23:12:49', 'ROMI II', '', '21724', '', '5.5', '2.4', '', '', '', '', '', '', '', 'BONFIETTI ARMANDO', '7837462', 'SCALABRINI ORTIZ 1203/6 4', '773-0387', '', 'ar-laura-castelnovo@quimbaya-tours.com', '', ''),
(1065, 1, '2017-06-04 23:12:49', 'BEN PORAT', '', '34885', '', '12.2', '4', '', '', '', '', '', '', '', 'BOROVINSKY DANIEL', '6082396', 'DE LA LLAMA 16 "CASTORES"', '4871-1346', '', 'dianitarosen@hotmail.com', '', ''),
(1066, 1, '2017-06-04 23:12:49', 'SEMMERING II', '', '7932', '', '10.1', '3.25', '', '', '', '', '', '', '', 'BOTTA CARLOS LUIS', '10650569', 'AV SANTA FE 1443 PISO:4', '4812-9387 1550407501', '', 'cbotta@intramed.net.ar', '', ''),
(1067, 1, '2017-06-04 23:12:49', 'FALINA III', '', '16326', '', '8.7', '2.7', '', '', '', '', '', '', '', 'BRITO EDUARDO', '7633954', 'INTENDENTE RUBIO 4200', '709-3019', '', 'edubrito@intramed.net', '', ''),
(1068, 1, '2017-06-04 23:12:49', 'TABAPUA', '', '11005', '', '6.6', '2.2', '', '', '', '', '', '', '', 'BRITO FEDERICO GERMAN', '23508836', 'ITALIA 2210', '4797-2988', '1551494390', 'fede_brito73@hotmail.com', '', ''),
(1069, 1, '2017-06-04 23:12:49', 'OLAF', '', '19433', 'ROY 20', '6.1', '2.2', '', '4', '', '', '', '', '', 'BURG RODOLFO OSCAR', '17692284', 'SAN ISIDRO LABRADOR 70', '', '1554033843', 'surcando2003@yahoo.com', '', ''),
(1070, 1, '2017-06-04 23:12:49', 'BALALAIKA', '', '39063', '', '10.9', '3.62', '', '13', '', '', '', '', '', 'CAMBON CARLOS SERGIO', '14430304', 'JUAN DE GARAY 1089', '4662-1042', '1560514881', 'carlos@remaqh.com.ar', '', ''),
(1071, 1, '2017-06-04 23:12:49', 'DON LAUREANO II', '', '7276', '', '6.9', '2.3', '', '', '', '', '', '', '', 'CAMINO ERNESTO CONSTANTINO', '4429086', 'ITALIA 1143/3', '4749-0774', '1161599478 DANIEL', 'rdcmecanica@hotmail.com', '', ''),
(1072, 1, '2017-06-04 23:12:49', 'QUEEN PAOLA', '', '8180', '', '10.35', '3.65', '', '', '', '', '', '', '', 'CAMPOS PATRICIA', '14990743', 'CANGALLO 361', '  4655-4810', '', 'guidijm@infovia.com.ar', '', ''),
(1073, 1, '2017-06-04 23:12:49', 'BLACK', '', '36640', 'VELERO', '8.23', '2.8', '', '', '', '', '', '', '', 'CANITROT ANA MARGARITA', '18139332', 'QUESADA 1610 7 A', '', '', 'anitacanitrot@gmail.com', '', ''),
(1074, 1, '2017-06-04 23:12:49', 'SOSIEGO II', '', '25504', '', '10.6', '3.45', '', '', '', '', '', '', '', 'CAPUTO VALERIA', '18392748', 'AVELLANEDA 725', '4902-1668', '1562666077', 'valeboxy@yahoo.com.ar', '', ''),
(1075, 1, '2017-06-04 23:12:49', 'ROCIO', '', '2733', '', '6.1', '2.08', '', '', '', '', '', '', '', 'CAROPRESE RICARDO', '8589137', 'VEDIA 1981', '61848578', '1541708082', 'rcaroprese@hotmail.com', '', ''),
(1076, 1, '2017-06-04 23:12:49', 'PAILA', '', '29984', '', '7.4', '3.05', '', '0', '', '', '', '', '', 'CASADO RODRIGO', '22891747', 'ROSALES 2793', '', '1565672330', 'rcembarcaciones@gmail.com', '', ''),
(1077, 1, '2017-06-04 23:12:49', 'SAUVAGE', '', '23895', '', '7.3', '3', '', '', '', '', '', '', '', 'CASTILLO ALEJANDRO H', '11528234', 'RAMALLO 2010', '4701-8369', '154579-0985', 'alexhcastillo@live.com', '', ''),
(1078, 1, '2017-06-04 23:12:49', 'QUASIMODO', '', '25835', '', '9', '3.15', '', '', '', '', '', '', '', 'CASTRO REY FABIO GABRIEL', '16672511', 'NECOCHEA 944', '0237-4630903', '', 'fabiocastro@lecoarg.com.ar', '', ''),
(1079, 1, '2017-06-04 23:12:49', 'VAHINE', '', '2580', '', '9.7', '3.17', '', '', '', '', '', '', '', 'CATALA DANIEL', '6486175', 'NOGOYA 3189', '501-3616', '', '', '', ''),
(1080, 1, '2017-06-04 23:12:49', 'EXTRA II', '', 'ET', '', '6.82', '2.55', '', '', '', '', '', '', '', 'CATALA EDUARDO', '8634501', 'NOGOYA 3189', '4501-3616', '1545282461', 'estudiocatala@fibertel.com.ar', '', ''),
(1081, 1, '2017-06-04 23:12:49', 'TENTEMPIE', '', '50297', '', '10.05', '3.3', '', '', '', '', '', '', '', 'CEDRON OSCAR', '8550240', 'CARLOS F.MELO 1775', '795-1195', '', 'megancedo@hotmail.com', '', ''),
(1082, 1, '2017-06-04 23:12:49', 'GAUCHO GUEMES II', '', '9427', '', '7.63', '2.54', '', '', '', '', '', '', '', 'CHAPARRO SILVIA ALEJANDRA', '17998165', 'CALLAO 59', '744-6410', '1544228981', 'silviaachaparro@gmail.com', '', ''),
(1083, 1, '2017-06-04 23:12:49', 'PAMPERO', '', '24105', '', '8.3', '3.2', '', '', '', '', '', '', '', 'CHECHILE MARCELO', '92038398', 'DIAZ VELEZ 1290', '4897-1072', '154193-4557', 'chventas@arnet.com.ar', '', ''),
(1084, 1, '2017-06-04 23:12:49', 'OLES', '', '25900', '', '8.3', '3.23', '', '', '', '', '', '', '', 'CHERVIN NESTOR', '12702385', 'CALDEN 870', '4642-6243', '', 'nestor@inoroeste.com.ar', '', ''),
(1085, 1, '2017-06-04 23:12:49', 'SO', '', '27514', '', '8', '2.65', '', '', '', '', '', '', '', 'CIAPPARELLI NESTOR GUSTAVO', '13048560', 'ARANGUREN 1084', '432-4110', '15611-30158', 'ngciapparelli@gmail.com', '', ''),
(1086, 1, '2017-06-04 23:12:49', 'BIKINI', '', '79551', '', '6.5', '2.41', '', '4', '', '', '', '', '', 'CLARET CHRISTIAN', '24227367', 'LA PAMPA 2976/1', '47864114 15-53119648', '', 'cclaret@gmail.com', '', ''),
(1087, 1, '2017-06-04 23:12:49', 'BELLATRIX', '', '17607', '', '5.1', '2', '', '', '', '', '', '', '', 'CLARET NELLY', '2416628', 'ESTADO DE ISRAEL 4589 2', '88-9527', '', '', '', ''),
(1088, 1, '2017-06-04 23:12:49', 'CANDOMBE', '', '34247', 'VELERO', '7.6', '3.05', '', '3', '', '', '', '', '', 'CORVI LANZA HECTOR', '92024605', 'Placido Marin 1753', '47656314', '1530031616', '', '', ''),
(1089, 1, '2017-06-04 23:12:49', 'SIRI II', '', '1318', '', '6.8', '2.6', '', '0', '', '', '', '', '', 'COTORAS WALTER GUILLERMO', '17674996', 'COSTA RICA 5171', '4774-9163', '1531433895', 'waltercotoras@gmail.com', '', ''),
(1090, 1, '2017-06-04 23:12:49', 'OTRO TOLE TOLE', '', '54789', '', '11.1', '3.58', '', '', '', '', '', '', '', 'DAGNINO OSCAR', '8315120', 'ISABEL FERNANDEZ 1920', '712-1561', '', 'ventas@yeseriadagnino.com.ar', '', ''),
(1091, 1, '2017-06-04 23:12:49', 'PEREYRA', '', '20640', '', '6.53', '2.82', '', '', '', '', '', '', '', 'DE DOBRZYNSKI ALEJANDRO', '12543461', 'SAN MARTIN 2861/DTO. 2', '4730-2306', '', 'ec_ad@yahoo.com.ar', '', ''),
(1092, 1, '2017-06-04 23:12:49', 'CONOCIDO', '', '26270', '', '8.7', '2.85', '', '', '', '', '', '', '', 'DE MATTEI ELSA BEATRIZ', '5291374', 'AV.CORONEL DIAZ 1644 P 6', '4822-9570', '', 'badranaf@yahoo.com.ar', '', ''),
(1093, 1, '2017-06-04 23:12:49', 'FIESTA', '', '', '', '12', '3.75', '', '', '', '', '', '', '', 'DEL INTENTO MAXIMILIANO', '6685783', 'WINEBERG 3628/1 B', '4799-2072  4799-2872', '', '', '', ''),
(1094, 1, '2017-06-04 23:12:49', 'MANICOMIO', '', '33049', '', '9.2', '3.4', '', '', '', '', '', '', '', 'DEL PERO DANIEL', '14901768', 'ALEXANDER FLEMING 2507', '', '1557475864', 'arteinoxarg@gmail.com', '', ''),
(1095, 1, '2017-06-04 23:12:49', 'FANTASMA II', '', '20670', 'MOTOVELERO', '9.65', '3.14', '', '0', '', '', '', '', '', 'DELBENE LUIS', '13385724', 'LAS HERAS 3273 / PB 1', '4699-2539', '15-55702908', 'ldelbene@azurclima.com.ar', '', ''),
(1096, 1, '2017-06-04 23:12:49', 'ARMONIA', '', '26075', '', '10.5', '3.66', '', '0', '', '', '', '', '', 'DER ALBERTO', '6217476', 'CASTIGLIONI 2235 JACARANDA ', '4005-1855', '1560186352', 'ader2@fibertel.com.ar', '', ''),
(1097, 1, '2017-06-04 23:12:49', 'PAOLA C', '', '17571', '', '8.5', '3', '', '', '', '', '', '', '', 'DI GIORGIO JOSE MARIA', '10924159', 'FLORIDA 520 5', '4702-5949', '', 'florencia@dgsargentina.com.ar', '', ''),
(1098, 1, '2017-06-04 23:12:49', 'CIA.LTDA.', '', '23210', '', '10.26', '3.43', '', '', '', '', '', '', '', 'DI PINO CARLOS', '7607362', 'CARANDAY 869', '642-2026', '', 'dipy40@hotmail.com', '', ''),
(1099, 1, '2017-06-04 23:12:49', 'PAZ 2', '', '69248', '', '8.5', '3.3', '', '', '', '', '', '', '', 'DIAZ MOLINA CARLOS', '16774911', 'ARENALES 1625 3', '813-2454/4803-1882', '02392 15444924', 'carlosediazmolina@gmail.com', '', ''),
(1100, 1, '2017-06-04 23:12:49', 'SHEREZAD', '', '26052', '', '7.3', '2.8', '', '', '', '', '', '', '', 'DUARTE DANIEL GUSTAVO', '8253143', 'CARDENAL COPELLO 546', '723-6199', '', 'dgduarte@intramed.net', '', ''),
(1101, 1, '2017-06-04 23:12:49', 'JE TAIME', '', '19800', '', '8.8', '3', '', '', '', '', '', '', '', 'DUBANEVICH EUGENIA CARMEN', '4952595', 'NTRA.SRA. LA MERCED 4166', '4759-0450', '', '', '', ''),
(1102, 1, '2017-06-04 23:12:49', 'BEIRAMAR', '', '65235', '', '9.56', '3.3', '', '', '', '', '', '', '', 'ENSENAT TELMO', '4055335', 'AV. MAIPU 1901 P:17 E', '4791-4896', '', '', '', ''),
(1103, 1, '2017-06-04 23:12:49', 'BARULLO', '', '7156', '', '7.2', '2.7', '', '', '', '', '', '', '', 'ESTEBAN ERNESTO OSVALDO', '18290762', 'Av. CORRO 243 / 4', '943-1863', '', 'drernestoesteban@hotmail.com', '', ''),
(1104, 1, '2017-06-04 23:12:49', 'TINTA ROJA', '', '24762', '', '7.38', '2.95', '', '', '', '', '', '', '', 'FERRER CHRISTIAN', '20839464', 'CONCORDIA 4396', '4502-3614', '', 'chfba@hotmail.com', '', ''),
(1105, 1, '2017-06-04 23:12:49', 'DIEGO III', '', '21326', 'VELERO', '10.2', '3.43', '', '', '', '', '', '', '', 'FILIPPINI FERNANDO', '13596687', 'GARAY 1749', '4452-5686', '114058-5068', 'ferfilippini@gmail.com', '', ''),
(1106, 1, '2017-06-04 23:12:49', 'DORMILON', '', '12268', '', '10.07', '3.04', '', '', '', '', '', '', '', 'FILLAT ALBERTO', '5591759', 'VELEZ SARSFIELD 276', '792-6425', '', 'albertofillat@yahoo.com.ar', '', ''),
(1107, 1, '2017-06-04 23:12:49', 'SCORPION', '', '23026', '', '7.2', '2.82', '', '', '', '', '', '', '', 'FIMIANI ARIEL', '16938390', 'AMENABAR 2740/2', '', '159555737', 'arielfimiani@hotmail.com', '', ''),
(1108, 1, '2017-06-04 23:12:49', 'HIDALGO', '', '38138', 'VIP 33', '10.05', '3.3', '', '', '', '', '', '', '', 'FONDELLO HECTOR', '10966493', 'ZUBERBUHLER 1818', '4553-5805', '', 'hfonde@stylus.com.ar', '', ''),
(1109, 1, '2017-06-04 23:12:49', 'CHERIE', '', '21769', '', '8.25', '3', '', '', '', '', '', '', '', 'FONTEROSA CARLOS', '5574304', 'EDISON 1583', '798-7123', '', '', '', ''),
(1110, 1, '2017-06-04 23:12:49', 'SINATRA', '', 'TIG 03013', '', '5.4', '1.5', '', '', '', '', '', '', '', 'FONTOVA ANTONIO HUGO', '8511690', 'CONESA 5618', '4842-3819', '1564470382', '', '', ''),
(1111, 1, '2017-06-04 23:12:49', 'LUCKY', '', '28883', '', '5.5', '2.44', '', '', '', '', '', '', '', 'FORTUNATO JUAN AGUSTIN', '4596612', 'AV. DEL LIBERTADOR 8132/ p:5 A', '4701-7132', '1540896400', 'losfortunato5@hotmail.com', '', ''),
(1112, 1, '2017-06-14 22:44:21', 'MOSTAZA', 'Ve', '24549', '', '10.36', '3.28', '', '', '', '', '', '', '', 'FOURCADE ALBERTO', '7604831', 'PACHECO 3240', '4794-0883', '', 'residen22@hotmail.com', '', ''),
(1113, 1, '2017-06-04 23:12:49', 'PETER PAN', '', '28912', '', '10', '3.35', '', '10', '', '', '', '', '', 'FRANKEL PEDRO GUSTAVO', '4608378', 'ARIAS 4545', '4544-6805', '1544494543', '', '', ''),
(1114, 1, '2017-06-04 23:12:49', 'INDIO', '', '19054', '', '9.7', '3.2', '', '', '', '', '', '', '', 'FUENTE RAFAEL', '10550333', 'NECOCHEA 2039', '792-2390', '', 'rfuente@fibertel.com.ar', '', ''),
(1115, 1, '2017-06-04 23:12:49', 'TOMATE', '', '29355', '', '10.34', '3.78', '', '', '', '', '', '', '', 'GANCI LUIS', '16444572', '1 DE MAYO 6058', '47506696', '1531963631', 'corposportcenter@yahoo.com.ar', '', ''),
(1116, 1, '2017-06-04 23:12:49', 'VAGUER', '', '31704', '', '8.2', '2.8', '', '6', '', '', '', '', '', 'GARCIA DANIEL ROBERTO', '27074637', 'AV. CENTENARIO 2050 / 4', '', '15-5098-3773', 'danyvaguer@gmail.com', '', ''),
(1117, 1, '2017-06-04 23:12:49', 'CURUPI', '', '31532', '', '9.14', '2.85', '', '', '', '', '', '', '', 'GARCIA DONATO FRANCISCO', '5765584', 'PAREJA 2415', '4572-0176', '', 'dmarta36@yahoo.com.ar', '', ''),
(1118, 1, '2017-06-04 23:12:49', 'REY GNOMO', '', '26000', '', '6.9', '2.6', '', '', '', '', '', '', '', 'GARCIA RAUL', '93350477', 'ESPA', '4747-2892', '1554642767', '', '', ''),
(1119, 1, '2017-06-04 23:12:49', 'AGOSTINA', '', '40732', 'VELERO', '10.66', '3.35', '', '4', '', '', '', '', '', 'GIGLI PABLO FERNANDO', '23093894', 'GRAL. OHIGGINS 1420 / 2', '', '', 'pablogigli@fibertel.com.ar', '', ''),
(1120, 1, '2017-06-04 23:12:49', 'CHUCARO', '', '44374', '', '7.35', '2.85', '', '', '', '', '', '', '', 'GOMEZ SERGIO EDUARDO', '18239124', 'PASO 911', '4653-2507', '1553072333', 'info@valgo.com.ar', '', ''),
(1121, 1, '2017-06-04 23:12:49', 'CENTURION', '', '14808', '', '9', '3', '', '', '', '', '', '', '', 'GONZALEZ ALEJANDRO', '12855846', 'ARTIGAS 5495', '4738-6922', '1558833777', 'alejandrolelio@yahoo.com.ar', '', ''),
(1122, 1, '2017-06-04 23:12:49', 'KALIMERA', '', '17790', 'VELERO', '7.5', '2.69', '', '', '', '', '', '', '', 'GONZALEZ RICARDO OSCAR', '11224334', 'SALTA 960 P:7 D: A', '4373-7548 1551782751', '', 'rigong1905@yahoo.com', '', ''),
(1123, 1, '2017-06-04 23:12:49', 'ARDILLA', '', '17876', '', '7.35', '2.35', '', '3', '', '', '', '', '', 'GORGNI AMORINA', '23834962', 'PAREJA 3205', '', '1556015442', 'blablalias@gmail.com', '', ''),
(1124, 1, '2017-06-04 23:12:49', 'BERRETIN PLUS', '', '19677', 'H 26', '7.93', '2.72', '', '', '', '', '', '', '', 'GUAJARDO RUBEN EDUARDO JESUS', '10650371', 'BERUTTI 2877 / 5', '4823-1118', '1544276810', 'rjguajardo@hotmail.com', '', ''),
(1125, 1, '2017-06-04 23:12:49', 'PIACERE', '', '234361', 'VELERO', '7.6', '3', '', '1', '', '', '', '', '', 'GUALAZZI HERNAN E. P.', '7832224', 'NU', '4541-0331', '', 'eliseop50@yahoo.com.ar', '', ''),
(1126, 1, '2017-06-04 23:12:49', 'MERHU', '', '2909', '', '7.8', '2.5', '', '', '', '', '', '', '', 'GUARNACCIO CARLOS ANIBAL', '13385039', 'PJE. PERNAMBUCO 2326', '4582-3335', '1541757045', 'aguarnaccio@yahoo.com.ar', '', ''),
(1127, 1, '2017-06-04 23:12:49', 'VIZCAYA', '', '3871', '', '6.9', '2.95', '', '', '', '', '', '', '', 'GUTIERREZ FERNANDO', '93261496', 'AV.CABILDO 1145/10', '4781-7480', '', 'gutfer28@hotmail.com', '', ''),
(1128, 1, '2017-06-04 23:12:49', 'GITANES', '', '14436', '', '9.12', '3.05', '', '', '', '', '', '', '', 'HEREDIA EDUARDO', '8251002', 'Uspallata 775 Piso:2', '', '1557133048', 'edugitanes@hotmail.com', '', ''),
(1129, 1, '2017-06-04 23:12:49', 'LATINO', '', '18872', '', '9.5', '3.2', '', '', '', '', '', '', '', 'HERNANDEZ FELIX N.', '11478327', 'PERON 2350 1 B', '4811-4746', '1556191747', 'fnhernandez@gmail.com', '', ''),
(1130, 1, '2017-06-04 23:12:49', 'MEME', '', '4091', '', '7.3', '2.4', '', '', '', '', '', '', '', 'HERNANDEZ GUSTAVO', '13530352', 'ECHEVERRIA 1420 / 2', '', '', 'trans-service@ciudad.com.ar', '', ''),
(1131, 1, '2017-06-04 23:12:49', 'IMPERTURBABLE UNO', '', '19951', '', '9.15', '3.08', '', '', '', '', '', '', '', 'IACONIS NORBERTO', '10897807', 'VICTOR MARTINEZ 495', '432-9416', '', '', '', ''),
(1132, 1, '2017-06-04 23:12:49', 'TRINIDAD', '', '11541', '', '6.7', '2.12', '', '', '', '', '', '', '', 'IANANTUONO HECTOR', '13432309', 'MOSCONI 3122/1', '', '15-6191-0045', 'hectoriann@hotmail.com', '', ''),
(1133, 1, '2017-06-04 23:12:49', 'MAS TOLE TOLE', '', '', 'VELERO', '8.2', '3.3', '', '', '', '', '', '', '', 'IBARRA RICARDO CARLOS', '11171886', 'AV. MAIPU 2807 P4 "A"', '4790-5466', '1160552132', 'ricardoibarra42@yahoo.com', '', ''),
(1134, 1, '2017-06-04 23:12:49', 'TORO Y TORITA', '', '7650', '', '7', '2.4', '', '', '', '', '', '', '', 'IRIGARAY DIAMELA', '29129091', 'GUIDO SPANO 424', '4744-1538/4745-8931', '', 'diamegaray@hotmail.com', '', ''),
(1135, 1, '2017-06-04 23:12:49', 'ZZZ RESERVA JURADO', '', '', '', '6', '3', '', '', '', '', '', '', '', 'JURADO EDGARD DIEGO', '12600721', 'TALCAHUANO 1424', '476041021', '1554012288', 'info@escudosybordados.com.ar', '', ''),
(1136, 1, '2017-06-04 23:12:49', 'NEVER LAND', '', '26732', '', '9', '3.15', '', '', '', '', '', '', '', 'KLEIN GERARDO', '11985519', 'PUEYRREDON 875', '4793-4700', '15-5327-1484', 'secretaria@escuelaarcoiris.com.ar', '', ''),
(1137, 1, '2017-06-04 23:12:49', 'HAERE MAI', '', '21966', '', '6.13', '2.13', '', '', '', '', '', '', '', 'KULLAHIAN JULIO CESAR', '13410469', 'FELIPE VALLESE 582/4', '4806-3383', '1532615971', 'capicierra@gmail.com', '', ''),
(1138, 1, '2017-06-04 23:12:49', 'JORGITO', '', '18068', '', '6.6', '2.3', '', '', '', '', '', '', '', 'LABORDA RAUL', '5645176', 'P.DE MENDOZA 2563.T2 D.2E', '4742-1505', '', '', '', ''),
(1139, 1, '2017-06-04 23:12:49', 'BENTEVEO', '', '25408', '', '9.2', '3.4', '', '', '', '', '', '', '', 'LAGUNAS MIGUEL ANGEL', '6681341', 'BAHIA BLANCA 4963', '4503 0212', '', '', '', ''),
(1140, 1, '2017-06-04 23:12:49', 'LEUFU', '', '23594', '', '8.3', '3.12', '', '', '', '', '', '', '', 'LANDABOURE EDGARDO AUGUSTO', '4371116', 'MANZONE 1055', '4793-4624', '1562297761', 'vascolanda@gmail.com', '', ''),
(1141, 1, '2017-06-04 23:12:49', 'MY WAY', '', '21710', 'REPUNTE 32', '9.5', '3', '', '', '', '', '', '', '', 'LANGHOFF ERNESTO', '7758007', 'CIR4,SEC3,MANZ16,CASA 15', '4620-2474', '', 'bubylan@yahoo.com', '', ''),
(1142, 1, '2017-06-04 23:12:49', 'BRAVA', '', '17512', '', '10', '3', '', '', '', '', '', '', '', 'LANZA ROBERTO', '7780284', 'COCHABAMBA 581', '4248-1929', '1532880874', 'robertolanza3@gmail.com', '', ''),
(1143, 1, '2017-06-04 23:12:49', 'PERLA NEGRA', '', '44333', '', '8.4', '3.2', '', '', '', '', '', '', '', 'LASALANDRA NICOLAS', '4524992', 'JURAMENTO 3170 13', '4543-1140', '', 'nlasalandra@fibertel.com.ar', '', ''),
(1144, 1, '2017-06-04 23:12:49', 'REVANCHA III', '', '57074', '', '9.75', '3.38', '', '', '', '', '', '', '', 'LAUDA FEDERICO', '18268845', 'LONARDI 441', '4747-6719', '156538-0398', 'flauda@ksb.com.ar', '', ''),
(1145, 1, '2017-06-04 23:12:49', 'PLEIN SOLEIL', '', '3964', '', '8.07', '2.42', '', '', '', '', '', '', '', 'LEAL EDGARDO', '0', 'LAVALLE 2583', '760-9950', '', 'lealedgardo@yahoo.com.ar', '', ''),
(1146, 1, '2017-06-04 23:12:49', 'CISNE', '', '8277', '', '9.25', '3.04', '', '', '', '', '', '', '', 'LONGOBUCO PASCUAL', '92528156', 'OLAVARRIA 656 DPTO.2', '504-3930 / 4265-0321', '', '', '', ''),
(1147, 1, '2017-06-04 23:12:49', 'L', '', '24713', '', '7.35', '2.85', '', '', '', '', '', '', '', 'LOPEZ M0RENO CLARA MARIA', '6598948', 'ANCHORENA 1853 5 B', '806-2148', '', 'calma@pccp.com.ar', '', ''),
(1148, 1, '2017-06-04 23:12:49', 'AGUA BRAVA', '', '62064', '', '10.05', '3.3', '', '', '', '', '', '', '', 'MAGIDE ERNESTO LUIS', '11835149', 'catamarca 1644', '4871-0644', '1568770428', 'emagide@hotmail.com', '', ''),
(1149, 1, '2017-06-04 23:12:49', 'SOLE MIO', '', '61879', '', '12.06', '4.03', '', '', '', '', '', '', '', 'MALACARI JUAN CARLOS', '12177822', 'RIOBAMBA 2811', '2.28E+11', '2284639035', 'carlosmalacari@hotmail.com', '', ''),
(1150, 1, '2017-06-04 23:12:49', 'FONDERA', '', 'SFER01988', '', '1', '1', '', '', '', '', '', '', '', 'MALACARI JUAN CARLOS', '12177822', 'RIOBAMBA 2811', '2.28E+11', '2284639035', 'carlosmalacari@hotmail.com', '', ''),
(1151, 1, '2017-06-04 23:12:49', 'BRINDIS', '', '12823', 'CRUCERO', '8.3', '3.2', '', '7', '', '', '', '', '', 'MARAZZI EDUARDO DOMINGO', '7851182', 'BLANCO ENCALADA 5199/3', '4522-2824', '1528720556', 'eduardomarazzi@hotmail.com', '', ''),
(1152, 1, '2017-06-04 23:12:49', 'MITO', '', '8923', '', '8', '2.77', '', '', '', '', '', '', '', 'MARTINEZ HECTOR', '4559326', 'CUBA 4432', '701-6178', '', '', '', ''),
(1153, 1, '2017-06-04 23:12:49', 'FREE LIFE', '', '71686', '', '6', '3', '', '', '', '', '', '', '', 'MARTINEZ PONZO SEBASTIAN', '26421696', 'CUBA 4432', '4704-5331', '1544470969', 'lonerianauticalatitud@hotmail.com', '', ''),
(1154, 1, '2017-06-04 23:12:49', 'AUGUSTUS', '', '31328', '', '9.5', '3.25', '', '7', '', '', '', '', '', 'MASSIERI CARLOS HUMBERTO', '21845681', 'ECHEVERRIA 1962 / 4', '4781-0508', '', 'cmassieri@hotmail.com', '', ''),
(1155, 1, '2017-06-04 23:12:49', 'GUILLOTE', '', '40122', '', '8.3', '3.2', '', '', '', '', '', '', '', 'MASSUCCO GUILLERMO DANIEL', '24314130', 'MIRAVE 2741/PB DTO 2', '4301-4269', '', 'gmassucco@ciudad.com.ar', '', ''),
(1156, 1, '2017-06-04 23:12:49', 'CARPE DIEM', '', '10057', '', '6.13', '2.13', '', '', '', '', '', '', '', 'MATERIN ALBERTO', '6116944', 'CORRIENTES 5225 /8', '4856-0753', '', 'albertomaterin@hotmail.com', '', ''),
(1157, 1, '2017-06-04 23:12:49', 'TIRANA', '', '28933', '', '10.4', '3.53', '', '', '', '', '', '', '', 'MATERYN JORGE', '12949795', 'TINOGASTA 3825 PB: B SECTOR B', '4686-5551', '1544796595', 'jorgemateryn@hotmail.com', '', ''),
(1158, 1, '2017-06-04 23:12:49', 'DRIFA', '', '9417', '', '8.12', '2.75', '', '', '', '', '', '', '', 'MAYER ROBERTO', '7594068', 'SUIPACHA 1180 3 G', '4393-1782', '', 'robertoemayer@gmail.com', '', ''),
(1159, 1, '2017-06-04 23:12:49', 'HUASI', '', '23207', '', '9.5', '3.25', '', '', '', '', '', '', '', 'MAZZA CAMPOS MIGUEL ANGEL', '4445240', 'AV. CORDOBA 2840 1', '961-3836', '1562020756', 'mazza_campos@fibertel.com.ar', '', ''),
(1160, 1, '2017-06-04 23:12:49', 'CARISMA', '', '5381', '', '10.07', '3.04', '', '', '', '', '', '', '', 'MAZZEO PABLO', '25987239', 'DEAN FUNES 1512', '1150586933', '', 'pablo_mazzeo@hotmail.com', '', ''),
(1161, 1, '2017-06-04 23:12:49', 'CIRRUS', '', '17431', '', '9', '2.6', '', '', '', '', '', '', '', 'MEDAN JOSE LUIS', '8271574', 'LIBERTAD3435', '4744-2195', '1543997091', 'medanjl@gmail.com', '', ''),
(1162, 1, '2017-06-04 23:12:49', 'TATA', '', '8269', '', '8.6', '2.4', '', '', '', '', '', '', '', 'MERLO LUIS ALEJANDRO', '17232974', 'PE', '4806-3359', '', 'lmerlo@tsjbaires.gov.ar', '', ''),
(1163, 1, '2017-06-04 23:12:49', 'WILLIWAWS', '', '1205', '', '7.2', '2.8', '', '', '', '', '', '', '', 'MINARDI GASPAR', '1043032', 'VELEZ SARSFIELD 5950', '762-5453', '', '', '', ''),
(1164, 1, '2017-06-04 23:12:49', 'NECTARIS', '', '40747', '', '9.2', '3.4', '', '', '', '', '', '', '', 'MOLANES FERNANDEZ CARLOS M.', '21918783', 'M. MERCEDES LASCANO 118', '', '', 'carmolanes@hotmail.com', '', ''),
(1165, 1, '2017-06-04 23:12:49', 'BAYONA', '', '51206', 'VELERO', '6.44', '2.85', '', '', '', '', '', '', '', 'MOLINARI GUIDO', '29866808', 'SUCRE 1897 18 A', '5778-0221', '155014-4040', 'guidomolinari@gmail.com', '', ''),
(1166, 1, '2017-06-04 23:12:49', 'KRILL', '', '28570', '', '6.7', '2.85', '', '', '', '', '', '', '', 'MON ALICIA', '20317738', 'MIGUENS 2938', '', '1559918439', 'alicialmon@gmail.com', '', ''),
(1167, 1, '2017-06-04 23:12:49', 'ANIMA FENIX', '', '16254', '', '5.9', '2.15', '', '', '', '', '', '', '', 'MONASTERIO RAFAEL', '3905039', 'HUMBERTO 1* 3194', '957-1929', '', 'monasteriosan@yahoo.com.ar', '', ''),
(1168, 1, '2017-06-04 23:12:49', 'SELENE', '', '15504', 'FYC 31', '9.4', '3.15', '', '', '', '', '', '', '', 'MONTI INES MARIA', '22808609', 'PARAGUAY 3423', '', '1554187713', 'ima.m@hotmail.com', '', ''),
(1169, 1, '2017-06-04 23:12:49', 'NEFER', '', '22237', '', '6.3', '2.2', '', '', '', '', '', '', '', 'MONTOTO RAUL', '3210975', 'PEDRO LOZANO 3129/3', '4503-2077(7 A 10 HS)', '', 'heidinoc@gmail.com', '', ''),
(1170, 1, '2017-06-04 23:12:49', 'LANCE', '', '', '', '6.13', '2.13', '', '', '', '', '', '', '', 'MORENZA DIEGO MARTIN ELOY', '21924036', 'DIEGO PALMA 1535', '', '1562850458', 'diego.morenza@icbc.com.ar', '', ''),
(1171, 1, '2017-06-04 23:12:49', 'CANDELA', '', '27020', '', '6', '2.6', '', '', '', '', '', '', '', 'MOSCA RODOLFO JUAN', '4245291', 'YAPEYU 715', '4798-3936', '15-5632-2884', 'rudymosca@yahoo.com', '', ''),
(1172, 1, '2017-06-14 22:06:20', 'ITINERANTE', 'Resch 26', '20572', 'velero', '7.85', '2.95', '', '', '', '', 'rivadavia', '112233455669', '', 'MUNZ GABRIEL ESTEBAN', '25988485', 'olivos', '123123', '1550070466', 'festix@gmail.com', '', ''),
(1173, 1, '2017-06-04 23:12:49', 'TADEUS', '', '22249', '', '10.28', '3.32', '', '', '', '', '', '', '', 'NARDIN HUGO ROBERTO', '10603762', '25 DE MAYO 1742', '4749-0951', '1544454558', 'hugonardin@yahoo.com.ar', '', ''),
(1174, 1, '2017-06-04 23:12:49', 'REVIRE', '', '23981', '', '12.33', '3.9', '', '', '', '', '', '', '', 'NOIR RICARDO ADRIAN', '12864487', 'VIAMONTE 1646 /2', '', '', 'adrianoir@arnet.com.ar', '', ''),
(1175, 1, '2017-06-04 23:12:49', 'HUMPHREY', '', '2382', '', '4.6', '2.5', '', '', '', '', '', '', '', 'NOIR RICARDO ADRIAN', '12864487', 'VIAMONTE 1646 /2', '', '', 'adrianoir@arnet.com.ar', '', ''),
(1176, 1, '2017-06-04 23:12:49', 'MARIA SOL', '', '36846', '', '8.3', '3.2', '', '', '', '', '', '', '', 'OLABUENAGA NESTOR', '10195923', 'AV.SANTA FE 5380 P11 DT.E', '49822624', '1553144265', 'nestorola951@gmail.com', '', ''),
(1177, 1, '2017-06-04 23:12:49', 'NO SE', '', '5446', '', '8', '2.8', '', '', '', '', '', '', '', 'OTERO JOSE', '4298750', 'ANDONAEGUI 3624', '541-4354', '', '', '', ''),
(1178, 1, '2017-06-04 23:12:49', 'ROCINANTE', '', '20422', '', '8.3', '3.2', '', '', '', '', '', '', '', 'PALACIOS SEGOVIA LIVIO', '93511566', 'AVIADOR FRANCO 6669', '4751-4441', '1565492783', 'liviopalacios@gmail.com', '', ''),
(1179, 1, '2017-06-04 23:12:49', 'MYSTIC II', '', '8649', 'VELERO', '8', '2.82', '', '', '', '', '', '', '', 'PALAU ALFREDO EDUARDO', '7612092', 'BRASIL 365', '4743-3242', '', '', '', ''),
(1180, 1, '2017-06-04 23:12:49', 'SANTANA', '', '17508', '', '6.9', '2.2', '', '', '', '', '', '', '', 'PAOLETTA CARLOS', '5508756', 'RAFAELA 4938', '683-5187', '', '', '', ''),
(1181, 1, '2017-06-04 23:12:49', 'SUE', '', '20409', '', '9.05', '3.2', '', '', '', '', '', '', '', 'PARRENO MIGUEL ANGEL', '4316545', 'PARAGUAY 4618 9', '4775-9275', '1541470673', 'maparrelu@hotmail.com', '', ''),
(1182, 1, '2017-06-04 23:12:49', 'QUIME QUEPAN', '', '14749', '', '7.8', '2.6', '', '', '', '', '', '', '', 'PASIN JUAN', '21477128', 'HENRY DUNANT 1340', '4717-1395', '', '', '', ''),
(1183, 1, '2017-06-04 23:12:49', 'ECLIPSE III', '', '49580', 'VELERO', '11.35', '3.75', '', '7', '', '', '', '', '', 'PATARO MARCELO', '18366860', 'NAVARRO 4230', '4502-1312', '', 'patarom@yahoo.com.ar', '', ''),
(1184, 1, '2017-06-04 23:12:49', 'BUTEN', '', '24755', '', '7.93', '2.72', '', '', '', '', '', '', '', 'PEIRETTI HECTOR GABRIEL', '16219195', 'ESTOMBA 1454 3', '4555-7692', '', 'gpeirett@bago.com.ar', '', ''),
(1185, 1, '2017-06-04 23:12:49', 'MANATI', '', '14710', '', '7.5', '2.5', '', '', '', '', '', '', '', 'PEREYRA LUCENA FERNANDO', '3983878', 'SILVIO RUGGIERI 3057 6', '802-0732', '', 'guachopereyra@yahoo.com.ar', '', ''),
(1186, 1, '2017-06-04 23:12:49', 'CHERIE', '', '24920', '', '8.13', '3.04', '', '', '', '', '', '', '', 'PETRIKOVICH ALEJANDRO HUMBERTO', '16055038', 'INT. NEYER 3474', '4735-0179', '15-6876-6232', 'apetrikovich@gmail.com', '', ''),
(1187, 1, '2017-06-04 23:12:49', 'HUARPES II', '', '17187', '', '5.8', '2.2', '', '', '', '', '', '', '', 'PICCALUGA DANIEL', '14812585', 'SIMON BOLIVAR 2118', '4760-7163', '155249-9366', 'cachotrial@hotmail.com', '', ''),
(1188, 1, '2017-06-04 23:12:49', 'ALCORNOQUE', '', '37157', 'VELERO', '10', '3.27', '', '', '', '', '', '', '', 'PINEYRO GUILLERMO', '8503624', 'ARTIGAS 4620 5', '572-0627', '', 'alcornoqueg@gmail.com', '', ''),
(1189, 1, '2017-06-04 23:12:49', 'BAHIA AZUL G', '', '20098', '', '10.83', '3.43', '', '', '', '', '', '', '', 'PISANI CLAUDIO DANIEL', '14943797', 'HONDURAS 4470', '831-0288', '1553195165', 'cnsmnautica@yahoo.com.ar', '', ''),
(1190, 1, '2017-06-04 23:12:49', 'MURLIA', '', '65234', 'VELERO', '7.62', '3.05', '', '0', '', '', '', '', '', 'PISSI ALICIA', '14611453', 'AV. DEL LIBERTADOR 5722 / 12', '', '15-4048-3622', '', '', ''),
(1191, 1, '2017-06-04 23:12:49', 'QUIRON', '', '17699', 'VELERO', '6.13', '2.13', '', '', '', '', '', '', '', 'PODESTA SERGIO GABRIEL', '24312609', 'DIAS COLODRERO 2730', '1544489155', '1544489155', 'sergiopode@gmail.com', '', ''),
(1192, 1, '2017-06-04 23:12:49', 'SALMO XXIII', '', '9569', 'CRUCERO', '8', '2.6', '', '', '', '', '', '', '', 'POLCAN ENRIQUE JORGE', '16208934', 'CORRIENTES 1995', '4717-5992', '1544149883', 'epolcan@hotmail.com', '', ''),
(1193, 1, '2017-06-04 23:12:49', 'LAWEN', '', '30929', '', '8.72', '2.9', '', '', '', '', '', '', '', 'PONCE GUSTAVO', '23421445', 'SOLDADO DE MALVINAS 2751', '', '1540298163', '', '', ''),
(1194, 1, '2017-06-04 23:12:49', 'TATO', '', '12958', '', '7.95', '3.14', '', '', '', '', '', '', '', 'PONCE JUAN CARLOS', '10688245', 'BOYACA 1535 PB C', '4585-4980', '', 'nahueponce@gmail.com', '', ''),
(1195, 1, '2017-06-04 23:12:49', 'MOTA', '', 'ET', '', '1', '0.5', '', '', '', '', '', '', '', 'PONCE JUAN CARLOS', '10688245', 'BOYACA 1535 PB C', '4585-4980', '', 'nahueponce@gmail.com', '', ''),
(1196, 1, '2017-06-04 23:12:49', 'ELUNEY II', '', '37415', 'VELERO', '7.9', '2.85', '', '', '', '', '', '', '', 'PUCCIO ROSANNA', '16496071', 'AYACUCHO 474', '47965111', '', 'rosannaepuccio@gmail.com', '', ''),
(1197, 1, '2017-06-04 23:12:49', 'LAPACHO', '', '67741', '', '8.97', '2.77', '', '', '', '', '', '', '', 'QUATTRIN HUMBERTO', '7604882', 'VERGARA 1845', '', '1531893093', 'hsqtito@yahoo.com.ar', '', ''),
(1198, 1, '2017-06-04 23:12:49', 'SAY NO MORE', '', '34141', 'VELERO', '6.7', '2.85', '', '5', '', '', '', '', '', 'RAMOS MARCELO SEBASTIAN', '23865088', 'GENERAL GUIDO 116', '4743-3622', '1553858131', 'marceloramos@fibertel.com.ar', '', ''),
(1199, 1, '2017-06-04 23:12:49', 'VIKINGO', '', '15507', '', '10.1', '3.04', '', '', '', '', '', '', '', 'RATUSNU ADHEMAR FRANCISCO', '6300545', 'AGUERO 1821 18 "E"', '822-2727', '', '', '', ''),
(1200, 1, '2017-06-04 23:12:49', 'L''ETE IV', '', '21294', '', '11.15', '3.65', '', '', '', '', '', '', '', 'RAVESE HUGO', '5712915', 'RODRIGUEZ PE', '4-812-0632', '', 'hravese@hotmail.com', '', ''),
(1201, 1, '2017-06-04 23:12:49', 'MALEN', '', '31699', '', '8', '3', '', '', '', '', '', '', '', 'RESNISKY ABRAHAM', '5791578', 'VIRGILIO 2839 1', '4472-8539', '15-4497-6200', 'adrianresnik@hotmail.com', '', ''),
(1202, 1, '2017-06-04 23:12:49', 'RATON', '', '38184', '', '6', '3', '', '', '', '', '', '', '', 'RESNISKY ABRAHAM', '5791578', 'VIRGILIO 2839 1', '4472-8539', '15-4497-6200', 'adrianresnik@hotmail.com', '', ''),
(1203, 1, '2017-06-04 23:12:49', 'PHILIPPA', '', '66190', '', '7.2', '2.66', '', '', '', '', '', '', '', 'RIBARIC PABLO LUIS', '24873298', 'MONS. LARUMBE 3151 DTO126', '4717-1465', '155-422-4447', 'pablo.ribaric@gmail.com', '', ''),
(1204, 1, '2017-06-04 23:12:49', 'SHAMBALA', '', '30354', '', '7.8', '2.6', '', '', '', '', '', '', '', 'RIGUEIRO SANTIAGO MATIAS', '30556174', 'BLANCO ENCALADA 1715/19', '4786-9432', '', 'rigueiromarcelo@yahoo.com.ar', '', ''),
(1205, 1, '2017-06-04 23:12:49', 'KARION', '', '20650', '', '9.8', '3.3', '', '', '', '', '', '', '', 'RIVERO HORACIO JORGE', '11773646', 'LUIS MARIA DRAGO 1578', '735-1985', '', 'riverohj@hotmail.com', '', ''),
(1206, 1, '2017-06-04 23:12:49', 'ALIANTE', '', '46849', '', '8.3', '2.8', '', '', '', '', '', '', '', 'RIVOLTA DANIEL PABLO', '16055106', 'CUBA 3609 6', '4702-3372', '1544104316', 'danielprivolta@gmail.com', '', ''),
(1207, 1, '2017-06-04 23:12:49', 'LIMASSOL II', '', '22753', '', '9.08', '2.82', '', '', '', '', '', '', '', 'RODRIGUEZ JORGE ALBERTO', '8076867', 'ING. MARCONI 3070', '4747-5879', '1544967100', 'rodriguezlonghi@hotmail.com', '', ''),
(1208, 1, '2017-06-04 23:12:49', 'BAHIA AZUL', '', '22894', '', '9.08', '3.1', '', '', '', '', '', '', '', 'RODRIGUEZ JOSE SERGIO', '12574982', 'CALLE 184 N', '4729-8512', '', 'sergio.rodriguez@boschrexroth.com.ar', '', ''),
(1209, 1, '2017-06-04 23:12:49', 'JOHANNA', '', '5575', '', '10.83', '3.47', '', '', '', '', '', '', '', 'RODRIGUEZ SEBASTIAN', '23903235', 'GRAL. PAZ 13268', '4687-3865', '', '', '', ''),
(1210, 1, '2017-06-04 23:12:49', 'ZZZ RESERVA ROEL', '', '', '', '0', '0', '', '', '', '', '', '', '', 'ROEL RUBEN', '10962558', 'DONADO 1802', '03488-460682', '', 'lisandroangelroel@gmail.com', '', ''),
(1211, 1, '2017-06-04 23:12:49', 'FARALLON', '', '15102', '', '10', '3.5', '', '', '', '', '', '', '', 'ROMANELLI CARLOS ALBERTO', '82087333', 'BRAGADO 5042', '4635-9222', '', '', '', ''),
(1212, 1, '2017-06-04 23:12:49', 'STAX', '', '35473', 'VELERO', '6', '2.6', '', '1', '', '', '', '', '', 'ROMANELLI FLAVIA ANDREA', '24308222', 'AV. NAZCA 415 7F', '46126449', '1153245218 (Carlos hermano)', 'rgegoro@hotmail.com', '', ''),
(1213, 1, '2017-06-04 23:12:49', 'SO', '', '20197', 'VELERO', '8.3', '3.2', '', '', '', '', '', '', '', 'ROMERO DANIEL ANGEL', '10518273', '54 MITRE 3885', '4752-1168', '', 'daniel@daromero.arnetbiz.com.ar', '', ''),
(1214, 1, '2017-06-04 23:12:49', 'JUAN PATRICIO', '', '19056', '', '9.65', '3.14', '', '', '', '', '', '', '', 'ROMERO PABLO MARCIAL', '20471991', 'FELIPE VALLESE 3865', '4672-5380', '15-4423-2211', 'info@nicanorromero.com', '', ''),
(1215, 1, '2017-06-04 23:12:49', 'FAMA', '', 'TIGR0715', '', '1', '1', '', '', '', '', '', '', '', 'ROMERO VEDOYA ALFONSO', '17286137', 'PELLEGRINI 1163 / 9', '4131-7110', '', 'romeroalfo@hotmail.com', '', ''),
(1216, 1, '2017-06-04 23:12:49', 'REGINA', '', '22428', '', '7.75', '2.72', '', '', '', '', '', '', '', 'RONCHI SERGIO', '17635390', 'ECHEVERRIA 2764 P 6 A', '4781-9059', '', 'sergio.ronchi@interpack.com.ar', '', ''),
(1217, 1, '2017-06-04 23:12:49', 'MARESIA', '', '39555', '', '10', '3.5', '', '', '', '', '', '', '', 'ROSSI JUAN CARLOS', '10630075', 'CORRIENTES 1255', '47909587', '', '', '', ''),
(1218, 1, '2017-06-04 23:12:49', 'TAITA', '', '26466', '', '8.4', '3', '', '', '', '', '', '', '', 'RUIZ EMILIO ERNESTO', '4396165', 'TANDIL 3232', '4612-3421', '', 'elvelerotaita@yahoo.com.ar', '', ''),
(1219, 1, '2017-06-04 23:12:49', 'PENNY LANE', '', '16204', '', '7.8', '2.5', '', '', '', '', '', '', '', 'RUIZ-SCHULZE MARCELO EDUARDO', '10200583', 'AV. SANTA FE 2710/5', '4825-3236', '1557566463', 'mruizschulze@gmail.com', '', ''),
(1220, 1, '2017-06-04 23:12:49', 'ADIOS', '', '16893', '', '9.83', '2.46', '', '', '', '', '', '', '', 'SANTERO HECTOR DANIEL', '17030400', 'MEXICO 1219', '4383-1855', '1544702656', 'veleroadios@hotmail.com', '', ''),
(1221, 1, '2017-06-04 23:12:49', 'LONE STAR', '', '22410', '', '9.5', '3.5', '', '', '', '', '', '', '', 'SANTORO ANTONIO NATALIO', '12969122', 'DIAZ VELEZ 2799', '4794-7787 / 3573', '', 'labodontec@hotmail.com', '', ''),
(1222, 1, '2017-06-04 23:12:49', 'FREE WAY', '', '27615', 'VELERO', '7.3', '2.95', '', '', '', '', '', '', '', 'SAPIA DIEGO ALEJANDRO', '22403504', 'MELINCUE 2679', '4581-2825', '', 'diegosapia@gmail.com', '', ''),
(1223, 1, '2017-06-04 23:12:49', 'PADRE', '', '69410', '', '6.5', '2.41', '', '0', '', '', '', '', '', 'SAPOZNIK MATIAS', '23992757', 'OLLEROS 2570 14 "C"', '4553-7728 4310-7182', '', 'mls.rpo@gmail.com', '', ''),
(1224, 1, '2017-06-04 23:12:49', 'DRUPE', '', 'OLIV711', '', '1', '1', '', '', '', '', '', '', '', 'SCARPATTI FABIO', '17962134', 'CASTELLI 377', '4203-0699', '', '', '', ''),
(1225, 1, '2017-06-04 23:12:49', 'ANTONINO', '', '46837', '', '10.07', '3.04', '', '', '', '', '', '', '', 'SCARPATTI HUMBERTO', '4260881', 'CASTELLI 377', '4203-0699', '', 'scarpatifabio@hotmail.com', '', ''),
(1226, 1, '2017-06-04 23:12:49', 'BLAU MARI', '', '6962', '', '9.4', '3.15', '', '', '', '', '', '', '', 'SCAVELLA GABRIEL', '7720171', 'DE MARIA 4439 4 "B"', '', '1553451689', 'g.scavella@hotmail.com', '', ''),
(1227, 1, '2017-06-04 23:12:49', 'MERAKI', '', 'SFER92717', '', '7.81', '2.82', '', '0', '', '', '', '', '', 'SCHIROSA MARCELO', '14255940', 'CIRC 4 SECC 2 MZA 5 CSA19', '', '1533612369', 'mschirosa@gmail.com', '', ''),
(1228, 1, '2017-06-04 23:12:49', 'PASO FINO', '', '47305', '', '6.5', '2.5', '', '', '', '', '', '', '', 'SCHIROSA MARCELO', '14255940', 'CIRC 4 SECC 2 MZA 5 CSA19', '', '1533612369', 'mschirosa@gmail.com', '', ''),
(1229, 1, '2017-06-04 23:12:49', 'NANU', '', '', 'VELERO', '8.45', '2.99', '', '', '', '', '', '', '', 'SCHISANO GUSTAVO', '17962225', 'BERMUDEZ 858', '4672-2881', '1541974718', 'gustavo.schisano@komalia.com', '', ''),
(1230, 1, '2017-06-04 23:12:49', 'SOLEIL IV', '', '20636', '', '9.8', '3.4', '', '', '', '', '', '', '', 'SCIOSCIOLI OSVALDO', '93711045', 'LIBERTADOR 14538/2', '4798-9923', '1544968177', 'oscioli0@gmail.com', '', ''),
(1231, 1, '2017-06-04 23:12:49', 'ROCK', '', '25495', '', '9', '3.1', '', '', '', '', '', '', '', 'SESTO RAFAEL', '7660470', 'FRENCH 2170', '4743-9542', '1540839300', 'rafael@rafaelsesto.com.ar', '', ''),
(1232, 1, '2017-06-04 23:12:49', 'ALVIRROX', '', '22369', '', '10.83', '3.43', '', '', '', '', '', '', '', 'SIMON CASARINO PABLO', '18777590', 'General Paz 749', '1532159244', '', 'pablo@vira.vc', '', ''),
(1233, 1, '2017-06-04 23:12:49', 'MIRALEJOS', '', '27597', '', '7.22', '2.53', '', '', '', '', '', '', '', 'SLEMENSON PABLO DARIO', '8037648', 'AV LAS HERAS 2048 1 D', '4803-8812', '1544273763', 'pablo_slemenson@yahoo.com', '', ''),
(1234, 1, '2017-06-04 23:12:49', 'DELPHIN', '', '2930', '', '11.97', '3.03', '', '', '', '', '', '', '', 'SMOLA ARNALDO', '2505061', 'ARENALES 2949', '825-0917', '', '', '', ''),
(1235, 1, '2017-06-04 23:12:49', 'SOL DEL PLATA', '', '38930', 'SAILOR 875', '8.58', '3.06', '', '', '', '', '', '', '', 'SOLIMO LEANDRO ARIEL', '23678662', 'BEETHOVEN 3480', '4541-9350', '', 'lasolimo@hotmail.com', '', ''),
(1236, 1, '2017-06-04 23:12:49', 'USHUAIA', '', '72851', '', '8.75', '3.17', '', '', '', '', '', '', '', 'SOMODI ANDRES MIGUEL', '14186681', 'VELEZ SARSFIELD 170', '4793-3158', '', 'asomodi@estudiodenes.com.ar', '', ''),
(1237, 1, '2017-06-04 23:12:49', 'LOREN STAR 2', '', '29154', '', '9.6', '3.42', '', '', '', '', '', '', '', 'SORDELLI CARRERAS REINALDO D.', '4550609', 'RICARDO ROJAS 25', '4744-6028', '', 'reinaldosordelli@yahoo.com.ar', '', ''),
(1238, 1, '2017-06-04 23:12:49', 'MAS CALMA', '', '44509', '', '6.9', '2.6', '', '', '', '', '', '', '', 'SOSA CARLOS', '14812800', 'ESMERALDA 2171', '4769-2780', '1560937440', 'nortekayak@gmail.com', '', ''),
(1239, 1, '2017-06-04 23:12:49', 'SAILING XTREME', '', '27013', '', '7', '2.84', '', '', '', '', '', '', '', 'STACUL LUIS A.', '20838309', 'OHIGGINS 2218 / 8', '36413333', '1536413333', 'lstacul@yahoo.com.ar', '', ''),
(1240, 1, '2017-06-04 23:12:49', 'MILENA', '', '54361', 'VELERO', '8.3', '3.2', '', '8', '', '', '', '', '', 'STEMPLER GERMAN FLAVIO', '16288489', 'ASCASUBI 6130', '4844-7868', '15-2155-9380', 'germanstempler@hotmail.com', '', ''),
(1241, 1, '2017-06-04 23:12:49', 'PULGON', '', '12063', '', '6.13', '2.13', '', '', '', '', '', '', '', 'SUAITER GUSTAVO HERNAN', '14668076', 'SGO. DEL ESTERO 1742', '717-5326', '', 'esuaiter@yahoo.com', '', ''),
(1242, 1, '2017-06-04 23:12:49', 'EGO SUM', '', '22893', 'PLENAMA300', '8.9', '3.2', '', '0', '', '', '', '', '', 'SUAREZ GUILLERMO', '4366145', 'JUAREZ 3344', '', '', 'ana.gualazzi@hp.com', '', ''),
(1243, 1, '2017-06-04 23:12:49', 'VERDERON', '', '3521', 'VELERO', '9.3', '3.15', '', '', '', '', '', '', '', 'TABUSSO LUIS', '18297810', 'ALVAREZ JONTE 236', '4654-9428', '1557227761', 'luistabusso@gmail.com', '', ''),
(1244, 1, '2017-06-04 23:12:49', 'SECUAZ', '', '8186', 'PANDORA 23', '6.92', '2.64', '', '', '', '', '', '', '', 'TALON GUSTAVO', '20983823', 'MELO 2132', '', '1531512633', 'gtalon@taoweb.com.ar', '', ''),
(1245, 1, '2017-06-04 23:12:49', 'JULEPE', '', '2446', '', '0', '0', '', '0', '', '', '', '', '', 'TOBALINA ANTONIO', '5309083', 'ARAOZ 2922/6', '802-1255 / 4802-2358', '1524685454', 'tobyndyo2002@yahoo.com.ar', '', ''),
(1246, 1, '2017-06-04 23:12:49', 'PERRO MALO', '', '64880', '', '9.5', '3.2', '', '', '', '', '', '', '', 'TOMATIS LEONARDO IGNACIO', '20435570', 'CALLAO 61', '4746-1840', '', 'leotomatis@gmail.com', '', ''),
(1247, 1, '2017-06-04 23:12:49', 'ALMENDRA', '', '23217', 'VELERO', '6.4', '2.96', '', '0', '', '', '', '', '', 'TORESAN SERGIO DANIEL', '23120767', 'CDRO RIVADAVIA 1850 3 I', '4701-9097', '', 'sergio.toresan@aig.com', '', ''),
(1248, 1, '2017-06-04 23:12:49', 'MALENCO', '', '23547', '', '7.3', '3.1', '', '', '', '', '', '', '', 'TURJANSKI LEON', '4512582', 'REP. DE LA INDIA 3129', '802-7072', '', '', '', ''),
(1249, 1, '2017-06-04 23:12:49', 'BALLERINA', '', '', '', '8.5', '3.3', '', '', '', '', '', '', '', 'TURNER JORGE', '14455660', 'GARIBALDI 380 1 B ', '4732-2356', '15-5566-8960', 'ballerina5474@gmail.com', '', ''),
(1250, 1, '2017-06-04 23:12:49', 'LA OTRA', '', '11214', '', '6.13', '2.13', '', '', '', '', '', '', '', 'URRESTARAZU GERMAN JOSE', '4437240', '11 DE SEPTIEMBRE 1745 1', '781-2902', '', '', '', ''),
(1251, 1, '2017-06-04 23:12:49', 'CENTAURO', '', '13794', '', '9.7', '3.17', '', '', '', '', '', '', '', 'VAQUER MIGUEL JULIAN', '8533074', 'TERRADA 3168', '4501-0701', '1540699968', 'migueljulianvaquer@gmail.com', '', ''),
(1252, 1, '2017-06-04 23:12:49', 'SKIPPER', '', '22314', '', '7.93', '2.72', '', '', '', '', '', '', '', 'VASQUEZ GABRIEL', '17749614', 'ZAPIOLA 2156 P15 A', '45430743', '1530820183', 'karamvas@gmail.com', '', ''),
(1253, 1, '2017-06-04 23:12:49', 'VILLANUEVA', '', '34784', '', '8.3', '3.1', '', '0', '', '', '', '', '', 'VAZQUEZ FIEL WALTER', '12160879', 'URUGUAY 239 8', '373-8786 / 4788-5252', '154417-3740', 'vazquezfiel@yahoo.com.ar', '', ''),
(1254, 1, '2017-06-04 23:12:49', 'SEGISMUNDO', '', '30030', '', '8.3', '3.2', '', '', '', '', '', '', '', 'VAZQUEZ MIGUEL', '16037403', 'APOLINARIO FIGUEROA 542', '4921-8052', '', 'e_vazquez54@yahoo.com.ar', '', ''),
(1255, 1, '2017-06-04 23:12:49', 'PAMPA', '', '19318', '', '8.5', '3', '', '', '', '', '', '', '', 'VAZQUEZ RUEDA JOSE RAMON', '12058421', 'CALLE 129 N 1649', '4752-4726', '1544266712', 'esterpiazza@yahoo.com.ar', '', ''),
(1256, 1, '2017-06-04 23:12:49', 'ZZZ WENTZEL', '', '', '', '0', '0', '', '', '', '', '', '', '', 'WENTZEL ADRIANA', '6371719', 'SAN J.DE CALASANZ 160/2 5', '', '', 'apwen@yahoo.com.ar', '', ''),
(1257, 1, '2017-06-04 23:12:49', 'CULPABLE 2', '', '19345', '', '9.05', '3.2', '', '', '', '', '', '', '', 'WOLF ARTURO', '4561371', 'SANTA ELENA 337', '4302-0312', '', 'arturo@maclar.com.ar', '', ''),
(1258, 1, '2017-06-04 23:12:49', 'RUMIPAL', '', '15389', '', '6.13', '2.13', '', '3', '', '', '', '', '', 'ZALDUMBIDE SERGIO', '16037527', 'AV. AVELLANEDA 1811 2 B', '4384-8016', '1556565366', 'zaldumbide@yahoo.com', '', ''),
(1259, 1, '2017-06-04 23:12:49', 'GITANO', '', '28361', '', '7.9', '2.7', '', '', '', '', '', '', '', 'ZAPATA EMMANUEL', '33199999', 'MIGUEL CANE 631', '4746-2265', '', 'jime-zapata@hotmail.com', '', ''),
(1260, 1, '2017-06-05 02:33:00', 'CHUCARO', '', '32880', 'VELERO', '9.5', '3.25', '', '', '', '', '', '', '', 'ZOPATTI GUSTAVO', '12463371', '', 'BAHIA DEL SOL', '', 'gzopatti@yahoo.com', '', ''),
(1261, 0, '2017-06-14 17:15:35', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_log`
--

CREATE TABLE IF NOT EXISTS `tabla_log` (
  `id_log` int(11) NOT NULL,
  `id_movimiento` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_barco` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `coment_operacion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabla_log`
--

INSERT INTO `tabla_log` (`id_log`, `id_movimiento`, `id_usuario`, `id_barco`, `time_stamp`, `coment_operacion`) VALUES
(1, 1, 2, 0, '2017-05-30 17:02:03', 'login'),
(2, 3, 2, 32, '2017-05-30 17:04:29', 'Cargado barco al sistema'),
(3, 1, 1, 0, '2017-06-04 15:36:38', 'login'),
(4, 3, 1, 0, '2017-06-05 01:34:48', 'Cargado barco al sistema'),
(5, 3, 1, 0, '2017-06-05 01:35:46', 'Cargado barco al sistema'),
(6, 3, 1, 0, '2017-06-05 01:37:55', 'Modificacion barco en el sistema'),
(7, 3, 1, 1172, '2017-06-05 02:17:08', 'Modificacion barco en el sistema'),
(8, 3, 1, 1260, '2017-06-05 02:17:55', 'Modificacion barco en el sistema'),
(9, 3, 1, 1260, '2017-06-05 02:18:14', 'Modificacion barco en el sistema'),
(10, 3, 1, 1260, '2017-06-05 02:20:53', 'Modificacion barco en el sistema'),
(11, 3, 1, 1260, '2017-06-05 02:26:21', 'Modificacion barco en el sistema'),
(12, 3, 1, 1260, '2017-06-05 02:26:52', 'Modificacion barco en el sistema'),
(13, 3, 1, 1260, '2017-06-05 02:28:58', 'Modificacion barco en el sistema'),
(14, 3, 1, 1260, '2017-06-05 02:32:53', 'Modificacion barco en el sistema'),
(15, 3, 1, 1260, '2017-06-05 02:33:00', 'Modificacion barco en el sistema'),
(16, 3, 1, 1260, '2017-06-05 02:33:30', 'Modificacion barco en el sistema'),
(17, 3, 1, 1260, '2017-06-05 02:33:40', 'Modificacion barco en el sistema'),
(18, 3, 1, 1172, '2017-06-05 02:34:23', 'Modificacion barco en el sistema'),
(19, 1, 2, 0, '2017-06-05 02:35:25', 'login'),
(20, 3, 2, 1172, '2017-06-05 02:35:41', 'Modificacion barco en el sistema'),
(21, 3, 2, 1172, '2017-06-05 02:36:09', 'Modificacion barco en el sistema'),
(22, 3, 2, 1172, '2017-06-05 02:37:06', 'Modificacion barco en el sistema'),
(23, 1, 1, 0, '2017-06-05 02:41:18', 'login'),
(24, 3, 1, 1172, '2017-06-05 02:41:40', 'Modificacion barco en el sistema'),
(25, 1, 1, 0, '2017-06-05 13:11:20', 'login'),
(26, 3, 1, 1172, '2017-06-05 13:12:42', 'Modificacion barco en el sistema'),
(27, 3, 1, 1172, '2017-06-05 13:14:06', 'Modificacion barco en el sistema'),
(28, 3, 1, 1172, '2017-06-05 13:15:39', 'Modificacion barco en el sistema'),
(29, 1, 1, 0, '2017-06-12 20:52:12', 'login'),
(30, 3, 1, 1172, '2017-06-12 21:25:02', 'Modificacion barco en el sistema'),
(31, 1, 1, 0, '2017-06-12 21:54:24', 'login'),
(32, 3, 1, 1172, '2017-06-12 21:54:35', 'Modificacion barco en el sistema'),
(33, 1, 1, 0, '2017-06-14 17:15:30', 'login'),
(34, 3, 1, 1261, '2017-06-14 17:15:35', 'Cargado barco al sistema'),
(35, 1, 1, 0, '2017-06-14 22:00:59', 'login'),
(36, 11, 1, 1172, '2017-06-14 22:06:20', 'Modificacion barco en el sistema'),
(37, 11, 1, 1172, '2017-06-14 22:08:42', 'Modificacion barco en el sistema'),
(38, 11, 1, 1112, '2017-06-14 22:44:21', 'Modificacion barco en el sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_operaciones`
--

CREATE TABLE IF NOT EXISTS `tabla_operaciones` (
  `id_operacion` int(11) NOT NULL,
  `id_barco` int(11) NOT NULL,
  `id_movimiento` int(11) NOT NULL,
  `zona` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_fin_operacion` date NOT NULL,
  `fecha_operacion` date NOT NULL,
  `coment_operacion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabla_operaciones`
--

INSERT INTO `tabla_operaciones` (`id_operacion`, `id_barco`, `id_movimiento`, `zona`, `id_usuario`, `time_stamp`, `fecha_fin_operacion`, `fecha_operacion`, `coment_operacion`) VALUES
(1, 0, 1, 0, 1, '2017-05-29 00:30:38', '0000-00-00', '0000-00-00', ''),
(2, 0, 1, 0, 1, '2017-05-29 00:32:20', '0000-00-00', '0000-00-00', 'login'),
(3, 0, 1, 0, 1, '2017-05-29 00:32:41', '0000-00-00', '0000-00-00', 'login'),
(4, 0, 1, 0, 1, '2017-05-29 00:33:01', '0000-00-00', '0000-00-00', 'login'),
(5, 0, 1, 0, 1, '2017-05-29 13:00:29', '0000-00-00', '0000-00-00', 'login'),
(6, 0, 3, 0, 1, '2017-05-29 21:30:45', '0000-00-00', '0000-00-00', 'login'),
(7, 0, 3, 0, 1, '2017-05-29 21:31:06', '0000-00-00', '0000-00-00', 'login'),
(8, 0, 3, 0, 1, '2017-05-29 21:31:43', '0000-00-00', '0000-00-00', 'login'),
(9, 0, 3, 0, 1, '2017-05-29 21:32:11', '0000-00-00', '0000-00-00', 'agregado barco al sistema'),
(10, 0, 3, 0, 1, '2017-05-29 21:32:29', '0000-00-00', '0000-00-00', 'agregado barco al sistema'),
(11, 0, 3, 0, 1, '2017-05-29 21:32:50', '0000-00-00', '0000-00-00', 'agregado barco al sistema'),
(12, 0, 3, 0, 1, '2017-05-29 21:33:11', '0000-00-00', '0000-00-00', 'login'),
(13, 0, 3, 0, 1, '2017-05-29 21:33:25', '0000-00-00', '0000-00-00', 'login'),
(14, 0, 3, 0, 1, '2017-05-29 21:34:47', '0000-00-00', '0000-00-00', 'login'),
(15, 21, 3, 0, 1, '2017-05-29 21:36:26', '0000-00-00', '0000-00-00', 'login'),
(16, 22, 3, 0, 1, '2017-05-29 21:37:18', '0000-00-00', '0000-00-00', 'login'),
(17, 23, 3, 0, 1, '2017-05-29 21:38:38', '0000-00-00', '0000-00-00', 'login'),
(18, 24, 3, 0, 1, '2017-05-29 21:40:16', '0000-00-00', '0000-00-00', 'login'),
(19, 25, 3, 0, 0, '2017-05-29 21:42:43', '0000-00-00', '0000-00-00', 'Cargado barco al sistema'),
(20, 26, 3, 0, 1, '2017-05-29 21:43:32', '0000-00-00', '0000-00-00', 'Cargado barco al sistema'),
(21, 27, 3, 0, 1, '2017-05-29 21:44:27', '0000-00-00', '0000-00-00', 'Cargado barco al sistema'),
(22, 0, 1, 0, 1, '2017-06-14 21:43:21', '0000-00-00', '0000-00-00', 'login'),
(23, 1172, 3, 0, 2, '2017-06-14 23:28:40', '0000-00-00', '0000-00-00', 'Cargado barco al sistema'),
(24, 1172, 3, 3, 0, '2017-06-14 23:28:34', '0000-00-00', '0000-00-00', 'Cargado barco al sistema'),
(25, 0, 1, 0, 1, '2017-06-14 21:38:10', '0000-00-00', '0000-00-00', 'login'),
(26, 0, 1, 0, 2, '2017-05-29 21:49:35', '0000-00-00', '0000-00-00', 'login'),
(27, 0, 1, 0, 1, '2017-05-29 21:57:47', '0000-00-00', '0000-00-00', 'login'),
(28, 0, 1, 0, 1, '2017-05-29 22:24:49', '0000-00-00', '0000-00-00', 'login'),
(29, 0, 1, 0, 1, '2017-05-30 01:45:13', '0000-00-00', '0000-00-00', 'login'),
(30, 0, 1, 0, 1, '2017-05-30 01:50:03', '0000-00-00', '0000-00-00', 'login'),
(31, 0, 1, 0, 1, '2017-05-30 01:50:53', '0000-00-00', '0000-00-00', 'login'),
(32, 30, 3, 0, 1, '2017-05-30 02:05:13', '0000-00-00', '0000-00-00', 'Cargado barco al sistema'),
(33, 0, 1, 0, 4, '2017-05-30 02:07:01', '0000-00-00', '0000-00-00', 'login'),
(34, 0, 1, 0, 4, '2017-05-30 02:07:56', '0000-00-00', '0000-00-00', 'login'),
(35, 0, 1, 0, 2, '2017-05-30 02:11:37', '0000-00-00', '0000-00-00', 'login'),
(36, 31, 3, 0, 2, '2017-05-30 02:11:39', '0000-00-00', '0000-00-00', 'Cargado barco al sistema'),
(37, 1172, 0, 1, 1, '2017-06-14 22:38:53', '0000-00-00', '0000-00-00', 'accion test'),
(38, 1172, 5, 1, 1, '2017-06-14 22:39:01', '0000-00-00', '0000-00-00', 'accion test'),
(39, 1172, 5, 1, 1, '2017-06-14 22:39:21', '0000-00-00', '0000-00-00', 'accion test'),
(40, 1172, 5, 1, 1, '2017-06-14 22:39:40', '0000-00-00', '0000-00-00', 'accion test'),
(41, 1172, 0, 2, 1, '2017-06-14 22:40:17', '0000-00-00', '0000-00-00', 'accion test'),
(42, 1172, 7, 2, 1, '2017-06-14 22:40:30', '0000-00-00', '0000-00-00', 'accion test'),
(43, 1172, 6, 3, 1, '2017-06-14 22:40:40', '0000-00-00', '0000-00-00', 'accion test'),
(44, 1112, 5, 1, 1, '2017-06-14 22:45:01', '0000-00-00', '0000-00-00', 'accion test'),
(45, 1112, 7, 2, 1, '2017-06-14 23:32:45', '0000-00-00', '0000-00-00', 'accion test'),
(46, 1172, 5, 5, 1, '2017-06-15 00:14:15', '0000-00-00', '0000-00-00', 'accion test'),
(47, 1060, 5, 1, 1, '2017-06-14 23:52:51', '0000-00-00', '0000-00-00', 'accion test'),
(48, 1112, 4, 0, 1, '2017-06-15 01:49:34', '0000-00-00', '0000-00-00', 'accion test'),
(49, 1112, 8, 2, 1, '2017-06-15 02:01:18', '0000-00-00', '0000-00-00', 'accion test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nick` text NOT NULL,
  `pass` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `mail` text NOT NULL,
  `jerarquia` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nick`, `pass`, `date`, `nombre`, `apellido`, `mail`, `jerarquia`) VALUES
(1, 'carlos', '134679', '2017-05-29 21:11:00', 'Carlos', 'Carreiro', 'carlos@cnsm.org.ar', 1),
(2, 'romina', '134679', '2017-05-29 21:11:05', 'Romina', 'Chattard', 'romina@cnsm.org.ar', 1),
(4, 'victor', '134679', '2017-05-30 02:07:45', 'victor', 'contramaestre', '', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `indice_movimiento`
--
ALTER TABLE `indice_movimiento`
  ADD PRIMARY KEY (`id_mov`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas_optimist`
--
ALTER TABLE `notas_optimist`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rel_zonas`
--
ALTER TABLE `rel_zonas`
  ADD PRIMARY KEY (`id_rel`),
  ADD KEY `mov_id` (`mov_id`),
  ADD KEY `mov_id_2` (`mov_id`);

--
-- Indices de la tabla `tabla_barcos`
--
ALTER TABLE `tabla_barcos`
  ADD PRIMARY KEY (`id_barco`),
  ADD KEY `id_barco` (`id_barco`);

--
-- Indices de la tabla `tabla_log`
--
ALTER TABLE `tabla_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_barco` (`id_barco`);

--
-- Indices de la tabla `tabla_operaciones`
--
ALTER TABLE `tabla_operaciones`
  ADD PRIMARY KEY (`id_operacion`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_barco` (`id_barco`),
  ADD KEY `id_barco_2` (`id_barco`),
  ADD KEY `id_barco_3` (`id_barco`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `indice_movimiento`
--
ALTER TABLE `indice_movimiento`
  MODIFY `id_mov` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT de la tabla `notas_optimist`
--
ALTER TABLE `notas_optimist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `rel_zonas`
--
ALTER TABLE `rel_zonas`
  MODIFY `id_rel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `tabla_barcos`
--
ALTER TABLE `tabla_barcos`
  MODIFY `id_barco` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1262;
--
-- AUTO_INCREMENT de la tabla `tabla_log`
--
ALTER TABLE `tabla_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `tabla_operaciones`
--
ALTER TABLE `tabla_operaciones`
  MODIFY `id_operacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rel_zonas`
--
ALTER TABLE `rel_zonas`
  ADD CONSTRAINT `rel_zonas_ibfk_1` FOREIGN KEY (`mov_id`) REFERENCES `indice_movimiento` (`id_mov`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tabla_operaciones` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
