CREATE DATABASE registration;

CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(100) NOT NULL,
 `email` varchar(100) NOT NULL,
 `password` varchar(100) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;



CREATE TABLE `forsearch` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `movies` varchar(100) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

