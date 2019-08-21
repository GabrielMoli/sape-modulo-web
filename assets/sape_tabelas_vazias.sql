-- -----------------------------------------------------
-- Table `cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cidade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cor_raca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cor_raca` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `escola_origem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `escola_origem` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faixa_renda_familiar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `faixa_renda_familiar` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `faixa_renda_pc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `faixa_renda_pc` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `forma_ingresso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `forma_ingresso` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tipo_cota`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tipo_cota` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `situacao_matricula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `situacao_matricula` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `situacao_matricula_id` INT NULL,
  `ano_ingresso` INT NULL,
  `semestre_ingresso` INT NULL,
  `ano_nascimento` INT NULL,
  `sexo` INT NULL,
  `forma_ingresso_id` INT NULL,
  `tipo_cota_id` INT NULL,
  `cor_raca_id` INT NULL,
  `faixa_renda_familiar_id` INT NULL,
  `faixa_renda_pc_id` INT NULL,
  `escola_origem_id` INT NULL,
  `matriz_curricular_id` INT NULL,
  `distancia_km` FLOAT NULL,
  `horas_desloc` INT NULL,
  `min_desloc` INT NULL,
  `cidade_id` INT NULL,
  `percentual_frequencia` FLOAT NULL,
  `ch_obr_exigida` INT NULL,
  `ch_obr_cumprida` INT NULL,
  `ch_opt_exigida` INT NULL,
  `ch_opt_cumprida` INT NULL,
  `ch_est_exigida` INT NULL,
  `ch_est_cumprida` INT NULL,
  `ch_com_exigida` INT NULL,
  `ch_com_cumprida` INT NULL,
  `ch_ele_exigida` INT NULL,
  `ch_ele_cumprida` INT NULL,
  `ch_tcc_exigida` INT NULL,
  `ch_tcc_cumprida` INT NULL,
  `ch_tot_exigida` INT NULL,
  `ch_tot_cumprida` INT NULL,
  `cr_tot_exigida` INT NULL,
  `cr_tot_cumprida` INT NULL,
  `hash` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_aluno_cidade1_idx` (`cidade_id` ASC),
  INDEX `fk_aluno_cor_raca1_idx` (`cor_raca_id` ASC),
  INDEX `fk_aluno_escola_origem1_idx` (`escola_origem_id` ASC),
  INDEX `fk_aluno_faixa_renda_familiar1_idx` (`faixa_renda_familiar_id` ASC),
  INDEX `fk_aluno_faixa_renda_pc1_idx` (`faixa_renda_pc_id` ASC),
  INDEX `fk_aluno_forma_ingresso1_idx` (`forma_ingresso_id` ASC),
  INDEX `fk_aluno_tipo_cota1_idx` (`tipo_cota_id` ASC),
  INDEX `fk_aluno_situacao_matricula1_idx` (`situacao_matricula_id` ASC),
  CONSTRAINT `fk_aluno_cidade1`
    FOREIGN KEY (`cidade_id`)
    REFERENCES `cidade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_cor_raca1`
    FOREIGN KEY (`cor_raca_id`)
    REFERENCES `cor_raca` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_escola_origem1`
    FOREIGN KEY (`escola_origem_id`)
    REFERENCES `escola_origem` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_faixa_renda_familiar1`
    FOREIGN KEY (`faixa_renda_familiar_id`)
    REFERENCES `faixa_renda_familiar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_faixa_renda_pc1`
    FOREIGN KEY (`faixa_renda_pc_id`)
    REFERENCES `faixa_renda_pc` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_forma_ingresso1`
    FOREIGN KEY (`forma_ingresso_id`)
    REFERENCES `forma_ingresso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_tipo_cota1`
    FOREIGN KEY (`tipo_cota_id`)
    REFERENCES `tipo_cota` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_situacao_matricula1`
    FOREIGN KEY (`situacao_matricula_id`)
    REFERENCES `situacao_matricula` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `disciplina` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NULL,
  `ch` INT NULL,
  `codigo` VARCHAR(12) NULL,
  `tipo` VARCHAR(3) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `docente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `docente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(255) NULL,
  `efetivo` TINYINT(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `docente_has_disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `docente_has_disciplina` (
  `docente_id` INT NULL,
  `disciplina_id` INT NULL,
  `codigo` VARCHAR(12) NULL,
  `ano` INT NULL,
  `id` INT NOT NULL AUTO_INCREMENT,
  `periodo` INT NULL,
  `vagas` INT NULL,
  `alunos` INT NULL,
  `docente_codigo` VARCHAR(255) NULL,
  INDEX `fk_docente_has_disciplina_disciplina1_idx` (`disciplina_id` ASC),
  INDEX `fk_docente_has_disciplina_docente1_idx` (`docente_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_docente_has_disciplina_docente1`
    FOREIGN KEY (`docente_id`)
    REFERENCES `docente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_docente_has_disciplina_disciplina1`
    FOREIGN KEY (`disciplina_id`)
    REFERENCES `disciplina` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `area_conhecimento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `area_conhecimento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tipo_atividade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tipo_atividade` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `setor_responsavel` VARCHAR(45) NULL,
  `descricao` VARCHAR(155) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `atividade_extraclasse`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `atividade_extraclasse` (
  `id` INT NOT NULL,
  `titulo` VARCHAR(200) NULL,
  `duracao` FLOAT NULL,
  `remuneracao` TINYINT(1) NULL,
  `area_conhecimento_id` INT NULL,
  `tipo_atividade_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_atividade_extraclasse_area_conhecimento1_idx` (`area_conhecimento_id` ASC),
  INDEX `fk_atividade_extraclasse_tipo_atividade1_idx` (`tipo_atividade_id` ASC),
  CONSTRAINT `fk_atividade_extraclasse_area_conhecimento1`
    FOREIGN KEY (`area_conhecimento_id`)
    REFERENCES `area_conhecimento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_atividade_extraclasse_tipo_atividade1`
    FOREIGN KEY (`tipo_atividade_id`)
    REFERENCES `tipo_atividade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `atividade_extraclasse_has_docente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `atividade_extraclasse_has_docente` (
  `atividade_extraclasse_id` INT NOT NULL,
  `docente_id` INT NOT NULL,
  `id` INT NOT NULL AUTO_INCREMENT,
  INDEX `fk_atividade_extraclasse_has_docente_docente1_idx` (`docente_id` ASC),
  INDEX `fk_atividade_extraclasse_has_docente_atividade_extraclasse1_idx` (`atividade_extraclasse_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_atividade_extraclasse_has_docente_atividade_extraclasse1`
    FOREIGN KEY (`atividade_extraclasse_id`)
    REFERENCES `atividade_extraclasse` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_atividade_extraclasse_has_docente_docente1`
    FOREIGN KEY (`docente_id`)
    REFERENCES `docente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aluno_has_disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aluno_has_disciplina` (
  `aluno_id` INT NULL,
  `disciplina_id` INT NULL,
  `id` INT NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(12) NULL,
  `ano` INT NULL,
  `periodo` INT NULL,
  `nota` FLOAT NULL,
  `frequencia` INT NULL,
  `situacao` VARCHAR(50) NULL,
  `hash_aluno` VARCHAR(255) NULL,
  INDEX `fk_aluno_has_disciplina1_disciplina1_idx` (`disciplina_id` ASC),
  INDEX `fk_aluno_has_disciplina1_aluno1_idx` (`aluno_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_aluno_has_disciplina1_aluno1`
    FOREIGN KEY (`aluno_id`)
    REFERENCES `aluno` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_has_disciplina1_disciplina1`
    FOREIGN KEY (`disciplina_id`)
    REFERENCES `disciplina` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aluno_has_disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aluno_has_disciplina` (
  `aluno_id` INT NULL,
  `disciplina_id` INT NULL,
  `id` INT NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(12) NULL,
  `ano` INT NULL,
  `periodo` INT NULL,
  `nota` FLOAT NULL,
  `frequencia` INT NULL,
  `situacao` VARCHAR(50) NULL,
  `hash_aluno` VARCHAR(255) NULL,
  INDEX `fk_aluno_has_disciplina1_disciplina1_idx` (`disciplina_id` ASC),
  INDEX `fk_aluno_has_disciplina1_aluno1_idx` (`aluno_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_aluno_has_disciplina1_aluno1`
    FOREIGN KEY (`aluno_id`)
    REFERENCES `aluno` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_has_disciplina1_disciplina1`
    FOREIGN KEY (`disciplina_id`)
    REFERENCES `disciplina` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `funcao` VARCHAR(45) NULL,
  `cpf` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `atividade_extraclasse_has_aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `atividade_extraclasse_has_aluno` (
  `id` INT NOT NULL,
  `atividade_extraclasse_id` INT NULL,
  `aluno_id` INT NULL,
  INDEX `fk_atividade_extraclasse_has_aluno_aluno1_idx` (`aluno_id` ASC),
  INDEX `fk_atividade_extraclasse_has_aluno_atividade_extraclasse1_idx` (`atividade_extraclasse_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_atividade_extraclasse_has_aluno_atividade_extraclasse1`
    FOREIGN KEY (`atividade_extraclasse_id`)
    REFERENCES `atividade_extraclasse` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_atividade_extraclasse_has_aluno_aluno1`
    FOREIGN KEY (`aluno_id`)
    REFERENCES `aluno` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
