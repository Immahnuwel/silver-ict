<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form action="regteach.php" method="post">
				<div class="form-group">
					<label>FULLNAME</label>
					<input type="text" name="fname" class="form-control" placeholder="FULLNAME" required="true">

					<label>USERNAME</label>
					<input type="text" name="uname" class="form-control" placeholder="USERNAME" required="true">

					<label>PASSWORD</label>
					<input type="password" name="pass" class="form-control" placeholder="PASSWORD" required="true">


					<input type="submit" name="sub" value="SUBMIT" class="btn btn-outline-primary">


				</div>
				
			</form>
			
		</div>
		
	</div>
	
</div>
</body>
</html>




<?php
if (isset($_POST['sub'])) {

session_start();

	$conn=mysqli_connect("localhost","root","","images");

	$fname = $_POST['fname'];
	$uname = $_POST['uname'];
	$pass = password_hash($_POST['pass'],PASSWORD_BCRYPT);

	$sel="SELECT * FROM teachers WHERE USERNAME='$uname'";

	$que=mysqli_query($conn,$sel);

	if (mysqli_num_rows($que) > 0) {

		echo "USERNAME ALREADY EXIST IN OUR DATABASE";
	} else{
		 
		$ins ="INSERT INTO teachers(FULLNAME,USERNAME,PASSWORD) values('$fname','$uname','$pass')";

		mysqli_query($conn,$ins);

		$_SESSION['fname']=$_POST['fname'];
		$_SESSION['uname']=$ins['uname'];

		header("location:sucteach.php");



		echo "REGISTERED SUCCESSFULLY";

	}
	




}

?>