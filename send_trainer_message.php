<?php

    
    session_start();

    if(!$_SERVER['REQUEST_METHOD'] == 'POST'){
        header('location:index.php');
    }

    if(!$_SESSION['email'] && !$_SESSION['userpass']){
        header('location:index.php?1');
    }

    require_once 'vendor/includes/config.php';

    $email = $_SESSION['email'];
    $q_user_id = "SELECT * FROM `trainers` WHERE `email` = '$email'";
    $r_user_id = mysqli_query($con, $q_user_id);
    $re_user_id = mysqli_fetch_assoc($r_user_id);
    $user_id = $re_user_id['id'];

    $messageby = "tutor";
    $class_id = $_POST['class_id'];
    $tutor = $_POST['tutor_id'];
    $message = $_POST['message'];

    $q = "INSERT INTO `messages` (`user_id`, `class_id`, `trainer_id`, `message`, `message_by`) VALUES ('$user_id', '$class_id', '$tutor', '$message', '$messageby')";
    $r = mysqli_query($con, $q);
    if($r){
        header('location:class.php?id='.$class_id.'&done=Message Sent!#chat');
    }else{
        header('location:class.php?id='.$class_id.'&err=Could not send message!#chat');
    }