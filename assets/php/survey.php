<?php
    session_start();
    include_once("veza/veza.php");

    $answer = $_POST["survey"];
    $id = $_SESSION["id"];

    if(isset($_POST["survey"])) {
        if(isset($veza)) {
            if(isset($_SESSION["id"])) {
                $upit = "insert into survey(id_user_s, answer) values(:id, :answer)";
                $pr = $veza -> prepare($upit);
                $pr -> bindParam(":id", $id);
                $pr -> bindParam(":answer", $answer);
                $pr -> execute();
                setcookie("survey", $id, time() + (86400 * 30), "/");
                header("Location: ../../index.php");
            }
        }
    }
?>