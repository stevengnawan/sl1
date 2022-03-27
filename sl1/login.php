<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="login-content">
        <h2 class="title">Login</h2>
        <form action="loginProcess.php" method="post">
            <div class="table-container">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                </table>
            </div>
            <div class="login-button">
                <input class="login-submit" type="submit" name="submit" value="Login">
                <button class="login-back"><a href="index.php">Kembali</a></button>
            </div>
        </form>
    </div>

</body>
</html>