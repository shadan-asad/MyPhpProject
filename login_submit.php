<?php
require 'includes/common.php'
?>
<?php
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = md5(mysqli_real_escape_string($con, $_POST['password']));

$query = "SELECT id, email FROM users WHERE email='$email' AND password='$password' ";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$num = mysqli_num_rows($result);

if($num == 0) {
    $error = $_GET['error'];
    $error = "<span class='red'>Email or password is incorrect </span>";
    header("location: login.php?error='$error'");
    
}else{
    $row = mysqli_fetch_array($result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];
    header('location: products.php');
}
?>

