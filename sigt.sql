-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 13-Jun-2019 às 12:47
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigt`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administracao`
--

CREATE TABLE `administracao` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `id_reparticao` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administracao`
--

INSERT INTO `administracao` (`id`, `nome`, `estado`, `id_reparticao`, `id_municipio`, `id_utilizador`, `data_criacao`) VALUES
(1, 'ADMINISTRAÃ‡ÃƒO MUNICIPAL - BUNDAS', 1, 2, 51, 10, '2018-04-29 14:29:15'),
(2, 'ADMINISTRAÃ‡ÃƒO MUNICIPAL - AMBOÃM', 0, 1, 2, 11, '2018-04-28 17:11:41'),
(3, 'ADMINISTRAÃ‡ÃƒO MUNICIPAL - BUCO-ZAU', 0, 3, 28, 12, '2018-04-28 19:11:05'),
(4, 'ADMINISTRAÃ‡ÃƒO MUNICIPAL - SAURIMO', 0, 4, 89, 13, '2018-04-29 12:21:09'),
(5, 'ADMINISTRAÃ‡ÃƒO MUNICIPAL - UÃGE', 0, 1000, 127, 3, '2018-04-29 15:50:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `administracao_role`
--

CREATE TABLE `administracao_role` (
  `id` int(11) NOT NULL,
  `id_administracao` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administracao_role`
--

INSERT INTO `administracao_role` (`id`, `id_administracao`, `id_role`, `id_utilizador`, `data_criacao`) VALUES
(1, 1, 5, 3, '2018-04-29 15:41:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `assunto`
--

CREATE TABLE `assunto` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `id_utilizador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `assunto`
--

INSERT INTO `assunto` (`id`, `nome`, `id_utilizador`) VALUES
(1, 'Aquisição', 3),
(2, 'Legalização', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairro`
--

CREATE TABLE `bairro` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `id_comuna` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bairro`
--

INSERT INTO `bairro` (`id`, `nome`, `id_comuna`, `estado`) VALUES
(1, 'Boa Esperança', 22, 1),
(2, 'Paraíso', 22, 1),
(6, 'Vila Nova', 2, 0),
(7, 'Vila Cativa', 3, 0),
(8, 'Vila das Ideias', 3, 0),
(9, 'Vila Flor', 3, 0),
(10, 'Zona Verde I', 3, 0),
(11, 'Vila de Bula Tumba', 3, 0),
(12, 'Caópe Nova', 21, 0),
(13, 'Bem Morar', 24, 0),
(14, 'Canhanga Jacaré', 24, 0),
(15, 'Canhanga Jacaré', 21, 0),
(16, 'Mukula Ngola', 24, 0),
(17, 'Quiminha', 21, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `id` int(11) NOT NULL,
  `id_utente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`id`, `id_utente`) VALUES
