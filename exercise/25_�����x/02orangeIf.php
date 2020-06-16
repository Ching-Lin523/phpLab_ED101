<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $_POST["level"];
    $_POST["weight"];
    $total = 0;

    if($_POST["level"] == 1){
      if($_POST["weight"] >100){
      	$total = $_POST["weight"] * 30;
      }elseif($_POST["weight"] > 40){
      	$total = $_POST["weight"] * 25;  
      }else{
        $total = $_POST["weight"] * 20;  
      } 	
    }else if($_POST["level"] == 2){
      if($_POST["weight"] >100){
      	$total = $_POST["weight"] * 25;
      }else if($_POST["weight"] > 40){
      	$total = $_POST["weight"] * 20;  
      }else{
        $total = $_POST["weight"] * 15;  
      } 	
    }else{
      if($_POST["weight"] >100){
      	$total = $_POST["weight"] * 20;
      }else if($_POST["weight"] > 40){
      	$total = $_POST["weight"] * 15;  
      }else{
        $total = $_POST["weight"] * 10;  
      } 	
    }

  ?>
  <form action="./02orangeIf.php" method="POST">
    <table>
      <tr>
        <td>請輸入你想吃的橘子等級:</td>
        <td>
          <?php echo $total ?>
        </td>
      </tr>
      <tr>
        <td>請輸入你想買的重量:</td>
        <td>
          <input type="text" name="weight">
        </td>
      </tr>
    </table>
    <input type="submit" value="送出">
  </form>
</body>
</html>