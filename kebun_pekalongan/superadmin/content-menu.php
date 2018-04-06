<?php 
            include 'dbo.php';
            function jmladm(){
            $sql = mysql_query("select * from user_pengguna")
                    or die ("Error Query ".mysql_error());
            $jml = mysql_num_rows($sql);
            echo $jml;
            }
            function jmluser(){
            $sql1 = mysql_query("select * from user_pembeli")
                    or die ("Error Query ".mysql_error());
            $jml1 = mysql_num_rows($sql1);
            echo $jml1;
            }
            function jmldist(){
            $sql = mysql_query("select * from distributor")
                    or die ("Error Query ".mysql_error());
            $jml2 = mysql_num_rows($sql);
            echo $jml2;
            }
            
            function jmlproduk(){
            $sql = mysql_query("select * from produk")
                    or die ("Error Query ".mysql_error());
            $jml3 = mysql_num_rows($sql);
            echo $jml3;
            
            }
            ?>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="" class="well top-block" href="index.php?page=admin">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Administrator</div>
            
            <div><?php echo jmladm();?></div>
            <span class="notification"></span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="" class="well top-block" href="index.php?page=user">
            <i class="glyphicon glyphicon-user green"></i>

            <div>Total User</div>
            <div><?php echo jmluser();?></div>
            <span class="notification green"></span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="" class="well top-block" href="index.php?page=distributor">
            <i class="glyphicon glyphicon-user red"></i>

            <div>Total Distributor</div>
            <div><?php echo jmldist();?></div>
            <span class="notification red"></span>
        </a>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="" class="well top-block" href="index.php?page=produk">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>Total Produk</div>
            <div><?php echo jmlproduk();?></div>
            <span class="notification yellow"></span>
        </a>
    </div>

    
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Introduction</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-7 col-md-12">
                    <h1>Kebun Pekalongan <br>
                        <small></small>
                    </h1>
                    <p>
                        adalah Aplikasi berbasis Android yang dibuat dengan tujuan mengembangkan UMKM yang ada di Kabupaten Pekalongan. Aplikasi ini dibuat oleh Agung Arie Nugroho, Alisa Yuliana, Dessy Amaliya Dwi R. P dan Rohtiman dari Akademi Komunitas Negeri Kajen, Pekalongan.
                    </p>

           

                    
                </div>
               
                

            </div>
        </div>
    </div>
</div>