<?php

include('koneksi.php');
$db = new database();
$data_laundry = $db->tampil_data();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="assets/css/logo2.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laundry</title>
    <link rel="stylesheet" href="assets/css/data.css">
</head>
<body>

<div class="header">
        <nav id="navbar">
            <img src="assets/css/logo2.png" class="logo">
            <ul id="menu"> 
                <li><a href="home.php">Home</a></li>
                <li><a href="data.php">Data Laundry</a></li>
                <li>Service</li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>

    <br><br>
    <a class="tambah" href="tambah.php">Tambah Data</a>
    <br><br>
    <table  cellspacing="0" border="1">
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Pewangi</th>
                <th>Harga</th>
                <th>Nama Petugas</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no = 1;
            foreach($data_laundry as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama_pelanggan']; ?></td>
                <td><?php echo $row['pewangi']; ?></td>
                <td><?php echo $row['Harga']; ?></td>
                <td><?php echo $row['nama_petugass']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id_laundry']; ?>">Edit</a>
                    <a href="proses.php?action=delete&id=<?php echo $row['id_laundry']; ?>">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
    </table>

    <script>
        var navbar = document.getElementById("navbar");
        var menu = document.getElementById("menu");

        window.onscroll = function(){
            if(window.pageYOffset >= menu.offsetTop){
                navbar.classList.add("sticky");
            }
            else{
                navbar.classList.remove("sticky");
            }
        }

    </script>

</body>
</html>