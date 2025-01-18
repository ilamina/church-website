<?php
	phpinfo();
function DisplayError($err) {
		echo "<div class=\"errorMessage\">ERROR: " . $err . "</div>" . PHP_EOL;
	}

	$conn						= NULL;			// Holds an active database connection
	$connection_hostName		= 'localhost';	// Database server (can be an IP address)
	$connection_databaseName	= 'rccg_db';		// Database name
	$connection_username		= 'rccg';		// User with access to the database
	$connection_password		= '****!';		// Password for the user
	$connection_type			= 'mysql';		// Database type (MySQL, MSSQL, Oracle, Etc.)




    //--------------------------------------------------
	// INITIALIZE OUTPUT
	//--------------------------------------------------
	// Set up variables to hold values for displaying
	// results.
	//--------------------------------------------------
	$lastID		= 0;	// Last-inserted auto-incremented ID
	$result		= NULL;	// Query results returned after executing an SQL statement
	$numRows	= 0;	// Number of rows (records) returned by an SQL query

	//--------------------------------------------------
	// CONNECT
	//--------------------------------------------------
	try {
		$conn = new PDO($connection_type
								. ':host=' . $connection_hostName . ';'
								. 'dbname=' . $connection_databaseName
								, $connection_username
								, $connection_password);
		
	} catch (PDOException $e) {
		DisplayError('Database Connection --- ' . $e->getMessage());
	}


?> 
