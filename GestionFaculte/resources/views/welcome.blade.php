<!DOCTYPE html>
<html>
<head>
	<title>Gestion Faculté</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/all.css">
	<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.rateyo.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="assets/inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<header class="site-header">
			{{-- <div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div>
						<h1 class="text-white">Institut Supérieur des Etudes Technologiques de Bizerte</h1>
						<h2 class="text-white">المعهد العالي للدراسات التكنولوجية ببنزرت</h2>
						</div>
					</div>
				</div> --}}
		
			<div class="banner">
			   <div class="owl-four owl-carousel" itemprop="image">
				<img src="assets/images/page-banner.jpg" alt="Image of Bannner">
				<img src="assets/images/page-banner.jpg" alt="Image of Bannner">
				<img src="assets/images/page-banner.jpg" alt="Image of Bannner">
			   </div>
			  <div class="container" itemprop="description">
				<h1>welcome in our website</h1>
				<h3>With our advance search feature you can now find the trips for you...</h3>
			  </div>
		    </div>
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					{{-- <div class="logo-wrap" itemprop="logo">
						<img src="assets/images/site-logo.jpg" alt="Logo Image">
					</div> --}}
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="#">Home</a></li>
								<li><a href="">Nouveautés</a></li>
								<li><a href="">Institut</a></li>
								<li><a href="">Département</a></li>
								<li><a href="">Formation</a></li>
								<li><a href="">Bibliothéque</a></li>
								<li><a href="">Consultation</a></li>
						
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Close -->
		
		<div class="page-heading">
			<div class="container">
				<h2>SERVICES WE OFFER</h2>
			</div>
		</div>
		<!-- sign in head End -->
		<div class="learn-courses">
			<div class="container">
				<div class="courses">
					<div class="owl-one owl-carousel">
						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap" itemprop="image"><img src="assets/images/directeur2.jpg" alt="courses picture"></div>
							<a href="{{ route('login') }}" class="learn-desining-banner" itemprop="name">Login</a>
							<div class="box-body" itemprop="description">
								<h2>Director space</h2>
							</div>
						</div>

							<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="assets/images/employe1.jpg" alt="courses picture"></div>
								<a href="{{ route('login') }}" class="learn-desining-banner" itemprop="name">Login</a>							<div class="box-body" itemprop="description">
								<h2>Managers space</h2>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="assets/images/etudiants1.png" alt="courses picture"></div>
								<a href="{{ route('registrationStudent') }}" class="learn-desining-banner" itemprop="name">Login</a>
							<div class="box-body" itemprop="description">
								<h2>Students space</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Login form End -->
		<section class="page-heading">
			<div class="container">
				<h2>upcomming events</h2>
			</div>
		</section>
		<section class="events-section" itemprop="event" itemscope itemtype=" http://schema.org/Event">
			<div class="container">
				<div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<img src="assets/images/orientation.jpg" alt="event images">
					</div>
					<div class="details">
						<a href=""><h3 itemprop="name">Orientation Programme for new Students.</h3></a>
						<p itemprop="description">Orientation Programme for new sffs Students</p>

						<h5 itemprop="startDate"><i class="far fa-clock"></i> Dec 30,2018 | 11am</h5>
						<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Iset Bizerte, manzelAbdRahmen</h5>
					</div>
				</div>

				<div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<img src="assets/images/python1.jpg" alt="event images">
					</div>
					<div class="details">
						<a href=""><h3 itemprop="name">challenge Programming with python</h3></a>
						<p itemprop="description">Practice your Python skills with these programming challenges. The tasks are meant to be challenging for beginners. If you find them too difficult, try completing our lessons for beginners first. </p>

						<h5 itemprop="startDate"><i class="far fa-clock"></i> Dec 30,2018 | 11am</h5>
						<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Amphi Iset Bizerte, Bizerte</h5>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Events section -->
		<section class="what-other-say">
			<div class="container">
				<h4 class="article-subtitle">Get to Know</h4>
				<h2 class="head">what our customer say</h2>
				<div class="three owl-carousel owl-theme">
					<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						<div class="border">
							<div class="customer">
								<figure>
									<img class="customer-img" src="assets/images/diplome.png" alt="Person image">
									<figcaption>
										<span itemprop="author">Hamza Ben younes</span>
										<div class="rateYo" itemprop="ratingValue"></div>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						<div class="border">
							<div class="customer">
								<figure>
									<img class="customer-img" src="assets/images/diplome.png" alt="Person image">
									<figcaption>
										<span itemprop="author">Atia Naim</span>
										<div class="rateYo" itemprop="ratingValue"></div>
									</figcaption>
								</figure>
							</div>
							</div>
						</div>
						<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						<div class="border">
							<div class="customer">
								<figure>
									<img class="customer-img" src="assets/images/diplome.png" alt="Person image">
									<figcaption>
										<span itemprop="author">Feres Adouani</span>
										<div class="rateYo" itemprop="ratingValue"></div>
									</figcaption>
								</figure>
							</div>
							</div>
						</div>
						<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						<div class="border">
							<div class="customer">
								<figure>
									<img class="customer-img" src="assets/images/diplome.png" alt="Person image">
									<figcaption>
										<span itemprop="author">Rayen Ayed</span>
										<div class="rateYo" itemprop="ratingValue"></div>
									</figcaption>
								</figure>
							</div>
							</div>
						</div>
					</div>			
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Others talk -->
		<section class="query-section">
			<div class="container">
			</div>
		</section>
		<!-- End of Query Section -->
		<footer class="page-footer" itemprop="footer" itemscope itemtype="http://schema.org/WPFooter">
			<div class="footer-first-section">
				<div class="container">
					<div class="box-wrap" itemprop="about">
						<header>
							<h1>about</h1>
						</header>
						<p>Institut Supérieur des Etudes Technologiques de Bizerte</p>

						<h4><a href="tel:+9779813639131"><i class="fas fa-phone"></i> +216 55450416</a></h4>
						<h4><a href="mailto:info@educationpro.com"><i class="fas fa-envelope"></i> isetbizerte@gmail.com</a></h4>
						<h4><a href=""><i class="fas fa-map-marker-alt"></i>6VMM+V42، Route Menzel Abderrahmen ,Zarzouna 7021 Bizerte, Menzel Abderrahmane 7021</a></h4>
					</div>
					<div class="box-wrap">
						<header>
							<h1>quick contact</h1>
						</header>
						<section class="quick-contact">
							<input type="email" name="email" placeholder="Your Email*">
							<textarea placeholder="Type your message*"></textarea>
							<button>send message</button>
						</section>
					</div>

				</div>
			</div>
			<!-- End of box-Wrap -->
			<div class="footer-second-section">
				<div class="container">
					<hr class="footer-line">
					<ul class="social-list">
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
					</ul>
					<hr class="footer-line">
				</div>
			</div>
			<div class="footer-last-section">
				<div class="container">
					<p>Copyright 2023 &copy; isetBizerte.com <span> | </span>  designed and developed by Software superstar</p>
				</div>
			</div>
		</footer>

	</div>
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/lightbox.js"></script>
	<script type="text/javascript" src="assets/js/all.js"></script>
	<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
	<script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="assets/js/jquery.rateyo.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
</body>
</html>