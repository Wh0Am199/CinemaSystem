CREATE TABLE `reservations` (
  `reservationid` int(11) NOT NULL AUTO_INCREMENT,
  `film_name` varchar(250) NOT NULL,
  `cinema_hall` int(11) NOT NULL,
  `date` varchar(250) NOT NULL,
  `show_time` varchar(250) NOT NULL,
  `seats` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`reservationid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
SELECT * FROM cinemasystemdb.reservations;