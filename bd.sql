-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dei`
--

-- --------------------------------------------------------

--
-- Table structure for `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
`id` int NOT NULL,
  `room` varchar(255) NOT NULL,
   `block` varchar(10) NOT NULL,
    `floor` int NOT NULL,
    `tower` varchar(255) NOT NULL,
    `typology` varchar(255) NOT NULL,
    `name` varchar(255) NULL,
    `pos_x` varchar(255) NOT NULL,
    `pos_y` varchar(255) NOT NULL,
    `zoom` varchar(255) NOT NULL

) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;

--
-- Data for the table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `floor`, `tower`, `typology`, `name`, `pos_x`, `pos_y`, `zoom`) VALUES
(1, 'A4.3', 4, 'A', 'services', 'Bar', NULL, NULL, NULL),
(2, 'A5.4', 5, 'A', 'study room', 'Sala de Estudo', NULL, NULL, NULL),
(3, 'A6.1', 6, 'A', 'study room', 'Sala de Estudo', NULL, NULL, NULL),
(4, 'B1', 4, 'B', 'classroom', 'Anfiteatro B1', NULL, NULL, NULL),
(5, 'B2', 5, 'B', 'classroom', 'Anfiteatro B2', NULL, NULL, NULL),
(6, 'C4.1', 4, 'C', 'study room', 'Sala de Estudo', NULL, NULL, NULL),
(7, 'C4.2', 4, 'C', 'meeting room', 'Sala de Convívio', NULL, NULL, NULL),
(8, 'C4.3', 4, 'C', 'services', 'NEI — Núcleo de Estudantes de Informática', NULL, NULL, NULL),
(9, 'C4.4', 4, 'C', 'study room', 'Sala de Estudo', NULL, NULL, NULL),
(10, 'C4.5', 4, 'C', 'study room', 'Sala de Estudo', NULL, NULL, NULL),
(11, 'C4.6', 4, 'C', 'study room', 'Sala de Estudo', NULL, NULL, NULL),
(12, 'C5.1', 5, 'C', 'classroom', NULL, NULL, NULL, NULL),
(13, 'C5.2', 5, 'C', 'classroom', NULL, NULL, NULL, NULL),
(14, 'C5.3', 5, 'C', 'classroom', NULL, NULL, NULL, NULL),
(15, 'C5.4', 5, 'C', 'classroom', NULL, NULL, NULL, NULL),
(16, 'C6.1', 6, 'C', 'laboratory', 'CISUC-CRS', NULL, NULL, NULL),
(17, 'C6.2', 6, 'C', 'laboratory', 'CISUC-SSE', NULL, NULL, NULL),
(18, 'C6.3', 6, 'C', 'laboratory', 'CISUC-IS', NULL, NULL, NULL),
(19, 'C6.4', 6, 'C', 'laboratory', 'Lab. de Sistemas Multimédia', NULL, NULL, NULL),
(20, 'C6.5', 6, 'C', 'laboratory', 'CISUC-CRS', NULL, NULL, NULL),
(21, 'C6.6', 6, 'C', 'laboratory', 'CISUC-AC', NULL, NULL, NULL),
(22, 'D1.1', 1, 'D', 'services', 'Secretaria', NULL, NULL, NULL),
(23, 'D1.2', 1, 'D', NULL, NULL, NULL, NULL, NULL),
(24, 'D1.3', 1, 'D', 'services', 'Reprografia', NULL, NULL, NULL),
(25, 'D1.4', 1, 'D', 'services', 'GAPI — Gabinete de Apoio a Projectos', NULL, NULL, NULL),
(26, 'D1.5', 1, 'D', 'staff', 'Sala de Reuniões', NULL, NULL, NULL),
(27, 'D1.6', 1, 'D', 'staff', 'Sala de Vídeoconferência', NULL, NULL, NULL),
(28, 'D1.7', 1, 'D', 'staff', 'Sala de Vídeoconferência', NULL, NULL, NULL),
(29, 'D1.8', 1, 'D', 'offices', NULL, NULL, NULL, NULL),
(30, 'D1.9', 1, 'D', 'offices', NULL, NULL, NULL, NULL),
(31, 'D1.10', 1, 'D', 'staff', 'Sala de Funcionários', NULL, NULL, NULL),
(32, 'D1.11', 1, 'D', 'offices', NULL, NULL, NULL, NULL),
(33, 'D1.12', 1, 'D', 'offices', NULL, NULL, NULL, NULL),
(34, 'D1.13', 1, 'D', 'offices', NULL, NULL, NULL, NULL),
(35, 'D1.14', 1, 'D', 'laboratory', 'CISUC Investigadores Externos', NULL, NULL, NULL),
(36, 'D1.15', 1, 'D', 'offices', NULL, NULL, NULL, NULL),
(36, 'D1.16', 1, 'D', 'offices', NULL, NULL, NULL, NULL),
(37, 'D1.17', 1, 'D', 'laboratory', 'PhD Lounge', NULL, NULL, NULL),
(38, 'D1.18', 1, 'D', 'offices', NULL, NULL, NULL, NULL),
(39, 'D1.19', 1, 'D', 'offices', NULL, NULL, NULL, NULL),
(40, 'D2.1', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(41, 'D2.2', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(42, 'D2.3', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(43, 'D2.4', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(44, 'D2.5', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(45, 'D2.6', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(46, 'D2.7', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(47, 'D2.8', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(48, 'D2.9', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(49, 'D2.10', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(50, 'D2.11', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(51, 'D2.12', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(52, 'D2.13', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(53, 'D2.14', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(54, 'D2.15', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(55, 'D2.16', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(56, 'D2.17', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(57, 'D2.18', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(58, 'D2.19', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(59, 'D2.20', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(60, 'D2.21', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(61, 'D2.22', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(62, 'D2.23', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(63, 'D2.24', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(64, 'D2.25', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(65, 'D2.26', 2, 'D', 'offices', NULL, NULL, NULL, NULL),
(66, 'D3.1', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(67, 'D3.2', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(68, 'D3.3', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(69, 'D3.4', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(70, 'D3.5', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(71, 'D3.6', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(72, 'D3.7', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(73, 'D3.8', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(74, 'D3.9', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(75, 'D3.10', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(76, 'D3.11', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(77, 'D3.12', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(78, 'D3.13', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(79, 'D3.14', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(80, 'D3.15', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(81, 'D3.16', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(82, 'D3.17', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(83, 'D3.18', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(84, 'D3.19', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(85, 'D3.20', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(86, 'D3.21', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(87, 'D3.22', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(88, 'D3.23', 3, 'D', 'offices', NULL, NULL, NULL, NULL),
(89, 'E4.1', 4, 'E', 'classroom', NULL, NULL, NULL, NULL),
(90, 'E4.2', 4, 'E', 'classroom', NULL, NULL, NULL, NULL),
(91, 'E4.3', 4, 'E', 'classroom', NULL, NULL, NULL, NULL),
(92, 'E4.4', 4, 'E', 'classroom', NULL, NULL, NULL, NULL),
(93, 'E4.5', 4, 'E', 'classroom', NULL, NULL, NULL, NULL),
(94, 'E4.6', 4, 'E', 'classroom', NULL, NULL, NULL, NULL),
(95, 'E4.7', 4, 'E', 'classroom', NULL, NULL, NULL, NULL),
(96, 'E5.1', 5, 'E', 'laboratory', 'CISUC-ECOS', NULL, NULL, NULL),
(97, 'E5.2', 5, 'E', 'laboratory', 'CISUC-SSE', NULL, NULL, NULL),
(98, 'E5.3', 5, 'E', 'laboratory', 'CISUC-SSE', NULL, NULL, NULL),
(99, 'E5.4', 5, 'E', 'laboratory', 'CISUC-LCT', NULL, NULL, NULL),
(100, 'E5.5', 5, 'E', 'services', 'Sala Serviços CISUC', NULL, NULL, NULL),
(101, 'E5.6', 5, 'E', 'laboratory', 'CISUC-SSE', NULL, NULL, NULL),
(102, 'E5.7', 5, 'E', 'laboratory', 'CISUC-SSE', NULL, NULL, NULL),
(103, 'E5.8', 5, 'E', 'laboratory', 'CISUC-ECOS', NULL, NULL, NULL),
(104, 'E6.1', 6, 'E', 'classroom', NULL, NULL, NULL, NULL),
(105, 'E6.2', 6, 'E', 'laboratory', 'CISUC-AC', NULL, NULL, NULL),
(106, 'E6.3', 6, 'E', 'laboratory', 'CISUC-AC', NULL, NULL, NULL),
(107, 'E6.4', 6, 'E', 'laboratory', 'CISUC-AC', NULL, NULL, NULL),
(108, 'E6.5', 6, 'E', 'laboratory', 'CISUC-CRS', NULL, NULL, NULL),
(109, 'F1.1', 1, 'F', 'offices', 'Sala de Professores', NULL, NULL, NULL),
(110, 'F1.2', 1, 'F', NULL, NULL, NULL, NULL, NULL),
(111, 'F1.4', 1, 'F', 'staff', 'Bar CISUC', NULL, NULL, NULL),
(112, 'F2.1', 2, 'F', 'offices', 'Sala de Professores Convidados', NULL, NULL, NULL),
(113, 'F2.2', 2, 'F',  'laboratory', 'TOEFL', NULL, NULL, NULL),
(114, 'F2.3', 2, 'F', 'laboratory', 'MSE - Sala 2', NULL, NULL, NULL),
(115, 'G4.1', 4, 'G', 'classroom', NULL, NULL, NULL, NULL),
(116, 'G4.2', 4, 'G', 'laboratory', 'Lab. de Informática Industrial e Sistemas', NULL, NULL, NULL),
(117, 'G4.3', 4, 'G', 'classroom', NULL, NULL, NULL, NULL),
(118, 'G4.4', 4, 'G', 'laboratory', 'LAGE - Lab. de Gestão', NULL, NULL, NULL),
(119, 'G4.5', 4, 'G', 'classroom', NULL, NULL, NULL, NULL),
(120, 'G4.6', 4, 'G', 'classroom', NULL, NULL, NULL, NULL),
(121, 'G5.1', 5, 'G', 'laboratory', 'Lab. de Comunicações e Telemática', NULL, NULL, NULL),
(122, 'G5.2', 5, 'G', 'classroom', NULL, NULL, NULL, NULL),
(123, 'G5.3', 5, 'G', 'classroom', NULL, NULL, NULL, NULL),
(124, 'G5.4.1', 5, 'G', NULL, NULL, NULL, NULL, NULL),
(125, 'G5.4.2', 5, 'G', NULL, NULL, NULL, NULL, NULL),
(126, 'G5.5', 5, 'G', 'classroom', NULL, NULL, NULL, NULL),
(127, 'G5.6', 5, 'G', 'classroom', NULL, NULL, NULL, NULL),
(128, 'G5.7', 5, 'G', 'classroom', NULL, NULL, NULL, NULL),
(129, 'G5.8', 5, 'G', 'classroom', NULL, NULL, NULL, NULL),
(130, 'G6.1', 6, 'G', 'laboratory', 'CISUC-LCT', NULL, NULL, NULL),
(131, 'G6.2', 6, 'G', 'laboratory', 'CISUC-LCT', NULL, NULL, NULL),
(132, 'G6.3', 6, 'G', 'staff', 'Gestores de Redes', NULL, NULL, NULL),
(133, 'G6.4', 6, 'G', 'services', 'Helpdesk', NULL, NULL, NULL),
(134, 'G6.5', 6, 'G', 'staff', 'Sala de Servidores', NULL, NULL, NULL),
(135, 'G6.6', 6, 'G', 'laboratory', 'CISUC-LCT', NULL, NULL, NULL),
(136, 'G6.7', 6, 'G', 'laboratory', 'CISUC-LCT', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `teacher_id` int NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_course` int(2) NOT NULL DEFAULT '3',
  `teacher_email` varchar(64)
  CONSTRAINT teacher_id PRIMARY KEY(teacher_id)
)
--
-- Data for the table `teachers`
--
INSERT INTO `teachers` (`teacher_id`, `teacher_name`, `teacher_course`, `teacher_email`) VALUES
(1, 'Alberto Jorge Lebre Cardoso', 1, 'alberto@dei.uc.pt'),
(2, 'Alcides Miguel Cachulo Aguiar Fonseca', 3, 'amaf@dei.uc.pt'),
(3, 'Alexandre Miguel dos Santos Martins Pinto', 3, 'ampinto@dei.uc.pt'),
(4, 'Álvaro Manuel Reis da Rocha', 3, 'amrocha@dei.uc.pt'),
(5, 'Ana Madalena de Sousa Vasconcelos Matos Boavida', 2, 'aboavida@dei.uc.pt'),
(6, 'António Dourado Pereira Correia', 1, 'dourado@dei.uc.pt'),
(7, 'António Jorge Costa Granjal', 1, 'jgranjal@dei.uc.pt'),
(8, 'António Jorge Silva Cardoso', 1, 'jcardoso@dei.uc.pt'),
(9, 'António José Nunes Mendes', 3, 'toze@dei.uc.pt'),
(10, 'António Manuel Sucena Silveira Gomes', 2, 'amgomes@dei.uc.pt'),
(11, 'Bernardete Martins Ribeiro', 1, 'bribeiro@dei.uc.pt'),
(12, 'Bruna Raquel Sousa', 2, 'bruna@dei.uc.pt'),
(13, 'Bruno Miguel Brás Cabral', 3, 'bcabral@dei.uc.pt'),
(14, 'Carlos Eduardo Delgado Cerqueira', 1, 'cedc@dei.uc.pt'),
(15, 'Carlos Manuel Mira da Fonseca', 1, 'cmfonsec@dei.uc.pt'),
(16, 'Carlos Manuel Robalo Lisboa Bento', 1, 'bento@dei.uc.pt'),
(17, 'Carlos Nuno Bizarro e Silva Laranjeiro', 1, 'cnl@dei.uc.pt'),
(18, 'César A. Teixeira', 1, 'cteixei@dei.uc.pt'),
(19, 'David Fonseca Palma', 2, 'dpalma@uc.pt'),
(20, 'Edmundo Heitor Silva Monteiro', 1, 'edmundo@dei.uc.pt'),
(21, 'Eduardo Miguel Morgado Nunes', 2, 'enunes@dei.uc.pt'),
(22, 'Ernesto Jorge Fernandes Costa', 3, 'ernesto@dei.uc.pt'),
(23, 'Fernando Amílcar Bandeira Cardoso', 1, 'amilcar@dei.uc.pt'),
(24, 'Fernando Jorge Penousal Martins Machado', 3, 'machado@dei.uc.pt'),
(25, 'Fernando José Barros Rodrigues Silva', 1, 'barros@dei.uc.pt'),
(26, 'Fernando Pedro Lopes Boavida Fernandes', 3, 'boavida@uc.pt'),
(27, 'Filipe João Boavida Mendonça Machado Araújo', 1, 'filipius@uc.pt'),
(28, 'Francisco Colunas Pereira Câmara Pereira', 3, 'camara@dei.uc.pt'),
(29, 'Henrique Santos Carmo Madeira', 1, 'henrique@dei.uc.pt'),
(30, 'Hugo Ricardo Gonçalo Oliveira', 3, 'hroliv@dei.uc.pt'),
(31, 'Joel Perdiz Arrais', 3, 'joelarrais@gmail.com'),
(32, 'Jorge Manuel Oliveira Henriques', 3, 'jh@dei.uc.pt'),
(33, 'Jorge Miguel Sá Silva', 3, 'sasilva@dei.uc.pt'),
(34, 'João Gabriel Monteiro Carvalho e Silva', NULL, NULL),
(35, 'João Manuel Frade Belo Bicker', 2, 'bicker@dei.uc.pt'),
(36, 'João Paulo da Silva Machado Garcia Vilela', 1, 'jpvilela@dei.uc.pt'),
(37, 'João Pedro Morais de Matos Moniz Ramos', 3, 'jpramos@dei.uc.pt'),
(38, 'João Proença Cunha', 2, 'jmacunha@dei.uc.pt'),
(39, 'Karen Bennett', 1, 'karen.bennett@netcabo.pt'),
(40, 'Licínio Gomes Roque', 3, 'lir@dei.uc.pt'),
(41, 'Luís Alexandre Serras Moura e Silva', 1, 'luis@dei.uc.pt'),
(42, 'Luís Filipe Santos Coelho Paquete', 3, 'paquete@dei.uc.pt'),
(43, 'Luís Filipe Vieira Cordeiro', 3, 'cordeiro@dei.uc.pt'),
(44, 'Luís Miguel Machado Lopes Macedo', 3, 'macedo@dei.uc.pt'),
(45, 'Marco Paulo Amorim Vieira', 1, 'mvieira@dei.uc.pt'),
(46, 'Maria José Patrício Marcelino', 3, 'zemar@dei.uc.pt'),
(47, 'Maria Teresa Ferreira Soares Mendes', 3, 'tmendes@dei.uc.pt'),
(48, 'Marília Pascoal Curado', 1, 'marilia@dei.uc.pt'),
(49, 'Mário Alberto Costa Zenha Rela', 1, 'mzrela@dei.uc.pt'),
(50, 'Nuno Alexandre Couceiro Pimenta', 1, 'nuno@dei.uc.pt'),
(51, 'Nuno Miguel Cabral Carreira Coelho', 2, 'ncoelho@dei.uc.pt'),
(52, 'Paul David Hardman', 2, 'phardman@dei.uc.pt'),
(53, 'Paulo Alexandre Ferreira Simões', 1, 'psimoes@dei.uc.pt'),
(54, 'Paulo Fernando Pereira Carvalho', 1, 'carvalho@dei.uc.pt'),
(55, 'Paulo Filipe de Jesus Mesquita', 2, 'fmesquita@dei.uc.pt'),
(56, 'Paulo Jorge Sousa Gomes', 1, 'pgomes@dei.uc.pt'),
(57, 'Paulo José Osório Rupino Cunha', 3, 'rupino@dei.uc.pt'),
(58, 'Pedro José Mendes Martins', 1, 'pjmm@dei.uc.pt'),
(59, 'Pedro Manuel Henriques da Cunha Abreu', 1, 'pha@dei.uc.pt'),
(60, 'Pedro Miguel Amaral Melo da Cruz', 2, 'pmcruz@dei.uc.pt'),
(61, 'Pedro Nuno San-Bento Furtado', 1, 'pnf@dei.uc.pt'),
(62, 'Raul André Brajczewski Barbosa', 3, 'rbarbosa@dei.uc.pt'),
(63, 'Rui Alexandre Neves Craveirinha', NULL, 'rui.craveirinha@gmail.com'),
(64, 'Rui Pedro Lourenço Miranda', 1, 'rmiranda@dei.uc.pt'),
(65, 'Rui Pedro Pinto Carvalho Paiva', 3, 'ruipedro@dei.uc.pt'),
(66, 'Tiago José dos Santos Martins da Cruz', 3, 'tjcruz@dei.uc.pt'),
(67, 'Tiago Rodrigues Baptista', 3, 'baptista@dei.uc.pt'),
(68, 'Vasco Nuno Sousa Simões Pereira', 3, 'vasco@dei.uc.pt');

-- --------------------------------------------------------

--
-- Table structure for `offices_hours`
--

CREATE TABLE IF NOT EXISTS `office_hours` (
  `hour_id` int NOT NULL AUTO_INCREMENT,
  `teacher_id` int NOT NULL,
  `room_id` int NOT NULL,
  `weekday` varchar(16) NOT NULL,
  `hour_begin` int NOT NULL,
  `hour_end` int NOT NULL,
  CONSTRAINT hour_id PRIMARY KEY(hour_id)
)

--
-- Data for the table `offices_hours`
--

INSERT INTO `office_hours` (`hour_id`, `teacher_id`, `room_id`, `weekday`, `hour_begin`, `hour_end` ) VALUES
(1, 2, 94, 'Sexta-Feira','10:00','12:00'),
(2, 3, 39, 'Quarta-Feira','14:00', '19:00'),
(3, 4, 73, 'Quarta-Feira','14:00','17:00'),
(4, 5, 103, 'Segunda-Feira','11:00','12:00'),
(5, 6, 65, 'Segunda-Feira','14:00','15:00'),
(6, 6, 65, 'Quarta-Feira','11:00','13:00'),
(7, 6, 65, 'Quinta-Feira','16:00','18:00'),
(8, 7, 82, 'Sexta-Feira','9:00','11:00'),
(9, 7, 82, 'Sexta-Feira','14:00','15:00'),
(10, 8, 54, 'Segunda-Feira','9:00','10:00'),
(11, 8, 54, 'Segunda-Feira','13:00','14:00'),
(12, 8, 54, 'Terça-Feira','11:00','12:00'),
(13, 8, 54, 'Terça-Feira','14:00','15:00'),
(14, 8, 54, 'Terça-Feira','17:00','18:00'),
(15, 9, 83, 'Segunda-Feira','12:00','13:30'),
(16, 9, 83, 'Segunda-Feira','12:00','13:00'),
(17, 10, 85, 'Segunda-Feira','16:00','18:00'),
(18, 10, 85, 'Quinta-Feira','18:00','20:00'),
(19, 12, 103, 'Quinta-Feira','11:00','13:00'),
(20, 13, 25, 'Terça-Feira','14:00','18:00'),
(21, 14, 77, 'Sexta-Feira','8:00','11:00'),
(22, 15, 44, 'Terça-Feira','9:00','13:00'),
(23, 15, 44, 'Quinta-Feira','17:00','19:00'),
(24, 16, 59, 'Segunda-Feira','12:30','15:00'),
(25, 16, 59, 'Sexta-Feira','14:30','17:00'),
(26, 17, 74, 'Sexta-Feira','14:00','16:00'),
(27, 17, 74, 'Sexta-Feira','18:00','19:00'),
(29, 18, 56, 'Quarta-Feira','9:00','12:00'),
(30, 19, 29, 'Terça-Feira','9:00','13:00'),
(31, 19, 29, 'Terça-Feira','18:00','19:00'),
(32, 20, 81, 'Terça-Feira','14:00','17:30'),
(33, 20, 81, 'Quinta-Feira','9:00','10:00'),
(34, 20, 81, 'Quinta-Feira','12:00','12:30'),
(35, 21, 103, 'Segunda-Feira','18:00','19:00'),
(36, 21, 84, 'Sexta-Feira','16:00','18:00'),
(37, 22, 66, 'Quinta-Feira','9:00','13:00'),
(38, 24, 55, 'Terça-Feira','11:00','13:00'),
(39, 24, 55, 'Terça-Feira','14:00','17:00'),
(40, 24, 55, 'Terça-Feira','11:00','13:00'),
(41, 24, 55, 'Terça-Feira','14:00','17:00'),
(42, 25, 34, 'Segunda-Feira','9:00','13:00'),
(43, 26, 61, 'Segunda-Feira','8:30','12:00'),
(44, 27, 35, 'Quinta-Feira','10:00','12:00'),
(45, 27, 35, 'Quinta-Feira','13:00','16:00'),
(46, 29, 62, 'Quinta-Feira','14:30','19:30'),
(47, 30, 43, 'Quarta-Feira','11:00','13:00'),
(48, 30, 43, 'Sexta-Feira','9:00','11:00'),
(49, 30, 43, 'Sexta-Feira','14:00','15:00'),
(50, 31, 41, 'Quarta-Feira','13:00','15:00'),
(51, 32, 31, 'Segunda-Feira','11:00','13:00'),
(52, 32, 31, 'Segunda-Feira','14:00','16:00'),
(53, 32, 31, 'Quinta-Feira','14:00','16:00'),
(54, 33, 79, 'Segunda-Feira','9:00','12:00'),
(55, 33, 79, 'Quinta-Feira','9:00','12:00'),
(56, 35, 103, 'Quinta-Feira','16:00','18:00'),
(57, 35, 103, 'Sexta-Feira','17:00','20:00'),
(58, 36, 69, 'Terça-Feira','10:00','15:00'),
(59, 37, 70, 'Quarta-Feira','9:00','11:00'),--
(60, 37, 70, 'Sexta-Feira','9:00','11:00'),--
(61, 38, 103, 'Sexta-Feira','9:00','11:00'),
(62, 40, 70, 'Terça-Feira','8:00','13:00'),
(63, 41, 104, 'Terça-Feira','16:00','20:00'),
(64, 42, 52, 'Sexta-Feira','9:00','12:00'),
(65, 44, 36, 'Quarta-Feira','14:00','17:00'),
(66, 44, 36, 'Sexta-Feira','14:00','16:00'),
(67, 45, 38, 'Terça-Feira','9:00','13:00'),
(68, 45, 38, 'Terça-Feira','9:00','10:00'),
(69, 46, 37, 'Quarta-Feira','14:00','18:30'),
(70, 48, 80, 'Segunda-Feira','14:00','18:00'),
(71, 49, 60, 'Quinta-Feira','11:00','13:00'),
(72, 49, 60, 'Sexta-Feira','11:00','15:00'),
(73, 49, 60, 'Sexta-Feira','17:00','18:00'),
(74, 50, 110, 'Segunda-Feira','20:00','21:00'),
(75, 50, 119, 'Quinta-Feira','20:00','21:00'),
(76, 51, 103, 'Quarta-Feira','10:00','11:00'),
(77, 51, 103, 'Quinta-Feira','11:00','13:00'),
(78, 51, 103, 'Sexta-Feira','11:00','13:00'),
(79, 52, 103, 'Terça-Feira','12:00','13:00'),
(80, 52, 103, 'Quinta-Feira','9:00','11:00'),
(81, 53, 76, 'Sexta-Feira','9:00','10:00'),
(82, 53, 76, 'Sexta-Feira','12:00','13:00'),
(83, 54, 42, 'Terça-Feira','14:00','18:00'),
(84, 54, 42, 'Quinta-Feira','12:00','13:00'),
(85, 55, 104, 'Sexta-Feira','17:00','20:00'),
(86, 56, 49, 'Segunda-Feira','10:00','13:00'),
(87, 57, 53, 'Segunda-Feira','13:00','16:00'),
(88, 57, 53, 'Sexta-Feira','14:00','15:00'),
(89, 57, 53, 'Sexta-Feira','19:00','20:00'),
(90, 58, 77, 'Terça-Feira','11:00','12:00'),
(91, 58, 77, 'Sexta-Feira','11:00','12:00'),
(92, 59, 47, 'Terça-Feira','10:00','12:00'),
(93, 59, 47, 'Quinta-Feira','10:00','12:00'),
(94, 60, 103, 'Terça-Feira','16:00','18:00'),
(95, 61, 27, 'Sexta-Feira','10:00','12:00'),
(96, 62, 71, 'Segunda-Feira','10:30','13:00'),
(97, 62, 71, 'Terça-Feira','10:30','12:30'),
(98, 64, 75, 'Segunda-Feira','17:00','18:30'),
(99, 64, 75, 'Sexta-Feira','8:30','10:00'),
(100, 65, 45, 'Terça-Feira','9:00','10:00'),
(101, 65, 45, 'Terça-Feira','14:30','18:30'),
(102, 66, 28, 'Quarta-Feira','9:00','12:00'),
(103, 66, 28, 'Quarta-Feira','14:00','16:00'),
(104, 67, 72, 'Quinta-Feira','17:00','19:00'),
(105, 67, 72, 'Sexta-Feira','10:00','12:00'),
(106, 68, 50, 'Terça-Feira','14:00','16:00'),
(107, 68, 50, 'Sexta-Feira','14:00','17:00');

-- --------------------------------------------------------

--
-- Table structure for `service_hours`
--

CREATE TABLE IF NOT EXISTS `service_hours` (
`id` int NOT NULL,
  `roomID` int NOT NULL,
  `open_time` TIME NOT NULL,
    `close_time` TIME NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Data for the table `service_hours`
--

INSERT INTO `service_hours` (`id`, `roomID`, `open_time`, `close_time`) VALUES
(1, 133, '10:00', '13:00'),
(2, 22, '09:00', '17:00'),
(3, 1, '09:00', '18:00');
