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
				<form action="result.php" method="post">
					<div class="form-group">
						<label>SUBJECT</label>
						<input type="text" name="subject" class="form-control" required="true" placeholder="SUBJECT">

						<label>1ST CA</label>
						<input type="text" name="ca1" class="form-control" required="true" placeholder="SCORE">

						<label>2ND CA</label>
						<input type="text" name="ca2" class="form-control" required="true" placeholder="SCORE">

						<label>EXAM</label>
						<input type="text" name="exam" class="form-control" required="true" placeholder="SCORE">

						<label>TOTAL</label>
						<input type="text" name="total" class="form-control" required="true" placeholder="SCORE">

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

	$conn=mysqli_connect("localhost","root","","students result");

	$sub=$_POST['subject'];
	$ca1=$_POST['ca1'];
	$ca2=$_POST['ca2'];
	$exam=$_POST['exam'];
	$total=$_POST['total'];

	$ins="INSERT INTO results(SUBJECTS,1ST CA,2ND CA,EXAM,TOTAL) values('$sub','$ca1','$ca2','$exam','$total')";

	$que=mysqli_query($conn,$ins);

	echo "UPDATED SUCCESSFULLY";


	# code...
}





?>