<?php

include 'header.php';
include 'navbar.php';

?>
<!-- Carousel -->
<div id="demo" class="carousel slide mb-5" data-bs-ride="carousel">
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/php.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>PHP</h3>
        <p>PHP is a backend Programming Language that perform tasks in backend</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/images.jpg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3 class="text-dark">Web Development</h3>
        <p class="text-dark">Web Development is a course that makes Websites and handle sites.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/developing.jpg" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Front-end Developers</h3>
        <p>HTML, CSS and JavaScript is only used for fornt-end development.</p>
      </div>
    </div>
  </div>
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<!-- Carousel End -->
<!-- ------------------------------------------- -->
<!-- Projects Photos Start -->
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center"><ins><b><i>Gallery</i></b></ins></h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/developing.jpg" alt="Asad Naeem" class="img-fluid img pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/fullstack1.jpg" alt="Asad Naeem" class="img-fluid img pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/bugs.png" alt="Asad Naeem" class="img-fluid img pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/responsive2.jpg" alt="Asad Naeem" class="img-fluid img pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/frontend.jpg" alt="Asad Naeem" class="img-fluid img pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/php issues2.jpg" alt="Asad Naeem" class="img-fluid img pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/images.jpg" alt="Asad Naeem" class="img-fluid img pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/I Am Your Frontend Developer.png" alt="Asad Naeem" class="img-fluid img pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/php.jpg" alt="Asad Naeem" class="img-fluid img pb-4">
      </div>
    </div>
  </div>
</section>
<!-- Project Photos End -->
<!-- ------------------------------------------------- -->
<?php

include 'footer.php';

?>