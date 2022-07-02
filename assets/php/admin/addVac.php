<?php
    include_once("../veza/veza.php");

    $name = $_POST["name_img"];
    $desc = $_POST["desc_img"];
    $file = $_POST["file_img"];
    $price = $_POST["price"];

    if(isset($veza)) {
        $upit = "insert into vacation(name_img, desc_img, file_img, price) values(:name_img, :desc_img, :file_img, :price)";
        $pr = $veza -> prepare($upit);
        $pr -> bindParam(':name_img', $name);
        $pr -> bindParam(':desc_img', $desc);
        $pr -> bindParam(':file_img', $file);
        $pr -> bindParam(':price', $price);
        $pr -> execute();
        header("Location: ../../../admin.php");
    }
    else http_response_code(503);
?>