-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jun-2023 às 02:40
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
-- Banco de dados: `itls`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ano_lectivo`
--

CREATE TABLE `ano_lectivo` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `data_inicio` varchar(250) DEFAULT NULL,
  `data_fim` varchar(250) DEFAULT NULL,
  `ano` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ano_lectivo`
--

INSERT INTO `ano_lectivo` (`codigo`, `data_inicio`, `data_fim`, `ano`) VALUES
(1, '2023-06-25T14:21', ' 2024-01-01T14:21', ' 2024-');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `Naula` int(3) DEFAULT NULL,
  `descrisao` varchar(250) DEFAULT NULL,
  `coddepartamento` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`codigo`, `nome`, `Naula`, `descrisao`, `coddepartamento`) VALUES
(1, 'ig12at', 0, ' informatica', 0),
(2, 'ig12bt', 0, ' informatica', 0),
(3, 'ig12ct', 0, ' informatica', 0),
(4, 'GIVA', 0, ' informatica', 2),
(5, 'ig12am', 0, ' informatica', 0),
(6, 'ENERGIA RENOVÁVEIS ', 0, ' EI', 1),
(7, 'electro Mecanica', 0, ' EM', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `telefone` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`codigo`, `nome`, `telefone`) VALUES
(1, 'RG', 995251006),
(2, 'GIVA', 956026966);

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
(1, 'Matematica', 1),
(2, 'TLP', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudante`
--

CREATE TABLE `estudante` (
  `matricula` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cursocod` int(10) UNSIGNED NOT NULL,
  `nif` int(250) DEFAULT NULL,
  `graduacao` varchar(250) DEFAULT NULL,
  `telefone` int(9) DEFAULT NULL,
  `dta_nascimento` varchar(250) DEFAULT NULL,
  `sexo` varchar(2500) DEFAULT NULL,
  `Rua` varchar(250) DEFAULT NULL,
  `cidade` varchar(250) DEFAULT NULL,
  `disciplina` varchar(250) DEFAULT NULL,
  `provincia` varchar(250) DEFAULT NULL,
  `bi` varchar(18) DEFAULT NULL,
  `turma` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estudante`
--

INSERT INTO `estudante` (`matricula`, `nome`, `cursocod`, `nif`, `graduacao`, `telefone`, `dta_nascimento`, `sexo`, `Rua`, `cidade`, `disciplina`, `provincia`, `bi`, `turma`) VALUES
(1, 'kerol', 1, 0, 'II ciclo', 956026966, '2005-05-29T00:00', '', ' 3', 'luanda', '1', 'luanda', 'ld2132373297443565', 1),
(2, 'Analtino', 2, 0, 'I ciclo', 924189301, '2005-01-29T05:00', '', ' ciquentinha', 'viana', '2', 'malanje', 'ld32456789089757', 1),
(3, 'Domingos Dias', 3, 0, 'ensino primario', 950477089, '2012-01-02T22:00', '', ' bairro das fofoqueiras', 'viana', '1', 'malanje', 'ld32456789089757', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_escolar`
--

CREATE TABLE `historico_escolar` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `coddiscilpina` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historico_escolar`
--

INSERT INTO `historico_escolar` (`codigo`, `coddiscilpina`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `codigo` int(10) NOT NULL,
  `gmail` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `codano` int(10) UNSIGNED NOT NULL,
  `ano_academico` varchar(250) DEFAULT NULL,
  `coddisciplinas` int(10) UNSIGNED NOT NULL,
  `codestudante` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `matricula`
--

INSERT INTO `matricula` (`codigo`, `funcionario`, `codsala`, `periodo`, `codturma`, `codcurso`, `codano`, `ano_academico`, `coddisciplinas`, `codestudante`) VALUES
(1, 'AG', 1, ' TARDE', 1, 1, 0, ' 2023-06-25T14:25', 0, 0),
(2, '', 1, ' TARDE', 1, 1, 0, ' 2023-06-25T15:22', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `PT1` varchar(250) DEFAULT NULL,
  `PT2` varchar(250) DEFAULT NULL,
  `PT3` varchar(250) DEFAULT NULL,
  `coddisciplinais` int(10) UNSIGNED NOT NULL,
  `codstudys` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nota`
--

INSERT INTO `nota` (`codigo`, `PT1`, `PT2`, `PT3`, `coddisciplinais`, `codstudys`) VALUES
(1, '15', ' 20', '20', 1, 0),
(2, '20', ' 20', '20', 1, 0),
(3, '20', ' 20', '20', 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `matricula` int(10) UNSIGNED NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `sexo` varchar(9) DEFAULT NULL,
  `cod_departamento` int(10) UNSIGNED NOT NULL,
  `data_admissao` varchar(250) DEFAULT NULL,
  `documentos_pessoais` varchar(250) DEFAULT NULL,
  `nome_dependente` varchar(250) DEFAULT NULL,
  `data_nascimento_dependente` varchar(9) DEFAULT NULL,
  `telefone` int(9) DEFAULT NULL,
  `codcurso` int(10) UNSIGNED NOT NULL,
  `outros` varchar(250) DEFAULT NULL,
  `trabalho_publicado` varchar(250) DEFAULT NULL,
  `curso_extensao` varchar(250) DEFAULT NULL,
  `especealidade` varchar(250) DEFAULT NULL,
  `licenciatura` varchar(250) DEFAULT NULL,
  `codrelatorio` int(10) UNSIGNED NOT NULL,
  `codhistorico_escolar` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`matricula`, `nome`, `endereco`, `sexo`, `cod_departamento`, `data_admissao`, `documentos_pessoais`, `nome_dependente`, `data_nascimento_dependente`, `telefone`, `codcurso`, `outros`, `trabalho_publicado`, `curso_extensao`, `especealidade`, `licenciatura`, `codrelatorio`, `codhistorico_escolar`) VALUES
(1, '', ' luanda,rua2,viana', ' ', 1, ' 2023-06-24T18:48', ' doccumento fernando.docx', ' kerol', ' 2023-06-', 956026966, 1, ' nao especializados ', ' download.jpg', ' redes', ' programação ', ' ', 0, 0),
(2, 'kerol', ' luanda,rua2,viana', ' ', 2, ' 2023-06-24T19:20', ' ', ' kerol', ' 2023-06-', 956026966, 1, ' nao especializados ', ' ', ' redes', ' programação ', ' ', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `releatorio`
--

CREATE TABLE `releatorio` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `notas` int(20) UNSIGNED NOT NULL,
  `semestre` varchar(20) DEFAULT NULL,
  `coddisciplina` int(10) UNSIGNED NOT NULL,
  `codano_lectivo` int(10) UNSIGNED NOT NULL,
  `codturma` int(10) UNSIGNED NOT NULL,
  `data_lancameto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `releatorio`
--

INSERT INTO `releatorio` (`codigo`, `notas`, `semestre`, `coddisciplina`, `codano_lectivo`, `codturma`, `data_lancameto`) VALUES
(1, 1, ' 2023-06-24T23:36', 0, 0, 1, ' 2023-06-24T23:36'),
(2, 1, ' 2023-06-24T23:38', 1, 0, 1, ' 2023-06-24T23:38');

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
(1, '01/15');

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
(1, 'ig12at', 0, 1, 0);

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
  ADD KEY `curso_FKindex1` (`coddepartamento`);

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
  ADD KEY `estudante_FKindex1` (`cursocod`),
  ADD KEY `estudante_fkindex4` (`turma`);

--
-- Índices para tabela `historico_escolar`
--
ALTER TABLE `historico_escolar`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `escola_fkindex1` (`coddiscilpina`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `matricula_FKindex1` (`codsala`),
  ADD KEY `matricula_FKindex2` (`codturma`),
  ADD KEY `matricula_FKindex3` (`codcurso`),
  ADD KEY `matricula_FKindex4` (`codano`),
  ADD KEY `matricula_FKindex5` (`coddisciplinas`),
  ADD KEY `matricula_FKindex16` (`codestudante`);

--
-- Índices para tabela `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `nota_fkindex20` (`coddisciplinais`),
  ADD KEY `nota_fkindex21` (`codstudys`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `professor_FKindex1` (`codrelatorio`),
  ADD KEY `professor_FKindex2` (`codhistorico_escolar`),
  ADD KEY `professor_fkindex4` (`cod_departamento`),
  ADD KEY `frofessor_fkindex5` (`codcurso`);

--
-- Índices para tabela `releatorio`
--
ALTER TABLE `releatorio`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `relatorio_FKindex1` (`coddisciplina`),
  ADD KEY `relatorio_FKindex2` (`codano_lectivo`),
  ADD KEY `releatorio_fkindex6` (`notas`);

--
-- Índices para tabela `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `turma_FKindex1` (`codprofessor`),
  ADD KEY `turma_fk1` (`NSALA`),
  ADD KEY `turma_FK2` (`cod_ano`);

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
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `estudante`
--
ALTER TABLE `estudante`
  MODIFY `matricula` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `historico_escolar`
--
ALTER TABLE `historico_escolar`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `matricula`
--
ALTER TABLE `matricula`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `nota`
--
ALTER TABLE `nota`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `matricula` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `releatorio`
--
ALTER TABLE `releatorio`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `sala`
--
ALTER TABLE `sala`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
