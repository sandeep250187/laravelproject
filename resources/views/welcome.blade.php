@extends('layouts.master')

@section('title', 'India Adventures | Adventure Sports Setup | Rides Manufacturers | Buy Directly From Factory')


@include('partials.header')
	<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
  .blog .carousel-indicators {
  left: 0;
  top: auto;
    bottom: -40px;

}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 50%;
    width: 8px;
    height: 8px;
}

.blog .carousel-indicators .active {
background: #707070;
}




/*** TestimonialS Slider - Free Weebly Widget by Baamboo Studio - Style 2 ***/
.testimonial_slider_2{
	width:100%;
	border: 1px solid #ebebeb;
	overflow:hidden;
	box-sizing:border-box;
	padding-bottom:30px;
}
.testimonial_slider_2 input {
	display: none;
}

.testimonial_slider_2 #slide_2_1:checked ~ .boo_inner { margin-left:0; }
.testimonial_slider_2 #slide_2_2:checked ~ .boo_inner { margin-left:-100%; }
.testimonial_slider_2 #slide_2_3:checked ~ .boo_inner { margin-left:-200%; }
.testimonial_slider_2 #slide_2_4:checked ~ .boo_inner { margin-left:-300%; }
.testimonial_slider_2 .boo_inner {
	width:400%;
	-webkit-transform: translateZ(0);
	-webkit-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000); 
	-moz-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000); 
    -ms-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000); 
    -o-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000); 
    transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000); /* easeInOutQuart */

	-webkit-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000); 
	-moz-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000); 
    -ms-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000); 
    -o-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000); 
    transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000); /* easeInOutQuart */
}
.testimonial_slider_2 .slide_content{
	width:25%;
	float:left;
}
.testimonial_slider_2 #controls {
	text-align:center;
}
.testimonial_slider_2 #controls label{
	width:8px;
	height:8px;
	margin:0 2px;
	display:inline-block;
	background:#999; /* Change controls background color */
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
}
.testimonial_slider_2 #slide_2_1:checked ~ #controls label:nth-child(1), 
.testimonial_slider_2 #slide_2_2:checked ~ #controls label:nth-child(2), 
.testimonial_slider_2 #slide_2_3:checked ~ #controls label:nth-child(3), 
.testimonial_slider_2 #slide_2_4:checked ~ #controls label:nth-child(4){
	background:#000; /* Change controls background color when mouse click */
}
.testimonial_2 {
	font-size: 16px !important;
	color: #333; /* Change testimonial paragraph text color */
	padding: 30px 30px 23px;
}
.content_2 {
	position: relative;
	padding-left: 30px;
	margin-bottom: 30px;
}
.content_2:before,
.content_2:after {
	content: "";
	height: 15px;
	width: 19px;
	position: absolute;
}
.content_2:before {
	background: url(icon_testimonial_2_before.png) 0 0 no-repeat;
	left: 0;
}
.content_2:after {
	background: url(icon_testimonial_2_after.png) 0 0 no-repeat;
	margin: 5px 10px;
}
.testimonial_2 p {
	display: inline;
}
.author_2 {
	margin-left: 30px;
}
.author_2 h3 {
	color: #333; /* Change author text color */
	font-size: 13px;
	font-weight: 600px;
	padding: 0 0 5px;
}
.author_2 h4 {
	color: #333; /* Change author text color */
	font-size: 12px;
	font-weight: 400;
	padding: 0 0 5px;
}
.author_2 h4 a {
	color: #999; /* Change company text link color */
	text-decoration: none;
	position: relative;
	padding-bottom: 1px;
	overflow: hidden;
	border-bottom: 1px solid;
}
.author_2 h4 a:after {
	background: #999; /* Change company border link background color */
	height: 1px;
	content: "";
	position: absolute;
	left: 0;
	bottom: -1px;
	width: 0;
	-o-transition: all .3s;
	-moz-transition: all .3s;
	-webkit-transition: all .3s;
	transition: all .3s;
}
.author_2 h4 a:hover {
	color: #000; /* Change company text link color when mouse over */
	border: none;
}
.author_2 h4 a:hover:after {
	border-color: #000;
	width: 100%;
}
.body{
    -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
}
        hr {
	opacity: 0.3;
	border-color: #000;
}

