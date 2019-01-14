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
<div class="sidebr col-md-2" style="list-style: none;">
    <div class="categories" style="list-style: none;">
        <h4>categories</h4>
        <?php
            cat();
        ?>
    </div>
    <div class="event" style="list-style: none;">
        <h4>event</h4>
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
      if(isset($_GET['product_id'])){
        $product_id = $_GET['product_id'];
     global $con;
  $query = "select * from product where product_id = '$product_id'";
  $run_query = mysqli_query($con, $query);

  while ($row = mysqli_fetch_array($run_query)) {
    $product_id = $row['product_id'];
    $name = $row['product_name'];
    $image = $row['image'];
    $price = $row['price'];
    $description = $row['description']
    ?>
    <div class="col-12 row">
     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="margin-bottom: 20px;"><?php echo"<a href='product.php?product_id=$product_id'><img class='img-fluid' src='$image' style='max-height: 300px; min-height: 320px; max-width: 300px; min-width: 320px;'> </a>" ?>    
      </div>
      <div class="offset-1 col-xs-10 col-sm-5 col-md-4 col-lg-6 ">
        <h3><?php echo "$name"; ?></h3>
        <h5><del>€10,00</del></h5>
        <h4 class="price"><?php echo"€ $price" ?></h4>
        <p><a href="index.php?cart_item=$product_id" style="border: solid 1px #f79e02; padding: 2px; color: #3b3a35; font-size: small; border-radius: 0px;" onmouseover="this.style='background-color: #f79e02; padding: 2px; color: white; font-size: small; border-radius: 0px; text-decoration:none;'" onmouseout="this.style='border: solid 1px #f79e02; padding: 2px; color: #3b3a35; font-size: small; border-radius: 0px;'">add to cart</a></p>
        <p  style="margin-bottom: 0px; "><?php echo"$description" ?></p> 
      </div>
      </div>
       <!-- xs after every 1-->
      <!-- sd after every 2-->
      <!-- md after every 3-->
      <!-- lg after every 4-->
      <div class="clearfix visible-sm-block visible-xs-block visible-lg-block"></div>
      <hr class="visible-sm-block visible-xs-block visible-lg-block">
      <?php
  }
}
     ?>
     
</div>
</div>
</div>
<?php
footer_code();
close();
?>