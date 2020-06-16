<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto ball</title>
</head>
<body>
    <?php
     $result = 0;
     $total = 0;
     $times = 0;
    for($i=1;$i<=10;$i++){ //次數

       $result = rand(0,10)*100;
       $times =$i;
       if($result == 0){
        // $times =$i;
        break;
       }// else if($result != 0){
        // $times = $i; }
      

        $total += $result ;
    }

    echo "摸彩總次數：", $times ;
    echo "<br>" ;
    echo "總金額：", $total ;
   
    ?>
</body>
</html>

       
            
   