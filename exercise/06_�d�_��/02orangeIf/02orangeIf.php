<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>02orangeIf</title>
</head>
<body>
<?php
if($_GET["class"]=='no1' && $_GET["kg"]<=40){
    $price=30;
}elseif($_GET["class"]=='no1' && $_GET["kg"]>40 && $_GET["kg"]<=100){
    $price=25;
}elseif($_GET["class"]=='no1' && $_GET["kg"]>100){
    $price=20;
}elseif($_GET["class"]=='no2' && $_GET["kg"]<=40){
    $price=25;
}elseif($_GET["class"]=='no2' && $_GET["kg"]>40 && $_GET["kg"]<=100){
    $price=20;
}elseif($_GET["class"]=='no2' && $_GET["kg"]>100){
    $price=15;
}elseif($_GET["class"]=='no3' && $_GET["kg"]<=40){
    $price=20;
}elseif($_GET["class"]=='no3' && $_GET["kg"]>40 && $_GET["kg"]<=100){
    $price=15;
}elseif($_GET["class"]=='no3' && $_GET["kg"]>100){
    $price=10;
};
echo "小計：",$price*$_GET["kg"],"元";

?>
</body>
</html>