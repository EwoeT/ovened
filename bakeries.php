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
<div class="col-12 " style="padding-top: 100px;">


<div class="container col-md-12 main" style="margin-top: 30px;">
 <h4 style="color: gray">top rated</h4>
    <div class="row gridProduct">
      <div class="clearfix"></div>
      <hr>
  
      <?php
     top_bakeries();
     ?>
     
</div>
</div>

<div class="container col-md-12 main" style="margin-top: 30px;">
 <h4 style="color: gray">recently bought</h4>
    <div class="row gridProduct">
      <div class="clearfix"></div>
      <hr>
  
      <?php
     recent_bakeries();
     ?>
     
</div>
</div>

<div class="container col-md-12 main" style="margin-top: 30px;">
 <h4 style="color: gray">new bakeries</h4>
    <div class="row gridProduct">
      <div class="clearfix"></div>
      <hr>
  
      <?php
     new_bakeries();
     ?>
     
</div>
</div>

</div>
<?php
footer_code();
close();
?>