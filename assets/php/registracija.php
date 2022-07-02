<?php
    include_once("veza/veza.php");
    include_once("obradaR.php");

    $ime = $_POST["name"];
    $mejl = $_POST["email"];
    $sifra = $_POST["password"];

    if(isset($veza)) {
        if($_SESSION["podaci"] == "dobar") {
            unset($_SESSION["podaci"]);
            $upit = "insert into user(name, email, password) values(:ime, :mejl, :sifra)";
            $pr = $veza -> prepare($upit);
            $pr -> bindParam(':ime', $ime);
            $pr -> bindParam(':mejl', $mejl);
            $pr -> bindParam(':sifra', $sifra);
            $pr -> execute();
            $_SESSION["nalog"] = "uspesno";
            header("Location: ../../login.php");
        }
        else http_response_code(400);
    }
    else http_response_code(503);
?>