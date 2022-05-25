<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama_pelanggan'],$_POST['pewangi'],$_POST['Harga'],$_POST['nama_petugass']);
	header('location:data.php');
}
elseif($action=="edit")
{
	$koneksi->edit_data($_POST['nama_pelanggan'],$_POST['pewangi'],$_POST['Harga'],$_POST['nama_petugass'],$_POST['id_laundry']);
	header('location:data.php');
}
elseif($action=="delete")
{
	$id_laundry = $_GET['id'];
	$koneksi->delete_data($id_laundry);
	header('location:data.php');
}
?>