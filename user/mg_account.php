<?php 

    session_start();

    if($_SESSION['useremail'] && $_SESSION['userpassword']){

	require_once 'vendor/includes/config.php';

	if(!$_SERVER['REQUEST_METHOD'] == 'POST'){

		header("location:logout.php");

	}

	$email = $_SESSION['useremail'];

	$currentpass = mysqli_real_escape_string($con, $_POST['currentpass']);

	$newpass = mysqli_real_escape_string($con, $_POST['newpass']);

	$password = password_hash($newpass, PASSWORD_BCRYPT);

	$q = "SELECT * FROM `users` WHERE `email` = '$email'";

	$r = mysqli_query($con, $q);

	$re = mysqli_fetch_assoc($r);

	$hash = $re['password'];

		if(password_verify($currentpass, $hash)){

			$q_change = "UPDATE `users` set `password` = '$password' WHERE `email` = '$email'";

			$r_change = mysqli_query($con, $q_change);

			if($r_change){

				header("location:logout.php");

			}else{

				header("location:mg-account.php?err");

			

			}

		}else{

		    header("location:mg-account.php?unmatch");

		}

		}else{

	    header("location:logout.php");

	}



?>