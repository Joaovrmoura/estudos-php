-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Dez-2024 às 19:19
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pdo_tutorial`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `account_balance`
--

CREATE TABLE `account_balance` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `balance` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `account_balance`
--

INSERT INTO `account_balance` (`id`, `user_id`, `balance`) VALUES
(1, 2, '100'),
(2, 3, '500'),
(3, 2, '340'),
(4, 4, '100');

-- --------------------------------------------------------

--
-- Estrutura da tabela `employee_data`
--

CREATE TABLE `employee_data` (
  `emp` int(11) NOT NULL,
  `emp_name` varchar(200) NOT NULL,
  `emp_place` varchar(100) NOT NULL,
  `emp_age` int(11) NOT NULL,
  `emp_dob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `employee_data`
--

INSERT INTO `employee_data` (`emp`, `emp_name`, `emp_place`, `emp_age`, `emp_dob`) VALUES
(1, 'pedrita', 'souza', 25, '08/01/1998'),
(2, 'lorena', 'silva', 22, '10/08/1999'),
(3, 'maria', 'moura', 18, '11/05/2000'),
(4, 'vt', 'wave', 45, '09/01/2010'),
(5, 'vt', 'rodrigues', 26, '1990'),
(6, 'suman', 'chennei', 36, '1990'),
(7, 'suman', 'chennei', 36, '1990');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`) VALUES
(1, 'marana12', 'marana@gmail.com'),
(2, 'luaninha', 'lua@gmail.com'),
(3, 'lucio', 'lucio@gmail.com'),
(4, 'morgan', ' morgan@gmail.com'),
(5, 'joaos', 'joaos@gmail.com'),
(10, 'laos', 'laos@gmail.com'),
(15, 'kratos', 'kratos@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `account_balance`
--
ALTER TABLE `account_balance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign` (`user_id`);

--
-- Índices para tabela `employee_data`
--
ALTER TABLE `employee_data`
  ADD PRIMARY KEY (`emp`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `account_balance`
--
ALTER TABLE `account_balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `employee_data`
--
ALTER TABLE `employee_data`
  MODIFY `emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
