-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2023 às 21:20
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `universidade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ano_lectivo`
--

CREATE TABLE `ano_lectivo` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `data_inicio` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_fim` varchar(250) DEFAULT NULL,
  `ano` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ano_lectivo`
--

INSERT INTO `ano_lectivo` (`codigo`, `data_inicio`, `data_fim`, `ano`) VALUES
(1, '2023-06-28 13:06:21', ' 2024-01-28T10:05', '2023-06-28 13:06:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `Naula` int(3) DEFAULT NULL,
  `descrisao` varchar(250) DEFAULT NULL,
  `coddepartamento` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`codigo`, `nome`, `Naula`, `descrisao`, `coddepartamento`) VALUES
(1, 'Gestão de sistema de resdes informático', 12, ' informatica', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `telefone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`codigo`, `nome`, `telefone`) VALUES
(1, 'RH', 924189301),
(2, 'INFORMÁTICA', 924189301);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `Naula` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`codigo`, `nome`, `Naula`) VALUES
(1, 'Mátematica', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudante`
--

CREATE TABLE `estudante` (
  `matricula` int(10) UNSIGNED NOT NULL,
  `nomea` varchar(255) DEFAULT NULL,
  `cursocod` int(10) UNSIGNED NOT NULL,
  `nif` int(18) DEFAULT NULL,
  `graduacao` varchar(250) DEFAULT NULL,
  `telefone` int(10) NOT NULL,
  `dta_nascimento` varchar(250) DEFAULT NULL,
  `sexo` varchar(12) DEFAULT NULL,
  `Rua` varchar(250) DEFAULT NULL,
  `provincia` varchar(250) DEFAULT NULL,
  `bi` varchar(18) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estudante`
--

INSERT INTO `estudante` (`matricula`, `nomea`, `cursocod`, `nif`, `graduacao`, `telefone`, `dta_nascimento`, `sexo`, `Rua`, `provincia`, `bi`, `data`) VALUES
(1, 'Analtino', 1, 0, 'II ciclo', 950477089, '2005-01-29', '', 'ciquentinha', 'malanje', 'ld32456789089757', '2023-06-28 18:13:55'),
(2, 'kerol dias', 0, 0, 'II ciclo', 995251006, '2005-05-20', '', ' bairro das fofoqueiras', 'luanda', 'ld32456789089757', '2023-06-29 13:00:23'),
(3, 'kerol dias', 0, 0, 'ensino primario', 995251006, '2005-05-29', '', ' bairro das fofoqueiras', 'luanda', 'ld32456789089757', '2023-06-29 13:01:26'),
(4, 'kerol dias', 0, 0, 'ensino primario', 995251006, '2023-06-29', '', ' bairro das fofoqueiras', 'luanda', 'ld32456789089757', '2023-06-29 14:00:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_escolar`
--

CREATE TABLE `historico_escolar` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `codcurso` int(10) UNSIGNED NOT NULL,
  `resultado` varchar(250) DEFAULT NULL,
  `estudante` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historico_escolar`
--

INSERT INTO `historico_escolar` (`codigo`, `codcurso`, `resultado`, `estudante`) VALUES
(1, 1, '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `funcionario` varchar(250) DEFAULT NULL,
  `codsala` int(10) UNSIGNED NOT NULL,
  `periodo` varchar(250) DEFAULT NULL,
  `codturma` int(10) UNSIGNED NOT NULL,
  `codcurso` int(10) UNSIGNED NOT NULL,
  `ano` varchar(250) DEFAULT NULL,
  `ano_academico` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `cod_ano` int(10) UNSIGNED NOT NULL,
  `data_lancamento` timestamp NOT NULL DEFAULT current_timestamp(),
  `coddisciplinais` int(10) UNSIGNED NOT NULL,
  `codstudys` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nota`
--

INSERT INTO `nota` (`codigo`, `cod_ano`, `data_lancamento`, `coddisciplinais`, `codstudys`) VALUES
(1, 1, '2023-06-28 03:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `matricula` int(10) UNSIGNED NOT NULL,
  `nomep` varchar(250) DEFAULT NULL,
  `sexo` varchar(9) DEFAULT NULL,
  `cod_departamento` int(10) UNSIGNED NOT NULL,
  `data_admissao` varchar(250) DEFAULT NULL,
  `bi` varchar(25) DEFAULT NULL,
  `nif` varchar(25) DEFAULT NULL,
  `nome_dependente` varchar(250) DEFAULT NULL,
  `data_nascimento_dependente` varchar(9) DEFAULT NULL,
  `telefone` int(9) DEFAULT NULL,
  `codcurso` int(10) UNSIGNED NOT NULL,
  `outros` varchar(250) DEFAULT NULL,
  `trabalho_publicado` varchar(250) DEFAULT NULL,
  `curso_extensao` varchar(250) DEFAULT NULL,
  `especealidade` varchar(250) DEFAULT NULL,
  `licenciatura` varchar(250) DEFAULT NULL,
  `rua` varchar(250) DEFAULT NULL,
  `cidade` varchar(250) DEFAULT NULL,
  `bairro` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`matricula`, `nomep`, `sexo`, `cod_departamento`, `data_admissao`, `bi`, `nif`, `nome_dependente`, `data_nascimento_dependente`, `telefone`, `codcurso`, `outros`, `trabalho_publicado`, `curso_extensao`, `especealidade`, `licenciatura`, `rua`, `cidade`, `bairro`) VALUES
(1, 'Analtino', 'Masculino', 2, ' 2023-06-28', ' ld24356456588787', ' ld32456789089757', ' Anacleto', ' 2005-01-', 950477089, 1, ' ordem', ' inf', ' redes', ' programacao', ' ', ' 2f', 'viana', ' ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`codigo`, `nome`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `coddepartamento` int(10) UNSIGNED NOT NULL,
  `codprofessor` int(10) UNSIGNED NOT NULL,
  `codestudante` int(10) UNSIGNED NOT NULL,
  `codfuncionario` int(10) UNSIGNED NOT NULL,
  `codtecnico_administrativo` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `codprofessor` int(10) UNSIGNED NOT NULL,
  `NSALA` int(10) UNSIGNED NOT NULL,
  `cod_ano` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`codigo`, `nome`, `codprofessor`, `NSALA`, `cod_ano`) VALUES
(1, 'ig12at', 1, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ano_lectivo`
--
ALTER TABLE `ano_lectivo`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `curso_departamento` (`coddepartamento`);

--
-- Índices para tabela `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `estudante`
--
ALTER TABLE `estudante`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `estudante_curso` (`cursocod`);

--
-- Índices para tabela `historico_escolar`
--
ALTER TABLE `historico_escolar`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `historico_escolar_curso` (`codcurso`),
  ADD KEY `historico_escolar_estudante` (`estudante`);

--
-- Índices para tabela `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `matricula_sala` (`codsala`),
  ADD KEY `matricula_turma` (`codturma`),
  ADD KEY `matricula_curso` (`codcurso`);

--
-- Índices para tabela `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `nota_ano` (`cod_ano`),
  ADD KEY `nota_disciplina` (`coddisciplinais`),
  ADD KEY `nota_estudante` (`codstudys`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `professor_departamento` (`cod_departamento`),
  ADD KEY `professor_curso` (`codcurso`);

--
-- Índices para tabela `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `telefone_departamento` (`coddepartamento`),
  ADD KEY `telefone_funcionario` (`codfuncionario`),
  ADD KEY `telefone_tecnico_adm` (`codtecnico_administrativo`),
  ADD KEY `telefone_estudante` (`codestudante`) USING BTREE,
  ADD KEY `telefone_professor` (`codprofessor`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `turma_professor` (`codprofessor`),
  ADD KEY `turma_sala` (`NSALA`),
  ADD KEY `turma_ano` (`cod_ano`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ano_lectivo`
--
ALTER TABLE `ano_lectivo`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `estudante`
--
ALTER TABLE `estudante`
  MODIFY `matricula` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `historico_escolar`
--
ALTER TABLE `historico_escolar`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `matricula`
--
ALTER TABLE `matricula`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `nota`
--
ALTER TABLE `nota`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `matricula` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sala`
--
ALTER TABLE `sala`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `telefone`
--
ALTER TABLE `telefone`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
