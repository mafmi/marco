-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/07/2025 às 04:55
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `techbrew`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `compras`
--

CREATE TABLE `compras` (
  `idCompra` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL,
  `dataCompra` date DEFAULT NULL,
  `horaCompra` time DEFAULT NULL,
  `valorCompra` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `compras`
--

INSERT INTO `compras` (`idCompra`, `idUsuario`, `idProduto`, `dataCompra`, `horaCompra`, `valorCompra`) VALUES
(1, 2, 3, '2025-05-26', '21:25:35', 20000.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int(11) NOT NULL,
  `fotoProduto` varchar(100) NOT NULL,
  `nomeProduto` varchar(30) NOT NULL,
  `descricaoProduto` varchar(200) NOT NULL,
  `valorProduto` decimal(10,0) NOT NULL,
  `statusProduto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `fotoProduto`, `nomeProduto`, `descricaoProduto`, `valorProduto`, `statusProduto`) VALUES
(0, 'img/cafepuro.jpg', 'Café puro', 'Grao triturado na hora', 5, 'disponivel'),
(0, 'img/cha.jpg', 'chafé', 'café coado com po comum fraco', 2, 'disponivel');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `tipoUsuario` varchar(15) NOT NULL,
  `fotoUsuario` varchar(100) NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `dataNascimentoUsuario` date NOT NULL,
  `cidadeUsuario` varchar(30) NOT NULL,
  `telefoneUsuario` varchar(20) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `tipoUsuario`, `fotoUsuario`, `nomeUsuario`, `dataNascimentoUsuario`, `cidadeUsuario`, `telefoneUsuario`, `emailUsuario`, `senhaUsuario`) VALUES
(1, 'administrador', 'img/perfil.jpg', 'henry', '1983-05-05', 'telemacoBorba', '(42) 99999-9999', 'henry@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'cliente', 'img/usuario.png', 'michael', '1987-05-19', 'telemacoBorba', '(42) 99999-9999', 'usuario@teste.com', '123'),
(0, 'cliente', 'img/usuario.jpg', 'michael', '1987-05-19', 'telemacoBorba', '(42) 99999-9999', 'usuario@teste.com', '202cb962ac59075b964b07152d234b70'),
(0, 'cliente', 'img/perfil.jpg', 'henry', '1983-05-05', 'telemacoBorba', '(42) 99999-9999', 'henry@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idProduto` (`idProduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
