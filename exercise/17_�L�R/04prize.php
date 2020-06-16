<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
</head>


<body id="body">
<!-- 摸彩金 : 有11顆彩球, 彩球面額為0-10之間, 若摸到的彩球不為0,則可繼續摸彩,若摸到的彩球為0,則停止摸彩,並計算其摸彩次數及彩金總金額(單位:佰元)  -->

<?php
$total=0;
$ball=0;
$i=1;
do{
    $ball=rand(0,10);
    $total+=$ball*100;
   if($ball>0){
        echo "第", $i, "次摸彩金額為：", $ball, "佰元";
        echo "<br>";
   }
   $i++;
}while($ball>0);
echo "共計：",$total, "元";
?>






</body>
</html>