<?php

require_once "myFunctions.php"; //DB connect code

function getUsersByFirstName($p_search) {

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

function insertUsers() {
    // DB connection info for oop version of connection
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "cst126_activity_guide";

    // Create connection
    $connection = new mysqli($host, $username, $password, $database);

    // Check connection
    if($connection->connect_error) {
        die("Connection Error: " . $connection->connect_error);
    }

    // Prepare and bind
    $sql_statement = $connection->prepare("INSERT INTO users (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD) VALUES (?, ?, ?, ?)");
    $sql_statement->bind_param("ssss", $firstName, $lastName, $username, $password);

    // Bind the parameters
    $firstName = "James";
    $lastName = "Smith";
    $username = "JSmith123";
    $password = "Password";

    //execute the query
    $sql_statement->execute();

    //Confirm success
    echo "Records created successfully";

    //Close execution and data connection
    $sql_statement->close();
    $connection->close();


    //$userArray = array(array("John", "Smith", "JSmith123", "123"), array("Homer", "Simpson", "HSimpson", "homerRox"));




}