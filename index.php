<?php
	session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Travel Advisor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="author" content="Lazar Petrović">
	    <meta name="keywords" content="travel, advisor, destination, summer, vacation">
		<meta name="description" content="Home page of Travel Advisor, a place for affordable vacations!">
		<link rel="shortcut icon" type="icon" href="images/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="assets/css/page.min.css" />
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	</head>
	<body>
			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo">Travel Advisor</a>
					<?php
					if(isset($_SESSION["login"])) {
						if($_SESSION["login"] == "admin") {
							include("assets/php/nav/admin_nav.php");
						}
						else {
							include("assets/php/nav/logged.php");
						}
					}
					else {
						include("assets/php/nav/unlogged.php");
					}
					?>
				</div>
			</header>
			<a href="#menu" onclick="Burger()" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			<div id="burgerContent">
				<ul>
					<?php
					if(isset($_SESSION["login"])) {
						if($_SESSION["login"] == "admin") {
							include("assets/php/nav/admin_nav_mob.php");
						}
						else {
							include("assets/php/nav/logged_mob.php");
						}
					}
					else {
						include("assets/php/nav/unlogged_mob.php");
					}
					?>
				</ul>
			</div>
			<section id="banner">
				<div class="inner">
					<h1>Welcome! <span>Prepare for<br/> a vacation of your lifetime!</span></h1>
					<ul class="actions">
						<li><a href="#two" class="button alt">Get Started</a></li>
					</ul>
				</div>
			</section>
			<section id="one">
				<div class="inner">
					<header>
						<h2>A time of your life guarantee!</h2>
					</header>
					<p>We promise you that you have never been on vacations like these! But you don't have to take our word for it, let this site guide you through the process and also show off the places our happy customers have enjoyed that you could be enjoying too if you give us a chance to win you over!</p>
					<ul class="actions">
						<li><a href="#two" class="button alt">Learn More</a></li>
					</ul>
				</div>
			</section>
			<?php
				if(isset($_SESSION["login"])) {
					if($_SESSION["login"] == "korisnik") {
						if(empty($_COOKIE["survey"])) {
							echo "<section id='one'>";
							echo "<div class='inner'>";
							echo "<header>";
							echo "<h2>CUSTOMER SURVEY</h2>";
							echo "</header>";
							echo "<p>Have you heard of our company before?</p>";
							echo "<form method='POST' action='assets/php/survey.php'/>";
							echo "<input type='submit' name='survey' style='margin:5px;' value='Yes'/>";
							echo "<input type='submit' name='survey' style='margin:5px;' value='No'/>";
							echo "</form>";
							echo "</div>";
							echo "</section>";
						} 
					}
				}
			?>
			<section id="two">
				<h1 id="heads">ABOUT US</h1>
				<div class="inner">
					<article>
						<div class="content">
							<header>
								<h3>Who we are</h3>
							</header>
							<div class="image fit">
								<img id="slika" src="images/pic1.jpg" alt="office" />
							</div>
							<p>We are a traveling agency based in Belgrade, Serbia that will help you pick the best vacation that you've ever been on! We offer the best destinations for very affordable prices.</p>
						</div>
					</article>
					<article class="alt">
						<div class="content">
							<header>
								<h3>What we do</h3>
							</header>
							<div class="image fit" id="vacation">
								<div><img id="slika" src="images/vacation/antalya.jpg" alt="antalya"/></div>
								<div><img id="slika" src="images/vacation/rome.jpg" alt="rome"/></div>
								<div><img id="slika" src="images/vacation/istanbul.jpg" alt="istanbul"/></div>
								<div><img id="slika" src="images/vacation/giza.jpg" alt="giza"/></div>
								<div><img id="slika" src="images/vacation/athens.jpg" alt="athens"/></div>
							</div>
							<p>We parse through all information and bookings we can possibly get our hands on so you don't have to and try to offer you the most luxury for the most reasonable price.</p>
						</div>
					</article>
				</div>
			</section>
			<section id="three">
				<h1 id="heads">What we offer</h1>
				<div class="inner">
					<article>
						<div class="content">
							<span class="icon fa-calendar"></span>
							<header>
								<h3>Flexible Dates</h3>
							</header>
							<p>Have you ever had problems with your time of arrival or departure not fitting in with your schedule? Worry not! We offer flexible dates that can be changed whenever you feel like it, we go even as far as allowing changes only days before the trip is supposed to take place with no additional charges!</p>
						</div>
					</article>
					<article>
						<div class="content">
							<span class="icon fa-plane"></span>
							<header>
								<h3>Transportation</h3>
							</header>
							<p>We offer a lot of different kinds of modes of transportation to fit your needs and most importantly, your budget too. From small vans and buses all the way to first class airplanes, you name it, we got it parked outside waiting for you! Buckle up and get ready for the best vacation ever!</p>
						</div>
					</article>
					<article>
					<div class="content">
							<span class="icon fa-thumbs-up"></span>
							<header>
								<h3>User Reviews</h3>
							</header>
							<p>Those pesky hotel stars are not always the best way of telling which place will offer the best services, so our site also comes equipped with user ratings and average scores for each country that our users have been to, telling you the best spots and sharing what they learned on their trip!</p>
						</div>
					</article>
				</div>
			</section>
			<section id="footer">
				<div class="inner">
					<header>
						<h1 id="heads">GET IN TOUCH WITH US</h1>
					</header>
					<form method="POST" action="assets/php/kontakt.php" onsubmit="return Klik()">
						<div class="field half first">
							<label id="ime" for="name">Name</label>
							<input type="text" name="name" id="name" />
						</div>
						<div class="field half">
							<label id="mejl" for="email">Email</label>
							<input type="text" name="email" id="email" />
						</div>
						<div class="field">
							<label id="poruka" for="message">Message</label>
							<textarea name="message" id="message" rows="6"></textarea>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Send Message" class="alt"/></li>
						</ul>
						<br/>
						<br id="delete"/>
						<p id="userMessage"></p>
					</form>
					<div class="copyright">
						<p id="fut">&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a> Made by: <a href="about.php">LAZAR PETROVIC 125/19</a></p>
						<p id="fut"><a href="DOKUMENTACIJA.pdf">DOCUMENTATION</a></p>
					</div>
				</div>
			</section>
		<script type="text/javascript" src="assets/js/carousel.min.js"></script>
		<script type="text/javascript" src="assets/js/generate.min.js"></script>
		<script type="text/javascript" src="assets/js/submit.min.js"></script>
		<script type="text/javascript" src="assets/js/hamburger.min.js"></script>
	</body>
</html>