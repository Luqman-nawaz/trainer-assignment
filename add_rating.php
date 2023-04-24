<?php

    
    session_start();

    if(!$_SERVER['REQUEST_METHOD'] == 'POST'){
        header('location:index.php');
    }

    if(!$_SESSION['useremail'] && !$_SESSION['userpassword']){
        header('location:index.php');
    }

    require_once 'vendor/includes/config.php';

    $email = $_SESSION['useremail'];
    $q_user_id = "SELECT * FROM `users` WHERE `email` = '$email'";
    $r_user_id = mysqli_query($con, $q_user_id);
    $re_user_id = mysqli_fetch_assoc($r_user_id);
    $user_id = $re_user_id['id'];

    $rating = $_POST['rating'];
    $tutor = $_POST['tutor_id'];
    $q = "INSERT INTO `trainer_rating` (`user_id`, `trainer_id`, `rating`) VALUES ('$user_id', '$tutor', '$rating')";
    $r = mysqli_query($con, $q);
    if($r){
        header('location:user/index.php?done=Rating Submitted Successfully');
    }else{
        header('location:user/index.php?err=Rating Not Submitted');
    }