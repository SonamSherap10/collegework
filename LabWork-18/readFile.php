<?php
$file = fopen("data.txt", "r") or die("Can't open data.txt");

$content = fread($file, filesize("data.txt")) or die("Can't read data.txt");

fclose($file);

echo "Content of file is: " . $content;
?>
