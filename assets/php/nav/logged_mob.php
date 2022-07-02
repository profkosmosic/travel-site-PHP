<?php
    include_once("assets/php/veza/veza.php");
    $arr = array("Home", "Offers", "Logout");
    $upit = "select user_logged from nav";
    $rez = $veza -> query($upit);
    $row = $rez -> fetchAll();
    $i = 0;
    foreach( $row as $r) {
        $user = $r -> user_logged;
        if($i <= 2) {
            echo "<li><a href='$user' onclick='Close()'>".$arr[$i]."</a></li>";
            $i++;
        }
    }
?>