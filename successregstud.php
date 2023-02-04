<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

session_start();

$fname=$_SESSION['fname'];			
$uname=$_SESSION['uname'];
$ename=$_SESSION['ename'];
$pass=$_SESSION['pass'];
$pname=$_SESSION['pname'];

echo "<h2> YOU HAVE BEEN REGISTERED SUCCESSFULLY @ $fname </h2>";

?>


<a href="logstud.php"><button>LOGIN</button></a>
</body>
</html>