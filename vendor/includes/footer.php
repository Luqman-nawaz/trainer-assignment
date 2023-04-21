<section class="section-fulldark">
    <div class="top-shape2 red2"></div>
    <div class="container sec-bpadding-2">
      <div class="row">
      
      <div class="col-md-3 clearfix">
          <div class="footer-logo"><img src="images/flogo.png" alt=""/></div>
          <ul class="address-info">
            <li>Address: No.28 - 63739 street lorem ipsum City, Country</li>
            <li><i class="fa fa-home"></i> Phone: + 1 (234) 567 8901</li>
             <li><i class="fa fa-phone"></i> Phone: + 1 (234) 567 8901</li>
            <li><i class="fa fa-fax"></i> Fax: + 1 (234) 567 8901</li>
            <li class="last"><i class="fa fa-envelope"></i> Email: support@yoursite.com </li>
          </ul>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <div class="item-holder">
            <h4 class="uppercase footer-title less-mar3 oswald">Recent Posts</h4>
            <div class="footer-title-bottomstrip"></div>
            <div class="clearfix"></div>
            <div class="image-left"><img src="http://placehold.it/80x80" alt=""/></div>
            <div class="text-box-right">
              <h5 class="text-white less-mar3"><a href="#">Clean And Modern</a></h5>
              <p>Lorem ipsum dolor sit</p>
              <div class="footer-post-info"> <span>By John Doe</span><span>May 19</span> </div>
            </div>
            <div class="divider-line solid dark margin"></div>
            <div class="image-left"><img src="http://placehold.it/80x80" alt=""/></div>
            <div class="text-box-right">
              <h5 class="text-white less-mar3"><a href="#">Layered PSD Files</a></h5>
              <p>Lorem ipsum dolor sit</p>
              <div class="footer-post-info"> <span>By John Doe</span><span>May 19</span> </div>
            </div>
          </div>
        </div>
        <!--end item-->

        <div class="col-md-3 clearfix">
          <div class="item-holder">
            <h4 class="uppercase footer-title less-mar3 oswald">Opening Hours </h4>
            <div class="clearfix"></div>
            <div class="footer-title-bottomstrip"></div>
            <div class="clearfix"></div>
            
			 <ul class="opening-list">
            <li><span class="pull-left">Monday</span> <span class="pull-right">06.00 - 22.00</span></li>
            <div class="clearfix"></div>
            <li><span class="pull-left">Monday</span> <span class="pull-right">06.00 - 22.00</span></li>
            <li><span class="pull-left">Tuesday </span> <span class="pull-right">06.00 - 22.00</span></li>
            <li><span class="pull-left">Wednesday</span> <span class="pull-right">06.00 - 22.00</span></li>
            <li><span class="pull-left">Thursday</span> <span class="pull-right">06.00 - 22.00</span></li>
            <li><span class="pull-left">Friday - Saturday</span> <span class="pull-right">06.00 - 22.00</span></li>
            
          </ul>
            
            
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <h4 class="uppercase footer-title less-mar3 oswald">Flickr Gallery</h4>
          <div class="clearfix"></div>
          <div class="footer-title-bottomstrip"></div>
          <ul id="basicuse" class="thumbs">
          </ul>
        </div>
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="section-copyrights sec-moreless-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> <span>Copyright © 2019 <a href="https://1.envato.market/hasta-html-by-codelayers">hasta</a> By <a href="https://1.envato.market/codelayers">Codelayers</a> | All rights reserved.</span></div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  <a href="#" class="scrollup red"></a><!-- end scroll to top of the page--> 
</div>
<!-- end site wraper --> 

<!-- ============ JS FILES ============ --> 
<script type="text/javascript" src="js/universal/jquery.js"></script> 
<script src="js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jFlickrFeed/jflickrfeed.min.js"></script> 
<script src="js/masterslider/jquery.easing.min.js"></script> 
<script src="js/masterslider/masterslider.min.js"></script> 
<script type="text/javascript">
(function($) {
 "use strict";
	var slider = new MasterSlider();
	// adds Arrows navigation control to the slider.
	slider.control('arrows');
	slider.control('bullets');
	
	slider.setup('masterslider' , {
		 width:1600,    // slider standard width
		 height:865,   // slider standard height
		 space:0,
		 speed:45,
		 layout:'fullwidth',
		 loop:true,
		 preload:0,
		 autoplay:true,
		 view:"parallaxMask"
	});

})(jQuery);
</script>

<script>
$('#basicuse').jflickrfeed({
limit: 6,
qstrings: {
id: '133294431@N08'
},
itemTemplate: 
'<li>' +
'<a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
'</li>'
});
</script>

<script src="js/mainmenu/customeUI.js"></script> 
<script src="js/mainmenu/jquery.sticky.js"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script> 
<script src="js/owl-carousel/custom.js"></script> 
<script src="js/scrolltotop/totop.js"></script> 
 
<script src="js/scripts/functions.js" type="text/javascript"></script>