<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <?php
    $result = 0;
    $total = 0;
    $max = 0;
    $min = 100;
    $number = array();
    for($i=0;$i<=9;$i++){//次數
        $result = rand(1,100);
        $number[$i] = $result;
        echo $number[$i]," ";
        $total += $result;
        if ( $number[$i] > $max ){
            $max = $number[$i];
        }else if($number[$i] < $min){
            $min = $number[$i];
        }
           
    } 
    echo "<br>";
    echo "總額：", $total ;
    echo "<br>";
    echo  "最大值:",$max ;
    echo "<br>";
    echo  "最小值:",$min ;
    
  
    ?>
</body>
</html>