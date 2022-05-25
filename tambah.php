<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="assets/css/logo2.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Laundry</title>
    <link rel="stylesheet" href="assets/css/tambah.css">
</head>
<body>
<form method="post" action="proses.php?action=add">
<h3>Tambah Data Laundry</h3>
<hr>
    <div class="container">
        <div class="box-input">
        <input type="text" name="nama_pelanggan" required>
        <label for="nama_pelanggan">Nama Pelanggan</label>
        </div>
    
        <div class="box-input">
        <input type="text" name="pewangi" required>
        <label for="pewangi">Jumlah Pewangi</label>
        </div>

        <div class="box-input">
        <input type="text" name="Harga" required>
        <label for="Harga">Harga</label>
        </div>
    
        <div class="box-input">
        <input type="text" name="nama_petugass" required>
        <label for="nama_petugass">Nama Petugas</label>
        </div>

    <input class="btn" type="submit" name="button" value="Simpan">
    </div>
</form>
</body>
</html>