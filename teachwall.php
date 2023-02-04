<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#rr ol li{
			list-style-type: none;
			float: left;
			padding: 16px;
		}
		#rr ol li:hover{
			background-color: white;
		}


	</style>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<?php
session_start();

$fname=$_SESSION['$fname'];
$uname=$_SESSION['$uname'];
$pname=$_SESSION['$pname'];


echo "<h1>LOGGED IN SUCCESSFULLY @ $fname</h1>";



?>





				
			</div>
			
		</div>


	<div class="row">
		<div class="col-md-12 bg-danger" id="rr">
			<ol>

<a href="totalstud.php"><h4><li>ACCESS STUDENTS DATA</li></h4></a>
<a href=""><h4><li>UPDATE RESULT</li></h4></a>
<a href="logstud2.php"><h4><li>DATA CORECTION</li></h4></a>


			</ol>
		</div>
		
	</div>


</form>
</div>
</body>
</html>
