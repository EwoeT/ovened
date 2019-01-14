<?php 
// header
function header_code(){
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UpMan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/UpMan.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto|Shrikhand|Montserrat|Raleway">
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      window.alert = function(){};
      var defaultCSS = document.getElementById('bootstrap-css');
      function changeCSS(css){
        if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
        else $('head > link').filter(':first').replaceWith(defaultCSS); 
      }
      $( document ).ready(function() {
        var iframe_height = parseInt($('html').height()); 
        window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
      });
    </script>
    
    
  </head>
  <body>
    <?php
  }

// brand
  function brand(){
    ?>
    <div class="header col-12" >
      <form class="col-5 search form-inline">
        <input class="form-control col-9" style="margin-top: 30px; border-radius: 0px; border-color: white" type="text" placeholder="Search product" aria-label="Search">
        <button class="btn btn-success col-3" style="margin-top: 30px; background-color: #f79e02; border-radius: 0px; border-color:  #f79e02" onmouseover="this.style='margin-top: 30px; background-color: #f79e02; border-radius: 0px; border-color:  #f79e02; color: #3b3a35;'" onmouseout="this.style='color:white; margin-top: 30px; background-color: #f79e02; border-radius: 0px; border-color:  #f79e02; '" type="submit">Search</button>
      </form>
      <p class="name">upMan.com </p>
    </div>
    <?php
  }

  function nav(){
    ?>
    <!-- navigation bar -->
    <nav class="navbar-default navbar-expand-md navbar-dark navb col-12" role="navigation" style="background-color: #f79e02;">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
     <div class="container-fluid">

       <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse col-12" id="navbarSupportedContent" >
        <ul class="navbar-nav col-12">
          <li class="navv"><a href="index.php" style="color:#3b3a35; text-decoration:none;" onmouseover="this.style='color:black; text-decoration:none;'" onmouseout="this.style='color:#3b3a35;  '">home</a></li> 
          <li class="navv"><a href="form.php" style="color:#3b3a35; text-decoration:none;" onmouseover="this.style='color:black; text-decoration:none;'" onmouseout="this.style='color:#3b3a35;  '"">add entry</a></li> 
          <li class="navv"><a href="ivchistory.php" style="color:#3b3a35; text-decoration:none;" onmouseover="this.style='color:black; text-decoration:none;'" onmouseout="this.style='color:#3b3a35;  '">view entries</a></li>
          <li class="navv"><a href="select_report.php" style="color:#3b3a35; text-decoration:none;" onmouseover="this.style='color:black; text-decoration:none;'" onmouseout="this.style='color:#3b3a35;  '">view report</a></li>
          <div class=" ml-auto col-lg-3 col-md-4 row">
          <li class="navvi dropdown" >
            <div class="">
           <?php
           if(!isset($_SESSION['user_number'])){
            ?>
            <a href="login.php" style="color:#3b3a35; text-decoration:none;">
              <?php
              echo 'Please login';
              ?>
            </a>
            <?php
          }
          else{
            ?>
            <a class="dropdown-toggle"
            data-toggle="dropdown"
            href="#" style="color:#3b3a35; text-decoration:none;">
            <?php
            echo $_SESSION['username'];
            ?>
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="logout.php" style="color:#393939;"><img src="images/exit.png" alt="" />logout</a></li> 
            <li><a href="account_setting.php" style="color:#393939;"><img src="images/settings.png" alt="" />account settings</a></li> 
          </ul>
          <?php
        }
        ?> 
       </div>
      </li>
      <li class="offset-1"><a href="cart.php" style="color:#3b3a35; text-decoration:none;">cart: <?php cart_number() ?> items</a></li>
      </div>
    </ul>
    </div>
  </div>

</nav>
<?php
}


