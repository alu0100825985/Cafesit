-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-01-2017 a las 00:54:34
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alu4634`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIO`
--

CREATE TABLE `USUARIO` (
  `IDENTIFICADOR` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDOS` varchar(50) NOT NULL,
  `FECHA_NACIMIENTO` date NOT NULL,
  `SEXO` varchar(10) NOT NULL,
  `CORREO` varchar(50) NOT NULL,
  `TELEFONO` int(9) NOT NULL,
  `CONTRASENA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `USUARIO`
--

INSERT INTO `USUARIO` (`IDENTIFICADOR`, `NOMBRE`, `APELLIDOS`, `FECHA_NACIMIENTO`, `SEXO`, `CORREO`, `TELEFONO`, `CONTRASENA`) VALUES
(1, 'Eduardo', 'Escobar Alberto', '1995-02-13', 'Hombre', 'eduardo@cafesit.com', 635738380, 'admin'),
(2, 'Omar Adolfo', 'Álvarez Hernández', '1995-10-07', 'Hombre', 'omar@cafesit.com', 650338103, 'admin'),
(3, 'Luis David', 'Padilla Martín', '1995-09-08', 'Hombre', 'luisda@cafesit.com', 673849493, 'admin'),
(4, 'Olga María', 'Díaz Carrasco', '1995-10-12', 'Mujer', 'olga@cafesit.com', 674803300, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `VALORACION`
--

CREATE TABLE `VALORACION` (
  `CORREO` varchar(50) NOT NULL,
  `FECHA` date NOT NULL,
  `PLATO` varchar(30) NOT NULL,
  `COMENTARIO` varchar(100) NOT NULL,
  `ESTRELLAS` int(5) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `VALORACION`
--

INSERT INTO `VALORACION` (`CORREO`, `FECHA`, `PLATO`, `COMENTARIO`, `ESTRELLAS`) VALUES
('eduardo@cafesit.com', '2017-01-07', 'Arroz a la cubana', 'Estaba delicioso.', 5),
('eduardo@cafesit.com', '2016-12-23', 'Crema de legumbres', 'La verdad que no me ha gustado nada.', 1),
('omar@cafesit.com', '2017-01-08', 'Pasta en salsa', 'Me encanto, de lo mejor que he comido.', 4),
('omar@cafesit.com', '2016-12-13', 'Churros de pescado', 'Muy caro y además estaba bastante malo.', 1),
('eduardo@cafesit.com', '2017-01-08', 'Filete de pescado', 'Me encantó, la salsa que tenía estaba increíble.', 5),
('omar@cafesit.com', '2016-12-15', 'Carne con papas', 'Horrible, tenía demasiada sal.', 1),
('eduardo@cafesit.com', '2017-01-09', 'Ensaladilla', 'Estaba muy buena, además se notaba que era del día.', 5),
('eduardo@cafesit.com', '2016-12-19', 'Croquetas de pollo', 'No me gustaron nada, no eran caseras.', 2),
('eduardo@cafesit.com', '2016-12-11', 'Empanada de atún', 'Regular, el atún estaba bueno pero la masa no era de muy buena calidad.', 3),
('eduardo@cafesit.com', '2016-11-07', 'Huevos fritos con papas', 'Increíblemente delicioso.', 5),
('eduardo@cafesit.com', '2017-01-09', 'San Jacobo', 'Horrible. Casi no tenía queso y el sabor era muy malo.', 1),
('eduardo@cafesit.com', '2017-01-09', 'Pollo en salsa', 'Estaba muy bueno, la verdad que me encantó.', 5),
('eduardo@cafesit.com', '2017-01-09', 'Ensalada de cangrejo', 'Regular, el cangrejo estaba bueno, pero la salsa no era agradable.', 3),
('eduardo@cafesit.com', '2016-12-12', 'Lentejas', 'Bastante malo, se notaba que no tenía sal.', 1),
('eduardo@cafesit.com', '2017-01-09', 'Lentejas', 'Estaba regular, se podía comer.', 3),
('eduardo@cafesit.com', '2017-01-09', 'Lentejas', 'No me gustaron mucho, pero bueno, hice el esfuerzo.', 2),
('eduardo@cafesit.com', '2016-12-20', 'Sopa de pescado', 'Faltaba un poco de sal, pero de resto muy muy buena.', 4),
('eduardo@cafesit.com', '2016-11-18', 'Pescado con papas', 'Algo malo, aunque se podía comer.', 2),
('eduardo@cafesit.com', '2016-12-20', 'Filete de pescado', 'Bastante bueno, aunque se podría mejorar.', 4),
('eduardo@cafesit.com', '2017-01-09', 'Crema de calabaza', 'Muy malo, no me gustó nada.', 1),
('eduardo@cafesit.com', '2016-11-12', 'Albondigas', 'Decentes, no estaban muy buenas la verdad.', 2),
('eduardo@cafesit.com', '2017-01-08', 'Palitos de merluza', 'Muy muy buenos, no me quejo de nada.', 5),
('eduardo@cafesit.com', '2017-01-09', 'San Jacobo', 'Malísimo, de lo peor que he probado en esta cafetería.', 1),
('eduardo@cafesit.com', '2017-01-10', 'Crema de legumbres', 'No me gustó nada, estaba soso.', 1),
('eduardo@cafesit.com', '2017-01-10', 'Pescado salado', 'La salsa no estaba muy buena, pero el pescado si.', 3),
('eduardo@cafesit.com', '2017-01-10', 'Pechuga con papas fritas', 'Muy muy bueno, la pechuga estaba increíble.', 5),
('eduardo@cafesit.com', '2017-01-10', 'Papas con mojo', 'El mojo no servía para nada, estaba malísimo.', 1),
('eduardo@cafesit.com', '2017-01-10', 'Arroz con huevo', 'Muy muy bueno, de sabor estaba increíble.', 5),
('eduardo@cafesit.com', '2017-01-09', 'Crema de acelgas', 'Malísima, de sabor estaba horrible', 1),
('eduardo@cafesit.com', '2017-01-08', 'Hamburguesa ', 'Regular, le faltaban más salsas.', 3),
('eduardo@cafesit.com', '2017-01-10', 'Filete de ternera', 'No me gustó, aunque bueno, se podía comer la verdad.', 2),
('eduardo@cafesit.com', '2017-01-10', 'Tortilla de papas', 'Muy buena, aunque le faltaba un poco de sal.', 4),
('eduardo@cafesit.com', '2017-01-08', 'Tortilla francesa', 'Regular, estaba un poco fría.', 3),
('eduardo@cafesit.com', '2017-01-10', 'Rancho canario', 'Bastante malo, en nada se parece al de mi abuela.', 1),
('eduardo@cafesit.com', '2017-01-10', 'Pechuga con papas fritas', 'No me gustó mucho, aunque las papas fritas no estaban malas.', 2),
('eduardo@cafesit.com', '2017-01-10', 'Huevos con bacalao', 'Bastante buenos, aunque diría que el bacalao estaba un poco crudo.', 4),
('eduardo@cafesit.com', '2017-01-09', 'Tortilla de espinacas', 'Buenísimo, no me esperaba algo así en la cafetería.', 5),
('eduardo@cafesit.com', '2017-01-10', 'Pescado salado', 'No me convenció mucho, aunque me lo esperaba peor.', 2),
('eduardo@cafesit.com', '2016-11-27', 'Papas con mojo', 'Regular, el sabor no estaba muy allá.', 3),
('eduardo@cafesit.com', '2017-01-09', 'Ensaladilla', 'Horrible, de lo peor que he probado.', 1),
('eduardo@cafesit.com', '2017-01-08', 'Hamburguesa ', 'Muy buena.', 5),
('eduardo@cafesit.com', '2016-01-07', 'Arroz a la cubana', 'Delicioso, de lo mejor que he probado.', 3),
('olga@cafesit.com', '2017-01-10', 'Rancho canario', 'Estaba muy malo.', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`IDENTIFICADOR`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  MODIFY `IDENTIFICADOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
