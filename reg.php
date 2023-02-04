<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 bg-warning">
			<form action="reg.php" method="post">
				<div class="form-group">
					<label>FULLNAME</label>
					<input type="text" name="fname" class="form-control" required="true" placeholder="FULLNAME">
					<label>USERNAME</label>
					<input type="text" name="uname" class="form-control" required="true" placeholder="USERNAME">
					<label>EMAIL</label>
					<input type="email" name="ename" class="form-control" required="true" placeholder="EMAIL">
					
					<label>PASSWORD</label>
					<input type="password" name="pname" class="form-control" required="true" placeholder="CODE">

					<input type="submit" name="sub" class="btn btn-outline-secondary">
					
				</div>
				
			</form>
			
		</div>
		
	</div>
	
</div>
</body>
</html>

<?php

if (isset($_POST['sub'])) {

	$conn=mysqli_connect("localhost","root","","students");

	$fname=$_POST['fname'];
	$uname=$_POST['uname'];
	$ename=$_POST['ename'];
	$pname=password_hash($_POST['pname'],PASSWORD_BCRYPT);

	$select="SELECT * FROM registers WHERE USERNAME='$uname' || EMAIL='$ename' ";

	$query=mysqli_query($conn,$select);

	if (mysqli_num_rows($query) > 0) {

		echo "EMAIL OR USERNAME ALREADY EXIST ON OUR DATABASE";

	}else{

		$insert="INSERT INTO registers(FULLNAME,USERNAME,EMAIL,PASSWORD) values('$fname','$uname','$ename','$pname')";
		mysqli_query($conn,$insert);

		echo "SUCCESSFULLY REGISTERED";

		header("location: log.php");
	}
}








?>