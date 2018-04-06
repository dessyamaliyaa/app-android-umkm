<?php 
	include("../../dbo.php");
	$id=$_GET["id"];
	$nama = $_POST['nama'];
	$uname = $_POST['uname'];
 
	$sql = mysql_query("update tb_admin set NAME='$nama', UNINAME='$uname'"
			. " where ID_ADMIN='$id' " )
			or die("Query failed with error: ".mysql_error());
	if ($sql) {
		header("location:../../index.php?page=admin");
	}
?>