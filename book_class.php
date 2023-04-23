<?php

	//checking post request

	    session_start();

            if(!$_SESSION['useremail'] && !$_SESSION['userpassword']){
                header('user/register.php');
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