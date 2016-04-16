

SET FOREIGN_KEY_CHECKS=0;


DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
`config_id`  int(11) NOT NULL AUTO_INCREMENT ,
`config_name`  varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`config_value`  text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
PRIMARY KEY (`config_id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=4

;


BEGIN;
INSERT INTO `config` VALUES ('1', 'app_name', 'E-Surat'), ('2', 'app_key', '123qweasdzxc'), ('3', 'app_icon', 'fav.ico');
COMMIT;


DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
`group_id`  int(5) UNSIGNED NOT NULL AUTO_INCREMENT ,
`group_uraian`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
PRIMARY KEY (`group_id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=4

;


BEGIN;
INSERT INTO `group` VALUES ('1', 'ADMIN'), ('2', 'USER'), ('3', 'AUTHOR');
COMMIT;

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
`menu_id`  int(5) UNSIGNED NOT NULL AUTO_INCREMENT ,
`menu_idparent`  int(5) NULL DEFAULT NULL ,
`menu_icon`  char(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`menu_link`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`menu_uraian`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`menu_type`  char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
PRIMARY KEY (`menu_id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=6

;


BEGIN;
INSERT INTO `menu` VALUES ('1', null, 'fa-dashboard', 'backend/dashboard', 'Dashboard', 'backend'), ('2', null, 'fa-user', '#', 'Admin', 'backend'), ('3', '2', 'fa-user', 'backend/user', 'Pengguna', 'backend'), ('5', '2', 'fa-group', 'backend/group', 'Group Pengguna', 'backend');
COMMIT;


DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
`page_id`  int(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
`page_key`  char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`page_value`  text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
`page_active`  char(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
PRIMARY KEY (`page_id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=4

;

BEGIN;
INSERT INTO `page` VALUES ('1', 'about', null, 'active'), ('2', 'kegiatan', null, 'active'), ('3', 'galeri', null, 'active');
COMMIT;


DROP TABLE IF EXISTS `privilege`;
CREATE TABLE `privilege` (
`privilege_id`  int(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
`group_id`  int(5) UNSIGNED NOT NULL ,
`menu_id`  int(7) NOT NULL ,
`privilege_show`  char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
PRIMARY KEY (`privilege_id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=16

;


BEGIN;
INSERT INTO `privilege` VALUES ('1', '1', '1', 'show'), ('2', '2', '1', 'show'), ('3', '3', '1', 'show'), ('4', '1', '2', 'show'), ('5', '2', '2', 'show'), ('6', '3', '2', 'show'), ('7', '1', '3', 'show'), ('8', '2', '3', 'show'), ('9', '3', '3', 'show'), ('13', '1', '5', 'show'), ('14', '2', '5', 'show'), ('15', '3', '5', 'show');
COMMIT;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
`user_id`  int(7) UNSIGNED NOT NULL AUTO_INCREMENT ,
`group_id`  int(5) UNSIGNED NOT NULL ,
`user_name`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`user_uname`  varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`user_pass`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`user_email`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`user_foto`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`user_created`  timestamp NULL DEFAULT CURRENT_TIMESTAMP ,
`user_updated`  datetime NULL DEFAULT NULL ,
`user_status`  char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
PRIMARY KEY (`user_id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=2

;

BEGIN;
INSERT INTO `user` VALUES ('1', '1', 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@kernel.org', 'male.png', '2015-10-13 08:13:41', null, 'active');
COMMIT;


DROP VIEW IF EXISTS `view_role`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_role` AS select `privilege`.`privilege_id` AS `privilege_id`,`group`.`group_uraian` AS `group_uraian`,`menu`.`menu_uraian` AS `menu_uraian`,`menu`.`menu_idparent` AS `menu_idparent`,`menu`.`menu_type` AS `menu_type`,`menu`.`menu_link` AS `menu_link`,`privilege`.`privilege_show` AS `privilege_show`,`menu`.`menu_icon` AS `menu_icon`,`privilege`.`menu_id` AS `menu_id`,`privilege`.`group_id` AS `group_id` from ((`privilege` join `menu` on((`menu`.`menu_id` = `privilege`.`menu_id`))) join `group` on((`group`.`group_id` = `privilege`.`group_id`))) ;


ALTER TABLE `config` AUTO_INCREMENT=4;


ALTER TABLE `group` AUTO_INCREMENT=4;
DROP TRIGGER IF EXISTS `INSERT_PRIVILEGE`;
DELIMITER ;;
CREATE TRIGGER `INSERT_PRIVILEGE` AFTER INSERT ON `menu` FOR EACH ROW BEGIN

INSERT INTO privilege (group_id) (SELECT group_id FROM `group`);

UPDATE privilege SET menu_id = NEW.menu_id WHERE menu_id = NEW.menu_id;

END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `DELETE_PRIVILEGE`;
DELIMITER ;;
CREATE TRIGGER `DELETE_PRIVILEGE` AFTER DELETE ON `menu` FOR EACH ROW BEGIN

DELETE FROM privilege WHERE menu_id = OLD.menu_id;

END
;;
DELIMITER ;


ALTER TABLE `menu` AUTO_INCREMENT=6;


ALTER TABLE `page` AUTO_INCREMENT=4;


ALTER TABLE `privilege` AUTO_INCREMENT=16;


ALTER TABLE `user` AUTO_INCREMENT=2;
