-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema vote
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema vote
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `vote` DEFAULT CHARACTER SET utf8 ;
USE `vote` ;

-- -----------------------------------------------------
-- Table `vote`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vote`.`user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(55) NOT NULL,
  `pwd` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vote`.`poll`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vote`.`poll` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `topic` MEDIUMTEXT NOT NULL,
  `start` DATETIME NULL,
  `end` DATETIME NULL,
  `user_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_poll_user_idx` (`user_id` ASC),
  CONSTRAINT `fk_poll_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `vote`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vote`.`option`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vote`.`option` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `votes` INT NOT NULL,
  `poll_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_option_poll1_idx` (`poll_id` ASC),
  CONSTRAINT `fk_option_poll1`
    FOREIGN KEY (`poll_id`)
    REFERENCES `vote`.`poll` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
