<?php
    session_start();
    if(empty($_SESSION["login"])):
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Travel Advisor</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="author" content="Lazar Petrović">
	    <meta name="keywords" content="travel, advisor, register, vacation">
        <meta name="description" content="Register and start a vacation of your dreams!">
        <link rel="shortcut icon" type="icon" href="images/favicon.ico"/>
        <link rel="stylesheet" href="assets/css/form.min.css" />
    </head>
    <body>
        <header id="header">
            <div class="inner">
                <a href="index.php" class="logo">Travel Advisor</a>
                <?php
                    include("assets/php/nav/unlogged.php");
                ?>
            </div>
        </header>
        <a href="#menu" onclick="Burger()" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        <div id="burgerContent">
            <ul>
                <?php
                    include("assets/php/nav/unlogged_mob.php");
                ?>
            </ul>
        </div>
        <section id="footer">
            <div class="inner">
                <header>
                    <h1 id="heads">REGISTER</h1>
                </header>
                <br/>
                <form method="post" action="assets/php/registracija.php" onsubmit="return provera()">
                    <div class="field centar">
                        <label id="ime" for="name">Name</label>
                        <input type="text" name="name" id="name"/>
                    </div>
                    <div class="field centar">
                        <label id="mejl" for="email">Email</label>
                        <input type="email" name="email" id="email"/>
                    </div>
                    <div class="field centar">
                        <label id="sifra" for="password">Password</label>
                        <input type="password" name="password" id="password" />
                    </div>
                    <div class="field centar">
                        <label id="psifra" for="cpassword">Confirm Password</label>
                        <input type="password" name="cpassword" id="cpassword" />
                    </div>
                    <ul class="actions centar">
                        <li><input type="submit" value="Register" class="alt" /></li>
                    </ul>
                    <br/>
                    <br id="delete"/>
                    <p id="userMessage"></p>
                </form>
                <div class="copyright">
                    <p id="fut">&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a> Made by: <a href="about.php">LAZAR PETROVIC 125/19</a></p>
                    <p id="fut"><a href="DOKUMENTACIJA.pdf">DOCUMENTATION</a></p>
                </div>
                <br/>
            </div>
        </section>
        <script type="text/javascript" src="assets/js/register.min.js"></script>
		<script type="text/javascript" src="assets/js/generate.min.js"></script>
        <script type="text/javascript" src="assets/js/hamburger.min.js"></script>
    </body>
</html>
<?php
    endif;
?>