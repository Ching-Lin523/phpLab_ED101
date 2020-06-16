<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>輸入結果</title>
    <link rel="stylesheet" href="./css/01.css">
</head>
<body>
    <table style="border:3px #cccccc solid;" cellpadding="10" border='1'>
        <tr>
            <td>
                姓名
            </td>
            <td>
                <?php 
                    echo $_GET['memName']
                ?>
            </td>
        </tr>
        <tr>
            <td>
                帳號
            </td>
            <td>
                <?php 
                    echo $_GET['memId']
                ?>
            </td>
        </tr>
        <tr>
            <td>
                密碼
            </td>
            <td>
                <?php 
                    echo $_GET['memPsw']
                ?>
            </td>
        </tr>
        <tr>
            <td>
                e-mail
            </td>
            <td>
                <?php 
                    echo $_GET['email']
                ?>
            </td>
        </tr>
        <tr>
            <td>
                性別
            </td>
            <td>
                <?php 
                    echo $_GET['sex']
                ?>
            </td>
        </tr>
        <tr>
            <td>
                生日
            </td>
            <td>
                <?php 
                    echo $_GET['birthday']
                ?>
            </td>
        </tr>
        <tr>
            <td>
                電話
            </td>
            <td>
                <?php 
                    echo $_GET['tel']
                ?>
            </td>
        </tr>
    </table>
</body>
</html>