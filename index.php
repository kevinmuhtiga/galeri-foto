<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman utama</title>
</head>
<body>
    <h1>
        Selaamt datang di Halaman utama
    </h1>

    <?php
    session_start();
    if(!isset($_SESSION['userid'])){
        ?>
    <ul>
    
    <li> <a href="register.php">Registrasi</a></li>
    <li> <a href="login.php">login</a></li>
    </ul>

    <?php
    
}  else {
    ?>

    <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b></p>
    <ul>
    <li><a href="index.php">home</a></li>
    <li><a href="album.php">album</a></li>
    <li><a href="foto.php">Foto</a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>

    <?php
}
?>




</body>
</html>