<?php

function DisplayError($err) {
    echo "<div class=\"errorMessage\">ERROR: " . $err . "</div>" . PHP_EOL;
}

$connection					= NULL;	
$connection_hostName = 'localhost';
$connection_databaseName = 'rccg_db';
$connection_username = 'rccg';
$connection_password = 'Ben123!';
$connection_type  = 'mysql';


//--------------------------------------------------
// INITIALIZE OUTPUT
//--------------------------------------------------
// Set up variables to hold values for displaying
// results.
//--------------------------------------------------
	$currentID	= 0;	// Last-inserted auto-incremented ID
	$result		= NULL;	// Query results returned after executing an SQL statement
	$numRows	= 0;	// Number of rows (records) returned by an SQL query

//--------------------------------------------------
// CONNECT
//--------------------------------------------------
// Establish a connection with the database to be
// able to execute queries. Enclose the attempt
// in a try/catch block to gracefully handle any
// exceptions.
//--------------------------------------------------
	try {
		// PDO connection syntax (remove square brackets):
		// PDO( [connection type]:host=[database server];dbname=[database name], [username], [password] );
		$connection = new PDO($connection_type
								. ':host=' . $connection_hostName . ';'
								. 'rccg_db=' . $connection_databaseName
								, $connection_username
								, $connection_password);

								
		//--------------------------------------------------
		// EXECUTE SQL
		//--------------------------------------------------
		// Build a prepared SQL statement. Search the
		// internet for "SQL prepared statement" to learn
		// more. Primary use is to help defend against SQL
		// injection attacks.
		//--------------------------------------------------
		// There are many alternative ways to set up an SQL
		// statement.  The following example uses named
		// parameters (:parameterName) which are replaced by
		// their respective values when the statement is
		// executed.
		//--------------------------------------------------
		// Another common way statements are prepared is
		// with question marks (?) representing values to be
		// replaced instead of named parameters.  The order
		// of the values given to the question marks is
		// vital since the prepared statement will replace
		// question marks with values in the same order it
		// receives them.
		//--------------------------------------------------
		$sql	= "select * from user where FirstName = :firstname and LastName = :lastname";	// Set up the SQL query
		$ps		= $connection->prepare($sql);	// Pass the SQL query to the connection to create a prepared statement
		
		// Bind SQL parameters (maybe you could see how to make this into a loop to generalize/automate it?)
		// Note: bindParam() method requires variables to be passed by reference and will not accept just a plain string value.
		//       For example, the following statement would be INVALID: $ps->bindParam(':firstName', 'John');
		$param_firstname = "Ben";
		$param_lastname = "Chris";
		$ps->bindParam(':firstname', $param_firstname);
		$ps->bindParam(':lastname', $param_lastname);
		
		// Execute SQL statement
		if ($ps->execute()) {
			$currentID	= $connection->lastInsertId(); // Helpful to know the id of the record just inserted to reference it if the SQL statement was INSERT INTO
			$result		= $ps->fetchAll(); // If records are returned from the SQL statement, they will all be listed in an associative array
			$numRows	= sizeof($result); // Number of records returned from SQL query
		} else {
			// PDO->errorInfo() is an array of error information; the third element (index 2)
			// contains the error message portion.
			// NOTE: It is BAD security practice to dump error messages to the screen;
			//       INSTEAD: Write the errors to a log file that is inaccessible to the web
			DisplayError('Database Execute --- ' . $ps->errorInfo()[2]);
		}
		
		//--------------------------------------------------
		// DISCONNECT
		//--------------------------------------------------
		// Free up the connection resources.
		//--------------------------------------------------
		$connection = NULL;
		
	} catch (PDOException $e) {
		// A database error of some kind occurred; NOTE: this will only catch a PDOException, no other type of error.
		// NOTE: It is BAD security practice to dump error messages to the screen;
		//       INSTEAD: Write the errors to a log file that is inaccessible to the web
		DisplayError('Database Connection --- ' . $e->getMessage());
	}

	?>