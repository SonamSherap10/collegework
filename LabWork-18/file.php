<?php
$file = fopen("data.txt", "w")or die("Could not open");

fwrite($file, "hello world");

fclose($file);

echo " file created successfully"
?>
