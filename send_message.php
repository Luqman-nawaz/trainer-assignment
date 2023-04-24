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

    $class_id = $_POST['class_id'];
    $tutor = $_POST['tutor_id'];
    $message = $_POST['message'];

    $q = "INSERT INTO `messages` (`user_id`, `class_id`, `trainer_id`, `message`) VALUES ('$user_id', '$class_id', '$tutor', '$message')";
    $r = mysqli_query($con, $q);
    if($r){
        header('location:class.php?id='.$class_id.'&done=Message Sent!');
    }else{
        header('location:class.php?id='.$class_id.'&err=Could not send message!');
    }