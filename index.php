<?php 
echo"hello world <br>";
$lenght = 20;
$breadth = 10;

$area = $lenght * $breadth;
echo "the area of  the rectangle is " . $area;

$a = 10;
$b = 20;
echo "<br>Unswapped valuesof a is: $a and b is  $b";


$a= $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;

echo "<br>Swapped valuesof a is: $a and b is  $b";


$x = 10;
$y = 5;
if ($x > 5 && $y < 10) {
    echo "Both conditions are true. <br>";
} else {
    echo "At least one condition is false. <br>";
}

$day = 3; // Assuming 1 for Monday, 2 for Tuesday, and so on.
switch ($day) {
    case 1:
        echo "Monday <br>";
        break;
    case 2:
        echo "Tuesday <br>";
        break;
    case 3:
        echo "Wednesday <br>";
        break;
    case 4:
        echo "Thursday <br>";
        break;
    case 5:
        echo "Friday <br>";
        break;
    case 6:
        echo "Saturday <br>";
        break;
    case 7:
        echo "Sunday <br>";
        break;
    default:
        echo "Invalid day <br>";
}


$num = 1;
echo "First 10 natural numbers: ";
while ($num <= 10) {
    echo $num . " ";
    $num++;
}
echo "<br>";

$countries = array("USA", "Canada", "UK", "France", "Germany");
echo "Countries: ";
for ($i = 0; $i < count($countries); $i++) {
    echo $countries[$i] . " ";
}
echo "<br>";

echo "Countries (using foreach): ";
foreach ($countries as $country) {
    echo $country . " ";
}
echo "<br>";

?>