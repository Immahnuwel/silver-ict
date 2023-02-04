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
			<form action="log.php" method="post">
				<div class="form-group">
					
					<label>USERNAME</label>
					<input type="text" name="uname" class="form-control" required="true" placeholder="USERNAME">
					
					<label>PASSWORD</label>
					<input type="password" name="pname" class="form-control" required="true" placeholder="CODE">

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
	
	$conn=mysqli_connect("localhost","root","","students");

	$uname=$_POST['uname'];
	$pname=$_POST['pname'];

	$select="SELECT * FROM registers WHERE USERNAME='$uname' ";

	$que=mysqli_query($conn,$select);

	$fetch=mysqli_fetch_assoc($que);

if (password_verify($pname,$fetch['PASSWORD'])) {

			$_SESSION['fname']=$row['FULLNAME'];
			$_SESSION['uname']=$row['USERNAME'];
			$_SESSION['pass']=$row['IMAGE'];

			header("location:studwall.php");
			//echo ($row['FULLNAME']);

		echo "LOGGED_IN Successfully";
	}else{
		echo "Getaway";
	}
}



?>