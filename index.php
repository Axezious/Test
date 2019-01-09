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
		
		<title>Home Travel</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,700" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body class="slider-collapse">
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
				</div>
			</header> <!-- .site-header -->

			<main class="content">
				<div class="slider">
					<ul class="slides">
						<li data-background="img/slidelabajo.jpg">
							<div class="container">
								<div class="slide-caption col-md-4">
									<h2 class="slide-title">Labuan Bajo</h2>
									<p>Labuan Bajo adalah salah satu destinasi bla bla bla.</p>
								</div>
							</div>
						</li>
						<li data-background="img/sliderajaampat.jpg">
							<div class="container">
								<div class="slide-caption col-md-4">
									<h2 class="slide-title">Raja Ampat</h2>
									<p>Surga Dunia dari Timur ialah Raja Ampat. Karena Raja Ampat memiliki bla bla bla</p>
								</div>
							</div>
						</li>
						<li data-background="img/slidebali.jpg">
							<div class="container">
								<div class="slide-caption col-md-4">
									<h2 class="slide-title">Bali</h2>
									<p>Pulau yang dikenal dengan sebutan pulau dewata ini ialah salah satu destinasi favorit di Indonesia karena bla bla bla</p>
								</div>
							</div>
						</li>
					</ul>
					<div class="flexslider-controls">
						<div class="container">
							<ol class="flex-control-nav">
								<li><a>1</a></li>
								<li><a>2</a></li>
								<li><a>3</a></li>
							</ol>
						</div>
					</div>
				</div>

				<div class="fullwidth-block offers-section" data-bg-color="#f1f1f1">
					<div class="container">
						<h2 class="section-title">The newest holiday offers</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn">
									<figure class="featured-image"><img src="dummy/batakan.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Danau Batakan</a></h2>
									<p>Kalimantan Punya nih</p>
									<a href="details.php" class="button">See details</a>
								</article>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn" data-wow-delay=".2s">
									<figure class="featured-image"><img src="dummy/ijen.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Kawah Ijen</a></h2>
									<p>Lava Api Biru...</p>
									<a href="details1.php" class="button">See details</a>
								</article>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn" data-wow-delay=".4s">
									<figure class="featured-image"><img src="dummy/kiluan.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Teluk Kiluan</a></h2>
									<p>Nikmati Asyiknya Berenang Bareng Lumba - Lumba</p>
									<a href="details.php" class="button">See details</a>
								</article>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn" data-wow-delay=".6s">
									<figure class="featured-image"><img src="dummy/bunaken.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Taman Laut Bunaken</a></h2>
									<p>Surganya Bagi Para Penyelam</p>
									<a href="details1.php" class="button">See details</a>
								</article>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block testimonial-section">
					<div class="container">
						<h2 class="section-title">Testimonials</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp">
									<figure class="avatar"><img src="dummy/arie.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Koper & Ransel menyajikan banyak tempat wisata yang anti-mainstream di Indonesia dan memberikan pengalaman petualangan baru yang takkan terlupakan</p>
										<cite>Arie Aldiansyah</cite>
										<span>Travel Agency CEO</span>
									</blockquote>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp" data-wow-delay=".2s">
									<figure class="avatar"><img src="dummy/mila.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Travel Agency yang paling recommended untuk kaula muda karena apa yang disajikan benar benar anti-mainstream</p>
										<cite>Via Vallen</cite>
										<span>Traveler</span>
									</blockquote>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp" data-wow-delay=".4s">
									<figure class="avatar"><img src="dummy/cenna.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Kalo lo mau liburan ketempat yang baru dan wow, lu harus jajal liburan dengan agency ini, dijamin oke</p>
										<cite>Susan Susanan</cite>
										<span>Hairdresser</span>
									</blockquote>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp" data-wow-delay=".6s">
									<figure class="avatar"><img src="dummy/chindy.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Recommended banget deh. Semua yang dijanjikan bener bener terpenuhi. Sukses Trus buat KOPERA</p>
										<cite>Sarah Brown</cite>
										<span>Athlete</span>
									</blockquote>
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
									<p>Mau tau lebih banyak tentang kami yuk kepoin <a href="about-us.php">Disini....</a></p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">Place to visit</h3>
									<ul class="list-arrow">
										<li><a href="details.php">Taman Laut Bunaken</a></li>
										<li><a href="details.php">Dieng, Jawa Tengah</a></li>
										<li><a href="details.php">Teluk Kiluan</a></li>
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
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/min/plugins-min.js"></script>
		<script src="js/min/app-min.js"></script>
		
	</body>

</html>