(1, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatura`
--

CREATE TABLE `candidatura` (
  `id` int(11) NOT NULL,
  `id_candidato` int(11) NOT NULL,
  `id_projecto` int(11) NOT NULL,
  `id_combinacao_terreno` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL,
  `numero` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `candidatura`
--

INSERT INTO `candidatura` (`id`, `id_candidato`, `id_projecto`, `id_combinacao_terreno`, `data`, `estado`, `numero`) VALUES
(1, 1, 1, 4, '2019-02-25 15:56:31', 1, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatura_documento`
--

CREATE TABLE `candidatura_documento` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_candidatura` int(10) UNSIGNED NOT NULL,
  `id_documento` int(10) UNSIGNED NOT NULL,
  `caminho` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `candidatura_documento`
--

INSERT INTO `candidatura_documento` (`id`, `id_candidatura`, `id_documento`, `caminho`) VALUES
(1, 1, 2, 'http://localhost/dhulka/uploaded_docs/dhulka-candidatura-fb968260b74987e2bcec81230cdfef4b.jpg'),
(2, 1, 3, 'http://localhost/dhulka/uploaded_docs/dhulka-candidatura-ce8a3230dfdf96143f8cb3b5d180e4a6.jpg'),
(3, 1, 4, 'http://localhost/dhulka/uploaded_docs/dhulka-candidatura-7410c47a6722fd6bf8360e27dcb9d7af.jpg'),
(4, 1, 6, 'http://localhost/dhulka/uploaded_docs/dhulka-candidatura-7c566a489a59e9ddd0e11fdbbc49b714.jpg'),
(5, 1, 7, 'http://localhost/dhulka/uploaded_docs/dhulka-candidatura-f89895f4df95c38dccd5a26c42e156a9.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristica_inicial_terreno`
--

CREATE TABLE `caracteristica_inicial_terreno` (
  `id` int(11) NOT NULL,
  `id_processo` int(11) DEFAULT NULL,
  `id_bairro` int(11) DEFAULT NULL,
  `quarteirao` varchar(50) DEFAULT NULL,
  `rua` varchar(500) DEFAULT NULL,
  `dimensao_terreno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caracteristica_inicial_terreno`
--

INSERT INTO `caracteristica_inicial_terreno` (`id`, `id_processo`, `id_bairro`, `quarteirao`, `rua`, `dimensao_terreno`) VALUES
(1, 1, 2, '9', '10', '30*20'),
(2, 2, 1, '10', '10', '25*20'),
(3, 3, 2, '10', '2', '30*20'),
(4, 4, 2, '12', '12', '60*40'),
(5, 5, 0, '', '', '*'),
(6, 6, 2, '12', '12', '30*20'),
(7, 1, 1, '10', '20', '30*20'),
(8, 2, 1, '10', '7', '30*20'),
(9, 1, 2, '10', '17', '30*20'),
(10, 2, 1, '8', '90', '30*20'),
(11, 3, 2, '7', '9', '20*20'),
(12, 9, NULL, NULL, NULL, 'undefined*undefined');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristica_terreno_projecto`
--

CREATE TABLE `caracteristica_terreno_projecto` (
  `id` int(11) NOT NULL,
  `id_projecto` int(11) NOT NULL,
  `id_combinacao` int(11) NOT NULL,
  `qtde_terreno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caracteristica_terreno_projecto`
--

INSERT INTO `caracteristica_terreno_projecto` (`id`, `id_projecto`, `id_combinacao`, `qtde_terreno`) VALUES
(1, 1, 1, 3),
(2, 1, 2, 3),
(3, 1, 3, 1),
(4, 1, 4, 2),
(5, 2, 1, 2),
(6, 2, 2, 2),
(7, 2, 3, 2),
(8, 2, 4, 2),
(9, 2, 5, 2),
(10, 3, 1, 10),
(11, 3, 2, 30),
(12, 3, 3, 40),
(13, 3, 4, 20),
(14, 3, 1, 10),
(15, 3, 2, 30),
(16, 3, 3, 40),
(17, 3, 4, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidadao`
--

CREATE TABLE `cidadao` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `data_nascimento` date NOT NULL,
  `tipo_doc` varchar(8) NOT NULL,
  `numero_doc` varchar(20) NOT NULL,
  `data_emissao_doc` date NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidadao`
--

INSERT INTO `cidadao` (`id`, `nome`, `data_nascimento`, `tipo_doc`, `numero_doc`, `data_emissao_doc`, `id_pais`) VALUES
(1, 'Élvio Sadoc da Silva e Sousa', '1988-10-30', 'bi', '002831985KS039', '2014-05-15', 6),
(2, 'João Fontes Pereira', '1993-06-16', 'pspt', '002387917LA012', '1970-01-01', 6),
(3, 'Matondo Pedro Vicente', '1992-05-18', 'pspt', '002387876LA012', '1970-01-01', 6),
(4, 'Jorge Tavares Coelho', '1984-06-12', 'pspt', '002998871LA011', '1970-01-01', 6),
(6, 'Edson Filomena Pedro Viegas', '1989-10-29', 'pspt', '002376091LA012', '1970-01-01', 6),
(18, 'Jeremias Capemba', '1990-02-13', 'pspt', '008765234LA012', '1970-01-01', 6),
(22, 'Récio Faria Nicolau de Sousa', '1998-07-03', 'pspt', '003546765LA012', '1970-01-01', 6),
(23, 'Francisco António Sebastião', '1995-07-19', 'pspt', '002833976KN023', '1970-01-01', 6),
(33, 'Patrícia Alexandre Cabeia', '1994-06-07', 'pspt', '009812098LA019', '2018-02-13', 6),
(34, 'Jorge Esteves Ferreira Campos', '1989-10-24', 'pspt', '009287981KS012', '2018-06-05', 6),
(35, 'Mário de Andrade', '1970-01-01', 'pspt', '00988700', '1970-01-01', 6),
(36, 'Augusto Quarenta', '1970-01-01', 'pspt', '00123991LA012', '1970-01-01', 6),
(37, 'Jeremias Kugingama Capemba', '2018-12-04', 'pspt', '012837LA012', '1970-01-01', 6),
(38, 'Fernando Francisco Manuel', '1999-01-02', 'bi', '', '2019-02-01', 6),
(39, 'Fernando Francisco Manuel', '1999-01-02', 'bi', '', '2019-02-01', 6),
(40, 'António Correia Ventura', '1984-12-06', 'bi', '001834764ME858', '2018-10-07', 6),
(41, 'Alberto Mateus  André', '1970-01-01', 'bi', '002338394HO384', '1970-01-01', 6),
(42, 'Hedelsisa Elisandra da Silva e Sousa', '1993-07-02', 'bi', '008273817KS373', '1970-01-01', 6),
(44, 'Teresa Mateus Alcantra', '1999-12-01', 'bi', '008666676HA655', '1970-01-01', 6),
(45, 'Garcia António Ferraz', '1984-04-06', 'bi', '008878998LN087', '2018-01-01', 6),
(46, 'Eusébio Arantes Maurício', '1970-01-01', 'bi', '003245678HO027', '1970-01-01', 6),
(47, 'César Sambuite katamba', '1990-01-30', 'pspt', '093844398LA834', '2019-06-10', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `combinacoes_terreno`
--

CREATE TABLE `combinacoes_terreno` (
  `id` int(11) NOT NULL,
  `combinacao` varchar(10) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `combinacoes_terreno`
--

INSERT INTO `combinacoes_terreno` (`id`, `combinacao`, `estado`) VALUES
(1, '15x20', 1),
(2, '20x15', 1),
(3, '20x20', 1),
(4, '20x30', 1),
(5, '30x20', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comuna`
--

CREATE TABLE `comuna` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `id_municipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comuna`
--

INSERT INTO `comuna` (`id`, `nome`, `id_municipio`) VALUES
(1, 'Barra do Cuanza', 1),
(2, 'Quenguela', 1),
(3, 'Morro dos Veados', 1),
(4, 'Ramiros', 1),
(5, 'Vila Verde', 1),
(6, 'Cabolombo', 1),
(7, 'Kilamba', 1),
(8, 'Ingombota', 5),
(9, 'Sambizanga', 5),
(10, 'Rangel', 5),
(11, 'Maianga', 5),
(12, 'Samba', 5),
(13, 'Neves Bendinha', 5),
(14, 'Ngola Kiluanje', 5),
(15, 'Cazenga', 3),
(16, 'Hoji Ya Henda', 3),
(17, '11 de Novembro', 3),
(18, 'Kima Kieza', 3),
(19, 'Tala Hadi', 3),
(20, 'Kalawenha', 3),
(21, 'Funda', 2),
(22, 'Kikolo', 2),
(23, 'Mulenvos de Baixo', 2),
(24, 'Sequele', 2),
(25, 'Calumbo', 9),
(26, 'Viana', 9),
(27, 'Estalagem', 9),
(28, 'Kikuxi', 9),
(29, 'Baía', 9),
(30, 'Zango', 9),
(31, 'Vila Flor', 9),
(32, 'Cassoneca', 4),
(33, 'Catete', 4),
(34, 'Bela Vista', 4),
(35, 'Cabiri', 4),
(36, 'Bom Jesus', 4),
(37, 'Caculo Cahongo', 4),
(38, 'Quiminha', 4),
(39, 'Muxima', 8),
(40, 'Demba Chio', 8),
(41, 'Quixinge', 8),
(42, 'Mumbondo', 8),
(43, 'Cabo Ledo', 8),
(44, 'Kilamba Kiaxi', 6),
(45, 'Golfe', 6),
(46, 'Sapú', 6),
(47, 'Palanca', 6),
(48, 'Nova Vida', 6),
(49, 'Mussulo', 7),
(50, 'Benfica', 7),
(51, 'Futungo de Belas', 7),
(52, 'Lar do Patriota', 7),
(53, 'Talatona', 7),
(54, 'Camama', 7),
(55, 'Cidade Universitária', 7),
(56, 'Barra do Dande', 11),
(57, 'Caxito', 11),
(58, 'Mabubas', 11),
(59, 'Quicabo', 11),
(60, 'Úcua', 11),
(61, 'Bela Vista', 10),
(62, 'Ambriz', 10),
(63, 'Tabi', 10),
(64, 'Bula-Atumba', 13),
(65, 'Quiage', 13),
(66, 'Quibaxe', 12),
(67, 'Piri', 12),
(68, 'Paredes', 12),
(69, 'Coxe', 12),
(70, 'Canacassala', 14),
(71, 'Quicunzo', 14),
(72, 'Muxaluando ', 14),
(73, 'Quixico', 14),
(74, 'Gombe', 14),
(75, 'Cage-Mazumbo', 14),
(76, 'Zala', 14),
(77, 'Pango-Aluquém', 15),
(78, 'Cazuangongo', 15),
(79, 'Balombo ', 16),
(80, 'Chingongo', 16),
(81, 'Chindumbo', 16),
(82, 'Maca', 16),
(83, 'Monbolo', 16),
(84, 'Dombe Grande', 17),
(85, 'Baía Farta', 17),
(86, 'Calohanga', 17),
(87, 'Equimina', 17),
(88, 'Benguela', 18),
(89, 'Bocoio ', 19),
(90, 'Cubal do Lumbo', 19),
(91, 'Monte Belo', 19),
(92, 'Chila', 19),
(93, 'Passe', 19),
(94, 'Caimbambo ', 20),
(95, 'Catengue', 20),
(96, 'Caiave', 20),
(97, 'Canhamela', 20),
(98, 'Viangombe', 20),
(99, 'Catumbela ', 21),
(100, 'Biópio', 21),
(101, 'Gama', 21),
(102, 'Praia Bebé', 21),
(103, 'Chongorói ', 22),
(104, 'Bolongueira', 22),
(105, 'Camuine', 22),
(106, 'Capupa', 23),
(107, 'Cubal ', 23),
(108, 'Tumbulo', 23),
(109, 'Lambala', 23),
(110, 'Ganda ', 24),
(111, 'Ebanga', 24),
(112, 'Chicuma', 24),
(113, 'Babaera', 24),
(114, 'Casseque', 24),
(115, 'Egito Praia', 25),
(116, 'Lobito ', 25),
(117, 'Canata', 25),
(118, 'Canjala', 25),
(119, 'Andulo ', 26),
(120, 'Calucinga', 26),
(121, 'Chivaúlo', 26),
(122, 'Ringoma', 27),
(123, 'Camacupa ', 27),
(124, 'Muinha', 27),
(125, 'Umpulo', 27),
(126, 'Cuanza', 27),
(127, 'Catabola ', 28),
(128, 'Chipeta', 28),
(129, 'Caiuera', 28),
(130, 'Chiuca', 28),
(131, 'Sande', 28),
(132, 'Chinguar ', 29),
(133, 'Cutato', 29),
(134, 'Cangote', 29),
(135, 'Cachingues', 30),
(136, 'Chitembo ', 30),
(137, 'Mutumbo', 30),
(138, 'Mumbué', 30),
(139, 'Malengue', 30),
(140, 'Soma Cuanza', 30),
(141, 'Luando', 31),
(142, 'Munhango', 31),
(143, 'Cuemba ', 31),
(144, 'Sachinemuna', 31),
(145, 'Belo Horizonte', 32),
(146, 'Cunhinga', 32),
(147, 'Cuito', 33),
(148, 'Chicala', 33),
(149, 'Cunje', 33),
(150, 'Trumba', 33),
(151, 'Cambândua', 33),
(152, '\'harea', 34),
(153, 'Gamba', 34),
(154, 'Lúbia', 34),
(155, 'Caiei', 34),
(156, 'Dando', 34),
(157, 'Miconje', 35),
(158, 'Belize', 35),
(159, 'Luali', 35),
(160, 'Buco Zau', 36),
(161, 'Necuto', 36),
(162, 'Inhuca', 36),
(163, 'Cabinda ', 37),
(164, 'Malembo', 37),
(165, 'Tando Zinze', 37),
(166, 'Cacongo', 38),
(167, 'Dinge', 38),
(168, 'Massabi', 38),
(169, 'Cahama ', 39),
(170, 'Otchinjau', 39),
(171, 'Ondjiva', 40),
(172, 'Nehone Cafima', 40),
(173, 'Evale', 40),
(174, 'Tchomporo Oximolo', 40),
(175, 'Oncócua', 41),
(176, 'Chitado', 41),
(177, 'Mupa', 42),
(178, 'Mukolongodjo', 42),
(179, 'Calonga', 42),
(180, 'Cassueca', 42),
(181, 'Namacunde', 43),
(182, 'Chiede', 43),
(183, 'Humbe', 44),
(184, 'Mucope', 44),
(185, 'Naulila', 44),
(186, 'Ombala yo Mungo', 44),
(187, 'Xangongo ', 44),
(188, 'Bimbe', 45),
(189, 'Bailundo ', 45),
(190, 'Lunje', 45),
(191, 'Luvemba', 45),
(192, 'Hengue', 45),
(193, 'Chiumbo', 46),
(194, 'Chinhama', 46),
(195, 'Cachiungo ', 46),
(196, 'Caála', 47),
(197, 'Catata', 47),
(198, 'Calenga', 47),
(199, 'Cuima', 47),
(200, 'Quipeio', 48),
(201, 'Ecunha ', 48),
(202, 'Huambo ', 49),
(203, 'Calima', 49),
(204, 'Chipipa', 49),
(205, 'Londuimbali ', 50),
(206, 'Cumbira', 50),
(207, 'Galanga', 50),
(208, 'Ussoque', 50),
(209, 'Alto Hama', 50),
(210, 'Lépi', 51),
(211, 'Iava Catabola', 51),
(212, 'Chilata', 51),
(213, 'Longonjo', 51),
(214, 'Mungo ', 52),
(215, 'Cambuengo', 52),
(216, 'Sambo', 53),
(217, 'Mbave', 53),
(218, 'Chicala Choloanga', 53),
(219, 'Samboto', 53),
(220, 'Chinjenje ', 54),
(221, 'Chiaca', 54),
(222, 'Ucuma ', 55),
(223, 'Cacoma', 55),
(224, 'Mundundo', 55),
(225, 'Caconda ', 56),
(226, 'Gungui', 56),
(227, 'Uaba', 56),
(228, 'Cusse', 56),
(229, 'Chituto', 57),
(230, 'Vite-Vivali', 57),
(231, 'Cacula', 57),
(232, 'Tchicuaqueia', 57),
(233, 'Caluquembe', 58),
(234, 'Calépi', 58),
(235, 'Ngola', 58),
(236, 'Chimbemba', 59),
(237, 'Chiange', 59),
(238, 'Chibia ', 60),
(239, 'Jau', 60),
(240, 'Capunda Cavilongo', 60),
(241, 'Cavilongo', 60),
(242, 'Quihita', 60),
(243, 'Chicomba ', 61),
(244, 'Cutenda', 61),
(245, 'Bambi', 62),
(246, 'Chipindo', 62),
(247, 'Humpata ', 63),
(248, 'Dongo', 64),
(249, 'Cassinga', 64),
(250, 'Jamba ', 64),
(251, 'Cuvango', 65),
(252, 'Galangue', 65),
(253, 'Vicungo', 65),
(254, 'Lubango ', 66),
(255, 'Hoque', 66),
(256, 'Arimba', 66),
(257, 'Huíla', 66),
(258, 'Capelongo', 67),
(259, 'Matala ', 67),
(260, 'Mulondo', 67),
(261, 'Quilengues ', 68),
(262, 'Impulo', 68),
(263, 'Dinde', 68),
(264, 'Quipungo', 69),
(265, 'Maué', 70),
(266, 'Calai', 70),
(267, 'Mavengue', 70),
(268, 'Savate', 71),
(269, 'Caíla', 71),
(270, 'Cuangar ', 71),
(271, 'Cuchi', 72),
(272, 'Cutato', 72),
(273, 'Chinguanja', 72),
(274, 'Vissati', 72),
(275, 'Lupire', 73),
(276, 'Cuito Cuanavale', 73),
(277, 'Longa', 73),
(278, 'Baixo Longa', 73),
(279, 'Dirico ', 74),
(280, 'Mucusso', 74),
(281, 'Xamavera', 74),
(282, 'Rito', 75),
(283, 'Nancova', 75),
(284, 'Mavinga ', 76),
(285, 'Cutuile', 76),
(286, 'Cunjamba', 76),
(287, 'Luengue', 76),
(288, 'Caiundo', 77),
(289, 'Menongue ', 77),
(290, 'Cueio', 77),
(291, 'Missombo', 77),
(292, 'Rivungo ', 78),
(293, 'Xipundo', 78),
(294, 'Luiana', 78),
(295, 'Camabatela', 79),
(296, 'Tango', 79),
(297, 'Maua', 79),
(298, 'Bindo', 79),
(299, 'Luinga', 79),
(300, 'Banga ', 80),
(301, 'Caculo Cabaça', 80),
(302, 'Aldeia Nova', 80),
(303, 'Cariamba', 80),
(304, 'Bolongongo ', 81),
(305, 'Terreiro', 81),
(306, 'Quiquiemba', 81),
(307, 'Dondo ', 82),
(308, 'Massangano', 82),
(309, 'Dange Ia Menha', 82),
(310, 'Zenza do Itombe', 82),
(311, 'São Pedro da Quilemba', 82),
(312, 'Ndalatando ', 83),
(313, 'Canhoca', 83),
(314, 'Golungo Alto', 84),
(315, 'Cambondo', 84),
(316, 'Cêrca', 84),
(317, 'Quiluanje', 84),
(318, 'Quilombo dos Dembos', 85),
(319, 'Camame', 85),
(320, 'Cavunga', 85),
(321, 'Lucala', 86),
(322, 'Quiangombe', 86),
(323, 'Quiculungo', 87),
(324, 'Samba Cajú', 88),
(325, 'Samba Lucala', 88),
(326, 'Gabela', 89),
(327, 'Assango', 89),
(328, 'Cassongue', 90),
(329, 'Pambangala', 90),
(330, 'Dumbi', 90),
(331, 'Atóme', 90),
(332, 'Conda', 91),
(333, 'Cunjo', 91),
(334, 'Ebo', 92),
(335, 'Condé', 92),
(336, 'Quissanje', 92),
(337, 'Calulo', 93),
(338, 'Munenga', 93),
(339, 'Cabuta', 93),
(340, 'Quissongo', 93),
(341, 'Mussende', 94),
(342, 'Quienha', 94),
(343, 'São Lucas', 94),
(344, 'Capolo', 95),
(345, 'Porto Amboim', 95),
(346, 'Quibala', 96),
(347, 'Dala Cachibo', 96),
(348, 'Cariango', 96),
(349, 'Lonhe', 96),
(350, 'Quilenda', 97),
(351, 'Quirimbo', 97),
(352, 'Seles', 98),
(353, 'Amboiva', 98),
(354, 'Botera', 98),
(355, 'Sumbe', 99),
(356, 'Gungo', 99),
(357, 'Gangula', 99),
(358, 'Quicombo', 99),
(359, 'Sanga', 100),
(360, 'Waku Kungo', 100),
(361, 'Quissanga Cunjo', 100),
(362, 'Luia', 101),
(363, 'Cachimo', 101),
(364, 'Cuanzar', 101),
(365, 'Cambulo', 101),
(366, 'Capenda Camulenda', 102),
(367, 'Xinge', 102),
(368, 'Camaxilo', 103),
(369, 'Caungula', 103),
(370, 'Chitato', 104),
(371, 'Luachimo', 104),
(372, 'Cuango', 105),
(373, 'Luremo', 105),
(374, 'Cuilo', 106),
(375, 'Caluango', 106),
(376, ' Lubalo', 107),
(377, 'Luangue', 107),
(378, 'Muvuluege', 107),
(379, 'Lucapa', 108),
(380, 'Capaia', 108),
(381, 'Camissombo', 108),
(382, 'Xá Cassau', 108),
(383, 'Xá Muteba', 109),
(384, 'Iongo', 109),
(385, 'Cassange Calucala', 109),
(386, 'Lóvua', 110),
(387, 'Xassengue', 111),
(388, 'Cacumbi', 111),
(389, 'Alto Chicapa', 111),
(390, 'Cacolo', 111),
(391, 'Dala', 112),
(392, 'Luma Cassai', 112),
(393, 'Cazage', 112),
(394, 'Chiluage', 113),
(395, 'Cassai Sul', 113),
(396, 'Muriege', 113),
(397, 'Muconda', 113),
(398, 'Saurimo', 114),
(399, 'Mona Quimbundo', 114),
(400, 'Sombo', 114),
(401, 'Cacuso', 115),
(402, 'Lombe', 115),
(403, 'Quizenga', 115),
(404, 'Pungo a Ndongo', 115),
(405, 'Soqueco', 115),
(406, 'Calandula', 116),
(407, 'Cateco Cangola', 116),
(408, 'Cangola', 116),
(409, 'Cota', 116),
(410, 'Cuale', 116),
(411, 'Quinje', 116),
(412, 'Tala-Mungongo', 117),
(413, 'Cambundi Catembo', 117),
(414, 'Quitapa', 117),
(415, 'Dumba Cambango', 117),
(416, 'Cangandala', 118),
(417, 'Bembo', 118),
(418, 'Culamagia', 118),
(419, 'Caribo', 118),
(420, 'Mbange a Ngola', 119),
(421, 'Cahombo', 119),
(422, 'Cambo Suinginje', 119),
(423, 'Micanda', 119),
(424, 'Kiwaba \'Zogi', 120),
(425, 'Mufuma', 120),
(426, 'Cunda-Dia-Baze', 121),
(427, 'Milando', 121),
(428, 'Lemba', 121),
(429, 'Quimbango', 122),
(430, 'Capunda', 122),
(431, 'Dombo Wa Zanga', 122),
(432, 'Luquembo', 122),
(433, 'Cunga Palanga', 122),
(434, 'Rimba', 122),
(435, 'Malanje', 123),
(436, 'Ngola-Luiji', 123),
(437, 'Cambaxi', 123),
(438, 'Marimba', 124),
(439, 'Cabombo', 124),
(440, 'Tembo-Aluma', 124),
(441, 'Massango', 125),
(442, 'Quihuhu', 125),
(443, 'Quinguengue', 125),
(444, 'Catala', 126),
(445, 'Caculama', 126),
(446, 'Caxinga', 126),
(447, 'Muquixe', 126),
(448, 'Xandele', 127),
(449, 'Moma', 127),
(450, 'Bângalas', 127),
(451, 'Sautar', 128),
(452, 'Quirima', 128),
(453, 'Nana Candumbo', 129),
(454, 'Lumbala Caquengue', 129),
(455, 'Cazombo', 129),
(456, 'Macondo', 129),
(457, 'Caianda', 129),
(458, 'Calunda', 129),
(459, 'Lóvua', 129),
(460, 'Lutembo', 130),
(461, 'Chiume', 130),
(462, 'Lumbala Nguimbo ', 130),
(463, 'Luvuei', 130),
(464, 'Ninda', 130),
(465, 'Mussuma', 130),
(466, 'Sessa', 130),
(467, 'Camanongue', 131),
(468, 'Lumege', 132),
(469, 'Luau', 133),
(470, 'Luacano', 134),
(471, 'Lago Dilolo', 134),
(472, 'Cangombe', 135),
(473, 'Cassamba', 135),
(474, 'Tempué ', 135),
(475, 'Cangamba', 135),
(476, 'Muié', 135),
(477, 'Léua', 136),
(478, 'Liangongo', 136),
(479, 'Lucusse', 137),
(480, 'Cangumbe', 137),
(481, 'Luena', 137),
(482, 'Muangai', 137),
(483, 'Bibala', 138),
(484, 'Caitou', 138),
(485, 'Capangombe', 138),
(486, 'Lola', 138),
(487, 'Camucuio', 139),
(488, 'Mamué', 139),
(489, 'Chingo', 139),
(490, 'Namibe', 140),
(491, 'Lucira', 140),
(492, 'Bentiaba', 140),
(493, 'Forte Santa Rita', 140),
(494, 'Baía dos Tigres', 141),
(495, 'Iona', 141),
(496, 'Tômbua', 141),
(497, 'Virei', 142),
(498, 'Cainde', 142),
(499, 'Cangola', 143),
(500, 'Bengo', 143),
(501, 'Caiongo', 143),
(502, 'Nova Ambuíla', 144),
(503, 'Quipedro', 144),
(504, 'Bembe', 145),
(505, 'Lucunga', 145),
(506, 'Mabaia', 145),
(507, 'Buenga Sul', 146),
(508, 'Nova Esperança', 146),
(509, 'Cuilo Camboso', 146),
(510, 'Bungo', 147),
(511, 'Damba', 148),
(512, 'Nsosso', 148),
(513, 'Camatambo', 148),
(514, 'Lêmboa', 148),
(515, 'Petecusso', 148),
(516, 'Macocola', 149),
(517, 'Macolo', 149),
(518, 'Santa Cruz ', 149),
(519, 'Milunga', 149),
(520, 'Massau', 149),
(521, 'Mucaba', 150),
(522, 'Uando Mucaba', 150),
(523, 'Dimuca', 151),
(524, 'Quisseque', 151),
(525, 'Negage', 151),
(526, 'Puri', 152),
(527, 'Cuango', 153),
(528, 'Icoca', 153),
(529, 'Quimbele', 153),
(530, 'Alto Zaza', 153),
(531, 'Quitexe', 154),
(532, 'Aldeia Viçosa', 154),
(533, 'Cambamba', 154),
(534, 'Vista Alegre', 154),
(535, 'Sanza Pombo', 155),
(536, 'Cuilo Pombo', 155),
(537, 'Uamba', 155),
(538, 'Alfândega', 155),
(539, 'Songo ', 156),
(540, 'Quinvuenga', 156),
(541, 'Uíge', 157),
(542, 'Maquela do Zombo', 158),
(543, 'Quibocolo', 158),
(544, 'Béu', 158),
(545, 'Sacandica', 158),
(546, 'Cuilo Futa', 158),
(547, 'Cuimba', 159),
(548, 'Buela', 159),
(549, 'Serra da Canda', 159),
(550, 'Luvaca', 159),
(551, 'Mbanza Kongo', 160),
(552, 'Luvo', 160),
(553, 'Caluca', 160),
(554, 'Madimba', 160),
(555, 'Quiende', 160),
(556, 'Calambata', 160),
(557, 'Nóqui', 161),
(558, 'Lufico', 161),
(559, 'Mpala', 161),
(560, 'Nzetu', 162),
(561, 'Quindeje', 162),
(562, 'Quibala Norte', 162),
(563, 'Soyo', 163),
(564, 'Sumba', 163),
(565, 'Pedra de Feitiço', 163),
(566, 'Quêlo', 163),
(567, 'Mangue Grande', 163),
(568, 'Tomboco', 164),
(569, 'Quinsimba', 164),
(570, 'Quinzau', 164),
(571, 'Dundo', 165),
(572, 'Ingombota', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `id` int(11) NOT NULL,
  `id_cidadao` int(11) NOT NULL,
  `control_cred` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `criador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conta`
--

INSERT INTO `conta` (`id`, `id_cidadao`, `control_cred`, `data_criacao`, `criador`) VALUES
(1, 1, 1, '2018-08-26 11:09:14', 0),
(2, 2, 1, '2018-11-16 13:51:11', 1),
(3, 3, 1, '2018-08-27 18:06:45', 1),
(4, 4, 1, '2018-11-15 10:38:21', 1),
(5, 6, 1, '2018-11-28 13:43:19', 6),
(6, 18, 1, '2018-09-08 14:06:05', 1),
(7, 22, 0, '2018-09-23 13:39:19', 6),
(8, 23, 1, '2018-12-06 15:07:49', 6),
(9, 36, 1, '2018-12-07 15:51:10', 6),
(10, 37, 0, '2018-12-07 16:54:43', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone1` varchar(16) NOT NULL,
  `telefone2` varchar(16) DEFAULT NULL,
  `id_cidadao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contacto`
--

INSERT INTO `contacto` (`id`, `email`, `telefone1`, `telefone2`, `id_cidadao`) VALUES
(1, 'hackerxp33@gmail.com', '998 906 910', '923 839 208', 1),
(2, 'joao_pereira2018@gmail.com', '938 768 123', '919 180 406', 2),
(3, 'matondo_quela2019@gmail.com', '936 767 197', '993  098 192', 3),
(4, 'jorge_coelho2019@gmail.com', '923 121 033', '916 150 918', 5),
(6, 'homolibero_2019@gmail.com', '932 937 928', '994 092 192', 6),
(18, 'jeremias_capemba@gmail.com', '923 512 671', '912 732 183', 18),
(22, 'recio_faria@gmail.com', '937 928 123', '912 543 234', 22),
(23, 'francisco_vieri@gmail.com', '922 051 328', '912 374 134', 23),
(33, 'patricia_cabeia@gmail.com', '997 819 192', '926 531 162', 33),
(34, 'jorge_campos@gmail.com', '923 546 128', '912 737 182', 34),
(35, 'teste_2012gmail.com', '94565875das', '924mmhg', 35),
(36, 'augusto_2019@gmail.com', '912 817 102', '912 481 012', 36),
(37, 'capemba2012@gmail.com', '912 871 816', '923 541 122', 37),
(38, 'fernando_manuel@gmail.com', '+244 992 348 475', '+244 923 748 576', 38),
(39, 'fernando_manuel@gmail.com', '992348475', '+244 923 748 576', 39),
(40, 'antonio_correia@gmail.com', '928374875', '+244 998 379 575', 40),
(41, 'joao_pereira@gmail.com', '+244 927 746 566', '+244 938 747 747', 41),
(42, 'hedelsisa_sousa@gmail.com', '+244 923 546 767', '+244 994 656 565', 42),
(43, 'hedelsisa_sousa@gmail.com', '+244 923 546 767', '+244 994 656 565', 43),
(44, 'dolores_alfredo@gmail.com', '+244 922 435 432', '+244 923 533 213', 44),
(45, 'garcia_antonio@gmail.com', '+244 923 827 388', '+244 918 388 388', 45),
(46, '', '+244 923 456 789', '+244 990 987 689', 46),
(47, 'cesar_2019@gmail.com', '+244 938 475 887', '+244 928 374 764', 47);

-- --------------------------------------------------------

--
-- Estrutura da tabela `data_entrega_doc`
--

CREATE TABLE `data_entrega_doc` (
  `id` int(11) NOT NULL,
  `id_doc` int(11) NOT NULL,
  `data_entrega` date NOT NULL,
  `id_processo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `data_entrega_doc`
--

INSERT INTO `data_entrega_doc` (`id`, `id_doc`, `data_entrega`, `id_processo`) VALUES
(1, 4, '2018-11-29', 1),
(2, 5, '2018-11-30', 3),
(3, 3, '2019-01-06', 1),
(4, 5, '2019-01-06', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `destrito`
--

CREATE TABLE `destrito` (
  `id` int(11) NOT NULL,
  `id_outra_divisao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `documento`
--

CREATE TABLE `documento` (
  `id` int(11) NOT NULL,
  `nome` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `uso` varchar(5) NOT NULL,
  `prioridade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `documento`
--

INSERT INTO `documento` (`id`, `nome`, `estado`, `uso`, `prioridade`) VALUES
(2, 'Bilhete de Identidade', 1, 't', 0),
(3, 'Cartão de Contribuinte', 1, 't', 0),
(4, 'Requerimento', 1, 't', 0),
(5, 'Croquís de Localização', 1, 'l', 0),
(6, 'Extracto Bancário', 1, 'c', 5),
(7, 'Fotografia', 1, 'c', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada_saida`
--

CREATE TABLE `entrada_saida` (
  `id` int(11) NOT NULL,
  `id_saida` int(11) NOT NULL,
  `id_entrada` int(11) NOT NULL,
  `id_processo` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `data_actividade` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `entrada_saida`
--

INSERT INTO `entrada_saida` (`id`, `id_saida`, `id_entrada`, `id_processo`, `estado`, `data_actividade`) VALUES
(1, 5, 0, 1, 1, '2018-11-24 14:44:58'),
(2, 5, 7, 1, 2, '2018-11-27 09:54:36'),
(3, 5, 0, 2, 1, '2018-11-27 10:35:00'),
(4, 5, 7, 2, 2, '2018-11-27 10:39:06'),
(5, 5, 0, 3, 1, '2018-11-27 10:42:06'),
(6, 5, 7, 3, 2, '2018-11-27 10:44:52'),
(7, 7, 4, 1, 3, '2018-11-28 13:44:21'),
(8, 4, 8, 1, 4, '2018-11-28 19:22:53'),
(9, 8, 10, 1, 5, '2018-12-06 15:02:29'),
(10, 10, 8, 1, -1, '2018-12-06 15:20:05'),
(11, 8, 4, 1, -2, '2018-12-06 15:48:10'),
(12, 7, 4, 2, 3, '2018-12-07 15:40:28'),
(13, 4, 8, 2, 4, '2018-12-07 15:41:32'),
(14, 8, 11, 2, 5, '2018-12-07 15:47:41'),
(16, 5, 0, 7, 1, '2019-02-18 22:08:55'),
(17, 5, 0, 8, 1, '2019-02-18 22:12:08'),
(18, 5, 7, 7, 2, '2019-02-18 22:14:35'),
(19, 5, 7, 8, 2, '2019-06-13 06:39:35'),
(20, 5, 0, 9, 1, '2019-06-13 06:48:34'),
(21, 5, 7, 9, 2, '2019-06-13 06:50:04'),
(22, 7, 4, 3, 3, '2019-06-13 06:53:41'),
(23, 5, 0, 10, 1, '2019-06-13 10:27:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fisica`
--

CREATE TABLE `fisica` (
  `id` int(11) NOT NULL,
  `id_cidadao` int(11) NOT NULL,
  `genero` varchar(2) NOT NULL,
  `fotografia` varchar(50) NOT NULL,
  `estado_civil` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fisica`
--

INSERT INTO `fisica` (`id`, `id_cidadao`, `genero`, `fotografia`, `estado_civil`) VALUES
(1, 1, 'M', 'padrao.jpg', 'S'),
(2, 2, 'M', 'padrao.jpg', 'S'),
(3, 3, 'F', 'padrao.jpg', 'S'),
(4, 4, 'F', 'padrao.jpg', 'C'),
(6, 6, 'F', 'padrao.jpg', 'S'),
(18, 18, 'F', 'padrao.jpg', 'S'),
(22, 22, 'F', 'padrao.jpg', 'S'),
(23, 23, 'F', 'padrao.jpg', 'S'),
(33, 33, 'F', ' 5bc2184d781fe-dhulka.jpg', 'S'),
(34, 34, 'F', ' 5bc495b66b664-dhulka.jpg', 'C'),
(35, 35, 'F', ' 5be5b9ea2d9ef-dhulka.jpg', 'S'),
(36, 36, 'F', 'padrao.jpg', 'S'),
(37, 37, 'F', 'padrao.jpg', 'S'),
(38, 38, 'f', 'padrao.jpg', 'S'),
(39, 39, 'f', 'padrao.jpg', 'S'),
(40, 40, 'f', 'padrao.jpg', 'S'),
(41, 41, 'f', 'padrao.jpg', 'S'),
(42, 42, 'f', 'padrao.jpg', 'S'),
(43, 43, 'f', 'padrao.jpg', 'S'),
(44, 44, 'f', 'padrao.jpg', 'S'),
(45, 45, 'f', 'padrao.jpg', 'D'),
(46, 46, 'f', 'padrao.jpg', 'S'),
(47, 47, 'F', ' 5d01f090021cd-dhulka.jpg', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto_terreno`
--

CREATE TABLE `foto_terreno` (
  `id` int(11) NOT NULL,
  `id_terreno` int(11) NOT NULL,
  `foto` varchar(120) COLLATE utf8_general_mysql500_ci NOT NULL,
  `ordem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `foto_terreno`
--

INSERT INTO `foto_terreno` (`id`, `id_terreno`, `foto`, `ordem`) VALUES
(1, 1, 'dhulka-land-cde77a608b4714cbb548fd4b4420eca6.jpg', 0),
(2, 1, 'dhulka-land-26e4bdd175df334e37633a1e6b7a6dab.jpg', 1),
(3, 1, 'dhulka-land-6b16cf3af7da6303b55a695411e8202b.jpg', 2),
(4, 1, 'dhulka-land-9bb9d31f641e1da44018dd2267aacf6b.jpg', 3),
(5, 1, 'dhulka-land-36d1c454443dbad0fe3872087f05e1fd.jpg', 4),
(6, 1, 'dhulka-land-af31e9aee56d4fc47d5f9b515909e056.jpg', 5),
(7, 1, 'dhulka-land-08bd120f00ffd69f5535a7653e6102dc.jpg', 6),
(8, 1, 'dhulka-land-a228e5dcfb18b4b310a0590981661f9f.jpg', 7),
(9, 2, 'dhulka-land-26c869da0d7fd3f660ee9ef627e2d5e2.jpg', 0),
(10, 2, 'dhulka-land-6b59830ef9296e72706924f22e30a063.jpg', 1),
(11, 2, 'dhulka-land-ad95fa39a1709d19e3a947786df60133.jpg', 2),
(12, 2, 'dhulka-land-d0c7790650cda26e33548290413578cd.jpg', 3),
(13, 2, 'dhulka-land-c3a18e2f733a50f2f22ca6bb43077427.jpg', 4),
(14, 2, 'dhulka-land-55fd39fb73f86a6984c7e95b14795e12.jpg', 5),
(15, 2, 'dhulka-land-1c54d7e85ea63c1243e3099cece5fae7.jpg', 6),
(16, 3, 'dhulka-land-77f8bbc7331f7b6e90ba459d6258cd7e.jpg', 0),
(17, 3, 'dhulka-land-94a389a71d6063ce7f360420f88e85cb.jpg', 1),
(18, 3, 'dhulka-land-28f85691bf08ee5cbc2960c4d0c94f38.jpg', 2),
(19, 3, 'dhulka-land-3f472cb5672e4c7016d3288ccc6bbbab.jpg', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria_projecto`
--

CREATE TABLE `galeria_projecto` (
  `id` int(11) NOT NULL,
  `id_projecto` int(11) NOT NULL,
  `foto` varchar(80) NOT NULL,
  `ordem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `galeria_projecto`
--

INSERT INTO `galeria_projecto` (`id`, `id_projecto`, `foto`, `ordem`) VALUES
(1, 1, 'dhulka-ac22ecad2a23076c681540a131c02448.jpg', 0),
(2, 1, 'dhulka-e73286a6315047286a56313f8a08395d.jpg', 1),
(3, 1, 'dhulka-487c5bfa3870ff402df8eec474de79e1.jpg', 2),
(4, 1, 'dhulka-8166fd55224108be4e146f4856e9d047.jpg', 3),
(5, 1, 'dhulka-04921207d655633a996379b0e74f26fb.jpg', 4),
(6, 1, 'dhulka-1b552d1deca6515f7e9c7adaf4356cd9.jpg', 5),
(7, 2, 'dhulka-1eba484410199b44f007f2693ea89992.jpg', 0),
(8, 2, 'dhulka-86ee5d84947ccabf941d8cd8bb19f61a.jpg', 1),
(9, 2, 'dhulka-89352782501e08519cb2a3ed1d0008c9.jpg', 2),
(10, 2, 'dhulka-cd9d61f17b2d1ae2fd79f1391d03a773.jpg', 3),
(11, 2, 'dhulka-b431f2dfa4494415d09c05c25327ebd3.jpg', 4),
(12, 2, 'dhulka-77dc2569f6ae7ee21ec49114f74b073d.jpg', 5),
(13, 2, 'dhulka-f8ffc985b08a39932c17e0eafe947e9f.jpg', 6),
(14, 2, 'dhulka-48320189df00027656a5f1b65dec671b.jpg', 7),
(15, 2, 'dhulka-eb70a34603f36ecf97eb371c090df1f8.jpg', 8),
(16, 2, 'dhulka-67df2736c2c675a7e3c336325c101148.jpg', 9),
(17, 2, 'dhulka-d2ec34aff15592a1a5d3f0fc3c62e863.jpg', 10),
(18, 2, 'dhulka-2ce5472ecf9f7a6f0dfd6a545eb8c820.jpg', 11),
(19, 2, 'dhulka-aebd344fd4574bd0a90fd29ef8212935.jpg', 12),
(20, 2, 'dhulka-487438d03ef49b065dcf2de8c4ad3ea1.jpg', 13),
(21, 2, 'dhulka-5fc850fdaa6a570e1174d842d8d603c8.jpg', 0),
(22, 3, 'dhulka-eb72c5676a4ceef09c2713ffd67b7507.jpg', 0),
(23, 3, 'dhulka-39207942e6fa066a64e238e282c7ac7e.jpg', 1),
(24, 3, 'dhulka-3220b1b282a4fc33dd5ddb28fa8b6470.jpg', 2),
(25, 3, 'dhulka-245f422c0775943301cab6eb5048cb43.jpg', 3),
(26, 3, 'dhulka-3fcd2ca9fed02570411d356ee8b3ed84.jpg', 4),
(27, 3, 'dhulka-6c1eeee5112c10a8b959a0e3dd0401a9.jpg', 5),
(28, 3, 'dhulka-233c322ba75ebf9e834979612dfd5da3.jpg', 0),
(29, 3, 'dhulka-3c13299929a84d95bc8cd6f62f53c632.jpg', 1),
(30, 3, 'dhulka-3ff55d3af83dcc8b7fc0f18b041640c7.jpg', 2),
(31, 3, 'dhulka-afcd327aa43b4374449c98d760914ed6.jpg', 3),
(32, 3, 'dhulka-876ccd1727c88e373cc7aad6b64a0780.jpg', 4),
(33, 3, 'dhulka-e2af8d9671bb439a4c319ffd4c52227b.jpg', 5),
(34, 3, 'dhulka-47c7ff00e1a315a9b9efab702e3f2a49.jpg', 6),
(35, 3, 'dhulka-4b64bd5d701bdeeb03b3d2a033a5f4a4.jpg', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `juridica`
--

CREATE TABLE `juridica` (
  `id` int(11) NOT NULL,
  `id_cidadao` int(11) NOT NULL,
  `id_representante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id`, `nome`, `id_utilizador`, `data_criacao`) VALUES
(1, 'Utente', 1, '2018-04-25 11:10:17'),
(2, 'Utilizador', 1, '2018-04-25 11:10:32'),
(3, 'Grupo', 1, '2018-04-25 11:10:44'),
(4, 'Município', 1, '2019-02-19 10:01:54'),
(5, 'Bairro', 1, '2018-04-25 11:11:09'),
(6, 'Administração', 1, '2019-02-19 10:01:43'),
(7, 'Menu', 1, '2018-04-26 00:23:16'),
(8, 'Trespasse', 2, '2019-01-20 14:04:28'),
(9, 'Repartição', 1, '2019-02-19 10:02:00'),
(10, 'Sub Menu', 3, '2018-04-27 11:48:48'),
(11, 'Processo', 3, '2018-04-29 12:26:48'),
(12, 'Distrito', 3, '2018-08-13 06:50:18'),
(13, 'Projecto', 3, '2018-08-13 10:12:50'),
(14, 'Dashboard', 3, '2018-08-13 21:19:44'),
(15, 'Documento', 3, '2018-08-14 20:50:42'),
(16, 'Terreno', 1, '2018-09-25 14:32:17'),
(17, 'Jeremias', 1, '2018-11-30 17:07:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu_modulo`
--

CREATE TABLE `menu_modulo` (
  `id` int(11) NOT NULL,
  `Id_menu` int(11) NOT NULL,
  `id_modulo` int(11) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menu_modulo`
--

INSERT INTO `menu_modulo` (`id`, `Id_menu`, `id_modulo`, `id_utilizador`, `data_criacao`) VALUES
(1, 1, 1, 1, '2018-04-08 15:40:42'),
(2, 2, 1, 1, '2018-04-08 15:40:42'),
(3, 1, 2, 1, '2018-04-08 15:41:35'),
(4, 2, 2, 1, '2018-04-08 15:40:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu_sub_menu`
--

CREATE TABLE `menu_sub_menu` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_sub_menu` int(11) NOT NULL,
  `controlador` varchar(50) NOT NULL,
  `accao` varchar(50) NOT NULL,
  `modal` int(11) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menu_sub_menu`
--

INSERT INTO `menu_sub_menu` (`id`, `id_menu`, `id_sub_menu`, `controlador`, `accao`, `modal`, `id_utilizador`, `data_criacao`) VALUES
(1, 1, 1, 'utente', 'novo', 1, 1, '2018-08-13 20:55:56'),
(2, 1, 2, 'utente', 'listar', 0, 1, '2018-04-25 11:15:03'),
(3, 1, 3, 'utente', 'actualizar', 0, 1, '2018-04-25 11:15:03'),
(4, 1, 4, 'utente', 'eliminar', 1, 1, '2018-09-11 12:44:14'),
(5, 2, 1, 'utilizador', 'novo', 0, 1, '2018-04-25 11:16:57'),
(6, 2, 2, 'utilizador', 'listar', 0, 1, '2018-04-25 11:16:57'),
(7, 2, 3, 'utilizador', 'actualizar', 0, 1, '2018-04-25 11:16:57'),
(8, 2, 4, 'utilizador', 'eliminar', 1, 1, '2018-04-26 08:55:27'),
(9, 5, 1, 'bairro', 'novo', 1, 1, '2018-09-14 10:06:13'),
(10, 5, 2, 'bairro', 'listar', 1, 1, '2018-09-14 10:06:19'),
(11, 5, 3, 'bairro', 'actualizar', 1, 1, '2018-09-14 10:06:24'),
(12, 5, 4, 'bairro', 'eliminar', 0, 1, '2018-04-25 11:39:59'),
(13, 3, 1, 'grupo', 'novo', 1, 1, '2018-04-26 19:31:08'),
(14, 3, 2, 'grupo', 'listar', 0, 1, '2018-04-26 19:31:34'),
(15, 3, 3, 'grupo', 'actualizar', 1, 1, '2018-04-26 19:31:41'),
(16, 3, 4, 'grupo', 'eliminar', 1, 1, '2018-04-26 19:31:44'),
(17, 6, 1, 'administracao', 'novo', 1, 1, '2018-04-28 14:09:16'),
(18, 6, 2, 'administracao', 'listar', 0, 1, '2018-04-25 21:29:09'),
(19, 6, 3, 'administracao', 'actualizar', 0, 1, '2018-04-25 21:29:09'),
(20, 6, 4, 'administracao', 'eliminar', 0, 1, '2018-04-25 21:29:09'),
(21, 4, 1, 'municipio', 'novo', 1, 1, '2018-04-28 15:50:18'),
(22, 4, 2, 'municipio', 'listar', 0, 1, '2018-04-25 23:12:58'),
(25, 8, 1, 'traspasse', 'novo', 1, 2, '2019-01-19 08:02:03'),
(26, 8, 4, 'traspasse', 'eliminar', 1, 2, '2018-04-26 08:27:18'),
(27, 8, 3, 'traspasse', 'actualizar', 0, 2, '2018-04-26 08:27:18'),
(28, 9, 1, 'reparticao', 'novo', 1, 1, '2018-04-26 11:55:38'),
(29, 9, 2, 'reparticao', 'listar', 0, 1, '2018-04-26 11:55:38'),
(30, 9, 3, 'reparticao', 'actualizar', 1, 1, '2018-04-26 11:55:38'),
(31, 9, 4, 'reparticao', 'eliminar', 1, 1, '2018-04-26 11:55:38'),
(32, 8, 2, 'traspasse', 'listar', 0, 2, '2018-04-26 12:06:47'),
(33, 7, 1, 'menu', 'novo', 1, 3, '2018-04-26 12:11:20'),
(34, 7, 2, 'menu', 'listar', 0, 3, '2018-04-26 12:11:20'),
(35, 7, 3, 'menu', 'actualizar', 1, 3, '2018-04-26 12:11:20'),
(36, 7, 4, 'menu', 'eliminar', 1, 3, '2018-04-26 12:11:20'),
(37, 10, 1, 'sub_menu', 'novo', 1, 3, '2018-04-27 12:54:05'),
(38, 10, 2, 'sub_menu', 'listar', 0, 3, '2018-04-27 12:54:05'),
(39, 10, 3, 'sub_menu', 'actualizar', 1, 3, '2018-04-27 12:54:05'),
(40, 10, 4, 'sub_menu', 'eliminar', 1, 3, '2018-04-27 12:54:05'),
(42, 3, 5, 'grupo', 'add_privilegio', 0, 3, '2018-04-27 13:42:05'),
(43, 4, 3, 'municipio', 'actualizar', 1, 3, '2018-04-28 18:23:54'),
(44, 4, 4, 'municipio', 'eliminar', 1, 3, '2018-04-28 18:23:54'),
(45, 11, 4, 'processo', 'eliminar', 1, 3, '2018-04-29 12:27:29'),
(46, 11, 1, 'processo', 'novo', 1, 3, '2018-08-21 10:13:00'),
(47, 11, 2, 'processo', 'listar', 0, 3, '2018-04-29 12:27:29'),
(48, 11, 3, 'processo', 'actualizar', 0, 3, '2018-04-29 12:27:29'),
(49, 13, 1, 'projecto', 'novo', 1, 3, '2018-08-13 10:13:56'),
(50, 13, 2, 'projecto', 'listar', 0, 3, '2018-08-13 10:13:56'),
(51, 13, 3, 'projecto', 'actualizar', 1, 3, '2018-09-17 13:04:38'),
(52, 13, 4, 'projecto', 'eliminar', 1, 3, '2018-08-13 10:13:56'),
(53, 14, 6, 'dashboard', 'dashboard', 0, 3, '2018-08-13 21:21:34'),
(54, 1, 7, 'utente', 'fisica', 0, 3, '2018-08-13 21:27:49'),
(55, 1, 8, 'utente', 'juridica', 0, 3, '2018-08-13 21:27:49'),
(56, 15, 1, 'documento', 'novo', 1, 3, '2018-08-14 20:51:51'),
(57, 15, 2, 'documento', 'listar', 1, 3, '2018-08-14 20:56:17'),
(58, 15, 3, 'documento', 'actualizar', 0, 3, '2018-08-14 20:51:51'),
(59, 15, 4, 'documento', 'eliminar', 0, 3, '2018-08-14 20:51:51'),
(60, 1, 9, 'utente', 'detalhe', 1, 3, '2018-08-20 12:27:42'),
(61, 11, 9, 'processo', 'detalhe', 0, 3, '2018-09-23 19:14:32'),
(62, 11, 10, 'processo', 'enviar', 2, 3, '2018-08-26 16:40:20'),
(63, 2, 9, 'utilizador', 'detalhe', 0, 3, '2018-08-24 15:28:43'),
(64, 2, 11, 'utilizador', 'adicionar_conta', 1, 3, '2018-08-24 21:14:50'),
(65, 11, 12, 'processo', 'parecer', 3, 1, '2018-09-21 15:37:00'),
(66, 13, 13, 'projecto', 'coordenar', 0, 1, '2018-09-14 16:11:26'),
(67, 11, 14, 'processo', 'ver_parecer', 0, 1, '2018-09-22 13:39:09'),
(68, 11, 15, 'processo', 'projectar', 4, 1, '2018-09-23 18:31:46'),
(69, 16, 1, 'terreno', 'novo', 0, 1, '2018-09-25 14:33:03'),
(70, 16, 2, 'terreno', 'listar', 0, 1, '2018-09-25 14:33:03'),
(71, 16, 3, 'terreno', 'actualizar', 0, 1, '2018-09-25 14:33:03'),
(72, 16, 4, 'terreno', 'eliminar', 0, 1, '2018-09-25 14:33:03'),
(73, 1, 16, 'utente', 'servico', 0, 1, '2018-11-28 18:47:43'),
(74, 17, 1, 'jeremias', 'novo', 0, 1, '2018-11-30 17:10:30'),
(75, 11, 17, 'processo', 'aquisicao', 0, 1, '2019-02-12 18:28:37'),
(76, 13, 18, 'projecto', 'listar_terreno', 0, 1, '2019-02-22 15:44:03'),
(77, 13, 19, 'projecto', 'estatistica', 0, 1, '2019-02-22 17:43:06'),
(78, 16, 20, 'terreno', 'detalhe_terreno', 0, 1, '2019-02-25 16:44:45'),
(79, 13, 20, 'projecto', 'detalhe_terreno', 0, 1, '2019-02-25 16:47:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulo`
--

CREATE TABLE `modulo` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modulo`
--

INSERT INTO `modulo` (`id`, `nome`, `id_utilizador`, `data_criacao`) VALUES
(1, 'Legalizacao', 1, '2018-04-08 15:33:54'),
(2, 'Aquisicao', 1, '2018-04-08 15:33:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `morada`
--

CREATE TABLE `morada` (
  `id` int(11) NOT NULL,
  `id_comuna` int(11) NOT NULL,
  `id_cidadao` int(11) NOT NULL,
  `bairro` int(11) NOT NULL,
  `rua` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `morada`
--

INSERT INTO `morada` (`id`, `id_comuna`, `id_cidadao`, `bairro`, `rua`) VALUES
(1, 1, 1, 1, 'A36'),
(2, 1, 2, 1, 'A 21'),
(3, 2, 3, 1, 'Rua do Peixe'),
(4, 1, 4, 1, 'A 21'),
(6, 2, 6, 1, 'Rua das Catanas'),
(18, 1, 18, 1, '13'),
(22, 1, 22, 1, '12'),
(23, 1, 23, 1, '23'),
(33, 2, 33, 2, '12'),
(34, 2, 34, 2, '12'),
(35, 2, 35, 2, '12'),
(36, 2, 36, 2, '12'),
(37, 215, 37, 0, '12'),
(38, 305, 38, 0, '12'),
(39, 305, 39, 0, '12'),
(40, 230, 40, 0, '12'),
(41, 22, 41, 2, '12'),
(42, 22, 42, 2, '019'),
(43, 22, 43, 2, '019'),
(44, 22, 44, 1, '10'),
(45, 22, 45, 1, '10'),
(46, 22, 46, 1, '12'),
(47, 22, 47, 1, '12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `id_provincia` int(11) DEFAULT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `municipio`
--

INSERT INTO `municipio` (`id`, `nome`, `id_provincia`, `id_utilizador`, `data_criacao`) VALUES
(1, 'Belas', 1, 3, '2018-04-28 17:56:09'),
(2, 'Cacuaco', 1, 3, '2018-04-28 16:56:09'),
(3, 'Cazenga', 1, 3, '2018-04-28 16:56:09'),
(4, 'Icolo e Bengo', 1, 3, '2018-04-28 16:56:09'),
(5, 'Luanda', 1, 3, '2018-04-28 16:56:09'),
(6, 'Kilamba Kiaxi', 1, 3, '2018-04-28 16:56:09'),
(7, 'Talatona', 1, 3, '2018-04-28 16:56:09'),
(8, 'Quiçama', 1, 3, '2018-04-28 16:56:09'),
(9, 'Viana', 1, 3, '2018-04-28 16:56:09'),
(10, 'Ambriz', 2, 3, '2018-04-28 16:56:09'),
(11, 'Dande', 2, 3, '2018-04-28 16:56:09'),
(12, 'Dembos', 2, 3, '2018-04-28 16:56:09'),
(13, 'Bula Atumba', 2, 3, '2018-04-28 16:56:09'),
(14, 'Nambuangongo', 2, 3, '2018-04-28 16:56:09'),
(15, 'Pango Aluquém', 2, 3, '2018-04-28 16:56:09'),
(16, 'Balombo', 3, 3, '2018-04-28 16:56:09'),
(17, 'Baía Farta', 3, 3, '2018-04-28 16:56:09'),
(18, 'Benguela', 3, 3, '2018-04-28 16:56:09'),
(19, 'Bocoio', 3, 3, '2018-04-28 16:56:09'),
(20, 'Caimbambo', 3, 3, '2018-04-28 16:56:09'),
(21, 'Catumbela', 3, 3, '2018-04-28 16:56:09'),
(22, 'Chongorói', 3, 3, '2018-04-28 16:56:09'),
(23, 'Cubal', 3, 3, '2018-04-28 16:56:09'),
(24, 'Ganda', 3, 3, '2018-04-28 16:56:09'),
(25, 'Lobito', 3, 3, '2018-04-28 16:56:09'),
(26, 'Andulo', 4, 3, '2018-04-28 16:56:09'),
(27, 'Camacupa', 4, 3, '2018-04-28 16:56:09'),
(28, 'Catabola', 4, 3, '2018-04-28 16:56:09'),
(29, 'Chinguar', 4, 3, '2018-04-28 16:56:09'),
(30, 'Chitembo', 4, 3, '2018-04-28 16:56:09'),
(31, 'Cuemba', 4, 3, '2018-04-28 16:56:09'),
(32, 'Cunhinga', 4, 3, '2018-04-28 16:56:09'),
(33, 'Cuito', 4, 3, '2018-04-28 16:56:09'),
(34, 'Nharêa', 4, 3, '2018-04-28 16:56:09'),
(35, 'Belize', 5, 3, '2018-04-28 16:56:09'),
(36, 'Buco Zau', 5, 3, '2018-04-28 16:56:09'),
(37, 'Cabinda', 5, 3, '2018-04-28 16:56:09'),
(38, 'Cacongo', 5, 3, '2018-04-28 16:56:09'),
(39, 'Cahama', 6, 3, '2018-04-28 16:56:09'),
(40, 'Cuanhama', 6, 3, '2018-04-28 16:56:09'),
(41, 'Curoca', 6, 3, '2018-04-28 16:56:09'),
(42, 'Cuvelai', 6, 3, '2018-04-28 16:56:09'),
(43, 'Namacunde', 6, 3, '2018-04-28 16:56:09'),
(44, 'Ombadja', 6, 3, '2018-04-28 16:56:09'),
(45, 'Bailundo', 10, 3, '2018-04-28 16:56:09'),
(46, 'Cachiungo', 10, 3, '2018-04-28 16:56:09'),
(47, 'Caála', 10, 3, '2018-04-28 16:56:09'),
(48, 'Ecunha', 10, 3, '2018-04-28 16:56:09'),
(49, 'Huambo', 10, 3, '2018-04-28 16:56:09'),
(50, 'Londuimbali', 10, 3, '2018-04-28 16:56:09'),
(51, 'Longonjo', 10, 3, '2018-04-28 16:56:09'),
(52, 'Mungo', 10, 3, '2018-04-28 16:56:09'),
(53, 'Chicala Choloanga', 10, 3, '2018-04-28 16:56:09'),
(54, 'Chinjenje', 10, 3, '2018-04-28 16:56:09'),
(55, 'Ucuma', 10, 3, '2018-04-28 16:56:09'),
(56, 'Caconda', 11, 3, '2018-04-28 16:56:09'),
(57, 'Cacula', 11, 3, '2018-04-28 16:56:09'),
(58, 'Caluquembe', 11, 3, '2018-04-28 16:56:09'),
(59, 'Gambos', 11, 3, '2018-04-28 16:56:09'),
(60, 'Chibia', 11, 3, '2018-04-28 16:56:09'),
(61, 'Chicomba', 11, 3, '2018-04-28 16:56:09'),
(62, 'Chipindo', 11, 3, '2018-04-28 16:56:09'),
(63, 'Humpata', 11, 3, '2018-04-28 16:56:09'),
(64, 'Jamba', 11, 3, '2018-04-28 16:56:09'),
(65, 'Cuvango', 11, 3, '2018-04-28 16:56:09'),
(66, 'Lubango', 11, 3, '2018-04-28 16:56:09'),
(67, 'Matala', 11, 3, '2018-04-28 16:56:09'),
(68, 'Quilengues', 11, 3, '2018-04-28 16:56:09'),
(69, 'Quipungo', 11, 3, '2018-04-28 16:56:09'),
(70, 'Calai', 7, 3, '2018-04-28 16:56:09'),
(71, 'Cuangar', 7, 3, '2018-04-28 16:56:09'),
(72, 'Cuchi', 7, 3, '2018-04-28 16:56:09'),
(73, 'Cuito Cuanavale', 7, 3, '2018-04-28 16:56:09'),
(74, 'Dirico', 7, 3, '2018-04-28 16:56:09'),
(75, 'Nancova', 7, 3, '2018-04-28 16:56:09'),
(76, 'Mavinga', 7, 3, '2018-04-28 16:56:09'),
(77, 'Menongue', 7, 3, '2018-04-28 16:56:09'),
(78, 'Rivungo', 7, 3, '2018-04-28 16:56:09'),
(79, 'Ambaca', 8, 3, '2018-04-28 16:56:09'),
(80, 'Banga', 8, 3, '2018-04-28 16:56:09'),
(81, 'Bolongongo', 8, 3, '2018-04-28 16:56:09'),
(82, 'Cambambe', 8, 3, '2018-04-28 16:56:09'),
(83, 'Cazengo', 8, 3, '2018-04-28 16:56:09'),
(84, 'Golungo Alto', 8, 3, '2018-04-28 16:56:09'),
(85, 'Ngonguembo', 8, 3, '2018-04-28 16:56:09'),
(86, 'Lucala', 8, 3, '2018-04-28 16:56:09'),
(87, 'Quiculungo', 8, 3, '2018-04-28 16:56:09'),
(88, 'Samba Cajú', 8, 3, '2018-04-28 16:56:09'),
(89, 'Amboim', 9, 3, '2018-04-28 16:56:09'),
(90, 'Cassongue', 9, 3, '2018-04-28 16:56:09'),
(91, 'Conda', 9, 3, '2018-04-28 16:56:09'),
(92, 'Ebo', 9, 3, '2018-04-28 16:56:09'),
(93, 'Libolo', 9, 3, '2018-04-28 16:56:09'),
(94, 'Mussende', 9, 3, '2018-04-28 16:56:09'),
(95, 'Porto Amboim', 9, 3, '2018-04-28 16:56:09'),
(96, 'Quibala', 9, 3, '2018-04-28 16:56:09'),
(97, 'Quilenda', 9, 3, '2018-04-28 16:56:09'),
(98, 'Seles', 9, 3, '2018-04-28 16:56:09'),
(99, 'Sumbe', 9, 3, '2018-04-28 16:56:09'),
(100, 'Cela', 9, 3, '2018-04-28 16:56:09'),
(101, 'Cambulo', 12, 3, '2018-04-28 16:56:09'),
(102, 'Capenda Camulemba', 12, 3, '2018-04-28 16:56:09'),
(103, 'Caungula', 12, 3, '2018-04-28 16:56:09'),
(104, 'Chitato', 12, 3, '2018-04-28 16:56:09'),
(105, 'Cuango', 12, 3, '2018-04-28 16:56:09'),
(106, 'Cuilo', 12, 3, '2018-04-28 16:56:09'),
(107, 'Lubalo', 12, 3, '2018-04-28 16:56:09'),
(108, 'Lucapa', 12, 3, '2018-04-28 16:56:09'),
(109, 'Xá Muteba', 12, 3, '2018-04-28 16:56:09'),
(110, 'Lóvua', 12, 3, '2018-04-28 16:56:09'),
(111, 'Cacolo', 13, 3, '2018-04-28 16:56:09'),
(112, 'Dala', 13, 3, '2018-04-28 16:56:09'),
(113, 'Muconda', 13, 3, '2018-04-28 16:56:09'),
(114, 'Saurimo', 13, 3, '2018-04-28 16:56:09'),
(115, 'Cacuso', 14, 3, '2018-04-28 16:56:09'),
(116, 'Calandula', 14, 3, '2018-04-28 16:56:09'),
(117, 'Cambundi Catembo', 14, 3, '2018-04-28 16:56:09'),
(118, 'Cangandala', 14, 3, '2018-04-28 16:56:09'),
(119, 'Cahombo', 14, 3, '2018-04-28 16:56:09'),
(120, 'Kiwaba \'Zogi', 14, 3, '2018-04-28 16:56:09'),
(121, 'Cunda-Dia-Baze', 14, 3, '2018-04-28 16:56:09'),
(122, 'Luquembo', 14, 3, '2018-04-28 16:56:09'),
(123, 'Malanje', 14, 3, '2018-04-28 16:56:09'),
(124, 'Marimba', 14, 3, '2018-04-28 16:56:09'),
(125, 'Massango', 14, 3, '2018-04-28 16:56:09'),
(126, 'Caculama', 14, 3, '2018-04-28 16:56:09'),
(127, 'Quela', 14, 3, '2018-04-28 16:56:09'),
(128, 'Quirima', 14, 3, '2018-04-28 16:56:09'),
(129, 'Alto Zambeze', 15, 3, '2018-04-28 16:56:09'),
(130, 'Bundas', 15, 3, '2018-04-28 16:56:09'),
(131, 'Camanongue', 15, 3, '2018-04-28 16:56:09'),
(132, 'Cameia', 15, 3, '2018-04-28 16:56:09'),
(133, 'Luau', 15, 3, '2018-04-28 16:56:09'),
(134, 'Luacano', 15, 3, '2018-04-28 16:56:09'),
(135, 'Luchazes', 15, 3, '2018-04-28 16:56:09'),
(136, 'Léua', 15, 3, '2018-04-28 16:56:09'),
(137, 'Moxico', 15, 3, '2018-04-28 16:56:09'),
(138, 'Bibala', 16, 3, '2018-04-28 16:56:09'),
(139, 'Camacuio', 16, 3, '2018-04-28 16:56:09'),
(140, 'Moçâmedes', 16, 3, '2018-04-28 16:56:09'),
(141, 'Tômbwa', 16, 3, '2018-04-28 16:56:09'),
(142, 'Virei', 16, 3, '2018-04-28 16:56:09'),
(143, 'Alto Cauale', 17, 3, '2018-04-28 16:56:09'),
(144, 'Ambuíla', 17, 3, '2018-04-28 16:56:09'),
(145, 'Bembe', 17, 3, '2018-04-28 16:56:09'),
(146, 'Buengas', 17, 3, '2018-04-28 16:56:09'),
(147, 'Bungo', 17, 3, '2018-04-28 16:56:09'),
(148, 'Damba', 17, 3, '2018-04-28 16:56:09'),
(149, 'Milunga', 17, 3, '2018-04-28 16:56:09'),
(150, 'Mucaba', 17, 3, '2018-04-28 16:56:09'),
(151, 'Negage', 17, 3, '2018-04-28 16:56:09'),
(152, 'Puri', 17, 3, '2018-04-28 16:56:09'),
(153, 'Quimbele', 17, 3, '2018-04-28 16:56:09'),
(154, 'Dange Quitexe', 17, 3, '2018-04-28 16:56:09'),
(155, 'Pombo', 17, 3, '2018-04-28 16:56:09'),
(156, 'Songo', 17, 3, '2018-04-28 16:56:09'),
(157, 'Uíge', 17, 3, '2018-04-28 16:56:09'),
(158, 'Maquela do Zombo', 17, 3, '2018-04-28 16:56:09'),
(159, 'Cuimba', 18, 3, '2018-04-28 16:56:09'),
(160, 'Mbanza Kongo', 18, 3, '2018-04-28 16:56:09'),
(161, 'Nóqui', 18, 3, '2018-04-28 16:56:09'),
(162, 'Nzeto', 18, 3, '2018-04-28 16:56:09'),
(163, 'Soyo', 18, 3, '2018-04-28 16:56:09'),
(164, 'Tomboco', 18, 3, '2018-04-28 16:56:09'),
(165, 'Dundo', 12, 3, '2018-04-28 16:56:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `sigla` varchar(3) NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pais`
--

INSERT INTO `pais` (`id`, `sigla`, `nome`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'AS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua And Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas The'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CD', 'Congo The Democratic Republic Of The'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)'),
(54, 'HR', 'Croatia (Hrvatska)'),
(55, 'CU', 'Cuba'),
(56, 'CY', 'Cyprus'),
(57, 'CZ', 'Czech Republic'),
(58, 'DK', 'Denmark'),
(59, 'DJ', 'Djibouti'),
(60, 'DM', 'Dominica'),
(61, 'DO', 'Dominican Republic'),
(62, 'TP', 'East Timor'),
(63, 'EC', 'Ecuador'),
(64, 'EG', 'Egypt'),
(65, 'SV', 'El Salvador'),
(66, 'GQ', 'Equatorial Guinea'),
(67, 'ER', 'Eritrea'),
(68, 'EE', 'Estonia'),
(69, 'ET', 'Ethiopia'),
(70, 'XA', 'External Territories of Australia'),
(71, 'FK', 'Falkland Islands'),
(72, 'FO', 'Faroe Islands'),
(73, 'FJ', 'Fiji Islands'),
(74, 'FI', 'Finland'),
(75, 'FR', 'France'),
(76, 'GF', 'French Guiana'),
(77, 'PF', 'French Polynesia'),
(78, 'TF', 'French Southern Territories'),
(79, 'GA', 'Gabon'),
(80, 'GM', 'Gambia The'),
(81, 'GE', 'Georgia'),
(82, 'DE', 'Germany'),
(83, 'GH', 'Ghana'),
(84, 'GI', 'Gibraltar'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'XU', 'Guernsey and Alderney'),
(92, 'GN', 'Guinea'),
(93, 'GW', 'Guinea-Bissau'),
(94, 'GY', 'Guyana'),
(95, 'HT', 'Haiti'),
(96, 'HM', 'Heard and McDonald Islands'),
(97, 'HN', 'Honduras'),
(98, 'HK', 'Hong Kong S.A.R.'),
(99, 'HU', 'Hungary'),
(100, 'IS', 'Iceland'),
(101, 'IN', 'India'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'JM', 'Jamaica'),
(109, 'JP', 'Japan'),
(110, 'XJ', 'Jersey'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea North'),
(116, 'KR', 'Korea South'),
(117, 'KW', 'Kuwait'),
(118, 'KG', 'Kyrgyzstan'),
(119, 'LA', 'Laos'),
(120, 'LV', 'Latvia'),
(121, 'LB', 'Lebanon'),
(122, 'LS', 'Lesotho'),
(123, 'LR', 'Liberia'),
(124, 'LY', 'Libya'),
(125, 'LI', 'Liechtenstein'),
(126, 'LT', 'Lithuania'),
(127, 'LU', 'Luxembourg'),
(128, 'MO', 'Macau S.A.R.'),
(129, 'MK', 'Macedonia'),
(130, 'MG', 'Madagascar'),
(131, 'MW', 'Malawi'),
(132, 'MY', 'Malaysia'),
(133, 'MV', 'Maldives'),
(134, 'ML', 'Mali'),
(135, 'MT', 'Malta'),
(136, 'XM', 'Man (Isle of)'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'YT', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia'),
(144, 'MD', 'Moldova'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'MS', 'Montserrat'),
(148, 'MA', 'Morocco'),
(149, 'MZ', 'Mozambique'),
(150, 'MM', 'Myanmar'),
(151, 'NA', 'Namibia'),
(152, 'NR', 'Nauru'),
(153, 'NP', 'Nepal'),
(154, 'AN', 'Netherlands Antilles'),
(155, 'NL', 'Netherlands The'),
(156, 'NC', 'New Caledonia'),
(157, 'NZ', 'New Zealand'),
(158, 'NI', 'Nicaragua'),
(159, 'NE', 'Niger'),
(160, 'NG', 'Nigeria'),
(161, 'NU', 'Niue'),
(162, 'NF', 'Norfolk Island'),
(163, 'MP', 'Northern Mariana Islands'),
(164, 'NO', 'Norway'),
(165, 'OM', 'Oman'),
(166, 'PK', 'Pakistan'),
(167, 'PW', 'Palau'),
(168, 'PS', 'Palestinian Territory Occupied'),
(169, 'PA', 'Panama'),
(170, 'PG', 'Papua new Guinea'),
(171, 'PY', 'Paraguay'),
(172, 'PE', 'Peru'),
(173, 'PH', 'Philippines'),
(174, 'PN', 'Pitcairn Island'),
(175, 'PL', 'Poland'),
(176, 'PT', 'Portugal'),
(177, 'PR', 'Puerto Rico'),
(178, 'QA', 'Qatar'),
(179, 'RE', 'Reunion'),
(180, 'RO', 'Romania'),
(181, 'RU', 'Russia'),
(182, 'RW', 'Rwanda'),
(183, 'SH', 'Saint Helena'),
(184, 'KN', 'Saint Kitts And Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'PM', 'Saint Pierre and Miquelon'),
(187, 'VC', 'Saint Vincent And The Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'XG', 'Smaller Territories of the UK'),
(200, 'SB', 'Solomon Islands'),
(201, 'SO', 'Somalia'),
(202, 'ZA', 'South Africa'),
(203, 'GS', 'South Georgia'),
(204, 'SS', 'South Sudan'),
(205, 'ES', 'Spain'),
(206, 'LK', 'Sri Lanka'),
(207, 'SD', 'Sudan'),
(208, 'SR', 'Suriname'),
(209, 'SJ', 'Svalbard And Jan Mayen Islands'),
(210, 'SZ', 'Swaziland'),
(211, 'SE', 'Sweden'),
(212, 'CH', 'Switzerland'),
(213, 'SY', 'Syria'),
(214, 'TW', 'Taiwan'),
(215, 'TJ', 'Tajikistan'),
(216, 'TZ', 'Tanzania'),
(217, 'TH', 'Thailand'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad And Tobago'),
(222, 'TN', 'Tunisia'),
(223, 'TR', 'Turkey'),
(224, 'TM', 'Turkmenistan'),
(225, 'TC', 'Turks And Caicos Islands'),
(226, 'TV', 'Tuvalu'),
(227, 'UG', 'Uganda'),
(228, 'UA', 'Ukraine'),
(229, 'AE', 'United Arab Emirates'),
(230, 'GB', 'United Kingdom'),
(231, 'US', 'United States'),
(232, 'UM', 'United States Minor Outlying Islands'),
(233, 'UY', 'Uruguay'),
(234, 'UZ', 'Uzbekistan'),
(235, 'VU', 'Vanuatu'),
(236, 'VA', 'Vatican City State (Holy See)'),
(237, 'VE', 'Venezuela'),
(238, 'VN', 'Vietnam'),
(239, 'VG', 'Virgin Islands (British)'),
(240, 'VI', 'Virgin Islands (US)'),
(241, 'WF', 'Wallis And Futuna Islands'),
(242, 'EH', 'Western Sahara'),
(243, 'YE', 'Yemen'),
(244, 'YU', 'Yugoslavia'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parametro_estado_grupo`
--

CREATE TABLE `parametro_estado_grupo` (
  `id` int(11) NOT NULL,
  `estado_processo` int(11) NOT NULL,
  `sigla_role` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `parametro_estado_grupo`
--

INSERT INTO `parametro_estado_grupo` (`id`, `estado_processo`, `sigla_role`) VALUES
(1, 1, 'secretaria'),
(2, 2, 'admin'),
(3, 3, 'dmguuc'),
(4, 4, 'cruc'),
(5, 5, 'TRUC'),
(6, -1, 'cruc'),
(7, -2, 'dmguuc');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parecer`
--

CREATE TABLE `parecer` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_utilizador` int(11) NOT NULL,
  `id_processo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `parecer`
--

INSERT INTO `parecer` (`id`, `descricao`, `data_criacao`, `id_utilizador`, `id_processo`) VALUES
(1, 'Trate bem deste vaso.<br>', '2018-11-28 13:44:17', 7, 1),
(2, 'Tomei conhecimento.<br>', '2018-11-28 19:22:47', 4, 1),
(3, 'Cuide bem deste processo<br>', '2018-12-06 15:02:20', 8, 1),
(4, 'Tomei conhecimento.<br>', '2018-12-06 15:09:32', 10, 1),
(5, 'Está nos conformes.<br>', '2018-12-06 15:48:03', 8, 1),
(6, '<b></b>Teste de parecer...<br>', '2018-12-07 15:40:18', 7, 2),
(7, 'Cuide bem deste processo.<br>', '2018-12-07 15:41:29', 4, 2),
(8, 'Tomei conhecimento...<br>', '2018-12-07 15:43:23', 8, 2),
(9, 'Tomei conhecimento<br>', '2019-06-13 06:53:35', 7, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `parecer_comun`
--

CREATE TABLE `parecer_comun` (
  `id` int(11) NOT NULL,
  `parecer` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `parecer_comun`
--

INSERT INTO `parecer_comun` (`id`, `parecer`, `estado`) VALUES
(1, 'T.C.', 1),
(2, 'T.C tem a minha aprovaÃ§Ã¥o', 1),
(3, 'Processo aprovado', 1),
(4, 'Preciso de mais detalhes ', 1),
(5, 'T.C. ver o que se pode fazer', 1),
(6, 'T.C. cuidar deste processo, se puder vai ao terreno', 1),
(7, 'Processo reprovado', 1),
(8, 'T.C. cuidar deste processo, vai mesmo ao terreno', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `poligono`
--

CREATE TABLE `poligono` (
  `id` int(11) NOT NULL,
  `id_zona` int(11) NOT NULL,
  `id_terreno` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `p_front` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `poligono`
--

INSERT INTO `poligono` (`id`, `id_zona`, `id_terreno`, `latitude`, `longitude`, `p_front`) VALUES
(1, 15, 1, 1212, 121212, 0),
(2, 15, 1, 12121, 12, 0),
(3, 15, 1, 22, 112, 0),
(4, 15, 1, 232, 23232, 0),
(5, 15, 2, 23232, 121212, 0),
(6, 15, 2, 232, 2323, 0),
(7, 15, 2, 4545, 2121, 0),
(8, 15, 2, 31, 323, 0),
(9, 15, 3, 4545, 6555, 0),
(10, 15, 3, 6434, 575, 0),
(11, 15, 3, 6434, 434343, 0),
(12, 15, 3, 6564, 434343, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ponto`
--

CREATE TABLE `ponto` (
  `id` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `id_terreno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prioridade`
--

CREATE TABLE `prioridade` (
  `id` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prioridade`
--

INSERT INTO `prioridade` (`id`, `descricao`, `estado`) VALUES
(1, 'Normal', 1),
(2, 'Urgente', 1),
(3, 'Muito Urgente', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo`
--

CREATE TABLE `processo` (
  `id` int(11) NOT NULL,
  `id_assunto` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `codigo` varchar(10) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `id_utente` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `processo`
--

INSERT INTO `processo` (`id`, `id_assunto`, `data_criacao`, `codigo`, `id_utilizador`, `id_utente`, `estado`) VALUES
(1, 2, '2018-11-24 02:11:58', '001/LT/18', 5, 1, 1),
(2, 2, '2018-11-27 10:11:58', '002/LT/18', 5, 2, 1),
(3, 2, '2018-11-27 10:11:05', '003/LT/18', 5, 3, 1),
(7, 1, '2019-02-18 22:10:56', '004/AQ/18', 5, 10, 1),
(8, 1, '2019-02-18 10:02:07', '005/AQ/19', 5, 5, 1),
(9, 2, '2019-06-13 07:06:32', '006/LT/19', 5, 13, 1),
(10, 1, '2019-06-13 11:06:55', '007/AQ/19', 5, 8, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo_administracao`
--

CREATE TABLE `processo_administracao` (
  `id` int(11) NOT NULL,
  `id_processo` int(11) NOT NULL,
  `id_administracao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo_documento`
--

CREATE TABLE `processo_documento` (
  `id` int(11) NOT NULL,
  `id_processo` int(11) NOT NULL,
  `id_documento` int(11) NOT NULL,
  `foto` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `processo_documento`
--

INSERT INTO `processo_documento` (`id`, `id_processo`, `id_documento`, `foto`) VALUES
(1, 1, 2, 'dhulka-df356f8ee1604ba575d3938b68b02fbc.jpg'),
(2, 1, 3, 'dhulka-e82299084458b467180d106276c6a568.jpg'),
(3, 2, 2, 'dhulka-9ea0d7447a99c1a5b992b6dabdaaaa23.jpg'),
(4, 2, 3, 'dhulka-fd21f35befd46e61040ae5887a09dd9b.jpg'),
(5, 2, 4, 'dhulka-26ce1bb570fad7a30cbff124357f01c0.jpg'),
(6, 2, 5, 'dhulka-fbe66a087ffe653d0afc85c459353ab2.jpg'),
(7, 3, 2, 'dhulka-496bedc45620947393c93e7f1ffa6345.jpg'),
(8, 3, 3, 'dhulka-88e971aef2b2d52164a5c20fd8eb42cd.jpg'),
(9, 3, 4, 'dhulka-ca9b86ceea67413599f0d5ea77eddfea.jpg'),
(19, 7, 2, 'dhulka-candidatura-bf6816f97b702d1c7998aa9c654fb83a.jpg'),
(20, 7, 3, 'dhulka-candidatura-26b8b04da65139cbd4f9fca811c9510e.jpg'),
(21, 7, 4, 'dhulka-candidatura-524dda857413c1218ab31a09c3e28417.jpg'),
(22, 7, 6, 'dhulka-candidatura-bd946b063776d8ff11e54bb394b08a49.jpg'),
(23, 7, 7, 'dhulka-candidatura-f2e4c1e2451b40ef1b3fe45c5a841fc8.jpg'),
(24, 8, 2, 'dhulka-candidatura-43e668f9b350a784266b080e47add4e3.jpg'),
(25, 8, 4, 'dhulka-candidatura-64682941c5598e189ab7f38da0ce856d.jpg'),
(26, 8, 6, 'dhulka-candidatura-347f549d4627977c958c1ef9556a4a26.jpg'),
(27, 8, 7, 'dhulka-candidatura-9671a5461278c55fd12ffd1b90552f55.jpg'),
(28, 9, 2, 'dhulka-d883896aa55c355c54a2f731df6f02f1.jpg'),
(29, 9, 3, 'dhulka-1ad8ae6dbc41539d3320beecf25f30fc.jpg'),
(30, 9, 4, 'dhulka-ccb8817f5098b2919fed366c3c6ae311.jpg'),
(31, 9, 5, 'dhulka-52d2445ccc89ef15bfd2c2e65d9d1c64.jpg'),
(32, 9, 6, 'dhulka-f5a8e617eeaa272b3ba2398b9a4183ef.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo_tecnico`
--

CREATE TABLE `processo_tecnico` (
  `id` int(11) NOT NULL,
  `id_processo` int(11) NOT NULL,
  `id_tecnico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `processo_tecnico`
--

INSERT INTO `processo_tecnico` (`id`, `id_processo`, `id_tecnico`) VALUES
(1, 1, 10),
(2, 2, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projecto`
--

CREATE TABLE `projecto` (
  `id` int(11) NOT NULL,
  `id_bairro` int(11) NOT NULL,
  `coordenador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projecto`
--

INSERT INTO `projecto` (`id`, `id_bairro`, `coordenador`, `data_criacao`, `estado`) VALUES
(1, 15, 3, '2019-02-24 18:12:09', 1),
(2, 16, 3, '2019-03-04 09:55:01', 1),
(3, 17, 2, '2019-03-04 23:55:57', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projecto_descricao`
--

CREATE TABLE `projecto_descricao` (
  `id` int(11) NOT NULL,
  `id_projecto` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `qtde_terreno` int(11) NOT NULL,
  `area_projecto` float NOT NULL,
  `publico_alvo` varchar(200) NOT NULL,
  `dist_terrenos` float NOT NULL,
  `espaco_rua` float NOT NULL,
  `data_limite_expo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projecto_descricao`
--

INSERT INTO `projecto_descricao` (`id`, `id_projecto`, `descricao`, `qtde_terreno`, `area_projecto`, `publico_alvo`, `dist_terrenos`, `espaco_rua`, `data_limite_expo`) VALUES
(1, 1, '<h2><b>Lorem</b></h2><pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid autem commodi esse eum ex facilis minima minus molestiae, molestias nobis non<br>, placeat quibusdam, saepe temporibus voluptatem? Culpa distinctio repudiandae soluta?<br></pre><br><br>', 10, 1000, 'Jardineiros, Vendedores ambulantes.', 1, 1, '2019-02-28'),
(2, 2, '<div><b>Teste</b><br></div><div>Teste, teste2, teste3, teste4, teste5, teste5, teste6, teste7, teste8, teste9, teste10, teste11, teste12, teste13, teste14, teste15, teste16</div><div>Teste17, teste18, teste19, teste20.<br></div>', 10, 1000, 'Teste, teste2, teste3', 1, 1, '2019-04-04'),
(3, 3, '<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad commodi, cupiditate, explicabo magnam maxime mollitia nam porro provident reprehenderit repudiandae sed tempora tenetur. Architecto distinctio laboriosam minima necessitatibus tempore!</pre><br>', 100, 1000, 'Vendedores, Estuantes', 1, 1, '2019-07-31'),
(4, 3, '<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad commodi, cupiditate, explicabo magnam maxime mollitia nam porro provident reprehenderit repudiandae sed tempora tenetur. Architecto distinctio laboriosam minima necessitatibus tempore!</pre><br>', 100, 1000, 'Vendedores, Estuantes', 1, 1, '2019-07-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projecto_terreno`
--

CREATE TABLE `projecto_terreno` (
  `id` int(11) NOT NULL,
  `id_projecto` int(11) NOT NULL,
  `id_terreno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `projecto_terreno`
--

INSERT INTO `projecto_terreno` (`id`, `id_projecto`, `id_terreno`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `provincia`
--

CREATE TABLE `provincia` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sigla` varchar(2) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `id_utilizador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `provincia`
--

INSERT INTO `provincia` (`id`, `nome`, `sigla`, `longitude`, `latitude`, `id_utilizador`) VALUES
(1, 'Luanda', 'LA', -8.1933, 13.1933, 0),
(2, 'Bengo', 'BO', -8.1933, 13.1933, 0),
(3, 'Benguela', 'BA', -8.1933, 13.1933, 0),
(4, 'Bié', 'BE', -8.1933, 13.1933, 0),
(5, 'Cabinda', 'CA', -8.1933, 13.1933, 0),
(6, 'Cunene', 'CE', -8.1933, 13.1933, 0),
(7, 'Cuando Cubango', 'KK', -8.1933, 13.1933, 0),
(8, 'Cuanza Norte', 'KN', -8.1933, 13.1933, 0),
(9, 'Cuanza Sul', 'KS', -8.1933, 13.1933, 0),
(10, 'Huambo', 'HO', -8.1933, 13.1933, 0),
(11, 'Huíla', 'HA', -8.1933, 13.1933, 0),
(12, 'Lunda Norte', 'LN', -8.1933, 13.1933, 0),
(13, 'Lunda Sul', 'LS', -8.1933, 13.1933, 0),
(14, 'Malanje', 'ME', -8.1933, 13.1933, 0),
(15, 'Moxico', 'MO', -8.1933, 13.1933, 0),
(16, 'Namibe', 'NE', -8.1933, 13.1933, 0),
(17, 'Uíge', 'UE', -8.1933, 13.1933, 0),
(18, 'Zaire', 'ZE', -8.1933, 13.1933, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reparticao`
--

CREATE TABLE `reparticao` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `estado` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reparticao`
--

INSERT INTO `reparticao` (`id`, `nome`, `estado`, `id_provincia`, `id_utilizador`, `data_criacao`) VALUES
(1, 'REPARTIÃ‡ÃƒO PROVINCIAL - CUANZA SUL', 1, 2, 3, '2018-04-28 17:10:27'),
(2, 'REPARTIÃ‡ÃƒO PROVINCIAL - MOXICO', 1, 5, 3, '2018-04-28 14:05:58'),
(3, 'REPARTIÃ‡ÃƒO PROVINCIAL - CABINDA', 1, 13, 3, '2018-04-28 19:10:17'),
(4, 'REPARTIÃ‡ÃƒO PROVINCIAL - LUNDA SUL', 1, 9, 3, '2018-04-29 12:19:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `representante`
--

CREATE TABLE `representante` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `bi` varchar(16) NOT NULL,
  `data_nascimento` date NOT NULL,
  `genero` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `representante_documento`
--

CREATE TABLE `representante_documento` (
  `id` int(11) NOT NULL,
  `id_representante` int(11) NOT NULL,
  `id_documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `role`
--

INSERT INTO `role` (`id`, `nome`, `sigla`, `id_utilizador`, `data_criacao`) VALUES
(1, 'Administrador', 'admin', 1, '2018-08-26 17:06:04'),
(2, 'operador', 'secretaria', 1, '2018-08-26 12:18:15'),
(3, 'director', 'dmguuc', 1, '2018-04-10 17:03:50'),
(4, 'Admin TI', 'ATIA', 1, '2018-04-17 18:56:19'),
(5, 'Técnico de Campo', 'TRUC', 1, '2019-02-19 10:05:24'),
(6, 'Admin TI Repartição', 'ATIR', 1, '2019-02-19 10:05:32'),
(8, 'Master', 'MST', 2, '2018-04-26 12:04:08'),
(9, 'Testes', 'Ts', 1, '2018-08-12 19:51:47'),
(10, 'Chefe R.U.C', 'cruc', 1, '2018-09-08 14:01:38'),
(11, 'Técnico Administrativo', 'TRUCA', 1, '2019-02-19 10:05:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `role_menu_sub_menu`
--

CREATE TABLE `role_menu_sub_menu` (
  `id` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_menu_sub_menu` int(11) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `role_menu_sub_menu`
--

INSERT INTO `role_menu_sub_menu` (`id`, `id_role`, `id_menu_sub_menu`, `id_utilizador`, `data_criacao`) VALUES
(13, 1, 2, 1, '2018-04-26 00:18:09'),
(14, 1, 1, 1, '2018-04-26 00:18:09'),
(18, 2, 2, 1, '2018-04-26 00:28:43'),
(23, 2, 3, 1, '2018-04-26 06:51:13'),
(34, 8, 11, 2, '2018-04-26 12:09:13'),
(35, 8, 12, 2, '2018-04-26 12:09:13'),
(36, 8, 10, 2, '2018-04-26 12:09:13'),
(37, 8, 9, 2, '2018-04-26 12:09:13'),
(38, 8, 15, 2, '2018-04-26 12:09:13'),
(39, 8, 16, 2, '2018-04-26 12:09:13'),
(40, 8, 14, 2, '2018-04-26 12:09:13'),
(41, 8, 13, 2, '2018-04-26 12:09:13'),
(42, 8, 23, 2, '2018-04-26 12:09:13'),
(43, 8, 24, 2, '2018-04-26 12:09:13'),
(44, 8, 22, 2, '2018-04-26 12:09:13'),
(45, 8, 21, 2, '2018-04-26 12:09:13'),
(46, 8, 7, 2, '2018-04-26 12:09:13'),
(47, 8, 8, 2, '2018-04-26 12:09:13'),
(48, 8, 6, 2, '2018-04-26 12:09:13'),
(49, 8, 5, 2, '2018-04-26 12:09:13'),
(62, 3, 32, 3, '2018-04-26 18:59:05'),
(63, 3, 2, 3, '2018-04-26 18:59:06'),
(64, 8, 35, 3, '2018-04-26 19:19:00'),
(65, 8, 36, 3, '2018-04-26 19:19:00'),
(66, 8, 34, 3, '2018-04-26 19:19:00'),
(67, 8, 33, 3, '2018-04-26 19:19:00'),
(70, 8, 39, 3, '2018-04-27 12:58:33'),
(71, 8, 40, 3, '2018-04-27 12:58:33'),
(72, 8, 38, 3, '2018-04-27 12:58:33'),
(73, 8, 37, 3, '2018-04-27 12:58:33'),
(74, 5, 32, 3, '2018-04-27 13:09:22'),
(75, 5, 27, 3, '2018-04-27 13:09:22'),
(76, 5, 2, 3, '2018-04-27 13:09:22'),
(81, 8, 42, 3, '2018-04-27 13:48:06'),
(86, 6, 23, 3, '2018-04-28 15:49:18'),
(87, 6, 24, 3, '2018-04-28 15:49:19'),
(90, 8, 43, 3, '2018-04-28 18:24:34'),
(91, 8, 44, 3, '2018-04-28 18:24:34'),
(98, 2, 46, 3, '2018-04-29 12:28:35'),
(99, 2, 47, 3, '2018-04-29 12:28:35'),
(102, 4, 15, 3, '2018-04-29 14:34:50'),
(103, 4, 42, 3, '2018-04-29 14:34:50'),
(104, 4, 16, 3, '2018-04-29 14:34:50'),
(105, 4, 14, 3, '2018-04-29 14:34:50'),
(106, 4, 13, 3, '2018-04-29 14:34:50'),
(107, 4, 7, 3, '2018-04-29 14:34:50'),
(108, 4, 8, 3, '2018-04-29 14:34:50'),
(109, 4, 6, 3, '2018-04-29 14:34:50'),
(110, 4, 5, 3, '2018-04-29 14:34:50'),
(111, 9, 19, 3, '2018-08-12 19:53:10'),
(112, 9, 20, 3, '2018-08-12 19:53:10'),
(113, 9, 18, 3, '2018-08-12 19:53:10'),
(114, 9, 17, 3, '2018-08-12 19:53:10'),
(115, 9, 26, 3, '2018-08-12 19:53:42'),
(116, 9, 32, 3, '2018-08-12 19:53:42'),
(117, 3, 51, 3, '2018-08-13 10:15:48'),
(118, 3, 52, 3, '2018-08-13 10:15:48'),
(119, 3, 50, 3, '2018-08-13 10:15:48'),
(120, 3, 49, 3, '2018-08-13 10:15:48'),
(121, 2, 53, 3, '2018-08-13 21:22:20'),
(122, 2, 53, 3, '2018-08-13 21:22:40'),
(123, 2, 54, 3, '2018-08-13 21:29:01'),
(124, 2, 55, 3, '2018-08-13 21:29:01'),
(125, 8, 58, 3, '2018-08-14 20:52:36'),
(126, 8, 59, 3, '2018-08-14 20:52:36'),
(127, 8, 57, 3, '2018-08-14 20:52:36'),
(128, 8, 56, 3, '2018-08-14 20:52:36'),
(135, 8, 64, 3, '2018-08-24 15:30:30'),
(136, 8, 63, 3, '2018-08-24 15:30:30'),
(137, 4, 64, 6, '2018-08-25 16:26:58'),
(138, 4, 63, 6, '2018-08-25 16:26:58'),
(139, 2, 48, 1, '2018-08-26 12:24:03'),
(141, 2, 62, 1, '2018-08-26 12:24:04'),
(148, 2, 27, 1, '2018-08-26 14:51:25'),
(149, 2, 26, 1, '2018-08-26 14:51:25'),
(150, 2, 32, 1, '2018-08-26 14:51:25'),
(151, 2, 25, 1, '2018-08-26 14:51:25'),
(156, 4, 11, 6, '2018-08-26 14:57:37'),
(157, 4, 12, 6, '2018-08-26 14:57:37'),
(158, 4, 10, 6, '2018-08-26 14:57:37'),
(159, 4, 9, 6, '2018-08-26 14:57:37'),
(160, 4, 58, 6, '2018-08-26 14:57:37'),
(161, 4, 59, 6, '2018-08-26 14:57:37'),
(162, 4, 57, 6, '2018-08-26 14:57:37'),
(163, 4, 56, 6, '2018-08-26 14:57:37'),
(164, 4, 43, 6, '2018-08-26 14:57:37'),
(165, 4, 44, 6, '2018-08-26 14:57:37'),
(166, 4, 22, 6, '2018-08-26 14:57:37'),
(167, 4, 21, 6, '2018-08-26 14:57:37'),
(168, 1, 60, 1, '2018-08-26 15:08:35'),
(169, 1, 61, 1, '2018-08-26 15:09:52'),
(170, 1, 62, 1, '2018-08-26 15:09:52'),
(171, 1, 47, 1, '2018-08-26 15:09:52'),
(172, 2, 60, 6, '2018-08-26 15:31:16'),
(173, 2, 4, 6, '2018-08-26 15:31:16'),
(174, 4, 53, 6, '2018-09-05 14:57:59'),
(175, 3, 61, 1, '2018-09-08 12:22:23'),
(176, 3, 62, 1, '2018-09-08 12:22:23'),
(177, 3, 47, 1, '2018-09-08 12:22:24'),
(178, 10, 61, 1, '2018-09-08 14:02:41'),
(179, 10, 62, 1, '2018-09-08 14:02:41'),
(180, 10, 47, 1, '2018-09-08 14:02:41'),
(181, 1, 65, 1, '2018-09-08 14:19:26'),
(182, 10, 65, 1, '2018-09-08 14:19:44'),
(183, 3, 65, 1, '2018-09-08 14:20:05'),
(184, 10, 2, 1, '2018-09-14 10:07:46'),
(186, 3, 60, 6, '2018-09-14 12:49:58'),
(187, 3, 53, 6, '2018-09-14 12:51:06'),
(188, 3, 66, 1, '2018-09-14 16:12:27'),
(194, 10, 66, 1, '2018-09-17 12:32:36'),
(195, 10, 66, 1, '2018-09-17 12:32:58'),
(196, 10, 50, 1, '2018-09-17 12:32:58'),
(197, 1, 66, 1, '2018-09-17 13:10:14'),
(198, 1, 50, 1, '2018-09-17 13:10:14'),
(199, 2, 50, 1, '2018-09-18 09:07:05'),
(200, 2, 66, 1, '2018-09-18 09:07:05'),
(201, 1, 67, 1, '2018-09-22 13:39:43'),
(202, 3, 67, 1, '2018-09-22 13:40:06'),
(203, 10, 67, 1, '2018-09-22 13:40:59'),
(204, 5, 61, 1, '2018-09-23 13:43:39'),
(205, 5, 47, 1, '2018-09-23 13:43:39'),
(206, 5, 65, 1, '2018-09-23 13:43:40'),
(207, 5, 68, 1, '2018-09-23 18:19:26'),
(208, 5, 67, 6, '2018-09-23 19:08:37'),
(209, 5, 66, 1, '2018-09-24 11:45:23'),
(210, 5, 50, 1, '2018-09-24 11:45:23'),
(215, 5, 69, 1, '2018-09-25 15:50:44'),
(216, 5, 70, 1, '2018-09-25 15:50:44'),
(217, 5, 72, 1, '2018-09-25 15:50:44'),
(218, 5, 71, 1, '2018-09-25 15:50:44'),
(219, 2, 61, 1, '2018-09-28 16:58:48'),
(220, 2, 1, 1, '2018-09-28 17:05:19'),
(221, 8, 47, 1, '2018-11-28 08:39:06'),
(222, 8, 61, 1, '2018-11-28 08:39:06'),
(223, 2, 73, 1, '2018-11-28 18:48:33'),
(224, 2, 75, 1, '2019-02-12 18:29:36'),
(225, 1, 69, 1, '2019-02-19 10:10:44'),
(226, 1, 70, 1, '2019-02-19 10:10:44'),
(227, 1, 76, 1, '2019-02-22 15:39:11'),
(228, 2, 76, 1, '2019-02-22 19:27:58'),
(229, 2, 69, 1, '2019-02-22 19:27:59'),
(231, 2, 79, 1, '2019-02-25 16:47:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `nome`, `icon`, `id_utilizador`, `data_criacao`) VALUES
(1, 'Novo', 'fa fa-plus', 1, '2018-04-26 01:17:44'),
(2, 'Listar', 'fa fa-list', 1, '2018-08-14 20:06:01'),
(3, 'Actualizar', 'fa fa-edit', 1, '2018-04-26 01:18:05'),
(4, 'Eliminar', 'fa fa-trash', 1, '2018-04-26 01:18:28'),
(5, 'add_privilegio', 'fa fa-settings', 3, '2018-04-27 13:36:18'),
(6, '', 'fa fa-home', 3, '2018-08-13 21:24:36'),
(7, 'Fisica', 'fa fa-user', 3, '2018-08-13 21:26:15'),
(8, 'Juridica', 'fa fa-users', 3, '2018-08-13 21:26:36'),
(9, 'detalhe', 'fa fa-eye', 3, '2018-08-20 12:26:53'),
(10, 'Enviar', 'fa fa-send-o', 3, '2018-09-21 17:37:47'),
(11, 'Adicionar Conta', 'fa fa-user-plus', 3, '2018-08-24 21:15:36'),
(12, 'Parecer', 'fa fa-edit', 1, '2018-09-08 14:16:05'),
(13, 'Coordenar', 'fa fa-wrench', 1, '2018-09-14 16:11:08'),
(14, 'Ver_parecer', 'fa fa-list', 1, '2018-09-22 13:38:29'),
(15, 'Projectar', 'fa fa-refresh', 1, '2018-09-23 18:18:38'),
(16, 'Servico', 'fa fa-exchange', 1, '2018-11-28 18:47:14'),
(17, 'aquisicao', 'fa fa-edit', 1, '2019-02-12 18:27:49'),
(18, 'Listar Tereno', 'fa fa-list', 1, '2019-02-22 15:37:43'),
(19, 'Estatística', 'fa fa-area-chart', 1, '2019-02-22 17:42:10'),
(20, 'detalhe terreno', 'fa fa-eye', 1, '2019-02-25 16:40:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `terreno`
--

CREATE TABLE `terreno` (
  `id` int(11) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `area` float NOT NULL,
  `largura` float NOT NULL,
  `comprimento` float NOT NULL,
  `bloco` varchar(11) NOT NULL,
  `quarteirao` varchar(13) NOT NULL,
  `lote` int(11) NOT NULL,
  `num_vertice` int(11) NOT NULL,
  `zona` int(11) NOT NULL,
  `criador` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `terreno`
--

INSERT INTO `terreno` (`id`, `codigo`, `area`, `largura`, `comprimento`, `bloco`, `quarteirao`, `lote`, `num_vertice`, `zona`, `criador`, `tipo`, `data_criacao`) VALUES
(1, 'COCA00001', 600, 20, 30, '1', '1', 1, 4, 15, 5, 1, '2019-02-25 15:29:58'),
(2, 'COCA00002', 600, 20, 30, '1', '1', 2, 4, 15, 5, 1, '2019-02-25 16:22:02'),
(3, 'COCA00003', 300, 15, 20, '1', '1', 3, 4, 15, 5, 1, '2019-02-25 16:24:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_instituicao`
--

CREATE TABLE `tipo_instituicao` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_instituicao`
--

INSERT INTO `tipo_instituicao` (`id`, `nome`, `id_utilizador`, `data_criacao`) VALUES
(1, 'Igreja', 3, '2018-08-14 16:56:17'),
(2, 'FarmÃ¡cia', 3, '2018-08-14 16:56:17'),
(3, 'Escola', 3, '2018-08-14 16:56:17'),
(4, 'Super Mercado', 3, '2018-08-14 16:56:17'),
(5, 'Outro', 3, '2018-08-14 16:56:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_teste`
--

CREATE TABLE `user_teste` (
  `id` int(11) NOT NULL,
  `id_cidadao` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `id_role` int(11) NOT NULL,
  `fotografia` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user_teste`
--

INSERT INTO `user_teste` (`id`, `id_cidadao`, `user`, `senha`, `id_role`, `fotografia`) VALUES
(1, 1, 'Hacker Xp', 'malaquias4', 8, '5b9154aff322b-1.jpg'),
(4, 2, 'joao.pereira', '123456', 3, '5ba0bfd68ce80-4.jpg'),
(5, 3, 'matondo.vicente', 'vicente1613', 2, '5ba78beaea8db-5.jpg'),
(6, 4, 'jorge.coelho', '123456', 4, '5b8fe85cab508-6.jpg'),
(7, 6, 'edson.viegas', '123456', 1, '5b9fb70ce6949-7.jpg'),
(8, 18, 'jeremias.capemba', '123456', 10, 'padrao.jpg'),
(9, 22, 'recio.sousa', 'sousa341', 5, 'padrao.jpg'),
(10, 23, 'francisco.sebastiao', '123456', 5, 'padrao.jpg'),
(11, 36, 'augusto.quarenta', '123456', 5, 'padrao.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utente`
--

CREATE TABLE `utente` (
  `id` int(11) NOT NULL,
  `id_cidadao` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utente`
--

INSERT INTO `utente` (`id`, `id_cidadao`, `codigo`) VALUES
(1, 33, '001-FSC-18'),
(2, 34, '002-FSC-18'),
(3, 35, '003-FSC-18'),
(4, 38, '004-CAND-1'),
(5, 39, '005-CAND-1'),
(6, 40, '006-CAND-1'),
(7, 41, '007-CAND-1'),
(8, 42, '008-CAND-1'),
(10, 44, '009-CAND-1'),
(11, 45, '010-CAND-1'),
(12, 46, '011-CAND-1'),
(13, 47, '012-FSC-19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utente_terreno`
--

CREATE TABLE `utente_terreno` (
  `id` int(11) NOT NULL,
  `id_utente` int(11) NOT NULL,
  `id_terreno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utente_terreno`
--

INSERT INTO `utente_terreno` (`id`, `id_utente`, `id_terreno`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 3),
(4, 3, 4),
(5, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `id` int(11) NOT NULL,
  `id_cidadao` int(11) NOT NULL,
  `id_administracao` int(11) NOT NULL,
  `bi` varchar(16) NOT NULL,
  `genero` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador_administracao`
--

CREATE TABLE `utilizador_administracao` (
  `id` int(11) NOT NULL,
  `id_utilizador_func` int(11) NOT NULL,
  `id_administracao` int(11) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizador_administracao`
--

INSERT INTO `utilizador_administracao` (`id`, `id_utilizador_func`, `id_administracao`, `id_utilizador`, `data_criacao`) VALUES
(1, 14, 1, 10, '2018-04-29 14:29:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador_reparticao`
--

CREATE TABLE `utilizador_reparticao` (
  `id` int(11) NOT NULL,
  `id_utilizador_func` int(11) NOT NULL,
  `id_reparticao` int(11) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizador_reparticao`
--

INSERT INTO `utilizador_reparticao` (`id`, `id_utilizador_func`, `id_reparticao`, `id_utilizador`, `data_criacao`) VALUES
(1, 10, 2, 3, '2018-04-28 14:05:58'),
(2, 11, 1, 3, '2018-04-28 17:10:26'),
(3, 12, 3, 3, '2018-04-28 19:10:17'),
(4, 13, 4, 3, '2018-04-29 12:19:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administracao`
--
ALTER TABLE `administracao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administracao_role`
--
ALTER TABLE `administracao_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assunto`
--
ALTER TABLE `assunto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bairro`
--
ALTER TABLE `bairro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidatura`
--
ALTER TABLE `candidatura`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidatura_documento`
--
ALTER TABLE `candidatura_documento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caracteristica_inicial_terreno`
--
ALTER TABLE `caracteristica_inicial_terreno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caracteristica_terreno_projecto`
--
ALTER TABLE `caracteristica_terreno_projecto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cidadao`
--
ALTER TABLE `cidadao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combinacoes_terreno`
--
ALTER TABLE `combinacoes_terreno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comuna`
--
ALTER TABLE `comuna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_municipio` (`id_municipio`);

--
-- Indexes for table `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `conta_id_cidadao_uindex` (`id_cidadao`);

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_entrega_doc`
--
ALTER TABLE `data_entrega_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destrito`
--
ALTER TABLE `destrito`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrada_saida`
--
ALTER TABLE `entrada_saida`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fisica`
--
ALTER TABLE `fisica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto_terreno`
--
ALTER TABLE `foto_terreno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeria_projecto`
--
ALTER TABLE `galeria_projecto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `juridica`
--
ALTER TABLE `juridica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_modulo`
--
ALTER TABLE `menu_modulo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_sub_menu`
--
ALTER TABLE `menu_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `morada`
--
ALTER TABLE `morada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parametro_estado_grupo`
--
ALTER TABLE `parametro_estado_grupo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parecer`
--
ALTER TABLE `parecer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parecer_comun`
--
ALTER TABLE `parecer_comun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poligono`
--
ALTER TABLE `poligono`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ponto`
--
ALTER TABLE `ponto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prioridade`
--
ALTER TABLE `prioridade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processo`
--
ALTER TABLE `processo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processo_administracao`
--
ALTER TABLE `processo_administracao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processo_documento`
--
ALTER TABLE `processo_documento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processo_tecnico`
--
ALTER TABLE `processo_tecnico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projecto`
--
ALTER TABLE `projecto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projecto_descricao`
--
ALTER TABLE `projecto_descricao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projecto_terreno`
--
ALTER TABLE `projecto_terreno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reparticao`
--
ALTER TABLE `reparticao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `representante_documento`
--
ALTER TABLE `representante_documento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_menu_sub_menu`
--
ALTER TABLE `role_menu_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terreno`
--
ALTER TABLE `terreno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_instituicao`
--
ALTER TABLE `tipo_instituicao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_teste`
--
ALTER TABLE `user_teste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utente_terreno`
--
ALTER TABLE `utente_terreno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizador_administracao`
--
ALTER TABLE `utilizador_administracao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizador_reparticao`
--
ALTER TABLE `utilizador_reparticao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administracao`
--
ALTER TABLE `administracao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `administracao_role`
--
ALTER TABLE `administracao_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assunto`
--
ALTER TABLE `assunto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bairro`
--
ALTER TABLE `bairro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `candidato`
--
ALTER TABLE `candidato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidatura`
--
ALTER TABLE `candidatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidatura_documento`
--
ALTER TABLE `candidatura_documento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `caracteristica_inicial_terreno`
--
ALTER TABLE `caracteristica_inicial_terreno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `caracteristica_terreno_projecto`
--
ALTER TABLE `caracteristica_terreno_projecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cidadao`
--
ALTER TABLE `cidadao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `combinacoes_terreno`
--
ALTER TABLE `combinacoes_terreno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comuna`
--
ALTER TABLE `comuna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=573;

--
-- AUTO_INCREMENT for table `conta`
--
ALTER TABLE `conta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `data_entrega_doc`
--
ALTER TABLE `data_entrega_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `documento`
--
ALTER TABLE `documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `entrada_saida`
--
ALTER TABLE `entrada_saida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `fisica`
--
ALTER TABLE `fisica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `foto_terreno`
--
ALTER TABLE `foto_terreno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `galeria_projecto`
--
ALTER TABLE `galeria_projecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menu_modulo`
--
ALTER TABLE `menu_modulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_sub_menu`
--
ALTER TABLE `menu_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `morada`
--
ALTER TABLE `morada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `parametro_estado_grupo`
--
ALTER TABLE `parametro_estado_grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parecer`
--
ALTER TABLE `parecer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `parecer_comun`
--
ALTER TABLE `parecer_comun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `poligono`
--
ALTER TABLE `poligono`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prioridade`
--
ALTER TABLE `prioridade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `processo`
--
ALTER TABLE `processo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `processo_documento`
--
ALTER TABLE `processo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `processo_tecnico`
--
ALTER TABLE `processo_tecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projecto`
--
ALTER TABLE `projecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projecto_descricao`
--
ALTER TABLE `projecto_descricao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projecto_terreno`
--
ALTER TABLE `projecto_terreno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reparticao`
--
ALTER TABLE `reparticao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `role_menu_sub_menu`
--
ALTER TABLE `role_menu_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `terreno`
--
ALTER TABLE `terreno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipo_instituicao`
--
ALTER TABLE `tipo_instituicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_teste`
--
ALTER TABLE `user_teste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `utente`
--
ALTER TABLE `utente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `utente_terreno`
--
ALTER TABLE `utente_terreno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `utilizador_administracao`
--
ALTER TABLE `utilizador_administracao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `utilizador_reparticao`
--
ALTER TABLE `utilizador_reparticao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `conta`
--
ALTER TABLE `conta`
  ADD CONSTRAINT `conta___fk` FOREIGN KEY (`id_cidadao`) REFERENCES `cidadao` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
