<?php
    include_once("../veza/veza.php");

    $id = $_POST["deleteVac"];

    if(isset($veza)) {
        $upit = "delete from vacation where id_img = :id";
        $pr = $veza -> prepare($upit);
        $pr -> bindParam(":id", $id);
        $pr -> execute();
        header("Location: ../../../admin.php");
    }
    else http_response_code(503);
?>