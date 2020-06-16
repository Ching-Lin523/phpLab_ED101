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
$i=0; 
    do{
        
        $i++;

        $j = rand(0,10);
        $prize = $j*100;
    
        echo '第', $i,'次抽取，','抽取號碼為：',$j,'。',' ','得到', $prize,'元',' ','累積獎金',  $total+=$prize,'元', '<br>';
        
        
    }while($j!=0);

?>

    
</body>
</html>