<?php

require("koneksi.php");

// Mengambil data dari ESP8266
$sensor1 = isset($_GET['sensor1']) ? (int) $_GET['sensor1'] : null;
$sensor2 = isset($_GET['sensor2']) ? (int) $_GET['sensor2'] : null;

// Memastikan kedua data tersedia
if ($sensor1 === null || $sensor2 === null) {
    die("Data sensor tidak lengkap");
}

// Menyimpan data ke database
$sql = "INSERT INTO datasensor (sensor1, sensor2)
        VALUES ('$sensor1', '$sensor2')";

$result = mysqli_query($koneksi, $sql);

if (!$result) {
    die("Invalid query: " . mysqli_error($koneksi));
}

echo "Data berhasil disimpan";

mysqli_close($koneksi);

?>