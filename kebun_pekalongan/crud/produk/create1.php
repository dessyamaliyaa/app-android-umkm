<?php
//
include "../../dbo.php";

// Ambil Data yang Dikirim dari Form
$judul = $_POST['judul'];
$lokasi = $_POST['lokasi'];
$harga = $_POST['harga'];
$penjual = $_POST['penjual'];
$telp = $_POST['telp'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$tipe = $_FILES['gambar']['type'];
$folder = '../../img/';
$tambah = $_POST['save'];
if($tambah){
	if($judul=="" || $lokasi=="" || $harga=="" || $penjual=="" || $telp=="" || $deskripsi=="" || $judul=="" || $lokasi=="" || $gambar==""){
		?>
		<script type="text/javascript">
		alert("Inputan tidak boleh kosong !");</script>
		<?php
	}else{
		$pindah = move_uploaded_file($tmp, $folder.$gambar);
		if($pindah){
		mysql_query("INSERT INTO tb_produk (JUDUL, LOKASI, HARGA, PENJUAL, TELP, DESKRIPSI, GAMBAR) values ('$judul','$lokasi','$harga','$penjual','$telp','$deskripsi','$gambar')")
		?>
		<script type="text/javascript">
		alert("Simpan Berhasil !");
		window.location.href="../../index.php?page=produk";</script>
		<?php 
		}else{?>
		<script type="text/javascript">
		alert("Gambar gagal diupload!");
		window.location.href="../../index.php?page=produk";</script>
		<?php
			
		}
	}
	}



?>