<?php
require 'includes/common.php'
?>
<?php
if(!isset($_SESSION['email'])) {
header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$query = "SELECT item_id FROM users_item WHERE user_id = '$user_id'";
$result = mysqli_query($con, $query) or die(mysqli_errno($con));

while($row = mysqli_fetch_array($result)) {
    $item_id = $row['item_id'];
    $query1 = "UPDATE users_item SET status = 'Confirmed' WHERE item_id = '$item_id'";
    $result1 = mysqli_query($con, $query1) or die(mysqli_errno($con));
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

      <div class="container header_padding">
        <h3>Your order is confirmed.</h3>
        <h3>Thank you for shopping
with us. <a href="products.php">Click here</a> to purchase any other item.</h3>
    </div>

    <?php
  include 'includes/footer.php'
  ?>
  </div>
</body>
</html>

