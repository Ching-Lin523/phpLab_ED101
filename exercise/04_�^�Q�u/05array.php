<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>印出陣列總和/大、小值 05array.php</title>
</head>
<body>
<h4 style="color:green;">隨機產生10個介於1-~100之間的數放在陣列中, 
印出這10個數, 總和 , 最小值 , 最大值</h4>
<?php
    $total = 0;
    for($i=1 ; $i <= 10 ; $i++){
        $array[$i] = rand(1,100);
        echo $array[$i] . "<br>" . "<hr>";
        $min = min($array);
        $max = max($array);
    }echo "10個數的總和為 : " . array_sum($array) . "<hr>";
     echo "上方陣列中最<b><i>小</i></b>值是 : " . $min . "<hr>" ;
     echo "上方陣列中最<b><i>大</i></b>值是 : " . $max;
?>

</body>
</html>