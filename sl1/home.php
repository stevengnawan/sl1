<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="home-header">
        <h2>Aplikasi Pengelolaan Keuangan</h2>
        <a href="home.php" class="active">Home</a>
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
    </header>
    <div class="home-content">
        <h3>Halo <?php echo $_SESSION['namaDepan']." ".$_SESSION['namaTengah']." ".$_SESSION['namaBelakang']?>, Selamat datang di Aplikasi Pengelolaan Keuangan</h3>
    </div>
</body>
</html>