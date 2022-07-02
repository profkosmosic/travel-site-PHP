<?php
    include_once("assets/php/veza/veza.php");
    $arr = array("Home", "Offers", "Login", "Register");
    $upit = "select user_unlogged from nav";
    $rez = $veza -> query($upit);
    $row = $rez -> fetchAll();
    $i = 0;
    foreach( $row as $r) {
        $user = $r -> user_unlogged;
        if($i <= 3) {
            echo "<li><a href='$user' onclick='Close()'>".$arr[$i]."</a></li>";
            $i++;
        }
    }
?>