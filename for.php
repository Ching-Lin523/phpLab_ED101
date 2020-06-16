<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
</head>
<body>

<?php 
for($i=1; $i<=10; $i++){
	echo "I love PHP~~<br>";    
}
?> 

<?php 
for($i=1; $i<=10; $i++):
	echo "I love PHP<sup>n</sup> ~~<br>";    
endfor;
?> 


<h2>印出1~50間3的倍數和總和(方法一)</h2>
<?php 
$total = 0;
for($i=1; $i<=50; $i++){
	if($i%3 == 0){
		echo $i, " "; 
		$total += $i;		
	}
}
echo "<br>";
echo "總和 : $total<br>";
?>


<h2>印出1~50間3的倍數和總和(方法二)</h2>
<?php 
for($i=3,$total=0; $i<=50; $i+=3){
	echo $i, " "; 
	$total += $i;		
}
echo "<br>";
echo "總和 : $total<br>";
?>
</body>
</html>