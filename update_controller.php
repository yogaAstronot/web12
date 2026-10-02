<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];

mysqli_query($connection, "update calon_siswa set nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama' where id='$id'");

header("location:index.php");
