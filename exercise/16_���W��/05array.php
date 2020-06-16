<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
for($i=1;$i<=10;$i++){
    $array[$i]= rand(1,100);
    echo $array[$i],"<br>";
    $min=min($array);
    $max=max($array);
}
echo "總和為 : ",array_sum($array),"<br>";
echo "最小值 :",$min,"<br>";
echo "最大值 :",$max,"<br>";
?>
    
</body>
</html>
