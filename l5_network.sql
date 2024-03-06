-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06/03/2024 às 17:42
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `l5_network`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `filas`
--

CREATE TABLE `filas` (
  `sip` int(11) NOT NULL,
  `penalty` char(1) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `calls_taken` int(11) DEFAULT NULL,
  `last_call` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `filas`
--

INSERT INTO `filas` (`sip`, `penalty`, `status`, `calls_taken`, `last_call`) VALUES
(7000, '1', 'In use', 0, NULL),
(7001, '1', 'Ring', 0, NULL),
(7002, '1', 'Unavailable', 3, '2024-02-29 18:05:41'),
(7003, '1', 'Unavailable', 48, '2024-02-29 14:18:14'),
(7004, '1', 'Paused', 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ramais`
--

CREATE TABLE `ramais` (
  `name` varchar(255) NOT NULL,
  `username` int(11) NOT NULL,
  `host` varchar(20) DEFAULT NULL,
  `dyn` char(1) DEFAULT NULL,
  `nat` char(1) DEFAULT NULL,
  `acl` varchar(255) DEFAULT NULL,
  `port` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ramais`
--

INSERT INTO `ramais` (`name`, `username`, `host`, `dyn`, `nat`, `acl`, `port`, `status`, `time`) VALUES
('Chaves', 7000, '181.219.125.7', 'D', 'N', NULL, 42367, 'OK (33 ms)', '2024-02-29 18:35:15'),
('Kiko', 7001, '181.219.125.7', 'D', 'N', NULL, 42368, 'OK (20 ms)', '2024-02-29 18:35:15'),
('Chiquinha', 7002, 'Unspecified', 'D', 'N', NULL, 0, 'UNKNOWN', '2024-02-29 18:35:15'),
('Nhonho', 7003, 'Unspecified', 'D', 'N', NULL, 0, 'UNKNOWN', '2024-02-29 18:35:15'),
('Godines', 7004, '181.219.125.7', 'D', 'N', NULL, 42369, 'OK (15 ms)', '2024-02-29 18:35:15');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `filas`
--
ALTER TABLE `filas`
  ADD KEY `sip` (`sip`);

--
-- Índices de tabela `ramais`
--
ALTER TABLE `ramais`
  ADD PRIMARY KEY (`username`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `filas`
--
ALTER TABLE `filas`
  ADD CONSTRAINT `sip` FOREIGN KEY (`sip`) REFERENCES `ramais` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
