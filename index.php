<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>tugas crud film</title>

  <!-- Bootstrap -->
  <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="assets/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="assets/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <center>
              &nbsp; <a href="index.php" class="fa fa-film fa-2x " style="color:#fff;"><span>
                  <font size="4.95" color="white" face="Helvetica Neue">SEWA FILM.ID</font>
                </span></a>
            </center>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="assets/images/admin.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Admin</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
                </li>
                <li><a href="#"><i class="fa fa-desktop"></i> Data Customer <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php?page=tampil_customer">Tampil Data</a></li>
                    <li><a href="index.php?page=tambah_customer">Tambah Data</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Data Kelompok Film <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php?page=tampil_film">Tampil Data </a></li>
                    <li><a href="index.php?page=tambah_film">Tambah Data</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Data Film <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php?page=tampil_filem">Tampil Data </a></li>
                    <li><a href="index.php?page=tambah_filem">Tambah Data</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open">
                <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="assets/images/admin.jpg" alt="">Admin
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content - HALAMAN UTAMA ISI DISINI -->
      <div class="right_col" role="main">
        <?php
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        switch ($queries['page']) {
          case 'tampil_customer':
            # code...
            include 'customer/tampilcustomer.php';
            break;
          case 'tambah_customer':
            # code...
            include 'customer/tambah.php';
            break;
          case 'edit_customer':
            # code...
            include 'customer/edit.php';
            break;
          case 'edit_customer_save':
            # code...
            include 'customer/edit.php';
            break;
          case 'hapus_customer':
            # code...
            include 'customer/hapus.php';
            break;
          case 'tampil_film':
            # code...
            include 'kelompokfilm/tampilfilm.php';
            break;
          case 'tambah_film':
            # code...
            include 'kelompokfilm/tambahfilm.php';
            break;
          case 'edit_film':
            # code...
            include 'kelompokfilm/editfilm.php';
            break;
          case 'edit_film_save':
            # code...
            include 'kelompokfilm/editfilm.php';
            break;
          case 'hapus_film':
            # code...
            include 'kelompokfilm/hapusfilm.php';
            break;
          case 'tampil_filem':
            # code...
            include 'film/tampilfilm.php';
            break;
          case 'tambah_filem':
            # code...
            include 'film/tambahfilm.php';
            break;
          case 'edit_filem':
            # code...
            include 'film/edit.php';
            break;
          case 'edit_filem_save':
            # code...
            include 'film/edit.php';
            break;
          case 'hapus_filem':
            # code...
            include 'film/hapus.php';
            break;
          default:
            #code...
            include 'home.php';
            break;
        }
        ?>
      </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Copyright @ 2021 sewafilm.id
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
  <!-- /page content -->


  <!-- jQuery -->
  <script src="assets/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="assets/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="assets/nprogress/nprogress.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="assets/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="assets/skycons/skycons.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="assets/js/custom.min.js"></script>

</body>

</html>