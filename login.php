<?php require 'common/connection.php';
    if (isset($_SESSION['email'])) {
    header('location: product.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Headphone Zone || Log in</title>
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
        <div class="login-body">
        <div class="login-page">
            
                <div class="panel panel-default login-page">
                    <div style="background-color: #17c4ca;color: white"class="panel-heading">
                        <p style="text-align: center;font-size:30px;font-weight: bolder;">Log In</p>
                    </div>
                    <div class="panel-body">
                        <form action="login_check.php" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" id="log-email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" id="log-password" required>
                            </div>
                            <div class="form-group" style="text-align: center">
                                <button type="submit" style="background-color: #17c4ca;color: white;"class="btn"> submit </button>
                            </div>
                            <p style="text-align: center;color: red" class="validation-msg">
                                <?php
                                if(isset($_GET['error'])){
                                echo $_GET['error']; }?>
                            </p>
                            <p style="float: right">New user ?.. <a href="signup.php">Register</a> now..</p>
                        </form>   
                    </div>
                </div>
            
        </div>
            </div>
    </body>
</html>
