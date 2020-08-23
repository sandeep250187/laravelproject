 <footer class="dark-footer" style="background-image: url(images/image-20.jpg);">
      <div class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="footer-item">
                <img width="115" src="images/logo.png" alt="Logo" style="margin-left: 28px;">
                <div class="mt-20 mb-20">
                  <button type="button" class="btn btn-1 btn-sm" data-toggle="modal" data-target="#newsletterModal">
                    Newsletter signup
                  </button>
                  <!-- Modal -->
                  <div class="modal fade bd-example-modal-sm" id="newsletterModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">Newsletter Signup</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form id="subscribe-form" class="form-block" novalidate="novalidate">
                            <div class="form-group mt-20 subscribe-form">
                              <small id="emailHelp" class="form-text text-muted">Subscribe now and recieve a 50% discount on your next tour booking</small>
                              <label>Email address</label>
                              <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="mt-10 mb-10 float-right">
                              <button type="button" class="btn btn-2 btn-sm" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-1 btn-sm">Sign Up</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              
              </div>
            </div>
            <div class="col-md-6">
              <div class="footer-item">
                <ul class="footer-menu">
                  
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Term & Condition</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Safety</a></li>
                </ul>
                <br>
                  <div align="center">
                  <h4 style="color: #fff;">In Short</h4>
                </div>
                <p class="mt-30" style="text-align: justify;">India Adventures gives constant technology and assurance of safety of international standards. We specialize in designing, building, installation, and creating India Adventures as well as make it completely operational as desired by our valued customers.</p>
              </div>
              <div align="center">
               <div class="footer-item">
                <ul class="footer-social mt-20">
                  
                  <li><a target="_blank" href="https://www.facebook.com/indiaadventureevents/inbox/"><i class="fab fa-facebook"></i></a></li>
                  <li><a target="_blank" href="https://www.youtube.com/watch?v=bdRLvtHC-yU&feature=youtu.be"><i class="fab fa-youtube"></i></a></li>
                  <li><a target="_blank" href="https://www.instagram.com/indiaadventureevent/"><i class="fab fa-instagram"></i></a></li>
                  <li><a target="_blank" href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQH_4Umrc7hI0gAAAWtRafU4KgiuBlo3tncHDuWo3uk0qJFyfCvfuK_jMNmMVPOJokkeJrK82ArhO7XVNIIOXESVvNNlYSxCb35GElnzQ-IdcS6rS1vIuUd5JfyQAG2pTSbVcho=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Findia-adventure-setup-a7773517a"><i class="fab fa-linkedin"></i></a></li>
                  
                </ul>

              </div>
            </div>
            </div>
            <div class="col-md-3" style="padding-left: 100px;">
              <div class="footer-item">
                <ul class="mb-20">
                  <li class="mt-10">+91-9654121492</li>
                  <li class="mt-10">+91-9716243740</li>
                  <li  class="mt-10">Info@indiaadventures.in</li>
                  <li class="mt-10">D 163-B, Krishna Park,</li>
                  <li class="mt-10">Near Khanpur, New Delhi 110080</li>
                </ul>
                
              </div>

             
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>@ 2019 India Adventures </p>
            </div>
            <div class="col-md-6 text-r mobile-left">
              <p>Designed By - Vani Brother's</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- SCROLL UP -->
    <a class="scrollup">
      <i class="ti-angle-up"></i>
    </a>
    <!-- / SCROLL UP -->
    
    
    	<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+91 9625994154", // WhatsApp number
            call: "+91 9625994154", // Call phone number
            call_to_action: "Message us", // Call to action
            button_color: "#cf1010;", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "whatsapp,call", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
	function validate()
	{
	   var phone =/([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
	   if($("#name").val()=='')
	   {
	      $('.nerror').fadeIn();
		  $('.nerror').css('color', 'red');
	      $('.nerror').html('please fill name');
		  $('.nerror').fadeOut(5000);
	     return false;
	   }
	   if($("#email").val()=='')
	   {
	      $('.emerror').fadeIn();
		  $('.emerror').css('color', 'red');
	      $('.emerror').html('please fill email');
		   $('.emerror').fadeOut(5000);
	     return false;
	   }
	   if($("#phone").val()==''  && !phone.test($("#phone").val()))
	   {
	       $('.perror').fadeIn();
		  $('.perror').css('color', 'red');
	     $('.perror').html('please fill phone');
		  $('.perror').fadeOut(5000);
	     return false;
	   }
	   if($("#location").val()=='')
	   {
	      $('.lerror').fadeIn();
		  $('.lerror').css('color', 'red');
	     $('.lerror').html('please fill location');
		  $('.lerror').fadeOut(5000);
	     return false;
	   }
	   if($("#area").val()=='')
	   {
	      $('.aerror').fadeIn();
		  $('.aerror').css('color', 'red');
	      $('.aerror').html('please fill area');
		   $('.aerror').fadeOut(5000);
	     return false;
	   }
	   if($("#subject").val()=='')
	   {
	      $('.serror').fadeIn();
		  $('.serror').css('color', 'red');
	      $('.serror').html('please fill subject');
		   $('.serror').fadeOut(5000);
	     return false;
	   }
	}
</script>
<!-- /WhatsHelp.io widget -->

    

    
    <!-- JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/cookies.js"></script>
    <script src="js/jquery.daterangepicker.min.js"></script> 
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/navigation.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/jqueryvalidation.js"></script>
    <script src="js/jquery.viewbox.min.js"></script> 
    <script src="js/masonry.min.js"></script> 
    <script src="js/imagesloaded.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
 
    <script src="js/main.js"></script>
    
    <script src="js/jscolor.js"></script>
    <script src="js/settings.js"></script>
  </body>
</html>
