<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
</head>


<body id="body">

<?php

// if($_GET["rateNum"] == "1" && $_GET["weightNum"] < 40){
//     echo "30元/公斤";
// }elseif($_GET["rateNum"] == "1" && $_GET["weightNum"] < 100){
//     echo "25元/公斤";
// }elseif($_GET["rateNum"] == "1" && $_GET["weightNum"] > 100){
//     echo "20元/公斤";
// };

if($_GET["rateNum"] == "1"){
    if( $_GET["weightNum"] < 40){
        echo "30元/公斤";
        echo "<br>";
        echo "共計：",$_GET["weightNum"]*30,"元";
    }elseif($_GET["weightNum"] < 100){
        echo "25元/公斤";
        echo "<br>";
        echo "共計：",$_GET["weightNum"]*25,"元";
    }elseif($_GET["weightNum"] > 100){
        echo "20元/公斤";
        echo "<br>";
        echo "共計：",$_GET["weightNum"]*20,"元";
    }
}elseif($_GET["rateNum"] == "2"){
    if( $_GET["weightNum"] < 40){
        echo "25元/公斤";
        echo "<br>";
        echo "共計：",$_GET["weightNum"]*25,"元";
    }elseif($_GET["weightNum"] < 100){
        echo "20元/公斤";
        echo "<br>";
        echo "共計：",$_GET["weightNum"]*20,"元";
    }elseif($_GET["weightNum"] > 100){
        echo "15元/公斤";
        echo "<br>";
        echo "共計：",$_GET["weightNum"]*15,"元";
    }
}elseif($_GET["rateNum"] == "3"){
    if( $_GET["weightNum"] < 40){
        echo "20元/公斤";
        echo "<br>";
        echo "共計：",$_GET["weightNum"]*20,"元";
    }elseif($_GET["weightNum"] < 100){
        echo "15元/公斤";
        echo "<br>";
        echo "共計：",$_GET["weightNum"]*15,"元";
    }elseif($_GET["weightNum"] > 100){
        echo "10元/公斤";
        echo "<br>";
        echo "共計：",$_GET["weightNum"]*10,"元";
    }
};



?>



</body>
</html>