<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02orangeIf 橘子的單價和等級的關係</title>
</head>
<body>
<?php

$lv = $_GET["lv"];
$kg = $_GET["kg"];

if($lv == 1){
    if ($kg <= 40){
        echo $kg * 30 ."元/公斤";
    }elseif ($kg > 40){
        echo $kg * 25 ."元/公斤";
    }elseif ($kg > 100){
        echo $kg * 20 ."元/公斤";
    }
}if($lv == 2){
    if ($kg <= 40){
        echo $kg * 25 ."元/公斤";
    }elseif ($kg > 40){
        echo $kg * 20 ."元/公斤";
    }elseif ($kg > 100){
        echo $kg * 15 ."元/公斤";
    }
}if($lv == 3){
    if ($kg <= 40){
        echo $kg * 20 ."元/公斤";
    }elseif ($kg > 40){
        echo $kg * 15 ."元/公斤";
    }elseif ($kg > 100){
        echo $kg * 10 ."元/公斤";
    }
}
?>

</body>
</html>
