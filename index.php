<?php
require("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="5">
    <title>Monitoring Data Sensor</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
            background-color: #f4f4f4;
        }

        #wntable {
            border-collapse: collapse;
            width: 70%;
            margin: auto;
            background-color: white;
        }

        #wntable td, #wntable th {
            border: 1px solid #ddd;
            padding: 10px;
        }

        #wntable tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #wntable tr:hover {
            background-color: #ddd;
        }

        #wntable th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #00A8A9;
            color: white;
        }
    </style>
</head>

<body>

<h1>Monitoring Data Sensor ESP8266</h1>

<table id="wntable">

    <tr>
        <th>No</th>
        <th>Analog</th>
        <th>Data Digital</th>
        <th>Waktu</th>
    </tr>

    <?php

    $sql = mysqli_query($koneksi,
        "SELECT * FROM datasensor ORDER BY id DESC");

    if (mysqli_num_rows($sql) == 0) {

        echo "<tr>
                <td colspan='4'>Data Tidak Ada</td>
              </tr>";

    } else {

        $no = 1;

        while ($row = mysqli_fetch_assoc($sql)) {

            echo "<tr>
                    <td>".$no."</td>
                    <td>".$row['sensor1']."</td>
                    <td>".$row['sensor2']."</td>
                    <td>".$row['waktu']."</td>
                  </tr>";

            $no++;
        }
    }

    ?>

</table>

</body>
</html>