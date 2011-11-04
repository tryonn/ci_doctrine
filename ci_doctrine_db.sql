SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `ci_doctrine` ;
CREATE SCHEMA IF NOT EXISTS `ci_doctrine` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `ci_doctrine` ;

-- -----------------------------------------------------
-- Table `ci_doctrine`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ci_doctrine`.`user` ;

CREATE  TABLE IF NOT EXISTS `ci_doctrine`.`user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
