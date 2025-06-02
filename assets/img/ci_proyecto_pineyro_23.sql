-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2023 a las 04:16:28
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ci_proyecto_pineyro_23`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID` int(12) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID`, `Nombre`, `Descripcion`, `Activo`) VALUES
(1, 'Congelados', 'Productos congelados.', 1),
(2, 'Repostería', 'Tortas, budines, postres y mas.', 1),
(3, 'Sandwicheria', 'Sándwiches, hamburguesas, choris y demás.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `ID` int(12) NOT NULL,
  `Nombre_Usuario` varchar(50) NOT NULL,
  `Email_Usuario` varchar(50) NOT NULL,
  `Asunto` varchar(30) NOT NULL,
  `Consulta` varchar(200) NOT NULL,
  `Contestado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`ID`, `Nombre_Usuario`, `Email_Usuario`, `Asunto`, `Consulta`, `Contestado`) VALUES
(4, 'Juan Martin', 'algo@ejemplo', 'asunto', 'Hola, esto es una consulta. Debería ser visible mi nombre y mi email falso.', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `ID` int(12) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `EmailUsuario` varchar(50) NOT NULL,
  `Asunto` varchar(30) NOT NULL,
  `Contacto` varchar(200) NOT NULL,
  `Contestado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`ID`, `Nombre`, `EmailUsuario`, `Asunto`, `Contacto`, `Contestado`) VALUES
(1, 'Juan Martin', 'juanpineyro199528@gmail.com', 'Un Asunto', 'Esta es una consulta a través de Contacto. Osea que puedo enviarla sin ser un usuario registrado.', 0),
(2, 'juan', 'juan@gmail', 'asunto', 'asdufgabfbargbaetbhsetghtnwrtnh', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesfactura`
--

CREATE TABLE `detallesfactura` (
  `ID` int(12) NOT NULL,
  `ID_Factura` int(12) NOT NULL,
  `ID_Producto` int(12) NOT NULL,
  `Cantidad_producto` int(5) NOT NULL,
  `Precio_Producto` int(12) NOT NULL,
  `Subtotal` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallesfactura`
--

INSERT INTO `detallesfactura` (`ID`, `ID_Factura`, `ID_Producto`, `Cantidad_producto`, `Precio_Producto`, `Subtotal`) VALUES
(34, 21, 6, 1, 2000, 2000),
(35, 21, 5, 1, 1500, 1500),
(36, 23, 5, 2, 1500, 3000),
(37, 23, 7, 1, 1200, 1200),
(38, 24, 7, 2, 1200, 2400),
(39, 24, 3, 1, 800, 800),
(40, 25, 1, 1, 5000, 5000),
(41, 25, 7, 2, 1200, 2400),
(42, 26, 4, 2, 1500, 3000),
(43, 26, 3, 1, 800, 800),
(44, 27, 1, 2, 5000, 10000),
(45, 28, 9, 1, 5000, 5000),
(46, 29, 9, 1, 5000, 5000),
(47, 29, 6, 1, 2000, 2000),
(48, 30, 5, 2, 1500, 3000),
(49, 31, 4, 1, 1500, 1500),
(50, 32, 6, 2, 2000, 4000),
(51, 32, 1, 1, 5000, 5000),
(52, 33, 11, 1, 1500, 1500),
(53, 35, 9, 1, 5000, 5000),
(54, 36, 6, 2, 2000, 4000),
(55, 37, 3, 4, 800, 3200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID_Venta` int(12) NOT NULL,
  `ID_Usuario` int(12) NOT NULL,
  `Nombre_Usuario` varchar(50) NOT NULL,
  `ImporteTotal` int(6) NOT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`ID_Venta`, `ID_Usuario`, `Nombre_Usuario`, `ImporteTotal`, `Fecha`) VALUES
(21, 6, 'Mengano', 3500, '2023-06-11'),
(22, 6, 'Mengano', 0, '2023-06-11'),
(23, 1, 'Juan Martin', 4200, '2023-06-11'),
(24, 1, 'Juan Martin', 3200, '2023-06-11'),
(25, 5, 'Fulano', 7400, '2023-06-12'),
(26, 3, 'Fulano', 3800, '2023-06-12'),
(27, 3, 'Fulano', 10000, '2023-06-12'),
(28, 3, 'Fulano', 5000, '2023-06-12'),
(29, 1, 'Juan Martin', 7000, '2023-06-12'),
(30, 6, 'Mengano', 3000, '2023-06-12'),
(31, 3, 'Fulano', 1500, '2023-06-12'),
(32, 1, 'Juan Martin', 9000, '2023-06-13'),
(33, 1, 'Juan Martin', 1500, '2023-06-13'),
(34, 1, 'Juan Martin', 0, '2023-06-13'),
(35, 1, 'Juan Martin', 5000, '2023-06-13'),
(36, 1, 'Juan Martin', 4000, '2023-06-13'),
(37, 5, '', 3200, '2023-06-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID` int(11) NOT NULL,
  `ID_Categoria` int(2) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Precio` int(12) NOT NULL,
  `Imagen` varchar(100) NOT NULL,
  `Imagen2` varchar(100) DEFAULT NULL,
  `Imagen3` varchar(100) DEFAULT NULL,
  `Activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID`, `ID_Categoria`, `Nombre`, `Descripcion`, `Precio`, `Imagen`, `Imagen2`, `Imagen3`, `Activo`) VALUES
(1, 2, 'Torta Personalizada', 'Torta de cumpleaños personalizada.', 5000, 'CI_proyecto_pineyro_23/assets/img/menu/torta1.1.jpg', 'CI_proyecto_pineyro_23/assets/img/menu/torta1.2.jpg', 'CI_proyecto_pineyro_23/assets/img/menu/torta1.3.jpg', 1),
(2, 2, 'Torta Especial', 'Torta Especial.....................................................', 7000, 'CI_proyecto_pineyro_23/assets/img/menu/torta2.1.jpg', 'CI_proyecto_pineyro_23/assets/img/menu/torta2.2.jpg', 'CI_proyecto_pineyro_23/assets/img/menu/torta2.3.jpg', 1),
(3, 1, 'Croquetas 500g', 'Croquetas elevoradas de garvanzo, acelga y condimentos.', 800, 'CI_proyecto_pineyro_23/assets/img/menu/con1.jpg', '', '', 1),
(4, 3, 'Completo de Berenjena', 'Pan de masa madre, lechuga, tomate, morrones, queso vegano, aderesos veganos.', 1500, 'CI_proyecto_pineyro_23/assets/img/menu/san1.jpg', '', '', 1),
(5, 3, 'Completo de Soja', 'Lechuga, tomate, zanahoria rallada, queso vegano, adhereso vegano.', 1500, 'CI_proyecto_pineyro_23/assets/img/menu/san2.jpg', '', '', 1),
(6, 1, 'Chipa Vegano 500g ', 'Chipa Vegano 500g. Elaborado con queso de soja.', 2000, 'CI_proyecto_pineyro_23/assets/img/menu/con2.jpg', '', '', 1),
(7, 1, 'Bocaditos de Soja 500g', 'Bocaditos de Soja: espinaca, condimentos.', 1200, 'CI_proyecto_pineyro_23/assets/img/menu/con3.jpg', '', '', 1),
(8, 3, 'Chori Vegano', 'Elaborado completamente vegano. Con o sin Chimichurri.', 3000, 'CI_proyecto_pineyro_23/assets/img/menu/san3.jpg', '', '', 1),
(9, 2, 'Budin de zanahoria', 'Budin de zanahoria. etc etc etc etc etc etc etc', 5000, 'CI_proyecto_pineyro_23/assets/img/menu/budin1.1.jpg', 'CI_proyecto_pineyro_23/assets/img/menu/budin1.2.jpg', 'CI_proyecto_pineyro_23/assets/img/menu/budin1.3.jpg', 1),
(11, 1, 'Alfajorcitos de Maizena 500g', 'Elaborados con dulce de leche vegano.', 1500, 'CI_proyecto_pineyro_23/assets/img/menu/con4.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID` int(12) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID`, `Nombre`, `Descripcion`, `Activo`) VALUES
(1, 'Cliente', 'Cliente es el que compra y recorre la página.', 1),
(2, 'Administrador', 'El que administra la pagina. No puede comprar porque no es cliente. Tiene acceso a las bases de Datos de la pagina.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(12) NOT NULL,
  `ID_Rol` int(1) NOT NULL,
  `Activo` tinyint(1) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `DNI` int(12) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `calle` varchar(30) NOT NULL,
  `numero` int(5) NOT NULL,
  `localidad` varchar(30) NOT NULL,
  `CodPostal` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `ID_Rol`, `Activo`, `Nombre`, `Apellido`, `DNI`, `Telefono`, `email`, `Password`, `calle`, `numero`, `localidad`, `CodPostal`) VALUES
(1, 1, 1, 'Juan Martin', 'Piñeyro', 129846518, '4521552', 'algo@ejemplo', '12345', 'calle1', 123, 'Corrientes', 3400),
(2, 2, 1, 'Juan Martin', 'Piñeyro', 4498416, '194618181', 'juanejemplo@algo', '12345', 'calle', 456, 'Corrientes', 3400),
(3, 1, 1, 'Fulano', 'Detal', 51641516, '4651651561', 'fulano@correo', '12345', 'Calles', 456, 'Corrientes', 3400),
(4, 2, 1, 'Juan Martin', 'Dos', 2147483647, '56865168468', 'juanejemplodos@algo', '12345', 'calledos', 5161, 'Corrientes', 3400),
(5, 1, 1, 'Fulano', 'Alguien', 21844684, '81681514', 'fulano2@correo', '12345', 'calle algo', 456, 'Corrientes', 3400),
(6, 1, 1, 'Mengano', 'Tal', 2147483647, '125347852134', 'mengano@algo', '12345', 'calle algo', 456, 'Corrientes', 4000),
(9, 1, 1, 'Pepe', 'cualquiera', 298586141, '186513168', 'pepe@gmail', '12345678', 'calles', 456, 'corrientes', 4997),
(11, 1, 1, 'pepe2', 'cualquiera', 2147483647, '6541818', 'pepe2@gmail', '12345678', 'calles', 456, 'corrientes', 561),
(12, 1, 1, 'juan', 'pineiro', 18464644, '4516611', 'algo2@ejemplo', '12345678', 'calle algo', 456, 'corrientes', 3400),
(13, 1, 1, 'juan', 'cualquiera', 2147483647, '236542433', 'algo3@ejemplo', '12345678', 'calle algo', 654, 'algo', 3400);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `detallesfactura`
--
ALTER TABLE `detallesfactura`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Factura` (`ID_Factura`),
  ADD KEY `ID_Producto` (`ID_Producto`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`ID_Venta`),
  ADD KEY `ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Categoria` (`ID_Categoria`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Rol` (`ID_Rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detallesfactura`
--
ALTER TABLE `detallesfactura`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `ID_Venta` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallesfactura`
--
ALTER TABLE `detallesfactura`
  ADD CONSTRAINT `detallesfactura_ibfk_1` FOREIGN KEY (`ID_Factura`) REFERENCES `factura` (`ID_Venta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detallesfactura_ibfk_2` FOREIGN KEY (`ID_Producto`) REFERENCES `producto` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`ID_Categoria`) REFERENCES `categoria` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ID_Rol`) REFERENCES `roles` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
