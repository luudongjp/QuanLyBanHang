<?php  
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='open-mobileshop';
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if($conn){
		$setlang=mysqli_query($conn,"SET NAMES 'utf8'");
	}else{
		die("ket noi that bai ".mysqli_connect_error());
	}

?>