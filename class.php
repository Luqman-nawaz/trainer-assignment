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
        <div class="row">
          <div class="col-sm-12 text-left">
            <h1 class="section-title-3 text-white uppercase oswald"><?= $re['class_name']; ?></h1>
            <p style="color:white;"><?= $re['class_duration']; ?></p>
            <div class="title-line-3"></div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 col-sm-12">
            <div class="feature-box24 bmargin" style="color:white;">
                <?= $re['class_details']; ?>
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
