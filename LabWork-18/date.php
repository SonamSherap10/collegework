<?php
$currentDate= date("y-m-d--H-i-s");
$currentDay = date("d");
$currentDayOfWeek = date("l");
$currentYear = date("Y");

echo "day of month: " . $currentDay . "\n";
echo "Formatted date: " . $currentDate . "\n";
echo "current day of week:" . $currentDayOfWeek . "\n";
echo "current year :" . $currentYear . "\n"; 
?>