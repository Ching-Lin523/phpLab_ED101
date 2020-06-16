<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array = [];
    $total = 0;
    $max = 0;
    $min = 101;
    for($i=0; $i < 10; $i++){
       
       $a = rand(1,100);
       $total = $total +$a;
       $array[$i] = $a;
     
       echo "$array[$i]","<br>";
        
       if($array[$i]>$max){
         $max = $array[$i];
       }
       if($array[$i]<$min){
        $min = $array[$i];
      }

    }
       
        echo "total : $total","&nbsp&nbsp";
        echo "max : $max","&nbsp&nbsp";
        echo "min : $min","&nbsp";
    ?>
</body>
</html>