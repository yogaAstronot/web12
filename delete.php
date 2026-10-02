<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($connection, "delete from calon_siswa where id='$id'");

header("location:pendaftar.php");
