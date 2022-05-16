-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2018 às 18:15
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cancelados`
--

CREATE TABLE `cancelados` (
  `idcanc` int(11) NOT NULL,
  `desccanc` varchar(400) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `solicitacoes_idsol` int(11) NOT NULL,
  `solicitacoes_status_idstatus` int(11) NOT NULL,
  `solicitacoes_servicos_idserv` int(11) NOT NULL,
  `solicitacoes_servicos_subcategorias_idsubc` int(11) NOT NULL,
  `solicitacoes_servicos_subcategorias_categorias_idcat` int(11) NOT NULL,
  `solicitacoes_servicos_subcategorias_categorias_clientes_idcli` int(11) NOT NULL,
  `solicitacoes_servicos_fornecedores_idfor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cancelados`
--

INSERT INTO `cancelados` (`idcanc`, `desccanc`, `created_at`, `updated_at`, `solicitacoes_idsol`, `solicitacoes_status_idstatus`, `solicitacoes_servicos_idserv`, `solicitacoes_servicos_subcategorias_idsubc`, `solicitacoes_servicos_subcategorias_categorias_idcat`, `solicitacoes_servicos_subcategorias_categorias_clientes_idcli`, `solicitacoes_servicos_fornecedores_idfor`) VALUES
(1, 'nao tinha god', '2018-11-18 23:39:10.000000', '2018-11-22 02:00:00.000000', 1, 1, 1, 1, 1, 1, 1),
(2, 'net nao ta oegando no notebook', '2018-11-27 18:00:57.000000', '2018-11-27 18:00:57.000000', 2, 3, 1, 1, 1, 1, 1),
(3, 'Por favor, tem ladrão entrando em casa, instala essa cerca pra mim pago em bitcoins', '2018-11-27 18:01:25.000000', '2018-11-27 18:01:25.000000', 1, 1, 1, 1, 1, 1, 1),
(4, 'net nao ta oegando no notebook', '2018-11-27 20:36:22.000000', '2018-11-27 20:36:22.000000', 2, 3, 1, 1, 1, 1, 1),
(5, 'Por favor, tem ladrão entrando em casa, instala essa cerca pra mim pago em bitcoins', '2018-12-02 21:45:56.000000', '2018-12-02 21:45:56.000000', 1, 1, 1, 1, 1, 1, 1),
(6, 'Por favor, tem ladrão entrando em casa, instala essa cerca pra mim pago em bitcoins', '2018-12-02 21:46:01.000000', '2018-12-02 21:46:01.000000', 1, 1, 1, 1, 1, 1, 1),
(7, 'asdasd', '2018-12-05 21:54:06.000000', '2018-12-05 21:54:06.000000', 3, 2, 1, 1, 1, 1, 1),
(8, 'asdasd', '2018-12-05 21:54:17.000000', '2018-12-05 21:54:17.000000', 3, 2, 1, 1, 1, 1, 1),
(9, 'asdasd', '2018-12-05 21:54:34.000000', '2018-12-05 21:54:34.000000', 3, 2, 1, 1, 1, 1, 1),
(10, 'asdasd', '2018-12-05 22:59:46.000000', '2018-12-05 22:59:46.000000', 3, 2, 1, 1, 1, 1, 1),
(11, 'net nao ta oegando no notebook', '2018-12-06 14:44:57.000000', '2018-12-06 14:44:57.000000', 2, 3, 1, 1, 1, 1, 1),
(12, 'net nao ta oegando no notebook', '2018-12-06 14:44:58.000000', '2018-12-06 14:44:58.000000', 2, 3, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `idcat` int(11) NOT NULL,
  `nomecat` varchar(255) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `clientes_idcli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idcat`, `nomecat`, `created_at`, `updated_at`, `clientes_idcli`) VALUES
(1, 'Cercas Elétricas', '2018-11-23 02:00:00.000000', '2018-11-23 02:00:00.000000', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `idcid` int(11) NOT NULL,
  `nomecid` varchar(255) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `estados_idest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`idcid`, `nomecid`, `created_at`, `updated_at`, `estados_idest`) VALUES
(11, 'aracuai', '2018-11-30 23:48:50.000000', '2018-11-30 23:48:50.000000', 11),
(12, 'São Paulo', '2018-12-05 00:19:39.000000', '2018-12-05 00:19:39.000000', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idcli` int(11) NOT NULL,
  `nomecli` varchar(45) NOT NULL,
  `sexocli` varchar(45) NOT NULL,
  `dncli` date NOT NULL,
  `cpfcli` varchar(45) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idcli`, `nomecli`, `sexocli`, `dncli`, `cpfcli`, `created_at`, `updated_at`) VALUES
