<?php
/*
Author: Jared Heeringa
Date: 09/23/2020
Class: CST126
Project: Activity #2
*/

$data_link = mysqli_connect("localhost", "root", "root", "activity1");
$sql_statement = "SELECT * FROM users";

$mysqlconn_query = mysqli_query($data_link, $sql_statement); //establish link and execute query

while($result = mysqli_fetch_array($mysqlconn_query)){
	echo $result["FIRST_NAME"] . " " . $result["LAST_NAME"] . "<br>";
}


mysqli_close($data_link);


?>