<?php
session_start();
$currentPage = 'products';
require_once('fns.php');
auth();
header_code();
brand();
nav();
?>  

<div id="wrapper">

    
      <form class="form-horizontal " method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
       <div class="form-group">
        <label for="lastname" class="control-label">Product name:</label>
        <div class=" col-">
        <input type="text" required id="productname" name="productname" class=" form-control" placeholder="product name" value="<?php if (!empty($productname)) echo $productname; ?>"/><br />
        </div>
      </div>
      <div class="form-group">
        <label for="type" class="">Product Category:</label>
        <div class=" ">
        <select>
            <option value="" disabled="disabled" selected="selected">Please select a category</option>
            <?php add_cat() ?>
        </select>
        </div>
      </div>
      <div class="form-group">
        <label for="type" class="">Event:</label>
        <div class=" ">
        <select>
            <option value="" disabled="disabled" selected="selected">Please select an event</option>
            <?php add_event() ?>
        </select>
        </div>
      </div>
       <div class="form-group">
        <label for="use" class="">Product image:</label>
        <div class=" col-">
        <input type="file" id="use" name="use" class="form-control" placeholder="other names" value="<?php if (!empty($use)) echo $use; ?>"/><br />
        </div>
      </div>
      <div class="form-group">
        <label for="use" class="">Description:</label>
        <div class=" col-">
        <input type="text" id="use" name="use" class="form-control" placeholder="other names" value="<?php if (!empty($use)) echo $use; ?>"/><br />
        </div>
      </div>
        <div class="form-group">
        <label for="price" class="">Price:</label>
        <div class=" col-">
        <input type="text" required id="price" name="price" class="form-control" placeholder="price" value="<?php if (!empty($price)) echo $price; ?>"/><br />
        </div>
      </div>
        
        
        <button type="submit" name="add" class="row col-xs-offset-3 butto">add</button>
        <button type="button" value="Reset" onclick="window.location='product_add.php'" class="row col-xs-offset-3 butto " data-modal-type="confirm">reset</button>
        </div>
        
</form>
</div>
<?php
  footer_code();
   ?>