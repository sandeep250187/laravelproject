<html>
    <head>
        <title>App Name - {{URL::asset('/')}}</title>

<base href="{{URL::asset('/')}}" target="_top">
 
<link rel="stylesheet" href="{{{ URL::asset('public/css/bootstrap.min.css')}}}" />
<link rel="stylesheet" href="{{{ URL::asset('public/css/themify-icons.css')}}}" />
<link rel="stylesheet" href="{{{ URL::asset('public/css/owl.carousel.css')}}}" />
<link rel="stylesheet" href="{{{ URL::asset('public/css/animate.css')}}}" />
<link rel="stylesheet" href="{{{ URL::asset('public/css/viewbox.css')}}}" />
<link rel="stylesheet" href="{{{ URL::asset('public/css/bootstrap-slider.min.css')}}}" />
<link rel="stylesheet" href="{{{ URL::asset('public/css/daterangepicker.min.css')}}}" />
<link rel="stylesheet" href="{{{ URL::asset('public/css/themify-icons.css')}}}" />
  <link rel="stylesheet" href="{{{ URL::asset('public/font-awesome/4.2.0/css/font-awesome.min.css')}}}" />
  <link rel="stylesheet" href="{{{ URL::asset('public/css/theme.min.css') }}}" class="theme-stylesheet" id="theme-style" />
  <link rel="stylesheet" href="{{{ URL::asset('public/fonts/fonts.googleapis.com.css')}}}" />
  <script type="text/javascript" src="{{{ URL::asset('public/js/fontawesome-all.min.js')}}}"></script>
  <link rel="stylesheet" href="{{{ URL::asset('public/css/main.css')}}}" />
   <link rel="stylesheet" href="{{{ URL::asset('public/css/main.css')}}}" />
    <link rel="stylesheet" href="{{{ URL::asset('public/css/schemes.css')}}}" />
	 <link rel="stylesheet" href="{{{ URL::asset('public/css/settings.css')}}}" />
  <script src="{{{ URL::asset('public/js/bootstrap.min.js')}}}"></script>
  <script src="{{{ URL::asset('public/js/theme.min.js')}}}"></script>
</head>
<body class="no-skin">

<div class="main-container" id="main-container">
  
  <div class="main-content"> 
    <div class="main-content-inner">
      <div class="breadcrumbs" id="breadcrumbs">
        
      </div>
      @yield('content') 
    </div>
  </div>
 
</div>
</body>
</html>
