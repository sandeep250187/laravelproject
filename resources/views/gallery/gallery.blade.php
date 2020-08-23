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
    <style>
      @import url(https://fonts.googleapis.com/css?family=Montserrat:500);

:root {
  /* Base font size */
  font-size: 10px;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}



.gallery {
  display: flex;
  flex-wrap: wrap;
  /* Compensate for excess margin on outer gallery flex items */
  margin: -1rem -1rem;
}

.gallery-item {
  /* Minimum width of 24rem and grow to fit available space */
  flex: 1 0 24rem;
  /* Margin value should be half of grid-gap value as margins on flex items don't collapse */
  margin: 1rem;
  box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
  overflow: hidden;
}

.gallery-image {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 400ms ease-out;
}

.gallery-image:hover {
  transform: scale(1.15);
}

/*

The following rule will only run if your browser supports CSS grid.

Remove or comment-out the code block below to see how the browser will fall-back to flexbox styling. 

*/

@supports (display: grid) {
  .gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));
    grid-gap: 2rem;
  }

  .gallery,
  .gallery-item {
    margin: 0;
  }
}

    </style>

    <!-- page-head -->

    <div class="page-head white-content">
      <div class="height100vh parallax-container" style="background-image: url(images/gallery-banner.jpg);">
        <div class="page-head-wrap">
          <div class="display-r">
            <div class="display-a">
              <div class="container">
                <div class="row justify-content-center animate" data-animation="fadeInUp" data-timeout="500">
                  <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                      </ol>
                    </nav>
                    <h1 class="big-title mt-60">Gallery</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- / page-head -->
    <div class="container" style="padding-top: 50px;">

  

  <div class="gallery">

    <div class="gallery-item">
      <img class="gallery-image" src="images/Quick Jump FreeFall.png" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer">
    </div>

    <div class="gallery-item">
      <img class="gallery-image" src="images/Paramotor.jpg" alt="sunset behind San Francisco city skyline">
    </div>

    <div class="gallery-item">
      <img class="gallery-image" src="images/Paragliding.jpg" alt="people holding umbrellas on a busy street at night lit by street lights and illuminated signs in Tokyo, Japan">
    </div>

    <div class="gallery-item">
      <img class="gallery-image" src="images/jeep.jpg" alt="car interior from central back seat position showing driver and blurred view through windscreen of a busy road at night">
    </div>

    <div class="gallery-item">
      <img class="gallery-image" src="images/Human Siling Shot.jpg" alt="back view of woman wearing a backpack and beanie waiting to cross the road on a busy street at night in New York City, USA">
    </div>

    <div class="gallery-item">
      <img class="gallery-image" src="images/Go Karting.jpeg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Gaint Swing.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Zip Cycleing.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Bungee.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Multiple Activity Tower.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/124-high-rope-course.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Adventure Tower.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/High Rope Course.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Kids Activity Tower.jpeg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Multiple Tower.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Tyre Crossing.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Balance Rope.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/commondo.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Hanging Bars.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/LowRopesHighSchool.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Segway.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Paintball Combat.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Inflatable Obstacle.png" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Cricket bowling.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/tree-top-rope-course-setup.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Swinging Bridge.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/3tower.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    <div class="gallery-item">
      <img class="gallery-image" src="images/Zig.jpg" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
    </div>
    

  </div>

</div>
<br>
<br>
<br>
@include('partials.footer')