-- MySQL Script generated by MySQL Workbench
-- Sat Nov 13 18:42:16 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema finmodel
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema finmodel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `finmodel` DEFAULT CHARACTER SET utf8 ;
USE `finmodel` ;

-- -----------------------------------------------------
-- Table `finmodel`.`texnika`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `finmodel`.`texnika` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` INT NOT NULL,
  `toplivo` FLOAT NOT NULL,
  `norma` FLOAT NOT NULL,
  `price` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `finmodel`.`cultura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `finmodel`.`cultura` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `finmodel`.`sort`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `finmodel`.`sort` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `cultura_id` INT NOT NULL,
  `plus` VARCHAR(255) NOT NULL,
  `minus` VARCHAR(255) NOT NULL,
  `profit` INT NOT NULL,
  `tovarnost` VARCHAR(45) NOT NULL,
  `time_grow` VARCHAR(45) NOT NULL,
  `lejcost` VARCHAR(45) NOT NULL,
  `price` FLOAT NOT NULL,
  `area_number` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Sort_Cultura_idx` (`cultura_id` ASC) VISIBLE,
  CONSTRAINT `fk_Sort_Cultura`
    FOREIGN KEY (`cultura_id`)
    REFERENCES `finmodel`.`cultura` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `finmodel`.`region`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `finmodel`.`region` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `number` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `finmodel`.`area`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `finmodel`.`area` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL,
  `region_id` INT NOT NULL,
  `recomended_culture` VARCHAR(255) NULL,
  `cultura_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_area_region1_idx` (`region_id` ASC) VISIBLE,
  INDEX `fk_area_cultura1_idx` (`cultura_id` ASC) VISIBLE,
  CONSTRAINT `fk_area_region1`
    FOREIGN KEY (`region_id`)
    REFERENCES `finmodel`.`region` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_area_cultura1`
    FOREIGN KEY (`cultura_id`)
    REFERENCES `finmodel`.`cultura` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `finmodel`.`fin_model`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `finmodel`.`fin_model` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `sort_id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `descriprion` VARCHAR(255) NULL,
  `area` FLOAT NOT NULL,
  `area_house` FLOAT NOT NULL DEFAULT 0,
  `electro_price` INT NOT NULL  DEFAULT 0,
  `water_price` INT NOT NULL  DEFAULT 0,
  `price_culture` VARCHAR(45) NULL  DEFAULT 0,
  `exp_1` FLOAT NULL DEFAULT 0,
  `prib_1` FLOAT NULL DEFAULT 0,
  `price` FLOAT NULL  DEFAULT 0,
  `exp_2` FLOAT NULL DEFAULT 0,
  `prib_2` FLOAT NULL DEFAULT 0,
  `exp_3` FLOAT NULL DEFAULT 0,
  `prib_3` FLOAT NULL DEFAULT 0,
  `exp_4` FLOAT NULL DEFAULT 0,
  `prib_4` FLOAT NULL DEFAULT 0,
  `prib_5` FLOAT NULL DEFAULT 0,
  `exp_5` FLOAT NULL DEFAULT 0,
  `prib_6` FLOAT NULL DEFAULT 0,
  `exp_6` FLOAT NULL DEFAULT 0,
  `exp_7` FLOAT NULL DEFAULT 0,
  `prib_7` FLOAT NULL DEFAULT 0,
  `exp_8` FLOAT NULL DEFAULT 0,
  `prib_8` FLOAT NULL DEFAULT 0,
  `exp_9` FLOAT NULL DEFAULT 0,
  `prib_9` FLOAT NULL DEFAULT 0,
  `exp_10` FLOAT NULL DEFAULT 0,
  `prib_10` FLOAT NULL DEFAULT 0,
  `exp_11` FLOAT NULL DEFAULT 0,
  `prib_11` FLOAT NULL DEFAULT 0,
  `prib_12` FLOAT NULL DEFAULT 0,
  `exp_12` FLOAT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  INDEX `fk_fin_model_Sort1_idx` (`sort_id` ASC) VISIBLE,
  CONSTRAINT `fk_fin_model_Sort1`
    FOREIGN KEY (`sort_id`)
    REFERENCES `finmodel`.`sort` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `finmodel`.`expense`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `finmodel`.`expense` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `texnika_id` INT NULL,
  `fin_model_id` INT NOT NULL,
  `exp_1` FLOAT NULL DEFAULT 0,
  `prib_1` FLOAT NULL DEFAULT 0,
  `price` FLOAT NOT NULL,
  `exp_2` FLOAT NULL DEFAULT 0,
  `prib_2` FLOAT NULL DEFAULT 0,
  `exp_3` FLOAT NULL DEFAULT 0,
  `prib_3` FLOAT NULL DEFAULT 0,
  `exp_4` FLOAT NULL DEFAULT 0,
  `prib_4` FLOAT NULL DEFAULT 0,
  `prib_5` FLOAT NULL DEFAULT 0,
  `exp_5` FLOAT NULL DEFAULT 0,
  `prib_6` FLOAT NULL DEFAULT 0,
  `exp_6` FLOAT NULL DEFAULT 0,
  `exp_7` FLOAT NULL DEFAULT 0,
  `prib_7` FLOAT NULL DEFAULT 0,
  `exp_8` FLOAT NULL DEFAULT 0,
  `prib_8` FLOAT NULL DEFAULT 0,
  `exp_9` FLOAT NULL DEFAULT 0,
  `prib_9` FLOAT NULL DEFAULT 0,
  `exp_10` FLOAT NULL DEFAULT 0,
  `prib_10` FLOAT NULL DEFAULT 0,
  `exp_11` FLOAT NULL DEFAULT 0,
  `prib_11` FLOAT NULL DEFAULT 0,
  `prib_12` FLOAT NULL DEFAULT 0,
  `exp_12` FLOAT NULL DEFAULT 0,
  `in_stock` TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  INDEX `fk_expense_texnika1_idx` (`texnika_id` ASC) VISIBLE,
  INDEX `fk_expense_fin_model1_idx` (`fin_model_id` ASC) VISIBLE,
  CONSTRAINT `fk_expense_texnika1`
    FOREIGN KEY (`texnika_id`)
    REFERENCES `finmodel`.`texnika` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_expense_fin_model1`
    FOREIGN KEY (`fin_model_id`)
    REFERENCES `finmodel`.`fin_model` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `finmodel`.`migration`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `finmodel`.`migration` (
  `version` VARCHAR(180) NOT NULL,
  `apply_time` INT NULL,
  PRIMARY KEY (`version`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
