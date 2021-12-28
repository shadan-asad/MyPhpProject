<?php
require 'includes/common.php'
?>
<?php
if(!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lifestyle Store</title>

</head>

<body>
  <div id="page-container">
   <div id="content-wrap">
    <?php
    include 'includes/header.php'
    ?>

      <div class="container">
        <div class="row row_style">
          <div class="col-xs-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h4>Change Password</h4>
              </div>
              <div class="panel-body">
                  <form action="settings_script.php" method="POST">
                        <div class="form-group">
                          <input class="form-control" type="password" name="oldpassword" placeholder="Old Password">
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="password" name="newpassword" placeholder="New Password">
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="password" name="retypenewpassword" placeholder="Re-type New Password">
                        </div>
                      <div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                      <br>
                    <button type="submit" class="btn btn-primary btn-block">Change</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>
  <?php
  include 'includes/footer.php'
  ?>
  </div>
</body>
</html>