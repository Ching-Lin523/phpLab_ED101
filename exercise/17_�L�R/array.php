<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
<!-- 隨機產生10個介於1-~100之間的數放在陣列中, 
印出這10個數, 總和 , 最小值 , 最大值 -->

    <?php 
        $arr= [];
        // $max = 0 ;
        // $min = 0 ;
        $total=0;

        for($i=0;$i<10;$i++){
            $arr[$i] = rand(1,100);
            $total+=$arr[$i];
            // $min=min($arr);
            // $max=max($arr);
            // if($max == 0 && $min == 0){
            //     $max = $arr[$i];
            //     $min = $arr[$i];
            // }elseif($arr[$i] > $max){
            //     $max = $arr[$i];
            // }elseif($arr[$i] < $max){
            //     $min = $arr[$i];
            // }



            echo "第 $i 個數:",$arr[$i],"<br>";
        }
        $min=min($arr);
        $max=max($arr);
        echo "總和:", array_sum($arr) , "<br>";
        echo "最大值:", $max , "<br>";
        echo "最小值:", $min , "<br>";
    
    ?>
</body>
</html>