SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `wedding` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `wedding` ;

-- -----------------------------------------------------
-- Table `wedding`.`rsvps`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `wedding`.`rsvps` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `guest` VARCHAR(45) NOT NULL ,
  `reception` VARCHAR(45) NOT NULL ,
  `wedding` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
