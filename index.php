<?php  
        require 'common/connection.php';  
?>
        <?php
        require 'common/navbar.php';
        ?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Headphone Zone</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid"  style="margin: -20">
            <div class="banner-image">
                <div class="banner">
                    <div class="inner-style">
                        <div class="banner-containt">
                            <h1>welcome</h1>
                            <h1>Headphone Zone</h1>
                            <p>*Summer sell is now available 50% off on branded Headphone</p>
                            <br>
                            <br>
                            <a href="product.php" class="b-round btns" >Shop Now</a>
                        </div >   
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-top: 30px" class="productt">
            <div style="width: 100%;text-align: center"><h1> Some Best Company </h1></div> <br>
            <?php
                $product= mysqli_query($con,"select * from product p INNER join company c on p.company_id=c.company_id GROUP by c.company_id") or die($con);
                $r= mysqli_num_rows($product);
                for($i=0;$i<$r;)
                {
                    
            ?>      
                    <div class="row product-details productt">
                        
            <?php
                    if(($r-$i)>4)
                        $c=4;
                    else
                        $c=($r-$i);
                    for($j=0;$j<$c;$j++)
                       {
                        $row= mysqli_fetch_array($product);
                        ?>
                        <div class="col-md-3 col-sm-4 col-xs-10">
                            <a href="product.php#<?php echo $row['company_id'];?>">
                              <div class="product-thumbnail thumbnail">
                                 
                                  <img class="thumbnail-image-lg" src="<?php echo $row['image'];?>">
                                
                                  <div style="text-align: center" class="caption">
                                    <?php echo "<h1>".$row['company_name']."</h1>";
                                    ?>
                                    </div>
                            </div>
                            </a>
                        </div>
                <?php  } 
                $i=$i+4;
                ?>
                    </div>
         <?php } ?>
        </div>  
    </body>
</html>
<?php require 'common/footer.php';?>