<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible"content="IE=edge,chrome=1">
<title>Examples</title>

</head>
<body>

<h2>03PrizeFor</h2>
<?php 
$totalPrize = (int)"";
for($i=0; $i<10; $i++){
    $randNum =rand(0,10);
    echo $randNum*100,"<br>";
    $totalPrize += $randNum*100;
}
echo "total:", "$totalPrize";
?>

<h2>04PrizeWhile</h2>
<?php 

$totalWin = (int)"";
$chance = 0;
do{
    $randnum =rand(0,10);
    echo $randnum*100,"<br>";
    $totalWin += $randnum*100;
    $chance++;
}while($randnum*100!=0);
echo "總共摸彩:",$chance,"次","<br>";
echo "total:", "$totalWin";

?>


<h2>隨機0~100變數</h2>
<?php 
$randArr = array();
for($i=0; $i<10; $i++){
    $randNum = rand(0,100);
    array_push($randArr,$randNum);
};
echo implode(',',$randArr),"<br>";

$total = (int)"";
$maxNum = $randArr[0];
$minNum = $randArr[0];
for($i=0; $i<count($randArr); $i++){
    
    $total += $randArr[$i];

    if($maxNum < $randArr[$i]){
        $maxNum = $randArr[$i];
    };

    if($minNum > $randArr[$i]){
        $minNum = $randArr[$i];
    };
};
echo "total:",$total,"<br>";
echo "Max:","$maxNum","<br>";
echo "Mini:","$minNum","<br>";
?>

<h2>隨機0~100變數 第二種寫法</h2>
<?php 
$randArr = array();
$total = (int)"";
$maxNum = 0;
$minNum = 100;

for($i=0; $i<10; $i++){
    $randNum = rand(0,100);
    array_push($randArr,$randNum);

    $total += $randArr[$i];

    if($maxNum < $randArr[$i]){
        $maxNum = $randArr[$i];
    };

    if($minNum > $randArr[$i]){
        $minNum = $randArr[$i];
    };
};
echo implode(',',$randArr),"<br>";
echo "total:",$total,"<br>";
echo "Max:","$maxNum","<br>";
echo "Mini:","$minNum","<br>";
?>


</body>
</html>