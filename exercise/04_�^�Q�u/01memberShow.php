<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>接收表單結果</title>
</head>
<body>

<style>
table{
	/* border:1px solid red; */
	width:500px;
	margin:0 auto;
	background:#00854c;
}
tr,td{
	border:1px solid #ccc;
	padding:0.2rem;
}

</style>

<table>
	<tr>
		<td>
			<h1>回傳表單結果</h1>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo "姓名: ", $_GET["memName"];?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo "帳號: ", $_GET["memId"];?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo "密碼: ", $_GET["memPsw"];?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo "信箱: ", $_GET["memEmail"],"<br>";?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo "性別: ", $_GET["memGender"],"<br>";?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo "生日: ", $_GET["memBday"],"<br>";?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo "連絡電話: ", $_GET["memTel"],"<br>";?>
		</td>
	</tr>

</table>



<?php
//--------------GET方式-----------------------------










//--------------GET方式-----------------------------
// echo "使用者: ", $_POST["memId"],"<br>";
// echo "密碼: ", $_POST["memPsw"],"<br>";
?>


</body>
</html>