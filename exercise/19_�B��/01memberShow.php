<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"姓名:" , $_GET["memName"],"<br>";
    echo"帳號:" , $_GET["memID"],"<br>";
    echo"密碼:" , $_GET["memPsw"],"<br>";
    echo"EMAIL:" , $_GET["email"],"<br>";
    echo"性別:" , $_GET["sex"],"<br>";
    echo"生日:" , $_GET["birthday"],"<br>";
    echo"電話:" , $_GET["tel"],"<br>";

    ?>
</body>
</html>