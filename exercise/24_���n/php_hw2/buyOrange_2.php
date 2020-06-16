<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    $level = $_GET['level'];
    $kg = $_GET['kg'];
    if( $kg < 0){
        exit("請檢查您輸入的數量, 請<a href='buyOrange.html'>重新輸入</a>");
    }

    if($level==1){
        if($kg<40 ){
            $price = 30;
        }elseif($kg<100){
            $price = 25;
        }else{
            $price = 20;
        }
        
    }elseif($level==2){
        if($kg<40 && $kg>0){
            $price = 25;
        }elseif($kg<100){
            $price = 20;
        }else{
            $price = 15;
        }
        
    }elseif($level==3){
        if($kg<40 && $kg>0){
            $price = 20;
        }elseif($kg<100){
            $price = 15;
        }else{
            $price = 10;
        }
    }

    echo "購買:",$kg,"公斤","<br>";
    echo "一公斤{$price}元","<br>";
    echo "總共:",$kg*$price,"元","<br>";
    ?>
</body>
</html>