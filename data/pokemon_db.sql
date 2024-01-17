-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema pokemon
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `pokemon` ;

-- -----------------------------------------------------
-- Schema pokemon
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pokemon` DEFAULT CHARACTER SET utf8mb4 ;
USE `pokemon` ;

-- -----------------------------------------------------
-- Table `pokemon`.`region`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pokemon`.`region` ;

CREATE TABLE IF NOT EXISTS `pokemon`.`region` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_region` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `pokemon`.`pokemon`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pokemon`.`pokemon` ;

CREATE TABLE IF NOT EXISTS `pokemon`.`pokemon` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `numero` INT(11) NOT NULL,
  `nombre` VARCHAR(255) NOT NULL,
  `imagen` VARCHAR(255) NOT NULL,
  `region_id` INT(11) NOT NULL,
  
  PRIMARY KEY (`id`, `region_id`),
  CONSTRAINT `fk_pokemon_region1`
    FOREIGN KEY (`region_id`)
    REFERENCES `pokemon`.`region` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE INDEX `fk_pokemon_region1_idx` ON `pokemon`.`pokemon` (`region_id` ASC);



-- -----------------------------------------------------
-- Table `pokemon`.`tipo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pokemon`.`tipo` ;

CREATE TABLE IF NOT EXISTS `pokemon`.`tipo` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `pokemon`.`pokemon_has_tipo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pokemon`.`pokemon_has_tipo` ;

CREATE TABLE IF NOT EXISTS `pokemon`.`pokemon_has_tipo` (
  `pokemon_id` INT(11) NOT NULL,
  `tipo_id` INT(11) NOT NULL,
  PRIMARY KEY (`pokemon_id`, `tipo_id`),
  CONSTRAINT `fk_pokemon_has_tipo_pokemon`
    FOREIGN KEY (`pokemon_id`)
    REFERENCES `pokemon`.`pokemon` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pokemon_has_tipo_tipo1`
    FOREIGN KEY (`tipo_id`)
    REFERENCES `pokemon`.`tipo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

CREATE INDEX `fk_pokemon_has_tipo_tipo1_idx` ON `pokemon`.`pokemon_has_tipo` (`tipo_id` ASC);

CREATE INDEX `fk_pokemon_has_tipo_pokemon_idx` ON `pokemon`.`pokemon_has_tipo` (`pokemon_id` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO pokemon.region (id, nombre_region) VALUES (1, 'Kanto');
INSERT INTO pokemon.region (id, nombre_region) VALUES (2, 'Johto');
INSERT INTO pokemon.region (id, nombre_region) VALUES (3, 'Hoenn');
INSERT INTO pokemon.region (id, nombre_region) VALUES (4, 'Sinnoh');
INSERT INTO pokemon.region (id, nombre_region) VALUES (5, 'Teselia');

INSERT INTO pokemon.tipo (id, nombre_tipo) VALUES (1, 'Planta');
INSERT INTO pokemon.tipo (id, nombre_tipo) VALUES (2, 'Fuego');
INSERT INTO pokemon.tipo (id, nombre_tipo) VALUES (3, 'Agua');
INSERT INTO pokemon.tipo (id, nombre_tipo) VALUES (4, 'Veneno');
INSERT INTO pokemon.tipo (id, nombre_tipo) VALUES (5, 'Volador');
INSERT INTO pokemon.tipo (id, nombre_tipo) VALUES (6, 'Electrico');
INSERT INTO pokemon.tipo (id, nombre_tipo) VALUES (7, 'Bicho');
INSERT INTO pokemon.tipo (id, nombre_tipo) VALUES (8, 'Lucha');
INSERT INTO pokemon.tipo (id, nombre_tipo) VALUES (9, 'Psiquico');
