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
	    <meta name="keywords" content="travel, advisor, login, vacation">
        <meta name="description" content="Log into your account!">
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
                    <h1 id="heads">LOG IN</h1>
                </header>
                <br/>
                <form method="post" action="assets/php/logging.php" onsubmit="return provera()">
                    <div class="field centar">
                        <label id="mejl" for="email">Email</label>
                        <input type="email" name="email" id="email"/>
                    </div>
                    <br/>
                    <div class="field centar">
                        <label id="sifra" for="password">Password</label>
                        <input type="password" name="password" id="password" />
                    </div>
                    <ul class="actions centar">
                        <li><input type="submit" value="Log in" class="alt"/></li>
                    </ul>
                    <br/>
                    <br id="delete"/>
                    <p id="userMessage"></p>
                </form>
                <p id="noacc">You don't have an account? <a href="register.php">Click here to register</a> and we will get you on your way to the vacation of your dreams!</p>
                <br/>
                <div class="copyright">
                    <p id="fut">&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a> Made by: <a href="about.php">LAZAR PETROVIC 125/19</a></p>
                    <p id="fut"><a href="DOKUMENTACIJA.pdf">DOCUMENTATION</a></p>
                </div>
                <br/>
            </div>
        </section>
        <script type="text/javascript" src="assets/js/login.min.js"></script>
		<script type="text/javascript" src="assets/js/generate.min.js"></script>
        <script type="text/javascript" src="assets/js/hamburger.min.js"></script>
    </body>
</html>
<?php
    endif;
?>