<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<form method="post">
	Number of bills :<input type="text" name="count" size="5"><br>
    Enter the bill amounts separated by comma ","<br><br>
    Amount to be paid :<input type="text" name="amount" size="3"><br><br>
    <input type="submit" name="submit1" value="Submit">
	
</form>
<body>
</body>
</html>
<?php

if(isset($_POST['submit1']))
{
	$count=$_POST['count'];
	$amount=$_POST['amount'];
	print_r(explode(",",$count));
}
?>