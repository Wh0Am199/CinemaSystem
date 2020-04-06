CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `address2` varchar(250) DEFAULT NULL,
  `city` varchar(250) NOT NULL,
  `region` varchar(250) NOT NULL,
  `postalcode` varchar(250) NOT NULL,
  `isAdmin` int(1) DEFAULT 0,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
