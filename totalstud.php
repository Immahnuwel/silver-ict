<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <title>totalstud</title>
<style>

table{
    width:100%;
  
    background:aliceblue;
    font-size:17px;
  
}
tr td{
    border: 1px solid black;
    padding:5px;
}

table th{
    background:brown;
    color:white;
    font-size:20px;
    padding:10px;
    border:1px solid black;
}
table tr:nth-child(odd) {
    background:#fff;
    padding:5px;
   
}
h2 {
    text-align:center;
    

}

</style>

</head>
<body>

    <h2>TOTAL NUMBER OF STUDENTS</h2><hr/>


    <table>
        <tr>
             
             <th> NAMES </th>
             <th> USERNAME </th> 
             <th> EMAIL</th>
             <th>PASSWORD</th>
        </tr>  
    








<?php
if($conn = new mysqli('localhost','root','','students')){


$sql = "SELECT FULLNAME, USERNAME, EMAIL, PASSWORD from registers ";

$result = $conn ->query($sql);

if ($result->num_rows > 0 ){

while( $row = $result -> fetch_assoc() ){

    echo "</td><td>" . $row["FULLNAME"] . "</td><td>" .$row["USERNAME"].
    "</td><td>" . $row["EMAIL"] . "</td><td>" .$row["PASSWORD"] . "</td></tr>";

}
 echo "</table>";
}
else{
  echo "no table";
}

}


?>
</table>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>