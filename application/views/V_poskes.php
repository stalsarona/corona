<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" type="ico" href="<?php echo base_url()?>assets/images/logo.ico">
  <title>Informasi Covid-19</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/newcovid.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300&display=swap" rel="stylesheet">
  <!-- open sans -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <!-- Resources -->
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/kelly.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
    <style>
        .main-header{
            border-bottom: 0 !important;
        }
        .navbar{
            padding: .6rem .5rem;
        }
        .navbar-white{
            background: linear-gradient(35deg, rgb(4 98 197), #007bffd4);
        }
        
        .navbar-light .navbar-brand{
            color:white;
        }
        .navbar-light .navbar-nav .nav-link{
            color: white;
        }
        .navbar-light .navbar-nav .nav-link {
            color: white !important;
        }
        .card-poskes {
          min-width: 320px; 
          min-height:81px;
        }
    </style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?php echo base_url('informasi-covid19');?>" class="navbar-brand">
        <img src="<?php echo base_url()?>assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-bold">RSUD TUGUREJO V1</span>
      </a>
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!--  Scope Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="http://api.rstugurejo.jatengprov.go.id:8000/booking/" class="nav-link font-weight-bold">Booking</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle active font-weight-bold">Informasi</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?php echo site_url() ?>" class="dropdown-item">Deteksi Awal Covid-19</a></li>
              <li><a href="<?php echo site_url('informasi-covid19')?>" class="dropdown-item active">Informasi Covid-19</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('informasi/pemeriksaan-covid19')?>" class="nav-link font-weight-bold">Pemeriksaan Covid-19</a>
          </li>
        </ul>
        <!--  Scope Left navbar links -->
      </div>

      <!-- Scope Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <?php echo $this->session->userdata('username')?>
            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB4Ij48Zz48cGF0aCBkPSJtMjU2IDAtMTYwLjM5OCAyNTYgMTYwLjM5OCAyNTZjMTQxLjM4NSAwIDI1Ni0xMTQuNjE1IDI1Ni0yNTZzLTExNC42MTUtMjU2LTI1Ni0yNTZ6IiBmaWxsPSIjMjhhYmZhIi8+PHBhdGggZD0ibTAgMjU2YzAgMTQxLjM4NSAxMTQuNjE1IDI1NiAyNTYgMjU2di01MTJjLTE0MS4zODUgMC0yNTYgMTE0LjYxNS0yNTYgMjU2eiIgZmlsbD0iIzE0Y2ZmZiIvPjxwYXRoIGQ9Im0yNTYgNjAtNjUuNzg4IDEwNSA2NS43ODggMTA1YzU3Ljk5IDAgMTA1LTQ3LjAxIDEwNS0xMDVzLTQ3LjAxLTEwNS0xMDUtMTA1eiIgZmlsbD0iIzM3M2U5ZiIvPjxwYXRoIGQ9Im0xNTEgMTY1YzAgNTcuOTkgNDcuMDEgMTA1IDEwNSAxMDV2LTIxMGMtNTcuOTkgMC0xMDUgNDcuMDEtMTA1IDEwNXoiIGZpbGw9IiM2MjQxZWEiLz48cGF0aCBkPSJtNDI0LjY0OSAzMzUuNDQzYy0xOS45MzMtMjIuNTI1LTQ4LjYtMzUuNDQzLTc4LjY0OS0zNS40NDNoLTkwbC02MCA3NiA2MCA3NmM3MC4zMjIgMCAxMzUuNjM2LTM4LjAxIDE3MC40NTQtOTkuMTk4bDUuMzA2LTkuMzI1eiIgZmlsbD0iIzM3M2U5ZiIvPjxwYXRoIGQ9Im0xNjYgMzAwYy0zMC4wNDkgMC01OC43MTYgMTIuOTE4LTc4LjY0OSAzNS40NDNsLTcuMTEgOC4wMzUgNS4zMDYgOS4zMjVjMzQuODE3IDYxLjE4NyAxMDAuMTMxIDk5LjE5NyAxNzAuNDUzIDk5LjE5N3YtMTUyeiIgZmlsbD0iIzYyNDFlYSIvPjwvZz48L3N2Zz4K"
            alt="RSUD TUGUREJO" class="brand-image img-circle elevation-3" style="opacity: .8" />
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="position: absolute;">
              <a href="<?php echo site_url('signin')?>" class="dropdown-item">
                <div class="media">
                  <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiMxMTM4Rjc7IiBkPSJNMjU1LjE1LDUxMS4xNUg2My43ODdDMjguNjE5LDUxMS4xNSwwLDQ4Mi41MywwLDQ0Ny4zNjJWNjQuNjM4QzAsMjkuNDcsMjguNjE5LDAuODUsNjMuNzg3LDAuODUgICBIMjU1LjE1YzExLjczNywwLDIxLjI2Miw5LjUyNiwyMS4yNjIsMjEuMjYycy05LjUyNiwyMS4yNjItMjEuMjYyLDIxLjI2Mkg2My43ODdjLTExLjcxNiwwLTIxLjI2Miw5LjU0Ny0yMS4yNjIsMjEuMjYydjM4Mi43MjQgICBjMCwxMS43MzcsOS41NDcsMjEuMjYyLDIxLjI2MiwyMS4yNjJIMjU1LjE1YzExLjczNywwLDIxLjI2Miw5LjUwNCwyMS4yNjIsMjEuMjYyQzI3Ni40MTIsNTAxLjY0NSwyNjYuODg2LDUxMS4xNSwyNTUuMTUsNTExLjE1eiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6IzExMzhGNzsiIGQ9Ik00NDYuNTEyLDI3Ny4yNjJoLTI1NS4xNWMtMTEuNzM3LDAtMjEuMjYyLTkuNTA0LTIxLjI2Mi0yMS4yNjIgICBjMC0xMS43MzcsOS41MjYtMjEuMjYyLDIxLjI2Mi0yMS4yNjJoMjU1LjE1YzExLjc1OCwwLDIxLjI2Miw5LjUyNiwyMS4yNjIsMjEuMjYyQzQ2Ny43NzQsMjY3Ljc1OCw0NTguMjcsMjc3LjI2Miw0NDYuNTEyLDI3Ny4yNjIgICB6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMTEzOEY3OyIgZD0iTTM2MS40NjIsNDA0LjgzN2MtNS40ODYsMC0xMC45NzEtMi4xMjYtMTUuMTM5LTYuMzM2Yy04LjI1LTguMzU2LTguMTY1LTIxLjgxNSwwLjIxMy0zMC4wNjUgICBMNDYwLjQ2LDI1NkwzNDYuNTM2LDE0My41NjRjLTguMzc3LTguMjUtOC40NDEtMjEuNzA5LTAuMjEzLTMwLjA4NmM4LjIyOS04LjM3NywyMS43My04LjQ0MSwzMC4wNjUtMC4xOTFsMTI5LjI3NiwxMjcuNTc1ICAgYzQuMDQsMy45OTcsNi4zMzYsOS40NDEsNi4zMzYsMTUuMTM5cy0yLjI3NSwxMS4xMi02LjMzNiwxNS4xMzlMMzc2LjM4OCwzOTguNzE0QzM3Mi4yNjMsNDAyLjc5NiwzNjYuODYyLDQwNC44MzcsMzYxLjQ2Miw0MDQuODM3ICAgeiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo="
                  alt="User Avatar" class="img-size-50 mr-3 img-circle" style="height: 20px;">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Sign In
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                  </div>
                </div>
              </a>
          </div>
        </li>        
      </ul>
      <!-- Scope Right navbar links -->
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="jumbotron jumbotron-fluid navbar-white">
    <div class="container">
        <h1 class="display-4 text-white">Cakupan Pemeriksaan Covid-19</h1>
        <p class="lead text-white" id="time_poskes">Semua data merupakan data terbaru. Update terakhir pada 20 November 2020.</p>
        <hr class="my-4" style="background:lightblue">
        <p class="text-white "><b>#INGATPESANIBU</b> disiplin protokol kesehatan dan jaga hati yang ada.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Deteksi Awal</a>
        </p>
    </div>
  </div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <small></small></h1>
          </div>
          <div class="col-sm-6"></div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- /.content -->
    <div class="content">
      <div class="container container-total-case">
        <div class="row">
          <div class="col-md-12" data-aos="fade-up">
            <div class="row">
              <div class="col-md-12">
                <h2 class="display-4 text-gray">RAPID ANTIGEN COVID-19</h2>
              </div>
              <hr class="my-4" style="background:lightblue">
              <div class="col-md-4 text-right">
                <div class="card text-white bg-primary mb-3 d-inline-block card-poskes">
                  <div class="card-header">Informasi</div>
                  <div class="card-body">
                    <h5 class="card-title"><b>TOTAL : </b></h5>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <p class="card-text">Keseluruhan rapid antigen covid-19 : <b id="total-rapid">100</b></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-right">
                <div class="card text-white bg-primary mb-3 d-inline-block card-poskes">
                  <div class="card-header">Informasi</div>
                  <div class="card-body">
                    <h5 class="card-title"><b>TOTAL : </b></h5>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <p class="card-text">Hasil <b>positif</b> rapid antigen covid-19 : <b id="positif-rapid">100</b></p>
                    </div>  
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-right">
                <div class="card text-white bg-primary mb-3 d-inline-block card-poskes">
                  <div class="card-header">Informasi</div>
                  <div class="card-body">
                    <h5 class="card-title"><b>TOTAL : </b></h5>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <p class="card-text">Hasil <b>negatif</b> rapid antigen covid-19 : <b id="negatif-rapid">100</b></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mt-2">
                <h2 class="display-4 text-gray">RT PCR SARS-CoV-2</h2>
              </div>
              <div class="col-md-4 text-right">
                <div class="card text-white bg-success mb-3 d-inline-block card-poskes">
                  <div class="card-header">Informasi</div>
                  <div class="card-body">
                    <h5 class="card-title"><b>TOTAL : </b></h5>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <p class="card-text">Keseluruhan RT PCR SARS-CoV-2 : <b id="total-pcr">100</b></p>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="col-md-4 text-right">
                <div class="card text-white bg-success mb-3 d-inline-block card-poskes">
                  <div class="card-header">Informasi</div>
                  <div class="card-body">
                    <h5 class="card-title"><b>TOTAL : </b></h5>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <p class="card-text">Hasil <b>positif</b> RT PCR SARS-CoV-2 : <b id="positif-pcr">100</b></p>
                    </div>
                   </div>
                </div>
              </div>
              <div class="col-md-4 text-right">
                <div class="card text-white bg-success mb-3 d-inline-block card-poskes">
                  <div class="card-header">Informasi</div>
                  <div class="card-body">
                    <h5 class="card-title"><b>TOTAL : </b></h5>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <p class="card-text">Hasil <b>negatif</b> RT PCR SARS-CoV-2 : <b id="negatif-pcr">100</b></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer text-center navbar-white text-white">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a class="text-white" href="https://rstugurejo.jatengprov.go.id">RSUD TUGUREJO PROVINSI JAWA TENGAH</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
  $(function () {
    const showDataPoskes = () => {
      $.ajax({
        url: "<?php echo base_url('poskes/dataPoskes')?>",
        method: "GET",
        dataType: "JSON",
        success: function(data){
          const time_poskes = `Semua data merupakan data terbaru. Update terakhir pada ${data.last_update}.`
          $('#time_poskes').html(time_poskes)
          $('#total-rapid').html(data.rapid.total);
          $('#positif-rapid').html(data.rapid.positif);
          $('#negatif-rapid').html(data.rapid.negatif);
          $('#total-pcr').html(data.pcr.total);
          $('#positif-pcr').html(data.pcr.positif);
          $('#negatif-pcr').html(data.pcr.negatif);
        }
      });
    }
    showDataPoskes();

  });
 AOS.init();
</script>
</body>
</html>