#css-only-modals {
	position: fixed;
	pointer-events: none;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	z-index: 10000000;
	text-align: center;
	white-space: nowrap;
	height: 100%;
}

#css-only-modals:before {
	content: '';
	display: inline-block;
	height: 100%;
	vertical-align: middle;
	margin-right: -0.25em;
}

.css-only-modal-check {
	pointer-events: auto;
}

.css-only-modal-check:checked ~ .css-only-modal {
	opacity: 1;
	pointer-events: auto;
}

.css-only-modal {
	width: 40%;
	background: #FFF;
	z-index: 1;
	display: inline-block;
	position: relative;
	pointer-events: auto;
	padding: 25px;
	text-align: right;
	border-radius: 4px;
	white-space: normal;
	display: inline-block;
	vertical-align: middle;
	opacity: 0;
	pointer-events: none;
}

.css-only-modal h2 {
	text-align: center;
}

.css-only-modal p {
	text-align: left;
}

.css-only-modal-close {
	position: absolute;
	top: 25px;
	right: 25px;
}

.css-only-modal-check {
	display: none;
}

.css-only-modal-check:checked ~ #screen-shade {
	opacity: 0.5;
	pointer-events: auto;
}

#screen-shade {
	opacity: 0;
	background: #000;
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	pointer-events: none;
	transition: opacity 0.8s;
}

.stripe > .container > p,
.stripe > .container > ul {
	text-align: left;
	padding: 35px;
	margin: 0;
}

.stripe > .container > hr {
	margin: 50px 0;
}

#nav-spacer {
	display: block;
	height: 50px;
}

.stripe {
	width: 100%;
	text-align: center;
	overflow: hidden;
}

.default {
	color: White;
	background: DarkCyan;
}

.inverse {
	color: DarkCyan;
	background: White;
}

.grey {
	color: White;
	background: DimGrey;
}

.grey-light {
	color: DimGrey;
	background: White;
}

.color {
	color: DarkOrange;
}
</style>
 <script>
   // optional
    $('#blogCarousel').carousel({
        interval: 5000
    });
 </script>
 <script>
     $(document).ready(function(){
		pagenum = 1;
		function AutoRotate() {
		   var myele = null;
		   var allElements = document.getElementsByTagName('label');
		   for (var i = 0, n = allElements.length; i < n; i++) {
			   var myfor = allElements[i].getAttribute('for');
			   if ((myfor !== null) && (myfor == ('slide_2_' + pagenum))) {
				   allElements[i].click();
				   break;
			   }
		   }
		   if (pagenum == 4) {
			   pagenum = 1;
		   } else {
			   pagenum++;
		   }
		}
		setInterval(AutoRotate, 2000);
	});
 </script>
