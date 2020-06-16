<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $lotto =array(0,1,2,3,4,5,6,7,8,9,10);
    shuffle($lotto);
    for($i=0;$i<10;$i++){
        echo $lotto[$i]*100,"<br>";
    };
    echo "總獎金：",($lotto[0]+$lotto[1]+$lotto[2]+$lotto[3]+$lotto[4]+$lotto[5]+$lotto[6]+$lotto[7]+$lotto[8]+$lotto[9])*100;

    ?>
    
</body>
</html>