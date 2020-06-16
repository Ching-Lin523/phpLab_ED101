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

    if($level==1){
        if($kg<40 && $kg>0){
            echo "購買:",$kg,"公斤","<br>";
            echo "一公斤30元","<br>";
            echo "總共:",$kg*30,"元","<br>";
        }elseif($kg>=40 && $kg<100){
            echo "購買:",$kg,"公斤","<br>";
            echo "一公斤25元","<br>";
            echo "總共:",$kg*25,"元","<br>";
        }elseif($kg>=100){
            echo "購買:",$kg,"公斤","<br>";
            echo "一公斤20元","<br>";
            echo "總共:",$kg*20,"元","<br>";
        }elseif($kg<=0){
            echo "請檢查您輸入的數量";
        }
        
    }elseif($level==2){
        if($kg<40 && $kg>0){
            echo "購買:",$kg,"公斤","<br>";
            echo "一公斤25元","<br>";
            echo "總共:",$kg*25,"元","<br>";
        }elseif($kg>=40 && $kg<100){
            echo "購買:",$kg,"公斤","<br>";
            echo "一公斤20元","<br>";
            echo "總共:",$kg*20,"元","<br>";
        }elseif($kg>=100){
            echo "購買:",$kg,"公斤","<br>";
            echo "一公斤15元","<br>";
            echo "總共:",$kg*15,"元","<br>";
        }elseif($kg<=0){
            echo "請檢查您輸入的數量";
        }
        
    }elseif($level==3){
        if($kg<40 && $kg>0){
            echo "購買:",$kg,"公斤","<br>";
            echo "一公斤20元","<br>";
            echo "總共:",$kg*20,"元","<br>";
        }elseif($kg>=40 && $kg<100){
            echo "購買:",$kg,"公斤","<br>";
            echo "一公斤15元","<br>";
            echo "總共:",$kg*15,"元","<br>";
        }elseif($kg>=100){
            echo "購買:",$kg,"公斤","<br>";
            echo "一公斤10元","<br>";
            echo "總共:",$kg*10,"元","<br>";
        }elseif($kg<=0){
            echo "請檢查您輸入的數量";
        }
    }
    ?>
</body>
</html>