(1, 'Marcus', 'Masculino', '2018-11-05', '10756575630', '2018-11-21 02:00:00.000000', '2018-11-21 02:00:00.000000'),
(2, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-08', '114.261.146-99', '2018-11-25 22:59:35.000000', '2018-11-25 22:59:35.000000'),
(3, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-08', '114.261.146-99', '2018-11-25 21:00:58.000000', '2018-11-25 21:00:58.000000'),
(4, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-05', '114.261.146-99', '2018-11-25 21:01:30.000000', '2018-11-25 21:01:30.000000'),
(5, 'josiane', 'Feminino', '2018-11-13', '114.261.146-99', '2018-11-25 21:02:46.000000', '2018-11-25 21:02:46.000000'),
(6, 'josiane', 'Feminino', '2018-11-13', '114.261.146-99', '2018-11-25 21:03:22.000000', '2018-11-25 21:03:22.000000'),
(7, 'josiane', 'Feminino', '2018-11-13', '114.261.146-99', '2018-11-25 21:04:55.000000', '2018-11-25 21:04:55.000000'),
(8, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-08', '5454545', '2018-11-26 20:13:24.000000', '2018-11-26 20:13:24.000000'),
(9, 'FULANO', 'M', '1994-11-01', '11111111111', '2018-11-27 14:16:25.000000', '2018-11-27 14:16:25.000000'),
(10, 'JACKSON PINHEIRO LUIZ', 'Masculino', '7546-04-25', '114.261.146-99', '2018-11-27 16:24:35.000000', '2018-11-27 16:24:35.000000'),
(11, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-12', '114.261.146-99', '2018-11-27 21:26:27.000000', '2018-11-27 21:26:27.000000'),
(12, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-12', '114.261.146-99', '2018-11-27 22:07:22.000000', '2018-11-27 22:07:22.000000'),
(13, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-12', '114.261.146-99', '2018-11-27 22:08:00.000000', '2018-11-27 22:08:00.000000'),
(14, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-12', '114.261.146-99', '2018-11-27 22:09:13.000000', '2018-11-27 22:09:13.000000'),
(15, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-12', '114.261.146-99', '2018-11-27 22:09:30.000000', '2018-11-27 22:09:30.000000'),
(16, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-12', '114.261.146-99', '2018-11-27 22:09:52.000000', '2018-11-27 22:09:52.000000'),
(17, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-12', '114.261.146-99', '2018-11-27 22:10:04.000000', '2018-11-27 22:10:04.000000'),
(18, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-12', '114.261.146-99', '2018-11-27 22:10:51.000000', '2018-11-27 22:10:51.000000'),
(19, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-12', '114.261.146-99', '2018-11-27 22:12:39.000000', '2018-11-27 22:12:39.000000'),
(20, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-12', '114.261.146-99', '2018-11-27 22:13:29.000000', '2018-11-27 22:13:29.000000'),
(21, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-12', '114.261.146-99', '2018-11-27 22:13:52.000000', '2018-11-27 22:13:52.000000'),
(22, 'JACKSON PINHEIRO LUIZ', 'Masculino', '2018-11-12', '114.261.146-99', '2018-11-27 22:22:14.000000', '2018-11-27 22:22:14.000000'),
(75, 'asdas', 'Masculino', '2018-11-08', 'dasd', '2018-11-30 23:48:50.000000', '2018-11-30 23:48:50.000000'),
(76, 'jackson', 'Masculino', '2018-12-05', '4546456', '2018-12-05 00:19:39.000000', '2018-12-05 00:19:39.000000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `concluidos`
--

CREATE TABLE `concluidos` (
  `idconc` int(11) NOT NULL,
  `descconc` varchar(400) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `solicitacoes_idsol` int(11) NOT NULL,
  `solicitacoes_status_idstatus` int(11) NOT NULL,
  `solicitacoes_servicos_idserv` int(11) NOT NULL,
  `solicitacoes_servicos_subcategorias_idsubc` int(11) NOT NULL,
  `solicitacoes_servicos_subcategorias_categorias_idcat` int(11) NOT NULL,
  `solicitacoes_servicos_subcategorias_categorias_clientes_idcli` int(11) NOT NULL,
  `solicitacoes_servicos_fornecedores_idfor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `concluidos`
--

INSERT INTO `concluidos` (`idconc`, `descconc`, `created_at`, `updated_at`, `solicitacoes_idsol`, `solicitacoes_status_idstatus`, `solicitacoes_servicos_idserv`, `solicitacoes_servicos_subcategorias_idsubc`, `solicitacoes_servicos_subcategorias_categorias_idcat`, `solicitacoes_servicos_subcategorias_categorias_clientes_idcli`, `solicitacoes_servicos_fornecedores_idfor`) VALUES
(1, 'o serviço foi concluido', '2018-11-22 02:00:00.000000', '2018-11-22 02:00:00.000000', 1, 1, 1, 1, 1, 1, 1),
(2, 'asdasd', '2018-12-05 23:18:06.000000', '2018-12-05 23:18:06.000000', 3, 2, 1, 1, 1, 1, 1),
(3, 'asdasd', '2018-12-05 23:19:13.000000', '2018-12-05 23:19:13.000000', 3, 2, 1, 1, 1, 1, 1),
(4, 'asdasd', '2018-12-05 23:37:11.000000', '2018-12-05 23:37:11.000000', 3, 2, 1, 1, 1, 1, 1),
(5, 'Por favor, tem ladrão entrando em casa, instala essa cerca pra mim pago em bitcoins', '2018-12-06 14:44:33.000000', '2018-12-06 14:44:33.000000', 1, 1, 1, 1, 1, 1, 1),
(6, 'Por favor, tem ladrão entrando em casa, instala essa cerca pra mim pago em bitcoins', '2018-12-06 14:44:52.000000', '2018-12-06 14:44:52.000000', 1, 1, 1, 1, 1, 1, 1),
(7, 'asdasd', '2018-12-06 14:46:38.000000', '2018-12-06 14:46:38.000000', 3, 2, 1, 1, 1, 1, 1),
(8, 'asdasd', '2018-12-06 14:48:48.000000', '2018-12-06 14:48:48.000000', 3, 2, 1, 1, 1, 1, 1),
(9, 'asdasd', '2018-12-06 14:49:46.000000', '2018-12-06 14:49:46.000000', 3, 2, 1, 1, 1, 1, 1),
(10, 'asdasd', '2018-12-06 15:01:01.000000', '2018-12-06 15:01:01.000000', 3, 2, 1, 1, 1, 1, 1),
(11, '123132', '2018-12-06 02:00:00.000000', '2018-12-06 14:20:04.000000', 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `idend` int(11) NOT NULL,
  `logend` varchar(255) DEFAULT NULL,
  `baiend` varchar(255) DEFAULT NULL,
  `numend` varchar(15) DEFAULT NULL,
  `compend` varchar(50) DEFAULT NULL,
  `cepend` varchar(15) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `clientes_idcli` int(11) NOT NULL,
  `cidades_idcid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`idend`, `logend`, `baiend`, `numend`, `compend`, `cepend`, `created_at`, `updated_at`, `clientes_idcli`, `cidades_idcid`) VALUES
(2, 'asdas', 'asdas', 'dasd', 'asdas', 'asdas', '2018-11-30 23:48:50.000000', '2018-11-30 23:48:50.000000', 75, 11),
(3, 'Praça da Sé', 'Sé', '500', 'casas', '01001000', '2018-12-05 00:19:39.000000', '2018-12-05 00:19:39.000000', 76, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `idest` int(11) NOT NULL,
  `siglaest` varchar(255) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`idest`, `siglaest`, `created_at`, `updated_at`) VALUES
(11, 'mg', '2018-11-30 23:48:50.000000', '2018-11-30 23:48:50.000000'),
(12, 'SP', '2018-12-05 00:19:39.000000', '2018-12-05 00:19:39.000000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `financeiro`
--

CREATE TABLE `financeiro` (
  `idfin` int(11) NOT NULL,
  `datafin` datetime NOT NULL,
  `valorfin` decimal(7,2) NOT NULL,
  `totalfin` decimal(7,2) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `concluidos_idconc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `financeiro`
--

INSERT INTO `financeiro` (`idfin`, `datafin`, `valorfin`, `totalfin`, `created_at`, `updated_at`, `concluidos_idconc`) VALUES
(2, '2018-12-26 00:00:00', '50.00', NULL, '2018-12-06 17:12:03.000000', '2018-12-06 17:12:03.000000', 2),
(3, '2018-12-19 00:00:00', '50.00', NULL, '2018-12-06 17:13:58.000000', '2018-12-06 17:13:58.000000', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `idfor` int(11) NOT NULL,
  `nomefor` varchar(255) NOT NULL,
  `cpf_cnpjfor` varchar(20) NOT NULL,
  `rgfor` varchar(25) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`idfor`, `nomefor`, `cpf_cnpjfor`, `rgfor`, `created_at`, `updated_at`) VALUES
(1, 'fulano', '154879562326', '15615615', '2018-11-22 02:00:00.000000', '2018-11-25 02:17:36.000000'),
(2, 'fulano', '11111', NULL, '2018-11-25 02:02:57.000000', '2018-11-25 02:17:47.000000'),
(3, 'ciclano', '11111', NULL, '2018-11-25 02:03:38.000000', '2018-11-25 02:19:04.000000'),
(4, 'JACKSON PINHEIRO LUIZ', '1111111111', NULL, '2018-11-25 16:17:28.000000', '2018-11-25 16:17:28.000000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_18_213231_create_cancelados_table', 2),
(4, '2018_11_18_213231_create_categorias_table', 2),
(5, '2018_11_18_213231_create_cidades_table', 2),
(6, '2018_11_18_213231_create_clientes_table', 2),
(7, '2018_11_18_213231_create_concluidos_table', 2),
(8, '2018_11_18_213231_create_enderecos_table', 2),
(9, '2018_11_18_213231_create_estados_table', 2),
(10, '2018_11_18_213231_create_financeiro_table', 2),
(11, '2018_11_18_213231_create_fornecedores_table', 2),
(12, '2018_11_18_213231_create_password_resets_table', 2),
(13, '2018_11_18_213231_create_pendencias_table', 2),
(14, '2018_11_18_213231_create_servicos_table', 2),
(15, '2018_11_18_213231_create_solicitacoes_table', 2),
(16, '2018_11_18_213231_create_status_table', 2),
(17, '2018_11_18_213231_create_subcategorias_table', 2),
(18, '2018_11_18_213231_create_telefones_table', 2),
(19, '2018_11_18_213231_create_tipousers_table', 2),
(20, '2018_11_18_213231_create_users_table', 2),
(21, '2018_11_18_213232_add_foreign_keys_to_cancelados_table', 2),
(22, '2018_11_18_213232_add_foreign_keys_to_categorias_table', 2),
(23, '2018_11_18_213232_add_foreign_keys_to_cidades_table', 2),
(24, '2018_11_18_213232_add_foreign_keys_to_concluidos_table', 2),
(25, '2018_11_18_213232_add_foreign_keys_to_enderecos_table', 2),
(26, '2018_11_18_213232_add_foreign_keys_to_financeiro_table', 2),
(27, '2018_11_18_213232_add_foreign_keys_to_pendencias_table', 2),
(28, '2018_11_18_213232_add_foreign_keys_to_servicos_table', 2),
(29, '2018_11_18_213232_add_foreign_keys_to_solicitacoes_table', 2),
(30, '2018_11_18_213232_add_foreign_keys_to_subcategorias_table', 2),
(31, '2018_11_18_213232_add_foreign_keys_to_telefones_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pendencias`
--

CREATE TABLE `pendencias` (
  `idpen` int(11) NOT NULL,
  `descpen` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `solicitacoes_idsol` int(11) NOT NULL,
  `solicitacoes_status_idstatus` int(11) NOT NULL,
  `solicitacoes_servicos_idserv` int(11) NOT NULL,
  `solicitacoes_servicos_subcategorias_idsubc` int(11) NOT NULL,
  `solicitacoes_servicos_subcategorias_categorias_idcat` int(11) NOT NULL,
  `solicitacoes_servicos_subcategorias_categorias_clientes_idcli` int(11) NOT NULL,
  `solicitacoes_servicos_fornecedores_idfor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pendencias`
--

INSERT INTO `pendencias` (`idpen`, `descpen`, `created_at`, `updated_at`, `solicitacoes_idsol`, `solicitacoes_status_idstatus`, `solicitacoes_servicos_idserv`, `solicitacoes_servicos_subcategorias_idsubc`, `solicitacoes_servicos_subcategorias_categorias_idcat`, `solicitacoes_servicos_subcategorias_categorias_clientes_idcli`, `solicitacoes_servicos_fornecedores_idfor`) VALUES
(1, 'net nao ta oegando no notebook', '2018-12-06 14:20:04.000000', '2018-12-06 14:20:04.000000', 2, 3, 1, 1, 1, 1, 1),
(3, 'asdasd', '2018-12-06 14:21:17.000000', '2018-12-06 14:21:17.000000', 3, 2, 1, 1, 1, 1, 1),
(21, 'net nao ta oegando no notebook', '2018-12-06 14:44:25.000000', '2018-12-06 14:44:25.000000', 2, 3, 1, 1, 1, 1, 1),
(22, 'net nao ta oegando no notebook', '2018-12-06 14:44:47.000000', '2018-12-06 14:44:47.000000', 2, 3, 1, 1, 1, 1, 1),
(23, 'asdasd', '2018-12-06 14:45:21.000000', '2018-12-06 14:45:21.000000', 3, 2, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `idserv` int(11) NOT NULL,
  `nomeserv` varchar(255) NOT NULL,
  `descserv` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `subcategorias_idsubc` int(11) NOT NULL,
  `subcategorias_categorias_idcat` int(11) NOT NULL,
  `subcategorias_categorias_clientes_idcli` int(11) NOT NULL,
  `fornecedores_idfor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`idserv`, `nomeserv`, `descserv`, `created_at`, `updated_at`, `subcategorias_idsubc`, `subcategorias_categorias_idcat`, `subcategorias_categorias_clientes_idcli`, `fornecedores_idfor`) VALUES
(1, 'Instalação da porra da Cerca', 'Instalação de Cercas Elétricas para sua segurança', '2018-11-22 02:00:00.000000', '2018-11-22 02:00:00.000000', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes`
--

CREATE TABLE `solicitacoes` (
  `idsol` int(11) NOT NULL,
  `descsol` varchar(400) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `status_idstatus` int(11) NOT NULL,
  `servicos_idserv` int(11) NOT NULL,
  `servicos_subcategorias_idsubc` int(11) NOT NULL,
  `servicos_subcategorias_categorias_idcat` int(11) NOT NULL,
  `servicos_subcategorias_categorias_clientes_idcli` int(11) NOT NULL,
  `servicos_fornecedores_idfor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `solicitacoes`
--

INSERT INTO `solicitacoes` (`idsol`, `descsol`, `created_at`, `updated_at`, `status_idstatus`, `servicos_idserv`, `servicos_subcategorias_idsubc`, `servicos_subcategorias_categorias_idcat`, `servicos_subcategorias_categorias_clientes_idcli`, `servicos_fornecedores_idfor`) VALUES
(1, 'Por favor, tem ladrão entrando em casa, instala essa cerca pra mim pago em bitcoins', '2018-11-18 23:39:10.000000', '2018-12-06 14:44:33.000000', 1, 1, 1, 1, 1, 1),
(2, 'net nao ta oegando no notebook', '2018-11-18 23:39:10.000000', '2018-12-06 14:44:57.000000', 3, 1, 1, 1, 1, 1),
(3, 'asdasd', '2018-11-21 02:00:00.000000', '2018-12-06 15:01:01.000000', 2, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `idstatus` int(11) NOT NULL,
  `tipostatus` varchar(15) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`idstatus`, `tipostatus`, `created_at`, `updated_at`) VALUES
(1, 'Pendente', '2018-11-22 02:00:00.000000', '2018-11-22 02:00:00.000000'),
(2, 'Concluido', '2018-11-22 02:00:00.000000', '2018-11-22 02:00:00.000000'),
(3, 'Cancelado', '2018-11-18 23:39:10.000000', '2018-11-18 23:39:10.000000'),
(4, 'Solicitado', '2018-12-12 02:00:00.000000', '2018-12-10 02:00:00.000000'),
(5, 'Finaceiro', '2018-12-06 02:00:00.000000', '2018-12-06 02:00:00.000000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategorias`
--

CREATE TABLE `subcategorias` (
  `idsubc` int(11) NOT NULL,
  `nomesubc` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `categorias_idcat` int(11) NOT NULL,
  `categorias_clientes_idcli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `subcategorias`
--

INSERT INTO `subcategorias` (`idsubc`, `nomesubc`, `created_at`, `updated_at`, `categorias_idcat`, `categorias_clientes_idcli`) VALUES
(1, 'Cerca Boa pra Roça', '2018-11-23 02:00:00.000000', '2018-11-30 02:00:00.000000', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefones`
--

CREATE TABLE `telefones` (
  `idtel` int(11) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `clientes_idcli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `telefones`
--

INSERT INTO `telefones` (`idtel`, `telefone`, `created_at`, `updated_at`, `clientes_idcli`) VALUES
(1, '33999817136', '2018-11-27 16:24:35.000000', '2018-11-27 16:24:35.000000', 10),
(2, '33999817136', '2018-11-27 21:26:27.000000', '2018-11-27 21:26:27.000000', 11),
(3, '33999817136', '2018-11-27 22:07:22.000000', '2018-11-27 22:07:22.000000', 12),
(4, '33999817136', '2018-11-27 22:08:00.000000', '2018-11-27 22:08:00.000000', 13),
(5, '33999817136', '2018-11-27 22:09:13.000000', '2018-11-27 22:09:13.000000', 14),
(6, '33999817136', '2018-11-27 22:09:30.000000', '2018-11-27 22:09:30.000000', 15),
(7, '33999817136', '2018-11-27 22:09:52.000000', '2018-11-27 22:09:52.000000', 16),
(8, '33999817136', '2018-11-27 22:10:04.000000', '2018-11-27 22:10:04.000000', 17),
(9, '33999817136', '2018-11-27 22:10:51.000000', '2018-11-27 22:10:51.000000', 18),
(10, '33999817136', '2018-11-27 22:12:39.000000', '2018-11-27 22:12:39.000000', 19),
(11, '33999817136', '2018-11-27 22:13:29.000000', '2018-11-27 22:13:29.000000', 20),
(12, '33999817136', '2018-11-27 22:13:52.000000', '2018-11-27 22:13:52.000000', 21),
(13, '33999817136', '2018-11-27 22:22:14.000000', '2018-11-27 22:22:14.000000', 22),
(37, 'asdasd', '2018-11-30 23:48:50.000000', '2018-11-30 23:48:50.000000', 75),
(38, '4564564', '2018-12-05 00:19:39.000000', '2018-12-05 00:19:39.000000', 76);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipousers`
--

CREATE TABLE `tipousers` (
  `idtipo` int(11) NOT NULL,
  `tipouserscol` varchar(45) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipousers`
--

INSERT INTO `tipousers` (`idtipo`, `tipouserscol`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', '2018-11-11 02:00:00.000000', '2018-11-11 02:00:00.000000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jackson  pinheiro', 'jackson@gmail.com', '', '$2y$10$F8/4occB12ZIHT4N6LtIse9YXQQ0V3Qy8x3FthJJQvTMSHmn3X2he', 'Wy8UMYlb5YtvNyYnHkcStLiw9wVEI45EKdHcGFjeheJxpb5pfeC3yjIZwJ7h', '2018-11-18 23:39:10', '2018-12-02 01:41:36'),
(2, 'jackson  pinheiro', 'jacksonpinheiro@live.com', '2jackson-pinheiro.jpeg', '$2y$10$A/WB4iYsJ.5RjOz1o0Sik.3ZOWXSo1AIBgiNbxbN8Adathng1a5K6', 'Jtzp22V115f39e4i71nXl3LeooNM1XsO6ogC4tmNaJc5AvAh6xswpmW1Szbx', '2018-11-23 00:09:42', '2018-12-06 13:13:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cancelados`
--
ALTER TABLE `cancelados`
  ADD PRIMARY KEY (`idcanc`,`solicitacoes_idsol`,`solicitacoes_status_idstatus`,`solicitacoes_servicos_idserv`,`solicitacoes_servicos_subcategorias_idsubc`,`solicitacoes_servicos_subcategorias_categorias_idcat`,`solicitacoes_servicos_subcategorias_categorias_clientes_idcli`,`solicitacoes_servicos_fornecedores_idfor`),
  ADD KEY `fk_cancelados_solicitacoes1` (`solicitacoes_idsol`,`solicitacoes_status_idstatus`,`solicitacoes_servicos_idserv`,`solicitacoes_servicos_subcategorias_idsubc`,`solicitacoes_servicos_subcategorias_categorias_idcat`,`solicitacoes_servicos_subcategorias_categorias_clientes_idcli`,`solicitacoes_servicos_fornecedores_idfor`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcat`,`clientes_idcli`),
  ADD KEY `fk_categorias_clientes1` (`clientes_idcli`);

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`idcid`,`estados_idest`),
  ADD KEY `fk_cidades_estados1` (`estados_idest`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcli`);

--
-- Indexes for table `concluidos`
--
ALTER TABLE `concluidos`
  ADD PRIMARY KEY (`idconc`,`solicitacoes_idsol`,`solicitacoes_status_idstatus`,`solicitacoes_servicos_idserv`,`solicitacoes_servicos_subcategorias_idsubc`,`solicitacoes_servicos_subcategorias_categorias_idcat`,`solicitacoes_servicos_subcategorias_categorias_clientes_idcli`,`solicitacoes_servicos_fornecedores_idfor`),
  ADD KEY `fk_concluidos_solicitacoes1` (`solicitacoes_idsol`,`solicitacoes_status_idstatus`,`solicitacoes_servicos_idserv`,`solicitacoes_servicos_subcategorias_idsubc`,`solicitacoes_servicos_subcategorias_categorias_idcat`,`solicitacoes_servicos_subcategorias_categorias_clientes_idcli`,`solicitacoes_servicos_fornecedores_idfor`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`idend`,`clientes_idcli`,`cidades_idcid`) USING BTREE,
  ADD KEY `fk_enderecos_clientes1` (`clientes_idcli`),
  ADD KEY `fk_enderecos_cidades1` (`cidades_idcid`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idest`),
  ADD UNIQUE KEY `siglaest_UNIQUE` (`siglaest`);

--
-- Indexes for table `financeiro`
--
ALTER TABLE `financeiro`
  ADD PRIMARY KEY (`idfin`,`concluidos_idconc`) USING BTREE,
  ADD KEY `fk_financeiro_concluidos1` (`concluidos_idconc`) USING BTREE;

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`idfor`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendencias`
--
ALTER TABLE `pendencias`
  ADD PRIMARY KEY (`idpen`,`solicitacoes_idsol`,`solicitacoes_status_idstatus`,`solicitacoes_servicos_idserv`,`solicitacoes_servicos_subcategorias_idsubc`,`solicitacoes_servicos_subcategorias_categorias_idcat`,`solicitacoes_servicos_subcategorias_categorias_clientes_idcli`,`solicitacoes_servicos_fornecedores_idfor`),
  ADD KEY `fk_pendencias_solicitacoes1` (`solicitacoes_idsol`,`solicitacoes_status_idstatus`,`solicitacoes_servicos_idserv`,`solicitacoes_servicos_subcategorias_idsubc`,`solicitacoes_servicos_subcategorias_categorias_idcat`,`solicitacoes_servicos_subcategorias_categorias_clientes_idcli`,`solicitacoes_servicos_fornecedores_idfor`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`idserv`,`subcategorias_idsubc`,`subcategorias_categorias_idcat`,`subcategorias_categorias_clientes_idcli`,`fornecedores_idfor`),
  ADD KEY `fk_servicos_subcategorias1` (`subcategorias_idsubc`,`subcategorias_categorias_idcat`,`subcategorias_categorias_clientes_idcli`),
  ADD KEY `fk_servicos_fornecedores1` (`fornecedores_idfor`);

--
-- Indexes for table `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD PRIMARY KEY (`idsol`,`status_idstatus`,`servicos_idserv`,`servicos_subcategorias_idsubc`,`servicos_subcategorias_categorias_idcat`,`servicos_subcategorias_categorias_clientes_idcli`,`servicos_fornecedores_idfor`),
  ADD KEY `fk_solicitacoes_status1` (`status_idstatus`),
  ADD KEY `fk_solicitacoes_servicos1` (`servicos_idserv`,`servicos_subcategorias_idsubc`,`servicos_subcategorias_categorias_idcat`,`servicos_subcategorias_categorias_clientes_idcli`,`servicos_fornecedores_idfor`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`idsubc`,`categorias_idcat`,`categorias_clientes_idcli`),
  ADD KEY `fk_subcategorias_categorias1` (`categorias_idcat`,`categorias_clientes_idcli`);

--
-- Indexes for table `telefones`
--
ALTER TABLE `telefones`
  ADD PRIMARY KEY (`idtel`,`clientes_idcli`) USING BTREE,
  ADD KEY `fk_telefones_clientes` (`clientes_idcli`);

--
-- Indexes for table `tipousers`
--
ALTER TABLE `tipousers`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cancelados`
--
ALTER TABLE `cancelados`
  MODIFY `idcanc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `idcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `concluidos`
--
ALTER TABLE `concluidos`
  MODIFY `idconc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `idest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `financeiro`
--
ALTER TABLE `financeiro`
  MODIFY `idfin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `idfor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pendencias`
--
ALTER TABLE `pendencias`
  MODIFY `idpen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `idserv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solicitacoes`
--
ALTER TABLE `solicitacoes`
  MODIFY `idsol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `idsubc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `telefones`
--
ALTER TABLE `telefones`
  MODIFY `idtel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tipousers`
--
ALTER TABLE `tipousers`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cancelados`
--
ALTER TABLE `cancelados`
  ADD CONSTRAINT `fk_cancelados_solicitacoes1` FOREIGN KEY (`solicitacoes_idsol`,`solicitacoes_status_idstatus`,`solicitacoes_servicos_idserv`,`solicitacoes_servicos_subcategorias_idsubc`,`solicitacoes_servicos_subcategorias_categorias_idcat`,`solicitacoes_servicos_subcategorias_categorias_clientes_idcli`,`solicitacoes_servicos_fornecedores_idfor`) REFERENCES `solicitacoes` (`idsol`, `status_idstatus`, `servicos_idserv`, `servicos_subcategorias_idsubc`, `servicos_subcategorias_categorias_idcat`, `servicos_subcategorias_categorias_clientes_idcli`, `servicos_fornecedores_idfor`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `fk_categorias_clientes1` FOREIGN KEY (`clientes_idcli`) REFERENCES `clientes` (`idcli`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `cidades`
--
ALTER TABLE `cidades`
  ADD CONSTRAINT `fk_cidades_estados1` FOREIGN KEY (`estados_idest`) REFERENCES `estados` (`idest`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `concluidos`
--
ALTER TABLE `concluidos`
  ADD CONSTRAINT `fk_concluidos_solicitacoes1` FOREIGN KEY (`solicitacoes_idsol`,`solicitacoes_status_idstatus`,`solicitacoes_servicos_idserv`,`solicitacoes_servicos_subcategorias_idsubc`,`solicitacoes_servicos_subcategorias_categorias_idcat`,`solicitacoes_servicos_subcategorias_categorias_clientes_idcli`,`solicitacoes_servicos_fornecedores_idfor`) REFERENCES `solicitacoes` (`idsol`, `status_idstatus`, `servicos_idserv`, `servicos_subcategorias_idsubc`, `servicos_subcategorias_categorias_idcat`, `servicos_subcategorias_categorias_clientes_idcli`, `servicos_fornecedores_idfor`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_enderecos_cidades1` FOREIGN KEY (`cidades_idcid`) REFERENCES `cidades` (`idcid`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_enderecos_clientes1` FOREIGN KEY (`clientes_idcli`) REFERENCES `clientes` (`idcli`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `financeiro`
--
ALTER TABLE `financeiro`
  ADD CONSTRAINT `fk_financeiro_concluidos1` FOREIGN KEY (`concluidos_idconc`) REFERENCES `concluidos` (`idconc`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pendencias`
--
ALTER TABLE `pendencias`
  ADD CONSTRAINT `fk_pendencias_solicitacoes1` FOREIGN KEY (`solicitacoes_idsol`,`solicitacoes_status_idstatus`,`solicitacoes_servicos_idserv`,`solicitacoes_servicos_subcategorias_idsubc`,`solicitacoes_servicos_subcategorias_categorias_idcat`,`solicitacoes_servicos_subcategorias_categorias_clientes_idcli`,`solicitacoes_servicos_fornecedores_idfor`) REFERENCES `solicitacoes` (`idsol`, `status_idstatus`, `servicos_idserv`, `servicos_subcategorias_idsubc`, `servicos_subcategorias_categorias_idcat`, `servicos_subcategorias_categorias_clientes_idcli`, `servicos_fornecedores_idfor`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `fk_servicos_fornecedores1` FOREIGN KEY (`fornecedores_idfor`) REFERENCES `fornecedores` (`idfor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_servicos_subcategorias1` FOREIGN KEY (`subcategorias_idsubc`,`subcategorias_categorias_idcat`,`subcategorias_categorias_clientes_idcli`) REFERENCES `subcategorias` (`idsubc`, `categorias_idcat`, `categorias_clientes_idcli`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD CONSTRAINT `fk_solicitacoes_servicos1` FOREIGN KEY (`servicos_idserv`,`servicos_subcategorias_idsubc`,`servicos_subcategorias_categorias_idcat`,`servicos_subcategorias_categorias_clientes_idcli`,`servicos_fornecedores_idfor`) REFERENCES `servicos` (`idserv`, `subcategorias_idsubc`, `subcategorias_categorias_idcat`, `subcategorias_categorias_clientes_idcli`, `fornecedores_idfor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_solicitacoes_status1` FOREIGN KEY (`status_idstatus`) REFERENCES `status` (`idstatus`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `fk_subcategorias_categorias1` FOREIGN KEY (`categorias_idcat`,`categorias_clientes_idcli`) REFERENCES `categorias` (`idcat`, `clientes_idcli`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `telefones`
--
ALTER TABLE `telefones`
  ADD CONSTRAINT `fk_telefones_clientes` FOREIGN KEY (`clientes_idcli`) REFERENCES `clientes` (`idcli`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
