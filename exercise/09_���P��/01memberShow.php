<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

</style>


</head>

<body>
    <table style="border:1px solid black" border="1">
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


