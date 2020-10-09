<?php
/*
Author: Jared Heeringa
Date: 00/00/0000
Class: CST126
Project: Activity #3
Description: php page to handle login info
*/

require "myFunctions.php"; //Data connection is necessary or we fail

// Get data from HTML form and store in variables
$username = $_POST["username"];
$password = $_POST["password"]; 

// Boolean gets set to false if data validation fails. SQL connection not initiated if false.
$shouldAddToDB = true;

// Make sure data is not null/blank. If so, dont execute sql query.
// Made unnecessary by adding required to html forms
if($username == "" || is_null($username)){
	echo("<p>Username cannot be left blank</p>");
	$shouldAddToDB = false;
} elseif($password == "" || is_null($password)){
	echo("<p>Password cannot be left blank</p>");
	$shouldAddToDB = false;
}

// Data link to SQL server
$data_link = dbConnect(); //Get the data connection from myFunction.php

// SQL statement to check if user exists
$sql_statement = "SELECT * FROM users WHERE USERNAME='$username' AND PASSWORD='$password'";

// If not null/blank, then we can look up the user in the database
if($shouldAddToDB == true){
	$result = mysqli_query($data_link, $sql_statement);
	
	// 1 record exits, there is only one user with the username and password. Allow them to login
	// 0 record means username/password combo doesn't exist
	// 2 records means 2 users have the same username/password combo
	if(mysqli_num_rows($result) == 1){
		//echo("<h1><strong>Login Successful</strong></h1>"); //old echo failed login
		
		$row = $result->fetch_assoc();	// Read the Row from the Query
		saveUserId($row["ID"]);		// Save User ID in the Session

		include('loginResponse.php'); //php page to show user sucessfully logged in
	} elseif(mysqli_num_rows($result) == 0){
		//echo("<p><strong>Login Failed</strong></p>");
		$message = "Login Failed!"; //error message displayed on php page
		include('loginFailed.php'); //php page to show user error logging in
	} elseif(mysqli_num_rows($result) > 1){
		//echo("<p><strong>There are multiple users registered</strong></p>");
		$message = "Login failed: There are multiple users registered";
		include('loginFailed.php');
	} else {
		mysqli_connect_error();
	}
	
	// Close the data connection
	mysqli_close($data_link);
	
}

?>
