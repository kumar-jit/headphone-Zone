<?php require 'common/connection.php';
    if (!isset($_SESSION['email'])) {
    header('location: product.php');
}
    $user_id=$_SESSION['user_id'];
    $query="select * from user where user_id='$user_id'";
    $result= mysqli_query($con, $query) or die ($con);
    $row= mysqli_fetch_array($result);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Headphone Zone || User Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        require 'common/navbar.php';
        ?>
        <div style="min-height:75%" class="login-body">

            
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <p style="text-align: center;font-size:30px;font-weight: bolder;">User Details</p>
                    </div>
                    <div style="padding: 20px 40px" class="panel-body">
                        <h3> <?php echo $row['name'] ?></h3>
                        <h5>Email : <?php echo $row['email'] ?></h5>
                        <h5>Contact : <?php echo $row['mobile'] ?></h5>
                        <h5>Date of Birth : <?php echo $row['dob'] ?></h5>
                        <h5>City : <?php echo $row['city'] ?></h5>
                    </div>
                    <div style="text-align: center;padding: 20px 5px" class="panel-footer">
                        <a class="btnsp" href="change_pss.php"> CHANGE PASSWORD</a>
                    </div>
                </div>
            
        </div>
            <?php        require 'common/footer.php'; ?>
    </body>
</html>
