<?php  
	$dbhost="127.0.0.1";
	$dbuser="root";
	$dbpass="";
	$dbname="khuongshop";

	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if($conn){
		$setLang=mysqli_query($conn, "SET NAMES 'utf8'");
	}
	else{
		die("kết nối thất bại!".mysqli_connect_error());
	}
?>