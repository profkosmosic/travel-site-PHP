<?php
    include_once("../veza/veza.php");

    $id = $_POST["deleteCon"];

    if(isset($veza)) {
        $upit = "delete from contact where id_c = :id";
        $pr = $veza -> prepare($upit);
        $pr -> bindParam(":id", $id);
        $pr -> execute();
        header("Location: ../../../admin.php");
    }
    else http_response_code(503);
?>