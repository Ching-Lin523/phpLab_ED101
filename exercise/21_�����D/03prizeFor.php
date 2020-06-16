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
    for($i=1;$i<=10;$i++){ //次數
        echo  $result = rand(0,10)*100 ," ";
        $total += $result ;
   }
   echo "<br>";
    echo "總金額：", $total ;
   
    ?>
</body>
</html>