<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>

<?php

$sum = 0; //設變數

for($i=0; $i<10 ;$i++){

$randomsec = rand(0,10)*100;

echo $randomsec; //每筆亂數*100=每筆彩金
echo "<hr>";
 $sum += $randomsec;  
echo "<br>";
}

echo $sum;

?>

</body>
</html>