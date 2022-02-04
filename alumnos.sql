create database alumnos;

use alumnos;

CREATE TABLE `datos` (
  `id` varchar(7) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `promedio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


  
  INSERT INTO `datos` (`id`, `nombre`, `apellidos`, `matricula`,`status`,`promedio`) VALUES
('1', 'Ana Karen', 'Baez Muñoz','201721362','Regular',8);