<?php
	include("../../dbo.php");
	$id = $_POST['id'];
	$nama = $_POST['judul'];
    $lokasi = $_POST['lokasi'];
    $harga = $_POST['harga'];
    $pjl = $_POST['penjual'];
    $telp = $_POST['telp'];
    $desk = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $tipe = $_FILES['gambar']['type'];
	if(isset($_POST['save'])){
        if($tipe=="image/jpeg" || $tipe=="image/png" || $tipe=="image/jpg"){
    $fotobaru = date('dmYHis').$gambar;
  $path = "../../img/".$fotobaru;
   if(move_uploaded_file($tmp, $path)){
	$sql = mysql_query("update tb_produk set JUDUL='$nama', LOKASI='$lokasi', HARGA='$harga', GAMBAR='$fotobaru', PENJUAL='$pjl', TELP='$telp', DESKRIPSI='$desk'" . " where ID='$id'")
			or die("Query failed with Error : ".mysql_error());
	if($sql){
		header("location:../../index.php?page=produk");
	}
   }
   else{
	   $sql = mysql_query("update tb_produk set JUDUL='$nama', LOKASI='$lokasi',HARGA='$harga', PENJUAL='$pjl', TELP='$telp', DESKRIPSI='$desk'" . " where ID='$id'")
				or die("Query failed with Error : ".mysql_error());
	if($sql){
		header("location:../../index.php?page=produk");
	}
   }
   } else if($foto==""){
        $sql = mysql_query("update tb_produk set JUDUL='$nama', LOKASI='$lokasi', HARGA='$harga', PENJUAL='$pjl', TELP='$telp', DESKRIPSI='$desk'" . " where ID='$id'")
			or die("Query failed with Error : ".mysql_error());
	if($sql){
		header("location:../../index.php?page=produk");
	}
   }else{
    echo"<script>window.alert('Maaf, Hanya file JPEG/JPG/PNG untuk Gambar..!')</script>";
    echo"<script>document.location:../../index.php?page=produk';</script>"; 
}
	}
        
?>