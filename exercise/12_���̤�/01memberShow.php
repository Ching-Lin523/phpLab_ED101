<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01memberShow</title>
</head>
<body>
    <?php
    echo"<table border=\"2\">";

    echo"<tr>";
    echo"<td width=200>姓名</td>","<td width=200>",$_GET["memName"],"</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>帳號</td>","<td>",$_GET["memID"],"</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>密碼</td>","<td>",$_GET["memPsw"],"</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>email</td>","<td>",$_GET["email"],"</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>性別</td>","<td>",$_GET["sex"],"</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>生日</td>","<td>",$_GET["birthday"],"</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>聯絡電話</td>","<td>",$_GET["tel"],"</td>";
    echo"</tr>";
    
    
    
    

    echo"</table>";
    
    ?>
    
</body>
</html>