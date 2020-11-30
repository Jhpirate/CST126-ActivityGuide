<?php

echo "------------";
echo "SHOW_SOURCE"; //Highlights an entire php file (version 1)
echo "------------" . "<br/>";

show_source("whoAmI.php");

echo "<br>------------";
echo "HIGHLIGHT_FILE"; //Highlights an entire php file (version 2)
echo "------------" . "<br/>";

highlight_file("utility.php");

echo "<br>------------";
echo "HIGHLIGHT_STRING";
echo "------------" . "<br/>";

highlight_string("<?php echo \"hello World\" ?>");
