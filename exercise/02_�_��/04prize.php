<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04prize</title>
</head>
<body>

<?php

$total= 0;



// $num = rand(0,10);
// echo $num," ";

do{
    $num = rand(0,10);
    if ($num!=0){
        // echo $num," ";
        echo $num*100," ";
        // echo $total+= $num * 100,"<br>";
    }else{
        echo $num," ";
    }

    $total+= $num * 100;
    $count+= count($num);


}while($num!=0);
echo "<br>","共抽: $count 次";
echo"<br>","總共: $total 元";


?>



    
</body>
</html>