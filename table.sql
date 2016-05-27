CREATE TABLE IF NOT EXISTS `member` (
`username` varchar(30) NOT NULL,
`password` varchar(120) NOT NULL,
`email` varchar(150) NOT NULL,
`name` varchar(50) NOT NULL,
`dob` varchar(21) NOT NULL,
`profession` varchar(120) NOT NULL,
`gender` varchar(20) NOT NULL,
`address` text NOT NULL,
`image_url` varchar(250) NOT NULL,
`contact_no` varchar(150) NOT NULL,
`about_me` text NOT NULL,
PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;