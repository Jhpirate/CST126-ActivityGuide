<?php

function dbConnect(){

//	//local MAMP Database credentials
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "cst126_activity_guide";
		
	// Database connection
	$connection = mysqli_connect($host, $username, $password, $database);
	
	// Check DB connection
	if (mysqli_connect_errno()){
  		echo "SQL Connection Failed: " . mysqli_connect_error();
  	exit("!!!Connection Failed!!!");
	}
	
	// Return the database connection object
	return $connection;
}
