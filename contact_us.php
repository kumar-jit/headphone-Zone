<?php require 'common/connection.php';
    if (!isset($_SESSION['email'])) {
    header('location: product.php');}
?>
<html>
    <head>
        <title>Headphone Zone | | Contact Us</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="css/bootstrap.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php require 'common/navbar.php'; ?>
                <div class="container">
            <div class="row">
                <div class="col-xs-9">
                   <h3><b>LIVE SUPPORT</b></h3>
            <H5>24HOURS | 7 DAYS A WEEK | 365 DAYS A YEAR LIVE TECHNICAL SUPPORT</H5>
            <p>It is long established fact that a reader will be distracted by the readable content of a page when looking at its layout.the point of using Lorem lpsum is that it has a more-or-less normal distribution of letters. threre are many variation of passages of lorem lpsum available, but the majority have sufferly attention in some form,by injection humour, or randomised words which don't look even slighty believeable.If you are going to use a passge of Lorem lpsum,you need to besure there isn't anything embarrassing hidden in the middle of text.</p> 
                </div>
                <div class="col-xs-3">
                    <img src="img/contact.jpg" height="150px" width="200px">
                </div>
            </div>
                <div class="row">
                    <div class="col-xs-9">
                        <h4><b>CONTACT US:</b></h4>
                        <form>
                            <div class="form">
                                <form>
                                    <label>Name:</label>
                                    <input type="text" name="name" size="15" maxlength="30" class="form-control">
                                     <label>Email:</label>
                                    <input type="text" name="name" size="15" maxlength="30" class="form-control">
                                    <label>Message:</label>
                                    <textarea name="comments" cols="20" rows="4" class="form-control"></textarea>
                                </form>
                            
                            </div>
                        </form>  
                    </div>
                    <div class="col-xs-3">
                        <h4><b>Company Information:</b></h4>
                        <p>500 Lorem lpsumDolor sit,</p>
                        <p>22-56-2-9 Sit Amet,Lorem,</p>
                        <p> USA</p>
                        <p>Phone(+91)00000 00000</p>
                        <p>Fax(000)000 00 00 0</p>
                        <p>Email:info@mycompany.com</p>
                        <p>Follow on:Facebook,twitter</p>
                    </div>
                </div>
        </div>
        <?php require 'common/footer.php';?>
    </body>
</html>
