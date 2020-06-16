<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h2>lucky boll without 0</h2>

<?php
$total = 0;
$i = 0;
$d = 0;
do{
$d++;
echo "次數:", $d,"<br>";
$i = rand(0,10);
echo "號碼:",$i,"<br>";
$total += $i*100;
echo "總金額:",$total,"<br>";


}while($i > 0 && $d < 10)
// echo $total
    ?>

</body>
</html>