<?php
    include_once("assets/php/veza/veza.php");
    $arr = array("Home", "Offers", "Logout", "Admin");
    $upit = "select admin_nav from nav";
    $rez = $veza -> query($upit);
    $row = $rez -> fetchAll();
    echo "<nav id='nav'>";
    $i = 0;
    foreach( $row as $r) {
        $user = $r -> admin_nav;
        if($i <= 3) {
            echo "<a href='$user'>".$arr[$i]."</a>";
            $i++;
        }
    }
    echo "</nav>";
?>