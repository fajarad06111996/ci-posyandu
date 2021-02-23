<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets_db/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets_db/css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">E POSYANDU PULAU PANGGUNG</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('dashboard/index'); ?>">Home</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="<?php //echo base_url('dashboard/index'); ?>">Informasi</a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Akun
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="<?php echo base_url("app/index"); ?>">Login Admin</a>
                <a class="dropdown-item" href="<?php echo base_url("app/login_balita"); ?>">Login User</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
	  <?php foreach($detail_informasi as $v) { ?>
      <h1 class="mt-4 mb-3"><?php echo $v->judul_informasi; ?>
        <small>
          
        </small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('dashboard/index'); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Informasi</li>
      </ol>

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">

          <!-- Preview Image
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">  -->

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?php echo tgl_indo($v->tgl_informasi); ?></p>

          <hr>
			<?php echo $v->isi; ?>
          <hr>
	  <?php } ?>
          <!-- Comments Form -->
         

          <!-- Single Comment -->
          
          <!-- Comment with nested comments -->
          

        </div>

        <!-- Sidebar Widgets Column -->
        

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; E POSYANDU 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets_db/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets_db/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
