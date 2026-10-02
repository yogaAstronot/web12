<?php
include 'koneksi.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from user where username = '$username' AND password = '$password'";
    $query = mysqli_query(mysql:$connection, query:$sql);

    $jumlah = mysqli_num_rows(result: $query);
    if ($jumlah > 0) {
        header(header:'Location: backend.php');
        echo "Selamat datang $username";
    } else {
        header(header: 'Location: form_login.php?error=login');
    }
} else {
    echo 'username dan password harus diisi';
}