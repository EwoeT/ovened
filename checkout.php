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

<div class="container col-md-10 main" style="margin-top: 30px;">
 <?php
 cart_checkout();
 ?>
</div>
</div>
<?php
footer_code();
close();
?>