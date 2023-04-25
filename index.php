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
      <img src="images/classes/<?= $re['class_picture']; ?>" data-src="images/classes/<?= $re['class_picture']; ?>" alt=""/>
      
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

  <section class="parallax-section16 section">
    <div class="bottom-shape1"></div>
    <div class="section-overlay bg-opacity-7">
      <div class="container sec-tpadding-4 shape-bpadding2">
        <div class="row"> <br/>
          <br/>
          <div class="col-sm-12 text-left">
            <h4 class="section-title-small text-white uppercase oswald">Our History</h4>
            <h1 class="section-title-3 text-white uppercase oswald">About Us</h1>
            <div class="title-line-3"></div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-4 col-sm-6">
            <div class="feature-box24 bmargin">
              <div class="inner">
                <h4 class="text-white uppercase oswald">our History</h4>
                <p class="text-white">We are Professionals.</p>
                <br/>
                <a class="but" href="#">Read more</a> </div>
              <div class="image-holder">
                <div class="overlay"></div>
                <img src="http://placehold.it/400x450" alt="" class="img-responsive"/> </div>
            </div>
          </div>
          <!--end item -->
          
          <div class="col-md-4 col-sm-6">
            <div class="feature-box24 bmargin">
              <div class="inner">
                <h4 class="text-white uppercase oswald">our Training</h4>
                <p class="text-white">We are Tough.</p>
                <br/>
                <a class="but" href="#">Read more</a> </div>
              <div class="image-holder">
                <div class="overlay"></div>
                <img src="http://placehold.it/400x450" alt="" class="img-responsive"/> </div>
            </div>
          </div>
          <!--end item -->
          
          <div class="col-md-4 col-sm-6">
            <div class="feature-box24 bmargin">
              <div class="inner">
                <h4 class="text-white uppercase oswald">our Classes</h4>
                <p class="text-white">But our classes are flexible</p>
                <br/>
                <a class="but" href="#">Read more</a> </div>
              <div class="image-holder">
                <div class="overlay"></div>
                <img src="http://placehold.it/400x450" alt="" class="img-responsive"/> </div>
            </div>
          </div>
          <!--end item --> 
          
        </div>
      </div>
      <div class="top-shape2"></div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>

  
  <section class="parallax-section17 section">
    <div class="bottom-shape2"></div>
    <div class="section-overlay bg-opacity-7">
      <div class="container sec-tpadding-4 shape-bpadding2">
        <div class="row">
          <div class="col-md-8 col-centered paddtop4"> <br/>
            <br/>
            <h1 class="text-white lessmar uppercase oswald"><strong>Group Training Programs</strong></h1>
            <h3 class="text-white uppercase">Get 40% off on 1year plan</h3>
            <p class="text-white">Book classes for 1 year Right now & get 40% off.</p>
            <br/>
            <a class="btn btn-red btn-round" href="#">BOOK NOW</a> </div>
        </div>
      </div>
      <div class="top-shape2 dark"></div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="section-fulldark">
    <div class="container shape-bpadding2">
      <div class="row">
        <div class="col-sm-12 text-left">
          <h4 class="section-title-small text-white uppercase oswald">fitness training</h4>
          <h1 class="section-title-3 text-white uppercase oswald">our classes</h1>
          <div class="title-line-3"></div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-3 col-sm-6 text-center bmargin">
          <div class="iconbox-dxlarge round overflow-hidden"><img src="http://placehold.it/220x220" alt="" class="img-responsive"/></div>
          <br/>
          <h4 class="text-white oswald">Live Chat</h4>
          <p>Chat Directly with the trainer during workout.</p>
        </div>
        <!--end item-->
        
        <div class="col-md-3 col-sm-6 text-center bmargin">
          <div class="iconbox-dxlarge round overflow-hidden"><img src="http://placehold.it/220x220" alt="" class="img-responsive"/></div>
          <br/>
          <h4 class="text-white oswald">Timed Classes</h4>
          <p>Check duration of classes before joining.</p>
        </div>
        <!--end item-->
        
        <div class="col-md-3 col-sm-6 text-center bmargin">
          <div class="iconbox-dxlarge round overflow-hidden"><img src="http://placehold.it/220x220" alt="" class="img-responsive"/></div>
          <br/>
          <h4 class="text-white oswald">Group Classes</h4>
          <p>Have group classes with trainers.</p>
        </div>
        <!--end item-->
        
        <div class="col-md-3 col-sm-6 text-center bmargin">
          <div class="iconbox-dxlarge round overflow-hidden"><img src="http://placehold.it/220x220" alt="" class="img-responsive"/></div>
          <br/>
          <h4 class="text-white oswald">Self-Paced Classes</h4>
          <p>Go with your own pace with classes</p>
        </div>
        <!--end item--> 
        
      </div>
    </div>
    <div class="bottom-shape3"></div>
  </section>
  <!--end section-->

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