</head>
<body>
	<div class="search-relative">
      
      <!-- slider -->
       <div class="owl-carousel" id="fullscreen-slider">
        <div class="item height100vh" style="background-image: url(images/b1.jpg);">
          <div class="page-head-wrap">
            <div class="page-head-inner">
              <div class="page-head-caption container text-center">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-11">
                      <p class="mb-10 bg-main d-inline-block animate" data-animation="fadeInDown" data-timeout="800">Welcome to India Adventures!</p>
                      <h2 class="big-title mb-10 animate" data-animation="fadeInRight" data-timeout="800">Boost Your Adrenaline Rush With India Adventures</h2>
                      <p class="animate mb-20" data-animation="fadeInLeft" data-timeout="800">As soon as I saw you, I knew an adventure was about to happen.</p>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item height100vh" style="background-image: url(images/b2.jpg);">
          <div class="page-head-wrap">
            <div class="page-head-inner">
              <div class="page-head-caption container text-center">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-11">
                      <p class="mb-10 bg-main d-inline-block animate" data-animation="bounceIn" data-timeout="900">Welcome to India Adventures!</p>
                      <h2 class="big-title mb-10 animate" data-animation="fadeInDown" data-timeout="800">It Always Seems Impossible Until It's Done..!</h2>
                      <p class="animate mb-20" data-animation="fadeInLeft" data-timeout="800">Go where you feel most alive.</p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item height100vh" style="background-image: url(images/b3.jpg);">
          <div class="page-head-wrap">
            <div class="page-head-inner">
              <div class="page-head-caption container text-center">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-11">
                      <p class="mb-10 bg-main d-inline-block animate clearfix" data-animation="fadeInUp" data-timeout="1000">Welcome to India Adventures!</p>
                      <h2 class="big-title mb-10 animate" data-animation="fadeInUp" data-timeout="800">Life was meant for good friends and great adventures.</h2>
                      <p class="animate mb-20" data-animation="fadeInLeft" data-timeout="800">Life is either a daring adventure or nothing.</p>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / slider -->
  </div> 
  <!-- / search-relative -->
  <div id="css-only-modals">
	<input id="modal1" class="css-only-modal-check" type="checkbox" checked/>
	<div class="css-only-modal">
		<label for="modal1" class="css-only-modal-close"><i class="fa fa-times fa-2x"></i></label>
		<h2>Importent News</h2>
		<hr />
		<img src="images/newpromo.png" style="height:auto;width:100%;">
		<a class="btn btn-1" href="Contact-Us.php">Get Enquiry</a>
	</div>
<div id="screen-shade"></div>
</div>
  <!-- about section -->
     <div class="content mt-60 mb-40">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-5">
            <img src="images/hot-balloon.png" alt="About" style="width: 400px;height: 400px;">
          </div>
          <div class="col-md-12 col-lg-7">

            <blockquote class="blockquote-1">
            	<h2>About India Adventures</h2>
               <p style="text-align: justify;">India Adventuresis a leading consulting firm to pave the way to your dream of having an affordable yet high quality, tailored Rope Course activity. We are dedicated to the requirement of rope course in your house garden, society building premises, or set-ups at any place in India. It has brought all types of Rope Course and equipment’s under its banner giving the same technology and assurance of safety of international standards.</p>
               <span class="author"><a class="btn btn-1" href="About-Us.php">Know More</a></span>
            </blockquote>

          </div>
      </div>
  </div>
</div>
  <!-- about section -->
  <!-- BLOCK popular -->
  <div class="main-block">
      <div class="container container-sm">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center block width100 mb-50 block-title">
              <h2>Our Gallery</h2>
              <div class="separator"><span>Rope Course Activities</span></div>
            </div>
          </div>
        </div>
        <div class="row blog">
        	<div class="col-md-12">
        		<div id="blogCarousel" class="carousel slide" data-ride="carousel">
        			<ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                    </ol>

              <!-- Carousel items -->
                <div class="carousel-inner">
                	<div class="carousel-item active">
                		<div class="row">
                			<div class="col-md-3">
                            <img src="images/high-ropes-course-event.jpg" alt="About" style="width: 250px;height: 250px;">
                            </div>
                            <div class="col-md-3">
                            <img src="images/Indoor Rope Course Construction in India..jpg" alt="About" style="width: 250px;height: 250px;">
                            </div>
                            <div class="col-md-3">
                            <img src="images/Net Bridge.jpg" alt="About" style="width: 250px;height: 250px;"> 
                            </div>
                            <div class="col-md-3">
                            <img src="images/Rope Bridge.jpg" alt="About" style="width: 250px;height: 250px;"> </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->

                    <div class="carousel-item">
                    	<div class="row">
                    		<div class="col-md-3">
                            <img src="images/Zig Zag Bridge.jpg" alt="About" style="width: 250px;height: 250px;">
                            </div>
                            <div class="col-md-3">
                            <img src="images/Swinging Bridge.jpg" alt="About" style="width: 250px;height: 250px;">
                            </div>
                            <div class="col-md-3">
                            <img src="images/Main-course.jpg" alt="About" style="width: 250px;height: 250px;">
                            </div>
                            <div class="col-md-3">
                            <img src="images/tree-top-rope-course-setup-500x500.jpg" alt="About" style="width: 250px;height: 250px;">
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                </div>
                <!--.carousel-inner-->
            </div>
            <!--.Carousel-->
        </div>
    </div>
