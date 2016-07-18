-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: localhost    Database: cnbv_1607
-- ------------------------------------------------------
-- Server version	5.5.42

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `areauser`
--

DROP TABLE IF EXISTS `areauser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areauser` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(50) DEFAULT NULL,
  `rol_permiso` int(11) DEFAULT NULL,
  `entidad` varchar(100) DEFAULT NULL,
  `n_expediente` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidop` varchar(100) DEFAULT NULL,
  `apellidom` varchar(100) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `nivel` varchar(100) DEFAULT NULL,
  `nivel_codigo` varchar(100) DEFAULT NULL,
  `grado_codigo` varchar(100) DEFAULT NULL,
  `grado` varchar(100) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `rfc` varchar(20) DEFAULT NULL,
  `curp` varchar(20) DEFAULT NULL,
  `lugar_nac` varchar(100) DEFAULT NULL,
  `nacionalidad` varchar(100) DEFAULT NULL,
  `email_cnbv` varchar(100) DEFAULT NULL,
  `extension` varchar(100) DEFAULT NULL,
  `torre` varchar(100) DEFAULT NULL,
  `piso` varchar(100) DEFAULT NULL,
  `coordenada` varchar(100) DEFAULT NULL,
  `red` varchar(100) DEFAULT NULL,
  `ut` varchar(100) DEFAULT NULL,
  `activo` varchar(100) DEFAULT NULL,
  `estatus` smallint(6) DEFAULT NULL,
  `creater` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `codeurl` varchar(255) DEFAULT NULL,
  `date_recover` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `ix_tmp_autoinc` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areauser`
--

