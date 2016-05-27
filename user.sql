CREATE TABLE IF NOT EXISTS `user` (
`m_id` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(100) NOT NULL,
`email` varchar(200) NOT NULL,
`password` varchar(100) NOT NULL,
PRIMARY KEY (`email`),
UNIQUE KEY `username` (`username`)
)