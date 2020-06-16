<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     body{
        margin: 0;
    }
    form{
        margin: 10px;
    }
    td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
<body>
<table>
    <tr>
    <td>姓名 :</td>
    <td><?php   echo $_GET["memName"];?></td>
    </tr>
    <tr>
        <td>帳號 :</td>
        <td><?php   echo $_GET["memId"],"<br>";?></td>
    </tr>
    <tr>
        <td>密碼 :</td>
        <td> <?php   echo $_GET["memPsw"],"<br>";?></td>
    </tr>
    <tr>
        <td>e-mail :</td>
        <td><?php   echo $_GET["email"],"<br>";?></td>
    </tr>
    <tr>
        <td>性別 :</td>
        <td> <?php   echo $_GET["sex"],"<br>";?></td>
    </tr>
    <tr>
        <td>生日 :</td>
        <td> <?php   echo $_GET["birthday"],"<br>";?></td>
    </tr>
    <tr>
        <td>連絡電話 :</td>
        <td> <?php   echo $_GET["phone"],"<br>";?></td>
    </tr>

 </table>
</body>
</html>