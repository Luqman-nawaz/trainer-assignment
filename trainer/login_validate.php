<?php

	//checking for POST request

    if(!$_SERVER['REQUEST_METHOD'] == 'POST'){

        header("location:../");

    }

    	//Checking if any input is empty

		if(empty($_POST['email']) OR empty($_POST['userpass'])){ 

			header("location:login.php?empty"); 

		}



		//database connection

		require_once 'vendor/includes/config.php';



		$email = mysqli_real_escape_string($con, $_POST['email']);

		$userpass = mysqli_real_escape_string($con, $_POST['userpass']);



		//selecting details from database

		$q = "SELECT * FROM `trainers` WHERE `email` = ?;";

		$statement = mysqli_stmt_init($con);

		if(!mysqli_stmt_prepare($statement, $q)){

			header("location:login.php?s");

		}

		mysqli_stmt_bind_param($statement, "s", $email);

		mysqli_stmt_execute($statement);

		$result = mysqli_stmt_get_result($statement);

		$row = mysqli_fetch_assoc($result);

		$hash = $row['password'];

		

		if(password_verify($userpass, $hash)){

			session_start();

			$_SESSION['email'] = $email;

			$_SESSION['userpass'] = $userpass;

			header("location:index.php?done");

    	}else{

    			header("location:login.php?err");

    	}

?>

