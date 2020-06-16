<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <?php 
        $arr= [];
        $max = 0 ;
        $min = 0 ;
        for($i=1;$i<11;$i++){
            $arr[$i] = rand(1,100);
            if($max == 0 && $min == 0){
                $max = $arr[$i];
                $min = $arr[$i];
            }elseif($arr[$i] > $max){
                $max = $arr[$i];
            }elseif($arr[$i] < $min){
                $min = $arr[$i];
            }
            echo "第 $i 個數:",$arr[$i],"<br>";
        }
        echo "總和:", array_sum($arr) , "<br>";
        echo "最大值:", $max , "<br>";
        echo "最小值:", $min , "<br>";
    
    ?>
</body>
</html>