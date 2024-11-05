<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body>
    <h1>Selamat datang di halaman register</h1>
    <form action="proses_register.php" method="post">

    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" id=""></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="text" name="password" id=""></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="text" name="email" id=""></td>
        </tr>
        <tr>
            <td>nama lengkap</td>
            <td><input type="text" name="namalengkap" id=""></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><input type="text" name="alamat" id=""></td>
        </tr>

        <tr>
            <td><input type="submit" value="register"></td>
        </tr>
    </table>
    </form>
    
</body>
</html>