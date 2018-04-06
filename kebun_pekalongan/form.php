<?php 
    session_start(); 
?>
<?php
    include 'dbo.php';
    error_reporting(0);
    if($_GET["form-admin"]=="add"){
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i> Tambah Data Admin</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                     </div>
            </div>
            <div class="box-content">
                <form role="form" name="addadmin" action="crud/admin/create.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input required="required" type="text" class="form-control" id="" name="nama_admin" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input required="required" type="text" class="form-control" id="" name="uname_admin" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input required="required" type="text" class="form-control" id="" name="pass_admin" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-close">Batal</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>
 <?php } ?>
 
 <?php
    if($_GET["form-admin"]=="edit"){
    $id = $_GET["id"];
    $sql = mysql_query("select * from tb_admin where ID_ADMIN='$id'")
	or die ("Error Query : ".mysql_error());
    if($row=mysql_fetch_array($sql)){   
?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-pencil"></i> Ubah Data Admin</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                     </div>
            </div>
            <div class="box-content">
                <form role="form" name="editadmin" action="crud/admin/update.php" method="POST">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
									<input type="hidden" name="id" value="<?php  echo $id;?>">
                        <input  type="text" class="form-control" id="" name="nama_admin" value="<?php echo $row['NAME'];?>">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input  type="text" class="form-control" id="" name="uname_admin" value="<?php echo $row['UNINAME'];?>">
                    </div>
                    
                    
                    
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-close">Batal</button>
                </form>

            </div>
        </div>
    </div>
<?php }}?>


 
<?php
    include 'dbo.php';
    error_reporting(0);
    if($_GET["form-produk"]=="add"){
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i> Tambah Data Produk</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
            </div>
            <div class="box-content">
                <form role="form" action="crud/produk/create.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Produk</label>
                        <input required="required" type="text" class="form-control" name="judul" id="" placeholder="">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input required="required" type="text" class="form-control" name="harga" id="" placeholder="">
                    </div>
                   
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input required="required" type="text" class="form-control" name="deskripsi" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Penjual</label>
                        <input required="required" type="text" class="form-control" name="penjual" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">No. Telp</label>
                        <input required="required" type="text" class="form-control" name="telp" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input required="required" type="text" class="form-control" name="lokasi" id="" placeholder="">
                    </div>
                    
                    <div class="form-group">
                                    <label>Gambar</label>
                                    <input class="form-control" type="file" name="gambar" required="required">
                                </div>
                    <button type="submit" class="btn btn-primary" name="save">Simpan</button>
                    <button type="reset" class="btn btn-close">Batal</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>
 <?php } ?>


 
 <?php
    if($_GET["form-produk"]=="edit"){
    $id = $_GET["id"];
    $sql = mysql_query("select * from tb_produk where ID='$id'")
        	or die ("Error Query : ".mysql_error());
    if($row=mysql_fetch_array($sql)){    
?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-pencil"></i> Ubah Data Produk</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                     </div>
            </div>
            <div class="box-content">
                <form role="form" name="editadmin" action="crud/produk/update.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Produk</label>
									<input type="hidden" name="id" value="<?php  echo $row['ID'];?>">
                        <input type="text" class="form-control" name="judul" id="" placeholder="" value="<?php echo $row['JUDUL'];?>">
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input  type="text" class="form-control" name="harga" id="" placeholder="" value="<?php echo $row['HARGA'];?>">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input  type="text" class="form-control" name="deskripsi" id="" placeholder="" value="<?php echo $row['DESKRIPSI'];?>">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Penjual</label>
                        <input  type="text" class="form-control" name="penjual" id="" placeholder="" value="<?php echo $row['PENJUAL'];?>">
                    </div>
                    <div class="form-group">
                        <label for="">No. Telp</label>
                        <input  type="text" class="form-control" name="telp" id="" placeholder="" value="<?php echo $row['TELP'];?>">
                    </div>
                    <div class="form-group">
                        <label for="">Lokasi</label>
                        <input  type="text" class="form-control" name="lokasi" id="" placeholder="" value="<?php echo $row['LOKASI'];?>">
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label><br>
						<img style="width:250px;height:150px" <?php  echo '<img src="img/'. $row['GAMBAR'] .'">';?>
                                    <input class="form-control" type="file" name="gambar" >
                                
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Simpan</button>
                    <button type="reset" class="btn btn-close">Batal</button>
                </form>

            </div>
        </div>
    </div>
    <?php }}?>


 <?php
    if($_GET["profil"]=="edit"){
    
?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-pencil"></i> Ubah Profil</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                     </div>
            </div>
            <div class="box-content">
                <form role="form" name="editprofil" action="crud/profil/update.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
					<input type="hidden" name="id" value="<?php  $_SESSION['adminid'];?>">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="" placeholder="" value="<?php echo $_SESSION['adminname'];?>">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input  type="text" class="form-control" name="uname" id="" placeholder="" value="<?php echo $_SESSION['adminuname'];?>">
                    </div>
					
           <h5><a href="index.php?form-pass=edit&id=<?php echo $_SESSION['adminid'];?>" class="glyphicon glyphicon-plus-sign "> Ubah Password</a></h5>
                    
                    
                    
                    <button type="submit" class="btn btn-primary" name="save">Simpan</button>
                    <button type="reset" class="btn btn-close">Batal</button>
                </form>

            </div>
        </div>
    </div>
    <?php }?>

	<?php
    if($_GET["form-pass"]=="edit"){
    
?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-pencil"></i> Ubah Password</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                     </div>
            </div>
            <div class="box-content">
                <form role="form" name="editpass" action="crud/pass/update.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Password Lama</label>
                        <input type="text" class="form-control" name="passlama" id="" placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Password Baru</label>
                        <input  type="text" class="form-control" name="passbaru" id="" placeholder="" value="">
                    </div>
					<div class="form-group">
                        <label for="">Konfirmasi Password Baru</label>
                        <input  type="text" class="form-control" name="passbaru2" id="" placeholder="" value="">
                    </div>
					
                    
                    
                    
                    <button type="submit" class="btn btn-primary" name="save">Simpan</button>
                    <button type="reset" class="btn btn-close">Batal</button>
                </form>

            </div>
        </div>
    </div>
    <?php }?>
