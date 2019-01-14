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
<!-- cart table -->
<div class="row col-10">
<div class="container offset-2 col-md-6 main" style="margin-top: 30px;">
  <table>
    <tbody>
  <?php
  show_cart();
  ?>
  </tbody>
</table>


</div>
<div class="container col-md-2 main" style="margin-top: 30px;">

<h3>total price</h3>
  <h4> <?php total_price(); ?> </h4>
   <p style="background-color: #3b3a35; padding: 2px; font-size: small; border-radius: 0px; text-align: center;"><a href="checkout.php?action=remove&code=<?php echo $_SESSION['cart'][$i]['product_id']; ?>" class="btnRemoveAction" style="color: #f79e02;">complete purchase</a>
                        </p>


</div>
</div>
</div>
<?php
footer_code();
close();
?>