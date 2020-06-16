<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $lotto =array(0,1,2,3,4,5,6,7,8,9,10);
    $lotto[]=0;
    $lotto[]=1;
    $lotto[]=2;
    $lotto[]=3;
    $lotto[]=4;
    $lotto[]=5;
    $lotto[]=6;
    $lotto[]=7;
    $lotto[]=8;
    $lotto[]=9;
    $lotto[]=10;
    shuffle($lotto);
    $sum=0;
    //列出陣列

    //抽獎迴圈
    foreach($lotto as $i => $data){
        
        echo "$i:",$data*100,"<br>";
        echo "累計獎金：",$sum += $data*100,"<br>";
        //彩金
        //遇到0就停止
        if($data==0) break;
        
    }

    
    
    
    
    
        
        
    
    ?>
</body>
</html>