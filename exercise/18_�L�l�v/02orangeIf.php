<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            echo "所選等級:" ,$_GET["level"],"<br>"; 
            echo "公斤數:",$_GET["many"],"公斤","<br>";
            if($_GET["level"] == 1){
                if($_GET["many"]<=40){
                  $money = 30*$_GET["many"];
                  echo "total : $money";
                    
                }
               elseif($_GET["many"]>40 && $_GET["many"]<=100){
                    $money = 25*$_GET["many"];
                    echo "total : $money";
                      
                  }
                  elseif($_GET["many"]>100){
                    $money = 20*$_GET["many"];
                    echo "total : $money";
                      
                  }
            }
            if($_GET["level"] == 2){
                if($_GET["many"]<=40){
                  $money = 25*$_GET["many"];
                  echo "total : $money";
                    
                }
                elseif($_GET["many"]>40 && $_GET["many"]<=100){
                    $money = 20*$_GET["many"];
                    echo "total : $money";
                      
                  }
                  elseif($_GET["many"]>100){
                    $money = 15*$_GET["many"];
                    echo "total : $money";
                      
                  }
            }
            if($_GET["level"] == 3){
                if($_GET["many"]<=40){
                  $money = 20*$_GET["many"];
                  echo "total : $money";
                    
                }
                elseif($_GET["many"]>40 && $_GET["many"]<=100){
                    $money = 15*$_GET["many"];
                    echo "total : $money";
                      
                  }
                  elseif($_GET["many"]>100){
                    $money = 10*$_GET["many"];
                    echo "total : $money";
                      
                  }
            }
    ?>
    
</body>
</html>