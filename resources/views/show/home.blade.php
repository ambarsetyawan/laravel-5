@extends('layout.main')

@section('content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
<div class="container">
<div class="container" style="padding-left: 0px; padding-right: 15px;">
<div class="container"style="text-align:justify">
<h1>About us</h1>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</div>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Simple Responsive Quote style slider using Bootstrap</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Head tags to include FontAwesome -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
  // When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});
</script>

<style type="text/css">
/* carousel */
#quote-carousel {
	padding: 0 10px 30px 10px;
	margin-top: 30px;
}
/* Control buttons  */
#quote-carousel .carousel-control {
	background: none;
	color: #222;
	font-size: 2.3em;
	text-shadow: none;
	margin-top: 30px;
}
/* Previous button  */
#quote-carousel .carousel-control.left {
	left: -12px;
}
/* Next button  */
#quote-carousel .carousel-control.right {
	right: -12px !important;
}
/* Changes the position of the indicators */
#quote-carousel .carousel-indicators {
	right: 50%;
	top: auto;
	bottom: 0px;
	margin-right: -19px;
}
/* Changes the color of the indicators */
#quote-carousel .carousel-indicators li {
	background: #c0c0c0;
}
#quote-carousel .carousel-indicators .active {
	
}
#quote-carousel img {
	width: 250px;
	height: 100px
}
/* End carousel */

.item blockquote {
	border-left: none;
	margin: 0;
}
.item blockquote img {
	margin-bottom: 10px;
}
.item blockquote p:before {
	content: "\f10d";
	font-family: 'Fontawesome';
	float: left;
	margin-right: 10px;
}


/**
  MEDIA QUERIES
*/

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) {
#quote-carousel {
 margin-bottom: 0;
 padding: 0 40px 30px 40px;
}
}

/* Small devices (tablets, up to 768px) */
@media (max-width: 768px) {
/* Make the indicators larger for easier clicking with fingers/thumb on mobile */
#quote-carousel .carousel-indicators {
 bottom: -20px !important;
}
 #quote-carousel .carousel-indicators li {
 display: inline-block;
 margin: 0px 5px;
 width: 15px;
 height: 15px;
}
 #quote-carousel .carousel-indicators li.active {
 margin: 0px 5px;
 width: 20px;
 height: 20px;
}
}
</style>
</head>

<body>
<div class="container">
<div class="row">
<div class='col-md-offset-2 col-md-8 text-center'>
<h2>Message from our team members...!</h2>
</div>
</div>
<div class='row'>
<div class='col-md-offset-2 col-md-8'>
<div class="carousel slide" data-ride="carousel" id="quote-carousel">
<!-- Bottom Carousel Indicators -->
<ol class="carousel-indicators">
  <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
  <li data-target="#quote-carousel" data-slide-to="1"></li>
  <li data-target="#quote-carousel" data-slide-to="2"></li>
  <li data-target="#quote-carousel" data-slide-to="3"></li>
</ol>

<!-- Carousel Slides / Quotes -->
<div class="carousel-inner">
  
  <!-- Quote 1 -->
  <div class="item active">
    <blockquote>
      <div class="row">
        <div class="col-sm-3 text-center">
        <img style="width:80px;" src="{{asset('quote-slider/imgs/2.png')}}" />
        
        </div>
        <div class="col-sm-9">
          <p>Stay hungry, stay foolish.</p>
          <small>Steve Jobs</small>
        </div>
      </div>
    </blockquote>
  </div>
  <!-- Quote 2 -->
  <div class="item">
    <blockquote>
      <div class="row">
        <div class="col-sm-3 text-center">
              <img style="width:80px;"src="{{asset('quote-slider/imgs/3.png')}}" />
        </div>
        <div class="col-sm-9">
          <p>If you can dream it, you can do it.</p>
          <small>Walt Disney</small>
        </div>
      </div>
    </blockquote>
  </div>
  <!-- Quote 3 -->
  <div class="item">
    <blockquote>
      <div class="row">
        <div class="col-sm-3 text-center">
             <img style="width:80px;" src="{{asset('quote-slider/imgs/4.png')}}" />
        </div>
        <div class="col-sm-9">
          <p>Start where you are. Use what you have. Do what you can.</p>
          <small>Arthur Ashe</small>
        </div>
      </div>
    </blockquote>
  </div>
  <!-- Quote 4 -->
  <div class="item">
    <blockquote>
      <div class="row">
        <div class="col-sm-3 text-center">
              <img style="width:80px;" src="{{asset('quote-slider/imgs/1.png')}}" />
        </div>
        <div class="col-sm-9">
          <p>Running without competitor is waste of time..</p>
          <small>Arunkumar Maha</small>
        </div>
      </div>
    </blockquote>
  </div>
</div>

<!-- Carousel Buttons Next/Prev -->
<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
</div>
</div>
</div>
</div>

</body>
</html>


@stop