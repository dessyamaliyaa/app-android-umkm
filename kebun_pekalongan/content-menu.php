<?php 
            include 'dbo.php';
            function jmladm(){
            $sql = mysql_query("select * from tb_admin")
                    or die ("Error Query ".mysql_error());
            $jml = mysql_num_rows($sql);
            echo $jml;
            }
            
            
            
            function jmlproduk(){
            $sql = mysql_query("select * from tb_produk")
                    or die ("Error Query ".mysql_error());
            $jml3 = mysql_num_rows($sql);
            echo $jml3;
            
            }
            ?>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="index.php?page=admin">
            <i class="glyphicon glyphicon-user"></i>

            <div>Total Administrator</div>
            
            <div><?php echo jmladm();?></div>
        </a>
    </div>

    

    
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="" class="well top-block" href="index.php?page=produk">
            <i class="glyphicon glyphicon-shopping-cart"></i>

            <div>Total Produk</div>
            <div><?php echo jmlproduk();?></div>
        </a>
    </div>

    
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Tentang</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-7 col-md-12">
                    <h1>Kebun Pekalongan <br>
                        <small></small>
                    </h1>
                    <p>
                        adalah Aplikasi berbasis Android yang dibuat dengan tujuan mewadahi UMKM yang ada di Kabupaten Pekalongan. Aplikasi ini dibuat oleh Agung Arie Nugroho, Alisa Yuliana, Dessy Amaliya Dwi R. P dan Rohtiman dari Akademi Komunitas Negeri Kajen, Pekalongan.
                    </p>

           

                    
                </div>
               
                

            </div>
        </div>
    </div>
</div>