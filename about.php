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
		
		<title>Meta Critic | About</title>

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
							<li class="menu-item current-menu-item"><a href="about.php">About</a></li>
							<li class="menu-item"><a href="review.php">Movie reviews</a></li>
							<li class="menu-item"><a href="contact.php">Contact</a></li>
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
							<span>About us</span>
						</div>

						<div class="row">
							<div class="col-md-4">
								<figure><img src="dummy/figure.jpg" alt="figure image"></figure>
							</div>
							<div class="col-md-8">
								<p class="leading">About Us</p>
								<p>Want reviews about any movie anytime? Well you are at the right place!
									We are not just about movies and their reviews but a lot more. We are rated as one of the best sites for reviewing a movie.
									<br>Our writers provide a genuine insight about a movie. Our writers aim at giving reviews about as many movies as possible.
									<br>We aim to expand our client base to as many users as possible so that our site can be accessed by any person wanting to know about a particular movie.


								</p>
							</div>
						</div>


						<div class="row">
							<div class="col-md-9">
								<h2 class="section-title">Vision &amp; Misssion</h2>
							<ul>
							<li><b>Find the critics' consensus in one place, with a single “Metascore”</b></li>
								<p>Metacritic's proprietary Metascore distills the opinions of the most respected critics writing online and in print to a single number.</p>
							<li><b>Discover what's new and notable</b></li>
								<p>Compare what's new this week, what's great this year, and all-time favorites—finding quality entertainment is easy with the Metacritic scorecard.</p>
								<li><b>Sound off with your own ratings and reviews</b></li>
							<p>We value our users' opinions. In addition to streamlining our user voting process, we've elevated the the status of the average user score throughout the site.</p>
							</ul>
							</div>
							<div class="col-md-3">
								<h2 class="section-title">Parent Sites</h2>
								<ul class="arrow">
									<li><a href="http://www.metacritic.com/">Meta Critic</a></li>
									<li><a href="http://www.rottentomatoes.com/">Rotten Tomatoes</a></li>
									<li><a href="http://www.imdb.com/">IMDB</a></li>
									<li><a href="http://www.rogerebert.com/">Roger Ebert</a></li>
									<li><a href="http://www.mrqe.com/">MrQE</a></li>
									<!--<li><a href="#">Velit esse cillum dolore</a></li>
									<li><a href="#">Excepteur sint occaeca</a></li>-->
								</ul>
							</div>
						</div> <!-- .row -->
						
						<h2 class="section-title">Our Team</h2>
						<div class="row">

							<div class="col-md-12">
								<div class="team">
									<figure class="team-image"><img src="dummy/person-3.jpg" alt=""></figure>
									<h2 class="team-name">Het Sheth</h2>
									<small class="team-title">Founder</small>
									<div class="social-links">
										<a href="https://www.facebook.com/sheth.het" class="facebook"><i class="fa fa-facebook"></i></a>
										<!--<a href="" class="twitter"><i class="fa fa-twitter"></i></a>-->
										<a href="https://plus.google.com/100859502925311919328/posts" class="google-plus"><i class="fa fa-google-plus"></i></a>
										<!--<a href="" class="pinterest"><i class="fa fa-pinterest"></i></a>-->
									</div>
								</div>
							</div>
							<!--<div class="col-md-6">
								<div class="team">
									<figure class="team-image"><img src="" alt=""></figure>
									<h2 class="team-name"></h2>
									<small class="team-title"></small>
									<div class="social-links">
										<a href="" class="facebook"><i class="fa fa-facebook"></i></a>
										<!--<a href="" class="twitter"><i class="fa fa-twitter"></i></a>
										<a href="" class="google-plus"><i class="fa fa-google-plus"></i></a>
										<!--<a href="" class="pinterest"><i class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>-->
							
							
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