<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prize uses for</title>
</head>
<body>
    <?php
$lottery= 0;
$total= 0;
for($i=1; $i<11; $i++){
    $lottery = rand(1,10);
    $total += $lottery*100;
    echo "第", $i,"次彩球:", $lottery,"<br>","第",$i,"次 prize:",$lottery*100,"<br>";

}
echo "Total: \n $total dollars";
    ?>
</body>
</html>