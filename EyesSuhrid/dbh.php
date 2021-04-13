<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "webproject";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connectiono failed: " . mysqli_connect_error());
}
else{
    echo "Success";
}
