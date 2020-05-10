<?php require 'common/connection.php';
    
?>
<html>
    <head>
        <title>Headphone Zone | | All Product</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="css/bootstrap.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="background-color:white;">
        <?php require 'common/navbar.php';?>
        <div  style="margin: -20" class="container-fluid">
            <div class="banner-image-prdouct">
                <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-8 col-xs-offset-2">
                    <div class="banner-containt-product">
                        <div class="product-containt">
                            <h1 id="headline" >Headphone Zone</h1><br>
                            <h2>Chose your favorite one </h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="product">
            <?php
            $product= mysqli_query($con,"select * from product p INNER join company c on p.company_id=c.company_id GROUP by c.company_id") or die($con);
            $company_no= mysqli_num_rows($product);
            for($i=0;$i<$company_no;$i++)
            {
                $company= mysqli_fetch_array($product);
                ?>
            <div class="productp thumbnail" id="<?php echo $company['company_id'] ;?>">
             
                   <div style="text-align: center;padding-bottom:5px;color: #E77495">
                        <h1>
                            <?php 
                                echo $company['company_name']; 
                            ?>
                        </h1>
                    </div>
                    <?php
                        $product_q="select * from product where company_id ='" . $company['company_id']. "' ";
                        $product_result= mysqli_query($con ,$product_q) or die($con);
                        $product_no= mysqli_num_rows($product_result);
                        for($j=0;$j<$product_no;){?>
                        <div>
                            <div class="row product-details">
                                <?php
                                if(($product_no-$j)>4){
                                $c=4;}
                                else
                                { $c=($product_no-$j);}
                                for($k=0;$k<$c;$k++)
                                {
                                    $row= mysqli_fetch_array($product_result);
                                    ?>
                                    <div class=" col-md-3 col-sm-4 col-xs-10">
                                    
                                        <div class="product-thumbnail thumbnail" id="<?php echo $row['product_id'] ?>">
                                            <img class="thumbnail-image" src="<?php echo $row['image'];?>">
                                            <div style="text-align: center" class="caption">
                                                <?php echo "<h3>".$row['product_name']."</h3>";
                                                      echo "<p> Price :- ".$row['price']."</p>";
                                                ?>
                                                <br>
                                                
                                                <?php
                                                    if (isset($_SESSION['email'])) 
                                                    {
                                                       $q= mysqli_query($con,"select * from user_cart where user_id='".$_SESSION['user_id']."' and product_id='".$row['product_id']."' and status='yes'") or die($con);
                                                        if(mysqli_num_rows($q)>=1){
                                                            echo "<a href='cart.php' class='btnsp'> GO TO CART</a>";
                                                        }
                                                        else{
                                                        echo "<a href='add_to_cart.php?product_id=".$row['product_id']."' class='btns' id='add'> ADD TO CART</a>";
                                                        }
                                                    }
                                                    else {
                                                        echo "<a href='login.php?' class='btns'> BUY NOW</a>";
                                                    }
                                                ?>
                                               
                                            </div>
                                        </div>
                                    
                                    </div>
                                <?php                                     
                                    } 
                                    $j=$j+4;
                                 
                                ?>
                            </div>  
                        </div>
                <?php } ?>
            </div>
         <?php } ?>
        </div>
        <?php require 'common/footer.php';?>
    </body>
</html>
<script>
   ("#add").click(function(){
       alert("Item Added to cart");
   });
        
   
</script>