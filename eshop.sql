-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2020 a las 02:11:20
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventas`
--

CREATE TABLE `detalleventas` (
  `id` int(11) NOT NULL,
  `idventa` int(11) NOT NULL,
  `idproductos` int(11) NOT NULL,
  `preciounitario` decimal(20,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalleventas`
--

INSERT INTO `detalleventas` (`id`, `idventa`, `idproductos`, `preciounitario`, `cantidad`) VALUES
(47, 39, 1, '100.00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `precio` double(20,2) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `imagen`) VALUES
(1, 'Iphone X', 100.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt volutpat arcu, eu convallis mi molestie in. Quisque vitae finibus lacus. Mauris leo leo, bibendum egestas urna eu, hendrerit porttitor metus. Proin vitae neque enim. Phasellus ipsum mauris, vehicula quis justo eget, pellentesque interdum metus. Fusce urna enim, convallis vel dictum vel, sollicitudin at diam. Pellentesque a auctor justo. Pellentesque quis eros porttitor nibh pharetra finibu', 'https://i.blogs.es/711aa5/iphone-x-precio-y-disponibilidad/450_1000.jpg'),
(3, 'Motorola g6', 50.00, 'Mauris erat ex, imperdiet et vestibulum non, posuere id erat. Duis hendrerit sapien eros, sit amet gravida risus volutpat eget. Sed vestibulum ultrices tortor, vitae efficitur lacus aliquam vitae.', 'https://i.blogs.es/82c915/moto-g6/840_560.jpg'),
(5, 'Motorola g8', 200.00, 'Curabitur suscipit lectus a orci pretium dignissim. Praesent nec suscipit ipsum. Vivamus suscipit, dolor a viverra vehicula, purus turpis placerat ipsum, sit amet scelerisque', 'https://i.blogs.es/fad653/moto-g8/1366_2000.jpg'),
(6, 'Iphone XL', 300.00, 'Suspendisse at lectus dignissim, commodo nibh a, ultricies elit. Cras ut nibh sit amet est congue semper eget et sem. Donec et felis sodales, hendrerit neque vel, lobortis est.', 'https://images.oneclickstore.com/images/MWLU2LE-A.jpg'),
(7, 'Samsung Galaxy A21s', 100.00, 'Nunc eleifend, justo non sollicitudin euismod, orci erat vestibulum nisi, eget feugiat massa nulla eget ex. Nunc at risus ut nisl hendrerit mollis. Nulla consequat metus eu mauris consequat,', 'https://images-na.ssl-images-amazon.com/images/I/71DkgRbnuzL._AC_SX679_.jpg'),
(8, 'Samsung Galaxy  A10', 150.00, '. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras mattis ultricies orci eget lobortis. Nam auctor ipsum eu lorem dapibus,', 'https://images-na.ssl-images-amazon.com/images/I/61PHLShYQTL._AC_SL1500_.jpg'),
(9, 'Moto e6 Plus', 200.00, 'Suspendisse at lectus dignissim, commodo nibh a, ultricies elit. Cras ut nibh sit amet est congue semper eget et sem. Donec et felis sodales, h', 'https://www.carrefour.com.ar/media/catalog/product/cache/2/image/1000x/040ec09b1e35df139433887a97daa66f/7/7/7790894899042_01.jpg'),
(10, 'Iphone 12', 400.00, 'Sed ac lorem eget leo ornare venenatis. Donec sollicitudin ipsum a eleifend vulputate. Donec eu justo at risus ultricies feugiat ut quis nibh.', 'https://i.blogs.es/545856/ceaca7f9-f125-4716-8bf0-ae2aae150580/450_1000.jpeg'),
(11, 'Iphone 6', 70.00, 'Cras placerat at ligula vel vestibulum. Nulla eu bibendum eros. Mauris mi dolor, varius ut mollis in, egestas nec nunc. Quisque rutrum magna posuere ornare luctus. ', 'https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP706/SP706-iphone_6_plus-mul.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` int(50) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `email`) VALUES
(1, 'ignacio', 3627909, 'nacho_2009_xp@hotmail.com'),
(2, 'matias', 3627909, 'matias@outlook.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `clavetransaccion` varchar(250) NOT NULL,
  `paypaldatos` text NOT NULL,
  `fecha` datetime NOT NULL,
  `correo` varchar(300) NOT NULL,
  `total` decimal(60,2) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `clavetransaccion`, `paypaldatos`, `fecha`, `correo`, `total`, `status`) VALUES
(39, 't1t9pn9mjviut5cm44cfvsecbg', '{\"id\":\"PAYID-L6U56ZQ1TB10048SR225282W\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"83M16529LS9662011\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-434ytj3388403@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"BFR6N6V6NN3XS\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"Free Trade Zone\",\"city\":\"Buenos Aires\",\"state\":\"Buenos Aires\",\"postal_code\":\"B1675\",\"country_code\":\"AR\"},\"phone\":\"5490452283\",\"country_code\":\"AR\"}},\"transactions\":[{\"amount\":{\"total\":\"100.00\",\"currency\":\"USD\",\"details\":{\"subtotal\":\"100.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"NZCB4TF22P2NW\",\"email\":\"sb-urrzi3350434@personal.example.com\"},\"description\":\"Compra de productos a Mi tienda:$ 100.00\",\"custom\":\"t1t9pn9mjviut5cm44cfvsecbg#+KB8kMRKplO9YlWtnne+3w==\",\"soft_descriptor\":\"PAYPAL *SBURRZI3350\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"Free Trade Zone\",\"city\":\"Buenos Aires\",\"state\":\"Buenos Aires\",\"postal_code\":\"B1675\",\"country_code\":\"AR\"}},\"related_resources\":[{\"sale\":{\"id\":\"057007271K3247730\",\"state\":\"completed\",\"amount\":{\"total\":\"100.00\",\"currency\":\"USD\",\"details\":{\"subtotal\":\"100.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"5.70\",\"currency\":\"USD\"},\"parent_payment\":\"PAYID-L6U56ZQ1TB10048SR225282W\",\"create_time\":\"2020-11-10T00:32:03Z\",\"update_time\":\"2020-11-10T00:32:03Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/057007271K3247730\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/057007271K3247730/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L6U56ZQ1TB10048SR225282W\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *SBURRZI3350\"}}]}],\"create_time\":\"2020-11-10T00:31:34Z\",\"update_time\":\"2020-11-10T00:32:03Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-L6U56ZQ1TB10048SR225282W\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2020-11-09 21:31:28', 'micaela_genitrini@yahoo.com', '100.00', 'completo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idventa` (`idventa`),
  ADD KEY `idproductos` (`idproductos`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD CONSTRAINT `detalleventas_ibfk_1` FOREIGN KEY (`idventa`) REFERENCES `ventas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalleventas_ibfk_2` FOREIGN KEY (`idproductos`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
