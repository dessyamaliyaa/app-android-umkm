
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
    <h5><a href="index.php?form-admin=add" class="glyphicon glyphicon-plus-sign "> Tambah Admin</a></h5>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Username</th>
        <th></th>
    </tr>
    </thead>
    <tbody><?php
		$i = 1;
		$sql= mysql_query("select * from tb_admin order by id_admin asc")
				or die("Error query ".mysql_error());
		while($data=mysql_fetch_array($sql)){
			?>
    <tr>
        <td><?php echo $i?></td>
        <td class="center"><?php echo $data['NAME'];?></td>
        <td class="center"><?php echo $data['UNINAME'];?></td>
        <td class="center">
            <a class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini ?');" href="crud/admin/delete.php?id=<?php echo $data['ID_ADMIN']?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
            </a>
        </td>
        <td class="center">
            
            
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
        
 <?php } ?>


<?php 
include ('dbo.php');
error_reporting(0);
if($_GET["page"]=="produk"){
?>
<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-shopping-cart"></i> Data Produk </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            </div>
    </div>
    <div class="box-content">
    <h5><a href="index.php?form-produk=add" class="glyphicon glyphicon-plus-sign "> Tambah Produk</a></h5>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>No.</th>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Penjual</th>
        <th>No. Telepon</th>
        <th>Lokasi</th>
        <th></th>
    </tr>
    </thead>
    <tbody><?php
		$i = 1;
		$sql= mysql_query("select * from tb_produk order by ID asc")
				or die("Error query ".mysql_error());
		while($data=mysql_fetch_array($sql)){
			?>
    <tr>
        <td><?php echo $i?></td>
        <td class="center"><?php echo '<img style="width:100px;height:100px" src="img/'. $data['GAMBAR'] .'">';?></td>
        <td class="center"><?php echo $data['JUDUL'];?></td>
        <td class="center"><?php echo $data['HARGA'];?></td>
        <td class="center"><?php echo $data['DESKRIPSI'];?></td>
        <td class="center"><?php echo $data['PENJUAL'];?></td>
        <td class="center"><?php echo $data['TELP'];?></td>
        <td class="center"><?php echo $data['LOKASI'];?></td>
        <td class="center">
            <a class="btn btn-info" href="index.php?form-produk=edit&id=<?php echo $data['ID']?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
              
            </a>
            <a class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini ?');" href="crud/produk/delete.php?id=<?php echo $data['ID']?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
       
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

