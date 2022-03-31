<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
 <!--using bootstrap-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
</head>

<header style="height: 72px;width: 1365px;
	background-color:white;  padding: 10px; color:blue;" > 
        <nav style="border: black;">
            <ul class="nav navbar-nav">
            <li> <img src="images/logo_new.png" style="padding-left: 30px; height: 50px; width: 110px; "></li>
                <li><a style="margin-left:60px; " href="index.php">HOME</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
                <li><a href="aboutus.php">ABOUT-US</a></li>
            </ul>
            <?php 
                if(isset($_SESSION['login_user']))
                {?>

                  <ul class="nav navbar-nav">
                  
                    <li>
                      <a href="collection.php">COLLECTION.</a>
                    </li>
                    <li>
                      <a href="profile.php">PROFILE</a>
                    </li>

                    <li>
                      <a href="payment.php">PAYMENT</a>
                    </li>
                  </ul>

                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="profile.php">
                        <div style="color: red">
                          <?php
                            echo "<img class='img-circle profile-img' height=30px width=30px src='images/".$_SESSION['photo']."'>" ;
                            echo "&nbsp &nbsp".$_SESSION['login_user']; 
                          ?>
                        </div>
                      </a></li>
                      <li><a href="logout.php" style="margin-right: 20px;"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                     
                <?php
                }
                else{
                 ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
                        <li><a style="margin-right:60px;"  href="Registration.php"><span class="glyphicon glyphicon-user"> SIGN-UP</span></a></li>
                    </ul>
                <?php }
            ?>
            
        </nav>
        
</header>
</html>