<?php
require 'includes/common.php'
?>
<?php
if(isset($_SESSION['email'])){
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

  <!--jQuery library--> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
  </script>

  <!--Latest compiled and minified JavaScript--> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lifestyle Store</title>
</head>

<body>
    <?php
    include 'includes/header.php'
    ?>

  <div class="container">
    <div class="row row_style">
      <div class="col-xs-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
              <h4><center>Sign Up</center></h4>
          </div>
          <div class="panel-body">
              <form method="POST" action="signup_script.php">
                <div class="form-group">
                  <input class="form-control" type="text" name="name" placeholder="Name" required="true">
                </div>
                <div class="form-group">
                  <input class="form-control" type="email" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" name="password" placeholder="Password" required="true" pattern="{6,}">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="contact" placeholder="Contact" required="true" size="10">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="city" placeholder="City">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="address" placeholder="Address">
                </div>
                  <button class="btn btn-primary btn-block" type="submit">Submit</button>
              </form>
          </div>
            <div class="panel-footer"><center>Already have an account? <a href="login.php">Login</a></center></div>
        </div>
      </div>
    </div>
  </div>
      
  <?php
  include 'includes/footer.php'
  ?>
  </body>
  </html>
  