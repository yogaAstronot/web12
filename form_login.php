<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LOGIN ADMIN</title>
    <link rel="stylesheet" href="formlojin.css">
</head>

<body>
    <main class="container">
        <form action="proses_login.php" method="post">
            <table class="table-form">
                <div>
                    <img src="image/px1.webp" alt="">
                </div>
                <tr>
                    <td>
                        <label for="username">Username:</label>
                        <input type="text" name="username" placeholder="Masukkan Username disini">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password:</label>
                        <input type="text" name="password" placeholder="Masukkan Password disini">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Login</button>
                    </td>
                </tr>
            </table>
        </form>
    </main>
    <div class="pesan">
        <div class="ini-teks">
            <a>
                <strong>
                    validasi login admin

                </strong>
            </a>
        </div>
          <?php
                $error = '';
                if (isset($_GET['error'])) {
                    $error = $_GET['error'];
                }

                $pesan = '';

                if ($error == 'login') {
                    $pesan = 'Username atau Password Anda Salah';
                } else if ($error == 'invalid') {
                    $pesan = 'Username dan Password Harus Diisi';
                }

                if ($pesan != '') {
                    echo $pesan;
                }
                ?>

    </div>

</body>

</html>