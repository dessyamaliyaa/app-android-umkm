<?php
if(@$_SESSION['level'] == "admin"){
 die("You not allowed to access this page!");
 }
 
 //@setting connection ke databse

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Admin Kebun Pekalongan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    
    <!-- topbar starts -->
    <?php include ('header.php');?>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <?php include 'left-menu.php';?>
                    </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Beranda</a>
        </li>
 <?php 
                error_reporting(0);
                
                if($_GET["page"]=="admin"){
                    ?> <li><a href="super.php?page=admin">Administrator</a></li>  <?php
                }
                
                else if($_GET["form-admin"]=="add"){
                    ?> <li><a href="super.php?page=admin">Administrator</a></li>  <?php
                }
                
                else if($_GET["form-admin"]=="edit"){
                    ?> <li><a href="super.php?page=admin">Administrator</a></li>  <?php
                }
                
                else if($_GET["page"]=="distributor"){
                    ?> <li><a href="super.php?page=distributor">Distributor</a></li>  <?php
                }
                
                else if($_GET["form-distributor"]=="add"){
                    ?> <li><a href="super.php?page=distributor">Distributor</a></li>  <?php
                }
                
                else if($_GET["form-distributor"]=="edit"){
                    ?> <li><a href="super.php?page=distributor">Distributor</a></li>  <?php
                }
                else if($_GET["page"]=="produk"){
                    ?> <li><a href="super.php?page=produk">Produk</a></li> <?php
                }
                
                else if($_GET["form-produk"]=="add"){
                    ?> <li><a href="super.php?page=produk">Produk</a></li> <?php
                }
                
                else if($_GET["form-produk"]=="edit"){
                    ?> <li><a href="super.php?page=produk">Produk</a></li> <?php
                }
                else if($_GET["page"]=="kategori"){
                    ?> <li><a href="super.php?page=kategori">Kategori</a></li> <?php
                }
                
                else if($_GET["form-kategori"]=="add"){
                    ?> <li><a href="super.php?page=kategori">Kategori</a></li> <?php
                }
                
                else if($_GET["form-kategori"]=="edit"){
                    ?> <li><a href="super.php?page=kategori">Kategori</a></li>  <?php
                }
                
                else {
                    ?> <li><a href="super.php"></a></li> <?php
                }
                
            ?>       
    </ul>
</div>
<?php 
                
                error_reporting(0);
                if($_GET["page"]=="admin"){
                    include ('tabel.php');
                }
                
                else if($_GET["form-admin"]=="add"){
                    include ('form.php');
                }
                
                else if($_GET["form-admin"]=="edit"){
                    include ('form.php');
                }
                
                else if($_GET["page"]=="kategori"){
                    include ('tabel.php');
                }
                
                else if($_GET["form-kategori"]=="add"){
                    include ('form.php');
                }
                
                else if($_GET["form-kategori"]=="edit"){
                    include ('form.php');
                }
                
                else if($_GET["page"]=="distributor"){
                    include ('tabel.php');
                }
                
                else if($_GET["form-distributor"]=="add"){
                    include ('form.php');
                }
                
                else if($_GET["form-distributor"]=="edit"){
                    include ('form.php');
                }
                else if($_GET["page"]=="produk"){
                    include ('tabel.php');
                }
                
                else if($_GET["form-produk"]=="add"){
                    include ('form.php');
                }
                
                else if($_GET["form-produk"]=="edit"){
                    include ('form.php');
                }
                
                else {
                    include ('content-menu.php');
                }
                
                
            ?>




    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

       
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="#" target="_blank">Kebun Pekalongan v.1.0</a> 2017</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>
