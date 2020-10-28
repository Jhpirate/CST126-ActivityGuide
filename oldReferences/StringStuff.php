<?php

sprintf("String {0}", 1);


$email = "Jaredheeringa@gmail.com";

//EXPLODE the email address into separate parts
$email_array = explode("@", $email); //explode would remove the @ symbol because its technically the separator
$email_array[0]; //jaredheeringa
$email_array[1]; //gmail.com


//IMPLODE
$email_recon = implode("@", $email_array); //reconstruct the email with a separator

//Strtok
strtok();

//sub string
$string = "This is a test string";
echo substr($string, 10, 14);

//String Comparision
$string1 = "Hello";
$string2 = "World";

echo strcmp($string1, $string2);
echo strnatcmp($string1, $string2); //String natural compare
echo strlen($string1);

//Replacing string within a larger string
strstr($string1, "H"); //will start string from the needle
