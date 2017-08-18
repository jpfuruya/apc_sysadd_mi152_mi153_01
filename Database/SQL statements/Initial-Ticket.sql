CREATE TABLE IF NOT EXISTS `hsrrs`.`initial_ticket` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ini_subject` VARCHAR(255) NOT NULL,
  `ini_status` VARCHAR(10) NOT NULL,
  `ini_priority` VARCHAR(10) NOT NULL,
  `ini_date` DATETIME NOT NULL,
  `ini_limit` TIME NOT NULL,
  `ROOM_id` INT NOT NULL,
  `receptionist` INT NOT NULL,
  `ticket_type_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_INITIAL TICKET_ROOM1_idx` (`ROOM_id` ASC),
  INDEX `fk_initial_ticket_employee1_idx` (`receptionist` ASC),
  INDEX `fk_initial_ticket_ticket_type1_idx` (`ticket_type_id` ASC),
  CONSTRAINT `fk_INITIAL TICKET_ROOM1`
    FOREIGN KEY (`ROOM_id`)
    REFERENCES `hsrrs`.`room` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_initial_ticket_employee1`
    FOREIGN KEY (`receptionist`)
    REFERENCES `hsrrs`.`employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_initial_ticket_ticket_type1`
    FOREIGN KEY (`ticket_type_id`)
    REFERENCES `hsrrs`.`ticket_type` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;