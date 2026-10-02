<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Baru</title>
    <link rel="stylesheet" href="daftar.css">

</head>

<body>
    <main class="container">
       <form action="daftar_aksi.php" method="post">
                <table class="table-form">
                    <div class="ini-teks">
                        <strong >
                           "Mau jago ngodink gakk? Yuk, cobain dulu!"
                        </strong>
                        <a>
                            be smart student, be sigma enjiner nanti bikin logaritma yah
                        </a>
                    </div>
                    <tr>
                        <td>
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" placeholder="Masukkan Alamat">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <div class="gender">
                                <p><input type="radio" name="jenis_kelamin" value="Laki-Laki" required>Laki-Laki</p>
                                <p><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="agama">Agama</label>
                            <input type="text" name="agama" placeholder="Masukkan Agama">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit">Daftar</button>
                        </td>
                    </tr>
                </table>
            </form>
    </main>
</body>

</html>