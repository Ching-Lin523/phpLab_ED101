<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prizeFor</title>
</head>
<body>
    <?php 
        $luckyBall = 0;
        $total = 0;
        for($i= 0; $i < 10 ; $i++){
            $luckyBall = rand(1,10);
            $total += $luckyBall*100;
            echo "第",$i+1,"次彩球為: $luckyBall","<br>","第",$i+1,"次彩金為:",$luckyBall*100,"<hr>";
        }
        echo "總共彩金為: $total 元";
    ?>
</body>
</html>