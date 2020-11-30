<?php

require_once "Batman.php";
require_once "Superman.php";

$batman = new Batman();
$superman = new Superman();
$iterationVar = 0;

while(!$superman->isDead() && !$batman->isDead()){
    echo "Round #" . strval((int)$iterationVar+1) . "<br>";
    $superman->Attack();


    $batman->Attack();

    if($superman->isDead()){
        echo "<b>Batman Won</b>";
    } elseif ($batman->isDead()){
        echo "<b>Superman Won</b>";
    }

    $iterationVar++;
}
