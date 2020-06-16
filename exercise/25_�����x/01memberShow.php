<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
<table>
    <tr>
      <td>姓名</td>
      <td>
        <?php echo $_GET["name"];?>
      </td>
    </tr>
    <tr>
      <td>帳號</td>
      <td>
        <?php echo $_GET["memId"];?>
      </td>
    </tr>
    <tr>
      <td>密碼</td>
      <td>
        <?php echo $_GET["PSW"];?>
      </td>
    </tr>
    <tr>
      <td>e-mail</td>
      <td>
        <?php echo $_GET["email"];?>
      </td>
    </tr>
    <tr>
      <td>性別</td>
      <td>
      <?php echo $_GET["gender"];?>
      </td>
    </tr>
    <tr>
      <td>生日</td>
      <td>
        <?php echo $_GET["birthday"];?>
      </td>
    </tr>
    <tr>
      <td>連絡電話</td>
      <td>
      <?php echo $_GET["phone"];?>
      </td>
    </tr>

  </table>
<?php 


// echo "帳號 : ", $_REQUEST["memId"], "<br>"; //POST, GET
// echo "密碼 : ", $_REQUEST["memPsw"], "<br>";
?>  
</body>
</html>
