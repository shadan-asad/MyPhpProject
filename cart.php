<?php
require 'includes/common.php'
?>
<?php
if(!isset($_SESSION['email'])) {
    header('location: login.php');
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
    <?php
    include 'includes/header.php'
    ?>
  
  <div class="container header_padding">
    <div class="table_width">
      <table class="table table-bordered">
          <?php 
          $sum=0;
          $user_id=$_SESSION['user_id'];
          $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_item JOIN items ON users_item.item_id = items.id WHERE users_item.user_id='$user_id' and status='Added to cart'";
          $result = mysqli_query($con, $query) or die($mysqli_error($con));
          if(mysqli_num_rows($result) >= 1) {
          ?>   
          
            <thead>
              <th>Item Number</th>
              <th>Item Name</th>
              <th>Price</th>
              <th>Order</th>
            </thead>
            
            <tbody>
                <?php
                while($row = mysqli_fetch_array($result)) {
                    $sum += $row["Price"];
                    $id = "";
                    $id .= $row["id"]."";
                    echo "<tr>
                            <td>"."#" . $row["id"] . "</td>
                            <td>" . $row["Name"] . "</td>
                            <td>Rs " . $row["Price"] . "</td>
                            <td><a href='cart-remove.php?id={$row['id']}' class='btn btn-primary btn-danger btn-solid'> Remove </a></td>
                          </tr>";
                }
                $id = rtrim($id, ",");
                echo "<tr>
                          <td></td>
                          <td>Total</td>
                          <td>Rs " . $sum . "</td>
                          <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                      </tr>";
                ?>
        </tbody>
        <?php
          } else {
              echo "<center><h2>Add items to the cart first!</h2></center>";
          }
          ?>
      </table>
    </div>
  </div>

  <?php
  include 'includes/footer.php'
  ?>
  
</body>
</html>