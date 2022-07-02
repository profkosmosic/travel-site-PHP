<?php
    include_once("veza/veza.php");
    include_once("obradaK.php");

    $ime = $_POST["name"];
    $mejl = $_POST["email"];
    $poruka = $_POST["message"];

    if(isset($veza)) {
        if($_SESSION["kontakt"] == "dobar") {
            unset($_SESSION["kontakt"]);
            $upit = "insert into contact(name_c, email_c, message_c) values(:name, :email, :message)";
            $pr = $veza -> prepare($upit);
            $pr -> bindParam(':name', $ime);
            $pr -> bindParam(':email', $mejl);
            $pr -> bindParam(':message', $poruka);
            $pr -> execute();
            header("Location: ../../index.php");
        }
        else http_response_code(400);
    }
    else http_response_code(503);
?>