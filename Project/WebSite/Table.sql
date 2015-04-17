SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
CREATE SCHEMA IF NOT EXISTS `mobileshop` DEFAULT CHARACTER SET latin1 ;
USE `mydb` ;
USE `mobileshop` ;

-- -----------------------------------------------------
-- Table `mobileshop`.`cart`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mobileshop`.`cart` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Name` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `Phone` INT(11) NOT NULL ,
  `Email` VARCHAR(45) NOT NULL ,
  `Address` VARCHAR(45) NOT NULL ,
  `IdProduct` INT(11) NOT NULL ,
  PRIMARY KEY (`Id`) ,
  UNIQUE INDEX `id_UNIQUE` (`Id` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mobileshop`.`descriptionproduct`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mobileshop`.`descriptionproduct` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `loaimanhinh` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `mayanh` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `hedieuhanh` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `vixulicpu` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `kichthuocmanhinh` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `quayphim` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `bonhotrong` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `phankhucsanpham` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `danhba` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `thenhongoai` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `gioihancuocgoi` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `dungluongpin` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  PRIMARY KEY (`Id`) ,
  UNIQUE INDEX `Id_UNIQUE` (`Id` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 150
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mobileshop`.`groupproducts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mobileshop`.`groupproducts` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Name` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `ParentId` VARCHAR(45) NULL DEFAULT NULL ,
  `Index` VARCHAR(45) NULL DEFAULT NULL ,
  `Note` VARCHAR(45) NULL DEFAULT NULL ,
  `Icon` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`Id`) ,
  UNIQUE INDEX `Id_UNIQUE` (`Id` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 60
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mobileshop`.`productimage`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mobileshop`.`productimage` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Name` VARCHAR(45) NOT NULL ,
  `FullName` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`Id`) ,
  UNIQUE INDEX `Id_UNIQUE` (`Id` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 150
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mobileshop`.`products`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mobileshop`.`products` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Name` VARCHAR(45) NOT NULL ,
  `GroupId` INT(11) NOT NULL ,
  `RetaiPrice` DECIMAL(9,0) NOT NULL ,
  `SalePrice` DECIMAL(9,0) NULL DEFAULT NULL ,
  `Information` TEXT CHARACTER SET 'utf8' NOT NULL ,
  `Description` VARCHAR(45) NULL DEFAULT NULL ,
  `Status` BIT(1) NOT NULL ,
  `Note` BIT(1) NOT NULL ,
  PRIMARY KEY (`Id`) ,
  UNIQUE INDEX `Id_UNIQUE` (`Id` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 150
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mobileshop`.`service`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mobileshop`.`service` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT ,
  `Name` VARCHAR(45) CHARACTER SET 'utf8' NOT NULL ,
  `Body` TEXT CHARACTER SET 'utf8' NOT NULL ,
  PRIMARY KEY (`Id`) ,
  UNIQUE INDEX `Id_UNIQUE` (`Id` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
