<?php
session_start();
?>

<html>

  <head>
    <title> About | <b>Foobie Hub</b></title>
  </head><div class="col-md-3 line"></div>
        <div class="tagline"> <font color="white"><b style="font-size:30px"></b></font>
        </div>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">
  <div class="item">
      
      <div class="carousel-caption">

      </div>
      </div>
  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>
<h1 style=" font-family: 'Kaushan Script', cursive;color:#ff0867;text-align:center">Freshnesh is our forte</h1><br><br><br>
  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><b>Foobie Hub</b></a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About US</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){


?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGE YOUR RESTUTAURANT</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>
                   
                  </span>
      </div>
    </nav>
    </div>
        </div>
    </div>
 <span class="small">
                      <a href="" class="s1 pt-0 mt-0"style="color: #2C3A47"> <i class="fa fa-phone"style="color: #2C3A47"></i>+91 8298284034</a><br>
                  </span>
                  <p class="small">
                      <a href="https://accounts.google.com" class="s2 pt-0 mt-0" style="color: #FC427B;"><i class="fa fa-envelope" style="color: #FC427B;"></i>sprt@foobie.com</a>
                  </p>
                  <span class="small">
                      <a href="index.php" class=" pt-0 mt-0 "style="color: #1B9CFC"> <i class="fa fa-chrome"style="color: #1B9CFC"></i>www.foobiehub.com</a>
                  </span>
                  <h5 class="h5">GET IN TOUCH</h5>
                  <p class="small">
                  <a href="https://www.facebook.com" class="btn btn-info text-light px-1 py-0"> <i class="fa fa-facebook"></i> </a>
                  <a href="https://twitter.com" class="btn btn-warning text-light px-1 py-0"> <i class="fa fa-twitter"></i> </a>
                  <a href="https://www.instagram.com" class="btn btn-danger text-light px-1 py-0"> <i class="fa fa-instagram"></i> </a>
                  </p>
              </div>
        </div>
         </body>
</html>