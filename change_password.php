<?php
require 'common/connection.php';

$email = $_SESSION['email'];
$password = $_POST['old_pass'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);
$password_new = $_POST['new_pass'];
$password_new = mysqli_real_escape_string($con, $password_new);
$password_con = $_POST['con_pass'];
$password_con = mysqli_real_escape_string($con, $password_con);


$query = "SELECT user_id, email FROM user WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num == 0) {
  $error = "<span class='red'>Please enter Old Password Correctly</span>";
  header('location:change_pss.php?error=' . $error);
} else {  
    if($password_new===$password_con){
        $password_new = MD5($password_new);
        $q="update user set password='$password_new' where email='$email'";
        $r= mysqli_query($con, $q) or die(mysqli_errno($con));
      header('location: user_details.php');  
    }
 else {
       $error = "<span class='red'>Please enter same Password</span>";
        header('location:change_pss.php?error1=' . $error);
    }
}