<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>

</head>
<body>
<h2>++在前</h2>
<?php 
$a=10;
$b = ++$a + ++$a;  //a: 11,12  , (11 + 12)

echo "a : $a <br>"; //12
echo "b : $b <br>"; //23
?>

<h2>++在後</h2>
<?php 
$a=10;
$b = $a++ + $a++;  //a: 11,12  , (11 + 12)

echo "a : $a <br>"; //12
echo "b : $b <br>"; //23
?>

<h2>位元運算</h2>
<?php 
echo 7 & 12, "<br>";
echo 7 | 12, "<br>";
 ?>		


<h2>字串</h2>
<?php 
$city = "桃園市";
$zone = "中壢區";
$road = "中央路1號";
$addr = $city . $zone . $road;
echo "地址: $addr<br>"
?>

<h2>error control @??</h2>
<?php 
$x = 10;
$y = 0;
echo @ ($x/$y) , "<br>";

?>
</body>
</html>