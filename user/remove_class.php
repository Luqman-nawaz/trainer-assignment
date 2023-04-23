<?php 

    session_start();

    if(!$_SESSION['email'] && $_SESSION['userpass']){

    	header("location:index.php");

    }

	require_once 'vendor/includes/config.php';

	$id = mysqli_real_escape_string($con, $_GET['id']);
	
	$userid = $_GET['userid'];

	$q = "DELETE FROM `user_classes` WHERE `user_id` = '$userid' && `class_id` = '$id';";

	if(mysqli_query($con, $q)){

		header("location:mg-classes.php?done=Class Removed Successfully");

	}else{

		header("location:mg-classes.php?err=Could not remove class");

	}



?>