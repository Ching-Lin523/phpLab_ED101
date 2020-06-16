<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prizeFor</title>
</head>
<body>
    <?php
        $total=0;
        $min=101;
        $max=0;
        for($i=0;$i<10;$i++){
             $arr[$i] = rand(1,100); 
             $total += $arr[$i];
             echo "陣列內結果",$arr[$i],"<br>";
            /* if($i==0){
                 $min = $arr[$i];
                 $max = $arr[$i];
             }else {*/
                 if($min > $arr[$i]){
                    $min = $arr[$i];
                 }
                 if($max < $arr[$i]){
                    $max = $arr[$i];
                 }
            //  }
        }

        echo "<hr>";
       echo "陣列內總和",$total,"<br>";
       echo "陣列內最小值",$min,"<br>";
       echo "陣列內最大值",$max,"<br>";
       
    ?>
</body>
</html>