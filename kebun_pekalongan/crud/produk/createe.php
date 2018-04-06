<?php
//
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$judul = $_POST['judul'];
$lokasi = $_POST['lokasi'];
$penjual = $_POST['penjual'];
$telp = $_POST['telp'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$harga = $_POST['harga'];
$tipe = $_FILES['gambar']['type'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$gambar;

// Set path folder tempat menyimpan fotonya
$path = "../../img/".$fotobaru;

if($tipe=="image/jpeg" || $tipe=="image/png" || $tipe=="image/jpg"){
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil 

  // Proses simpan ke Database
  $query = "INSERT INTO tb_produk (JUDUL, LOKASI, HARGA, PENJUAL, TELP, DESKRIPSI, GAMBAR) values ('$judul','$lokasi', '$harga','$penjual','$telp','$deskripsi','$fotobaru')";
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