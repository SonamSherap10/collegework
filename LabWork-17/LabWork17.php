<?php

$std = ["sonam"=>100,"aanand"=>30,"gorlock"=>40,"mausama"=>60];
$total=0;
$count=0;
foreach ($std as $key => $value) {
$total = $total + $value;
$count++;
echo"the total marks obtained by $key is $value <br>";
}
$average = $total/$count;
echo"the average marks is $average";
?>

<?php  
 function calculateCircle($radius){
  $area = 3.1414*$radius*$radius;
  echo"<br>the area of circle is $area";
}

calculateCircle(10);
calculateCircle(45);
?>

<?php



?>

