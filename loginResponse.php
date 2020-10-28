<?php
require_once("utility.php");

$users = getAllUsers();
include('_getAllUsers.php');

foreach ($users as $user){
    echo $users[$user];
}
