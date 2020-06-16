<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="userName" class='formLabel'>
            <span>姓名：</span>
            <?php
            echo $_GET['userName'];
            ?>
        </label>

        <label for="id" class='formLabel'>
            <span>帳號：</span>
            <?php
            echo $_GET['id'];
            ?>
        </label>

        <label for="password" class='formLabel'>
            <span>密碼：</span>
            <?php
            echo  $_GET['password'];
            ?>
        </label>

        <label for="mail" class='formLabel'>
            <span>Email：</span>
            <?php
            echo $_GET['mail'];
            ?>
        </label>

        <label for="gender" class='formLabel'>
            <span>性別：</span>
            <?php
            echo $_GET['gender'];
            ?>
        </label>

        <label for="birthday" class='formLabel'>
            <span>生日：</span>
            <?php
            echo $_GET['birthday'];
            ?>
        </label>

        <label for="phone" class='formLabel'>
            <span>電話：</span>
            <?php
            echo $_GET['phone'];
            ?>
        </label>
    </form>
</body>
</html>