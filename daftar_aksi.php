<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];

mysqli_query($connection, "insert into calon_siswa values ('', '$nama', '$alamat', '$jenis_kelamin', '$agama')");

header("location:index.php");
