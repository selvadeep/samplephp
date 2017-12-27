-- 
-- Editor SQL for DB table connections
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE IF NOT EXISTS `connections` (
	`id` int(10) NOT NULL auto_increment,
	`name` varchar(255),
	`cable_id` varchar(255),
	`address` varchar(255),
	`street` varchar(255),
	`place` varchar(255),
	`mobile_no` varchar(255),
	`email_id` varchar(255),
	`activation_date` date,
	`stb_no` varchar(255),
	`vc_model` varchar(255),
	`installation_charges` numeric(9,2),
	`installation_charge_paid` numeric(9,2),
	`rental_amount` numeric(9,2),
	`rental_paid` numeric(9,2),
	`connection_status` varchar(255),
	PRIMARY KEY( `id` )
);