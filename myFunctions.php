<?php

function dbConnect(){

	//Azure SQL DB connection credentials (MySQL In App)
//	$host = "localhost";
//	$username = "azure";
//	$password = "6#vWHD_$";
//	$database = "cst126_activity_guide";
//	$db_port = "54916";


//	//local MAMP Database credentials
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "cst126_activity_guide";
		
	// Database connection
	$connection = mysqli_connect($host, $username, $password, $database, $db_port);
	
	// Check DB connection
	if (mysqli_connect_errno()){
  		echo "SQL Connection Failed: " . mysqli_connect_error();
  	exit("!!!Connection Failed!!!");
	}
	
	// Return the database connection object
	return $connection;
}


// These function were not explained. How do they work? 
// I wish the activity guide said, but it just basically encourages us to copy/paste them.
function saveUserId($id){
	session_start();
	$_SESSION["USER_ID"] = $id;
}

function getUserId(){
	session_start();
	return $_SESSION["USER_ID"];
}


?>
