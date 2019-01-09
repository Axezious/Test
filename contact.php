<?php
  include("function/session.php");
  include("db/dbconn.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<link href="images/icon.png" rel="shortcut icon">
		
		<title>Contact</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		 <?php
        $id = (int) $_SESSION['id'];
      
          $query = $conn->query ("SELECT * FROM costumer WHERE costumerid = '$id' ") or die (mysqli_error());
          $fetch = $query->fetch_array ();
      ?>
		<div id="site-content">
			
			<header class="site-header wow fadeInDown">
				<div class="container">
					<div class="header-content">
						<div class="branding">
							<img src="images/icon.png" alt="Company Name" class="logo" style="height: 100px; width: 100px">
							<h1 class="site-title"><a href="index.php">Kuy A Tour.com</a></h1>
							<small class="site-description">Find Your Experience Here</small>
						</div>
						
						<nav class="main-navigation">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item"><a href="koper.php">Koper</a></li>
								<li class="menu-item"><a href="ransel.php">Ransel</a></li>
								<li class="menu-item"><a href="about-us.php">About us</a></li>
								<li class="menu-item"><a href="contact.php">Contact Us</a></li>	
								<li><a href="function/logout.php"><i class="icon-off icon-white"></i>logout</a></li>
        <li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile" href  data-toggle="modal"><i class="icon-user icon-white"></i><?php echo $fetch['username']; ?></a></li>
							</ul>
						</nav>
						
						<div class="social-links">
							<h3 class="site-title">Social Media</h3>
							<a href="https://web.facebook.com/kuyatour.atour" class="facebook" target="blank"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/kuy.atour/" class="instagram" target="blank"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
					<nav class="breadcrumbs">
						<a href="index.php">Home</a> &rarr;
						<span>About Us</span>
					</nav>
				</div>
			</header> <!-- .site-header -->

			<main class="content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-4 wow fadeInLeft">
								<h4>Company Name</h4>
								<ul class="list-fa">
									<li><i class="fa fa-map-marker"></i> Jalan Taman Makam Pahlawan Jakarta No.1 , Kalibata , Jakarta Selatan</li>
									<li><i class="fa fa-phone"></i> +6285691660621</li>
									<li><i class="fa fa-envelope"></i>kuytraveller@gmail.com</li>
								</ul>

								<form action="#" class="contact-form">
									<input type="text" placeholder="Your Name...">
									<input type="text" placeholder="Company Name...">
									<input type="text" placeholder="Email">
									<textarea name="" id="" placeholder="Message..."></textarea>
									<input type="submit" class="button" value="Send Message">
								</form>
							</div>
							<div class="col-md-7 col-md-push-1 wow fadeInRight">
								<div class="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.082338802242!2d106.8469411140682!3d-6.252881662961353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3acd605bad9%3A0x89464a0d09456313!2sUniversitas+Trilogi!5e0!3m2!1sid!2sid!4v1515085141122" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
							
						</div>

					</div>

				</div>

				
			</main> <!-- .content -->

			<footer class="site-footer wow fadeInUp">
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">About us</h3>
									<p>Mau tau lebih banyak tentang kami yuk kepoin <a href="#about">Disini....</a></p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">Place to visit</h3>
									<ul class="list-arrow">
										<li><a href="koper.php">Taman Laut Bunaken</a></li>
										<li><a href="ransel.php">Dieng, Jawa Tengah</a></li>
										<li><a href="koper.php">Teluk Kiluan</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">Artikel Travel</h3>
									<ul class="list-arrow">
										<li><a href="#">Apa Saja yang diperlukan untuk travel ?</a></li>
										<li><a href="#">Yuk Lihat 5 tempat Anti-Mainstream ini untuk liburan kamu</a></li>
										<li><a href="#">Tim Ransel atau Tim Koper ?</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-customer-info">
									<h3 class="widget-title">Customer Service</h3>
									<img src="dummy/cs.jpg" alt="" class="pull-left" style="height: 150px; width: 100px;">
									<div class="cs-info">
										<p>If you have any question, you can call</p>
										<p>+62 856 9166 0621 <br> <a href="mailto:cs@companyname.com">kuyatour.info@gmail.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<div class="branding pull-left">
							<img src="images/icon.png" alt="Company Name" class="logo" style="height: 100px; width: 100px">
							<h1 class="site-title"><a href="index.php">Kuy A Tour</a></h1>
							<small class="site-description">Find You Experience Here</small>
						</div>

						<div class="contact-links pull-right">
							<a href="https://goo.gl/maps/oQKxg"><i class="fa fa-map-marker"></i> Jakarta, Indonesia</a>
							<a href="tel:+134453455345"><i class="fa fa-phone"></i> +6285691660621</a>
							<a href="mailto:contact@companyname.com"><i class="fa fa-envelope"></i> kuyatour.info@gmail.com</a>
						</div>
					</div>
				</div>
				<div class="colophon">
					<div class="container">
						<p class="copy">Copyright 2017 Kuy A Tour, All right reserved.</p>
					</div>
				</div>
			</footer> <!-- .site-footer --> <!-- .site-footer -->

		</div> <!-- #site-content -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/min/plugins-min.js"></script>
		<script src="js/min/app-min.js"></script>
		
	</body>

</html>