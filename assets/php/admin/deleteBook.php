<?php
    include_once("../veza/veza.php");

    $id = $_POST["deleteBook"];

    if(isset($veza)) {
        $upit = "delete from booking where id_book = :id";
        $pr = $veza -> prepare($upit);
        $pr -> bindParam(":id", $id);
        $pr -> execute();
        header("Location: ../../../admin.php");
    }
    else http_response_code(503);
?>