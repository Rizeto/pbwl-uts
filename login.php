<?php
    session_start();
    include "koneksilogin.php";
?>
<!DOCTYPE html>
<html lang="en" and dir="itr">
<head>
    <link rel="shortcut icon" href="assets/css/logo2.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
     <form class="box" action="login.php" method="POST">

     <h1>
         Halaman Login
     </h1>
     <input type="text" name="username" class="placeholder" placeholder="Masukkan Username" id="username">
     <input type="password" name="password" placeholder="Masukkan Password" id="password">
     <input type="submit" name="masuk" value="Login" onclick="validate()">
     </form>

    <?php
    
        if (isset($_POST['masuk'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $qry = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = md5('$password')");
            $cek = mysqli_num_rows($qry);
            if ($cek==1){
            $_SESSION['userweb']=$username;
            header ("location:home.php");
            exit;
        }    
        else {
            echo "Maaf username dan password anda salah";
        }
    }
    ?>

    </body>
</html>