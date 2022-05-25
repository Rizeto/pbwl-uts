<?php

class database{

    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "uts_pbwl_arief";

    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if(mysqli_connect_error()){
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }

    function tampil_data()
    {
        $data = mysqli_query($this->koneksi, "select * from tb_laundrt");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    function tambah_data($nama_pelanggan,$pewangi,$Harga,$nama_petugass)
    {
        mysqli_query($this->koneksi, "insert into tb_laundrt values ('', '$nama_pelanggan','$pewangi','$Harga','$nama_petugass')");
    }

    function get_by_id($id_laundry)
    {
        $query = mysqli_query($this->koneksi,"select * from tb_laundrt where id_laundry='$id_laundry'");
        return $query->fetch_array();
    }

    function edit_data($nama_pelanggan,$pewangi,$Harga,$nama_petugass,$id_laundry)
	{
		$query = mysqli_query($this->koneksi,"update tb_laundrt set nama_pelanggan='$nama_pelanggan',pewangi='$pewangi',Harga='$Harga',nama_petugass='$nama_petugass' where id_laundry='$id_laundry'");
	}

    function delete_data($id_laundry)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_laundrt where id_laundry='$id_laundry'");
	}
}
?>