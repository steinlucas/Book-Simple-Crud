CREATE DATABASE  IF NOT EXISTS `estante` ;
USE `estante`;

--
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `autor`;
CREATE TABLE `autor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
--
-- Dumping data for table `autor`
--
INSERT INTO `autor` VALUES (1,'Andre Milani','andremilani@email.com','www.andremilani.com.br'),(2,'Yuri Marx Pereira Gomes','yuri@email.com','www.yurigomes.com.br'),(3,'Maurício Samy Silva','samysilva@email.com','www.mauriciosilva.com.br'),(4,'Ken WILLIAMSON','ken@email.com','www.ken.com.br'),(5,'Juliano NIEDERAUER','juliano@email.com','www.juliano.com.br'),(6,'Prabhakar METLAPALLI','metlapalli@email.com','www.metlapalli.com.br');

--
-- Table structure for table `editora`
--

DROP TABLE IF EXISTS `editora`;
CREATE TABLE `editora` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);
--
-- Dumping data for table `editora`
--

INSERT INTO `editora` VALUES (1,'Novatec','Sao Paulo','11 212125454','novatec@email.com','www.novatec.com.br'),(2,'Ciência Moderna','Rio de Janeiro','21 320145454','cienciamoderna@email.com','www.cienciamoderna.com.br'),(3,'LTC','Rio de Janeiro','21 35489999','ltc@email.com','www.editoraltc.com.br');

--
-- Table structure for table `livro`
--

DROP TABLE IF EXISTS `livro`;
CREATE TABLE `livro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `isbn` varchar(45) NOT NULL,
  `numpaginas` int NOT NULL,
  `numedicao` int NOT NULL,
  `anopublicacao` int NOT NULL,
  `id_editora` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_codEdotira_codlivro_idx` (`id_editora`),
  CONSTRAINT `fk_livro_1` FOREIGN KEY (`id_editora`) REFERENCES `editora` (`id`)
);
--
-- Dumping data for table `livro`
--

INSERT INTO `livro` VALUES (1,'Construindo aplicações web com PHP e MySQL','12345',356,1,2010,1),(2,'Java na web com JSF, Spring, Hibernate e Netbeans 6: de universitários a\ndesenvolvedores','1241214',123,2,2008,2),(3,'Ajax com jQuery: requisições Ajax com a simplicidade de jQuery','221015',152,1,2009,1),(4,'Introdução ao AngularJS','212152',158,1,2015,1),(5,'PHP para quem conhece PHP: recursos avançados para a criação de websites\ndinâmicos','221539',450,4,2013,1),(6,'Páginas JavaServer (JSP)','754786',320,1,2010,3);

--
-- Table structure for table `livro_autor`
--

DROP TABLE IF EXISTS `livro_autor`;
CREATE TABLE `livro_autor` (
  `id_livro` int NOT NULL,
  `id_autor` int NOT NULL,
  PRIMARY KEY (`id_autor`,`id_livro`),
  KEY `fk_livro_autor_2_idx` (`id_livro`),
  CONSTRAINT `fk_livro_autor_1` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id`),
  CONSTRAINT `fk_livro_autor_2` FOREIGN KEY (`id_livro`) REFERENCES `livro` (`id`)
);
--
-- Dumping data for table `livro_autor`
--

INSERT INTO `livro_autor` VALUES (1,1),(2,2),(3,3),(4,4),(5,5),(6,6);

--