//footer
function footer_code(){
?>

<!--Footer-->
<footer class="page-footer font-small unique-color-dark pt-0">

    <!--Footer Links-->
    <div class="" style="background-color: #3b3a35; padding-top: 20px; padding-bottom: 30px; color: #e1e6f9; font-size: small;" >
        <div class="row mt-3">

            <!--First column-->
            <div class="offset-1 col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong style="color: #f79e02">upMan.com</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong style="color: #f79e02">Products</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!" style="color: #e1e6f9; text-decoration: none;">MDBootstrap</a>
                </p>
                <p>
                    <a href="#!" style="color: #e1e6f9; text-decoration: none;">MDWordPress</a>
                </p>
                <p>
                    <a href="#!" style="color: #e1e6f9; text-decoration: none;">BrandFlow</a>
                </p>
                <p>
                    <a href="#!" style="color: #e1e6f9; text-decoration: none;">Bootstrap Angular</a>
                </p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mid_footer">
                <h6 class="text-uppercase font-weight-bold">
                    <strong style="color: #f79e02">Useful links</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!" style="color: #e1e6f9; text-decoration: none;">Your Account</a>
                </p>
                <p>
                    <a href="#!" style="color: #e1e6f9; text-decoration: none;">Become an Affiliate</a>
                </p>
                <p>
                    <a href="#!" style="color: #e1e6f9; text-decoration: none;">Shipping Rates</a>
                </p>
                <p>
                    <a href="#!" style="color: #e1e6f9; text-decoration: none;">Help</a>
                </p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold">
                    <strong style="color: #f79e02">Contact</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i> AD 145 Accra, Ghana</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> info@upman.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                <p>
                    <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <div style="border-top:solid; border-color: #96753D; border-width: 1px; background-color: #3b3a35">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <div class="" style="list-style:none">
                  <span style="color: #f79e02;">Get connected on social media platforms</span>
                  <img class="offset-1" src="images/facebook_dark.png" onmouseover="this.src='images/facebook_active.png'" onmouseout="this.src='images/facebook_dark.png'">
                  <img class="" src="images/rss_dark.png" onmouseover="this.src='images/rss_active.png'" onmouseout="this.src='images/rss_dark.png'">   
                  <img class="" src="images/in_dark.png" onmouseover="this.src='images/in_active.png'" onmouseout="this.src='images/in_dark.png'">   
              </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="fb-ic ml-0">
                        <i class="fa fa-facebook white-text mr-lg-4"> </i>
                    </a>
                    <!--Twitter-->
                    <a class="tw-ic">
                        <i class="fa fa-twitter white-text mr-lg-4"> </i>
                    </a>
                    <!--Google +-->
                    <a class="gplus-ic">
                        <i class="fa fa-google-plus white-text mr-lg-4"> </i>
                    </a>
                    <!--Linkedin-->
                    <a class="li-ic">
                        <i class="fa fa-linkedin white-text mr-lg-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fa fa-instagram white-text mr-lg-4"> </i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>


    <!-- Copyright-->
    <div class="copyright text-md-right" style="padding-top: 10px; padding-bottom: 20px; padding-right: 20px; background-color: #4c4947; color: #e1e6f9" >
        <span style="font-size: small;">© 2018</span>
        <a href="https://mdbootstrap.com/material-design-for-bootstrap/">
            <span style="color: #e1e6f9; font-size: small; text-decoration: none;"> upMan.com</span>
        </a>
    </div>
    <!--/.Copyright -->

</footer>
 
<?php
}

// terminate html
function close(){
  ?>

  <script src="js/_main.js"></script>
</body>

</html>
<?php
}


//authenticate login
function auth(){
  if(!isset($_SESSION['user_number'])){
    $home_url = 'login.php';
    header('Location: ' . $home_url);
  }

}


// connection
$con = mysqli_connect("localhost", "ewoe", "ewoe", "upmandb");

// display category
function cat(){
  global $con;
  $query = "select * from categories";
  $run_query = mysqli_query($con, $query);

  while ($row = mysqli_fetch_array($run_query)) {
    $cat_id = $row['cat_id'];
    $cat = $row['category'];
    echo "<li><a href='#' style='color: #3b3a35; font-size: small;'>$cat</a></li>";
  }
}


// dropdown select for adding category
  function add_cat(){
  global $con;
  $query = "select * from categories";
  $run_query = mysqli_query($con, $query);

  while ($row = mysqli_fetch_array($run_query)) {
    $cat_id = $row['cat_id'];
    $cat = $row['category'];
    echo "<option value='$cat'>$cat</option>";
  } 
}


// display events
function event(){
  global $con;
  $query = "select * from event";
  $run_query = mysqli_query($con, $query);

  while ($row = mysqli_fetch_array($run_query)) {
    $event_id = $row['event_id'];
    $event = $row['event'];
    echo "<li><a href='#' style='color: #3b3a35; font-size: small;'>$event</a></li>";
  } 
}

// dropdown select for adding event
function add_event(){
  global $con;
  $query = "select * from event";
  $run_query = mysqli_query($con, $query);

  while ($row = mysqli_fetch_array($run_query)) {
    $event_id = $row['event_id'];
    $event = $row['event'];
    echo "<option value='$event'>$event</option>";
  } 
  } 

