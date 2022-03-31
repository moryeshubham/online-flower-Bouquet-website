<?php
 include "connection.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Online Flower Bouquet Shop
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--using bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

	<!-- slideshow from w3schools-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		.fa:hover {      
    		opacity: 0.7;
}   
		.fa{
			font-size: 25px;
		}
		</style>
</head>


<body>
	
		<header>
		<div class="logo">
			<img src="images/logo_new.png" style="padding-left: 30px; height: 60px; width: 120px;">
		</div>

		<?php
			if(isset($_SESSION['login_user'])){
			?>
				<nav>
					<ul class="nav navbar-nav">
						<li><a href="index.php">HOME</a></li>
						<li><a href="aboutus.php">ABOUT-US</a></li>
						<li><a href="feedback.php">FEEDBACK</a></li>
						<li><a href="#category">CATEGORY</a></li>
						<li><a href="#safe">OUR-PRIORITY</a></li>
						<li><a href="collection.php">COLLECTION.</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
					</ul>
				</nav>
			<?php
			}
			else{
				?>
					<nav>
						<ul class="nav navbar-nav">
							<li><a href="index.php">HOME</a></li>
							<li><a href="aboutus.php">ABOUT-US</a></li>
							<li><a href="feedback.php">FEEDBACK</a></li>
							<li><a href="#category">CATEGORY</a></li>
							<li><a href="#safe">OUR-PRIORITY</a></li>
							<li><a href="Login.php"><span class="glyphicon glyphicon-log-in">__LOGIN</span></a></li>
                        <li><a style="margin-right:10px;"  href="Registration.php"><span class="glyphicon glyphicon-user">__SIGN-UP</span></a></li>
						</ul>
					</nav>
			<?php }
		?>

			
		</header>

	
		<section style="height: 700px;">
		<div class="sec_img" style="background-image: url('images/hf.jpg'); height: 700px;
	             margin-top: 0px;background-size: cover;">
			<br><br>
			<h1 style="color:white;" class="project_name" style=" word-spacing: 30px; text-align: center;"><b> 
				<span style="background-color:skyblue; margin-left:415px; "> &nbsp Green-House &nbsp Flower &nbsp Shop . &nbsp</span> </b>
			</h1>
			<div class="box">
				<br><br>
				<h1 style="text-align: center; font-size: 35px;">Welcome to Our Shop</h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">Opens 24 Hours...</h1><br>

				<h1 style="text-align: center;font-size: 25px;">
					<a href="https://www.facebook.com/" class="fa fa-facebook" 
					style="background: #3B5998; color: white;  width: 35px; height:35px;
  text-align: center;  padding-top:5px; text-decoration: none;">
  					</a>
  &nbsp <!--text decoration use for removing underline of that hyperlink-->

					<a href="https://www.youtube.com/" class="fa fa-youtube"
					 style="  background: #bb0000; color: white;  width: 35px; height:35px;
  text-align: center;  padding-top:5px; text-decoration: none;">
  					</a> &nbsp 

					<a href="https://www.instagram.com/" class="fa fa-instagram" style="background: #C837AB;  color: white;  width: 35px; height:35px;
  text-align: center;  padding-top:5px; text-decoration: none;">	
  					</a>
						<br><br>
							Email: &nbsp Online.flower@gmail.com <br>
							Mobile NO.:- &nbsp +9076019623
				</h1>
			</div>
		</div>
		</section>
	
		<div class="line_1">  </div>
	


	<section id="category" >
		<div style="background-image: url('images/h1.png'); width:auto;  height:550px;">
		</div>
		<div style="background-image: url('images/h2.png'); width:auto;  height:470px;">
		</div>
		<div id="safe" style="background-image: url('images/care.png'); width:auto;  height:550px;">
		</div>
	</section>


	
</body>


</html>