<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
   
</head>
<body>
    <h2>您的會員資料為</h2>
    <table style="border:3px #cccccc solid;" cellpadding="10" border='1'>
        <tr>
            <td>
                姓名
            </td>
            <td>
               <?php
                echo  $_POST['memName'] ;
                ?>
            </td>
        </tr>

        <tr>
            <td>
                帳號
            </td>
            <td>
            <?php
                echo $_POST['memId'];
                ?>
            </td>
        </tr>

    <tr>
        <td>
            密碼
        </td>
    <td>
        <?php
            echo $_POST['memPsw'];
        ?>
    </td>
    </tr>
<tr>
    <td>
        E-mail
    </td> 
    <td><?php
        echo $_POST['email'];
        ?>
    </td>
</tr>
<tr>
    <td>
        性別
    </td>
    <td>
        <?php
        echo $_POST['gendar'];
        ?>
    </td>
</tr>
<tr>
    <td>
        生日
    </td>
    <td>
    <?php
    echo $_POST['birthday'];
    ?>
    </td>
</tr>
<tr>
    <td>
        聯絡電話
    </td>
    <td> 
        <?php
        echo $_POST['tel']; 
        ?>
    </td>
</tr>
    </table>
    
    
    
</body>
</html>