</div>
</div>
<br>
<br>

    <div class="main-block">
      <div class="container container-sm">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center block width100 mb-50 block-title">
              <h2>Our Store Products</h2>
              <div class="separator"><span>Сhoose the most popular Products</span></div>
            </div>
          </div>
        </div>
        <div class="row blog">
        	<div class="col-md-12">
        		<div id="blogCarousel" class="carousel slide" data-ride="carousel">
        			<ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                            <li data-target="#blogCarousel" data-slide-to="2"></li>
                    </ol>

              <!-- Carousel items -->
                <div class="carousel-inner">
                	<div class="carousel-item active">
                		<div class="row">
                			<div class="col-md-3">
                            <img src="images/Body Zorb.jpg" alt="About" style="width: 250px;height: 250px;">
                             <div align="center">
                             	<h5>Body Zorb</h5>
                             </div>
                            </div>
                            <div class="col-md-3">
                           <img src="images/Climbing Wall.jpg" alt="About" style="width: 250px;height: 250px;">
                           <div align="center">
                             	<h5>Climbing Wall</h5>
                             </div>
                            </div>
                            <div class="col-md-3">
                            <img src="images/Goal Post.jpeg" alt="About" style="width: 250px;height: 250px;">
                            <div align="center">
                             	<h5>Goal Post</h5>
                             </div> 
                            </div>
                            <div class="col-md-3">
                            <img src="images/High Rope Course.png" alt="About" style="width: 250px;height: 250px;">
                            <div align="center">
                             	<h5>High Rope Course</h5>
                             </div> 
                         </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->

                    <div class="carousel-item">
                    	<div class="row">
                    		<div class="col-md-3">
                            <img src="images/Hot Air Balloon.jpg" alt="About" style="width: 250px;height: 250px;">
                            <div align="center">
                             	<h5>Hot Air Balloon</h5>
                             </div>
                            </div>
                            <div class="col-md-3">
                            <img src="images/Hungry Hippos.jpg" alt="About" style="width: 250px;height: 250px;">
                            <div align="center">
                             	<h5>Hungry Hippos</h5>
                             </div>
                            </div>
                            <div class="col-md-3">
                            <img src="images/Inflatable Obstacle.png" alt="About" style="width: 250px;height: 250px;">
                            <div align="center">
                             	<h5>Inflatable Obstacle</h5>
                             </div>
                            </div>
                            <div class="col-md-3">
                            <img src="images/Inflatbale Rock Climbing Wall.jpg" alt="About" style="width: 250px;height: 250px;">
                            <div align="center">
                             	<h5>Inflatbale Climbing Wall</h5>
                             </div>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                       <div class="carousel-item">
                    	<div class="row">
                    		<div class="col-md-3">
                            <img src="images/Land zorbing.jpg" alt="About" style="width: 250px;height: 250px;">
                            <div align="center">
                             	<h5>Land zorbing</h5>
                             </div>
                            </div>
                            <div class="col-md-3">
                            <img src="images/Pressure Rocket.jpg" alt="About" style="width: 250px;height: 250px;">
                            <div align="center">
                             	<h5>Pressure Rocket</h5>
                             </div>
                            </div>
                            <div class="col-md-3">
                            <img src="images/Running Bungee.jpg" alt="About" style="width: 250px;height: 250px;">
                            <div align="center">
                             	<h5>Running Bungee</h5>
                             </div>
                            </div>
                            <div class="col-md-3">
                            <img src="images/Water Roller.jpg" alt="About" style="width: 250px;height: 250px;">
                            <div align="center">
                             	<h5>Water Roller</h5>
                             </div>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                </div>
                <!--.carousel-inner-->
            </div>
            <!--.Carousel-->
        </div>
    </div>
      </div>
    </div>
    
