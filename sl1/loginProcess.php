<?php
    session_start();

    if((isset($_POST['submit'])) && (isset($_POST['username'])) && (isset($_SESSION['username']))){
        if(($_POST['username'] == $_SESSION['username']) && ($_POST['password'] == $_SESSION['password1'])){
            header("location:home.php");
        }
        else{
            echo "Maaf Anda gagal login, pastikan username dan password sesuai.";
            echo "<br><a href='index.php'>Kembali</a>";
        }
    }
    else{
        echo "Maaf Anda gagal login, pastikan username dan password sesuai.";
        echo "<br><a href='index.php'>Kembali</a>";
    }

?>