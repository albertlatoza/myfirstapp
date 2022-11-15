<?php

include '../bootstrapper.php';

$user = new User($db_connect); //init user

if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (isset($_POST['login'])) {
		# code...
		$username = $_POST['username'];
		$password = $_POST['password'];

		$result = $user->login_user($username, $password);

		if ($result->rowCount() > 0) {
			$logged_in_user = $result->fetch(PDO::FETCH_OBJ);

			// set session variable
			$_SESSION['user_id'] = $logged_in_user->id;
			$_SESSION['email'] = $logged_in_user->email;
			$_SESSION['fullname']=$logged_in_user->fullname;


			// redirect
			header('location: '.URLROOT.'/index.php');
		}else{
			header('location: '.URLROOT.'/login.php');


		}
	} elseif (isset($_POST['register'])) {
		// register process
		$result = $user->register($_POST);

		
	}	
}

?>