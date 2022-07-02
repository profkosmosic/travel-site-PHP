<?php
    include_once("../veza/veza.php");

    $id_product = $_POST["product_id"];
    $id_user = $_POST["user_id"];

    if(isset($veza)) {
        $upit = "insert into booking(id_vacation, id_user) values(:id_vacation, :id_user)";
        $pr = $veza -> prepare($upit);
        $pr -> bindParam(':id_vacation', $id_product);
        $pr -> bindParam(':id_user', $id_user);
        $pr -> execute();
        header("Location: ../../../admin.php");
    }
    else http_response_code(503);
?>