<?php
include('koneksi.php');
$db = new database();
$id_laundry = $_GET['id'];
if(! is_null($id_laundry))
{
    $data_laundry = $db->get_by_id($id_laundry);
}
else
{
    header('location:data.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="assets/css/logo2.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="assets/css/tambah.css">
</head>
<body>

<form method="post" action="proses.php?action=edit">
<h3>UPDATE DATA LAUNDRY</h3>
<input type="hidden" name="id_laundry" value="<?php echo $data_laundry['id_laundry']; ?>"/>

    <div class="container">
        <div class="box-input">
        <input type="text" name="nama_pelanggan" value="<?php echo $data_laundry['nama_pelanggan']; ?>"/>
        <label for="">Nama Pelanggan</label>
        </div>

        <div class="box-input">
        <input type="text" name="pewangi" value="<?php echo $data_laundry['pewangi']; ?>"/>
        <label for="">Jumlah Pewangi</label>
        </div>
        
        <div class="box-input">
        <input type="text" name="Harga" value="<?php echo $data_laundry['Harga']; ?>"/>
        <label for="">Harga</label>
        </div>

        <div class="box-input">
        <input type="text" name="nama_petugass" value="<?php echo $data_laundry['nama_petugass']; ?>"/>
        <label for="">Nama Petugas</label>
        </div>
        
        <input class="btn" type="submit" name="button" value="Update"/>
</div>
</form>
</body>
</html>