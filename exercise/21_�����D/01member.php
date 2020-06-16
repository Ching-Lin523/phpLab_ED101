<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="./01member.css" rel="stylesheet" />
</head>
<body>
    <table style="border:1px solid black">
    <tr>
        <td>
            姓名：
        </td>
        <td>
            <?php
                echo $_GET["memName"];
            ?>
        </td>
    </tr>
    <br>
    <tr>
        <td>
            使用者：
        </td>
        <td>
            <?php
                echo $_GET["memId"];
            ?>
        </td>
    </tr>
    <br>
    <tr>
        <td>
            密碼：
        </td>
        <td>
            <?php
                echo $_GET["memPsw"];
            ?>
        </td>
    </tr>
    <br>
    <tr>
        <td>
            EMAIL：
        </td>
        <td>
            <?php
                echo $_GET["email"];
            ?>
        </td>
    </tr>
    <br>
    <tr>
        <td>
            性別：
        </td>
        <td>
            <?php
                echo $_GET["sex"];
            ?>
        </td>
    </tr>
    <br>
    <tr>
        <td>
        生日：
        </td>
        <td>
            <?php
                echo $_GET["birthday"];
            ?>
        </td>
    </tr>
    <br>
    <tr>
        <td>
        電話：
        </td>
        <td>
            <?php
                echo $_GET["tel"];
            ?>
        </td>
    </tr>
    </table>
    <br>

</body>
</html>



