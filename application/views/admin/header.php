<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $judul; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/waves.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/all-themes.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/moris.css">
    <link href="<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/sweetalert/sweetalert.css" rel="stylesheet" />
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url ()?>/assets/sweetalert/sweetalert.min.js"></script>
	<!-- JQuery DataTable Css -->
    <link href="<?php echo base_url ()?>/assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<!-- Multi Select Css -->
    <link href="<?php echo base_url ()?>/assets/plugins/multi-select/css/multi-select.css" rel="stylesheet">
	
    <link href="<?php echo base_url(); ?>/assets/multiselect/css/multi-select.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/bsb/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/bsb/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/bsb/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>/assets/bsb/plugins/nestable/jquery-nestable.css" rel="stylesheet" />
   
  </head>
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Silahkan Tunggu...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
   
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url("/admin/index"); ?>"><B>SISTEM INFORMASI E POSYANDU</B></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                     <!-- Call Search -->
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   <li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                   	<li class="dropdown"></li>
                    <!-- #END# Notifications -->
					
                    <!-- Tasks -->
                    <li class="dropdown">
                         <a href="<?php echo base_url("app/logout"); ?>">Keluar</a>
                       
                    </li>
                    <!-- #END# Tasks -->
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->

 <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
				<!-- bagian naimpilin gambar/logo -->
                    <img src="<?php echo base_url(); ?>assets/img/logo.jpg" width="70" height="80" alt="User" /> <font color="white"><b>ADMIN</b></font>
                </div>
           
                <div class="info-container">
                    
                    <div class="btn-group user-helper-dropdown">
                       
                        </ul>
                    </div>
                </div>
            </div>

            <!-- #User Info -->
            <!-- bagian Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                    <li class="active">
                        <a href="<?php echo base_url()?>admin/index">
                            <i class="fa fa-home" ><span>Home</span></i> 
                        </a>
                    </li>
				<li><a href="<?php echo base_url("admin/data_balita")?>"><i class="fa fa-file"> <span>Data Balita</span></i></a></li>
				<li><a href="<?php echo base_url("admin/data_imunisasi")?>"><i class="fa fa-file"> <span>Data Imunisasi</span></i></a></li>
				<li><a href="<?php echo base_url("admin/data_gizi")?>"><i class="fa fa-file"> <span>Data Vitamin</span></i></a></li>
				<li><a href="<?php echo base_url("admin/data_informasi")?>"><i class="fa fa-file"> <span>Data Informasi</span></i></a></li>
				<!-- <li><a href="<?php //echo base_url("admin/data_ibuhamil")?>"><i class="fa fa-file"> <span>Data Ibuhamil</span></i></a></li> -->
				<li><a href="<?php echo base_url("admin/sms_broadcase")?>"><i class="fa fa-file"> <span>Broadcase</span></i></a></li>
				<li>
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="fa fa-file"><span>Master </span> </i> 
					</a>
                        <ul class="ml-menu" style="display: none;">
               	                <li><a href="<?php echo base_url("admin/master_imunisasi"); ?>" class=" waves-effect waves-block"><i class="fa fa-arrow-circle-right"> Master Imunisasi</i></a></li>
               	                <li><a href="<?php echo base_url("admin/master_admin"); ?>" class=" waves-effect waves-block"><i class="fa fa-arrow-circle-right"> Master Admin</i></a></li>
								<!-- <li><a href="<?php //echo base_url("admin/master_ibuhamil"); ?>" class=" waves-effect waves-block"><i class="fa fa-arrow-circle-right"> Master Ibu Hamil </i></a></li> -->
				        </ul>
                </li>
				
				<li><a href="<?php echo base_url("admin/laporan")?>"><i class="fa fa-print"> <span>Laporan</span></i></a></li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- bagian Footer menu -->
            <div class="legal">
                <div class="copyright">
                    &copy; 20<?php echo date('y'); ?> <a href="#">Miftah Darojat</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

	  