-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema curriculumdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema curriculumdb
-- -----------------------------------------------------
-- CREATE SCHEMA IF NOT EXISTS `curriculumdb` DEFAULT CHARACTER SET utf8 ;
-- USE `curriculumdb` ;

-- -----------------------------------------------------
-- Table `usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuario` (
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `perfil` VARCHAR(45) NOT NULL DEFAULT 'candidato',
  PRIMARY KEY (`email`));


-- -----------------------------------------------------
-- Table `curso_complementar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `curso_complementar` (
  `email` VARCHAR(45) NOT NULL,
  `cursocompl` VARCHAR(45) NOT NULL,
  `horascompl` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`email`, `cursocompl`),
  CONSTRAINT `curso_complementar_email`
    FOREIGN KEY (`email`)
    REFERENCES `usuario` (`email`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);


-- -----------------------------------------------------
-- Table `empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `empresa` (
  `email` VARCHAR(45) NOT NULL,
  `razao_social` VARCHAR(45) NOT NULL,
  `nome_fantasia` VARCHAR(45) NOT NULL,
  `cnpj` VARCHAR(45) NULL DEFAULT NULL,
  `responsavel` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NULL DEFAULT NULL,
  `bairro` VARCHAR(45) NULL DEFAULT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `segmento` VARCHAR(45) NOT NULL,
  `atividade` VARCHAR(45) NOT NULL,
  `porte` VARCHAR(45) NOT NULL,
  `info_gerais` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`email`),
  CONSTRAINT `empresa_email`
    FOREIGN KEY (`email`)
    REFERENCES `usuario` (`email`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);


-- -----------------------------------------------------
-- Table `empresa_contato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `empresa_contato` (
  `email` VARCHAR(45) NOT NULL,
  `contato` VARCHAR(45) NOT NULL,
  `tipo` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`email`, `contato`),
  CONSTRAINT `empresacontato_email`
    FOREIGN KEY (`email`)
    REFERENCES `usuario` (`email`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);


-- -----------------------------------------------------
-- Table `experiencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `experiencia` (
  `email` VARCHAR(45) NOT NULL,
  `empresa` VARCHAR(45) NOT NULL,
  `cargo` VARCHAR(45) NOT NULL,
  `entrada` INT(11) NULL DEFAULT NULL,
  `saida` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`email`, `empresa`, `cargo`),
  CONSTRAINT `experiencia_email`
    FOREIGN KEY (`email`)
    REFERENCES `usuario` (`email`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);


-- -----------------------------------------------------
-- Table `formacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `formacao` (
  `email` VARCHAR(45) NOT NULL,
  `curso` VARCHAR(45) NOT NULL,
  `instituicao` VARCHAR(45) NOT NULL,
  `status` VARCHAR(45) NULL DEFAULT NULL,
  `conclusao` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`email`, `curso`, `instituicao`),
  CONSTRAINT `formacao_email`
    FOREIGN KEY (`email`)
    REFERENCES `usuario` (`email`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);


-- -----------------------------------------------------
-- Table `idioma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `idioma` (
  `email` VARCHAR(45) NOT NULL,
  `idioma` VARCHAR(45) NOT NULL,
  `nivel` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`email`, `idioma`),
  CONSTRAINT `idioma_email`
    FOREIGN KEY (`email`)
    REFERENCES `usuario` (`email`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);


-- -----------------------------------------------------
-- Table `info_pessoal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `info_pessoal` (
  `email` VARCHAR(45) NOT NULL,
  `nomeCompleto` VARCHAR(64) NOT NULL,
  `idade` INT(11) NULL DEFAULT NULL,
  `sexo` VARCHAR(45) NULL DEFAULT NULL,
  `estadoCivil` VARCHAR(45) NULL DEFAULT NULL,
  `nacionalidade` VARCHAR(45) NULL DEFAULT NULL,
  `objetivo` VARCHAR(64) NULL DEFAULT NULL,
  `endereco` VARCHAR(64) NULL DEFAULT NULL,
  `cidade` VARCHAR(45) NULL DEFAULT NULL,
  `estado` VARCHAR(45) NULL DEFAULT NULL,
  `telefone` VARCHAR(45) NULL DEFAULT NULL,
  `info_adicional` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`email`),
  CONSTRAINT `usuario_email`
    FOREIGN KEY (`email`)
    REFERENCES `usuario` (`email`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);


-- -----------------------------------------------------
-- Table `vaga`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vaga` (
  `numero` INT(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `area` VARCHAR(45) NOT NULL,
  `vaga` VARCHAR(45) NOT NULL,
  `descricao` TEXT NULL DEFAULT NULL,
  `quantidade` INT(11) NULL DEFAULT NULL,
  `data` DATETIME NULL DEFAULT NULL,
  `salario` DOUBLE NULL DEFAULT NULL,
  PRIMARY KEY (`numero`, `email`),
  INDEX `vaga_empresaemail_idx` (`email` ASC),
  CONSTRAINT `vaga_empresaemail`
    FOREIGN KEY (`email`)
    REFERENCES `empresa` (`email`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);


-- -----------------------------------------------------
-- Table `vaga_candidato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vaga_candidato` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `vaga_numero` INT(11) NOT NULL,
  `vaga_empresa` VARCHAR(45) NOT NULL,
  `candidato_email` VARCHAR(45) NOT NULL,
  `data` DATETIME NULL DEFAULT NULL,
  `status` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `vaga_numero`, `candidato_email`, `vaga_empresa`),
  INDEX `vaga_idx` (`vaga_numero` ASC, `vaga_empresa` ASC),
  INDEX `candidato_idx` (`candidato_email` ASC),
  CONSTRAINT `candidato`
    FOREIGN KEY (`candidato_email`)
    REFERENCES `info_pessoal` (`email`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `vaga`
    FOREIGN KEY (`vaga_numero` , `vaga_empresa`)
    REFERENCES `vaga` (`numero` , `email`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
