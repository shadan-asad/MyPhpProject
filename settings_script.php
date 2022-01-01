<?php
require 'includes/common.php';

if(!isset($_SESSION['email'])) {
    header('location: index.php');
    
}else {
    $user_id = $_SESSION['user_id'];
    $email = $_SESSION['email'];
    
    $old_password = md5(mysqli_real_escape_string($con, $_POST['oldpassword']));
    $new_password = md5(mysqli_real_escape_string($con, $_POST['newpassword']));
    $retype_pass = md5(mysqli_real_escape_string($con, $_POST['retypenewpassword']));
    
    $query = "SELECT email, password FROM users WHERE email ='$email'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);

    $orig_pass = $row['password'];
    
    if ($new_password != $retype_pass) {
        header('location: settings.php?error=The two passwords don\'t match.');
    } else {
        if ($old_password == $orig_pass) {
            $query = "UPDATE  users SET password = '$new_password' WHERE email = '" . $_SESSION['email'] . "'";
            mysqli_query($con, $query) or die($mysqli_error($con));
            header('location: settings.php?error=Password Updated Successfully');
        } else {
            header('location: settings.php?error=Wrong Old Password.');
        }
    
    }
}
?>