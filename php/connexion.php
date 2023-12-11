<?php
$server ="localhost";
$user = "root";
$pass = "";
$db = "zenmom";
//creation de la connexion procédurale
$conn =mysqli_connect($server, $user, $pass, $db);
try { $conn =mysqli_connect($server, $user, $pass, $db);
    //code...
} catch (Exception $e) {
      var_dump($e);
}