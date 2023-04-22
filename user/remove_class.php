<?php 

    session_start();

    if(!$_SESSION['email'] && $_SESSION['userpass']){

    	header("location:index.php");

    }

	require_once 'vendor/includes/config.php';

	$id = mysqli_real_escape_string($con, $_GET['id']);

	$q = "DELETE FROM `trainer_classes` WHERE `id` = ?;";

	$statement = mysqli_stmt_init($con);

	if(!mysqli_stmt_prepare($statement, $q)){

		header("location:mg-classes.php?err");

	}

	mysqli_stmt_bind_param($statement, "i", $id);

	if(mysqli_stmt_execute($statement)){

		header("location:mg-classes.php?rdone");

	}else{

		header("location:mg-classes.php?err");

	}



?>