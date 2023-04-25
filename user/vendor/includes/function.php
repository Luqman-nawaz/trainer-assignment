<?php

function checkVerification(){

    global $con;

    $email = $_SESSION['useremail'];
    $q_user_id = "SELECT * FROM `users` WHERE `email` = '$email'";
    $r_user_id = mysqli_query($con, $q_user_id);
    $re_user_id = mysqli_fetch_assoc($r_user_id);
    
    $user_id = $re_user_id['id'];

	$q_ver = "SELECT * FROM `user_verification` WHERE `user_id` = ?;";

	$s_ver = mysqli_stmt_init($con);

	if(!mysqli_stmt_prepare($s_ver, $q_ver)){

		return false;

		die();

	}

	mysqli_stmt_bind_param($s_ver, "i", $user_id);

	mysqli_stmt_execute($s_ver);

	$r_ver = mysqli_stmt_get_result($s_ver);

	$re_ver = mysqli_fetch_assoc($r_ver);

	$status = $re_ver['status'];

	if($status == 1){

		return true;

	}else{

		return false;

	}

}