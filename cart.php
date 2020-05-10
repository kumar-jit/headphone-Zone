<?php require 'common/connection.php';
    if (!isset($_SESSION['email'])) {
    header('location: product.php');}
?>
<html>
    <head>
        <title>Headphone Zone | | Cart</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="css/bootstrap.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php require 'common/navbar.php'; ?>
        <div style="margin-top: 80px;min-height:65%" class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 ">
                    <!table class="table table-striped">
                        <?php
                        $total = 0;
                        $user_id = $_SESSION['user_id']; 
                        $query = "SELECT * from user_cart uc join product p on uc.product_id = p.product_id where uc.user_id='$user_id' and status = 'yes'";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        $row=mysqli_num_rows($result);
                        
                        if ( $row >= 1) {
                            echo '<h1 style="font-size:50px;text-algin:center;color:#ed7b9c">  CART  <h1>';
                            while ($item=mysqli_fetch_array($result))
                            {
                                $total=$item['price']+$total;
                            ?>
                    <hr>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <div>
                                <div class="cart-body">
                                    <div class="cart-containt">
                                       <div class="cart-item-left">
                                        <?php
                                            echo "<h3 style='color:#337ab7;font-weight:bold'>".$item['product_name']."</h3>";
                                            
                                            echo "<p><h4 style='font-weight:bold'> PRICE RS. ".$item['price'].".00</h3></p>"
                                        ?>
                                       </div>
                                        <div class="cart-item-right">
                                            <a href="<?php echo "product.php#".$item['product_id'];?>">
                                                <img class="cart-image" src="<?php echo $item['image'];?>" alt="<?php echo $item['product_name'];?>">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cart-butto">
                                        <a class="btns" href="remove_cart.php?product_id=<?php echo $item['product_id'];?>">REMOVE ITEM</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                            <!tbody>
                    <?php
                        }?> 
                <div class="cart-footer" style="text-align: center">
                    <div style="display: inline-block;width: 100%">
                        <?php
                                echo "<h3>TOTAL PRICE RS. $total  </h3>";?>
                        </div>
                        <div style="display: inline-block;width: 100%">
                        <?php echo "<a class='btnsp' href='sucess.php'>CONFIRM </a>"
                     ?>
                    </div>

                </div>
                    <?php }
                    else {
                        echo "<h1>Add items to the cart first!<br> <a style='color:red' href='product.php'> GO TO</a> product Page</h1>";
                    }
                    ?>
                    <?php
                    ?>
                    <!table>
                </div>

            </div> 

        </div>
        
    </body>
</html>
<?php  require 'common/footer.php'?>