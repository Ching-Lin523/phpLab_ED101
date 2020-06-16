<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05array</title>
</head>
<body>
    <?php
        $sum=0;
        $max=1;
        $min=100;
        for($i=0;$i<10;$i++){
            $array[$i]=rand(1,100);
            $sum+=$array[$i];
            if($array[$i]>=$max){
                $max=$array[$i];
            }
            if($array[$i]<=$min){
                $min=$array[$i];
            }

        };
        echo implode(",",$array);
        echo "<br>","總合： ",$sum;
        echo "<br>","最大值： ",$max;
        echo "<br>","最小值： ",$min;
    ?>
    
</body>
</html>