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
        <title>Headphone Zone || Change Password</title>
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
                        <form action="change_password.php" method="POST">
                            <div class="form-group">
                                <label> Old Password</label>
                                <input type="text" placeholder="Old Password" name="old_pass" class="form-control" required>
                            <p style="text-align: center;color: red" class="validation-msg">
                                <?php
                                if(isset($_GET['error'])){
                                echo $_GET['error']; }?>
                            </p>
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="text" placeholder="New Password" name="new_pass" class="form-control" required>   
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="text" placeholder="Confirm Password" name="con_pass" class="form-control" required>   
                            </div>
                            <p style="text-align: center;color: red" class="validation-msg">
                                <?php
                                if(isset($_GET['error1'])){
                                echo $_GET['error1']; }?>
                            </p>
                            <div class="form-group">
                                 <button type="submit"class="btn btn-primary form-control">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            
        </div>
            <?php require 'common/footer.php'; ?>
    </body>
</html>
