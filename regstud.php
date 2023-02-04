<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

<div class="row">
	<div class="col-md-12" id="rr">

		
	</div>
	
</div>

<hr>


	<div class="row">
		<div class="col-md-6 bg-success">
			<form action="regstud.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>FULLNAME</label>
					<input type="text" name="fname" class="form-control" required="true" placeholder="FULLNAME">
					<label>USERNAME</label>
					<input type="text" name="uname" class="form-control" required="true" placeholder="USERNAME">
					<label>EMAIL</label>
					<input type="email" name="ename" class="form-control" required="true" placeholder="EMAIL">
					
					<label>PASSPORT</label>
					<input type="file" name="pass" class="form-control" required="true" >

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


<script type="text/javascript">
	
	let mie = document.querySelector('input[type="text"]')
	mie.addEventListener('keyup',camp)
	function camp(e){
		let camp2=document.getElementById('rr')

		camp2.innerHTML = '<small>' + e.target.value + '</small>'
		camp2.style.border = 'black 2px solid'



	}



</script>






<?php

if (isset($_POST['sub'])) {

	session_start();

	$conn=mysqli_connect("localhost","root","","images");

	$fname=$_POST['fname'];
	$uname=$_POST['uname'];
	$ename=$_POST['ename'];
	$pass=$_FILES['pass']['name'];
	$pname=password_hash($_POST['pname'],PASSWORD_BCRYPT);

	$target="pic/".basename($_FILES['pass']['name']);

	$select="SELECT * FROM image WHERE EMAIL='$ename' || USERNAME='$uname'";

	$query=mysqli_query($conn,$select);

	if (move_uploaded_file($_FILES['pass']['tmp_name'],$target)) {

	if (mysqli_num_rows($query) > 0) {

		echo "<h2>USERNAME OR EMAIL ALREADY EXIST IN OUR DATABASE</h2>";
		
		}else{

			$insert="INSERT INTO image(FULLNAME,USERNAME,EMAIL,PASSPORT,PASSWORD) values('$fname','$uname','$ename','$pass','$pname')";

			mysqli_query($conn,$insert);

			$_SESSION['fname']=$_POST['fname'];
			$_SESSION['uname']=$_POST['uname'];
			$_SESSION['ename']=$_POST['ename'];
			$_SESSION['pass']=$_POST['pass'];
			$_SESSION['pname']=$_POST['pname'];

			header("location:successregstud.php");
			echo "<h2>SUCCESSFULLY REGISTERED</h2>";
		}
	}


}



?>