# Host: 192.168.10.10  (Version 5.7.12)
# Date: 2016-11-13 15:17:20
# Generator: MySQL-Front 5.4  (Build 1.6)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "tipo_usuario"
#

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE `tipo_usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "tipo_usuario"
#

INSERT INTO `tipo_usuario` VALUES (1,'Admin'),(2,'Estudiante'),(3,'Profesor');

#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `tipo_usuario_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `usuario_tipo_usuario_fk` (`tipo_usuario_id`),
  CONSTRAINT `usuario_tipo_usuario_fk` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "usuario"
#

INSERT INTO `usuario` VALUES (1,'admin','admin','admin@admin.com','$2y$10$Uva.SLwM7545Kc2CR5ITMOovRigtrDAJivxVH0Jd7n.vQKKlz2Era','',NULL,1),(2,'docente','prueba','prueba@docente.com','$2y$10$L/X5ON3tzRC49Vq9YT6H0ufP/a09Hlyz2a4zLQL7NPhvUrrIOfuCa','',NULL,3),(3,'docente 2','prueba 2','prueba2@docente.com','$2y$10$XY.4W/.fFL6OEG0nhN8Ck.xpfkE9BIsFlSICl62E3leZf/aNNkdOm','',NULL,3),(4,'alumno A','prueba A','prueba@alumno.com','$2y$10$L9PkF0eo3T5q2cl7EpBPS.xWJnaNCHa0qpLuOFRGz/AvTKWFNMQW2','',NULL,2),(5,'alumno B','prueba B','prueba2@alumno.com','$2y$10$pJ1y2hRVjFSM24cnqaG9nuYX9z5XeyY75xs5OMesnBIO79eOz7U6K','',NULL,2);

#
# Structure for table "docente"
#

DROP TABLE IF EXISTS `docente`;
CREATE TABLE `docente` (
  `id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `docente_usuario_fk` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "docente"
#

INSERT INTO `docente` VALUES (2),(3);

#
# Structure for table "alumno"
#

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno` (
  `id` int(10) unsigned NOT NULL,
  `codigo` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `escuela_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`),
  CONSTRAINT `alumno_usuario_fk` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "alumno"
#

