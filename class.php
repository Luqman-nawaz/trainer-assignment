<?php 
session_start();
require_once 'vendor/includes/config.php'; ?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--<![endif]-->
<html lang="en">
<?php require 'vendor/includes/header.php'; ?>

<body>
<div class="site_wrapper">
  <?php require 'vendor/includes/nav.php'; ?>
  <!--end menu-->
  <?php
    $id = $_GET['id'];
    $q = "SELECT * FROM `trainer_classes` WHERE `id` = '$id'";
    $r = mysqli_query($con, $q);
    $re = mysqli_fetch_assoc($r);
  ?>
  <section class="section">
    <div class="section-overlay bg-opacity-7">
      <div class="container sec-tpadding-4 shape-bpadding2">
        <img src="images/classes/<?= $re['class_picture']; ?>" class="img-fluid rounded mx-auto d-block" style="margin-bottom:25px; width:1180px; height:720px;" alt="Responsive image" />
        <div class="row">
          <div class="col-sm-12 text-left">
            <h1 class="section-title-3 text-white uppercase oswald"><?= $re['class_name']; ?></h1>
            <p style="color:white;"><?= $re['class_duration']; ?></p>
            <hr>
            <form action="add_rating.php" method="post">
              <input type="text" style="display:none;" name="tutor_id" value="<?= $re['trainer_id']; ?>"/>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Rate the Trainer
                <select class="form-control" name="rating" id="exampleFormControlSelect1">
                  <option value="1">⭐</option>
                  <option value="2">⭐⭐</option>
                  <option value="3">⭐⭐⭐</option>
                  <option value="4">⭐⭐⭐⭐</option>
                  <option value="5">⭐⭐⭐⭐⭐</option>
                </select>
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Submit Rating</button>
            </form>

            <hr>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-6 col-sm-6">
            <div class="feature-box24 bmargin" style="color:white;">
                <?= $re['class_details']; ?>
            </div>
          </div>

          <div class="col-md-6 col-sm-6" style="border:solid white 1px;">
            <div class="feature-box24 bmargin" style="color:white;">
              <?php
                $email = $_SESSION['useremail'];
                $q_user_id = "SELECT * FROM `users` WHERE `email` = '$email'";
                $r_user_id = mysqli_query($con, $q_user_id);
                $re_user_id = mysqli_fetch_assoc($r_user_id);
                $user_id = $re_user_id['id'];

                $q_messages = "SELECT * FROM `messages` WHERE `user_id` = '$user_id' && `class_id` = '$id'";
                $r_messages = mysqli_query($con, $q_messages);
                while($re_messages = mysqli_fetch_assoc($r_messages)){
              ?>
                <p><small></small> <?= $re_messages['message']; ?></p>
              <?php } ?>
              
              <form action="send_message.php" method="post">
                  <input type="text" style="display:none;" name="tutor_id" value="<?= $re['trainer_id']; ?>"/>
                  <input type="text" style="display:none;" name="class_id" value="<?= $id; ?>"/>
                  <input class="form-control" style="margin-bottom:10px;" name="message" type="text" placeholder="Write your message">
                  <button type="submit" style="margin-bottom:10px;" class="btn btn-primary">Send Message</button>
                </form>
            </div>
          </div>
          <!--end item -->



        </div>
      </div>
      <div class="top-shape2"></div>
    </div>
  </section>
  <!--end section-->

  <!--end section-->
  
  <?php require 'vendor/includes/footer.php'; ?>
</body>
</html>
