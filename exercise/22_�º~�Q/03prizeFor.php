<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $total=0;
        for($i=1 ;$i<=10;$i++){
            $money = rand(0,10);
            echo "摸彩金額 : ", $money*100,"元<br>";
            $total += $money*100;
        }
        echo "彩金總金額 : ", $total,'元';
    ?>
</body>
</html>