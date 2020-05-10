<?php
 require 'common/connection.php';
 if(isset($_GET['product_id']))
 {
    $product_id=$_GET['product_id'];
    $user_id=$_SESSION['user_id'];
    $query="UPDATE user_cart SET status = 'no' WHERE user_id='$user_id' and product_id='$product_id';";
    $result= mysqli_query($con, $query) or die ($con);
    header('location:cart.php');
 }