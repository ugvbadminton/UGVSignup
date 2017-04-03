CREATE TABLE IF NOT EXISTS `member` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`first_name` varchar(30) NOT NULL,
`last_name` varchar(30) NOT NULL,
`email` varchar(30) NOT NULL,
`gender` varchar(30) NOT NULL,
`phone` varchar(100) NOT NULL,
`sid` varchar(30) NOT NULL,
`fbn` varchar(100) NOT NULL,
`oc` varchar(10) NOT NULL,
`school` varchar(30) NOT NULL,
`major` varchar(30) NOT NULL,
`com` varchar(30) NOT NULL,
`sua` varchar(10) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