LOCK TABLES `areauser` WRITE;
/*!40000 ALTER TABLE `areauser` DISABLE KEYS */;
INSERT INTO `areauser` VALUES (1,'area',55,'Entidad','n_expediente','9','nombre','apellidop','','13','15','NA1','Lic','28','0000-00-00','0','RFC','CURP','LUGAR DE NACIMIENTO','6','email@cnbv.com','312','5','3','17 , 27','1','area',NULL,1,265,'2016-06-29 21:13:56',NULL,NULL),(2,'area',55,'Entidad1','n_expediente','10','nombre','apellidop','','13','15','NA1','Lic','28','0000-00-00','0','RFC','CURP','LUGAR DE NACIMIENTO','6','email@cnbv.com','312','5','3','17 , 27','1','area','1',0,1,'2016-07-08 12:06:30',NULL,NULL);
/*!40000 ALTER TABLE `areauser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_admin`
--

DROP TABLE IF EXISTS `blog_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_admin` (
  `id_blog` int(11) NOT NULL AUTO_INCREMENT,
  `id_creater` int(11) DEFAULT NULL,
  `blog_titulo` varchar(100) DEFAULT NULL,
  `blog_des` longtext,
  `blog_tipo` int(11) DEFAULT NULL,
  `link1` varchar(250) DEFAULT NULL,
  `link2` varchar(250) DEFAULT NULL,
  `link3` varchar(250) DEFAULT NULL,
  `link4` varchar(250) DEFAULT NULL,
  `img1_url` varchar(250) DEFAULT NULL,
  `img1_name` varchar(250) DEFAULT NULL,
  `img2_url` varchar(250) DEFAULT NULL,
  `img2_name` varchar(250) DEFAULT NULL,
  `img3_url` varchar(250) DEFAULT NULL,
  `img3_name` varchar(250) DEFAULT NULL,
  `img4_url` varchar(250) DEFAULT NULL,
  `img4_name` varchar(250) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `estatus` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id_blog`),
  KEY `ix_tmp_autoinc` (`id_blog`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_admin`
--

LOCK TABLES `blog_admin` WRITE;
/*!40000 ALTER TABLE `blog_admin` DISABLE KEYS */;
INSERT INTO `blog_admin` VALUES (1,265,'Titulo del blog reset','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. reset',1,'https://www.google.com.mx','https://www.google.com','','','content/blogs/1/201606300145531467312353312.jpg','img1_2016_06_30_13_45_53.jpg',NULL,NULL,NULL,NULL,NULL,NULL,'2016-06-30 13:45:52',0),(2,265,'Titulo del blog','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. reset</p>\r\n\r\n<p><strong>negristas</strong></p>\r\n\r\n<p><strong><s>subrayar</s></strong></p>\r\n\r\n<ol>\r\n <li><strong><s>lista</s></strong></li>\r\n <li><strong><s>uno </s></strong></li>\r\n <li><strong><s>dos</s></strong></li>\r\n <li> </li>\r\n</ol>\r\n\r\n<p> </p>',1,'https://www.google.com.mx','https://www.google.com','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-07-05 10:37:21',0),(3,265,'Titulo del blog','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',1,'https://www.google.com.mx','https://www.google.com','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-07-06 13:04:26',1),(4,265,'Titulo del blog','<blockquote>\r\n<p>este es una descripcion</p>\r\n</blockquote>\r\n\r\n<p> </p>',1,'https://www.google.com.mx','https://www.google.com','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-07-06 17:09:13',0),(5,265,'Titulo del blog','<blockquote>\r\n<p>este es una descripcion</p>\r\n</blockquote>\r\n\r\n<p> </p>',1,'https://www.google.com.mx','https://www.google.com','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-07-06 17:18:49',0);
/*!40000 ALTER TABLE `blog_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_data_cat`
--

DROP TABLE IF EXISTS `blog_data_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_data_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  `des` varchar(100) DEFAULT NULL,
  `deslarga` varchar(200) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `status` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_tmp_autoinc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_data_cat`
--

LOCK TABLES `blog_data_cat` WRITE;
/*!40000 ALTER TABLE `blog_data_cat` DISABLE KEYS */;
INSERT INTO `blog_data_cat` VALUES (1,'blog_tipo','Info','Info','2016-06-25 13:23:16',0),(2,'blog_tipo','Noticia','Noticia','2016-06-25 13:23:16',0),(3,'blog_tipo','Fecha limite de entrega','Fecha limite de entrega','2016-06-25 13:23:16',0),(4,'blog_tipo','Documentos entregados','Documentos entregados','2016-06-25 13:23:16',0),(5,'blog_tipo','Actualización del sistema','Actualización del sistema','2016-06-25 13:23:16',0),(6,'blog_tipo','Cumpleaños','Cumpleaños','2016-06-25 13:23:16',0);
/*!40000 ALTER TABLE `blog_data_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_planeacion_D_M`
--

DROP TABLE IF EXISTS `carta_planeacion_D_M`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_planeacion_D_M` (
  `id_DM` int(11) NOT NULL AUTO_INCREMENT,
  `verific` int(11) NOT NULL,
  `validado` int(11) NOT NULL,
  `trimestre` text NOT NULL,
  `anio` text NOT NULL,
  `diagnosticos` text NOT NULL,
  `recomendaciones` text NOT NULL,
  `id_auditoria` int(11) NOT NULL,
  PRIMARY KEY (`id_DM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_planeacion_D_M`
--

LOCK TABLES `carta_planeacion_D_M` WRITE;
/*!40000 ALTER TABLE `carta_planeacion_D_M` DISABLE KEYS */;
/*!40000 ALTER TABLE `carta_planeacion_D_M` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_planeacion_anterior`
--

DROP TABLE IF EXISTS `carta_planeacion_anterior`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_planeacion_anterior` (
  `id_anterior` int(11) NOT NULL AUTO_INCREMENT,
  `verificado` int(11) NOT NULL,
  `validado` int(11) NOT NULL,
  `observacion_1` text NOT NULL,
  `observacion_2` text NOT NULL,
  `observacion_3` text NOT NULL,
  `mejora_1` text NOT NULL,
  `mejora_2` text NOT NULL,
  `id_auditoria` int(11) NOT NULL,
  PRIMARY KEY (`id_anterior`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_planeacion_anterior`
--

LOCK TABLES `carta_planeacion_anterior` WRITE;
/*!40000 ALTER TABLE `carta_planeacion_anterior` DISABLE KEYS */;
INSERT INTO `carta_planeacion_anterior` VALUES (11,0,1,'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló ','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló ','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló ','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló ','Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló ',13);
/*!40000 ALTER TABLE `carta_planeacion_anterior` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_planeacion_chat`
--

DROP TABLE IF EXISTS `carta_planeacion_chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_planeacion_chat` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `id_auditoria` int(11) NOT NULL,
  `comentario` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_chat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_planeacion_chat`
--

LOCK TABLES `carta_planeacion_chat` WRITE;
/*!40000 ALTER TABLE `carta_planeacion_chat` DISABLE KEYS */;
INSERT INTO `carta_planeacion_chat` VALUES (1,13,'Pruebas lalo'),(2,13,'lalo: cometario xx');
/*!40000 ALTER TABLE `carta_planeacion_chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_planeacion_estructura`
--

DROP TABLE IF EXISTS `carta_planeacion_estructura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_planeacion_estructura` (
  `id_estructura` int(11) NOT NULL AUTO_INCREMENT,
  `verificado` int(11) NOT NULL,
  `validado` int(11) NOT NULL,
  `id_auditoria` int(11) NOT NULL,
  PRIMARY KEY (`id_estructura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_planeacion_estructura`
--

LOCK TABLES `carta_planeacion_estructura` WRITE;
/*!40000 ALTER TABLE `carta_planeacion_estructura` DISABLE KEYS */;
/*!40000 ALTER TABLE `carta_planeacion_estructura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_planeacion_funciones_manuales`
--

DROP TABLE IF EXISTS `carta_planeacion_funciones_manuales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_planeacion_funciones_manuales` (
  `id_funcion` int(11) NOT NULL AUTO_INCREMENT,
  `id_temp` int(11) NOT NULL,
  `funcion` text NOT NULL,
  `id_manual` int(11) NOT NULL,
  PRIMARY KEY (`id_funcion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_planeacion_funciones_manuales`
--

LOCK TABLES `carta_planeacion_funciones_manuales` WRITE;
/*!40000 ALTER TABLE `carta_planeacion_funciones_manuales` DISABLE KEYS */;
/*!40000 ALTER TABLE `carta_planeacion_funciones_manuales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_planeacion_listas_marco`
--

DROP TABLE IF EXISTS `carta_planeacion_listas_marco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_planeacion_listas_marco` (
  `id_lista` int(11) NOT NULL AUTO_INCREMENT,
  `id_lista_cat` int(11) NOT NULL,
  `id_temp` int(11) NOT NULL,
  `id_marco` int(11) NOT NULL,
  PRIMARY KEY (`id_lista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_planeacion_listas_marco`
--

LOCK TABLES `carta_planeacion_listas_marco` WRITE;
/*!40000 ALTER TABLE `carta_planeacion_listas_marco` DISABLE KEYS */;
/*!40000 ALTER TABLE `carta_planeacion_listas_marco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_planeacion_manuales`
--

DROP TABLE IF EXISTS `carta_planeacion_manuales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_planeacion_manuales` (
  `id_manual` int(11) NOT NULL AUTO_INCREMENT,
  `verificado` int(11) NOT NULL,
  `validado` int(11) NOT NULL,
  PRIMARY KEY (`id_manual`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_planeacion_manuales`
--

LOCK TABLES `carta_planeacion_manuales` WRITE;
/*!40000 ALTER TABLE `carta_planeacion_manuales` DISABLE KEYS */;
/*!40000 ALTER TABLE `carta_planeacion_manuales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_planeacion_mapas`
--

DROP TABLE IF EXISTS `carta_planeacion_mapas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_planeacion_mapas` (
  `id_mapa` int(11) NOT NULL AUTO_INCREMENT,
  `verificado` int(11) NOT NULL,
  `validado` int(11) NOT NULL,
  `id_auditoria` int(11) NOT NULL,
  PRIMARY KEY (`id_mapa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_planeacion_mapas`
--

LOCK TABLES `carta_planeacion_mapas` WRITE;
/*!40000 ALTER TABLE `carta_planeacion_mapas` DISABLE KEYS */;
/*!40000 ALTER TABLE `carta_planeacion_mapas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_planeacion_mapas_direcciones`
--

DROP TABLE IF EXISTS `carta_planeacion_mapas_direcciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_planeacion_mapas_direcciones` (
  `id_direccion` int(11) NOT NULL AUTO_INCREMENT,
  `rubro` text NOT NULL,
  `proceso` text NOT NULL,
  `objetivo` text NOT NULL,
  `id_mapa` int(11) NOT NULL,
  PRIMARY KEY (`id_direccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_planeacion_mapas_direcciones`
--

LOCK TABLES `carta_planeacion_mapas_direcciones` WRITE;
/*!40000 ALTER TABLE `carta_planeacion_mapas_direcciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `carta_planeacion_mapas_direcciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_planeacion_mapas_etapas_proceso`
--

DROP TABLE IF EXISTS `carta_planeacion_mapas_etapas_proceso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_planeacion_mapas_etapas_proceso` (
  `id_etapa` int(11) NOT NULL AUTO_INCREMENT,
  `etapa` text NOT NULL,
  `descripcion` text NOT NULL,
  `responsable` text NOT NULL,
  `id_direccion` int(11) NOT NULL,
  PRIMARY KEY (`id_etapa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_planeacion_mapas_etapas_proceso`
--

LOCK TABLES `carta_planeacion_mapas_etapas_proceso` WRITE;
/*!40000 ALTER TABLE `carta_planeacion_mapas_etapas_proceso` DISABLE KEYS */;
/*!40000 ALTER TABLE `carta_planeacion_mapas_etapas_proceso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_planeacion_marco`
--

DROP TABLE IF EXISTS `carta_planeacion_marco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_planeacion_marco` (
  `id_marco` int(11) NOT NULL AUTO_INCREMENT,
  `verificado` int(11) NOT NULL,
  `validado` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `id_auditoria` int(11) NOT NULL,
  PRIMARY KEY (`id_marco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_planeacion_marco`
--

LOCK TABLES `carta_planeacion_marco` WRITE;
/*!40000 ALTER TABLE `carta_planeacion_marco` DISABLE KEYS */;
/*!40000 ALTER TABLE `carta_planeacion_marco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_planeacion_objetivos_manuales`
--

DROP TABLE IF EXISTS `carta_planeacion_objetivos_manuales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_planeacion_objetivos_manuales` (
  `id_objetivo` int(11) NOT NULL AUTO_INCREMENT,
  `id_temp` int(11) NOT NULL,
  `objetivo` text NOT NULL,
  `id_manual` int(11) NOT NULL,
  PRIMARY KEY (`id_objetivo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_planeacion_objetivos_manuales`
--

LOCK TABLES `carta_planeacion_objetivos_manuales` WRITE;
/*!40000 ALTER TABLE `carta_planeacion_objetivos_manuales` DISABLE KEYS */;
/*!40000 ALTER TABLE `carta_planeacion_objetivos_manuales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carta_planeacion_plazas`
--

DROP TABLE IF EXISTS `carta_planeacion_plazas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta_planeacion_plazas` (
  `id_plaza` int(11) NOT NULL AUTO_INCREMENT,
  `puesto` text NOT NULL,
  `direccion_grl_1` text NOT NULL,
  `direccion_grl_2` text NOT NULL,
  `direccion_grl_3` text NOT NULL,
  `direccion_grl_4` text NOT NULL,
  `id_estructura` int(11) NOT NULL,
  PRIMARY KEY (`id_plaza`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta_planeacion_plazas`
--

LOCK TABLES `carta_planeacion_plazas` WRITE;
/*!40000 ALTER TABLE `carta_planeacion_plazas` DISABLE KEYS */;
/*!40000 ALTER TABLE `carta_planeacion_plazas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coreuser`
--

DROP TABLE IF EXISTS `coreuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coreuser` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(50) DEFAULT '0',
  `rol_permiso` int(11) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `pass` longtext,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidop` varchar(100) DEFAULT NULL,
  `apellidom` varchar(100) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `estado_civil` varchar(10) DEFAULT NULL,
  `curp` varchar(20) DEFAULT NULL,
  `lugar_nac` varchar(100) DEFAULT NULL,
  `nacionalidad` varchar(100) DEFAULT NULL,
  `estructura` smallint(6) DEFAULT NULL,
  `n_expediente` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `nivel` varchar(100) DEFAULT NULL,
  `nivel_codigo` varchar(100) DEFAULT NULL,
  `nivel_status` varchar(100) DEFAULT NULL,
  `nivel_codigo_puesto` varchar(100) DEFAULT NULL,
  `grado` varchar(100) DEFAULT NULL,
  `grado_codigo` varchar(100) DEFAULT NULL,
  `grado_cedula` varchar(100) DEFAULT NULL,
  `grado_iniciales` varchar(100) DEFAULT NULL,
  `experiencia` int(11) DEFAULT '0',
  `email_cnbv` varchar(100) DEFAULT NULL,
  `email_personal` varchar(100) DEFAULT NULL,
  `celular` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `telefono_ext` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `torre` varchar(100) DEFAULT '',
  `piso` varchar(100) DEFAULT NULL,
  `coordenada` varchar(100) DEFAULT NULL,
  `curr_url` varchar(100) DEFAULT NULL,
  `curr_file` varchar(100) DEFAULT NULL,
  `curr_name` varchar(100) DEFAULT NULL,
  `curr_type` varchar(100) DEFAULT NULL,
  `perfil_url` longtext,
  `perfil_file` varchar(100) DEFAULT NULL,
  `perfil_name` varchar(100) DEFAULT NULL,
  `perfil_tye` varchar(100) DEFAULT NULL,
  `desempeno_url` longtext,
  `desempeno_file` varchar(100) DEFAULT NULL,
  `desempeno_name` varchar(100) DEFAULT NULL,
  `desempeno_type` varchar(100) DEFAULT NULL,
  `foto_url` longtext,
  `foto_file` varchar(100) DEFAULT NULL,
  `foto_name` varchar(100) DEFAULT NULL,
  `foto_type` varchar(100) DEFAULT NULL,
  `ut` varchar(100) DEFAULT NULL,
  `activo` varchar(100) DEFAULT '0',
  `estatus` smallint(6) DEFAULT '0',
  `creater` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `codeurl` varchar(255) DEFAULT NULL,
  `date_recover` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `ix_tmp_autoinc` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=451 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coreuser`
--

LOCK TABLES `coreuser` WRITE;
/*!40000 ALTER TABLE `coreuser` DISABLE KEYS */;
INSERT INTO `coreuser` VALUES (1,'develop',55,'cnbv@cnbv.com ','$2y$10$Lcr1XCL2zjFsRzSmoP4lheRq5k5p5/vsR60RPK4HCiP7PIX8p01/e','cnbv','apellido',NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'27',NULL,NULL,NULL,NULL,0,'cnbv@cnbv.com ','cnbv@cnbv.com ',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'55','0',0,0,NULL,NULL,NULL),(5,'cnbv',60,'auditor@cnbv.com','$2y$10$UQPvsA3s4toupxhUDGsG6Oz4Nh2WlTN6oIe7APO.89qT5ai9ppxIG','ernesto','perez','','1969-12-31','0','1','GJFVKJRFVNKSdascads','Guadalajara, jal','6',0,'6434cdasd','10','13','21','NA1','23','27','28','Lic','1234567890','EMM',0,'auditor@cnbv.com','good@personal.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','60','0',0,265,'2016-07-05 17:34:51',NULL,NULL),(438,'cnbv',60,'admin@cnbv.com','$2y$10$UCjfIDqJu7ZeVCwN3LcCA.1D13MI9484xbLuh00ikbatcr/OuJTG.','juan el auditor 2','sanchez','cardenas','2016-06-22','0','1','GJFVKJRFVNKSdadc','Guadalajara, jal','6',0,'6434cdas','10','14','21','NA1','23','27','28','Lic','1234567890','EMM',0,'admin@cnbv.com','admin.personal@cnbv.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','60','0',0,265,'2016-07-07 20:34:59',NULL,NULL),(439,'cnbv',55,'eduardo.martinez@cnbv.com','$2y$10$jDQ38Abd/MIDJubuFH4xCOvDkKRINbE8VyxYzc.cxAgIGZmlviosy','nombre usuario','apellido usuario','apellidom usuario','2016-06-22','0','1','GJFVKJRFVNKScds','Guadalajara, jal','6',0,'6434casdcs','10','13','15','NA1','23','27','28','Lic','1234567890','EMM',0,'eduardo.martinez@cnbv.com','eduardo.martinez@personal.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','55','0',1,1,'2016-07-08 14:01:11',NULL,NULL),(440,'cnbv',55,'eduardo.martinez@cnbv.com','$2y$10$K8VxrW52IZ1ZHv21E4qwyOW0Wm/SDm/fxE/XiT8.L0cF/chwsYWRy','nombre usuario','apellido usuario','apellidom usuario','2016-06-22','0','1','GJFVKJRFVNKSfdsasfd','Guadalajara, jal','6',0,'6434fasfs','10','13','15','NA1','23','27','28','Lic','1234567890','EMM',0,'eduardo.martinez@cnbv.com','eduardo.martinez@personal.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','55','0',1,1,'2016-07-08 14:12:51',NULL,NULL),(441,'cnbv',55,'eduardo.martinez@cnbv.com','$2y$10$8uU972.ADVqgRqGyObSZjeoU/PzFdNC76QAhaJv..hNU8Sf0DW.8m','nombre usuario','apellido usuario','apellidom usuario','2016-06-22','0','1','GJFVKJRFVNKS','Guadalajara, jal','6',0,'6434','10','13','15','NA1','23','27','28','Lic','1234567890','EMM',0,'eduardo.martinez@cnbv.com','eduardo.martinez@personal.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','55','0',1,1,'2016-07-08 14:26:26',NULL,NULL),(442,'cnbv',55,'eduardo.martinez@cnbv.com','$2y$10$7UpK2cjH5UeCRGoJLq/pUevNR6cQpBmdHybYzc9aZ7SP80bxA2Zde','nombre usuario','apellido usuario','apellidom usuario','2016-06-22','0','1','GJFVKJRFVNKS','Guadalajara, jal','6',0,'6434','10','13','15','NA1','23','27','28','Lic','1234567890','EMM',0,'eduardo.martinez@cnbv.com','eduardo.martinez@personal.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','55','0',1,1,'2016-07-08 14:30:56',NULL,NULL),(443,'cnbv',55,'eduardo.martinez@cnbv.com','$2y$10$BK7eXMNq7WCgK1PqjZUbgORaFl7TFT77wTc200Kankaxd36H4fifC','nombre usuario','apellido usuario','apellidom usuario','2016-06-22','0','1','GJFVKJRFVNKS','Guadalajara, jal','6',0,'6434','10','13','15','NA1','23','27','28','Lic','1234567890','EMM',0,'eduardo.martinez@cnbv.com','eduardo.martinez@personal.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','55','0',1,1,'2016-07-08 14:31:57',NULL,NULL),(444,'cnbv',55,'eduardo.martinez@cnbv.com','$2y$10$DQUKGcP7GiQBeBiQsJkUYemzqlQSa1uDvzq2CFBKQRJCKAC/CbSY.','nombre usuario','apellido usuario','apellidom usuario','2016-06-22','0','1','GJFVKJRFVNKS','Guadalajara, jal','6',0,'6434','10','13','15','NA1','23','27','28','Lic','1234567890','EMM',0,'eduardo.martinez@cnbv.com','eduardo.martinez@personal.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','55','0',1,1,'2016-07-08 14:42:09',NULL,NULL),(445,'cnbv',55,'eduardo.martinezcasd@cnbv.com','$2y$10$Bxr3McYerafSE7GJPQuAYONA.7iJuv7oXE6DPMTnPWEw/V.lNOBm2','valid ano','apellido usuario','apellidom usuario','2016-06-22','0','1','GJFVKJRFVNKScasdcdcd','Guadalajara, jal','6',0,'6434casca','10','13','15','NA1','23','27','28','Lic','1234567890','EMM',0,'eduardo.martinezcasd@cnbv.com','eduardo.martinezcdas@personal.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','55','0',1,1,'2016-07-08 16:03:40',NULL,NULL),(446,'cnbv',55,'eduardo.martinez@cnbv.com','$2y$10$QmvxxENuMTlpevHONgDSVO8QuhXss/mlByS3v7RQjaXX7AIbRoANm','audiror 3','ocampo','','2016-06-22','0','1','GJFVKJRFVNKS','Guadalajara, jal','6',0,'6434','10','13','15','NA1','23','27','28','Lic','1234567890','EMM',0,'eduardo.martinez@cnbv.com','eduardo.martinez@personal.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','55','0',0,1,'2016-07-08 16:08:50',NULL,NULL),(447,'cnbv',61,'eduardo.martinezdsc@cnbv.com','$2y$10$wKuZJwSrMuqUCh3nEcjeWeiY9vCbsKjGxfkY2pWviTeAwiudp4DX6','daniel titular 1','montes','','2016-06-22','0','1','GJFVKJRFVNKScdasd','Guadalajara, jal','6',0,'6434cdasdc','10','13','15','NA1','23','27','28','Lic','1234567890','EMM',0,'eduardo.martinezdsc@cnbv.com','eduardo.martinezcdasdc@personal.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','61','0',0,1,'2016-07-10 10:00:22',NULL,NULL),(448,'cnbv',61,'eduardo.martinecda322z@cnbv.com','$2y$10$25U854W587adVdk81xRwLuYfYcPrusAa08l/VR8H4iHX6cXkn3GPG','gerardo titular 2','carrillo','','2016-06-22','0','1','GJFVKJRFVNKS3rfsd','Guadalajara, jal','6',0,'6434cdas323','10','13','15','NA1','23','27','28','Lic','1234567890','EMM',0,'eduardo.martinecda322z@cnbv.com','eduardo.martinezcdasd@personal.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','61','0',0,1,'2016-07-10 10:00:58',NULL,NULL),(449,'cnbv',57,'eduardo.martinezoiuyg@cnbv.com','$2y$10$q.MosXWCJaac2XY1hLKZSO/fzB08FlX2vJ0iAwflyUBVJtuztbWOa','sergio','cordinador2','','2016-06-22','0','1','GJFVKJRFVNKSiugv','Guadalajara, jal','6',0,'6434oiuygfv','10','13','15','NA1','23','27','28','Lic','1234567890','EMM',0,'eduardo.martinezoiuyg@cnbv.com','eduardo.martinezoiuytfv@personal.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','57','0',0,1,'2016-07-10 10:01:54',NULL,NULL),(450,'cnbv',57,'eduardo.martinezdavfbiuytf@cnbv.com','$2y$10$albOfiSHwpC7JbW06sFJAurSQJFNCCCifl6BXGMdrDjVyhhkA7a46','esteban','cordinador 2','perez','2016-06-22','0','1','GJFVKJRFVNKSjhdcdvnh','Guadalajara, jal','6',0,'6434vfvghmue','10','13','15','NA1','23','27','28','Lic','1234567890','EMM',0,'eduardo.martinezdavfbiuytf@cnbv.com','eduardo.martinezuytfjtf@personal.com','52-7654323456','52-963642456','523','direccion conocida sin numero','10','5','70,23','','','','','','','','','','','','','','','','','57','0',0,1,'2016-07-10 10:02:36',NULL,NULL);
/*!40000 ALTER TABLE `coreuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden_auditoria_chat`
--

DROP TABLE IF EXISTS `orden_auditoria_chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden_auditoria_chat` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `id_auditoria` int(11) NOT NULL,
  `comentario` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_chat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden_auditoria_chat`
--

LOCK TABLES `orden_auditoria_chat` WRITE;
/*!40000 ALTER TABLE `orden_auditoria_chat` DISABLE KEYS */;
INSERT INTO `orden_auditoria_chat` VALUES (1,15,'Hola'),(2,15,'Descripción');
/*!40000 ALTER TABLE `orden_auditoria_chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden_auditoria_general`
--

DROP TABLE IF EXISTS `orden_auditoria_general`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden_auditoria_general` (
  `id_general` int(11) NOT NULL AUTO_INCREMENT,
  `verificado` int(11) NOT NULL,
  `validado` int(11) NOT NULL,
  `periodo_reserva` int(11) NOT NULL,
  `ampli_reserva` text NOT NULL,
  `fundamento_legal` text NOT NULL,
  `fec_clasificacion` text NOT NULL,
  `fec_des_clasificacion` text NOT NULL,
  `fundamento_legal_2` text NOT NULL,
  `confidencial` text NOT NULL,
  `clasifico` text NOT NULL,
  `desclasifico` text NOT NULL,
  `id_auditoria` int(11) NOT NULL,
  PRIMARY KEY (`id_general`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden_auditoria_general`
--

LOCK TABLES `orden_auditoria_general` WRITE;
/*!40000 ALTER TABLE `orden_auditoria_general` DISABLE KEYS */;
INSERT INTO `orden_auditoria_general` VALUES (1,1,0,2,'ok','ilil','ilil','ilil','ok','lil','ilil','ilil',15);
/*!40000 ALTER TABLE `orden_auditoria_general` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden_auditoria_orden`
--

DROP TABLE IF EXISTS `orden_auditoria_orden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden_auditoria_orden` (
  `id_orden` int(11) NOT NULL AUTO_INCREMENT,
  `verificado` int(11) NOT NULL,
  `validado` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `rol` text NOT NULL,
  `nombre` text NOT NULL,
  `grado` text NOT NULL,
  `coordinado` text NOT NULL,
  `periodo` text NOT NULL,
  `verificar` text NOT NULL,
  `id_auditoria` int(11) NOT NULL,
  PRIMARY KEY (`id_orden`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden_auditoria_orden`
--

LOCK TABLES `orden_auditoria_orden` WRITE;
/*!40000 ALTER TABLE `orden_auditoria_orden` DISABLE KEYS */;
INSERT INTO `orden_auditoria_orden` VALUES (1,0,0,'2016-07-14','uuioui','uiouu','uiiuyty','1','qweqe','qwqeq',15);
/*!40000 ALTER TABLE `orden_auditoria_orden` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden_auditoria_orden_CC`
--

DROP TABLE IF EXISTS `orden_auditoria_orden_CC`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden_auditoria_orden_CC` (
  `id_CC` int(11) NOT NULL AUTO_INCREMENT,
  `cc_rol` text NOT NULL,
  `id_orden` int(11) NOT NULL,
  PRIMARY KEY (`id_CC`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden_auditoria_orden_CC`
--

LOCK TABLES `orden_auditoria_orden_CC` WRITE;
/*!40000 ALTER TABLE `orden_auditoria_orden_CC` DISABLE KEYS */;
INSERT INTO `orden_auditoria_orden_CC` VALUES (1,'62',1);
/*!40000 ALTER TABLE `orden_auditoria_orden_CC` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden_auditoria_orden_firmas`
--

DROP TABLE IF EXISTS `orden_auditoria_orden_firmas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden_auditoria_orden_firmas` (
  `id_firma` int(11) NOT NULL AUTO_INCREMENT,
  `rol` text NOT NULL,
  `auditor` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  PRIMARY KEY (`id_firma`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden_auditoria_orden_firmas`
--

LOCK TABLES `orden_auditoria_orden_firmas` WRITE;
/*!40000 ALTER TABLE `orden_auditoria_orden_firmas` DISABLE KEYS */;
INSERT INTO `orden_auditoria_orden_firmas` VALUES (1,'63',62,1);
/*!40000 ALTER TABLE `orden_auditoria_orden_firmas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pat_data_cat`
--

DROP TABLE IF EXISTS `pat_data_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat_data_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_creater` int(11) NOT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `des` varchar(100) DEFAULT NULL,
  `orden` int(11) unsigned DEFAULT NULL,
  `deslarga` varchar(200) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `estatus` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_tmp_autoinc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pat_data_cat`
--

LOCK TABLES `pat_data_cat` WRITE;
/*!40000 ALTER TABLE `pat_data_cat` DISABLE KEYS */;
INSERT INTO `pat_data_cat` VALUES (1,1,'pat_tipo_revision','Auditoria',1,'Auditoria','2016-07-09 18:04:55',0),(2,1,'pat_tipo_revision','Seguimiento',2,'Seguimiento','2016-07-09 18:07:28',0),(3,1,'pat_prog_adic','Programada',1,'Programada','2016-07-09 18:08:38',0),(4,1,'pat_prog_adic','Adicional',2,'Adicional','2016-07-09 18:04:55',0),(5,1,'pat_instancia','OIC',1,'OIC','2016-07-09 18:04:55',0),(6,1,'pat_instancia','Otro',2,'Otro','2016-07-09 18:04:55',0),(7,1,'pat_justificacion','ÁREAS CRÍTICAS PROCLIVES A CORRUPCIÓN',1,'ÁREAS CRÍTICAS PROCLIVES A CORRUPCIÓN','2016-07-09 18:04:55',0),(8,1,'pat_justificacion','CANTIDAD DE OBSERVACIONES Y/O ACCIONES DE MEJORA DE CONTROL INTERNO',2,'CANTIDAD DE OBSERVACIONES Y/O ACCIONES DE MEJORA DE CONTROL INTERNO','2016-07-09 18:04:55',0),(9,1,'pat_justificacion','AREA O RUBRO NO REVISADO CON ANTIGÜEDAD MAYOR A UN AÑO',2,'AREA O RUBRO NO REVISADO CON ANTIGÜEDAD MAYOR A UN AÑO','2016-07-09 18:04:55',0),(10,1,'pat_area_revizar','DGs de Supervisión de la CNBV (Proceso de Supervisión, Autorizaciones y Sanciones)',1,'DGs de Supervisión de la CNBV (Proceso de Supervisión, Autorizaciones y Sanciones)','2016-07-09 18:04:55',0),(11,1,'pat_area_revizar','Áreas involucradas (seguimiento)',2,'Áreas involucradas (seguimiento)','2016-07-09 18:04:55',0),(12,1,'pat_area_revizar','DG de Prevención de Operaciones con Recursos de Procedencia Ilícita A y B (Proceso de Supervisión)',3,'DG de Prevención de Operaciones con Recursos de Procedencia Ilícita A y B (Proceso de Supervisión)','2016-07-09 18:04:55',0),(13,1,'pat_area_revizar','DG de Visitas de Investigación (Proceso de Soporte Legal)',4,'DG de Visitas de Investigación (Proceso de Soporte Legal)','2016-07-09 18:04:55',0),(14,1,'pat_area_revizar','DG de Normatividad  (Proceso Soporte Legal)',5,'DG de Normatividad  (Proceso Soporte Legal)','2016-07-09 18:04:55',0),(15,1,'pat_area_revizar','DG de Desarrollo Regulatorio (Proceso de Regulacion)',6,'DG de Desarrollo Regulatorio (Proceso de Regulacion)','2016-07-09 18:04:55',0),(16,1,'pat_pre_eje_file_type','Word',1,'','2016-07-09 18:04:55',0),(17,1,'pat_pre_eje_file_type','Excel',2,'','2016-07-09 18:04:55',0),(18,1,'pat_pre_eje_file_type','PDF',3,'','2016-07-09 18:04:55',0),(19,1,'pat_pre_eje_file_type','Power Point',4,'','2016-07-09 18:04:55',0),(20,1,'pat_pre_eje_file_type','Imagen',5,'','2016-07-09 18:04:55',0),(21,1,'pat_prog_adic','Cancelada',3,'','2016-07-09 18:04:55',0),(22,1,'pat_clave','100',1,'','2016-07-09 18:04:55',0),(23,1,'pat_clave','200',2,'','2016-07-09 18:04:55',0),(24,1,'pat_clave','300',3,'','2016-07-09 18:04:55',0),(25,1,'pat_clave','400',4,'','2016-07-09 18:04:55',0),(26,1,'pat_clave','500',5,'','2016-07-09 18:04:55',0),(27,1,'pat_clave','600',6,'','2016-07-09 18:04:55',0),(28,1,'pat_clave','700',7,'','2016-07-09 18:04:55',0),(29,1,'pat_clave','800',8,'','2016-07-09 18:04:55',0),(30,1,'pat_clave','900',9,'','2016-07-09 18:04:55',0),(31,1,'pat_sem_ini','1',1,'52','2016-07-09 18:04:55',0),(32,1,'pat_sem_fin','1',2,'52','2016-07-09 18:04:55',0),(33,1,'pat_ts_revision','1',1,'52','2016-07-09 18:04:55',0),(34,1,'pat_ts_hombre','1',2,'500','2016-07-09 18:04:55',0),(35,1,'pat_aud_pre','1/2014',1,'2014','2016-07-09 18:04:55',0),(36,1,'pat_aud_pre','2/2014',1,'2014','2016-07-09 18:04:55',0),(37,1,'pat_aud_pre','3/2014',1,'2014','2016-07-09 18:04:55',0),(38,1,'pat_muestra','Se determinara en la auditoria',1,'2014','2016-07-09 18:04:55',0),(39,1,'pat_universo','100%',1,'','2016-07-09 18:04:55',0),(40,1,'pat_universo','90%',2,'','2016-07-09 18:04:55',0),(41,1,'pat_universo','80%',3,'','2016-07-09 18:04:55',0),(42,1,'pat_universo','70%',4,'','2016-07-09 18:04:55',0),(43,1,'pat_universo','60%',5,'','2016-07-09 18:04:55',0),(44,1,'pat_universo','50%',6,'','2016-07-09 18:04:55',0),(45,1,'pat_riesgo_impacto','0.6',1,'','2016-07-09 18:04:55',0),(46,1,'pat_riesgo_probabilidad','0.4',1,'','2016-07-09 18:04:55',0),(47,1,'pat_equi_trab_rol','Titular',1,'','2016-07-09 18:04:55',0),(48,1,'pat_equi_trab_rol','Coordinador',2,'','2016-07-09 18:04:55',0),(49,1,'pat_equi_trab_rol','Jefe de grupo',3,'','2016-07-09 18:04:55',0),(50,1,'pat_equi_trab_rol','Auditor',4,'','2016-07-09 18:04:55',0),(51,1,'pat_equi_trab_rol','Consulta',5,'','2016-07-09 18:04:55',0);
/*!40000 ALTER TABLE `pat_data_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pat_equipo_trabajo`
--

DROP TABLE IF EXISTS `pat_equipo_trabajo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat_equipo_trabajo` (
  `id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `id_revision` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `rol_titular` int(11) DEFAULT NULL,
  `rol_cordinador` int(11) DEFAULT NULL,
  `rol_jefe_grupo` int(11) DEFAULT NULL,
  `rol_auditor` int(11) DEFAULT NULL,
  `rol_consulta` int(11) DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `estatus` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id_equipo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pat_equipo_trabajo`
--

LOCK TABLES `pat_equipo_trabajo` WRITE;
/*!40000 ALTER TABLE `pat_equipo_trabajo` DISABLE KEYS */;
INSERT INTO `pat_equipo_trabajo` VALUES (2,4,5,0,0,0,0,0,0,'2016-07-13 18:05:52',0),(3,4,438,1,1,1,0,0,0,'2016-07-13 18:05:52',0),(4,4,447,1,1,1,0,0,1,'2016-07-13 20:22:16',0),(5,4,448,1,1,1,0,0,1,'2016-07-13 21:48:48',0),(6,4,449,1,0,1,1,1,1,'2016-07-13 22:56:14',0),(7,5,5,1,0,0,1,1,0,'2016-07-14 01:31:21',0),(8,5,438,0,1,1,1,1,0,'2016-07-14 01:31:25',0),(9,5,447,1,1,1,0,1,0,'2016-07-14 01:31:28',0),(10,5,448,1,1,1,0,1,0,'2016-07-14 01:31:36',0),(11,5,449,1,1,1,0,1,0,'2016-07-14 01:32:05',0),(12,4,450,1,1,1,1,1,0,'2016-07-14 17:02:50',0),(13,13,5,0,1,1,1,1,0,'2016-07-17 18:50:59',0),(14,13,438,1,0,1,1,1,0,'2016-07-17 18:51:01',0),(15,13,447,1,1,0,1,1,0,'2016-07-17 18:51:03',0);
/*!40000 ALTER TABLE `pat_equipo_trabajo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pat_mapa_riesgos`
--

DROP TABLE IF EXISTS `pat_mapa_riesgos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat_mapa_riesgos` (
  `id_riesgo` int(11) NOT NULL AUTO_INCREMENT,
  `orden` int(11) DEFAULT NULL,
  `descripcion` varchar(250) COLLATE utf8_bin NOT NULL,
  `impacto` int(11) NOT NULL,
  `probabilidad` int(11) NOT NULL,
  `cuadrante` varchar(10) COLLATE utf8_bin NOT NULL,
  `riesgo_ponderado` double DEFAULT NULL,
  `id_usuario_creador` int(11) NOT NULL,
  `pat_ano` int(11) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estatus` int(11) DEFAULT '0',
  PRIMARY KEY (`id_riesgo`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pat_mapa_riesgos`
--

LOCK TABLES `pat_mapa_riesgos` WRITE;
/*!40000 ALTER TABLE `pat_mapa_riesgos` DISABLE KEYS */;
INSERT INTO `pat_mapa_riesgos` VALUES (1,1,'Procesos sustantivos aplicados ineficiente o inoportunamente',9,8,'I',8.6,265,2016,'0000-00-00 00:00:00',0),(2,2,'Actos de autoridad dictados a las entidades financieras con seguimiento inadecuado ',8,8,'I',8,265,2016,'0000-00-00 00:00:00',0),(3,3,'Irregularidades de entidaes financieras determinadas con discrecionalidad',8,8,'I',8,265,2016,'0000-00-00 00:00:00',0),(4,4,'Riesgos determinados inapropiadamente.',8,7,'I',7.6,265,2016,'0000-00-00 00:00:00',0),(5,5,'Contrataciones Celebradas o Ejecutadas deficientemente.',7,8,'I',7.4,265,2016,'0000-00-00 00:00:00',0),(6,6,'Solicitudes de acceso a información  atendidas con opacidad.',6,8,'I',6.8,265,2016,'0000-00-00 00:00:00',0),(7,7,'Recursos financieros y materiales ejercidos y/o utilizados inadecuadamente.',7,6,'I',6.6,265,2016,'0000-00-00 00:00:00',0),(8,8,'Sanciones aplicadas extemporáneamente.',5,7,'II',5.8,265,2016,'0000-00-00 00:00:00',0),(9,9,'Procesos sustantivos aplicados inadecuadamente a cambio de un beneficio',4,6,'II',4.8,265,2016,'0000-00-00 00:00:00',0),(10,10,'Regulación secundaria elaborada para favorecer a un sector de manera deliberada a cambio de un beneficio.',4,6,'II',4.8,265,2016,'0000-00-00 00:00:00',0),(11,11,'Servicio médico proporcionado ineficientemente.',4,6,'II',4.8,265,2016,'0000-00-00 00:00:00',0),(12,12,'Sistemas informaticos amenazados por posibles vulnerabilidades.',4,6,'III',4.8,265,2016,'0000-00-00 00:00:00',0),(13,13,'Autorizaciones atendidas discrecionalmente en forma prioritaria o diferida',5,4,'III',4.6,265,2016,'0000-00-00 00:00:00',0),(14,14,'Sanciones  impuestas de manera discrecional.',4,4,'III',4,265,2016,'0000-00-00 00:00:00',0),(15,15,'Recursos humanos administrados con deficiencia.',7,4,'IV',5.8,265,2016,'0000-00-00 00:00:00',0),(16,16,'Solicitudes de autoridades atendidas inoportunamente.',6,5,'IV',5.6,265,2016,'0000-00-00 00:00:00',0),(17,17,'Criterios normativos publicados a destiempo',6,4,'IV',5.2,265,2016,'0000-00-00 00:00:00',0),(18,18,'Tecnologías de Información y Comunicación utilizadas  de manera ineficiente.',6,4,'IV',5.2,265,2016,'0000-00-00 00:00:00',0),(19,19,'Hostigamiento y acoso laboral o sexual atendido de manera inapropiada.',6,2,'IV',4.4,265,2016,'0000-00-00 00:00:00',0),(20,20,'Solicitudes, quejas y denuncias ciudadanas atendidas sin transparencia.',6,2,'IV',4.4,265,2016,'0000-00-00 00:00:00',0),(30,NULL,'descripcion',1,1,'II',1,1,2016,'2016-07-17 02:45:48',1),(31,NULL,'Riesgo del 2015',3,6,'II',4.2,1,2015,'2016-07-17 11:50:15',0),(32,NULL,'Riesgo del 2014',4,7,'II',5.2,1,2015,'2016-07-17 12:37:43',0);
/*!40000 ALTER TABLE `pat_mapa_riesgos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pat_pre_ejecutiva`
--

DROP TABLE IF EXISTS `pat_pre_ejecutiva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat_pre_ejecutiva` (
  `id_pre_eje` int(11) NOT NULL AUTO_INCREMENT,
  `id_creater` int(11) DEFAULT '0',
  `pre_eje_pat_ano` int(11) DEFAULT '0',
  `pre_eje_name` varchar(100) DEFAULT NULL,
  `pre_eje_des` text,
  `pre_eje_file_type` varchar(100) DEFAULT NULL,
  `pre_eje_file_name` varchar(100) DEFAULT NULL,
  `pre_eje_file_url` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `estatus` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id_pre_eje`),
  KEY `ix_tmp_autoinc` (`id_pre_eje`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pat_pre_ejecutiva`
--

LOCK TABLES `pat_pre_ejecutiva` WRITE;
/*!40000 ALTER TABLE `pat_pre_ejecutiva` DISABLE KEYS */;
INSERT INTO `pat_pre_ejecutiva` VALUES (14,1,2016,'Nombre del documento','solo lectura','16','hola.docx','content/pat_pres_ejecutiva/14/2016070910171214681206329.docx','2016-07-09 22:13:30',0),(15,1,2016,'Nombre del documento','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.','19','Nuevo Presentación de Microsoft PowerPoint.pptx','content/pat_pres_ejecutiva/15/2016070910183614681207163528.pptx','2016-07-09 22:18:14',0),(16,1,2016,'Nombre del documento','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.','18','fichaextras.pdf','content/pat_pres_ejecutiva/16/2016070911190614681243463424.pdf','2016-07-09 23:19:06',0),(17,1,2016,'Nombre del documento','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.','20','Chrysanthemum.jpg','content/pat_pres_ejecutiva/17/2016070911212414681244847474.jpg','2016-07-09 23:21:24',0),(18,1,2016,'Nombre del documento','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.','16',NULL,NULL,'2016-07-17 19:12:23',0),(19,1,2016,'Nombre del documento LALO','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.','19',NULL,NULL,'2016-07-17 19:12:41',0);
/*!40000 ALTER TABLE `pat_pre_ejecutiva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pat_rev_alert`
--

DROP TABLE IF EXISTS `pat_rev_alert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat_rev_alert` (
  `id_alert` int(11) NOT NULL AUTO_INCREMENT,
  `id_creater` int(11) NOT NULL,
  `id_rev` int(11) NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  `check` smallint(6) NOT NULL,
  `estatus` smallint(6) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id_alert`),
  KEY `ix_tmp_autoinc` (`id_alert`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pat_rev_alert`
--

LOCK TABLES `pat_rev_alert` WRITE;
/*!40000 ALTER TABLE `pat_rev_alert` DISABLE KEYS */;
INSERT INTO `pat_rev_alert` VALUES (1,1,4,'Revisar/validar',0,0,'2016-07-15 19:10:19'),(2,1,5,'Revisar/validar',0,0,'2016-07-15 19:10:30'),(3,1,4,'Revisar/validar',0,0,'2016-07-15 19:11:51');
/*!40000 ALTER TABLE `pat_rev_alert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pat_rev_comment`
--

DROP TABLE IF EXISTS `pat_rev_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat_rev_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_creater` int(11) NOT NULL,
  `id_rev` int(11) DEFAULT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `estatus` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_tmp_autoinc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pat_rev_comment`
--

LOCK TABLES `pat_rev_comment` WRITE;
/*!40000 ALTER TABLE `pat_rev_comment` DISABLE KEYS */;
INSERT INTO `pat_rev_comment` VALUES (1,1,2,'este es un comentario','2016-07-12 14:05:44',0),(2,1,2,'este es otro comentario','2016-07-12 14:11:50',0),(3,1,4,'agregand un comenario','2016-07-12 14:32:19',0),(4,1,2,'nuevo comenetario','2016-07-12 14:40:21',0),(5,1,2,'este es una orden directa en el comentario','2016-07-12 14:43:31',0),(6,1,4,'segunda revision, tercer comentario','2016-07-12 14:43:45',0),(7,1,2,'hla','2016-07-12 14:49:04',0),(8,1,4,'hola','2016-07-13 00:09:00',0),(9,1,6,'hola','2016-07-13 02:47:45',0),(10,1,5,'solo comentando','2016-07-13 02:47:58',0),(11,447,4,'revisión iniciada','2016-07-13 05:29:33',0),(12,447,5,'inicia revisión','2016-07-13 05:29:50',0),(13,1,4,'mensaje','2016-07-13 05:31:25',0);
/*!40000 ALTER TABLE `pat_rev_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pat_revisiones`
--

DROP TABLE IF EXISTS `pat_revisiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat_revisiones` (
  `id_rev` int(11) NOT NULL AUTO_INCREMENT,
  `id_creater` int(11) DEFAULT NULL,
  `id_pat_ano` int(11) DEFAULT NULL,
  `no_revision` int(11) DEFAULT NULL,
  `tipo_revision` int(11) DEFAULT NULL,
  `prog_adic` int(11) DEFAULT NULL,
  `clave` int(11) DEFAULT NULL,
  `instancia` int(11) DEFAULT NULL,
  `justificacion` int(11) DEFAULT NULL,
  `area_revizar` int(11) DEFAULT NULL,
  `descripcion` text,
  `objetivo` text,
  `semana_ini` int(11) DEFAULT NULL,
  `semana_fin` int(11) DEFAULT NULL,
  `ts_revision` int(11) DEFAULT NULL,
  `ts_hombre` int(11) DEFAULT NULL,
  `periodo_ini` date DEFAULT NULL,
  `periodo_fin` date DEFAULT NULL,
  `aud_precedente` int(11) DEFAULT NULL,
  `muestra` int(11) DEFAULT NULL,
  `universo` int(11) DEFAULT NULL,
  `riesgo` int(11) DEFAULT NULL,
  `estatus_revisado` smallint(6) DEFAULT NULL,
  `estatus_validado` smallint(6) DEFAULT NULL,
  `estatus_auditoria` int(11) DEFAULT NULL COMMENT '1 Programada\\n2 Proceso\\n3 Finalizada',
  `trimestre` int(11) DEFAULT NULL COMMENT 'Del 1 al 4',
  `auditores` int(11) DEFAULT NULL COMMENT '# de auditores del equipo de trabajo',
  `estatus` smallint(6) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id_rev`),
  KEY `ix_tmp_autoinc` (`id_rev`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pat_revisiones`
--

LOCK TABLES `pat_revisiones` WRITE;
/*!40000 ALTER TABLE `pat_revisiones` DISABLE KEYS */;
INSERT INTO `pat_revisiones` VALUES (13,1,2016,123,1,3,22,5,7,11,'des','des',1,1,1,0,'1969-12-31','1969-12-31',35,38,39,2,0,0,NULL,NULL,NULL,0,'2016-07-16 13:55:10'),(14,1,2016,123,2,4,25,6,8,10,'des reset','des reset',13,14,14,0,'2016-02-07','2016-02-07',36,38,40,2,0,0,NULL,NULL,NULL,0,'2016-07-16 13:56:09'),(15,1,2016,123,1,3,22,5,7,11,'des','des',1,1,1,0,'1969-12-31','1969-12-31',35,38,39,2,0,0,NULL,NULL,NULL,0,'2016-07-16 13:56:40'),(16,1,2016,123,1,3,22,5,7,0,'des','des',1,1,1,0,'1969-12-31','1969-12-31',35,38,39,3,0,0,NULL,NULL,NULL,0,'2016-07-16 16:05:56'),(17,1,2016,25,2,21,26,6,8,0,'desLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera','desLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera',3,3,3,0,'1969-12-31','1969-12-31',37,38,40,9,0,0,NULL,NULL,NULL,0,'2016-07-18 01:50:41'),(18,1,2016,25,2,21,26,6,8,0,'desLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera','desLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera',3,3,3,0,'1969-12-31','1969-12-31',37,38,40,1,0,0,NULL,NULL,NULL,0,'2016-07-18 01:51:06');
/*!40000 ALTER TABLE `pat_revisiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pat_revxarevisar`
--

DROP TABLE IF EXISTS `pat_revxarevisar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat_revxarevisar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_revision` int(11) NOT NULL,
  `id_area` int(11) DEFAULT NULL,
  `id_creater` int(11) DEFAULT NULL,
  `estatus` smallint(6) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_tmp_autoinc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pat_revxarevisar`
--

LOCK TABLES `pat_revxarevisar` WRITE;
/*!40000 ALTER TABLE `pat_revxarevisar` DISABLE KEYS */;
INSERT INTO `pat_revxarevisar` VALUES (3,15,14,1,1,'2016-07-16 13:56:41'),(4,15,10,1,1,'2016-07-16 13:56:41'),(5,15,11,1,1,'2016-07-16 15:20:02'),(6,15,10,1,1,'2016-07-16 15:23:32'),(7,15,12,1,1,'2016-07-16 15:23:34'),(8,15,10,1,1,'2016-07-16 15:23:52'),(9,15,11,1,1,'2016-07-16 15:23:52'),(10,15,13,1,1,'2016-07-16 15:23:52'),(11,15,14,1,1,'2016-07-16 15:23:52'),(12,15,15,1,1,'2016-07-16 15:23:52'),(13,15,10,1,1,'2016-07-16 15:25:37'),(14,15,12,1,1,'2016-07-16 15:25:37'),(15,15,13,1,1,'2016-07-16 15:25:37'),(16,15,10,1,1,'2016-07-16 15:29:05'),(17,15,11,1,1,'2016-07-16 15:29:05'),(18,15,12,1,1,'2016-07-16 15:29:05'),(19,15,14,1,0,'2016-07-16 15:29:05'),(20,16,10,1,0,'2016-07-16 16:05:56'),(21,16,11,1,0,'2016-07-16 16:05:56'),(22,16,12,1,0,'2016-07-16 16:05:56'),(23,17,10,1,0,'2016-07-18 01:50:41'),(24,17,11,1,0,'2016-07-18 01:50:41'),(25,17,12,1,0,'2016-07-18 01:50:41'),(26,17,13,1,0,'2016-07-18 01:50:41'),(27,17,14,1,0,'2016-07-18 01:50:41'),(28,18,10,1,1,'2016-07-18 01:51:06'),(29,18,11,1,1,'2016-07-18 01:51:06'),(30,18,12,1,1,'2016-07-18 01:51:06'),(31,18,13,1,1,'2016-07-18 01:51:06'),(32,18,14,1,0,'2016-07-18 01:51:06');
/*!40000 ALTER TABLE `pat_revxarevisar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pat_revxriesgo`
--

DROP TABLE IF EXISTS `pat_revxriesgo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat_revxriesgo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_revision` int(11) NOT NULL,
  `id_riesgo` int(11) DEFAULT NULL,
  `id_creater` int(11) DEFAULT NULL,
  `estatus` smallint(6) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_tmp_autoinc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pat_revxriesgo`
--

LOCK TABLES `pat_revxriesgo` WRITE;
/*!40000 ALTER TABLE `pat_revxriesgo` DISABLE KEYS */;
INSERT INTO `pat_revxriesgo` VALUES (1,5,1,1,1,'2016-07-13 02:43:54'),(2,5,2,1,1,'2016-07-13 02:43:54'),(3,6,1,1,0,'2016-07-13 02:46:52'),(4,6,10,1,0,'2016-07-13 02:46:52'),(5,6,14,1,0,'2016-07-13 02:46:52'),(6,8,14,1,0,'2016-07-13 03:38:56'),(7,8,13,1,0,'2016-07-13 03:38:57'),(8,8,1,1,0,'2016-07-13 03:38:57'),(9,9,18,1,0,'2016-07-13 05:22:15'),(10,9,14,1,0,'2016-07-13 05:22:15'),(11,10,5,1,0,'2016-07-14 13:04:50'),(12,11,6,1,0,'2016-07-14 13:06:20'),(13,11,12,1,0,'2016-07-14 13:06:20'),(14,5,3,1,1,'2016-07-15 12:54:48'),(15,5,3,1,1,'2016-07-15 12:54:48'),(16,5,5,1,1,'2016-07-15 13:11:35'),(17,5,9,1,1,'2016-07-15 13:11:41'),(18,5,2,1,1,'2016-07-15 13:11:59'),(19,5,3,1,1,'2016-07-15 13:12:24'),(20,5,2,1,1,'2016-07-15 13:16:53'),(21,5,1,1,1,'2016-07-15 13:16:54'),(22,5,4,1,1,'2016-07-15 13:16:54'),(23,5,1,1,1,'2016-07-15 13:18:15'),(24,5,2,1,1,'2016-07-15 13:18:16'),(25,5,1,1,1,'2016-07-15 13:19:27'),(26,5,3,1,1,'2016-07-15 13:19:28'),(27,5,4,1,1,'2016-07-15 13:19:28'),(28,5,5,1,1,'2016-07-15 13:19:29'),(29,5,6,1,1,'2016-07-15 13:19:29'),(30,5,1,1,1,'2016-07-15 13:22:05'),(31,5,2,1,1,'2016-07-15 13:22:05'),(32,5,3,1,1,'2016-07-15 13:22:05'),(33,5,4,1,1,'2016-07-15 13:22:05'),(34,5,6,1,1,'2016-07-15 13:22:06'),(35,5,7,1,0,'2016-07-15 13:22:06'),(36,12,2,1,0,'2016-07-16 13:54:42'),(37,12,4,1,0,'2016-07-16 13:54:42'),(38,13,1,1,0,'2016-07-16 13:55:10'),(39,14,8,1,0,'2016-07-16 13:56:09'),(40,14,1,1,0,'2016-07-16 13:56:09'),(41,15,1,1,0,'2016-07-16 13:56:41'),(42,15,15,1,0,'2016-07-16 13:56:41'),(43,15,3,1,0,'2016-07-16 15:20:14'),(44,15,2,1,0,'2016-07-16 15:21:27'),(45,16,1,1,0,'2016-07-16 16:05:56'),(46,16,2,1,0,'2016-07-16 16:05:56'),(47,17,1,1,0,'2016-07-18 01:50:41'),(48,17,2,1,0,'2016-07-18 01:50:41'),(49,17,3,1,0,'2016-07-18 01:50:41'),(50,17,4,1,0,'2016-07-18 01:50:41'),(51,17,5,1,0,'2016-07-18 01:50:41'),(52,17,6,1,0,'2016-07-18 01:50:41'),(53,17,7,1,0,'2016-07-18 01:50:41'),(54,17,8,1,0,'2016-07-18 01:50:41'),(55,18,1,1,1,'2016-07-18 01:51:06'),(56,18,2,1,1,'2016-07-18 01:51:06'),(57,18,3,1,0,'2016-07-18 01:51:06');
/*!40000 ALTER TABLE `pat_revxriesgo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pat_root`
--

DROP TABLE IF EXISTS `pat_root`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat_root` (
  `id_pat` int(11) NOT NULL AUTO_INCREMENT,
  `pat_ano` varchar(100) DEFAULT NULL,
  `pat_ano_des` varchar(100) DEFAULT NULL,
  `pat_activo` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `estatus` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id_pat`),
  KEY `ix_tmp_autoinc` (`id_pat`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pat_root`
--

LOCK TABLES `pat_root` WRITE;
/*!40000 ALTER TABLE `pat_root` DISABLE KEYS */;
INSERT INTO `pat_root` VALUES (1,'2015','Programa Anual de Trabajo 2015','0','2016-07-08 01:26:13',0),(2,'2016','Programa Anual de Trabajo 2016','0','2016-07-08 01:26:39',0),(3,'2017','Programa Anual de Trabajo 2017','1','2016-07-08 01:27:12',0),(4,'2018','Programa Anual de Trabajo 2018','1','2016-07-08 01:26:13',0),(5,'2019','Programa Anual de Trabajo 2019','1','2016-07-08 01:26:13',0),(6,'2020','Programa Anual de Trabajo 2020','1','2016-07-08 01:26:13',0),(7,'2021','Programa Anual de Trabajo 2021','1','2016-07-08 01:26:13',0),(8,'2022','Programa Anual de Trabajo 2022','1','2016-07-08 01:26:13',0),(9,'2023','Programa Anual de Trabajo 2023','1','2016-07-08 01:26:13',0),(10,'2024','Programa Anual de Trabajo 2024','1','2016-07-08 01:26:13',0),(11,'2025','Programa Anual de Trabajo 2025','1','2016-07-08 01:26:13',0),(12,'2026','Programa Anual de Trabajo 2026','1','2016-07-08 01:26:13',0);
/*!40000 ALTER TABLE `pat_root` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pat_semana_hombre`
--

DROP TABLE IF EXISTS `pat_semana_hombre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat_semana_hombre` (
  `id_sem_hom` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_pat_ano` int(11) DEFAULT NULL,
  `auditoria` int(11) DEFAULT NULL,
  `seguimiento` int(11) DEFAULT NULL,
  `mejora_gestion` int(11) DEFAULT NULL,
  `trans_inte_parti` int(11) DEFAULT NULL,
  `quejas_denuncias` int(11) DEFAULT NULL,
  `responsabilidades` int(11) DEFAULT NULL,
  `controversia` int(11) DEFAULT NULL,
  `actividades` int(11) DEFAULT NULL,
  `planeacion` int(11) DEFAULT NULL,
  `informe_sfp` int(11) DEFAULT NULL,
  `comite` int(11) DEFAULT NULL,
  `junta_consejo` int(11) DEFAULT NULL,
  `act_adm` int(11) DEFAULT NULL,
  `capacitacion` int(11) DEFAULT NULL,
  `plazas_vac` int(11) DEFAULT NULL,
  `vacaciones` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `estatus` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id_sem_hom`),
  KEY `ix_tmp_autoinc` (`id_sem_hom`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pat_semana_hombre`
--

LOCK TABLES `pat_semana_hombre` WRITE;
/*!40000 ALTER TABLE `pat_semana_hombre` DISABLE KEYS */;
INSERT INTO `pat_semana_hombre` VALUES (1,448,2016,1,0,0,0,0,0,0,0,0,0,0,0,3,4,3,9,20,'2016-07-10 12:03:07',0),(2,447,2016,1,2,3,0,0,0,0,0,0,0,0,0,0,44,1,1,52,'2016-07-10 12:46:38',0),(3,449,2016,0,0,0,0,0,0,0,0,0,0,0,0,0,0,3,7,10,'2016-07-10 13:15:32',0),(4,450,2016,0,0,0,1,1,0,0,0,0,0,0,0,1,0,0,4,7,'2016-07-11 12:18:08',0);
/*!40000 ALTER TABLE `pat_semana_hombre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_certificacion`
--

DROP TABLE IF EXISTS `user_certificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_certificacion` (
  `id_cer` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `cer_certificacion_des` varchar(100) DEFAULT NULL,
  `cer_certificacion` varchar(50) DEFAULT '',
  `cer_ano` int(11) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `estatus` smallint(6) NOT NULL,
  PRIMARY KEY (`id_cer`),
  KEY `ix_tmp_autoinc` (`id_cer`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_certificacion`
--

LOCK TABLES `user_certificacion` WRITE;
/*!40000 ALTER TABLE `user_certificacion` DISABLE KEYS */;
INSERT INTO `user_certificacion` VALUES (1,438,'Certificado 1','40',1940,'2016-07-07 20:37:19',0),(2,441,NULL,'40',1954,'2016-07-08 14:27:01',0),(3,444,NULL,'41',1943,'2016-07-08 14:42:17',0),(4,444,NULL,'40',1945,'2016-07-08 14:59:12',0);
/*!40000 ALTER TABLE `user_certificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_curso`
--

DROP TABLE IF EXISTS `user_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_curso` (
  `id_cur` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `cur_curso_des` varchar(100) DEFAULT NULL,
  `cur_curso` varchar(100) DEFAULT NULL,
  `cur_ini_fecha` date DEFAULT NULL,
  `cur_fin_fecha` date DEFAULT NULL,
  `cur_duracion` int(11) DEFAULT NULL,
  `cur_instituto` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `estatus` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id_cur`),
  KEY `ix_tmp_autoinc` (`id_cur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_curso`
--

LOCK TABLES `user_curso` WRITE;
/*!40000 ALTER TABLE `user_curso` DISABLE KEYS */;
INSERT INTO `user_curso` VALUES (1,438,'Curso 12','43','2015-01-03','2016-01-03',50,'45','2016-07-07 20:38:03',0),(2,444,NULL,'42','2015-01-01','2016-01-02',40,'44','2016-07-08 14:42:27',0);
/*!40000 ALTER TABLE `user_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_data_cat`
--

DROP TABLE IF EXISTS `user_data_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_data_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_creater` int(11) NOT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `des` varchar(100) DEFAULT NULL,
  `alcance` varchar(255) DEFAULT NULL,
  `orden` int(11) unsigned DEFAULT NULL,
  `deslarga` varchar(200) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `estatus` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_tmp_autoinc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_data_cat`
--

LOCK TABLES `user_data_cat` WRITE;
/*!40000 ALTER TABLE `user_data_cat` DISABLE KEYS */;
INSERT INTO `user_data_cat` VALUES (1,0,'estadocivil','Casado(a)',NULL,0,'Casado(a)','2016-06-05 13:14:09',0),(2,0,'estadocivil','Soltero(a)',NULL,0,'Soltero(a)','2016-06-05 13:15:38',0),(3,0,'estadocivil','Viudo(a)',NULL,0,'Viudo(a)','2016-06-05 13:16:19',0),(4,0,'estadocivil','Divorciado(a)',NULL,0,'Divorciado(a)','2016-06-05 13:16:56',0),(5,0,'estadocivil','Union libre',NULL,0,'Union libre','2016-06-05 13:17:09',0),(6,0,'nacionalidad','Mexicano',NULL,0,'Mexicano','2016-06-05 13:23:16',0),(7,0,'nacionalidad','Candiense',NULL,0,'Candiense','2016-06-05 13:23:16',0),(8,0,'nacionalidad','Estadounidense',NULL,0,'Estadounidense','2016-06-05 13:23:16',0),(9,0,'area','Organo Interno de Control',NULL,4,'Organo Interno de Control des','2016-06-29 16:27:33',0),(10,0,'area','Área de Auditoria Interna',NULL,1,'Área de Auditoria Interna','2016-07-05 18:40:18',0),(11,0,'area','AADMGP',NULL,3,'AADMGP','2016-06-29 16:26:43',0),(12,0,'area','AQyR',NULL,2,'AQyR','2016-06-29 16:12:11',0),(13,0,'cargo','Titular del OIC',NULL,1,'descripcion Titular del OIC','2016-07-01 12:02:01',0),(14,0,'cargo','Apoyo administrativo',NULL,2,'Apoyo administrativo','2016-06-05 13:23:16',0),(15,0,'nivel','Presidente',NULL,1,'Descripcion Presidente','2016-07-01 12:22:16',0),(16,0,'nivel','Vicepresidente',NULL,2,'Descripcion Vicepresidente','2016-07-01 12:21:53',0),(17,0,'nivel','Director general adjunto',NULL,3,'Director general adjunto','2016-06-05 13:23:16',0),(18,0,'nivel','Director de área',NULL,4,'Descripcion Director de área','2016-07-01 12:21:29',0),(19,0,'nivel','Subdirector de área',NULL,5,'Descripcion Subdirector de área','2016-07-01 12:21:36',0),(20,0,'nivel','Jefe de departamento',NULL,6,'Descripcion Jefe de departamento','2016-07-01 12:21:44',0),(21,0,'nivel','Operativo',NULL,7,'Descripcion Operativo','2016-07-01 12:22:32',0),(22,0,'nivel','Honorarios',NULL,8,'Descripcion Honorarios','2016-07-01 12:22:42',0),(23,0,'nivelstatus','Operativo',NULL,1,'Operativo','2016-06-05 13:23:16',0),(24,0,'nivelstatus','SPC',NULL,0,'descripcion','2016-06-05 13:23:16',0),(25,0,'nivelstatus','Nombramiento directo',NULL,0,'descripcion','2016-06-05 13:23:16',0),(26,0,'nivelcodpuesto','Código puesto 2',NULL,2,'Descripcion Código puesto 2','2016-07-01 13:07:29',0),(27,0,'nivelcodpuesto','Código puesto 1',NULL,1,'Descripcion Código puesto 1','2016-07-01 13:04:39',0),(28,0,'gradoestudio','Licenciatura',NULL,0,'Licenciatura','2016-06-05 13:23:16',0),(29,0,'gradoestudio','Maestría',NULL,0,'descripcion','2016-06-05 13:23:16',0),(30,0,'gradoestudio','Doctorado',NULL,0,'descripcion','2016-06-05 13:23:16',0),(31,0,'esc_intitucion','UNAM',NULL,2,'Descripcion UNAM','2016-07-01 13:23:40',0),(32,0,'esc_intitucion','IPN',NULL,3,'Descripcion IPN','2016-07-01 13:23:53',0),(33,0,'esc_intitucion','UAM',NULL,4,'Descripcion UAM','2016-07-01 13:24:03',0),(34,0,'esc_titulo','Doctorado',NULL,3,'Descripción Doctorado','2016-07-08 11:36:49',0),(35,0,'esc_titulo','Maestría',NULL,2,'Descripción Maestría','2016-07-08 11:36:36',0),(36,0,'esc_titulo','Licenciatura',NULL,1,'Descripción Licenciatura','2016-07-08 11:36:15',0),(37,0,'hab_habilidad','Conocimiento de las regulaciones estatales y federales',NULL,1,'Descripción  Conocimiento de las regulaciones estatales y federales','2016-07-01 14:10:25',0),(38,0,'hab_habilidad','Administración de información',NULL,2,'Descripción Administración de información','2016-07-01 14:10:57',0),(39,0,'hab_habilidad','Políticas y planeamiento',NULL,3,'Descripción Políticas y planeamiento','2016-07-01 14:11:05',0),(40,0,'cer_certificacion','ITIL',NULL,1,'ITIL','2016-06-05 13:23:16',0),(41,0,'cer_certificacion','COBIT 5',NULL,3,'descripcion','2016-06-05 13:23:16',0),(42,0,'cur_curso','Curso en XXXXXXXX',NULL,1,'Descripcion Curso en XXXXXXXX','2016-07-01 14:41:04',0),(43,0,'cur_curso','Curso en yyyyyyyy',NULL,2,'Descripcion Curso en yyyyyyyy','2016-07-01 14:40:57',0),(44,0,'cur_institucion','Institución XXXXXXXX',NULL,1,'descripcion Institución XXXXXXXX','2016-07-01 14:56:19',0),(45,0,'cur_institucion','Institución yyyyyyyy',NULL,2,'Descripcion Institución yyyyyyyy','2016-07-01 14:56:34',0),(46,0,'cur_institucion','Institución zzzzzzzz',NULL,3,'Descripcion Institución zzzzzzzz','2016-07-01 14:56:42',0),(47,0,'area_area','Administrativos',NULL,2,'Administrativos','2016-06-05 13:23:16',0),(48,0,'area_subarea','Administración de oficina',NULL,2,'Administración de oficina','2016-06-05 13:23:16',0),(49,0,'area_subarea','Administración de riesgo',NULL,3,'descripcion','2016-06-05 13:23:16',0),(50,0,'area_subarea','Administración de seguros y fianzas',NULL,4,'Administración de seguros y fianzas','2016-06-05 13:23:16',0),(51,0,'area_subarea','Administración General',NULL,5,'descripcion','2016-06-05 13:23:16',0),(55,0,'rol_permiso','Administrador',NULL,1,'Titular','2016-06-10 00:00:00',0),(57,0,'rol_permiso','Coordinador',NULL,3,'Coordinador','2016-06-10 00:00:00',0),(58,0,'rol_permiso','Jefe de grupo',NULL,4,'Jefe de grupo','2016-06-10 00:00:00',0),(60,0,'rol_permiso','Auditor',NULL,5,'Auditor','2016-06-10 00:00:00',0),(61,0,'rol_permiso','Titular',NULL,2,'Contralor','2016-06-10 00:00:00',0),(62,0,'rol_permiso','Consulta',NULL,NULL,'Consulta','2016-06-10 00:00:00',1),(63,0,'rol_permiso','Invitado',NULL,6,'Invitado','2016-06-10 00:00:00',0),(64,0,'area_area','Operativos',NULL,3,'descripcion','2016-06-10 00:00:00',0),(65,0,'esc_doc','Título',NULL,0,'Descripcion Título','2016-07-01 13:58:43',0),(70,0,'esc_doc','Cédula',NULL,0,'Descripcion Cédula','2016-07-01 13:58:49',0),(71,0,'esc_doc','Otro',NULL,0,'Comprobante de estudios','2016-07-08 13:19:19',0),(72,0,'esc_estatus','Terminado',NULL,0,'Terminado','2016-06-10 00:00:00',0),(73,0,'esc_estatus','En curso',NULL,0,'En curso','2016-06-10 00:00:00',0),(74,0,'esc_estatus','Otro',NULL,0,'Otro','2016-06-10 00:00:00',0),(77,0,'hab_nivel','Básico',NULL,0,'Básico','2016-06-14 00:00:00',0),(78,0,'hab_nivel','Intermedio',NULL,0,'Intermedio','2016-06-14 00:00:00',0),(79,0,'hab_nivel','Experto',NULL,0,'Experto','2016-06-12 00:00:00',0),(80,0,'area_tiempo','Menos de 1 año',NULL,0,'Menos de 1 año','2016-06-14 00:00:00',0),(81,0,'area_tiempo','De 1 a 3 años',NULL,0,'De 1 a 3 años','2016-06-14 00:00:00',0),(82,0,'area_tiempo','De 4 a 5 años',NULL,0,'De 4 a 5 años','2016-06-14 00:00:00',0),(83,0,'area_tiempo','De 6 a 8 años',NULL,0,'De 6 a 8 años','2016-06-14 00:00:00',0),(84,0,'area_tiempo','De 9 a 15 años',NULL,0,'De 9 a 15 años','2016-06-15 00:00:00',0),(85,0,'area_tiempo','Más de 15 años',NULL,0,'Más de 15 años','2016-06-15 00:00:00',0),(106,265,'area','proceso ejemplo',NULL,5,'descripcion','2016-06-29 21:42:18',1),(107,265,'area','proceso ejemplo',NULL,7,'descripcion','2016-06-30 13:27:29',1),(118,265,'area','proceso ejemplo',NULL,6,'descripcion','2016-06-30 14:01:08',1),(119,265,'area','proceso ejemplo',NULL,NULL,'descripcion','2016-06-30 14:26:26',1),(120,265,'area','proceso ejemplo',NULL,NULL,'descripcion','2016-06-30 14:26:38',1),(121,265,'area','proceso ejemplo',NULL,1,'descripcion','2016-06-30 14:30:39',1),(122,265,'proceso','proceso ejemplo 1',NULL,2,'descripcion','2016-06-30 14:49:57',1),(123,265,'proceso','proceso ejemplo 2 reset',NULL,3,'descripcion del proceso 2 reset','2016-06-30 14:35:09',1),(124,265,'proceso','proceso ejemplo 3',NULL,1,'descripcion','2016-06-30 14:35:29',1),(127,265,'area','proceso ejemplo',NULL,NULL,'descripcion','2016-06-30 19:47:45',1),(128,265,'proceso','proceso 1',NULL,NULL,'descripcion descripcion','2016-06-30 20:49:30',1),(129,265,'proceso','proceso 2',NULL,NULL,'descripcion 2','2016-06-30 20:49:44',1),(130,265,'proceso','proceso 3',NULL,NULL,'descripcion 3','2016-06-30 20:49:50',1),(131,265,'proceso','Adquiciciones',NULL,3,'descripcion Adquiciciones','2016-06-30 20:55:37',0),(132,265,'proceso','General',NULL,4,'descripcion General','2016-06-30 20:55:20',0),(133,265,'proceso','Estructura',NULL,2,'descripcion Estructura','2016-06-30 20:55:27',0),(134,265,'alcance','alcance generales reset','132',2,'Alcance 1 descripcion reset','2016-07-01 01:41:46',0),(137,265,'alcance','Alcance 2','133',1,'Descripcion alcance 2','2016-06-30 21:51:16',0),(138,265,'proceso','Estructuras Generales',NULL,1,'descripcion Estructuras Generales reset','2016-06-30 22:14:55',0),(139,265,'area','Area 1',NULL,NULL,'descripcion ejemplo','2016-07-01 11:44:59',1),(140,265,'cargo','cargo 1 reset',NULL,NULL,'descripcion 1 reset','2016-07-01 12:01:43',1),(141,265,'cargo','Nivel ejemplo',NULL,1,'descripcion','2016-07-01 12:18:40',1),(142,265,'nivel','Nivel ejemplo reset',NULL,9,'descripcion reset','2016-07-01 12:20:26',1),(143,265,'nivelstatus','Código puesto ejemplo',NULL,NULL,'descripcion','2016-07-01 13:04:19',1),(144,265,'nivelcodpuesto','Código puesto 3',NULL,3,'Descripcion Código puesto 3','2016-07-01 13:07:22',0),(145,265,'esc_intitucion','Intitucion ejemplo sec reset',NULL,1,'descripcion reset','2016-07-01 13:20:43',1),(146,265,'esc_intitucion','Intitucion ejemplo',NULL,NULL,'descripcion','2016-07-01 13:20:49',1),(147,265,'esc_intitucion','Intitucion ejemplo',NULL,NULL,'descripcion','2016-07-01 13:23:20',1),(148,265,'esc_titulo','Título ejemplo',NULL,1,'descripcion','2016-07-01 13:32:16',1),(149,265,'esc_doc','Título ejemplo',NULL,NULL,'descripcion','2016-07-01 13:58:17',1),(150,265,'cer_certificacion','Certificación ejemplo',NULL,2,'descripcion','2016-07-01 14:21:46',1),(151,265,'cer_certificacion','Certificación ejemplo',NULL,NULL,'descripcion','2016-07-01 14:26:48',1),(152,265,'cur_curso','Curso ejemplo 1',NULL,3,'descripcion reset','2016-07-01 14:40:29',1),(153,265,'cur_curso','Curso ejemplo',NULL,NULL,'descripcion','2016-07-01 14:40:42',1),(154,265,'cur_institucion','Institución ejemplo',NULL,NULL,'descripcion','2016-07-01 14:54:52',1),(155,265,'cur_institucion','Institución ejemplo',NULL,NULL,'descripcion','2016-07-01 14:54:59',1),(156,265,'cur_institucion','Institución ejemplo',NULL,4,'descripcion reset','2016-07-01 14:55:17',1),(157,265,'area_area','Área ejemplo reset',NULL,1,'descripcion reset','2016-07-01 15:15:27',1),(158,265,'area_area','Área ejemplo 2',NULL,NULL,'descripcion','2016-07-01 15:15:50',0),(159,265,'area_subarea','Sub área ejemplo reset',NULL,1,'descripcion reset','2016-07-01 15:21:40',1),(160,265,'area_subarea','Sub área ejemplo',NULL,NULL,'descripcion','2016-07-01 15:21:52',1),(161,265,'esc_doc','Título y cedula',NULL,NULL,'Cuenta con los 2 documentos','2016-07-08 13:18:43',0),(162,1,'vicepresidencia','CSADAC',NULL,NULL,'DescripcDCASDión','2016-07-14 17:13:44',1);
/*!40000 ALTER TABLE `user_data_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_data_cat2`
--

DROP TABLE IF EXISTS `user_data_cat2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_data_cat2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_creater` int(11) NOT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `des` varchar(100) DEFAULT NULL,
  `alcance` varchar(255) DEFAULT NULL,
  `orden` int(11) unsigned DEFAULT NULL,
  `deslarga` varchar(200) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `estatus` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_tmp_autoinc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_data_cat2`
--

LOCK TABLES `user_data_cat2` WRITE;
/*!40000 ALTER TABLE `user_data_cat2` DISABLE KEYS */;
INSERT INTO `user_data_cat2` VALUES (1,0,'estadocivil','Casado(a)',NULL,0,'Casado(a)','2016-06-05 13:14:09',0),(2,0,'estadocivil','Soltero(a)',NULL,0,'Soltero(a)','2016-06-05 13:15:38',0),(3,0,'estadocivil','Viudo(a)',NULL,0,'Viudo(a)','2016-06-05 13:16:19',0),(4,0,'estadocivil','Divorciado(a)',NULL,0,'Divorciado(a)','2016-06-05 13:16:56',0),(5,0,'estadocivil','Union libre',NULL,0,'Union libre','2016-06-05 13:17:09',0),(6,0,'nacionalidad','Mexicano',NULL,0,'Mexicano','2016-06-05 13:23:16',0),(7,0,'nacionalidad','Candiense',NULL,0,'Candiense','2016-06-05 13:23:16',0),(8,0,'nacionalidad','Estadounidense',NULL,0,'Estadounidense','2016-06-05 13:23:16',0),(9,0,'area','Organo Interno de Control',NULL,4,'Organo Interno de Control des','2016-06-29 16:27:33',0),(10,0,'area','Área de Auditoria Interna',NULL,1,'Área de Auditoria Interna','2016-07-05 18:40:18',0),(11,0,'area','AADMGP',NULL,3,'AADMGP','2016-06-29 16:26:43',0),(12,0,'area','AQyR',NULL,2,'AQyR','2016-06-29 16:12:11',0),(13,0,'cargo','Titular del OIC',NULL,1,'descripcion Titular del OIC','2016-07-01 12:02:01',0),(14,0,'cargo','Apoyo administrativo',NULL,2,'Apoyo administrativo','2016-06-05 13:23:16',0),(15,0,'nivel','Presidente',NULL,1,'Descripcion Presidente','2016-07-01 12:22:16',0),(16,0,'nivel','Vicepresidente',NULL,2,'Descripcion Vicepresidente','2016-07-01 12:21:53',0),(17,0,'nivel','Director general adjunto',NULL,3,'Director general adjunto','2016-06-05 13:23:16',0),(18,0,'nivel','Director de área',NULL,4,'Descripcion Director de área','2016-07-01 12:21:29',0),(19,0,'nivel','Subdirector de área',NULL,5,'Descripcion Subdirector de área','2016-07-01 12:21:36',0),(20,0,'nivel','Jefe de departamento',NULL,6,'Descripcion Jefe de departamento','2016-07-01 12:21:44',0),(21,0,'nivel','Operativo',NULL,7,'Descripcion Operativo','2016-07-01 12:22:32',0),(22,0,'nivel','Honorarios',NULL,8,'Descripcion Honorarios','2016-07-01 12:22:42',0),(23,0,'nivelstatus','Operativo',NULL,0,'Operativo','2016-06-05 13:23:16',0),(24,0,'nivelstatus','SPC',NULL,0,'descripcion','2016-06-05 13:23:16',0),(25,0,'nivelstatus','Nombramiento directo',NULL,0,'descripcion','2016-06-05 13:23:16',0),(26,0,'nivelcodpuesto','Código puesto 2',NULL,2,'Descripcion Código puesto 2','2016-07-01 13:07:29',0),(27,0,'nivelcodpuesto','Código puesto 1',NULL,1,'Descripcion Código puesto 1','2016-07-01 13:04:39',0),(28,0,'gradoestudio','Licenciatura',NULL,0,'Licenciatura','2016-06-05 13:23:16',0),(29,0,'gradoestudio','Maestría',NULL,0,'descripcion','2016-06-05 13:23:16',0),(30,0,'gradoestudio','Doctorado',NULL,0,'descripcion','2016-06-05 13:23:16',0),(31,0,'esc_intitucion','UNAM',NULL,2,'Descripcion UNAM','2016-07-01 13:23:40',0),(32,0,'esc_intitucion','IPN',NULL,3,'Descripcion IPN','2016-07-01 13:23:53',0),(33,0,'esc_intitucion','UAM',NULL,4,'Descripcion UAM','2016-07-01 13:24:03',0),(34,0,'esc_titulo','Doctorado',NULL,3,'Descripción Doctorado','2016-07-08 11:36:49',0),(35,0,'esc_titulo','Maestría',NULL,2,'Descripción Maestría','2016-07-08 11:36:36',0),(36,0,'esc_titulo','Licenciatura',NULL,1,'Descripción Licenciatura','2016-07-08 11:36:15',0),(37,0,'hab_habilidad','Conocimiento de las regulaciones estatales y federales',NULL,1,'Descripción  Conocimiento de las regulaciones estatales y federales','2016-07-01 14:10:25',0),(38,0,'hab_habilidad','Administración de información',NULL,2,'Descripción Administración de información','2016-07-01 14:10:57',0),(39,0,'hab_habilidad','Políticas y planeamiento',NULL,3,'Descripción Políticas y planeamiento','2016-07-01 14:11:05',0),(40,0,'cer_certificacion','ITIL',NULL,1,'ITIL','2016-06-05 13:23:16',0),(41,0,'cer_certificacion','COBIT 5',NULL,3,'descripcion','2016-06-05 13:23:16',0),(42,0,'cur_curso','Curso en XXXXXXXX',NULL,1,'Descripcion Curso en XXXXXXXX','2016-07-01 14:41:04',0),(43,0,'cur_curso','Curso en yyyyyyyy',NULL,2,'Descripcion Curso en yyyyyyyy','2016-07-01 14:40:57',0),(44,0,'cur_institucion','Institución XXXXXXXX',NULL,1,'descripcion Institución XXXXXXXX','2016-07-01 14:56:19',0),(45,0,'cur_institucion','Institución yyyyyyyy',NULL,2,'Descripcion Institución yyyyyyyy','2016-07-01 14:56:34',0),(46,0,'cur_institucion','Institución zzzzzzzz',NULL,3,'Descripcion Institución zzzzzzzz','2016-07-01 14:56:42',0),(47,0,'area_area','Administrativos',NULL,2,'Administrativos','2016-06-05 13:23:16',0),(48,0,'area_subarea','Administración de oficina',NULL,2,'Administración de oficina','2016-06-05 13:23:16',0),(49,0,'area_subarea','Administración de riesgo',NULL,3,'descripcion','2016-06-05 13:23:16',0),(50,0,'area_subarea','Administración de seguros y fianzas',NULL,4,'Administración de seguros y fianzas','2016-06-05 13:23:16',0),(51,0,'area_subarea','Administración General',NULL,5,'descripcion','2016-06-05 13:23:16',0),(55,0,'rol_permiso','Administrador',NULL,1,'Titular','2016-06-10 00:00:00',0),(57,0,'rol_permiso','Coordinador',NULL,3,'Coordinador','2016-06-10 00:00:00',0),(58,0,'rol_permiso','Jefe de grupo',NULL,4,'Jefe de grupo','2016-06-10 00:00:00',0),(60,0,'rol_permiso','Auditor',NULL,5,'Auditor','2016-06-10 00:00:00',0),(61,0,'rol_permiso','Titular',NULL,2,'Contralor','2016-06-10 00:00:00',0),(62,0,'rol_permiso','Consulta',NULL,NULL,'Consulta','2016-06-10 00:00:00',1),(63,0,'rol_permiso','Invitado',NULL,6,'Invitado','2016-06-10 00:00:00',0),(64,0,'area_area','Operativos',NULL,3,'descripcion','2016-06-10 00:00:00',0),(65,0,'esc_doc','Título',NULL,0,'Descripcion Título','2016-07-01 13:58:43',0),(70,0,'esc_doc','Cédula',NULL,0,'Descripcion Cédula','2016-07-01 13:58:49',0),(71,0,'esc_doc','Otro',NULL,0,'Descripcion Otro','2016-07-01 13:58:56',0),(72,0,'esc_estatus','Terminado',NULL,0,'Terminado','2016-06-10 00:00:00',0),(73,0,'esc_estatus','En curso',NULL,0,'En curso','2016-06-10 00:00:00',0),(74,0,'esc_estatus','Otro',NULL,0,'Otro','2016-06-10 00:00:00',0),(77,0,'hab_nivel','Básico',NULL,0,'Básico','2016-06-14 00:00:00',0),(78,0,'hab_nivel','Intermedio',NULL,0,'Intermedio','2016-06-14 00:00:00',0),(79,0,'hab_nivel','Experto',NULL,0,'Experto','2016-06-12 00:00:00',0),(80,0,'area_tiempo','Menos de 1 año',NULL,0,'Menos de 1 año','2016-06-14 00:00:00',0),(81,0,'area_tiempo','De 1 a 3 años',NULL,0,'De 1 a 3 años','2016-06-14 00:00:00',0),(82,0,'area_tiempo','De 4 a 5 años',NULL,0,'De 4 a 5 años','2016-06-14 00:00:00',0),(83,0,'area_tiempo','De 6 a 8 años',NULL,0,'De 6 a 8 años','2016-06-14 00:00:00',0),(84,0,'area_tiempo','De 9 a 15 años',NULL,0,'De 9 a 15 años','2016-06-15 00:00:00',0),(85,0,'area_tiempo','Más de 15 años',NULL,0,'Más de 15 años','2016-06-15 00:00:00',0),(106,265,'area','proceso ejemplo',NULL,5,'descripcion','2016-06-29 21:42:18',1),(107,265,'area','proceso ejemplo',NULL,7,'descripcion','2016-06-30 13:27:29',1),(118,265,'area','proceso ejemplo',NULL,6,'descripcion','2016-06-30 14:01:08',1),(119,265,'area','proceso ejemplo',NULL,NULL,'descripcion','2016-06-30 14:26:26',1),(120,265,'area','proceso ejemplo',NULL,NULL,'descripcion','2016-06-30 14:26:38',1),(121,265,'area','proceso ejemplo',NULL,1,'descripcion','2016-06-30 14:30:39',1),(122,265,'proceso','proceso ejemplo 1',NULL,2,'descripcion','2016-06-30 14:49:57',1),(123,265,'proceso','proceso ejemplo 2 reset',NULL,3,'descripcion del proceso 2 reset','2016-06-30 14:35:09',1),(124,265,'proceso','proceso ejemplo 3',NULL,1,'descripcion','2016-06-30 14:35:29',1),(127,265,'area','proceso ejemplo',NULL,NULL,'descripcion','2016-06-30 19:47:45',1),(128,265,'proceso','proceso 1',NULL,NULL,'descripcion descripcion','2016-06-30 20:49:30',1),(129,265,'proceso','proceso 2',NULL,NULL,'descripcion 2','2016-06-30 20:49:44',1),(130,265,'proceso','proceso 3',NULL,NULL,'descripcion 3','2016-06-30 20:49:50',1),(131,265,'proceso','Adquiciciones',NULL,3,'descripcion Adquiciciones','2016-06-30 20:55:37',0),(132,265,'proceso','General',NULL,4,'descripcion General','2016-06-30 20:55:20',0),(133,265,'proceso','Estructura',NULL,2,'descripcion Estructura','2016-06-30 20:55:27',0),(134,265,'alcance','alcance generales reset','132',2,'Alcance 1 descripcion reset','2016-07-01 01:41:46',0),(137,265,'alcance','Alcance 2','133',1,'Descripcion alcance 2','2016-06-30 21:51:16',0),(138,265,'proceso','Estructuras Generales',NULL,1,'descripcion Estructuras Generales reset','2016-06-30 22:14:55',0),(139,265,'area','Area 1',NULL,NULL,'descripcion ejemplo','2016-07-01 11:44:59',1),(140,265,'cargo','cargo 1 reset',NULL,NULL,'descripcion 1 reset','2016-07-01 12:01:43',1),(141,265,'cargo','Nivel ejemplo',NULL,1,'descripcion','2016-07-01 12:18:40',1),(142,265,'nivel','Nivel ejemplo reset',NULL,9,'descripcion reset','2016-07-01 12:20:26',1),(143,265,'nivelstatus','Código puesto ejemplo',NULL,NULL,'descripcion','2016-07-01 13:04:19',1),(144,265,'nivelcodpuesto','Código puesto 3',NULL,3,'Descripcion Código puesto 3','2016-07-01 13:07:22',0),(145,265,'esc_intitucion','Intitucion ejemplo sec reset',NULL,1,'descripcion reset','2016-07-01 13:20:43',1),(146,265,'esc_intitucion','Intitucion ejemplo',NULL,NULL,'descripcion','2016-07-01 13:20:49',1),(147,265,'esc_intitucion','Intitucion ejemplo',NULL,NULL,'descripcion','2016-07-01 13:23:20',1),(148,265,'esc_titulo','Título ejemplo',NULL,1,'descripcion','2016-07-01 13:32:16',1),(149,265,'esc_doc','Título ejemplo',NULL,NULL,'descripcion','2016-07-01 13:58:17',1),(150,265,'cer_certificacion','Certificación ejemplo',NULL,2,'descripcion','2016-07-01 14:21:46',1),(151,265,'cer_certificacion','Certificación ejemplo',NULL,NULL,'descripcion','2016-07-01 14:26:48',1),(152,265,'cur_curso','Curso ejemplo 1',NULL,3,'descripcion reset','2016-07-01 14:40:29',1),(153,265,'cur_curso','Curso ejemplo',NULL,NULL,'descripcion','2016-07-01 14:40:42',1),(154,265,'cur_institucion','Institución ejemplo',NULL,NULL,'descripcion','2016-07-01 14:54:52',1),(155,265,'cur_institucion','Institución ejemplo',NULL,NULL,'descripcion','2016-07-01 14:54:59',1),(156,265,'cur_institucion','Institución ejemplo',NULL,4,'descripcion reset','2016-07-01 14:55:17',1),(157,265,'area_area','Área ejemplo reset',NULL,1,'descripcion reset','2016-07-01 15:15:27',1),(158,265,'area_area','Área ejemplo 2',NULL,NULL,'descripcion','2016-07-01 15:15:50',0),(159,265,'area_subarea','Sub área ejemplo reset',NULL,1,'descripcion reset','2016-07-01 15:21:40',1),(160,265,'area_subarea','Sub área ejemplo',NULL,NULL,'descripcion','2016-07-01 15:21:52',1);
/*!40000 ALTER TABLE `user_data_cat2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_escolaridad`
--

DROP TABLE IF EXISTS `user_escolaridad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_escolaridad` (
  `id_esc` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `esc_instituto` varchar(100) DEFAULT '0',
  `esc_titulo` varchar(100) DEFAULT '0',
  `esc_ini_fecha` date DEFAULT NULL,
  `esc_fin_fecha` date DEFAULT NULL,
  `esc_anos` int(11) DEFAULT '0',
  `esc_doc` varchar(100) DEFAULT '0',
  `esc_estatus` varchar(100) DEFAULT '0',
  `date_created` datetime DEFAULT NULL,
  `estatus` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id_esc`),
  KEY `ix_tmp_autoinc` (`id_esc`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_escolaridad`
--

LOCK TABLES `user_escolaridad` WRITE;
/*!40000 ALTER TABLE `user_escolaridad` DISABLE KEYS */;
INSERT INTO `user_escolaridad` VALUES (1,425,'31','36','0000-00-00','0000-00-00',1,'65','72','2016-07-07 19:32:52',0),(2,425,'31','36','0000-00-00','0000-00-00',1,'65','72','2016-07-07 19:32:54',0),(3,432,'31','36','0000-00-00','0000-00-00',1,'65','72','2016-07-07 19:34:00',0),(4,433,'31','36','0000-00-00','0000-00-00',1,'65','72','2016-07-07 19:48:48',0),(5,435,'31','36','2015-01-01','2016-01-01',1,'65','72','2016-07-07 20:04:30',0),(6,435,'31','36','2015-01-01','2016-01-01',1,'65','72','2016-07-07 20:04:33',0),(7,436,'31','36','2015-01-02','2016-01-02',1,'65','72','2016-07-07 20:19:39',0),(8,437,'31','36','2015-01-01','2016-01-01',1,'65','72','2016-07-07 20:29:40',0),(9,438,'33','35','2015-01-10','2016-01-08',7,'65','74','2016-07-07 20:35:04',0),(10,438,'31','36','2014-12-31','2015-12-31',1,'65','72','2016-07-07 20:36:33',0),(11,439,'31','36','2015-01-01','2016-01-01',3,'65','72','2016-07-08 14:01:16',0),(12,445,'31','36','2015-01-01','2016-01-01',1,'65','72','2016-07-08 16:03:47',0),(13,446,'32','35','2015-01-01','2016-01-02',1,'65','72','2016-07-08 16:08:57',0),(14,446,'31','36','2015-01-01','2016-01-01',1,'65','72','2016-07-08 16:09:45',0),(15,446,'31','36','2015-01-02','2016-01-02',1,'65','72','2016-07-08 16:09:59',1),(16,446,'31','36','2015-01-01','2016-01-01',1,'65','72','2016-07-08 16:14:29',1),(17,446,'31','36','2015-01-02','2016-01-02',1,'65','72','2016-07-08 16:14:48',0);
/*!40000 ALTER TABLE `user_escolaridad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_experiencia`
--

DROP TABLE IF EXISTS `user_experiencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_experiencia` (
  `id_exp` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `exp_empresa` varchar(100) DEFAULT NULL,
  `exp_giro` varchar(100) DEFAULT NULL,
  `exp_puesto` varchar(100) DEFAULT NULL,
  `exp_ini_fecha` date DEFAULT NULL,
  `exp_fin_fecha` date DEFAULT NULL,
  `exp_actividades` varchar(1000) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `estatus` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id_exp`),
  KEY `ix_tmp_autoinc` (`id_exp`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_experiencia`
--

LOCK TABLES `user_experiencia` WRITE;
/*!40000 ALTER TABLE `user_experiencia` DISABLE KEYS */;
INSERT INTO `user_experiencia` VALUES (1,438,'Empresa r','Giro r','Puesto r','2015-01-03','2016-01-03','Resumen de activadesedti','2016-07-07 20:39:02',0),(2,438,'Empresa','Giro','Puesto','2015-01-01','2016-01-01','Resumen de activades','2016-07-07 20:39:10',1);
/*!40000 ALTER TABLE `user_experiencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_experiencia_area`
--

DROP TABLE IF EXISTS `user_experiencia_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_experiencia_area` (
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `area_area` varchar(100) DEFAULT NULL,
  `area_subarea` varchar(100) DEFAULT NULL,
  `area_tiempo` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `estatus` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id_area`),
  KEY `ix_tmp_autoinc` (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_experiencia_area`
--

LOCK TABLES `user_experiencia_area` WRITE;
/*!40000 ALTER TABLE `user_experiencia_area` DISABLE KEYS */;
INSERT INTO `user_experiencia_area` VALUES (1,438,'64','49','82','2016-07-07 20:40:42',0);
/*!40000 ALTER TABLE `user_experiencia_area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_habilidad`
--

DROP TABLE IF EXISTS `user_habilidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_habilidad` (
  `id_hab` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `hab_habilidad_des` varchar(255) NOT NULL,
  `hab_habilidad` varchar(50) NOT NULL,
  `hab_nivel` varchar(50) NOT NULL,
  `hab_anos` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `estatus` smallint(6) NOT NULL,
  PRIMARY KEY (`id_hab`),
  KEY `ix_tmp_autoinc` (`id_hab`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_habilidad`
--

LOCK TABLES `user_habilidad` WRITE;
/*!40000 ALTER TABLE `user_habilidad` DISABLE KEYS */;
INSERT INTO `user_habilidad` VALUES (1,440,'','39','78',2,'2016-07-08 14:13:07',0),(2,441,'','38','78',4,'2016-07-08 14:26:35',0),(3,444,'','38','78',3,'2016-07-08 14:42:13',0),(4,444,'','37','78',1,'2016-07-08 14:58:37',0),(5,444,'','37','77',5,'2016-07-08 14:58:46',1);
/*!40000 ALTER TABLE `user_habilidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cnbv_1607'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-18  2:34:36
