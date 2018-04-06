<?php 
	include("../../dbo.php");
	$id=$_POST["id"];
	$nama_admin = $_POST['nama_admin'];
	$uname_admin = $_POST['uname_admin'];
 
	$sql = mysql_query("update tb_admin set NAME='$nama_admin', UNINAME='$uname_admin' "
			. " where ID_ADMIN='$id' " )
			or die("Query failed with error: ".mysql_error());
	if ($sql) {
		header("location:../../index.php?page=admin");
	}
?>