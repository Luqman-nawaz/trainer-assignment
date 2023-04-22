<?php

	//checking post request

	    session_start();

	    

		if(!$_SERVER['REQUEST_METHOD'] == 'POST'){

            header('location:logout.php');

		}



			//database connection

			require_once 'vendor/includes/config.php';



			//checking inputs
    			if(empty($_POST['title']) OR empty($_POST['version']) OR empty($_POST['extra_title']) OR empty($_POST['description']) OR empty($_POST['slug']) OR empty($_POST['release_date']) OR empty($_POST['genres']) OR empty($_POST['languages']) OR empty($_POST['platforms']) OR empty($_POST['creator_name']) OR empty($_POST['creator_url']) OR empty($_POST['trailer_title']) OR empty($_POST['trailer_url']) OR empty($_POST['meta_title']) OR empty($_POST['meta_description']) OR empty($_POST['rating']) OR empty($_POST['rating_votes']) OR empty($_POST['download_type']) OR empty($_POST['download_link']) OR empty($_POST['download_size']) OR empty($_POST['minimum_requirements']) OR empty($_POST['recommended_requirements'])){

    				header("location:add-a-game.php?empty");

    			}
			
			

			

			//games table
            $email = $_SESSION['email'];
            $q_user_id = "SELECT * FROM `trainers` WHERE `email` = '$email'";
            $r_user_id = mysqli_query($con, $q_user_id);
            $re_user_id = mysqli_fetch_assoc($r_user_id);
            $user_id = $re_user_id['id'];

			$class_name = $_POST['class_name'];

			$class_duration = $_POST['class_duration'];

            $class_details = $_POST['class_details'];

			$created_at = date("Y-m-d H:i:s");

			$updated_at = date("Y-m-d H:i:s");

			

			//processing image with name convert to microseconds

			$uploaddir = "../images/classes";

		    $temp = explode(".", $_FILES["featured_image"]["name"]);

		    $rounded = round(microtime(true));

		    $newfilename = $_FILES["featured_image"]["name"] . '-' . $rounded . '.' . end($temp);

		    move_uploaded_file($_FILES["featured_image"]["tmp_name"], $uploaddir . $newfilename);

			
            $q = "INSERT INTO `trainer_classes` (`trainer_id`, `class_name`, `class_picture`, `class_duration`, `class_details`, `created_at`, `updated_at`) VALUES (?,?,?,?,?,?,?);";

		    $statement = mysqli_stmt_init($con);

		    if(!mysqli_stmt_prepare($statement, $q)){

		    	header("location:add-a-class.php?error=Class could not be added!");

		    	die();

		    }

		    mysqli_stmt_bind_param($statement, "issssss", $user_id, $class_name, $newfilename, $class_duration, $class_details, $created_at, $updated_at);

		    if(!mysqli_stmt_execute($statement)){

		        header('location:add-a-class.php?error=Class Could not be added!');

		        die();

		    }else{

                header("location:mg-classes.php?done=Class Added Successfully");

            }

	?>