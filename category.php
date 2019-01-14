<?php
session_start();
$currentPage = 'home';
require_once('fns.php');
// auth();
header_code();
brand();
nav();
?>  
<div class="col-12 row">
<div class="sidebr col-md-2" style="list-style: none;  background-color: #C4C3C2; color: black;">
    <div class="categories" style="list-style: none;">
        <h5>categories</h5>
        <?php
            cat();
        ?>
    </div>
    <div class="event" style="list-style: none;">
        <h5>event</h5>
        <?php
            event();
        ?>
    </div>
</div>
<div class="container col-md-10 main" style="margin-top: 30px;">
<div class="row">
      <div class="col-xs-12"></div>
    </div>
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