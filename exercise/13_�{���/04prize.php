<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prize</title>
</head>
<body>
    <?php
    $lottery = 0;
    $total = 0; 
    $i = 1;
    do{
        $lottery = rand(0,10);
        $total += $lottery*100;
        if($lottery>0){
            echo "第 $i 次彩球為：", $lottery, "<br>", "第 $i 次彩金為：", $lottery*100, "<br>";
        }
        $i++;
    }while($lottery > 0);
    echo "總彩金為： $total";
    ?>
</body>
</html>