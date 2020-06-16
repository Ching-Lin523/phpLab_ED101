<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table tr td{
        border: solid 1px black;
    }
    table{
        border: solid 1px black;
        width: 800px; 
    } 
    </style>
</head>
<body>

    <table>
        <tr>
            <td>
                <?php echo "姓名:"?> 
            </td>
            <td>
                <?php echo $_POST["memName"];?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo "帳號:"?>
            </td>
            <td>
                <?php echo $_POST["memId"];?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo "密碼:"?>
            </td>
            <td>
                <?php echo $_POST["memPsw"];?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo "e-mail:"?> 
            </td>
            <td>
                <?php echo $_POST["email"];?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo "性別:"?>
            </td>
            <td>
                <?php echo $_POST["sex"];?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo "生日:"?>
            </td>
            <td>
                <?php echo $_POST["birthday"];?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo "聯絡電話:"?>
            </td>
            <td>
               <?php echo $_POST["tel"];?>
            </td>
        </tr>
    </table>
    
</body>
</html>