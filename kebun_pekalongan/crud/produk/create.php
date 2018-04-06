<?php 
 include("koneksi.php");
 error_reporting(0);
 $id = $_POST['id'];
 $judul = $_POST['judul'];
 $telp = $_POST['telp'];
 $penjual = $_POST['penjual'];
 $deskripsi = $_POST['deskripsi'];
 $lokasi = $_POST['lokasi'];
 $harga = $_POST['harga'];
 $gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$tipe = $_FILES['gambar']['type'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$gambar;

// Set path folder tempat menyimpan fotonya
$path = "../../img/".$fotobaru;

if($tipe=="image/jpeg" || $tipe=="image/png" || $tipe=="image/jpg"){
// Proses upload
if(move_uploaded_file($tmp, $path)){
	$query = "INSERT INTO tb_produk VALUES('".$id."', '".$fotobaru."','".$judul."', '".$lokasi."', '".$harga."', '".$penjual."', '".$telp."', '".$deskripsi."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query 

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: ../../index.php?page=produk"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo"<script>window.alert('Maaf, Terjadi kesalahan saat menambah ke Database..!')</script>";
    echo"<script>document.location='../../index.php?page=produk';</script>"; 
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
    echo"<script>window.alert('Maaf, Gambar gagal di Upload..!')</script>";
    echo"<script>document.location='../../index.php?page=produk';</script>"; 
}
}else{
    echo"<script>window.alert('Maaf, Hanya file JPEG/JPG/PNG untuk Gambar..!')</script>";
    echo"<script>document.location='../../index.php?page=produk';</script>"; 
}	
	?>
