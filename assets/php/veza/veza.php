<?php
    include("podaci.php");
    $veza = new PDO("mysql:host=$serverDB;dbname=$bazaPodataka", $username, $password);
    $veza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $veza->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
?>