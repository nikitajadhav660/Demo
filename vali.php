
<?php






$h = mysql_connect("localhost","root","");


mysql_select_db("emplo",$h);

$name = $_POST['user'];
$pass = $_POST['password'];



$qy = "insert into tabl(name , password) values ('$name','$pass')";
	mysql_query($qy,$h);

mysql_close($h);



?>
