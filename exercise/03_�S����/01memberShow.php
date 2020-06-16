<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memberShow</title>
    <style>
        h1{
            text-align: center;
        }
        table{
            width: 900px;
            border: 1px solid gray;
            margin: 0 auto;
        }
        td{
            border: 1px solid gray;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>會員資料</h1>
    <table>
        <tr>
            <td>
                姓名
            </td>
            <td>
                <?php
                   echo  $_GET["memName"];
                ?>
             </td>
        </tr>
        <tr>
            <td>
            帳號
            </td>
            <td>
                <?php
                   echo  $_GET["memId"];
                ?>
             </td>
        </tr>
        <tr>
            <td>
            密碼
            </td>
            <td>
                <?php
                   echo  $_GET["memPsw"];
                ?>
             </td>
        </tr>
        <tr>
            <td>
            e-mail
            </td>
            <td>
                <?php
                   echo  $_GET["email"];
                ?>
             </td>
        </tr>
        <tr>
            <td>
            性別
            </td>
            <td>
                <?php
                    echo $_GET["sex"];
                ?>
             </td>
        </tr>
        <tr>
            <td>
            生日
            </td>
            <td>
                <?php
                    echo $_GET["birthday"];
                ?>
             </td>
        </tr>
        <tr>
            <td>
            連絡電話
            </td>
            <td>
                <?php
                    echo $_GET["tel"];
                ?>
             </td>
        </tr>
    </table>
</body>
</html>
