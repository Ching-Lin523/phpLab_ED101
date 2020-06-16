<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <meta charset="utf-8">
    <title>申青會員資料</title>
    <style media="screen">
      table{
        width: 80%;
        margin: 0 auto;
        margin-top: 50px;
        text-align: center;
        font-family: Microsoft JhengHei;
        letter-spacing: 2px;
      }
      td{
        padding: 5px;
      }
      td.t123{
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <table border="1">
      <tr>
        <td class="t123">姓名</td>
        <td><?php echo $_POST["name"] ?></td>
      </tr>
      <tr>
        <td class="t123">帳號</td>
        <td><?php echo $_POST["account"] ?></td>
      </tr>
      <tr>
        <td class="t123">密碼</td>
        <td><?php echo $_POST["password"] ?></td>
      </tr>
      <tr>
        <td class="t123">e-mail</td>
        <td><?php echo $_POST["mail"] ?></td>
      </tr>
      <tr>
        <td class="t123">性別</td>
        <td><?php echo $_POST["sex"] ?></td>
      </tr>
      <tr>
        <td class="t123">生日</td>
        <td><?php echo $_POST["birth"] ?></td>
      </tr>
      <tr>
        <td class="t123">連絡電話</td>
        <td><?php echo $_POST["phone"] ?></td>
      </tr>
    </table>
  </body>
</html>
