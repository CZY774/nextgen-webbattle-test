<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "nextgen_webbattle";
    $port = 3308;
    
    $db = mysqli_connect($server, $user, $password, $nama_database, $port);

    if (!$db) {
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
?>