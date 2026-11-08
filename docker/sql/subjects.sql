-- StudyFlow – tabuľka predmetov (entita Subject)
-- Docker tento skript automaticky importuje pri prvom štarte databázového kontajnera.

SET NAMES utf8mb4;

CREATE TABLE IF NOT EXISTS `subjects`
(
    `id`       INT UNSIGNED     NOT NULL AUTO_INCREMENT,
    `name`     VARCHAR(100)     NOT NULL,
    `code`     VARCHAR(20)      NOT NULL,
    `semester` TINYINT UNSIGNED NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_slovak_ci;

-- Ukážkové dáta
INSERT INTO `subjects` (`name`, `code`, `semester`)
VALUES ('Vývoj webových aplikácií', 'VAII', 5),
       ('Databázové systémy', 'DBS', 4),
       ('Softvérové inžinierstvo', 'SI', 5);
