<?php
/*
Author: Jared Heeringa
Date: 09/13/2020
Class: CST126
Project: Activity #1
*/

// Original PHP code to output what the user entered
//
// echo "First Name is " . $_POST["fName"]; //fName (First Name) field from register.html form
// echo '<br>';
// echo "Last Name is " . $_POST["lName"]; //lName (Last Name) field from register.html form
// echo '<br>';
// echo "You are now registered.";

$firstName = $_POST["fName"]; //Uses the 'name' field from html form
$lastName = $_POST["lName"];

$data_link = mysqli_connect("localhost", "root", "root", "activity1");

//VERY BAD! SQL injection is possible in the current configuration. Don't know how to santize input right now, so this is how its going to be.
$sql_statement = "INSERT INTO users (FIRST_NAME, LAST_NAME) VALUES ('$firstName', '$lastName')"; 
mysqli_query($data_link, $sql_statement);

mysqli_close();

echo "<p><strong>Form Sucessfully Submitted.</strong></p>";

?>