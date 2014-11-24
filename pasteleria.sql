-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2014 at 09:19 PM
-- Server version: 5.5.40-MariaDB-1~precise-log
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pasteleria`
--

-- --------------------------------------------------------

--
-- Table structure for table `auxiliar`
--

CREATE TABLE IF NOT EXISTS `auxiliar` (
  `idproducto` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `totalproducto` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `idpedido` int(11) NOT NULL AUTO_INCREMENT,
  `total_pagar` float DEFAULT NULL,
  `nombre_cliente` varchar(60) DEFAULT NULL,
  `direccion` varchar(65) DEFAULT NULL,
  PRIMARY KEY (`idpedido`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pedido`
--

INSERT INTO `pedido` (`idpedido`, `total_pagar`, `nombre_cliente`, `direccion`) VALUES
(1, 335.5, 'miguel angel', 'olivo 4618a'),
(2, 335.5, 'luis', 'patria'),
(3, 335.5, 'luis', 'patria'),
(4, 335.5, 'paco', 'placeres 56'),
(5, 646, 'miguel', 'patria 45'),
(6, 585, 'miguel', ''),
(7, 14, 'miguel', ''),
(8, 319.5, 'zopilote', ''),
(9, 8.5, 'luis', ''),
(10, 150.5, 'luis', '');

-- --------------------------------------------------------

--
-- Table structure for table `pedido_producto`
--

