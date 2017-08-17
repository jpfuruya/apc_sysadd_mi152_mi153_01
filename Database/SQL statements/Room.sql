CREATE TABLE IF NOT EXISTS `hsrrs`.`room` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `room_no` INT NOT NULL,
  `room_details` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;