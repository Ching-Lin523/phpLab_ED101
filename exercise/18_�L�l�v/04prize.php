<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $b = 0;
    while(1){
    $a = rand(0,10);
    if($a == 0){
        echo" $a ";
        break;
    }
    $b = $b + $a;
    echo" $a ";
    }
    echo "<br>","總和:$b";
    ?>
</body>
</html>