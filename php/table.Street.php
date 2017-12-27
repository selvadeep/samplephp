<?php

/*
 * Editor server script for DB table Street
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

// The following statement can be removed after the first run (i.e. the database
// table has been created). It is a good idea to do this to help improve
// performance.
$db->sql( "CREATE TABLE IF NOT EXISTS `Street` (
	`id` int(10) NOT NULL auto_increment,
	`streetname` varchar(255),
	`place` varchar(255),
	`city` varchar(255),
	`state` varchar(255),
	PRIMARY KEY( `id` )
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'Street', 'id' )
	->fields(
		Field::inst( 'streetname' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'place' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'city' ),
		Field::inst( 'state' )
			->validator( 'Validate::notEmpty' )
	)
	->process( $_POST )
	->json();
