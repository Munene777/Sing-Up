CREATE TABLE `user` (
`id` INT( 50 ) NOT NULL AUTO_INCREMENT ,
`username` VARCHAR( 50 ) NOT NULL ,
`email` VARCHAR( 100 ) NOT NULL ,
`password` VARCHAR( 20 ) NOT NULL ,
`com_code` VARCHAR( 255 ) default NULL,
PRIMARY KEY ( `id` )
);
