@extends('layouts.master')

@section('title', 'India Adventures | Adventure Sports Setup | Rides Manufacturers | Buy Directly From Factory')


@include('partials.header')
	<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>

	<!-- page-head -->

    <div class="page-head white-content">
      <div class="height100vh parallax-container" style="background-image: url(images/contact-banner.jpg);">
        <div class="page-head-wrap">
          <div class="display-r">
            <div class="display-a">
              <div class="container">
                <div class="row justify-content-center animate" data-animation="fadeInUp" data-timeout="500">
                  <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                      </ol>
                    </nav>
                    <h1 class="big-title mt-60">Contact Us</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- / page-head -->

    <!-- content -->
    
    <div class="content mt-60 mb-40 container">
      <div class="row">
        <div class="col-md-8">
          <h3 class="mb-20">Welcome to India Adventures</h3>
          
          <p>India Adventures is a leading consulting firm to pave the way to your dream of having an affordable yet high quality, tailored Rope Course activity. We are dedicated to the requirement of rope course in your house garden, society building premises, or set-ups at any place in India. It has brought all types of Rope Course and equipment’s under its banner giving the same technology and assurance of safety of international standards.</p>

          <h3 class="mb-30">Our Offices</h3>

          <div class="row">
            <div class="col-md-12">
              <div class="contact-info mb-30">
                <h4>New Delhi</h4>
                <p><span class="ti-map-alt"></span>D 163-B, Krishna Park,Near Khanpur, New Delhi 110080 </p>
                <p><span class="ti-headphone-alt"></span>+91-9654121492</p>
                <p><span class="ti-headphone-alt"></span>+91-9716243740</p>
                <p><span class="ti-email"></span><a href="#">Info@indiaadventures.in</a></p>
              </div>
            </div>
            
            
            
          </div>
        </div>
        <div class="col-md-4">
          <h3 class="mb-20">Our Social</h3>
            <div class="clearfix mb-40">
              <ul class="contact-social">
                <li><a href="#"><span class="ti-facebook"></span></a></li>
                <li><a href="#"><span class="ti-linkedin"></span></a></li>
                <li><a href="#"><span class="ti-twitter"></span></a></li>
                <li><a href="#"><span class="ti-youtube"></span></a></li>
                
              </ul>
            </div>
          <div class="contact-mr">
            <h3 class="mb-20">Get in Touch</h3>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form class="mt-20 form-block" action="{{ URL::route('contactus.store') }}" method="post">
			{{ csrf_field() }}
              <div class="form-row contact-form">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="name" placeholder="Name" />
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Contact" />
                </div>
                <div class="col-md-12">
                  <input type="email" class="form-control" name="email" placeholder="Email"  />
                </div>
                 <div class="col-md-12">
                  <input type="text" class="form-control" name="location" placeholder="Location"  />
                </div>
                 <div class="col-md-12">
                  <input type="text" class="form-control" name="area" placeholder="Adventure Setup Area Size" />
                </div>
                <div class="col-md-12">
                 <input type="text" class="form-control" name="subject" placeholder="Message"  />
                </div>
                
               
                <div class="col-auto">
                  <button type="submit" name="submit" value="submit" class="btn btn-1">Send Message</button>
                </div>
              </div>
            </form>
            
          </div>

        </div>
      </div>
    </div>

    <div class="map-wrap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.102573359526!2d77.2313654144041!3d28.506561496523357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce1a3c625d2db%3A0x58474e0498cc216a!2sD-163%2C+Krishna+Park+Colony%2C+Deoli+Gaon+Nai+Basti%2C+Sangam+Vihar%2C+New+Delhi%2C+Delhi+110062!5e0!3m2!1sen!2sin!4v1554901121600!5m2!1sen!2sin" width="1350" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <!-- / content -->
@include('partials.footer')