// display products
function products(){
  global $con;
  $query = "select * from product order by RAND() LIMIT 0,8";
  $run_query = mysqli_query($con, $query);

  while ($row = mysqli_fetch_array($run_query)) {
    $product_id = $row['product_id'];
    $name = $row['product_name'];
    $image = $row['image'];
    $price = $row['price'];
    ?>
     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="margin-bottom: 20px;"><?php echo"<a href='product.php?product_id=$product_id'><img class='img-fluid' src='$image' height='' width='' style='max-height: 220px; min-height: 220px; max-width: 240px; min-width: 240px;'> </a>" ?>
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <p  style="margin-bottom: 0px; "><?php echo"<a href='product.php?product_id=$product_id' style='text-decoration: none; color:#3b3a35;''>$name</a>" ?></p>
            <p><a <?php echo"href='index.php?cart_item=$product_id'"?> style="border: solid 1px #f79e02; padding: 2px; color: #3b3a35; font-size: small; border-radius: 0px;" onmouseover="this.style='background-color: #f79e02; padding: 2px; color: white; font-size: small; border-radius: 0px; text-decoration:none;'" onmouseout="this.style='border: solid 1px #f79e02; padding: 2px; color: #3b3a35; font-size: small; border-radius: 0px;'">add to cart</a></p>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <p class="price"><?php echo"€ $price" ?><br><small>
                <del>€10,00</del></small></p>
          </div>
        </div>

          
      </div>
      <div class="clearfix visible-sm-block visible-xs-block visible-lg-block"></div>
      <hr class="visible-sm-block visible-xs-block visible-lg-block">
      <?php
  }
}

// get user ip
function get_ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

// add to cart
function cart(){
  if (isset($_GET['cart_item'])) {
    global $con;
    $product_id = $_GET['cart_item'];
    $ip=get_ip();
    $check_dup = "select * from cart where user_ip='$ip' and p_id='$product_id';";
    $run_query = mysqli_query($con, $check_dup);
    if (mysqli_num_rows($run_query)!=0) {
      echo "";
    }
    else{
      $insert_query="insert into cart (p_id, user_ip) values ('$product_id', '$ip')";
      $run_insert=mysqli_query($con, $insert_query);
      echo"<script>window.open('index.php','_self')</script>";
    }

  }
}

//display number of items in cart
function cart_number(){
  if (isset($_GET['cart_item'])) {
    global $con;
    $product_id = $_GET['cart_item'];
    $ip=get_ip();
    $items = "select * from cart where user_ip='$ip';";
    $run_query = mysqli_query($con, $items);
    $num_items = mysqli_num_rows($run_query);
    echo $num_items;
  }
  else{
    global $con;
    $ip=get_ip();
    $items = "select * from cart where user_ip='$ip';";
    $run_query = mysqli_query($con, $items);
    $num_items = mysqli_num_rows($run_query);
    echo $num_items;
  }

}

// display cart
function show_cart(){
  global $con;
  $ip=get_ip();
  $query1 = "select * from cart join product on cart.p_id = product.product_id where cart.user_ip='$ip'";
  $run_query = mysqli_query($con, $query1);
  while ($row = mysqli_fetch_array($run_query)) {
    $product = $row['product_name'];
    $image = $row['image'];
    $price = $row['price'];
    ?>
      <tr>
                        <td>
                        <p> <?php echo $product ?></p>                   
                        </td>
                        <td>
                        <p> <img src=" <?php echo $image ?>"> </p> 
                        </td>
                        <td>
                        <p> <?php echo"€ $price"?></p>
                        </td>                       
                        <td>
                        <p style="border: solid 1px #f79e02; padding: 2px; color: #3b3a35; font-size: small; border-radius: 0px;"><a href="sales.php?action=remove&code=<?php echo $_SESSION['cart'][$i]['product_id']; ?>" class="btnRemoveAction">remove item</a>
                        </p>
                      </td>
                    </tr>
<?php
  }
  ?>
  
  <?php
}

function total_price(){
     global $con;
  $ip=get_ip();
  $query2 = "select SUM(price) as total from cart join product on cart.p_id = product.product_id where cart.user_ip='$ip'";
  $run_query2 = mysqli_query($con, $query2);
  $total= mysqli_fetch_object($run_query2);
  echo "€ $total->total";
  }


// checkout from cart
  function cart_checkout(){
    if(!isset($_SESSION['customer_id'])){
      ?>
      <div class="text-center offset-2 col-8" style="margin-top: 50px;margin-bottom: 90px;">
      <h5 style="color: #f79e02">login to complete purchase</h5>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="form-group" style="margin-top: 40px;">
          <label class="col-2">Email</label>
          <input type="text" name="email" placeholder="email">
        </div>
        <div class="form-group" style="margin-top: 20px; margin-bottom: 30px">
          <label class="control-label col-2">Password</label>
          <input type="password" name="password" placeholder="password">
        </div>
        <div class="form-group">
          <button type="submit" name="sign_in" style="background-color: #3b3a35; color: #f79e02; border-style: none;">sign in</button>
          <a href="">forgot password</a>
        </div>
         <div class="form-group">
          <a href="">sign up</a>
        </div>
      </form>
      </div>
      <?php
    }
    else{
      echo "successfull";
    }
    }

?>