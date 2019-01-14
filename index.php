<?php
session_start();
$currentPage = 'home';
require_once('fns.php');
// auth();
header_code();
?>
<div style="position: fixed; min-width: 100%; z-index: 1000;">
  <?php
brand();
nav();
?>
</div>  
<div class="col-12 ">
 <!-- carousel -->
  <div id="demo" class="carousel slide" data-ride="carousel" style="padding-top: 100px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div>
      <img src="images/1c.jpg" alt="Los Angeles" style="min-width: 100%; height: 400px;">
    </div>
    <div style="margin-top: -200px; margin-bottom: 110px;">
      <h1>
      <a href="megrouploans.php" style="text-decoration: none; color: white;">
      <span>Find out about our products and services</span></a>
    </h1>
    </div>
    </div>
    <div class="carousel-item">
      <div>
      <img src="images/2c.jpg" alt="Chicago" style="min-width: 100%; height: 400px;">
    </div>
      <div style="margin-top: -200px; margin-bottom: 110px;">
      <h1>
      <a href="megrouploans.php" style="text-decoration: none; color: white;">
      <span>Find out about our</span><br>
      <span>products and services</span></a>
    </h1>
    </div>
    </div>
    <div class="carousel-item">
      <div>
      <img src="images/3c.jpg" alt="New York" style="min-width: 100%; height: 400px;">
      </div>
      <div style="margin-top: -200px; margin-bottom: 110px; ">
      <h1>
      <a href="megrouploans.php" style="text-decoration: none; color: white;">
      <span>Find out about our</span><br>
      <span>products and services</span></a>
    </h1>
    </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
  <!-- carousel -->

<div class="container col-md-12 main" style="margin-top: 30px;">
    <div class="row gridProduct">
      <div class="clearfix"></div>
      <hr>
  
      <?php
     products();
     cart();
     ?>
     
</div>
</div>

<div class="container col-md-12 main" style="margin-top: 30px;">
 <h4 style="color: gray">recommended for you</h4>
    <div class="row gridProduct">
      <div class="clearfix"></div>
      <hr>
  
      <?php
     products();
     cart();
     ?>
     
</div>
</div>
</div>
<?php
footer_code();
close();
?>