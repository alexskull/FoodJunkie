SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE=`TRADITIONAL,ALLOW_INVALID_DATES`;

CREATE SCHEMA IF NOT EXISTS `Foodjunkie` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `Foodjunkie` ;

-- -----------------------------------------------------
-- Table `Foodjunkie`.`Tipo_Local`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Foodjunkie`.`Tipo_Local` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `Nombre` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Foodjunkie`.`Roles`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Foodjunkie`.`Roles` (
  `idRoles` INT NOT NULL AUTO_INCREMENT ,
  `Nombre` VARCHAR(45) NOT NULL ,
  `Descripcion` VARCHAR(255) NULL ,
  PRIMARY KEY (`idRoles`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Foodjunkie`.`Usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Foodjunkie`.`Usuario` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Usuario` VARCHAR(45) NOT NULL ,
  `Password` VARCHAR(45) NOT NULL ,
  `Roles_idRoles` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Usuario_Roles1_idx` (`Roles_idRoles` ASC) ,
  UNIQUE INDEX `Usuario_UNIQUE` (`Usuario` ASC) ,
  CONSTRAINT `fk_Usuario_Roles1`
    FOREIGN KEY (`Roles_idRoles` )
    REFERENCES `Foodjunkie`.`Roles` (`idRoles` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Foodjunkie`.`Cliente`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Foodjunkie`.`Cliente` (
  `idCliente` INT NOT NULL AUTO_INCREMENT ,
  `Nombre` VARCHAR(25) NOT NULL ,
  `Apellido` VARCHAR(25) NOT NULL ,
  `Email` VARCHAR(25) NOT NULL ,
  `FechaNacimiento` DATE NULL ,
  `Direccion` VARCHAR(45) NULL ,
  `Foto` Blob,
  `Telefono` VARCHAR(20) NULL ,
  `Celular` VARCHAR(20) NULL ,
  `Usuario_User` INT NOT NULL,
  PRIMARY KEY (`idCliente`) ,
  CONSTRAINT `fk_Cliente_Usuario`
    FOREIGN KEY (`Usuario_User` )
    REFERENCES `Foodjunkie`.`Usuario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Foodjunkie`.`Local`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Foodjunkie`.`Local` (
  `idLocal` INT NOT NULL AUTO_INCREMENT ,
  `Nombre`    VARCHAR(20) NOT NULL ,
  `Estado`    VARCHAR(25) NOT NULL ,
  `Ciudad`    VARCHAR(25) NOT NULL ,
  `Direccion` VARCHAR(25) NOT NULL ,
  `Email`     VARCHAR(25) ,
  `Telefono` VARCHAR(25) ,
  `Reservas`  CHAR (1) NOT NULL ,
  `Capacidad` INT NOT NULL ,
  `Hora_Ini`  DATE NOT NULL ,
  `Hora_Fin`  DATE NOT NULL ,
  `Rating` FLOAT NOT NULL ,
  `Tipo_Local_ID`    INT NOT NULL ,
  `Usuario_User` INT NOT NULL,
  PRIMARY KEY (`idLocal`),
  CONSTRAINT `fk_Tipo_local`
    FOREIGN KEY (`Tipo_Local_ID` )
    REFERENCES `Foodjunkie`.`Tipo_Local` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Local_Usuario`
    FOREIGN KEY (`Usuario_User` )
    REFERENCES `Foodjunkie`.`Usuario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Foodjunkie`.`Reserva`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Foodjunkie`.`Reserva` (
  `idReserva` INT NOT NULL AUTO_INCREMENT ,
  `Hora`                     DATE NOT NULL ,
  `Cant_Personas`            INT NOT NULL ,
  `Fecha`                    DATE NOT NULL ,
  `Activa`                   CHAR (1) NOT NULL ,
  `Usuario_User` INT NOT NULL ,
  `Local_idLocal`   INT NOT NULL,
  PRIMARY KEY (`idReserva`),
  CONSTRAINT `fk_Reser_Usuario`
    FOREIGN KEY (`Usuario_User` )
    REFERENCES `Foodjunkie`.`Usuario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Reser_local`
    FOREIGN KEY (`Local_idLocal` )
    REFERENCES `Foodjunkie`.`Local` (`idLocal` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Foodjunkie`.`Review`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Foodjunkie`.`Review` (
  `idReview` INT NOT NULL AUTO_INCREMENT ,
  `Comentario` VARCHAR(240) ,
  `RatingPrecio` FLOAT NOT NULL ,
  `RatingAtencion` FLOAT NOT NULL ,
  `RatingCalidad` FLOAT NOT NULL ,
  `Usuario_User` INT NOT NULL ,
  `Local_idLocal`   INT NOT NULL,
  PRIMARY KEY (`idReview`),
  CONSTRAINT `fk_Rev_user`
    FOREIGN KEY (`Usuario_User` )
    REFERENCES `Foodjunkie`.`Usuario` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Rev_local`
    FOREIGN KEY (`Local_idLocal` )
    REFERENCES `Foodjunkie`.`Local` (`idLocal` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;




SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
