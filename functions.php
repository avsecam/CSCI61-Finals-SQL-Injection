<?php
error_reporting(E_ALL & ~E_NOTICE);

function connect(){
	$conn = mysqli_connect('localhost', 'root', '', 'injector');

	if (!$conn){
		echo "Connection failed: " . mysqli_connect_error();
	}

	return $conn;
}

function closeConn($c){
	mysqli_close($c);
}
?>