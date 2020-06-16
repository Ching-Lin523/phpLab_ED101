<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    echo "<h2>橘子單價和等級</h2> ";
    echo "等級 : ", $_GET["grade"], "<br>";
    echo "重量 : ", $_GET["weight"], "<br>";
    
    $gradeType= $_GET["grade"];
    $weight=$_GET["weight"];

    $total="";
    switch($gradeType){
        case "1":
        if($weight<=40){
            $total =$weight*30;
        }elseif($weight> 40 && $weight<=100){
            $total =$weight*25;
        }else($weight>100){
            $total =$weight*20
        };
        break;
        case "2":
            if($weight<=40){
                $total =$weight*25;
            }elseif($weight> 40 && $weight<=100){
                $total =$weight*20;
            }else($weight>100){
                $total =$weight*15
            };
        break;
        case "3":
            if($weight<=40){
                $total =$weight*20;
            }elseif($weight> 40 && $weight<=100){
                $total =$weight*15;
            }else($weight>100){
                $total =$weight*10
            };
        break;
        default:
        $total = 0;
    }
    echo "共 $total 元";
?>


    
</body>
</html>