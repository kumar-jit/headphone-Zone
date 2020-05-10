<?php
require 'common/connection.php';
 
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $contact = $_POST['mobile'];
  $contact = mysqli_real_escape_string($con, $contact);

  $dob = $_POST['dob'];
  $dob = mysqli_real_escape_string($con, $dob);
  
   $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);
 
  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[6789][0-9]{9}$/";

  $query = "SELECT * FROM user WHERE email='$email'";
  $query1="SELECT * FROM user WHERE mobile='$contact'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  $result2= mysqli_query($con, $query1)or die($mysqli_error($con));
  $num2 = mysqli_num_rows($result2);
  if ($num != 0) {
    $msg = "<span>Email Already Exists</span>";
    header('location: signup.php?msg1=' . $msg);
  }
  elseif ($num != 0) {
    $msg = "<span>Email Already Exists</span>";
    header('location: signup.php?msg2=' . $msg);
  }
  else if (!preg_match($regex_email, $email)) {
    $msg = "<span>Not a valid Email Id</span>";
    header('location: signup.php?msg1=' . $msg);
  } 
  else if (!preg_match($regex_num, $contact)) {
    $msg = "<span>Not a valid phone number</span>";
    header('location: signup.php?msg2=' . $msg);
  } 
  else {
    
    $query = "INSERT INTO user(name, email, password, mobile, dob, city)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $dob . "','" . $city . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));

    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: product.php');
  }
?>