<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prize</title>
</head>
<body>
    <?php
        $luckyBall = 0;
        $total = 0;
        $i = 1;
        do {
            $luckyBall = rand(0,10);
            $total += $luckyBall*100;
            if($luckyBall > 0){
                echo "第 $i 次彩球為:", $luckyBall,"<br>","第 $i 次彩金為:",$luckyBall*100,"<hr>";
            }
            $i++;
        } while ($luckyBall > 0);
        echo "總彩金為: $total";
    ?>
</body>
</html>