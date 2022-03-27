<?php
    session_start();

    if(isset($_POST['submit'])){

        $_SESSION['namaDepan'] = $_POST['namaDepan'];
        $_SESSION['tempatLahir'] = $_POST['tempatLahir'];
        $_SESSION['wargaNegara'] = $_POST['wargaNegara'];
        $_SESSION['alamat'] = $_POST['alamat'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['namaTengah'] = $_POST['namaTengah'];
        $_SESSION['tglLahir'] = $_POST['tglLahir'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['kodePos'] = $_POST['kodePos'];
        $_SESSION['password1'] = $_POST['password1'];
        $_SESSION['namaBelakang'] = $_POST['namaBelakang'];
        $_SESSION['NIK'] = $_POST['NIK'];
        $_SESSION['noHP'] = $_POST['noHP'];
        $_SESSION['password2'] = $_POST['password2'];

        $fileName = $_FILES['fotoProfil']['name'];
        $tempName = $_FILES['fotoProfil']['tmp_name'];

        $directory = "profilePict/";

        $upload = move_uploaded_file($tempName, $directory.$fileName);

        // if($upload){
        //     echo "<a href='".$directory.$fileName."'>".$fileName."</a>";
        // }
        // else{
        //     echo "gagal upload";
        // }

        $_SESSION['dirPlace'] = $directory;
        $_SESSION['fileName'] = $fileName;

        header("location:index.php");
    }
?>