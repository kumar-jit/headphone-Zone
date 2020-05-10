<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <?php if (isset($_SESSION['email'])) { ?>
        <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-headphones"></span> Headphone Zone</a><?php } 
        else { ?><a class="navbar-brand" href="index.php">Headphone Zone</a> <?php } ?>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <?php
        if (isset($_SESSION['email'])) {?>
          <li><a href="cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
        <li class="User">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class = "glyphicon glyphicon-home"></span>User <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="logout.php"><span class = "glyphicon glyphicon-off"></span> Log Out</a></li>
            <li><a href="user_details.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
            <li><a href="buy_product.php"><span class="glyphicon glyphicon-check"></span> Buy Product</a></li>
          </ul>
        </li>
        <li><a href="product.php"><span class="glyphicon glyphicon-certificate"></span> Product</a></li>
        <?php } 
        else { ?>
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php  }?>
      </ul>
    </div>
  </div>
</nav>