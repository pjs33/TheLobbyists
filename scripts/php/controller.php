<?php

	require_once("DatabaseAdaptor.php");

	$model = new DatabaseConnection();

	if( isset($_POST["login"]) ) {

		$username = $_POST["username"];
		$password = $_POST["password"];


		if( $model->verifyLogin($username, $password) ) {
			session_start();
			$_SESSION["username"] = $username;
			header("location: http://localhost/HackArizona/");
			exit();
		} else {
			header("location: http://localhost/HackArizona/login.php?failed");
			exit();
		}

	} else if( isset($_POST["getPopularIssues"]) ) {

		$scope = $_POST["scope"];

		$popIssueArray = $model->getPopularIssues($scope);

		$jsonArray = json_encode($popIssueArray);

		echo $jsonArray;

	} else if( isset($_POST["signup"]) ) {

		$username = $_POST["username"];
		$realname = $_POST["realname"];
		$email = $_POST["email"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		$state = $_POST["state"];
		$zipcode = $_POST["zipcode"];
		$password = $_POST["password"];
		$addedNewUser = $model->register($username, $realname, $email, $address, $city, $state, $zipcode, $password);

		if( $addedNewUser ) {
			header("location: http://localhost/HackArizona/login.php");
			exit();
		} else {
			header("location: http://localhost/HackArizona/signup.php?failed");
			exit();
		}

	
	}

?>