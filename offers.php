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
	    <meta name="keywords" content="travel, advisor, offers, vacation">
        <meta name="description" content="Our premium vacation offers!">
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
        <?php
        if(isset($_SESSION["order"])) {
            if($_SESSION["order"] == "dobar") {
                echo "<p style='text-align:center; padding:10px; background-color:#3D72A4; color:white; font-weight:bold; position:sticky; top:100px; z-index:10000000000;' id='popSuccess'>You have made an order successfully!</p>";
                unset($_SESSION["order"]);
            }
        }
        ?>
        <section id="three">
				<h1 id="heads">OUR OFFERS</h1>
                <?php
                    include_once("assets/php/veza/veza.php");
                    if(isset($veza)) {
                        $upit = "select * from vacation";
                        $rez = $veza -> query($upit);
                        $row = $rez -> fetchAll();
                        if(empty($_SESSION["login"])) {
                            echo "<h2 id='heads'>LOG IN TO BOOK THE OFFERS</h2>";
                        }
                        echo "<div class='inner'>";
                        echo "<section>";
                        foreach($row as $r) {
                            $id = $r -> id_img;
                            $name = $r -> name_img;
                            $desc = $r -> desc_img;
                            $file = $r -> file_img;
                            $price = $r -> price;
                            echo "<div class='content'>";
                            echo "<h3>".$name."</h3>";
                            echo "</div>";
                            echo "<div class='image fit'>";
                            echo "<img id='slika' src='".$file."' alt='".$name."'/>";
                            echo "</div>";
                            echo "<p style='text-align:center;'>".$desc."</p>";
                            echo "<p style='text-align:center;'>$".$price."</p>";
                            if(isset($_SESSION["login"])) {
                                if($_SESSION["login"] == "korisnik") {
                                    echo "<form style='display:flex; flex-direction:column; align-items:center;' action='assets/php/booking.php' method='POST'>";
                                    echo "<button type='submit' name='vac_id' value='".$id."' style='background-color:#3D72A4;'>BOOK NOW!</button>";
                                    echo "</form>";
                                }
                            }
                        }
                        echo "</section>";
                        echo "</div>";
                    }
                ?>
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
                        <li><input type="submit" value="Send Message" class="alt" /></li>
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
		<script type="text/javascript" src="assets/js/generate.min.js"></script>
        <script type="text/javascript" src="assets/js/submit.min.js"></script>
        <script type="text/javascript" src="assets/js/hamburger.min.js"></script>
    </body>
</html>