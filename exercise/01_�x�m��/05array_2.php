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
        $min = 101 ;
        for($i=0;$i<10;$i++){
            $arr[$i] = rand(1,100);  //28
            if($arr[$i] > $max){  //28
                $max = $arr[$i];
            }
            if($arr[$i] < $min){  //1
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