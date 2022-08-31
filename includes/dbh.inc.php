<?php



$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "Miemiemie!23";
$dBName = "bv_players";

$conn = mysqli_connect('localhost', 'root', 'Miemiemie!23', 'bv_players');

#echo "yes";

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

#echo "connected";
