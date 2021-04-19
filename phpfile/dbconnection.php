<?php
//SERVER INFORMATION
$servername="127.0.0.1:3307";
$username="root";
$password="";
$dbname="udyselfcrud";
//create cinnection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
$connect=false;
if ($conn) {
	# code...
	$connect=true;
}else{
	echo "connection unsuccess";
}

?>