<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    echo "<h2>您的會員資料為</h2> ";
    echo "姓名 : ", $_POST["memName"], "<br>";
    echo "帳號 : ", $_POST["memId"], "<br>";
    echo "密碼 : ", $_POST["memPsw"], "<br>";
    echo "e-mail: ", $_POST["email"], "<br>";
    echo "性別: ", $_POST["sex"], "<br>";
    echo "生日: ", $_POST["birthday"], "<br>";
    echo "連絡電話:", $_POST["tel"], "<br>";
?>

</body>

</html>