<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02orangeIf</title>
</head>
<body>
<?php 
$level = $_GET["level"];
$kg = $_GET["kg"];

if($level == 1){
    if ($kg <= 40){
        echo "購買",$kg,"kg","<br>";
        echo $kg * 30 ,"元";
    }elseif ($kg <= 100){
        echo "購買",$kg,"kg","<br>";
        echo $kg * 25 ,"元";
    }else{
        echo "購買",$kg,"kg","<br>";
        echo $kg * 20 ,"元";
    }
}if($level == 2){
    if ($kg <= 40){
        echo "購買",$kg,"kg","<br>";
        echo $kg * 25 ,"元";
    }elseif ($kg <= 100 ){
        echo "購買",$kg,"kg","<br>";
        echo $kg * 20 ,"元";
    }else{
        echo "購買",$kg,"kg","<br>";
        echo $kg * 15 ,"元";
    }
}if($level == 3){
    if ($kg <= 40){
        echo "購買",$kg,"kg","<br>";
        echo $kg * 20 ,"元";
    }elseif ($kg <= 100){
        echo "購買",$kg,"kg","<br>";
        echo $kg * 15 ,"元";
    }else{
        echo "購買",$kg,"kg","<br>";
        echo $kg * 10 ,"元";
    }
}
?>
    
</body>
</html>
