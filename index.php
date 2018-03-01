<?php
	require_once __DIR__ . '/db_connect.php';
	require_once __DIR__ . '/config.php';

	if($_SERVER['REQUEST_METHOD'] === 'GET'){
		echo "GET request not allowed";
	}

	else if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$data = json_decode(file_get_contents('php://input'), TRUE);
		$user = $data["user"];
		$pass = $data["pass"];

		$db = new DB_CONNECT();

		$con = $db->connect();
		$insert_query = "INSERT into " . DB_TABLE . " (user, pass) VALUES ('$user','$pass');";
		$result = mysqli_query($con, $insert_query);

		if($result == true){
			$res = array("result"=>"Successful");
			echo json_encode($res);
		}
	}

?>