<?php
    session_start();
    $errCount = 0;
    $mejl = $_POST["email"];
    $sifra = $_POST["password"];

    if(filter_var($mejl, FILTER_VALIDATE_EMAIL)) {
        if(strlen($mejl) >= 6 && strlen($mejl) <= 48) {
            $errCount++;
        }
        else $errCount--;
   }
   else $errCount--;

   if(strlen($sifra) >= 8 && strlen($sifra) <= 24) $errCount++;
   else $errCount--;

   if($errCount == 0 || $errCount == 2) {
        $_SESSION["log"] = "dobar";
   }
   else {
        $_SESSION["log"] = "los";
   }
?>