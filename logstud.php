<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
	<div class="col-md-12" id="rrr">

		
	</div>
	
</div>

<hr>

	<div class="row">
		<div class="col-md-6 bg-warning">
			<form action="logstud.php" method="post" enctype="multipart/form-data">
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
<script type="text/javascript">
	
	let mie = document.querySelector('input[type="text"]')
	mie.addEventListener('keyup',camp)
	function camp(e){
		let camp2=document.getElementById('rrr')

		camp2.innerHTML = '<small>' + e.target.value + '</small>'
		camp2.style.border = 'black 2px solid'



	}



</script>


<?php

if (isset($_POST['sub'])) {
	session_start();

$conn=mysqli_connect("localhost","root","","images");

	$uname=$_POST['uname'];
	$pname=$_POST['pname'];

	$select="SELECT * FROM image WHERE USERNAME='$uname'";

	$query=mysqli_query($conn,$select);


	while ($row=mysqli_fetch_assoc($query)) {

		if (password_verify($pname,$row['PASSWORD'])) {

			$_SESSION['fname']=$row['FULLNAME'];
			$_SESSION['uname']=$row['USERNAME'];
			$_SESSION['pass']=$row['IMAGE'];

			header("location:studwall.php");
			//echo ($row['FULLNAME']);
			
			//echo "<img src='pic/".$row['IMAGE']." 'width=250px height=200px' '> ";
			
		}

		else{
			echo "Getaway";
		}


	 }


}
?>