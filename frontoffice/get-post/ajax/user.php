<?php 
require '../../../class/include.php';
header("content-type: application/json; charset=UTF8");

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$USER = new UserO(NULL);
	if($USER->login($username,$password)){
		$result = ["status"=>'success'];
		echo json_encode($result);
		exit();
	}else{
		$result = ["status"=>0];
		echo json_encode($result);
		exit();
	}
	}

if (isset($_POST['logout'])) {
		// Helper::dd($_POST);
	$USER = new UserO(NULL);
	if($USER->logout()){
		$result = ["status"=>'success'];
		echo json_encode($result);
		exit();
	}else{
		$result = ["status"=>0];
		echo json_encode($result);
		exit();
	}
}
 ?>