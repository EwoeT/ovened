<?php  
session_start();
require_once('fns.php');
  header_code();
   auth();
  ?>
  <body>
  <div class="tp">
  <?php
  logo();
  nav();
  ?>
  </div>

 
      <div class="form-horizontal col-md-offset-3 col-md-6 border2"">
      <div style="text-align: center; margin-top:30px;">
        <p>deleted successfully</p>
      </div>
        <div class="form-group m n">
          <div class="col-xs-offset-5 col-xs-3">
          <input type="button" name="btn" value="ok" onclick="window.location='ivchistory.php'" class="row col-xs-offset-3 butto ">
          </div>
        </div>
      </div>

    </div>

  <?php
  footer_code();
   ?>
  