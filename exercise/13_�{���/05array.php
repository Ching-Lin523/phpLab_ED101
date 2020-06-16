<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h2>Array練習</h2>
    <?php
        $a=[];
        $min= 0;
        $max= 0;
        for($i=1; $i<11; $i++){
            $a[$i] = rand(1,100);
            if($max == 0 && $min ==0){
                $max = $a[$i];
                $min = $a[$i];
            }elseif($a[$i] > $max){
                $max = $a[$i];
            }elseif($a[$i] < $max){
                $min = $a[$i];
            }
echo  "第 $i 個數：",$a[$i],"<br>";
        }
echo "Total:\n", array_sum($a),"<br>";
echo "The maximum is \n", $max, ".","<br>";
echo "The minimum is \n", $min, ".","<br>";

    ?>
</body>
</html>