<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dblatihan";

$koneksi = mysqli_connect(
    $servername,
    $username,
    $password,
    $dbname
);

if (!$koneksi) {
    die("Gagal koneksi database: " . mysqli_connect_error());
}

?>