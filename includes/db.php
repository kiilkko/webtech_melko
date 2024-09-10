<?php

$server = "localhost";
$username = "debian-sys-maint";
$password = "45h0lW3eJiaEDQEK";
$dbname = "registerUser";

$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed.".mysqli_connect_error());
}
?>