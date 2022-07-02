<?php
    include_once("veza/veza.php");
    include_once("obradaL.php");

    $mejl = $_POST["email"];
    $sifra = $_POST["password"];

    if(isset($veza)) {
        if($_SESSION["log"] == "dobar") {
            unset($_SESSION["log"]);
            $upit = "select email, password, admin, id from user where email = :mejl and password = :sifra";
            $pr = $veza -> prepare($upit);
            $pr -> bindParam(':mejl', $mejl);
            $pr -> bindParam(':sifra', $sifra);
            $pr -> execute();
            $rez = $pr -> fetch();
            $row = $pr -> rowCount();
            if($row == 1) {
                if($rez -> admin == 1) {
                    $_SESSION["login"] = "admin";
                    $_SESSION["id"] = $rez -> id;
                    header("Location: ../../index.php");
                }
                else {
                    $_SESSION["login"] = "korisnik";
                    $_SESSION["id"] = $rez -> id;
                    header("Location: ../../index.php");
                }
            }
            else {
                http_response_code(404);
            }
        }
        else http_response_code(400);
    }
    else http_response_code(503);
?>