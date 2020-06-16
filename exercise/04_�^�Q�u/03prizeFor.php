<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>摸彩金 03prizeFor</title>
</head>
<body>
<h4 style="color:#008964;">摸彩金 : 有11顆彩球, 彩球面額為0-10之間, 可以摸彩10次, 印出其每次的摸彩金額及彩金總金額(單位:佰元)</h4>
<?php
    $total = 0;
    for($i=0 ; $i <= 9 ; $i++){
        $ball = rand(0,10);
        echo "摸彩金額 : " . $ball ."元" . "<br/>" . "<hr/>";
        $total += $ball;
    }
    echo "總金額:" . $total . "元";
?>

</body>
</html>