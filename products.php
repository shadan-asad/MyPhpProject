<?php
require 'includes/common.php'
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
    <?php
    include 'includes/check-if-added.php'
    ?>

      <div class="container header_padding">
        <div class="jumbotron">
          <h1>Welcome to our Lifestyle Store!</h1>
          <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
        <div class="row text-center">
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/5.jpg">
              <div class="caption">
                <h3>Cannon EOS</h3>
                <p>Price:Rs. 36000</p>
                <?php if(!isset($_SESSION['email'])) { ?>
                <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                <?php } else { ?>
                        <?php if(check_if_added_to_cart(1)) { ?>
                                <a href="#" class="btn btn-success" disabled>Added to cart</a>
                        <?php } else { ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php } ?>       
                <?php } ?>   
                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/2.jpg">
              <div class="caption">
                <h3>Nikkon DSLR</h3>
                <p>Price:Rs. 40000</p>
                <?php if(!isset($_SESSION['email'])) { ?>
                <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                <?php } else { ?>
                        <?php if(check_if_added_to_cart(2)) { ?>
                                <a href="#" class="btn btn-success" disabled>Added to cart</a>
                        <?php } else { ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php } ?>       
                <?php } ?>   
               </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/3.jpg">
              <div class="caption">
                <h3>Sony DSLR</h3>
                <p>Price:Rs. 45000</p>
                <?php if(!isset($_SESSION['email'])) { ?>
                <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                <?php } else { ?>
                        <?php if(check_if_added_to_cart(3)) { ?>
                                <a href="#" class="btn btn-success" disabled>Added to cart</a>
                        <?php } else { ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php } ?>       
                <?php } ?>   
                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/4.jpg">
              <div class="caption">
                <h3>Olympus DSLR</h3>
                <p>Price:Rs. 50000</p>
                <?php if(!isset($_SESSION['email'])) { ?>
                <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                <?php } else { ?>
                        <?php if(check_if_added_to_cart(4)) { ?>
                                <a href="#" class="btn btn-success" disabled>Added to cart</a>
                        <?php } else { ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php } ?>       
                <?php } ?>   
                
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/9.jpg">
              <div class="caption">
                <h3>Titan 301</h3>
                <p>Price:Rs. 14000</p>
                <?php if(!isset($_SESSION['email'])) { ?>
                <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                <?php } else { ?>
                        <?php if(check_if_added_to_cart(5)) { ?>
                                <a href="#" class="btn btn-success" disabled>Added to cart</a>
                        <?php } else { ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php } ?>       
                <?php } ?>   
                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/10.jpg">
              <div class="caption">
                <h3>Titan 201</h3>
                <p>Price:Rs. 3400</p>
                <?php if(!isset($_SESSION['email'])) { ?>
                <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                <?php } else { ?>
                        <?php if(check_if_added_to_cart(6)) { ?>
                                <a href="#" class="btn btn-success" disabled>Added to cart</a>
                        <?php } else { ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php } ?>       
                <?php } ?>   
                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/11.jpg">
              <div class="caption">
                <h3>HMT Milan</h3>
                <p>Price:Rs. 8000</p>
                <?php if(!isset($_SESSION['email'])) { ?>
                <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                <?php } else { ?>
                        <?php if(check_if_added_to_cart(7)) { ?>
                                <a href="#" class="btn btn-success" disabled>Added to cart</a>
                        <?php } else { ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php } ?>       
                <?php } ?>   
                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/12.jpg">
              <div class="caption">
                <h3>Faber Luba</h3>
                <p>Price:Rs. 18000</p>
                <?php if(!isset($_SESSION['email'])) { ?>
                <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                <?php } else { ?>
                        <?php if(check_if_added_to_cart(8)) { ?>
                                <a href="#" class="btn btn-success" disabled>Added to cart</a>
                        <?php } else { ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php } ?>       
                <?php } ?>   
                
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/6.jpg">
              <div class="caption">
                <h3>H&W</h3>
                <p>Price:Rs. 800</p>
                <?php if(!isset($_SESSION['email'])) { ?>
                <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                <?php } else { ?>
                        <?php if(check_if_added_to_cart(9)) { ?>
                                <a href="#" class="btn btn-success" disabled>Added to cart</a>
                        <?php } else { ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php } ?>       
                <?php } ?>   
                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/8.jpg">
              <div class="caption">
                <h3>Louis Phil</h3>
                <p>Price:Rs. 1000</p>
                <?php if(!isset($_SESSION['email'])) { ?>
                <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                <?php } else { ?>
                        <?php if(check_if_added_to_cart(10)) { ?>
                                <a href="#" class="btn btn-success" disabled>Added to cart</a>
                        <?php } else { ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php } ?>       
                <?php } ?>   
                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/13.jpg">
              <div class="caption">
                <h3>John Zok</h3>
                <p>Price:Rs. 1500</p>
                <?php if(!isset($_SESSION['email'])) { ?>
                <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                <?php } else { ?>
                        <?php if(check_if_added_to_cart(11)) { ?>
                                <a href="#" class="btn btn-success" disabled>Added to cart</a>
                        <?php } else { ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php } ?>       
                <?php } ?>   
                
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/14.jpg">
              <div class="caption">
                <h3>Jhalsani</h3>
                <p>Price:Rs. 1300</p>
                <?php if(!isset($_SESSION['email'])) { ?>
                <a href="login.php" type="button" class="btn btn-primary btn-block">Add to cart</a>
                <?php } else { ?>
                        <?php if(check_if_added_to_cart(12)) { ?>
                                <a href="#" class="btn btn-success" disabled>Added to cart</a>
                        <?php } else { ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                        <?php } ?>       
                <?php } ?>   
                
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
