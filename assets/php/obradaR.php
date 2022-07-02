<?php
    session_start();
    include_once("veza/veza.php");
    $errCount = 0;
    $ime = $_POST["name"];
    $mejl = $_POST["email"];
    $sifra = $_POST["password"];
    $regname = "/^[A-Z][a-z]/";
    $upit = "select email, password from user where email = '$mejl' and password = '$sifra'";
    $rez = $veza -> query($upit);
    $row = $rez -> rowCount();
    if($row > 0) {
        $errCount--;
    }
    else $errCount++;

    if(preg_match($regname, $ime)) {
        if(strlen($ime) >= 2 && strlen($ime) <= 16) {
            $errCount++;
        }
        else $errCount--;
    }
    else $errCount--;

    if(filter_var($mejl, FILTER_VALIDATE_EMAIL)) {
        if(strlen($mejl) >= 6 && strlen($mejl) <= 48) {
            $errCount++;
        }
        else $errCount--;
   }
   else $errCount--;

   if(strlen($sifra) >= 8 && strlen($sifra) <= 24) $errCount++;
   else $errCount--;

   if($errCount == 0 || $errCount == 4) {
    $_SESSION["podaci"] = "dobar";
   }
   else {
    http_response_code(404);
   }
?>