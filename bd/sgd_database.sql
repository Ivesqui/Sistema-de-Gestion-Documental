/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.1.38-MariaDB : Database - sgd_database
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sgd_database` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sgd_database`;

/*Table structure for table `carpetas` */

DROP TABLE IF EXISTS `carpetas`;

CREATE TABLE `carpetas` (
  `id_carpetas` int(11) NOT NULL AUTO_INCREMENT,
  `n_usuario` varchar(250) NOT NULL,
  `car_nombre` varchar(250) NOT NULL,
  `insert_carpeta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_carpetas`),
  UNIQUE KEY `car_nombre` (`car_nombre`),
  KEY `fk_usuario_carpetas` (`n_usuario`),
  CONSTRAINT `fk_usuario_carpetas` FOREIGN KEY (`n_usuario`) REFERENCES `usuario` (`n_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

/*Data for the table `carpetas` */

insert  into `carpetas`(`id_carpetas`,`n_usuario`,`car_nombre`,`insert_carpeta`) values (49,'Mel','Nueva','2023-03-13 01:08:54'),(54,'Aldo','Recursos Humanos','2023-03-18 21:46:26'),(57,'Aldo','Banca','2023-03-18 23:50:10'),(58,'Aldo','Carpeta de Prueba','2023-03-19 12:32:46'),(59,'Vivi','Carpeta de Vivi','2023-03-20 11:48:36');

/*Table structure for table `categorias` */

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id_categorias` int(11) NOT NULL AUTO_INCREMENT,
  `car_nombre` varchar(250) NOT NULL,
  `cat_nombre` varchar(250) NOT NULL,
  `insert_categoria` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_categorias`),
  UNIQUE KEY `cat_nombre` (`cat_nombre`),
  KEY `fk_carpetas_categorias` (`car_nombre`),
  CONSTRAINT `fk_carpetas_categorias` FOREIGN KEY (`car_nombre`) REFERENCES `carpetas` (`car_nombre`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `categorias` */

insert  into `categorias`(`id_categorias`,`car_nombre`,`cat_nombre`,`insert_categoria`) values (13,'Recursos Humanos','Urgentes','2023-03-18 20:52:12'),(14,'Recursos Humanos','Hojas de Cálculo','2023-03-18 23:48:54'),(15,'Carpeta de Prueba','Categoría de Prueba','2023-03-19 12:32:56'),(16,'Carpeta de Vivi','Pendientes','2023-03-20 11:48:43');

/*Table structure for table `documentos` */

DROP TABLE IF EXISTS `documentos`;

CREATE TABLE `documentos` (
  `id_documentos` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nombre` varchar(250) NOT NULL,
  `n_usuario` varchar(250) NOT NULL,
  `nombre_arch` varchar(100) NOT NULL,
  `tipo_arch` varchar(50) NOT NULL,
  `ruta_arch` text NOT NULL,
  `insert_arch` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `secuencia_i` int(11) DEFAULT NULL,
  `secuencia_a` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_documentos`),
  KEY `fk_documentos_usuario` (`n_usuario`),
  KEY `fk_documentos_categorias` (`cat_nombre`),
  CONSTRAINT `fk_documentos_categorias` FOREIGN KEY (`cat_nombre`) REFERENCES `categorias` (`cat_nombre`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_documentos_usuario` FOREIGN KEY (`n_usuario`) REFERENCES `usuario` (`n_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

/*Data for the table `documentos` */

insert  into `documentos`(`id_documentos`,`cat_nombre`,`n_usuario`,`nombre_arch`,`tipo_arch`,`ruta_arch`,`insert_arch`,`secuencia_i`,`secuencia_a`) values (64,'Urgentes','aldo','63_LICENCIA DE SOFTWARE-11-03-2023.pdf','pdf','../../Carpetas_Usuario/aldo/Recursos Humanos/63_LICENCIA DE SOFTWARE-11-03-2023.pdf','2023-03-20 11:38:13.255965',NULL,NULL),(65,'Urgentes','aldo','64_6019946.pdf','pdf','../../Carpetas_Usuario/aldo/Recursos Humanos/64_6019946.pdf','2023-03-20 11:38:32.490276',NULL,NULL),(66,'Urgentes','aldo','65_LA EDUCACIÃ“N Y LA CULTURA OCCIDENTAL, COMO INFLUENCIA..docx','docx','../../Carpetas_Usuario/aldo/Recursos Humanos/65_LA EDUCACIÃ“N Y LA CULTURA OCCIDENTAL, COMO INFLUENCIA..docx','2023-03-20 11:39:30.809759',NULL,NULL),(67,'Pendientes','Vivi','_LA EDUCACIÃ“N Y LA CULTURA OCCIDENTAL, COMO INFLUENCIA. (2).docx','docx','../../Carpetas_Usuario/Vivi/Carpeta de Vivi/_LA EDUCACIÃ“N Y LA CULTURA OCCIDENTAL, COMO INFLUENCIA. (2).docx','2023-03-20 11:53:00.495573',NULL,NULL),(68,'Pendientes','Vivi','67_Christian Ivan EstupiÃ±an Quintero â€“ TALLER SOBRE PROBABILIDADES.docx','docx','../../Carpetas_Usuario/Vivi/Carpeta de Vivi/67_Christian Ivan EstupiÃ±an Quintero â€“ TALLER SOBRE PROBABILIDADES.docx','2023-03-20 11:53:09.360247',NULL,NULL),(69,'Pendientes','Vivi','68_Christian Ivan EstupiÃ±an Quintero â€“ WORKBOOK UNIT 6.pdf','pdf','../../Carpetas_Usuario/Vivi/Carpeta de Vivi/68_Christian Ivan EstupiÃ±an Quintero â€“ WORKBOOK UNIT 6.pdf','2023-03-20 12:16:11.473371',NULL,NULL);

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nom_rol` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `rol` */

insert  into `rol`(`id_rol`,`nom_rol`) values (1,'Administrador'),(2,'Regular');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `n_usuario` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `clave` text NOT NULL,
  `insert_user` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `n_usuario` (`n_usuario`),
  KEY `fk_usuario_rol` (`id_rol`),
  CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id_user`,`n_usuario`,`nombres`,`apellidos`,`clave`,`insert_user`,`id_rol`) values (12,'Aldo','Aldo','Avilez','$2y$10$FQ2O4MfhMcbXQ4QXX607tuo9TEZ83dgCpEyjnIUQzdCjTP7L6d./a','2023-03-20 13:04:18',2),(13,'Cieq','Cri','Est','$2y$10$WFisIUrpCVBN6ybiiB98WuFbADxAy6kAEwp1HLJfpdy7ePQtdRtuu','2023-03-20 13:04:38',2),(14,'Vivi','adaaaaa','Morales','$2y$10$nKnZzsLbKkAWWjapBYAoJehchmEuN7d7eCSxK5QSwQ1d9aySz5e6C','2023-03-20 13:04:40',2),(16,'Mel','Melanie','Beltran Mite','$2y$10$r0AcQa9N0zQaaRNIrXkKpOnnuAWdwI6VfsqzeokFW/h11x7Gx5BSq','2023-03-20 13:04:43',2),(17,'Dennisse','Dennisse','Farías','$2y$10$CjzemUay01IXtW1N/Na.AO4WQlXx5bfvSG/EiOO.EgmdB0FkLWoyS','2023-03-20 13:04:47',2),(18,'Jose','José','Delgado','$2y$10$dcSs7ZqcL3kxB4IdcmlxSOuBWEzF6kkbSBopuvc1fa5TRfWm5oDlu','2023-03-20 13:04:51',2),(19,'admin','admin','admin','$2y$10$22Tz5TZAjaQxzCKyLYAleuUarrcuOKkZTnGH7QzKR9KuF8f0OK21K','2023-03-20 13:04:32',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
