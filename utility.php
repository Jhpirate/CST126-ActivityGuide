<?php

//Need the DB_Connect function from this file
require_once "myFunctions.php";

function getAllUsers() {

    $sql = "SELECT ID, FIRST_NAME, LAST_NAME FROM users";

    $dbConnectionQuery = mysqli_query(dbConnect(), $sql);

    $users = array();
    $index = 0;

    while($row = mysqli_fetch_array($dbConnectionQuery)){
        $users[$index] = array($row["ID"], $row["FIRST_NAME"], $row["LAST_NAME"]);
        $index++;
    }

    mysqli_close(dbConnect());

    return $users;
}
