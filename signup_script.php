<?php
include 'includes/common.php'
?>
<?php
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = md5(mysqli_real_escape_string($con, $_POST['password']));
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);

$query = "SELECT id FROM users where email='$email'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);

if($num > 0) {
    echo "Email already exists.";
    
}else {
    $query = "INSERT INTO users(name, email, password, contact, city, address) VALUES('$name', '$email', '$password', '$contact', '$city', '$address')";
    $result = mysqli_query($con, $query)or die(mysqli_error($con));
    $num = mysqli_num_rows($result);
    
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = mysqli_insert_id($con);
    
    header('location: products.php');
}
?>