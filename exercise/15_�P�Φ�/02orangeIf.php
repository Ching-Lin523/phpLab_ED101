<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $level = $_GET["level"];
        $weight = $_GET["weight"];

        if($level == 1){
            if($weight <= 40 && 0 <= $weight){
              echo $weight * 30,"元/公斤";
            }elseif($weight <= 100 && 40 < $weight){
              echo $weight * 25,"元/公斤";
            }elseif(100 < $weight){
              echo $weight * 20,"元/公斤";
            }else{
                echo "You enter wrong weight, please check your answer.";
            }
        }elseif($level == 2){
            if($weight <= 40 && 0 <= $weight){
              echo $weight * 25,"元/公斤";
            }elseif($weight <= 100 && 40 < $weight){
              echo $weight * 20,"元/公斤";
            }elseif(100 < $weight){
              echo $weight * 15,"元/公斤";
            }else{
                echo "You enter wrong weight, please check your answer.";
            }
        }elseif($level == 3){
            if($weight <= 40 && 0 <= $weight){
              echo $weight * 20,"元/公斤";
            }elseif($weight <= 100 && 40 < $weight){
              echo $weight * 15,"元/公斤";
            }elseif(100 < $weight){
              echo $weight * 10,"元/公斤";
            }else{
                echo "You enter wrong weight, please check your answer.";
            }
        };
    
    ?>
</body>
</html>