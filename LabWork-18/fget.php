<?php
$file = fopen("search.txt", "r") or die("Can't open search.txt");

$content = "";
while (!feof($file)) {
    $line = fgets($file);
    if(trim($line) === 'stop') { 
        break;
    }
    $content .= $line;
}

fclose($file);


echo "Content of file is: " . $content;
?>
