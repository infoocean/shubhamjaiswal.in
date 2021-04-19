<?php
//add database file
include 'dbconnection.php';
//access data from userinput
if (isset($_POST['submit'])) {
	# code...
	echo "$_POST"['name'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$purpose=$_POST['purpose'];
	$description=$_POST['description'];
   //insert query
   $inserquery="insert into employinformation(name, email, number, purpose, description)values('$name', '$email', '$number', '$purpose', '$description')";
   $insert=mysqli_query($conn, $inserquery);
   //check
   if($insert){
   	echo"true";
   }
}


?>