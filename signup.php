<?php require 'common/connection.php'; 
if (isset($_SESSION['email'])) {
    header('location: product.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Headphone Zone || Sing Up</title>
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
        <div style="margin: -20" class="container-fluid">
            <div class="signup-background">
                <div class="signup">
                <div class="row ">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-6 col-lg-3 col-lg-offset-8 singup">
                        <form action="signup_check.php" method="post">
                            <h1 style="text-align: center;" class="form-header form-control">SIGN UP</h1>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Name" required  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"  name="email" placeholder="Email" required  class="form-control">
                                    <?php if(isset( $_GET['msg1'])){ 
                                    echo $_GET['msg1']; }
                                    ?>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password"  name="password" placeholder="Password" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label>Mobile No</label>
                                <input type="text"  name="mobile" placeholder="Mobile" required  class="form-control">
                                    <?php if(isset($_GET['msg2'])){
                                    echo $_GET['msg2'];} ?>
                            </div>
                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="date" name="dob" placeholder="Date of Birth" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" id="city" name="city" placeholder="City" required class="form-control">
                            </div>
                            <div class="form-group" style="text-align: center">
                                <button type="submit" name="submit" style="background: rgb(241,183,180);color: white" class=" form-control btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </body>
</html>
<?php require 'common/footer.php'; ?>