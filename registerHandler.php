<?php
/*
Author: Jared Heeringa
Date: 00/00/0000
Class: CST126
Project: Activity #3
Description: php page to handle user registration
*/

require "myFunctions.php"; //Data connection is necessary or we fail

$firstName = $_POST["fName"]; //Uses the 'name' field from html form
$lastName = $_POST["lName"];
$username = $_POST["username"];
$password = $_POST["password"];

// Boolean gets set to false if data validation fails. SQL connection not initiated if false.
$shouldAddToDB = true;

// Check if first name is null or blank
if ($firstName == "" || is_null($firstName)) {
    echo("<p>First Name cannot be left blank</p>");
    $shouldAddToDB = false;
}

// Check if last name is null or blank
if ($lastName == "" || is_null($firstName)) {
    echo("<p>Last Name cannot be left blank</p>");
    $shouldAddToDB = false;
}

// Databse connection link
$data_link = dbConnect();

//VERY BAD! SQL injection is possible in the current configuration. Don't know how to sanitize input right now, so this is how its going to be.
$sql_statement = "INSERT INTO users (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD) VALUES ('$firstName', '$lastName', '$username', '$password')";

// Connect to database if no errors/blank fields
if ($shouldAddToDB == true) {
    mysqli_query($data_link, $sql_statement); //establish link and execute query
    mysqli_close(); //close the link

    echo "<p><strong>Form Successfully Submitted.</strong></p>"; //success message
} else {
    echo "<p><strong>An error has occurred in submitting your form.</strong></p>"; //error message
}

?>
