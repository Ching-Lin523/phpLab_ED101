<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>摸彩金 04prize</title>
</head>
<body>
<h4 style="color:#0082bc;">摸彩金 : 有11顆彩球, 彩球面額為0-10之間, 若摸到的彩球不為0,則可繼續摸彩,若摸到的彩球為0,則停止摸彩,並計算其摸彩次數及彩金總金額(單位:佰元) </h4>
<?php
    $total = 0;
    for($i=0 ; $i <= 9 ; $i++){
        $ball = rand(0,10);
        if($ball == 0){
            // echo "<b>遇到0停止摸彩</b>" . "<br/>";
            break;
        };
        echo "摸彩金額 : " . $ball ."元" . "<br/>". "<hr/>";
        $total += $ball;
    }echo "總金額:" . $total . "元";
?>

</body>
</html>