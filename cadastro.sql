/*
MySQL Data Transfer
Source Host: localhost
Source Database: mydb
Target Host: localhost
Target Database: mydb
Date: 2011/6/3 13:59:12
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for users
-- ----------------------------
CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(50) default NULL,
  `porte` varchar(1) default NULL,
  `especie` varchar(50) default NULL,
  `raca` varchar(50) default NULL,
  `idade` int(2) default NULL,
  `fotos` longblob NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `cadastro` VALUES ('1', 'Pepito', 'P', 'cachorro','yorkshire','1','imagem');
INSERT INTO `cadastro` VALUES ('2', 'Rex', 'M',  'cachorro','beagle','2','imagem');
INSERT INTO `cadastro` VALUES ('3', 'Audax', 'G',  'cachorro','rottweiller','3','imagem');
INSERT INTO `cadastro` VALUES ('4', 'Ala', 'G', 'cachorro','rottweiller','1','imagem');
INSERT INTO `cadastro` VALUES ('5', 'Carto', 'M', 'cachorro','beagle','4','imagem');
INSERT INTO `cadastro` VALUES ('7', 'Brem', 'P', 'cachorro','yorkshire','2','imagem');
INSERT INTO `cadastro` VALUES ('8', 'Manu', 'P', 'cachorro','yorshire','1','imagem');
INSERT INTO `cadastro` VALUES ('9', 'Bernardo', 'M', 'cachorro','beagle','2','imagem');
INSERT INTO `cadastro` VALUES ('10', 'Preto', 'G', 'cachorro','rottweiller','5','imagem');
INSERT INTO `cadastro` VALUES ('11', 'Madona', 'M', 'cachorro','beagle','3','imagem');
INSERT INTO `cadastro` VALUES ('12', 'Pipoca', 'P', 'cachorro','yorkshire','1','imagem');
INSERT INTO `cadastro` VALUES ('13', 'Zenite', 'G',  'cachorro','rottweiller','7','imagem');
