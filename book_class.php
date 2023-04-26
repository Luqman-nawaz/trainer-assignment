<?php

	//checking post request

	    	session_start();

            if(!isset($_SESSION['useremail'])){
                header('location:user/register.php');
            }

			if(!isset($_SESSION['userpassword'])){
				header('location:user/register.php');
			}

			//database connection

			require_once 'vendor/includes/config.php';
			

			//games table
            $email = $_SESSION['useremail'];
            $q_user_id = "SELECT * FROM `users` WHERE `email` = '$email'";
            $r_user_id = mysqli_query($con, $q_user_id);
            $re_user_id = mysqli_fetch_assoc($r_user_id);
            $user_id = $re_user_id['id'];

			$class_id = $_GET['classid'];

			$check_q = "SELECT * FROM `user_classes` WHERE `class_id` = '$class_id' && `user_id` = '$user_id'";
			$check_r = mysqli_query($con, $check_q);

			if(mysqli_num_rows($check_r) > 0){
				header('location:user/mg-classes.php?err=Class Already enrolled');
				die();
			}

			//processing image with name convert to microseconds

			$q = "INSERT INTO `user_classes` (`user_id`, `class_id`) VALUES (?,?);";

		    $statement = mysqli_stmt_init($con);

		    if(!mysqli_stmt_prepare($statement, $q)){

		    	header("location:add-a-class.php?error=Class could not be added!");

		    	die();

		    }

		    mysqli_stmt_bind_param($statement, "ii", $user_id, $class_id);

		    if(mysqli_stmt_execute($statement)){

		        header('location:user/mg-classes.php?done=Class added!');

		        die();

		    }else{

                header("location:user/mg-classes.php?err=Couldn't enroll class");

            }

	?>