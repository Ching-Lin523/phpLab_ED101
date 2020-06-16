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
        $max = 1;
        $min = 100;
        for($i=0 ; $i<10; $i++){
            $arr[] = rand(1,100);
            echo $arr[$i],'<br>';
            $total +=  $arr[$i];
            if($max <= $arr[$i]){
                $max = $arr[$i];
            }
            if($min >= $arr[$i]){
                $min = $arr[$i];
            }
        }
        echo '總和 : ', $total, '<br>';
        echo '最小值 : ', $min, '<br>';
        echo '最大值 : ', $max, '<br>';
    ?>
</body>
</html>