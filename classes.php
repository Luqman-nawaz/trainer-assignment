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
  <div class="clearfix"></div>
  
  <section class="section">
    <div class="bottom-shape1"></div>
    <div class="container sec-tpadding-4 shape-bpadding2">
      <div class="row no-gutter"> <br/>
        <br/>
        <div class="col-sm-12 text-left">
          <h4 class="section-title-small dark uppercase oswald">What we offer</h4>
          <h1 class="section-title-3 dark uppercase oswald">OUR CLASSES</h1>
          <div class="title-line-3 dark"></div>
        </div>
        <div class="clearfix"></div>
        <?php
            $q = "SELECT *, trainer_classes.id as classid FROM `trainer_classes` INNER JOIN `trainers` ON `trainers`.id = `trainer_classes`.trainer_id ORDER by trainer_classes.id DESC LIMIT 6";
            $r = mysqli_query($con, $q);
            while($re = mysqli_fetch_assoc($r)){
        ?>
        <div class="col-md-4 col-sm-6 bmargin m-1" style="margin-right:5px;">
          <div class="image-holder"><img src="images/classes/<?= $re['class_picture']; ?>" alt="" class="img-responsive"/></div>
        <h3 class="section-title text-left oswald margin-top3"><?= $re['class_name']; ?></h3>
          <h6>By: <?= $re['name']; ?> </h6>
          <p>Length: <?= $re['class_duration']; ?></p 
          >
          <br/>
          <a href="book_class.php?classid=<?= $re['classid']; ?>" class="btn btn-red btn-xround uppercase">Book Now</a> 
        </div>
        <?php } ?>
        
      </div>
    </div>
  </section>

  <div class="clearfix"></div>
  <section class="section-red">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-centered text-center">
          <ul class="socialicon-big">
            <li><a class="twitter" href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <?php require 'vendor/includes/footer.php'; ?>
</body>
</html>
