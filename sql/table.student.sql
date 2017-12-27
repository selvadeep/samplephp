-- 
-- Editor SQL for DB table student
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE IF NOT EXISTS `student` (
	`id` int(10) NOT NULL auto_increment,
	`name` varchar(255),
	`age` numeric(9,2),
	`school` varchar(255),
	PRIMARY KEY( `id` )
);