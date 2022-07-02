<?php
    include_once("assets/php/veza/veza.php");
    $arr = array("Home", "Offers", "Logout");
    $upit = "select user_logged from nav";
    $rez = $veza -> query($upit);
    $row = $rez -> fetchAll();
    echo "<nav id='nav'>";
    $i = 0;
    foreach( $row as $r) {
        $user = $r -> user_logged;
        if($i <= 2) {
            echo "<a href='$user'>".$arr[$i]."</a>";
            $i++;
        }
    }
    echo "</nav>";
?>