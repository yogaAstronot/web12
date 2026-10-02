<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="update.css">
</head>

<body>
     <div class="container">
       <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($connection, "select * from calon_siswa where id='$id'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <form action="update_controller.php" method="post">
                    <table class="table-form">
                        <div class="ini-teks">
                        <strong >
                            Mau update data?
                    </strong>
                    </div>
                        <tr>
                            <td>
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $d['nama']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" placeholder="Masukkan Alamat" value="<?php echo $d['alamat'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <div class="gender">
                                    <p><input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php echo ($d['jenis_kelamin'] == 'Laki-Laki' ? 'checked' : ''); ?>>Laki-Laki</p>
                                    <p><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($d['jenis_kelamin'] == 'Perempuan' ? 'checked' : ''); ?>>Perempuan</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="agama">Agama</label>
                                <input type="text" name="agama" placeholder="Masukkan Agama" value="<?php echo $d['agama']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit">Submit</button>
                            </td>
                        </tr>
                    </table>
                </form>
            <?php
            }
            ?>
    </div>
</body>

</html>