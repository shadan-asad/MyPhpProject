<?php
require 'includes/common.php'
?>
<?php 
if(isset($_SESSION['email'])) {
    header('location: products.php');
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
    
    <div id="banner_image">
      <center>
      <div class="container">
        <div id="banner_content">
          <h1>We sell lifestyle.</h1>
          <p>Flat 40% OFF on premium brands</p>
          <a href="products.php" class="btn btn-danger btn-lg active">
            Shop Now 
          </a>
        </div>
      </div>
      </center>
    </div>
   </div>

  <?php
  include 'includes/footer.php'
  ?>
  </div>
</body>
</html>