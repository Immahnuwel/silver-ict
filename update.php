<?php

session_start();

$fname=$_SESSION['fname'];			
$uname=$_SESSION['uname'];
$pass=$_SESSION['pass'];
$ename=$_SESSION['ename'];
$pname=$_SESSION['pname'];

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 bg-success">
			<form action="update.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>FULLNAME</label>
					<input type="text" name="fname" class="form-control" required="true" value="<?php echo $_SESSION['fname']?>">
					<label>USERNAME</label>
					<input type="text" name="uname" class="form-control" required="true" value="<?php echo $_SESSION['uname']?>">
					<label>EMAIL</label>
					<input type="email" name="ename" class="form-control" required="true" value="<?php echo $_SESSION['ename']?>">

					<label>PASSWORD</label>
					<input type="password" name="pname" class="form-control" required="true" value="<?php echo $_SESSION['pname']?>">
				
					

					<input type="submit" name="sub" class="btn btn-outline-primary">
					
				</div>
				
			</form>
			
		</div>
		
	</div>
	
</div>
</body>
</html>

<?php
if (isset($_POST['sub'])) {

$conn=mysqli_connect("localhost","root","","images");

$fname=$_POST['fname'];
$uname=$_POST['uname'];
$ename=$_POST['ename'];

$update="UPDATE image SET FULLNAME='$fname',USERNAME='$uname' WHERE EMAIL='$ename'";


$query=mysqli_query($conn,$update);

if ($query) {

	echo "PROFILE UPDATED SUCCESSFULLY";
}else{
	echo "SHIFT FROM HERE";
}


}




?>