<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="wall.css">
</head>

<body>
<div class="container-fluid">

<div class="row">
	<div class="col-md-4">
		
	</div>

	<div class="col-md-4">
		
	
<?php

session_start();


 
$fname=$_SESSION['fname'];
$uname=$_SESSION['uname'];
$pass=$_SESSION['pass'];
			
echo "<img src='pic/".$pass." 'width=250px height=200px' '> ";

echo ("<h3>Welcome $fname</h3>");


?>
</div>

</div>	




<div class="row">
		<div class="col-md-12 bg-primary" id="list">
			<ul>
				<a href="boot.php"><li>HOME</li></a>
				<a href=""><li>EDIT PROFILE</li></a>
				<a href="#"><li>LOGOUT</li></a>
				<a href="#"><li>ABOUT</li></a>
				<a href="#"><li>CHECK RESULT</li></a>
			</ul>
		
		</div>
		
	</div>



	
</div>
</body>
</html>