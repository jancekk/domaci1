<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'accounts';
$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno){
    exit("Neuspeusna konekcija: greska>".$conn->connect_error.",err kod>".$conn->connect_errno);
}
?>