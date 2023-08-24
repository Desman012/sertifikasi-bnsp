# Host: localhost  (Version 5.5.5-10.4.28-MariaDB)
# Date: 2023-08-24 16:06:25
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "tbl_beasiswa"
#

DROP TABLE IF EXISTS `tbl_beasiswa`;
CREATE TABLE `tbl_beasiswa` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) DEFAULT '',
  `Email` varchar(255) DEFAULT NULL,
  `No_hp` varchar(255) DEFAULT NULL,
  `Semester` char(1) DEFAULT NULL,
  `Ipk` varchar(4) DEFAULT NULL,
  `Jns_beasiswa` varchar(255) DEFAULT NULL,
  `Dir_file` varchar(255) DEFAULT NULL,
  `Status_ajuan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "tbl_beasiswa"
#

INSERT INTO `tbl_beasiswa` VALUES (34,'Desman','dess@gmail.com','087871828154','7','3.22','Akademik','upload/Desman-3C1A4D6E9EBC17.pdf','Belum di verifikasi');