CREATE TABLE IF NOT EXISTS `pedido_producto` (
  `cantidad_producto` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `pedido_idpedido` int(11) NOT NULL,
  KEY `fk_pedido_Productos1_idx` (`idproducto`),
  KEY `fk_pedido-producto_pedido1` (`pedido_idpedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pedido_producto`
--

INSERT INTO `pedido_producto` (`cantidad_producto`, `idproducto`, `pedido_idpedido`) VALUES
(1, 22, 4),
(10, 37, 4),
(10, 28, 5),
(2, 4, 5),
(12, 1, 6),
(1, 7, 6),
(1, 5, 6),
(1, 17, 7),
(1, 44, 8),
(1, 5, 8),
(1, 29, 8),
(1, 40, 9),
(1, 57, 10);

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(45) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `imagen` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`idproducto`, `nombre_producto`, `precio`, `descripcion`, `imagen`) VALUES
(1, 'empanada de leche', 4.5, 'empanada de textura suave rellena de dulce de leche', 'imagenes/empanada.jpg'),
(2, 'cheesecake de queso', 250.5, 'pastel de queso adicionado con mermelada de fresa', 'imagenes/ches.jpg'),
(3, 'pastel de chocolate', 250.5, 'Pastel de chocolate adicionado con salsa de kaluha', 'imagenes/choco.jpg'),
(4, 'pastel de limon', 250.5, 'pastel tradicional de limon a base de leche endulzada ', 'imagenes/limon.jpg'),
(5, 'pastel con frutas', 280.5, 'pastel con gran variedad de frutas en amibar y base de queso', 'imagenes/fruta.jpg'),
(6, 'pastel rollo  de mermelada ', 200.5, 'rollo de mermelada con textura suave y exquisito sabor para una excelente reunion familiar', 'imagenes/rollomermelada.jpg'),
(7, 'pasteles de zanahoria', 250.5, 'pastel de zanahoria y frutos secos ba;ada en una capa de glass hecha por la casa', 'imagenes/zanahoria.jpg'),
(8, 'helado de fresa de yoghurt', 14, 'bolas de nieve elaborados con yoghurt 100% natural', 'imagenes/fresa de yogurt.jpg'),
(9, 'helado de limon', 14, 'bolas de nieve suave,con trozo de fruta natural', 'imagenes/limo.jpg'),
(10, 'helado de vainilla', 14, 'bolas de nieve suave,elaborado con leche de vaca y estracto de vainilla ', 'imagenes/vainilla.jpg'),
(11, 'helado de fresa de crema', 14, 'bolas de nieve suave elaborados con leche 100% de vaca y fresas selectas', 'imagenes/fresa.jpg'),
(12, 'helado de chocolate', 14, 'bolas de nieve suave,elaborado con el mejor cacao', 'imagenes/chocolate.jpg'),
(13, 'helado de galleta', 14, 'bolas de nieve suave,elaborado con trozos de galleta y leche de vaca ', 'imagenes/galleta.jpg'),
(14, 'helado de frambueza', 14, 'bolas de nieve con trozos natural de franbuezas', 'imagenes/frambueza.jpg'),
(15, 'helado de bionico', 14, 'bolas de nieve suave elaboradoscon leche de vaca un toque de vainilla y frutas selectas', 'imagenes/bionico.jpg'),
(16, 'helado de chongos', 14, 'bolas de nieve suave,elaborado con trozos de leche de vaca y canela ', 'imagenes/chongos.jpg'),
(17, 'helado de chocolate con menta', 14, 'bolas de nieve elaborados con chocolate y un toque de menta', 'imagenes/chocomenta.jpg'),
(18, 'chocolate con almendras', 14, 'bolas de nieve suave elaboradoscon chocolate y alendras rebanadas', 'imagenes/chocolate con almendras.jpg'),
(19, 'pastel de tres leches', 250.5, 'de delicioso pan de vainilla acompañado con nueces y bañado en exquisitas tres leches', 'imagenes/tresleches.jpg'),
(20, 'pasteles de fondant', 260.5, ' un pastel con fino y elegante diseño ademas de un rico sabor', 'imagenes/fondant.jpg'),
(21, 'pasteles infantiles', 300.5, 'suave pastel de vainilla y chocolate con una hermosa decoracion y un sabroso sabor para tu paladar', 'imagenes/infantiles.jpg'),
(22, 'pasteles de cafe', 250.5, 'rica textura agradable aroma a cafe ', 'imagenes/cafe.jpg'),
(23, 'pay de manzana', 150.5, 'suave pasta rellena de manzana decorado y con frutos secos y espolvoreado de canela', 'imagenes/pay-manzana.jpg'),
(24, 'pay de queso', 150.5, 'exquisita textura decorada con cerezas y jalea', 'imagenes/pay-queso.jpg'),
(25, 'pay de limon', 150.5, 'suculento y suave  con deliciosa crema en la superficie', 'imagenes/PAY-DE-LIMNO.jpg'),
(26, 'pay de platano', 150.5, 'rica pasta rellena de platano con un rico decorado en la superficie', 'imagenes/pay-platano.jpg'),
(27, 'mini pays', 30.5, '', 'imagenes/mini-pays.jpg'),
(28, 'cupcakes clasico', 14.5, 'vainilla,fresao chocolate con un decorado basico', 'imagenes/cupcake-clasico.jpg'),
(29, 'cupcakes de frutas', 14.5, 'de vainilla,fresa ochocolate decorado con crema batida y frutas ', 'imagenes/cupcake-frutas.jpg'),
(30, 'cupcakes de sugarveil', 32.5, 'de vainilla, fresa o chocolate con un delicioso y elegante decorado', 'imagenes/cupcakes sugarveil.jpg'),
(31, 'cupcake  holloween de fondant', 30.5, 'decorado de fondant  con un espelusnante y rico sabor', 'imagenes/hallowen_cupcakes.jpg'),
(32, 'cupcakes de fondant', 28.5, 'fresa vainilla o chocolate con decorado creativo', 'imagenes/cupcakes-fondant.jpg'),
(33, 'cupcakes chocolate', 14.5, 'delicioso cupcake de chocolate,con crema batida sabor chocolate', 'imagenes/cup-dchocolate.jpg'),
(34, 'cupcakes infantiles de fondant', 28.5, 'decorado creativo sabor a elegir', 'imagenes/cupcakes-infantiles.jpg'),
(35, 'cupcakes crema de avellanas', 15.5, 'sabor a elegir con crema de avellana', 'imagenes/Cupcakes-de-Avellana.jpg'),
(36, 'cupcake navide;os', 14.5, 'decorado tematico sabor a elegirz', 'imagenes/navideno.jpg'),
(37, 'donas de chocolate', 8.5, ' dona clasica de chocolate suave  y deliciosa', 'imagenes/dona-chocolate.png'),
(38, 'donas rellenas de cajeta', 8.5, 'suave rica y rellena de cajeta', 'imagenes/relleno-cajeta.jpg'),
(39, 'donas rellenas de mermelada de fresa', 8.5, 'deliciosa dona rellena de mermelada', 'imagenes/relleno-mermelada.jpeg'),
(40, 'donas rellenas de leche', 8.5, 'clasica y rica dona rellena de leche', 'imagenes/relleno-leche.jpeg'),
(41, 'donas glaceadas', 8.5, 'suaves ricas y con un atractivo y delicioso decorado', 'imagenes/donas-decoradas.jpeg'),
(42, 'mouse de limon', 24.5, 'rico suave y fresco con  agradable sabor a limon', 'imagenes/mousse-de-limon.jpg'),
(43, 'mouse de chocolate', 24.5, 'suave y afrodisiaco sabor a chocolate', 'imagenes/mousse-de-cholate.jpg'),
(44, 'mouse de fresa', 24.5, 'fresco y rico con sabor a fresa', 'imagenes/mousse-fresa.jpg'),
(45, 'mouse de mango', 24.5, 'fresco y rico con sabor a mango', 'imagenes/mousse-mango.jpg'),
(46, 'galletas de zanahoria', 4.5, 'galletas crujientes con zanohoria natural y nuez', 'imagenes/galletazana.jpg'),
(47, 'galletas navideña', 4.5, 'galletas con personajes navideños,elaborados con mantequilla', 'imagenes/galletanavi.jpg'),
(48, 'galletas beso de nuez', 4.5, 'galletas de mantequiila con nuez espolvoreada', 'imagenes/galletabeso.jpg'),
(49, 'galletas de mantequilla', 4.5, 'galletas de mantequilla con textura suave', 'imagenes/galletamantequilla.jpg'),
(50, 'galletas con chispas de chocolate', 4.5, 'galletas crujientes con chispas de chocolate', 'imagenes/galletachispas.jpg'),
(51, 'galletas de granola', 4.5, 'elaboradas con canela,granola y pasas', 'imagenes/galletagranola.jpg'),
(52, 'galletas de vainilla', 4.5, 'galleta de vainilla y leche de vca', 'imagenes/galletavainilla.jpg'),
(53, 'galletas rellenas de fresa', 8.5, 'galleta rellena de mermelada de fresa y extracto de vainilla', 'imagenes/galletarellena.jpg'),
(54, 'galletas decoradas', 4.5, 'galletas de vainilla con cubierta dulce con diseño deseado', 'imagenes/galletadecorada.jpg'),
(55, 'galletas infantiles', 4.5, 'galletas de vainilla con cubieta dulce con tu personaje favorito', 'imagenes/galletainfantil.jpg'),
(56, 'galletas de bombon', 4.5, 'galleta con bombon y mermelada', 'imagenes/galletabombon.jpg'),
(57, 'gelatina de rompope', 150.5, 'gelatina de leche con extracto de rompope natural', 'imagenes/gelarompope.jpg'),
(58, 'gelatina de frutas', 150.5, 'gelatina de agua con frutas de temporada', 'imagenes/gelafrutas.jpg'),
(59, 'gelatina de fresa', 150.5, 'gelatina de agua con fresas frescas', 'imagenes/gelafresa.jpg'),
(60, 'gelatina de nuez', 150.5, 'gelatina de  leche con extracto de vainilla y nuez picada', 'imagenes/gelanuez.jpg'),
(61, 'gelatina de personaje', 150.5, 'gelatina de agua con tu personaje favorito', 'imagenes/gelapersonaje.jpg'),
(62, 'gelatina de  leche', 150.5, 'gelatina de leche pura ', 'imagenes/gelaleche.jpg'),
(63, 'gelatina de kiwi', 150.5, 'gelatina de agua con  kiwi fresco', 'imagenes/gelakiwi.jpg'),
(64, 'gelatina de frambueza', 150.5, 'gelatina de leche con trozos de frembueza', 'imagenes/gelaframbueza.jpg'),
(65, 'gelatina de mosaico', 150.5, 'gelatina a base de  leche y cubitos de gelatina de fresa,limon,mango y uva', 'imagenes/gelamosaico.jpg'),
(66, 'gelatina de coco', 150.5, 'gelatina de leche con vainilla y coco rayado', 'imagenes/gelacoco.jpg'),
(67, 'gelatina de tamarindo', 150.5, 'gelatina de agua elaborada con tamarindo y uvas naturales', 'imagenes/gelatamarindo.jpg'),
(68, 'gelatina de piña', 150.5, 'gelatina de leche de vaca  y  extracto de piña', 'imagenes/gela.jpg'),
(69, 'gelatina de yoghurt', 150.5, 'gelatina de yoghurt natural con fresas frescas', 'imagenes/gelayoghurt.jpg'),
(70, 'gelatina de limon', 150.5, 'gelatina de limon con ralladura exotica y trozos de pepino', 'imagenes/gelalimon.jpg'),
(71, 'gelatina de naranja', 150.5, 'gelatina elaborada con naranja y decorada con mandarina', 'imagenes/gelanaranja.jpg'),
(72, 'gelatina de mango', 80.5, 'gelatina elaborada con mango natural y arandanos ', 'imagenes/gelamango.jpg'),
(73, 'gelatina light de fresa', 150.5, 'gelatina de  yoghurt light y fresa endulzado con splenda', 'imagenes/gelalightfresa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sucursales`
--

CREATE TABLE IF NOT EXISTS `sucursales` (
  `nombre` char(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `imagen` varchar(150) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sucursales`
--

INSERT INTO `sucursales` (`nombre`, `direccion`, `telefono`, `imagen`, `url`) VALUES
('delicias sol', 'plaza del sol local 1-a', '3312456895', 'imagenes/past1.png', 'https://www.google.com.mx/maps/place/Condominio+Plaza+Del+Sol/@20.650815,-103.4001127,17z/data=!4m2!3m1!1s0x0000000000000000:0x9b686541334ace72'),
('delicias universitarias', 'plaza universidad local 24c', '3315478965', 'imagenes/past2.png', 'https://www.google.com.mx/maps/place/Plaza+Universidad/@20.675507,-103.348159,19z/data=!4m2!3m1!1s0x8428b1fa96cb201b:0xadd072ee95215deb'),
('delicias municipales', 'parque municipal 45', '3456869574', 'imagenes/past3.png', 'https://www.google.com.mx/maps/place/Parque+Municipal/@19.2478358,-99.6051403,17z/data=!4m6!1m3!3m2!1s0x85cd8bb8fe8f5317:0xcf3b4b0e0a12aa7!2sSnap+Fitn'),
('delicias del cucei', 'revolucion 45', '3456788874', 'imagenes/past4.png', 'https://www.google.com.mx/maps/place/CUCEI:+Centro+Universitario+de+Ciencias+Exactas+e+Ingenierias+de+la+Universidad+de+Guadalajara/@20.656861,-103.32');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD CONSTRAINT `fk_pedido-producto_pedido1` FOREIGN KEY (`pedido_idpedido`) REFERENCES `pedido` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_Productos1` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
