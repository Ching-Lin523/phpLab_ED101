<?php

$sum = 0;
$max = 0;
$min = 100;

for($i=0; $i<10 ;$i++){   //取1-10個數

$random[] = rand(1,100);  //介於1-100
$newArray = array($random);  //印出陣列

echo $random[$i];
echo "<br>";


$sum += $random[$i];  

if($max <= $random[$i]){
    $max = $random[$i];
}
if($min >= $random[$i]){
    $min = $random[$i];
}


};

echo "總和： $sum  <br>";
echo "最大值： $max <br>";
echo "最小值： $min <br>";

?>
