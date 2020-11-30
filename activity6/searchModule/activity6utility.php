<?php

function getUsersByFirstName($p_search) {
    require_once "myFunctions.php"; //DB connect code

    if(is_null($p_search) || $p_search == ""){
        return null;
        exit();
    }

    $sql_connection = dbConnect();
    $sql_statement = "SELECT * FROM users WHERE FIRST_NAME LIKE '%$p_search%'";

    $SQL_Result = mysqli_query($sql_connection, $sql_statement);

    $searchResults = array();
    $index = 0;

    while($result = mysqli_fetch_array($SQL_Result)) {
        $searchResults[$index] = array($result['ID'], $result['FIRST_NAME'], $result['LAST_NAME']);
        $index++;
    }

    mysqli_close(dbConnect());

    return $searchResults;
}