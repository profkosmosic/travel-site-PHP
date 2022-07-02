<?php
    session_start();
    include_once("veza/veza.php");

    $id_vacation = $_POST["vac_id"];
    $id_user = $_SESSION["id"];

    if(isset($veza)) {
        if(isset($_SESSION["login"])) {
            if($_SESSION["login"] == "korisnik") {
                if(isset($id_user)) {
                    $upit = "insert into booking(id_user, id_vacation) values(:user_id, :vac_id)";
                    $pr = $veza -> prepare($upit);
                    $pr -> bindParam("user_id", $id_user);
                    $pr -> bindParam(":vac_id", $id_vacation);
                    $pr -> execute();
                    $_SESSION["order"] = "dobar";
                    header("Location: ../../offers.php");
                }
            }
        }
    }
?>