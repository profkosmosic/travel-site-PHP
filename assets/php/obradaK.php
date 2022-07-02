<?php
    session_start();
    $errCount = 0;
    $ime = $_POST["name"];
    $mejl = $_POST["email"];
    $poruka = $_POST["message"];
    $regname = "/^[A-Z][a-z]/";

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

   if(strlen($poruka) >= 15 && strlen($poruka) <= 128) $errCount++;
   else $errCount--;

   if($errCount == 0 || $errCount == 3) {
    $_SESSION["kontakt"] = "dobar";
   }
   else {
    $_SESSION["kontakt"] = "los";
   }
?>