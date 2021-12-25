<?php
require 'includes/common.php'
?>
<?php
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lifestyle Store</title>

</head>

<body>
    <?php
    include 'includes/header.php'
    ?>
  <center>
  <div class="container">
    <div class="row row_style">
      <div class="col-xs-6">
        
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>Login</h4>
          </div>
          <div class="panel-body">
              <form method="POST" action="login_submit.php">
                <p class="text-warning">Login to make a purchase</p>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div><b class="red">
                    <?php
                    if(isset($_GET["error"])){
                    echo $_GET['error'];
                    }
                    ?>
                </b></div>
                <button class="btn btn-primary btn-block">Login</button>
              </form>
          </div>
          <div class="panel-footer">Don't have an account? <a href="signup.php">Register</a></div>
        </div>
      </div>
    </div>
  </div>
  </center>
  <?php
  include 'includes/footer.php'
  ?>
</body>
</html>
