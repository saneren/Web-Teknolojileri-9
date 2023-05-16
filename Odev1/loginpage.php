<?php
$username = $_POST["email"];
$password = $_POST["sifre"];

   if(empty($username) || empty($password))
   {
    header("Location: localhost/Odev1/giriş.html");
    exit;
   }    
   else
   {
    echo"Hoşgeldiniz $username";
   }
?>