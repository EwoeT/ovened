<?php
session_start();
$currentPage = 'products';
require_once('fns.php');
header_code();
brand();
 

 $alert1=false;
 $alert2=false;
 // If the user isn't logged in, try to log them in
if (!isset($_SESSION['user_number'])) {
  if (isset($_POST['submit'])){
    // Connect to the database
    $dbc = mysqli_connect('localhost', 'ewoe', 'ewoe', 'upmandb')
    or die('Error connecting to MySQL server.');
    // Grab the user-entered log-in data
    $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));

    if (!empty($user_username) && !empty($user_password)) {
        // Look up the username and password in the database
        $query = "SELECT user_number, username FROM users WHERE username = '$user_username' AND password = sha1('$user_password')";
        $data = mysqli_query($dbc, $query);
      if (mysqli_num_rows($data) == 1) {
        // The log-in is OK so set the user ID and username session variables, and redirect to the home page
        $row = mysqli_fetch_array($data);
        $_SESSION['user_number'] = $row['user_number'];
        $_SESSION['username'] = $row['username'];
        $home_url = 'home.php';
        header('Location: ' . $home_url);
      }
      else {
        // The username/password are incorrect so set an error message
        $alert2=true;

      }
    }

    else{
      ?> 
      <?php
      $alert1=true;
    }
  }
}
  ?> 



   <form class="form-horizontal col-xs-offset-3 col-xs-6 mg2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <?php
        if ($alert1==true) { ?>
        <h5 style="color:red;text-align:center;">Enter username or password</h5>
      <?php }
      if ($alert2==true) { ?>
        <h5 style="color:red;text-align:center;">Invalid username or password</h5>
      <?php } ?>
        <div class="form-group m">
          <label for="username" class="col-sm-offset-1 col-sm-2 control-label">Username</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="username" placeholder="username" value="">
          </div>
        </div>
        <div class="form-group m">
          <label for="password" class="col-sm-offset-1 col-sm-2 control-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" name="password" placeholder="password">
          </div>
        </div>
        <div class="form-group m n">
          <div class="col-xs-offset-5 col-xs-3 mg3">
            <button type="submit" class="butto" name="submit">Sign in</button>
          </div>
        </div>
      </form>
    

<?php
footer_code();
close();
?>