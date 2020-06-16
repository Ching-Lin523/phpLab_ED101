<?php


$sum = 0;
for($i=0; $i<10 ;$i++){

$randomsec = rand(0,10)*100;

if($randomsec <= 0){
    echo "抽到0失敗 <br>";
break;
}

$sum += $randomsec;

echo $randomsec;
echo "<br>";

}


echo "總計獎金： $sum";



?>