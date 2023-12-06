<?php
$server ="localhost";
$user = "root";
$pass = "";
$db = "";
//creation de la connexion procédurale
$connexion =mysqli_connect($server, $user, $pass, $db);
try { $connexion =mysqli_connect($server, $user, $pass, $db);
    //code...
} catch (Exception $e) {
      var_dump($e);
}