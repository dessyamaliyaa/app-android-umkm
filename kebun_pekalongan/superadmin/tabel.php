<?php 
include ('dbo.php');
error_reporting(0);
if($_GET["page"]=="user"){
?>
<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Data User </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No.Telp</th>
        <th>Status</th>
        <th></th>
    </tr>
    </thead>
    <tbody><?php
		$i = 1;
		$sql= mysql_query("select * from user_pembeli order by id_pembeli asc")
				or die("Error query ".mysql_error());
		while($data=mysql_fetch_array($sql)){
			?>
    <tr>
        <td><?php echo $i?></td>
        <td class="center"><?php echo $data['nama_pembeli'];?></td>
        <td class="center"><?php echo $data['alamat'];?></td>
        <td class="center"><?php echo $data['no_telp'];?></td>
        <td class="center"><?php echo $data['member'];?></td>
        <td class="center">
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Ubah
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Hapus
            </a>
        </td>
    </tr>
    <?php $i++; }?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
        <?php $i++; }?>

<?php 
include ('dbo.php');
error_reporting(0);
if($_GET["page"]=="admin"){
?>
<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Data Administrator </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Level Admin</th>
        <th>No. Telp</th>
        <th></th>
    </tr>
    </thead>
    <tbody><?php
		$i = 1;
		$sql= mysql_query("select * from user_pengguna order by id_pengguna asc")
				or die("Error query ".mysql_error());
		while($data=mysql_fetch_array($sql)){
			?>
    <tr>
        <td><?php echo $i?></td>
        <td class="center"><?php echo $data['nama_pengguna'];?></td>
        <td class="center"><?php echo $data['level'];?></td>
        <td class="center"><?php echo $data['no_telp'];?></td>
        <td class="center">
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Ubah
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Hapus
            </a>
        </td>
    </tr>
    <?php $i++; }?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
        <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus-sign"></i> Tambah Admin</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                
                
                <br>
                <div class="input-group col-md-4">
                    <span class="input-group-addon">Nama Pengguna</i></span>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <br>
                <div class="input-group col-md-4">
                    <span class="input-group-addon">Username</i></span>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <br>
                <div class="input-group col-md-4">
                    <span class="input-group-addon">Password</i></span>
                    <input type="text" class="form-control" placeholder="">
                </div><br>
                <div class="input-group col-md-4">
                    <span class="input-group-addon">No. Telp</i></span>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <br>
                <button type="submit" class="btn btn-default black">Simpan</button>
                <button type="reset" class="btn btn-default ">Batal</button>
            </div>
        </div>
    </div>
    <!--/span-->

</div>
 <?php } ?>

<?php 
include ('dbo.php');
error_reporting(0);
if($_GET["page"]=="distributor"){
?>
<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Data Distributor </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>No.</th>
        <th>Nama Distributor</th>
        <th>Alamat</th>
        <th>No. Telp</th>
        <th>Detail</th>
        <th></th>
    </tr>
    </thead>
    <tbody><?php
		$i = 1;
		$sql= mysql_query("select * from distributor order by id_distributor asc")
				or die("Error query ".mysql_error());
		while($data=mysql_fetch_array($sql)){
			?>
    <tr>
        <td><?php echo $i?></td>
        <td class="center"><?php echo $data['nama_distributor'];?></td>
        <td class="center"><?php echo $data['alamat'];?></td>
        <td class="center"><?php echo $data['no_telp'];?></td>
        <td class="center"><?php echo $data['detail'];?></td>
        <td class="center">
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Ubah
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Hapus
            </a>
        </td>
    </tr>
    <?php $i++; }?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
        <?php $i++; }?>

<?php 
include ('dbo.php');
error_reporting(0);
if($_GET["page"]=="produk"){
?>
<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Data Produk </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>No.</th>
        <th>Gambar</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Detail</th>
        <th>Distributor</th>
        <th></th>
    </tr>
    </thead>
    <tbody><?php
		$i = 1;
		$sql= mysql_query("select * from produk a, distributor b, kategori c " . " where a.id_distributor=b.id_distributor and a.id_kategori=c.id_kategori order by a.id_produk asc")
				or die("Error query ".mysql_error());
		while($data=mysql_fetch_array($sql)){
			?>
    <tr>
        <td><?php echo $i?></td>
        <td class="center"><?php echo '<img style="width:100px;height:100px" src="img/'. $data['gambar'] .'">';?></td>
        <td class="center"><?php echo $data['nama_produk'];?></td>
        <td class="center"><?php echo $data['nama_kategori'];?></td>
        <td class="center"><?php echo $data['harga'];?></td>
        <td class="center"><?php echo $data['detail_produk'];?></td>
        <td class="center"><?php echo $data['nama_distributor'];?></td>
        <td class="center">
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Ubah
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Hapus
            </a>
        </td>
    </tr>
    <?php $i++; }?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
        <?php $i++; }?>

<?php 
include ('dbo.php');
error_reporting(0);
if($_GET["page"]=="kategori"){
?>
<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Data Kategori </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>No.</th>
        <th>Nama Kategori</th>
        <th></th>
    </tr>
    </thead>
    <tbody><?php
		$i = 1;
		$sql= mysql_query("select * from kategori order by id_kategori asc")
				or die("Error query ".mysql_error());
		while($data=mysql_fetch_array($sql)){
			?>
    <tr>
        <td><?php echo $i?></td>
        <td class="center"><?php echo $data['nama_kategori'];?></td>
        <td class="center">
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Ubah
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Hapus
            </a>
        </td>
    </tr>
    <?php $i++; }?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
        <?php $i++; }?>