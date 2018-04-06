<?php
    include 'dbo.php';
    error_reporting(0);
    if($_GET["form-admin"]=="add"){
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Tambah Admin</h2>

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