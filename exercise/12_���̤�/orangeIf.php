<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrangeIf_result</title>
</head>
<body>
    <?php
        $a=40;
        $b=100;
        $l1=$_GET["l1_kilo"];
        $l2=$_GET["l2_kilo"];
        $l3=$_GET["l3_kilo"];

        if($l1<$a){
            echo $l1*30;
        }elseif($l1<$b){
            echo $l1*25;
        }else{
            echo $l1*20;
        };
        
        echo"<br>";
        if($l2<$a){
            echo $l2*25;
        }elseif($l2<$b){
            echo $l2*20;
        }else{
            echo $l1*15;
        };

        echo"<br>";

        if($l3<$a){
            echo $l3*20;
        }elseif($l3<$b){
            echo $l3*15;
        }else{
            echo $l3*10;
        };
        echo"<br>";

        
        
    ?>
    
</body>
</html>