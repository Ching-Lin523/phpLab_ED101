<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03prizeFor</title>
</head>
<body>

<?php

$total= 0;
for($i=1;$i<=10;$i++){
    $num = rand(0,10);
    echo $num * 100, " ";
    $total += $num * 100;	
}

echo "<br>";
echo "總和 : $total<br>";



?>
    
</body>
</html>