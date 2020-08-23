<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.png">

    <title>India Adventures | Adventure Sports Setup | Rides Manufacturers | Buy Directly From Factory</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/themify-icons.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/viewbox.css" rel="stylesheet"> 
    <link href="css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="css/daterangepicker.min.css" rel="stylesheet">

    <script src="js/fontawesome-all.min.js"></script>

    <link href="css/main.css" rel="stylesheet">

    <link href="css/schemes.css" rel="stylesheet">

    <link href="css/settings.css" rel="stylesheet">
  </head>

  <body class=""  oncontextmenu="return false" onselectstart="return false" onkeydown="if ((arguments[0] || window.event).ctrlKey) return false">

    <!-- pageloader -->
    <!--<div id="loader">-->
    <!--  <div class="loader">-->
    <!--    <div class="sk-child sk-dot1"></div>-->
    <!--    <div class="sk-child sk-dot2"></div>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- / #pageloader -->

    <nav id="contact-menu" class="navigation navigation-hidden navigation-portrait">
      <div class="nav-menus-wrapper">
        <div class="header-info-item clearfix">
          <p class="header-info-title">Contact Us</p>
          <ul>
            <li><span class="ti-map-alt"></span>D 163-B, Krishna Park,</li>
            <li><span class="ti-map-alt"></span>Near Khanpur, New Delhi 110080</li>
            <li><span class="ti-headphone-alt"></span> <a href="#">+91-9654121492</a></li>
            <li><span class="ti-mobile"></span> <a href="#">+91-9716243740</a></li>
            <li><span class="ti-email"></span> <a href="#">Info@indiaadventures.in</a></li>
          </ul>
        </div>
        <div class="header-info-item clearfix">
          <p class="header-info-title">Work Time</p>
          <ul>
            <li><span class="ti-alarm-clock"></span> Working Days  10AM - 6PM</li>
            <li><span class="ti-alarm-clock"></span> Saturday  10AM - 4PM</li>
            <li><span class="ti-alarm-clock"></span> Sunday  Closed</li>
          </ul>
        </div>
        <div class="header-info-item clearfix">
          <p class="header-info-title">Follow Us</p>
          <ul class="header-social">
            <li><a href="#"><span class="ti-facebook"></span></a></li>
            <li><a href="#"><span class="ti-instagram"></span></a></li>
            <li><a href="#"><span class="ti-linkedin"></span></a></li>
            <li><a href="#"><span class="ti-youtube"></span></a></li>
            
          </ul>
        </div>
      </div>
    </nav>

    <header>
      
      <div class="main-header header-bg-0">
        <div class="header-width container-fluid">
          <div class="row">
            <div class="col-md-3 col-3">
              <div class="main-header-logo">
                <a href="{{URL::current()}}"><img width="130" src="images/logo.png" alt="Site logo"></a>
              </div>
            </div>
            <div class="col-md-9 col-9" style="padding-left: 0px;">
              <div class="right-header">
                <div class="clearfix float-right contact-head">
                <i class="fab fa-whatsapp" style="color:#fff;"></i>&nbsp;<a href="#">+91-9625994154</a>
                <button class="btn-show navbar-toggler float-right btn-contact"><span class="ti-menu"></span></button>
              </div>
              <nav id="navigation" class="navigation mt-10">
                <div class="nav-toggle">Menu</div>
                  <div class="nav-search">
                    
                    <form>
                      <div class="nav-search-inner">
                        <input type="search" name="search" placeholder="Type and hit ENTER">
                      </div>
                    </form>
                  </div>

                  <div class="nav-menus-wrapper">

                    <ul class="nav-menu align-to-right">
                      <li><a href="{{URL::current()}}">Home</a></li>
                      <li><a href="{{ URL::route('aboutus.aboutus') }}">About Us</a></li>
                      <li><a href="{{ URL::route('gallery.gallery') }}">Gallery</a></li>
                      <li><a href="{{ URL::route('ourresorts.ourresorts') }}">Our Resort</a></li> 
                      <li><a href="{{ URL::route('safety.safety') }}">Safety</a></li>
                      <li><a href="{{ URL::route('teambuilding.teambuilding') }}">Team Building</a></li>
                      <li><a href="{{ URL::route('contactus.contactus') }}">Contact Us</a></li>
                       
                      <li><a class="btn btn-1" href=""  data-toggle="modal" data-target="#modalContactForm" >Get Enquiry</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
              
            </div>
          </div>
        </div> 
      </div>
    </header>

    <!-- / header -->
    <!-- popup -->
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  
  <div class="modal-dialog" role="document">
    <form action="{{ URL::route('contactus.store') }}" method="post" onsubmit="return validate();">
	{{ csrf_field() }}
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="form-group">
          <label data-error="wrong" data-success="right" for="form34" style="color: #000;">Your name</label>
          <input type="text" name="name" id="name" class="form-control ">
          <div class='nerror'></div>
        </div>

        <div class="form-group">
          <label data-error="wrong" data-success="right" for="form29" style="color: #000;">Your email</label>
          <input type="email" id="email" name="email" class="form-control">
          <div class='emerror'></div>
        </div>
            <div class="form-group">
          <label data-error="wrong" data-success="right" for="form34" style="color: #000;">Your Contact</label>
          <input type="number" name="phone" id="phone" class="form-control ">
          <div class='perror'></div>
        </div>
        <div class="form-group">
            <label data-error="wrong"data-success="right" for="form32" style="color: #000;">Location</label>
          <input type="text" id="location" name="location" class="form-control">
         <div class='lerror'></div>
        </div>

        <div class="form-group">
            <label data-error="wrong"data-success="right" for="form32" style="color: #000;">Adventure Setup Area Size</label>
          <input type="text" id="area" name="area" class="form-control">
        <div class='aerror'></div>
        </div>
        <div class="form-group">
            <label data-error="wrong"data-success="right" for="form32" style="color: #000;">Message</label>
          <input type="text" id="subject" name="subject" class="form-control">
        <div class='serror'></div>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-unique" type="submit" name="submit" value="submit">Send</button>
      </div>
    </div>
</form>
  </div>
</div>
    <!-- popup -->
