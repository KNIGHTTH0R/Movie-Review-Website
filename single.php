<!DOCTYPE html>
<?php
include("db.php");
error_reporting(0);
$id= $_GET['id'];
$get_movie = "SELECT * FROM movie_name WHERE id = $id";
$run_movie = mysqli_query($con, $get_movie);

while ($row_movie = mysqli_fetch_array($run_movie)) {
	$name = $row_movie['movie_name'];
	$genre = $row_movie['movie_genre'];
	$lang = $row_movie['movie_lang'];
	$image = $row_movie['movie_image'];
	$review = $row_movie['movie_review'];
}
?>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Meta Critic | Plot</title>

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
							<li class="menu-item current-menu-item"><a href="review.php">Movie reviews</a></li>
							<li class="menu-item"><a href="contact.php">Contact</a></li>
							<li class="menu-item"><a href="feedback.php">Feedback</a></li>

						</ul> <!-- .menu -->

						
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.php">Home</a>
							<a href="review.php">Movie Review</a>
							<?php
							global $name;
							echo"<span>".$name."</span>";
							?>

						</div>

						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<?php
									global $image;
									echo"<figure class=\"movie-poster\"><img src=$image alt=\"#\"></figure>";
									?>

								</div>
								<div class="col-md-6">
									<?php
									global $name, $genre, $lang;

									echo "
                            			<h2 class=\"movie-title\">$name</h2>
                            			<ul class=\"movie-meta\">
                                		<li><strong>Genre: </strong>$genre</li>
                               			<li><strong>Industry: </strong>$lang</li>
                               			<li><strong>Plot:
                               			</strong>$review</li>
                            			</ul>
                           				";
									?>
								</div>
							</div> <!-- .row -->
							<!--<div class="entry-content">
								<?php

								global $review;
								echo "$review";

								?>
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