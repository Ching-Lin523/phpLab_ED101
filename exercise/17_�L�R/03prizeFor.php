<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
</head>


<body id="body">
<!-- 摸彩金 : 有11顆彩球, 彩球面額為0-10之間, 可以摸彩10次, 印出其每次的摸彩金額及彩金總金額(單位:佰元) -->

<?php
$total=0;
$ball=0;
for($i=0;$i<10;$i++){
    $ball=rand(0,10);
    $total+=$ball*100;
    echo "第", $i+i, "次摸彩金額為：", $ball, "佰元";
    echo "<br>";
};
echo "共計：",$total, "元";

?>





</body>
</html>