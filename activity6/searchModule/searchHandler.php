<html lang="en">
<head>
    <title>Login Response</title>
    <style>
        table, th, td { border: solid 1px black; border-collapse: collapse;}
    </style>
</head>
<body>

<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    <?php

    include "activity6utility.php";

    $searchPattern = $_POST['searchBar'];

    $searchResults = getUsersByFirstName($searchPattern);
    //$users = getAllUsers();

    if(!is_null($searchResults)){
        for ($x = 0; $x < count($searchResults); $x++)
        {
            echo "<tr>";

            echo "<td>" . $searchResults[$x][0] . "</td>";
            echo "<td>" . $searchResults[$x][1] . "</td>";
            echo "<td>" . $searchResults[$x][2] . "</td>";

            echo "</tr>";
        }
    } else {
        echo "<tr>";
        echo "<td colspan='3'>No Results Found</td>";
        echo "</tr>";
    }

    ?>
</table>

<?php

echo "<p>You searched for: " . $searchPattern . "</p>";

?>

<a href="search.html">Return to Search</a>

</body>
</html>