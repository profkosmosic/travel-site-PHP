<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Travel Advisor</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="author" content="Lazar Petrović">
	    <meta name="keywords" content="travel, advisor, about, vacation">
        <meta name="description" content="How to get in touch with the creator of Travel Advisor.">
        <link rel="shortcut icon" type="icon" href="images/favicon.ico"/>
        <link rel="stylesheet" href="assets/css/page.min.css" />
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
        <section id="two">
            <h1 id="heads">ABOUT ME</h1>
            <div class="inner" id="aboutMe">
                <article>
                    <div class="content">
                        <div class="image fit">
                            <img id="slika" src="images/ja.jpg" alt="mojaSlika" />
                        </div>
                        <p>Name: Lazar Petrovic</p>
                        <p>Index: 125/19</p>
                        <p>Location: Serbia</p>
                        <p>C, C#, Javascript, HTML, CSS and SQL</p>
                    </div>
                </article>
            </div>
        </section>
        <section id="footer">
            <div class="inner">
                <header>
                    <h1 id="heads">GET IN TOUCH WITH ME</h1>
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
                    <p id="fut">&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a> Made by: <a href="#">LAZAR PETROVIC 125/19</a></p>
                    <p id="fut"><a href="DOKUMENTACIJA.pdf">DOCUMENTATION</a></p>
                </div>
            </div>
        </section>
		<script type="text/javascript" src="assets/js/generate.min.js"></script>
        <script type="text/javascript" src="assets/js/submit.min.js"></script>
        <script type="text/javascript" src="assets/js/hamburger.min.js"></script>
    </body>
</html>