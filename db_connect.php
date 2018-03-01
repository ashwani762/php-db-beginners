<?php

/** 
* A class to connect with databse 
*/

class DB_CONNECT{

	//Function to connect to database
	function connect(){
		require_once __DIR__ . '/config.php';
		$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS) or die(mysqli_connect_error());

		mysqli_select_db($con, DB_DATABASE) or die(mysqli_connect_error());

		return $con;
	
	}
}