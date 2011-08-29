CREATE TABLE IF NOT EXISTS `kisi` (
  `id` int(11) NOT NULL auto_increment,
  `ad` varchar(50) NOT NULL,
  `cep` varchar(25) default NULL,
  `ev` varchar(25) default NULL,
  `adres` text,
  `tarih` varchar(25) NOT NULL,
  `cep2` varchar(25) NOT NULL,
  `cep3` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `ad` (`ad`),
  KEY `cep` (`cep`),
  KEY `ev` (`ev`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8  ;