

    $(document).ready(function() {

      $(function(){
       var shrinkHeader = 170;
        $(window).scroll(function() {
          var scroll = getCurrentScroll();
          if ( scroll >= shrinkHeader ) {
            $('.header').addClass('header-fixed');
          }
          else {
            $('.header').removeClass('header-fixed');
          }
        });
      function getCurrentScroll() {
          return window.pageYOffset || document.documentElement.scrollTop;
          }
      });

      $("#phone").mask("+375(99)999-99-99");


      $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
     
      $("#owl-demo").owlCarousel({
     
          autoPlay: 6000,
          navigation: true,
          pagination: false,
          items : 6,
          navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
          itemsDesktop : [1199,4],
          itemsDesktopSmall : [979,3]
     
      });

      // fancybox

      $(".fancybox-thumb").fancybox({
        prevEffect    : 'none',
        nextEffect    : 'none',
        closeBtn    : true,
        helpers   : {
          title : { type : 'inside' },
          buttons : {}
        }
      });
     
    });

