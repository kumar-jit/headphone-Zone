<?php
    require 'common/connection.php';
    if(isset($_GET['product_id'])){
        $product_id=$_GET['product_id'];
        $user_id=$_SESSION['user_id'];
        $query="INSERT INTO user_cart (user_id, product_id, status, timestamp) VALUES ('$user_id','$product_id','yes',CURRENT_TIMESTAMP);";
        $result= mysqli_query($con,$query) or die($con);
        header('location: product.php');
    }
    ?>