<br>
<br>
<br>
<div align="center">
      <a class="btn btn-1" href="{{URL::route('ourstoreproduct.ourstoreproduct')}}">View More</a>
    </div>
    <br>
    <br>

    <!-- BLOCK / popular -->

    <!-- BLOCK news -->

    <div class="main-block">
      <div class="container container-sm">

        <div class="row">
          <div class="col-md-12">
            <div class="text-center block width100 mb-50 block-title">
              <h2>Our Blog</h2>
              <div class="separator"><span>Checkout latest news from our blog</span></div>
            </div>
          </div>
        </div>
         <div class="row">
        <div class="col-md-6">
          <div class="teaser text-center mb-30">
            <img src="images/Quick Jump Free Fall.jpg" alt="Popular destinations">
            <div class="teaser-content">
              <h4>Free Fall Device</h4>
              <p>Free fall devices push the limits of participants big and small as they take a trusting leap. This activity promotes self-confidence and allows for a true free falling feeling that’s hard find anywhere else. The participant must take this final leap of faith in order to complete the ropes course. This is easily one of the most exhilarating activities one can add to a ropes course!</p>
              <a href="https://www.facebook.com/indiaadventureevents/photos/a.775286429515615/813318725712385/?type=3&theater" target="_blank" class="btn btn-1 btn-sm">Read more</a>
            </div>
          </div>
        </div>
          <div class="col-md-6">
          <div class="teaser text-center mb-30">
            <img src="images/High Rope Course Tower.png" alt="Exclusive offers">
            <div class="teaser-content">
              <h4>High Rope Course Tower</h4>
              <p>A day on the high rope course means maximum entertainment for children and adults alike. 42 elements and climbing challenges up to 20 metres above the ground await you in the so-called "India Adventures". We offer different levels of difficulty to suit both beginners and skilled climbers. The high rope course also convinces with highly developed securing devices going beyond standard safety measures. Have fun, climb safely!</p>
              <a href="https://www.facebook.com/indiaadventureevents/photos/a.775286429515615/775286002848991/?type=3&theater" target="_blank" class="btn btn-1 btn-sm">Read more</a>
            </div>
          </div>
        </div>
      </div>
        
    </div>
