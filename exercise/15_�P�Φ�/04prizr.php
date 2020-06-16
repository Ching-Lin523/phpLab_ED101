<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $total = 0;
        // for($i = 1 ;$i < 11; $i++){
        //     $ballNum = rand(0,10);
        //     echo "第 $i 次:",$ballNum;
        //     echo "<br>";
        //     $total += $ballNum;
        // }
        // echo "<br>";
        // echo "總金額為:",$total,"元";
        $i = 1;
        $total = 0;
        while($i<11){
            $ballNum = rand(0,10);
            if($ballNum == 0) {
            echo "失敗囉!";
            break;
            }
            echo "第$i 次:" ,$ballNum,"<br>";
            $total += $ballNum; 
            $i++;
        };
        echo "<br>";
        echo "總金額:",$total * 100 , "元";
    
    
    ?>
</body>
</html>