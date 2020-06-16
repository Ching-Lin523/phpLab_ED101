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
        $i=0;
        do{
            $money = rand(0,10);
            $i++;
            // echo "摸彩金額 : ", $money*100, "元<br>";
            $total += $money*100;
            
        }while($money != 0);
        echo "摸彩次數 : ", $i++, "次<br>";
        echo "彩金總金額 : ", $total, '元';
    ?>
</body>
</html>