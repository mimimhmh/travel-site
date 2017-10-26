<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travela</title>
	<link rel="icon" href="/css/icon/favicon.png" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="del-code.com" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

	</head>
	<body>		
	<div class="fh5co-loader"></div>
	<div id="page">
	
	<!-- begin navbar -->
	<nav class="fh5co-nav">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div id="fh5co-logo"><a href="index.blade.php">Travela<span>.</span></a></div>
				</div>
				<div class="col-xs-12 text-center menu-1">
					<ul>
						<li class="active"><a href="index.blade.php">Home</a></li>
						<li class="has-dropdown">
							<a href="#">Destination</a>
							<ul class="dropdown">
								<li><a href="asian-dest.html">Asian</a></li>
								<li><a href="japan-dest.html">Japan</a></li>
								<li><a href="europe-dest.html">Europe</a></li>
							</ul>
						</li>
						<li><a href="disc.html">Discount</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>			
		</div>
	</nav>
	<!-- end navbar -->
	
	<!-- begin header -->
	<header id="fh5co-header" class="fh5co-cover" style="background-image:url(http://placehold.it/1920x1080);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1>Never Stop Exploring.</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->
	
	<!-- begin content -->
	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-center animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-heading">
						<span>We're expert</span>
						<h2>What We Do</h2>
						<p>
							Dolor sit amet consectetur adipiscing elit
							Dolor sit amet consectetur adipiscing elit
							Dolor sit amet consectetur adipiscing elit.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 ">
					<div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<img class="img-icon" alt="" src="/css/icon/grey/airplane-6-32.png"/>
						</span>
						<h3>Lorem ipsum</h3>
						<p>
							Dolor sit amet consectetur adipiscing elit
							Dolor sit amet consectetur adipiscing elit
							Dolor sit amet consectetur adipiscing elit.	
						</p>
						<p><a href="#">Read more</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<img class="img-icon" alt="" src="/css/icon/grey/cruise-ship-32.png"/>
						</span>
						<h3>Lorem ipsum</h3>
						<p>
							Dolor sit amet consectetur adipiscing elit
							Dolor sit amet consectetur adipiscing elit
							Dolor sit amet consectetur adipiscing elit.	
						</p>
						<p><a href="#">Read more</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<img class="img-icon" alt="" src="/css/icon/grey/train-32.png"/>
						</span>
						<h3>Lorem ipsum</h3>
						<p>
							Dolor sit amet consectetur adipiscing elit
							Dolor sit amet consectetur adipiscing elit
							Dolor sit amet consectetur adipiscing elit.	
						</p>
						<p><a href="#">Read more</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-project">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading  animate-box">
					<span>Want Some Cool Place</span>
					<h2>Place Destination</h2>
					<p>
						Dolor sit amet consectetur adipiscing elit
						Dolor sit amet consectetur adipiscing elit
						Dolor sit amet consectetur adipiscing elit.	
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="http://placehold.it/620x400" class="image-popup">
						<img alt="" src="http://placehold.it/620x400" class="img-responsive">
						<h3>Lorem Ipsum</h3>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="http://placehold.it/620x400" class="image-popup">
						<img alt="" src="http://placehold.it/620x400" class="img-responsive">
						<h3>Lorem Ipsum</h3>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="http://placehold.it/620x400" class="image-popup">
						<img alt="" src="http://placehold.it/620x400" class="img-responsive">
						<h3>Lorem Ipsum</h3>
					</a>
				</div>
			</div>
		</div>		
	</div>
	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>You deserved happiness</span>
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"> <img alt="" src="http://placehold.it/300x300"> <cite>&mdash; Mike Adam</cite></p>
						</blockquote>
					</div>

					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"><img alt="" src="http://placehold.it/300x300"> <cite>&mdash; Eric Miller</cite></p>
						</blockquote>
					</div>
				</div>

				<div class="col-md-6 animate-box">
					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"><img alt="" src="http://placehold.it/300x300"> <cite>&mdash; Eric Miller</cite></p>
						</blockquote>
					</div>
					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"><img alt="" src="http://placehold.it/300x300"> <cite>&mdash; Mike Adam</cite></p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box row-pb-md" data-animate-effect="fadeInUp">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Thoughts &amp; Ideas</span>
					<h2>Our Blog</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">Sep. 12th</span>
						<div class="blog-img" style="background-image:url('http://placehold.it/620x400');"></div>
						<h3><a href="#">Lorem Ipsum Dolor Sit</a></h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p class="author"><img alt="" src="http://placehold.it/300x300"> <cite> Mike Adam</cite></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">Sep. 23rd</span>
						<div class="blog-img" style="background-image:url('http://placehold.it/620x400');"></div>
						<h3><a href="#">Lorem Ipsum Dolor Sit</a></h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p class="author"><img alt="" src="http://placehold.it/300x300"> <cite> Mike Adam</cite></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">Sep. 24th</span>
						<div class="blog-img" style="background-image:url('http://placehold.it/620x400');"></div>
						<h3><a href="#">Lorem Ipsum Dolor Sit</a></h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p class="author"><img alt="" src="http://placehold.it/300x300"> <cite> Mike Adam</cite></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Let's go with us</span>
					<h2>Start Your Journey</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p><button type="submit" class="btn btn-default">Get In Touch</button></p>
				</div>
			</div>
		</div>
	</div>
	<!-- end content -->
	
	<!-- begin footer -->
	<footer id="fh5co-footer">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget ">
					<h3>Travela.</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					<p><a href="#">Learn More</a></p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Us</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 del-code. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="https://www.behance.net/delcode920dc4" target="_blank">del-code.com</a> </small>
					</p>
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="https://www.behance.net/delcode920dc4"><i class="icon-behance"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->
	
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>

