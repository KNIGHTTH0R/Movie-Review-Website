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
		
		<title>Meta Critic</title>

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
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
							<li class="menu-item"><a href="review.php">Movie reviews</a></li>
							<li class="menu-item"><a href="contact.php">Contact</a></li>
							<li class="menu-item"><a href="feedback.php">Feedback</a></li>

						</ul> <!-- .menu -->

						<!--<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>-->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="row">

							<div class="col-md-9">
								<div class="slider">
									<ul class="slides">
										<li><a href="review.php"><img src="dummy/slide-1.jpg" alt="Slide 1"></a></li>
										<li><a href="review.php"><img src="dummy/slide-2.jpg" alt="Slide 2"></a></li>
										<li><a href="review.php"><img src="dummy/slide-3.jpg" alt="Slide 3"></a></li>
										<li><a href="review.php"><img src="dummy/slide-4.jpg" alt="Slide 3"></a></li>
										<li><a href="review.php"><img src="dummy/slide-5.jpg" alt="Slide 3"></a></li>
										<li><a href="review.php"><img src="dummy/slide-6.jpg" alt="Slide 3"></a></li>
									</ul>
								</div>
							</div>

							<div class="col-md-3">
								<div class="row">
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="single.php?id=13"><img src="dummy/cate-1.jpg" alt="Movie 1"></a>
										</div>
									</div>
									
								</div>
							</div>
						</div> <!-- .row -->
						<!--<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="dummy/thumb-3.jpg" alt="Movie 3"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="dummy/thumb-4.jpg" alt="Movie 4"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="dummy/thumb-5.jpg" alt="Movie 5"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="dummy/thumb-2.jpg" alt="Movie 6"></a>
								</div>
							</div>
						</div>--> <!-- .row -->
						
						<div class="row">
							<div class="col-md-4">
								<h2 class="section-title">2015 premiere</h2>

								<ul class="movie-schedule">
									<li>
										<div class="date">20/11/2015</div>
										<h2 class="entry-title"><a href="single.php?id=13">Carol</a></h2>
									</li>
									<li>
										<div class="date">24/09/2015</div>
										<h2 class="entry-title"><a href="single.php?id=22">The Intern</a></h2>
									</li>
									<li>
										<div class="date">30/07/2015</div>
										<h2 class="entry-title"><a href="single.php?id=9">Drishyam</a></h2>
									</li>
									<li>
										<div class="date">07/01/2015</div>
										<h2 class="entry-title"><a href="single.php?id=19">Interstellar</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
							<div class="col-md-4">
								<h2 class="section-title">2014 premiere</h2>

								<ul class="movie-schedule">
									<li>
										<div class="date">07/12/2014</div>
										<h2 class="entry-title"><a href="single.php?id=11">The Imitation Game</a></h2>
									</li>
									<li>
										<div class="date">24/12/2014</div>
										<h2 class="entry-title"><a href="single.php?id=23">The Interview</a></h2>
									</li>
									<li>
										<div class="date">30/05/2014</div>
										<h2 class="entry-title"><a href="single.php?id=1">Maleficent</a></h2>
									</li>
									<li>
										<div class="date">30/01/2014</div>
										<h2 class="entry-title"><a href="single.php?id=6">Robocop</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
							<div class="col-md-4">
								<h2 class="section-title">2013 premiere</h2>

								<ul class="movie-schedule">
									<li>
										<div class="date">03/12/2013</div>
										<h2 class="entry-title"><a href="single.php?id=18">The Wolf of Wall Street</a></h2>
									</li>
									<li>
										<div class="date">12/06/2013</div>
										<h2 class="entry-title"><a href="single.php?id=24">This Is the End</a></h2>
									</li>
									<li>
										<div class="date">26/04/2013</div>
										<h2 class="entry-title"><a href="single.php?id=8">The Colony</a></h2>
									</li>
									<li>
										<div class="date">03/05/2013</div>
										<h2 class="entry-title"><a href="single.php?id=21">Neighbours</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</main>
			<br>
			<br>
			<br>
			<br>
			<br>
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