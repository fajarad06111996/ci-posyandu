<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $judul; ?></title>

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

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('<?php echo base_url("assets/img/dh1.png"); ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>KEGIATAN POSYANDU</h3>
              <p></p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php echo base_url("assets/img/dh2.jpg"); ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>KEGIATAN POSYANDU</h3>
              <p></p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php echo base_url("assets/img/dh3.jpg"); ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>KEGIATAN POSYANDU</h3>
              <p></p>
            </div>
          </div>
		  <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php echo base_url("assets/img/dh4.jpg"); ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>KEGIATAN POSYANDU</h3>
              <p></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">INFORMASI POSYANDU</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
	  <?php foreach($tampil_informasi as $v) { ?>
	<?php $potong = $v->isi;
	 $isi = substr($potong, 3, 50);
	  ?>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header"><?php echo $v->judul_informasi; ?></h4>
            <div class="card-body">
              <p class="card-text"><?php echo $isi; ?></p>
            </div>
            <div class="card-footer">
              <a href="<?php echo base_url("dashboard/detail_informasi/$v->id_informasi"); ?>" class="btn btn-primary">Lihat</a>
            </div>
          </div>
        </div>
	  <?php } ?>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
     
      <!-- /.row -->

      <!-- Features Section -->
      
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      

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
