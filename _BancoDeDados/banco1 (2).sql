-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Maio-2021 às 22:50
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `codigo_end` int(9) NOT NULL,
  `codigo_usu_end` int(9) NOT NULL,
  `tipo_end` int(2) NOT NULL,
  `cep_end` varchar(10) NOT NULL,
  `logradouro_end` varchar(512) NOT NULL,
  `numero_end` int(10) NOT NULL,
  `complemento_end` varchar(512) DEFAULT NULL,
  `bairro_end` varchar(256) NOT NULL,
  `cidade_end` varchar(256) NOT NULL,
  `uf_end` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`codigo_end`, `codigo_usu_end`, `tipo_end`, `cep_end`, `logradouro_end`, `numero_end`, `complemento_end`, `bairro_end`, `cidade_end`, `uf_end`) VALUES
(1, 1, 1, '78135-100', 'R. Cmte. Costa', 1333, '', 'Centro', 'Cuiabá', 'MT'),
(2, 1, 1, '78135-100', 'R. Cmte. Costa', 1333, '', 'Centro', 'Cuiabá', 'MT'),
(6, 2, 3, '78144-020', 'Rua Pancararé (Res N Racci)', 12, '3123123', 'Petrópolis ', 'Várzea Grande', 'MT'),
(7, 3, 4, '78144-202', 'Rua Caçapava do Sul (C Vetoratto)', 12, '', 'Petrópolis ', 'Várzea Grande', 'MT'),
(8, 3, 1, '78144-020', 'Rua Pancararé (Res N Racci)', 12, 'Prox a igreja', 'Petrópolis ', 'Várzea Grande', 'MT');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos_tipo`
--

CREATE TABLE `enderecos_tipo` (
  `codigo_ten` int(3) NOT NULL,
  `tipo_ten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `enderecos_tipo`
--

INSERT INTO `enderecos_tipo` (`codigo_ten`, `tipo_ten`) VALUES
(1, 'Residencial'),
(2, 'Comercial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo_usu` int(9) NOT NULL,
  `nome_usu` varchar(255) NOT NULL,
  `email_usu` varchar(255) NOT NULL,
  `telefone_usu` varchar(14) NOT NULL,
  `cpf_usu` varchar(14) NOT NULL,
  `dt_nasc_usu` date NOT NULL,
  `dt_cadastro_usu` datetime NOT NULL,
  `dt_alteracao_usu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo_usu`, `nome_usu`, `email_usu`, `telefone_usu`, `cpf_usu`, `dt_nasc_usu`, `dt_cadastro_usu`, `dt_alteracao_usu`) VALUES
(1, 'Joao', 'joao@gmail.com', '(65) 9999-9999', '711.111.111-19', '1970-01-01', '2021-05-30 22:11:26', '2021-05-30 22:11:26'),
(2, 'Jose', 'jose@gmail.com', '(65) 9999-9999', '711.111.111-10', '1970-01-01', '2021-05-30 22:11:26', '2021-05-30 22:11:26'),
(3, 'Maria', 'maria@gmail.com', '(55) 5555-5555', '711.111.111-05', '2021-01-05', '2021-05-30 22:11:26', '2021-05-30 22:11:26');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`codigo_end`),
  ADD KEY `fk_codigo_usu_end` (`codigo_usu_end`);

--
-- Índices para tabela `enderecos_tipo`
--
ALTER TABLE `enderecos_tipo`
  ADD PRIMARY KEY (`codigo_ten`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo_usu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `codigo_end` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `enderecos_tipo`
--
ALTER TABLE `enderecos_tipo`
  MODIFY `codigo_ten` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigo_usu` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_codigo_usu_end` FOREIGN KEY (`codigo_usu_end`) REFERENCES `usuarios` (`codigo_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
