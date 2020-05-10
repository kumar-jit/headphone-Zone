<?php require 'common/connection.php';
        if (!isset($_SESSION['email'])) {
    header('location: product.php');
}
    $user_id=$_SESSION['user_id'];
    $query="UPDATE user_cart SET status = 'buy' WHERE user_id='$user_id' and status='yes';";
    $result= mysqli_query($con, $query) or die ($con);
?>
<html>
    <head>
        <title>Headphone Zone | | Thank You</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="css/bootstrap.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php require 'common/navbar.php'; ?>
        <div style="margin-top: 80px ; height: 70vh" class="container ">
            <h1 style="text-align: center;color: #ff7675">THANK YOU .......</h1>
            <div style="display: flex;justify-content: center;align-items: center;">
                <div  style="display:inline-block; width: 100%;text-align: center;margin: 30px">
                    <div>
                        <a class="btnsp" href="product.php">GO TO SHOP</a>
                    </div>
                </div>
            </div>
        </div>
        <?php  require 'common/footer.php'?>
    </body>
</html>