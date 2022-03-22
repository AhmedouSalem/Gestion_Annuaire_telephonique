<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "bd annuaire téléphonique pour les établissements";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>