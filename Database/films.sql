CREATE TABLE `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film_name` varchar(250) NOT NULL,
  `age_rating` int(11) DEFAULT NULL,
  `cinema_hall` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;