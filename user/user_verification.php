<?php

session_start();

if(!$_SESSION['useremail'] && $_SESSION['userpassword']){

	header("location:login.php");

}



if(!$_SERVER['REQUEST_METHOD'] == 'POST'){

    header("location:index.php");

}

//Database connection

require_once 'vendor/includes/config.php';

$email = $_SESSION['useremail'];
$q_user_id = "SELECT * FROM `users` WHERE `email` = '$email'";
$r_user_id = mysqli_query($con, $q_user_id);
$re_user_id = mysqli_fetch_assoc($r_user_id);
$user_id = $re_user_id['id'];

$status = 0;

$q = "SELECT `ver_code` FROM `user_verification` WHERE `user_id` = ?";

$statement = mysqli_stmt_init($con);

if(!mysqli_stmt_prepare($statement, $q)){

	die();

}

mysqli_stmt_bind_param($statement, "i", $user_id);

mysqli_stmt_execute($statement);

$result = mysqli_stmt_get_result($statement);

$row = mysqli_fetch_assoc($result);

$code = $row['ver_code'];

$vcode = mysqli_real_escape_string($con, $_POST['ver_code']);

if($code == $vcode){

	$newstatus = 1;

	$q_ver = "UPDATE `user_verification` SET `status` = ? WHERE `user_id` = ?;";

	$stmt_ver = mysqli_stmt_init($con);

	if(!mysqli_stmt_prepare($stmt_ver, $q_ver)){

	header("location:index.php");

		die();

	}

	mysqli_stmt_bind_param($stmt_ver, "ii",$newstatus, $user_id);

	mysqli_stmt_execute($stmt_ver);

	header("location:mg-classes.php");

}

die();