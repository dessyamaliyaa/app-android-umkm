<?php
	include("../../dbo.php");
	$nama_admin = $_POST['nama_admin'];
	$uname_admin = $_POST['uname_admin'];
	$pass_admin = md5($_POST['pass_admin']);
	$sql = mysql_query("insert into tb_admin (NAME, UNINAME, PASSWORD) values ('$nama_admin', '$uname_admin', '$pass_admin')")
		or die("Query failed with Error : ".mysql_error());
	if($sql){
		header("location:../../index.php?page=admin");
	}
?>