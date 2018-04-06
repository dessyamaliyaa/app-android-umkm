<?php
	include '../../dbo.php';
	$id_admin=$_GET["id"];
	$query = "delete from tb_admin where ID_ADMIN='$id_admin'";
	$result = mysql_query($query) or die("Query failed with error: ".mysql_error());
	if ($result) {
		header ("location:../../index.php?page=admin");
	}
?>