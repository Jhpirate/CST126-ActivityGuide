<?php
/*
Author: Jared Heeringa
Date: 09/28/2020
Class: CST126
Project: Activity #2
Description: php page to handle user registration
*/

$firstName = $_POST["fName"]; //Uses the 'name' field from html form
$lastName = $_POST["lName"];
$username = $_POST["username"];
$password = $_POST["password"];

$shouldAddToDB = true;

//check if first name is null or blank
if($firstName == "" || is_null($firstName)){
	echo("<p>First Name cannot be left blank</p>");
	$shouldAddToDB = false;
}

//check if last name is null or blank
if($lastName == "" || is_null($firstName)){
	echo("<p>Last Name cannot be left blank</p>");
	$shouldAddToDB = false;
}

//databse connection info
$data_link = mysqli_connect("localhost", "root", "root", "activity1");

//VERY BAD! SQL injection is possible in the current configuration. Don't know how to santize input right now, so this is how its going to be.
$sql_statement = "INSERT INTO users (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD) VALUES ('$firstName', '$lastName', '$username', '$password')"; 

//connect to datbase if no errors/blank fields
if($shouldAddToDB == true){
	mysqli_query($data_link, $sql_statement); //establish link and execute query
	mysqli_close(); //close the link
	
	//success message
	echo "<p><strong>Form Sucessfully Submitted.</strong></p>";
} else {
	//error
	echo "<p><strong>An error has occurred in submitting your form.</strong></p>";
}

?>
