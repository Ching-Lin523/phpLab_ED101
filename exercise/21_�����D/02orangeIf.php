<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orange store</title>
</head>
<body>
<?php 
echo "等級：", $_GET["leavel"],"<br>";
echo "公斤數：", $_GET["kg"],"<br>";


if ($_GET["leavel"] == 1){
    if($_GET["kg"] <= 40){
        echo "價格為：",$_GET["kg"]*30;
    }elseif($_GET["kg"] > 40 && $_GET["kg"] <= 100){
        echo "價格為：",$_GET["kg"]*25;
    }elseif($_GET["kg"] > 100){
        echo "價格為：",$_GET["kg"]*20;
    }

}
if ($_GET["leavel"] == 2){
    if($_GET["kg"] <= 40){
        echo "價格為：",$_GET["kg"]*25;
    }elseif($_GET["kg"] > 40 && $_GET["kg"] <= 100){
        echo "價格為：",$_GET["kg"]*20;
    }elseif($_GET["kg"] > 100){
        echo "價格為：",$_GET["kg"]*15;
    }
}

if ($_GET["leavel"] == 3){
    if($_GET["kg"] <= 40){
        echo "價格為：",$_GET["kg"]*20;
    }elseif($_GET["kg"] > 40 && $_GET["kg"] <= 100){
        echo "價格為：",$_GET["kg"]*15;
    }elseif($_GET["kg"] > 100){
        echo "價格為：",$_GET["kg"]*10;
    }
}
?>




</body>
</html>