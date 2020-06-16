<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04prize</title>
</head>
<body>
    <?php
        $i=1;
        $sum=0;
        do{
            $ballNo=rand(0,10);
            echo "第",$i,"次: ",$ballNo*100,"元","<br>";
            $sum+=$ballNo*100;
            $i++;
        }while(
            $ballNo!=0
        );

        echo "<br>","共喜你！一共",$sum,"元！";



    ?>
</body>
</html>