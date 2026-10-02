<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftar</title>
    <link rel="stylesheet" href="pendaftar.css">
</head>

<body>

    <div class="container">
        <section class="menu">
            <h2>Siswa yang Sudah Daftar</h2>
            <div class="cl-student">
                <table border="1">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Tindakan</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($connection, "select * from calon_siswa");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td><?php echo $d['jenis_kelamin']; ?></td>
                            <td><?php echo $d['agama']; ?></td>
                            <td>
                                <div class="action-group">
                                    <a href="update.php?id=<?php echo $d['id']; ?>" class="action update">Edit</a>
                                    <a href="delete.php?id=<?php echo $d['id']; ?>" class="action delete">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <div  class="back">
                    <a href="index.php">
                        BACK
                    </a>
                </div>
            </div>

        </section>
    </div>


</body>

</html>