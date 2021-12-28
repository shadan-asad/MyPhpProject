<?php
include "includes/common.php"
?>
<?php
$user_id = $_SESSION['user_id'];
$item_id = $_GET['id'];
$query = "INSERT INTO users_item(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$result = mysqli_query($con, $query);
header('location: products.php');

?>