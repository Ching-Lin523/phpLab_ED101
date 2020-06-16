<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$total = 0;
for($i=0; $i<=10; $i++){
    $num = rand(0,10);
    $total = $total + $num*100;	
    echo "第", $i+1,"次彩球: ",$num,"<br>",
    "第", $i+1,"次彩金: ",$num*100,"<br>";
}
echo "總和 : $total 元";
 ?>
    
</body>
</html>
