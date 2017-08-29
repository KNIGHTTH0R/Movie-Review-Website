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
		
		<title>Meta Critic | Review</title>

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

						<!--<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>--> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.php">Home</a>
							<span>Movie Review</span>
						</div>

						<div class="filters">
							<form action="review_filter.php" class="search-form">
								<select name="movie_filter" id="filter_id" placeholder="Choose Category">
									<?php
									$get_movie = "SELECT DISTINCT movie_director FROM movie_name";
									$run_movie = mysqli_query($con, $get_movie);
									$i = 1;

									while ($row_movie = mysqli_fetch_array($run_movie)) {
										$movie_director = $row_movie['movie_director'];

										echo "
                                    <option value='$i'>$movie_director</option>
                                    ";

										$i += 2;
									}
									?>



								</select>
								<button><i class="fa fa-search"></i></button>


						</div>
						<div class="movie-list">
							<?php
							$get_movie = "SELECT * FROM movie_name WHERE id BETWEEN 9 AND 16";
							$run_movie = mysqli_query($con, $get_movie);

							while ($row_movie = mysqli_fetch_array($run_movie)) {
								$image = $row_movie['movie_image'];
								$name = $row_movie['movie_name'];
								$id = $row_movie['id'];

								echo "
								<div class=\"movie\">
									<figure class=\"movie-poster\"><img src=$image alt=\"#\"></figure>
									<div class=\"movie-title\"><a href=\"single.php?id=$id\">".$name."</a></div>
								</div>
								";
							}
							?>
						</div> <!-- .movie-list -->

						<div class="pagination">
							<a href="review.php" class="page-number prev"><i class="fa fa-angle-left"></i></a>
							<a href="review.php"><span class="page-number">1</span></a>
							<a><span class="page-number current">2</span></a>
							<a href="review_3.php" class="page-number">3</a>
							<a href="review_3.php" class="page-number next"><i class="fa fa-angle-right"></i></a>
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