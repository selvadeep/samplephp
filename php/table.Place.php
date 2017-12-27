<?php

/*
 * Editor server script for DB table Place
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;


$db->sql( "CREATE TABLE IF NOT EXISTS `Place` (
	`id` int(10) NOT NULL auto_increment,
	`place` varchar(255),
	`city` varchar(255),
	`state` varchar(255),
    `country` varchar(255),
	PRIMARY KEY( `id` )
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'Place', 'id' )
	->fields(
		Field::inst( 'place' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'city' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'state' ),
        Field::inst( 'country' )
	)
	->process( $_POST )
	->json();
