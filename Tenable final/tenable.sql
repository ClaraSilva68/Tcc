-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Maio-2022 às 23:01
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tenable`
--
CREATE DATABASE IF NOT EXISTS `tenable` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `tenable`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_cadastro` int(10) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` varchar(20) COLLATE utf8_bin NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `datanasc` date NOT NULL,
  `telefone` int(12) NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(100) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cadastro`, `cpf`, `rg`, `nome`, `datanasc`, `telefone`, `email`, `endereco`, `cidade`) VALUES
(1, 1234, '345', 'ffd', '2022-04-13', 123, 'df', '2dfg', 'sdf'),
(2, 234567, '12345', 'Luis', '2022-04-13', 34567, 'luis@gmail', 'rua x', 'ipero'),
(3, 2147483647, '21453', 'clara silva', '2022-04-23', 2147483647, 'clara@silva', 'rua americana, 25', 'sorocaba'),
(4, 345678, '786543', 'marli maria', '2022-04-23', 23786543, 'maria@ig.com.br', 'rua das oliveiras, 25', 'sorocaba'),
(5, 123456, '0987654', 'Luis', '2022-04-23', 159973456, 'luis@gmail', 'rua da paz, 45', 'ipero'),
(6, 56748930, '234567', 'Berta Catatau', '2022-04-23', 12345678, 'berta@gmail.com', 'rua odim de arruda', 'são paulo'),
(17, 234657689, '36475902', 'ricqrdo', '2022-04-12', 354678393, 'ricardo@gmail.com', 'rua dos ipes', 'votorantim'),
(18, 2147483647, '123456', 'mariasilva', '2022-05-01', 15678987, 'maria@gmail.com', 'rua altinopolis', 'sorocaba');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `valor` float NOT NULL,
  `id_cadastro` int(10) NOT NULL,
  `id_produto` int(10) NOT NULL,
  `id_formaPagto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`id_compra`, `valor`, `id_cadastro`, `id_produto`, `id_formaPagto`) VALUES
(0, 1000, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `formapagto`
--

CREATE TABLE `formapagto` (
  `id_formaPagto` int(11) NOT NULL,
  `tipoPagamento` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `formapagto`
--

INSERT INTO `formapagto` (`id_formaPagto`, `tipoPagamento`) VALUES
(1, 'A vista'),
(2, 'Credito'),
(3, 'Debito'),
(4, 'Pix');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiro`
--

CREATE TABLE `parceiro` (
  `id_parceiro` int(11) NOT NULL,
  `cnpj` int(13) NOT NULL,
  `nomeFantasia` varchar(100) COLLATE utf8_bin NOT NULL,
  `razaoSocial` varchar(100) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(200) COLLATE utf8_bin NOT NULL,
  `telefone` int(15) NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(200) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `parceiro`
--

INSERT INTO `parceiro` (`id_parceiro`, `cnpj`, `nomeFantasia`, `razaoSocial`, `descricao`, `telefone`, `email`, `endereco`, `cidade`) VALUES
(1, 0, 'Flores e companhia', 'mariaalmeidada silva.co', '', 2147483647, 'flores@gmail.com', 'rua das azaleias', 'sorocaba'),
(2, 2147483647, 'flores e companhia', 'maria emilia silva artefatos ', 'tecidos para confecção', 12345678, 'floresemilia@gmail.com', 'rua das azaleias', 'votorantim'),
(3, 2147483647, 'Ricardo camisetas', 'Ricardo me', 'comercio de roupas', 124456799, 'ricardo@gmail', 'rua dos lirios, 25', 'sorocaba');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(10) NOT NULL,
  `id_produto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(10) NOT NULL,
  `nomeProduto` varchar(100) COLLATE utf8_bin NOT NULL,
  `valor` float NOT NULL,
  `tamanho` varchar(1) COLLATE utf8_bin NOT NULL,
  `cor` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nomeProduto`, `valor`, `tamanho`, `cor`) VALUES
(1, 'blusa sonho de verao', 200, 'p', 'amarelo'),
(2, 'calça capri', 150, 'm', 'azul');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(8, 'luis_carlos', '$2y$10$NSgTm3JYFA2qhZMHT8aF1OBhhRr0tgp8PAXrzqc9XXCD68Z7mzIwm', '2022-04-12 00:59:23'),
(9, 'clara', '$2y$10$naRidW7nnNd8xMVQtCVCD.kTTMvTqpARcjmK.mxBvDMtpbLll5/N.', '2022-04-12 01:01:33'),
(10, 'sandra', '$2y$10$mcdq7goh4XQHD4QBkNBkm.BZgbnpPM/EQUTIUqwRYXE7EoJEC6j7S', '2022-04-12 11:05:13'),
(11, 'marcelo', '$2y$10$OlySQKdKxxcIpwMjya.n..ylFTht.SlW9uR8CoDP9r2TOikU.Iq8a', '2022-04-12 11:21:23'),
(12, 'mauricio', '$2y$10$uqeE9LjyYWFWuVDKPikfN.Q2Q0qRLdXZkXoPLrT3K8M0xfGobCDU.', '2022-04-12 17:21:24'),
(13, 'maria', '$2y$10$eHCV0VLkjBxGiegpJwn/q.ZiOZ2g8dqYtMf7GNXZoXVC9pR3veqq6', '2022-04-12 19:25:02'),
(14, 'ricardo', '$2y$10$d.Kdb8PQElLalMrHQJOvHeCRWghYKbY5WISu/mrz73WfMdMbMgh3i', '2022-04-12 19:31:22'),
(15, 'rodrigo', '$2y$10$Z/jzUtXy.wDv6Q0QLDB1cu1g6PZoyZ.LW4rQl8og.xbmAI1.i4QHG', '2022-04-12 21:12:00'),
(16, 'ana', '$2y$10$YENVxNU44gg.EdLbn9leMOJkst8D6zyVtzVQ4bqrqAiES3kW4Xhey', '2022-04-13 13:56:12'),
(17, 'joaquim', '$2y$10$lAwKI2kAyToJNrFz.9acaeD6XcTQ08ygr.1bY2URveordNyv9VtJC', '2022-04-13 20:24:48');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_cadastro`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fk_cadastro` (`id_cadastro`),
  ADD KEY `fk_produto` (`id_produto`),
  ADD KEY `fk_FormaPagamento` (`id_formaPagto`);

--
-- Índices para tabela `formapagto`
--
ALTER TABLE `formapagto`
  ADD PRIMARY KEY (`id_formaPagto`);

--
-- Índices para tabela `parceiro`
--
ALTER TABLE `parceiro`
  ADD PRIMARY KEY (`id_parceiro`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_cadastro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `formapagto`
--
ALTER TABLE `formapagto`
  MODIFY `id_formaPagto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `parceiro`
--
ALTER TABLE `parceiro`
  MODIFY `id_parceiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_FormaPagamento` FOREIGN KEY (`id_formaPagto`) REFERENCES `formapagto` (`id_formaPagto`),
  ADD CONSTRAINT `fk_cadastro` FOREIGN KEY (`id_cadastro`) REFERENCES `cadastro` (`id_cadastro`),
  ADD CONSTRAINT `fk_produto` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `id_produto` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
