<!DOCTYPE html>
<?php
include("db.php");
error_reporting(0);
?>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Meta Critic | Contact</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Meta Critic</h1>
							<small class="site-description">ReviewIT</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
							<li class="menu-item"><a href="review.php">Movie reviews</a></li>
							<li class="menu-item current-menu-item"><a href="contact.php">Contact</a></li>
							<li class="menu-item"><a href="feedback.php">Feedback</a></li>

						</ul> <!-- .menu -->

						<!--<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> --><!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.php">Home</a>
							<span>Contact</span>
						</div>

						<div class="content">
							<div class="row">
								<div class="col-md-4">
									<h2>Contact</h2>
									<ul class="contact-detail">
										<li>
											<img src="images/icon-contact-map.png" alt="#">
											<address><span>Meta Critic.</span> <br>Plot No.U-15, J.V.P.D. Scheme, Bhaktivedanta Swami Marg, Suvarna Nagar, Vile Parle West, Mumbai, Maharashtra 400056</address>
										</li>
										<li>
											<img src="images/icon-contact-phone.png" alt="">
											<a href="tel:00919892288304">+91 9892288304</a>
										</li>
										<li>
											<img src="images/icon-contact-message.png" alt="">
											<a href="mailto:hetpsheth@gmail.com">hetpsheth@gmail.com</a>
										</li>
									</ul>
									<!--<div class="contact-form">
										<input type="text" class="name" placeholder="name...">
										<input type="text" class="email" placeholder="email...">
										<input type="text" class="website" placeholder="website...">
										<textarea class="message" placeholder="message..."></textarea>
										<input type="submit" value="Send Message ">
									
									</div>-->
									<form class="contact-form" action="" method="POST" enctype="multipart/form-data">
										<input type="hidden" name="action" value="submit">
										<input name="name" value="" type="text" class="name" placeholder="name...">
										<input name="email" type="text" value="" class="email" placeholder="email...">
										<!--<input  type="text" class="website" placeholder="website...">-->
										<textarea name="message" class="message" placeholder="message..."></textarea>
										<input name="insert_post" type="submit" value="Send Message">
									</form>



								</div>
								<div class="col-md-7 col-md-offset-1">
									<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.0118024415447!2d72.83486341420235!3d19.107138155959774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9c676018b43%3A0x75f29a4205098f99!2sDwarkadas+J.+Sanghvi+College+of+Engineering!5e0!3m2!1sen!2sin!4v1460107442481" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</main>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">About Us</h3>
								<p>Want reviews about any movie anytime? You are at the right place! <br>We are not just about movies and their reviews but a lot more.</p>
							</div>
						</div>

						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Join Us</h3>
								<!--<ul class="no-bullet">
									<li><a href="#">Lorem ipsum dolor</a></li>
									<li><a href="#">Sit amet consecture</a></li>
									<li><a href="#">Dolorem respequem</a></li>
									<li><a href="#">Invenore veritae</a></li>
								</ul>-->
								<p>We're always looking for great folks to join us on our mission. If you want to be a part of our story, we'd love to chat.</p>
							</div>
						</div>

						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Recent Review</h3>
								<ul class="no-bullet">
									<?php
									$get_movie = "SELECT * FROM movie_name ORDER BY RAND() LIMIT 4";
									$run_movie = mysqli_query($con, $get_movie);

									$i = 1;

									while ($row_movie = mysqli_fetch_array($run_movie)) {
										$name = $row_movie['movie_name'];

										$id = $row_movie['id'];

										echo "<li><a href='single.php?id=$id'>" . $name .  "</a></li>";
										if ($i == 4)
											break;
										$i++;
									}
									?>


									<!--<li><a href="single.php?id=1">Maleficient</a></li>
									<li><a href="single.php?id=2">The Adventure of Tintin</a></li>
									<li><a href="single.php?id=3">Hobbit</a></li>
									<li><a href="single.php?id=4">Exists</a></li>-->
								</ul>
							</div>
						</div>

						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<ul class="no-bullet">
									<li><a href="https://www.facebook.com/Metacritic/?fref=ts&rf=111864935499854">Facebook</a></li>
									<li><a href="https://twitter.com/metacritic">Twitter</a></li>
									<li><a href="https://plus.google.com/+metacritic/posts">Google+</a></li>
									<br>
								</ul>
							</div>
						</div>
						<!--<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<form action="#" class="subscribe-form">
									<input type="text" placeholder="Email Address">
								</form>
							</div>
						</div>
					</div> --><!-- .row -->

						<div class="colophon"> &copy; Copyright 2016 Meta Critic. All rights reserved</div>
					</div> <!-- .container -->

			</footer>
		</div>
		<!-- Default snippet for navigation -->



		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>


<?php

if (isset($_POST['insert_post'])) {

	//getting the text data from the fields
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$query = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

	$insert = mysqli_query($con, $query);

	if ($insert) {
		echo "<script>alert('Your message has been received.')</script>";
		echo "<script>window.open('contact.php', '_self')</script>";
	}
}

?>