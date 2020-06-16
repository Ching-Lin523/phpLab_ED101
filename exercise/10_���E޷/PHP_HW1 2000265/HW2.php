<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<table>  
<tr>
<td><?php
$level = $_GET["Level"];
$kg = $_GET["kg"];
$total = 0;
echo "<td>", "等級 : ", $level, "<td>";
echo "<td>", "公斤 : ", $kg, "<td>";

if($level == 1 && $kg < 40){
$total =  $kg * 30;    
echo "總價 : ",$total;

}elseif($level == 1 && $kg > 100){
$total =  $kg * 20; 
echo "總價 : ",$total; 

}elseif($level == 1 && 100 > $kg &&  $kg>= 40){
    $total =  $kg * 25; 
    echo "總價 : ",$total; 
  
};


if($level == 2 && $kg < 40){
    $total =  $kg * 25;    
    echo "總價 : ",$total;
    }elseif($level == 2 && $kg > 100){
    $total =  $kg * 15;  
    echo "總價 : ",$total;
    }elseif($level == 2 && 100 > $kg &&  $kg>= 40){
        $total =  $kg * 20;  
        echo "總價 : ",$total;
    };

    if($level == 3 && $kg < 40){
        $total =  $kg * 20;  
        echo "總價 : ",$total;  
        }elseif($level == 3 && $kg > 100){
        $total =  $kg * 10;  
        echo "總價 : ",$total;
        }elseif($level == 3 && 100 > $kg &&  $kg>= 40){
            $total =  $kg * 15;
            echo "總價 : ",$total;   
        };
    if($level > 3){
        echo "無此選項";
    }
?></td>  
</tr>   
</table> 
</body>
</html>