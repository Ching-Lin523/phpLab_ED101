<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02memberShow</title>
    <link type="text/css" rel="stylesheet" href="style2.css" />
</head>
<body>
<?php
echo "<table>";
echo "<tr><td class='tdTitle'>姓名</td><td class='tdData'>",$_GET["name"],"</td></tr>";
echo "<tr><td class='tdTitle'>帳號</td><td class='tdData'>",$_GET["account"],"</td></tr>";
echo "<tr><td class='tdTitle'>密碼</td><td class='tdData'>",$_GET["pwd"],"</td></tr><br>";
echo "<tr><td class='tdTitle'>E-mail</td><td class='tdData'>",$_GET["email"],"</td></tr>";
echo "<tr><td class='tdTitle'>姓別</td><td class='tdData'>",$_GET["sex"],"</td></tr><br>";
echo "<tr><td class='tdTitle'>生日</td><td class='tdData'>",$_GET["birthday"],"</td></tr>";
echo "<tr><td class='tdTitle'>聯絡電話</td><td class='tdData'>",$_GET["tel"],"</td></tr>";

echo "</table>";
?>
</body>
</html>