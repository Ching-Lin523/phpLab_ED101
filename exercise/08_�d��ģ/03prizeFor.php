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
        $totalprice = 0;
        for($i= 0; $i < 10; $i++){
            $luckyBall = rand(1,10);
            $totalprice += $luckyBall*100;
            echo "第",$i+1,"次彩球為: $luckyBall","=>第",$i+1,"次彩金為:",$luckyBall*100,"<hr>";
        }
        echo "總共彩金為: $totalprice 元";
    ?>
</body>
</html>