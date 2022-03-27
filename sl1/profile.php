<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="home-header">
        <h2>Aplikasi Pengelolaan Keuangan</h2>
        <a href="home.php">Home</a>
        <a href="profile.php" class="active">Profile</a>
        <a href="logout.php">Logout</a>
    </header>

    <div class="profile-content">
        <h3>Profil Pribadi</h3>
        <div class="table-container">
            <table class="table-1">
                <tr>
                    <td>Nama Depan</td>
                    <td><b><?php echo $_SESSION['namaDepan']?></b></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><b><?php echo $_SESSION['tempatLahir']?></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><b><?php echo $_SESSION['wargaNegara']?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><b><?php echo $_SESSION['alamat']?></b></td>
                </tr>
            </table>
            <table class="table-2">
                <tr>
                    <td>Nama Tengah</td>
                    <td><b><?php echo $_SESSION['namaTengah']?></td>
                </tr>
                <tr>
                    <td>Tgl Lahir</td>
                    <td><b><?php echo $_SESSION['tglLahir']?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><b><?php echo $_SESSION['email']?></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td><b><?php echo $_SESSION['kodePos']?></b></td>
                </tr>
            </table>
            <table class="table-3">
                <tr>
                    <td>Nama Belakang</td>
                    <td><b><?php echo $_SESSION['namaBelakang']?></b></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><b><?php echo $_SESSION['NIK']?></b></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td><b><?php echo $_SESSION['noHP']?></b></td>
                </tr>
                <tr>
                    <td>Foto Profil</td>
                    <td>
                        <div class="profile-pict">
                            <?php
                                echo "<img src='".$_SESSION['dirPlace'].$_SESSION['fileName']."'>";
                            ?>
                        </div>
                    </td>
                    
                    
                </tr>
            </table>
        </div>
    </div>
    
</body>
</html>