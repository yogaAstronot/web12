<?php

$connection = mysqli_connect("localhost", "root", "", "pendaftaran_ekstrawp");

if ($connection == mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
