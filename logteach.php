<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form action="logteach.php" method="post" >
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

	session_start();
	
	$conn=mysqli_connect("localhost","root","","images");

	$uname=$_POST['uname'];
	$pname=$_POST['pname'];

	$sel="SELECT * FROM teachers WHERE USERNAME = '$uname'";

	$que=mysqli_query($conn,$sel);

	$fetch=mysqli_fetch_assoc($que);

if (password_verify($pname,$fetch['PASSWORD'])) {

	$_SESSION['$fname']=$fetch['FULLNAME'];
	$_SESSION['$uname']=$fetch['USERNAME'];
	$_SESSION['$pname']=$fetch['PASSWORD'];


	header("location:teachwall.php");

}else{
	echo "WRONG COMBINATION";



}




}



?>