<?php
    include_once("../veza/veza.php");
    include_once("../obradaR.php");

    $ime = $_POST["name"];
    $mejl = $_POST["email"];
    $sifra = $_POST["password"];
    $admin = $_POST["admin"];

    if(isset($veza)) {
        if($_SESSION["podaci"] == "dobar") {
            $upit = "insert into user(name, email, password, admin) values(:ime, :mejl, :sifra, :admin)";
            $pr = $veza -> prepare($upit);
            $pr -> bindParam(':ime', $ime);
            $pr -> bindParam(':mejl', $mejl);
            $pr -> bindParam(':sifra', $sifra);
            $pr -> bindParam(':admin', $admin);
            $pr -> execute();
            header("Location: ../../../admin.php");
        }
        else http_response_code(400);
    }
    else http_response_code(503);
?>