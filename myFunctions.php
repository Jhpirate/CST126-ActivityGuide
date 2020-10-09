<?php

function dbConnect(){
	
	//Database credentials
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "activity1";
		
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


// These function were not explained. How do they work? 
// I wish the activity guide said, but it just basically encorages us to copy/paste them.
function saveUserId($id){
	session_start();
	$_SESSION["USER_ID"] = $id;
}

function getUserId(){
	session_start();
	return $_SESSION["USER_ID"];
}


?>
