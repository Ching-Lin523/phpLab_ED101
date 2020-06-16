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
    for($i=0;$i<11;$i++){
    $a = rand(0,10);
    $b = $b + $a;
    echo" $a ";
    }
    echo "<br>","總和:$b";
    ?>
    
</body>
</html>