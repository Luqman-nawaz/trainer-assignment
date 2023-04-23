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
  
  <!-- masterslider -->
  <div class="master-slider ms-skin-default" id="masterslider"> 
    

    <?php
      $q_slider = "SELECT *, trainer_classes.`id` as classid FROM `trainer_classes` INNER JOIN `trainers` ON `trainer_classes`.trainer_id = `trainers`.id LIMIT 6";
      $r = mysqli_query($con, $q_slider);
      while($re = mysqli_fetch_assoc($r)){
    ?>
    <!-- slide 1 -->
    <div class="ms-slide slide-1" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="js/masterslider/blank.gif" data-src="http://placehold.it/1920x865" alt=""/>
      
     <h3 class="ms-layer text15"
			style="top: 270px; left:225px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="left(250)"></h3>
            
      <h3 class="ms-layer text16"
			style="top: 320px; left:225px;"
			data-type="text"
			data-delay="1000"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)"> <?= $re['class_name']; ?></h3>
            
      <h3 class="ms-layer text17"
        	style="top: 370px; left:225px;"
            data-type="text"
            data-effect="top(45)"
            data-duration="2000"
            data-delay="1500"
            data-ease="easeOutExpo"> Class By <?= $re['name']; ?> </h3>
        
      <a href="book_class.php?classid=<?= $re['classid']; ?>" 
      class="ms-layer sbut6"
			style="left: 225px; top: 460px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="left(250)"> Book now </a>
             
            </div>
    <!-- end slide 1 --> 
    
    <?php } ?>
    
    
    
  </div>
  <!-- end of masterslider -->
  <div class="clearfix"></div>
  
  <section class="section-red section">
    <div class="top-shape1"></div>
    <div class="container sec-bpadding-2">
      <div class="row">
        <h4 class="section-title-small text-white uppercase oswald">Our Best services</h4>
        <h1 class="section-title-3 text-white uppercase oswald">What We Offer</h1>
        <div class="title-line-3"></div>
        <div class="clearfix"></div>
        <div class="col-md-3 text-center">
          <div class="iconbox-xlarge no-lineheight white-outline round"><img src="images/127.png" alt=""/></div>
          <br/>
          <h4 class="text-white uppercase oswald">body building classes</h4>
        </div>
        <!--end item-->
        
        <div class="col-md-3 text-center">
          <div class="iconbox-xlarge no-lineheight white-outline round"><img src="images/128.png" alt=""/></div>
          <br/>
          <h4 class="text-white uppercase oswald">Live Cardio Exercises</h4>
        </div>
        <!--end item-->
        
        <div class="col-md-3 text-center">
          <div class="iconbox-xlarge no-lineheight white-outline round"><img src="images/129.png" alt=""/></div>
          <br/>
          <h4 class="text-white uppercase oswald">Latest methodology</h4>
        </div>
        <!--end item-->
        
        <div class="col-md-3 text-center">
          <div class="iconbox-xlarge no-lineheight white-outline round"><img src="images/127.png" alt=""/></div>
          <br/>
          <h4 class="text-white uppercase oswald">Personal Training</h4>
        </div>
        <!--end item--> 
        
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
