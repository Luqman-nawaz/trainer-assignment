<?php

	//checking post request

		if(!$_SERVER['REQUEST_METHOD'] == 'POST'){

            header('location:logout.php');

		}



			//database connection

			require_once 'vendor/includes/config.php';



			//checking inputs
    			if(empty($_POST['email']) OR empty($_POST['userpass']) OR empty($_POST['name']) OR empty($_POST['userimage'])){

    				header("location:register.php?err=Empty Details");

    			}
			
			

			

			//games table
            $email = $_POST['email'];

            $password = password_hash($_POST['userpass'], PASSWORD_BCRYPT);

			$name = $_POST['name'];

			$created_at = date("Y-m-d H:i:s");

			$updated_at = date("Y-m-d H:i:s");

			

			//processing image with name convert to microseconds

			$uploaddir = "../images/trainers/";

		    $temp = explode(".", $_FILES["featured_image"]["name"]);

		    $rounded = round(microtime(true));

		    $newfilename = $_FILES["featured_image"]["name"] . '-' . $rounded . '.' . end($temp);

		    move_uploaded_file($_FILES["featured_image"]["tmp_name"], $uploaddir . $newfilename);

			
            $q = "INSERT INTO `trainers` (`email`, `password`, `name`, `profile_picture`, `created_at`, `updated_at`) VALUES (?,?,?,?,?,?);";

		    $statement = mysqli_stmt_init($con);

		    if(!mysqli_stmt_prepare($statement, $q)){

		    	header("location:register.php?err=Some serious error occured!");

		    	die();

		    }

		    mysqli_stmt_bind_param($statement, "ssssss", $email, $password, $name, $newfilename, $created_at, $updated_at);

		    if(!mysqli_stmt_execute($statement)){

		        header('location:login.php?done=Registered Sucessfully, Please Login!');


		    }else{

                header("location:register.php?err=Failed to register");

            }

	?>