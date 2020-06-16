<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05Array</title>
</head>
<body>

<?php

// $max= 1;
// $min=100;
for($i=0; $i<10; $i++){
    $num[$i] = rand(1,100);
    echo $num[$i], ' ';
    $total+= $num[$i];
    $max = max($num);
    $min = min($num);

}


echo"<br>","總和: $total ";
echo"<br>","最大: $max ";
echo"<br>","最小: $min ";

?>

    
</body>
</html>