</div>

    <!-- BLOCK / news -->
    <!-- content -->
    
    <div class="content mt-60 mb-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="content-box mb-20">
              <div class="row">
          <div class="col-md-12">
            <div class="text-center block width100 mb-50 block-title">
              <h2>Our Client's Say</h2>
              <div class="separator"><span>India Adventures</span></div>
            </div>
          </div>
        </div>

              <div class="row">
                <div class="testimonial_slider_2">
				<input type="radio" name="slider_2" id="slide_2_1" checked />
				<input type="radio" name="slider_2" id="slide_2_2" />
				<input type="radio" name="slider_2" id="slide_2_3" />
				<input type="radio" name="slider_2" id="slide_2_4" />
				<div class="boo_inner clearfix">
					<div class="slide_content">
						<div class="testimonial_2">
							<div class="content_2">
								<p>These guys made my college event thrilling. Had a wonderful experience with the team. Guys are very professional and quality of activities and equipment were more than satisfied...When comes to price; it's very in comparison to others in the market... with the quality of adventurous experience they add to your event, that's remarkable.</p>
							</div>
							<div class="author_2">
								<h3>Shivam Kumar</h3>
								<h4>LPU University Punjab</h4>
							</div>
						</div>
					</div>
					<div class="slide_content">
						<div class="testimonial_2">
							<div class="content_2">
								<p>Had a great time with my friends doing the adventure activities in my event.JointActivity Tower was one of the most exciting things I have ever done. Will definitely be coming back to India Adventures soon.</p>
							</div>
							<div class="author_2">
								<h3>Pankaj Singh</h3>
								<h4>Star Culture</h4>
							</div>
						</div>
					</div>
					<div class="slide_content">
						<div class="testimonial_2">
							<div class="content_2">
								<p>The entire event has been very customized, in sync with nature and perfectly organized. The true morning of the agenda owned by us and created by us was explained. The entire day was very relaxing and helped us reflect on ourselves and our team. Kudos to the team!! Looking forward to work with you.</p>
							</div>
							<div class="author_2">
								<h3>Puneet Singh Shishodia</h3>
								<h4>Cross Road</i></h4>
							</div>
						</div>
					</div>
					<div class="slide_content">
						<div class="testimonial_2">
							<div class="content_2">
								<p>Amazing adventure. Thrilled by the Ziplines.! Not at all frightening!Easy and simple. Quite anexperience.!</p>
							</div>
							<div class="author_2">
								<h3>Swati Oberoi</h3>
								<h4>Student</h4>
							</div>
						</div>
					</div>
				</div>
				<div id="controls">
					<label for="slide_2_1"></label>
					<label for="slide_2_2"></label>
					<label for="slide_2_3"></label>
					<label for="slide_2_4"></label>
				</div>
			</div>

              

             

                
              </div>
            </div>    
          </div>
        </div>
      </div>
    </div>

    <!-- / content -->

     <!-- content -->
    
    <div class="content mt-60 mb-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="content-box mb-20">
               <div class="row">
          <div class="col-md-12">
            <div class="text-center block width100 mb-50 block-title">
              <h2>Our Client's</h2>
              <div class="separator"><span>India Adventures</span></div>
            </div>
          </div>
        </div>
              <div class="row">

                <!-- team-item-1 -->
                <div class="col-md-3">
                  <div class="team-item-1">
                    <img src="images/Suryodaya.jpg" onmouseover="this.src='./images/Suryodaya.jpg'" onmouseout="this.src='./images/Suryodaya.jpg'" alt="Team 1" style="width: 200px;height: 170px;">
                    <div class="team-info text-center mb-10">
                      <p class="name">Suryodaya</p>
                      <p class="position"></p>
                    </div>
                  </div>
                </div>
                <!-- /. team-item-1 -->

                <!-- team-item-1 -->
                <div class="col-md-3">
                  <div class="team-item-1">
                    <img src="images/Sunburn.jpg" onmouseover="this.src='./images/Sunburn.jpg'" onmouseout="this.src='./images/Sunburn.jpg'" alt="Team 1" style="width: 200px;height: 170px;">
                    <div class="team-info text-center mb-10">
                      <p class="name">Sunburn</p>
                      <p class="position"></p>
                    </div>
                  </div>
                </div>
                <!-- /. team-item-1 -->

                <!-- team-item-1 -->
                <div class="col-md-3">
                  <div class="team-item-1">
                    <img src="images/Desportivos.jpg" onmouseover="this.src='./images/Desportivos.jpg'" onmouseout="this.src='./images/Desportivos.jpg'" alt="Team 1" style="width: 200px;height: 170px;">
                    <div class="team-info text-center mb-10">
                      <p class="name">Desportivos</p>
                      <p class="position"></p>
                    </div>
                  </div>
                </div>
                <!-- /. team-item-1 -->

                <!-- team-item-1 -->
                <div class="col-md-3">
                  <div class="team-item-1">
                    <img src="images/Britannia.png" onmouseover="this.src='./images/Britannia.png'" onmouseout="this.src='./images/Britannia.png'" alt="Team 1" style="width: 200px;height: 170px;">
                    <div class="team-info text-center mb-10">
                      <p class="name">Britannia</p>
                      <p class="position"></p>
                    </div>
                  </div>
                </div>
                <!-- . team-item-1 -->

                 <!-- team-item-1 -->
                <div class="col-md-3">
                  <div class="team-item-1">
                    <img src="images/clients/a.jpg" onmouseover="this.src='../images/clients/a.jpg'" onmouseout="this.src='./images/clients/a.jpg'" alt="Team 1" style="width: 200px;height: 170px;">
                    <div class="team-info text-center mb-10">
                      <p class="name">Brands</p>
                      <p class="position"></p>
                    </div>
                  </div>
                </div>
                <!-- . team-item-1 -->


                 <!-- team-item-1 -->
                <div class="col-md-3">
                  <div class="team-item-1">
                    <img src="images/clients/b.jpg" onmouseover="this.src='../images/clients/b.jpg'" onmouseout="this.src='./images/clients/b.jpg'" alt="Team 1" style="width: 200px;height: 170px;">
                    <div class="team-info text-center mb-10">
                      <p class="name">Brands</p>
                      <p class="position"></p>
                    </div>
                  </div>
                </div>
                <!-- . team-item-1 -->


                 <!-- team-item-1 -->
                <div class="col-md-3">
                  <div class="team-item-1">
                    <img src="images/clients/c.jpg" onmouseover="this.src='../images/clients/c.jpg'" onmouseout="this.src='./images/clients/c.jpg'" alt="Team 1" style="width: 200px;height: 170px;">
                    <div class="team-info text-center mb-10">
                      <p class="name">Brands</p>
                      <p class="position"></p>
                    </div>
                  </div>
                </div>
                <!-- . team-item-1 -->

                  <!-- team-item-1 -->
                <div class="col-md-3">
                  <div class="team-item-1">
                    <img src="images/clients/d.jpg'" onmouseover="this.src='../images/clients/d.jpg'" onmouseout="this.src='./images/clients/d.jpg'" alt="Team 1" style="width: 200px;height: 170px;">
                    <div class="team-info text-center mb-10">
                      <p class="name">Brands</p>
                      <p class="position"></p>
                    </div>
                  </div>
                </div>
                <!-- . team-item-1 -->

                 <!-- team-item-1 -->
                <div class="col-md-3">
                  <div class="team-item-1">
                    <img src="images/clients/e.jpg'" onmouseover="this.src='../images/clients/e.jpg'" onmouseout="this.src='./images/clients/e.jpg'" alt="Team 1" style="width: 200px;height: 170px;">
                    <div class="team-info text-center mb-10">
                      <p class="name">Brands</p>
                      <p class="position"></p>
                    </div>
                  </div>
                </div>
                <!-- . team-item-1 -->

                 <!-- team-item-1 -->
                <div class="col-md-3">
                  <div class="team-item-1">
                    <img src="images/clients/f.jpg'" onmouseover="this.src='../images/clients/f.jpg'" onmouseout="this.src='./images/clients/f.jpg'" alt="Team 1" style="width: 200px;height: 170px;">
                    <div class="team-info text-center mb-10">
                      <p class="name">Brands</p>
                      <p class="position"></p>
                    </div>
                  </div>
                </div>
                <!-- . team-item-1 -->

                 <!-- team-item-1 -->
                <div class="col-md-3">
                  <div class="team-item-1">
                    <img src="images/clients/h.jpg'" onmouseover="this.src='../images/clients/h.jpg'" onmouseout="this.src='./images/clients/h.jpg'" alt="Team 1" style="width: 200px;height: 170px;">
                    <div class="team-info text-center mb-10">
                      <p class="name">Brands</p>
                      <p class="position"></p>
                    </div>
                  </div>
                </div>
                <!-- . team-item-1 -->

            
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>

    <!-- / content -->
@include('partials.footer')