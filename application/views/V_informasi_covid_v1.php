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
    </style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
<?php 
$total_global = $data['status'][0]['SEMBUH'] + $data['status'][0]['DIRAWAT'] + $data['status'][0]['MENINGGAL'] + $data['status'][0]['REACTIVE'] + $data['status'][0]['ISOMANDIRI'] + $data['status'][0]['ISORUMDIN'];
$persen_sembuh = ($data['status'][0]['SEMBUH'] != 0) ? $data['status'][0]['SEMBUH']/$total_global*100 : 0;
$persen_drwt = ($data['status'][0]['DIRAWAT'] != 0) ? $data['status'][0]['DIRAWAT']/$total_global*100 : 0;
$persen_mnggal = ($data['status'][0]['MENINGGAL'] != 0) ? $data['status'][0]['MENINGGAL']/$total_global*100 : 0;
$persen_reactive = ($data['status'][0]['REACTIVE'] != 0) ? $data['status'][0]['REACTIVE']/$total_global*100 : 0;
$persen_isoman = ($data['status'][0]['ISOMANDIRI'] != 0) ? $data['status'][0]['ISOMANDIRI']/$total_global*100 : 0;
$persen_isorudin = ($data['status'][0]['ISORUMDIN'] != 0) ? $data['status'][0]['ISORUMDIN']/$total_global*100 : 0;

$total_confirm_dew = $data['status'][0]['RIDWS_CONFIRMSEMBUH'] + $data['status'][0]['RIDWS_CONFIRMRAWATISO'] + $data['status'][0]['RIDWS_CONFIRMMATI'];
$total_confirm_ank = $data['status'][0]['RIAN_CONFIRMSEMBUH'] + $data['status'][0]['RIAN_CONFIRMRAWATISO'] + $data['status'][0]['RIAN_CONFIRMMATI'];
$total_confirm = $total_confirm_dew + $total_confirm_ank;

$total_sus_dew = $data['status'][0]['RIDWS_SUSPEKSEMBUH'] + $data['status'][0]['RIDWS_SUSPEKRAWAT'] + $data['status'][0]['RIDWS_SUSPEKMATI'];
$total_sus_ank = $data['status'][0]['RIAN_SUSPEKSEMBUH'] + $data['status'][0]['RIAN_SUSPEKRAWAT'] + $data['status'][0]['RIAN_SUSPEKMATI'];
$total_suspect = $total_sus_dew + $total_sus_ank;

$total_rj_dew = $data['status'][0]['RJDWS_SEMBUH'] + $data['status'][0]['RJDWS_REACTIVE'] + $data['status'][0]['RJDWS_CONFIRMISOMANDIRI'] + $data['status'][0]['RJDWS_CONFIRMISORUMDIN'];
$total_rj_ank = $data['status'][0]['RJAN_SEMBUH'] + $data['status'][0]['RJAN_REACTIVE'] + $data['status'][0]['RJAN_CONFIRMISOMANDIRI'] + $data['status'][0]['RJAN_CONFIRMISORUMDIN'];
$total_rj = $total_rj_dew + $total_rj_ank;
?>
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
        <h1 class="display-4 text-white">Informasi Covid</h1>
        <p class="lead text-white">Semua data merupakan data terbaru. Update terakhir pada 20 November 2020.</p>
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
    <div class="content">
      <div class="container container-chartrekap chartRekap" >
        <div class="row">
          <div class="col-md-12" data-aos="fade-in">
            <div class="card card-primary radius-chart">
              <div class="card-header radius-chart-header">
                <div class="card-title"> Pergerakan Total Kasus Pasien Covid-19</div>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="statistik_rekapbulan" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div id="chartRekapBulan" class="chartdiv"></div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card card-primary radius-chart">
                        <div class="card-header radius-chart-header">
                          <div class="card-title"> Persentase Kesembuhan Pasien Covid-19</div>
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="statistik_persentaseSembuh" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                          </div>
                        </div>
                        <div class="card-body">
                          <div id="chartPersentaseSembuh" class="chartdiv"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card card-primary radius-chart">
                        <div class="card-header radius-chart-header">
                          <div class="card-title"> Persentase Kematian Pasien Covid-19</div>
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="statistik_persentaseKematian" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                          </div>
                        </div>
                        <div class="card-body">
                          <div id="chartPersentaseKematian" class="chartdiv"></div>
                        </div>
                      </div>
                    </div>
                  </div>               
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card card-primary radius-chart">
                        <div class="card-header radius-chart-header">
                          <div class="card-title"> Pasien Covid-19 Berdasarkan Jenis Kelamin</div>
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="statistik_gender" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                          </div>
                        </div>
                        <div class="card-body">
                          <div id="chartGender" class="chartdiv"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card card-primary radius-chart">
                        <div class="card-header radius-chart-header">
                          <div class="card-title"> Pasien Covid-19 Berdasarkan Jenis Usia</div>
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="statistik_age" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                          </div>
                        </div>
                        <div class="card-body">
                          <div id="chartAge" class="chartdiv"></div>
                        </div>
                      </div>
                    </div>
                  </div>                 
                </div>               
              </div> 
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>            
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- /.content -->
    <div class="content">
      <div class="container container-total-case">
        <div class="row">
          <div class="col-md-12" data-aos="fade-up">
            <div class="row">
              <div class="col-md-4 text-right">
                <div class="card text-white bg-primary mb-3 d-inline-block" style="max-width: 25rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="card text-white bg-success mb-3 d-inline-block" style="max-width: 25rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-left">
                <div class="card text-white bg-danger mb-3 d-inline-block" style="max-width: 25rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-right">
                <div class="card text-white bg-secondary mb-3 d-inline-block" style="max-width: 25rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="card text-white bg-warning mb-3 d-inline-block" style="max-width: 25rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-left">
                <div class="card text-white bg-info mb-3 d-inline-block" style="max-width: 25rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="content">
      <div class="rawat-inap">
        <div class="row">
          <div class="col-md-12" data-aos="fade-up">
            <div class="card card-primary radius-chart">
              <div class="card-header radius-chart-header">
                <div class="card-title new-title text-center">Rawat Inap</div>
                <div class="tools"></div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                      <div class="card-body text-center">
                        <div class="uppercase-text"><h2>confirm COVID-19 <span class="badge badge-danger"><b><?php echo $total_confirm ?></b></span></h2></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card radius-chart">
                      <div class="card-header radius-chart-header">
                        <div class="card-title uppercase-text">
                          <h3>dewasa &nbsp;  <span class="badge badge-danger"><?php echo $total_confirm_dew ?></span></h3>
                        </div>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool primary" data-card-widget="card-refresh" data-source="#" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                          <button type="button" class="btn btn-tool primary" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                          <button type="button" class="btn btn-tool primary" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                          
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-4 separator">
                            <div class="title-subcase text-center">sembuh</div>
                            <div class="round health text-center">
                              <div class="total-subcase-round">
                                <?php echo $data['status'][0]['RIDWS_CONFIRMSEMBUH']?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 separator">
                            <div class="title-subcase text-center">dirawat</div>
                            <div class="round treated text-center">
                              <div class="total-subcase-round">
                                <?php echo $data['status'][0]['RIDWS_CONFIRMRAWATISO']?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="title-subcase text-center">meninggal</div>
                            <div class="round death text-center">
                              <div class="total-subcase-round">
                                <?php echo $data['status'][0]['RIDWS_CONFIRMMATI']?>
                              </div>
                            </div>
                          </div>
                        </div>                       
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card radius-chart">
                      <div class="card-header radius-chart-header">
                        <div class="card-title uppercase-text">
                          <h3>anak &nbsp; <span class="badge badge-danger"><?php echo $total_confirm_ank ?></span></h3>
                        </div>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool primary" data-card-widget="card-refresh" data-source="#" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                          <button type="button" class="btn btn-tool primary" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                          <button type="button" class="btn btn-tool primary" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                          
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-4 separator">
                            <div class="title-subcase text-center">sembuh</div>
                            <div class="round health text-center">
                              <div class="total-subcase-round">
                                <?php echo $data['status'][0]['RIAN_CONFIRMSEMBUH'];?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 separator">
                            <div class="title-subcase text-center">dirawat</div>
                            <div class="round treated text-center">
                              <div class="total-subcase-round">
                                <?php echo $data['status'][0]['RIAN_CONFIRMRAWATISO'];?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="title-subcase text-center">meninggal</div>
                            <div class="round death text-center">
                              <div class="total-subcase-round">
                                <?php echo $data['status'][0]['RIAN_CONFIRMMATI'];?>
                              </div>
                            </div>
                          </div>
                        </div>                       
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="">
                      <div class="card-body text-center">
                        <div class=" uppercase-text"><h2>suspect COVID-19 <span class="badge badge-warning warning-new"><b><?php echo $total_suspect ?></b></span></h2></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card radius-chart">
                      <div class="card-header radius-chart-header">
                        <div class="card-title uppercase-text">
                          <h3>DEWASA &nbsp; <span class="badge badge-warning warning-new"><?php echo $total_sus_dew ?></span> </h3>
                        </div>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool primary" data-card-widget="card-refresh" data-source="statistik_age" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                          <button type="button" class="btn btn-tool primary" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                          <button type="button" class="btn btn-tool primary" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                          
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-4 separator">
                            <div class="title-subcase text-center">sembuh</div>
                            <div class="round health text-center">
                              <div class="total-subcase-round">
                                <?php echo $data['status'][0]['RIDWS_SUSPEKSEMBUH'] ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 separator">
                            <div class="title-subcase text-center">dirawat</div>
                            <div class="round treated text-center">
                              <div class="total-subcase-round">
                                <?php echo $data['status'][0]['RIDWS_SUSPEKRAWAT'] ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="title-subcase text-center">meninggal</div>
                            <div class="round death text-center">
                              <div class="total-subcase-round">
                                <?php echo $data['status'][0]['RIDWS_SUSPEKMATI'] ?>
                              </div>
                            </div>
                          </div>
                        </div>                       
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card radius-chart">
                      <div class="card-header radius-chart-header">
                        <div class="card-title uppercase-text">
                          <h3>anak &nbsp; <span class="badge badge-warning warning-new"><?php echo $total_sus_ank ?></span> </h3>
                        </div>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool primary" data-card-widget="card-refresh" data-source="statistik_age" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                          <button type="button" class="btn btn-tool primary" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                          <button type="button" class="btn btn-tool primary" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                          
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-4 separator">
                            <div class="title-subcase text-center">sembuh</div>
                            <div class="round health text-center">
                              <div class="total-subcase-round">
                                <?php echo $data['status'][0]['RIAN_SUSPEKSEMBUH'] ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 separator">
                            <div class="title-subcase text-center">dirawat</div>
                            <div class="round treated text-center">
                              <div class="total-subcase-round">
                                <?php echo $data['status'][0]['RIAN_SUSPEKRAWAT'] ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="title-subcase text-center">meninggal</div>
                            <div class="round death text-center">
                              <div class="total-subcase-round">
                                <?php echo $data['status'][0]['RIAN_SUSPEKMATI'] ?>
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
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container rawat-jalan container-total-case">
        <div class="row">
          <div class="col-md-12" data-aos="fade-up">
            <div class="card card-primary">
               <div class="card-header">
                  <div class="card-title new-title text-center">rawat jalan</div>
               </div>
               <div class="card-body">
                 <div class="row">
                   <div class="col-md-12">
                     <div class="card">
                       <div class="card-header">
                         <div class="card-title uppercase-text">
                           <h3>dewasa &nbsp; <span class="badge badge-primary"><?php echo $total_rj_dew ?></span></h3>
                          </div>
                         <div class="card-tools">
                          <button type="button" class="btn btn-tool primary" data-card-widget="card-refresh" data-source="statistik_age" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                          <button type="button" class="btn btn-tool primary" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                          <button type="button" class="btn btn-tool primary" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                          
                        </div>
                       </div>
                       <div class="card-body">
                          <div class="row">
                           <div class="col-md-3">
                             <div class="card card-widget widget-user">
                               <div class="card-footer text-center footer-new">
                                  <div class="card-title text-health uppercase-text opensans-font footer-title">
                                    sembuh
                                  </div>
                               </div>
                               <div class="widget-user-header bg-info health">                                
                                 <div class="total-rw">
                                    <?php echo $data['status'][0]['RJDWS_SEMBUH'] ?>
                                  </div>
                               </div>
                             </div>
                           </div>
                           <div class="col-md-3">
                              <div class="card card-widget widget-user">
                               <div class="card-footer text-center footer-new">
                                  <div class="card-title text-reactive uppercase-text opensans-font footer-title">
                                    reative
                                  </div>
                               </div>
                               <div class="widget-user-header bg-info reactive">                                
                                 <div class="total-rw">
                                    <?php echo $data['status'][0]['RJDWS_REACTIVE'] ?>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="col-md-3">
                              <div class="card card-widget widget-user">
                               <div class="card-footer text-center footer-new">
                                  <div class="card-title text-isoman uppercase-text opensans-font footer-title-iso">
                                    confirm isolasi mandiri
                                  </div>
                               </div>
                               <div class="widget-user-header bg-info isoman">                                
                                 <div class="total-rw">
                                    <?php echo $data['status'][0]['RJDWS_CONFIRMISOMANDIRI'] ?>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="col-md-3">
                            <div class="card card-widget widget-user">
                               <div class="card-footer text-center footer-new">
                                  <div class="card-title text-isorum uppercase-text opensans-font footer-title-iso">
                                    confirm isolasi rumah dinas
                                  </div>
                               </div>
                               <div class="widget-user-header bg-info isorumdin">                                
                                 <div class="total-rw">
                                    <?php echo $data['status'][0]['RJDWS_CONFIRMISORUMDIN'] ?>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="card">
                       <div class="card-header">
                         <div class="card-title uppercase-text">
                           <h3>anak &nbsp; <span class="badge badge-primary"><?php echo $total_rj_ank ?></span></h3>
                          </div>
                         <div class="card-tools">
                          <button type="button" class="btn btn-tool primary" data-card-widget="card-refresh" data-source="statistik_age" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button>
                          <button type="button" class="btn btn-tool primary" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                          <button type="button" class="btn btn-tool primary" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                          
                        </div>
                       </div>
                       <div class="card-body">
                         <div class="row">
                           <div class="col-md-3">
                             <div class="card card-widget widget-user">
                               <div class="card-footer text-center footer-new">
                                  <div class="card-title text-health uppercase-text opensans-font footer-title">
                                    sembuh
                                  </div>
                               </div>
                               <div class="widget-user-header bg-info health">                                
                                 <div class="total-rw">
                                    <?php echo $data['status'][0]['RJAN_SEMBUH'] ?>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="col-md-3">
                              <div class="card card-widget widget-user">
                               <div class="card-footer text-center footer-new">
                                  <div class="card-title text-reactive uppercase-text opensans-font footer-title">
                                    reative
                                  </div>
                               </div>
                               <div class="widget-user-header bg-info reactive">                                
                                 <div class="total-rw">
                                    <?php echo $data['status'][0]['RJAN_REACTIVE'] ?>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="col-md-3">
                              <div class="card card-widget widget-user">
                               <div class="card-footer text-center footer-new">
                                  <div class="card-title text-isoman uppercase-text opensans-font footer-title-iso">
                                    confirm isolasi mandiri
                                  </div>
                               </div>
                               <div class="widget-user-header bg-info isoman">                                
                                 <div class="total-rw">
                                    <?php echo $data['status'][0]['RJAN_CONFIRMISOMANDIRI'] ?>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="col-md-3">
                            <div class="card card-widget widget-user">
                               <div class="card-footer text-center footer-new">
                                  <div class="card-title text-isorum uppercase-text opensans-font footer-title-iso">
                                    confirm isolasi rumah dinas
                                  </div>
                               </div>
                               <div class="widget-user-header bg-info isorumdin">                                
                                 <div class="total-rw">
                                    <?php echo $data['status'][0]['RJAN_CONFIRMISORUMDIN'] ?>
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
  <footer class="main-footer text-center">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="https://rstugurejo.jatengprov.go.id">RSUD TUGUREJO PROVINSI JAWA TENGAH</a>.</strong> All rights reserved.
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
    $('.carousel').carousel({
      interval: 10000
    })
  });
 AOS.init();
  am4core.ready(function() { 
    rekapBulan();
    function rekapBulan(){
      // Themes begin
      am4core.useTheme(am4themes_kelly);
      am4core.useTheme(am4themes_animated);
      // Themes end

      // Create chart instance
      const chart = am4core.create("chartRekapBulan", am4charts.XYChart);
      // Create axes
      var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
      dateAxis.renderer.minGridDistance = 50;
      dateAxis.dateFormats.setKey("day", "MMMM dt");
      
      var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
      valueAxis.logarithmic = true;
      valueAxis.renderer.minGridDistance = 20;

      // Create series
      chart.dataSource.url = "<?php echo base_url('covid_informasi/statistik_rekapbulan') ?>";
      var series = chart.series.push(new am4charts.LineSeries());
      series.dataFields.valueY = "SUMM";
      series.dataFields.dateX = "PERIODE";
      series.tensionX = 0.8;
      series.strokeWidth = 3;

      var bullet = series.bullets.push(new am4charts.CircleBullet());
      bullet.circle.fill = am4core.color("#fff");
      bullet.circle.strokeWidth = 3;

      // Add cursor
      chart.cursor = new am4charts.XYCursor();
      chart.cursor.fullWidthLineX = true;
      chart.cursor.xAxis = dateAxis;
      chart.cursor.lineX.strokeWidth = 0;
      chart.cursor.lineX.fill = am4core.color("#000");
      chart.cursor.lineX.fillOpacity = 0.1;

      // Add scrollbar
      chart.scrollbarX = new am4core.Scrollbar();
    }
    persentaseSembuh()
    function persentaseSembuh(){
      // Themes begin
      am4core.useTheme(am4themes_kelly);
      am4core.useTheme(am4themes_animated);
      // Themes end
      const chart = am4core.create("chartPersentaseSembuh", am4charts.PieChart3D);

      chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

      // Set up data source
      chart.dataSource.url = "<?php echo base_url('covid_informasi/statistik_persentaseSembuh') ?>";

      chart.innerRadius = am4core.percent(40);
      chart.depth = 50;

      chart.legend = new am4charts.Legend();

      var series = chart.series.push(new am4charts.PieSeries3D());
      series.dataFields.value = "PROSENSEMBUH";
      series.dataFields.radiusValue = "value";
      series.dataFields.category = "STATUSPAS";
      series.slices.template.cornerRadius = 5;
      series.colors.step = 3;

      series.hiddenState.properties.endAngle = -90;
      series.colors.list = [
        am4core.color("red"),
        am4core.color("grey"),
      ];
  
    }

    persentaseKematian()
    function persentaseKematian(){
      // Themes begin
      am4core.useTheme(am4themes_kelly);
      am4core.useTheme(am4themes_animated);
      // Themes end
      const chart = am4core.create("chartPersentaseKematian", am4charts.PieChart3D);

      chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

      // Set up data source
      chart.dataSource.url = "<?php echo base_url('covid_informasi/statistik_persentaseKematian') ?>";
    
      chart.innerRadius = am4core.percent(40);
      chart.depth = 50;

      chart.legend = new am4charts.Legend();

      var series = chart.series.push(new am4charts.PieSeries3D());
      series.dataFields.value = "PROSENMATI";
      series.dataFields.depthValue = "value";
      series.dataFields.category = "STATUSPAS";
      series.slices.template.cornerRadius = 5;
      series.colors.step = 3;
      series.hiddenState.properties.endAngle = -90;
    }
    gender();
    function gender(){
      // Themes begin
      am4core.useTheme(am4themes_kelly);
      am4core.useTheme(am4themes_animated);
      // Themes end
      const chart = am4core.create("chartGender", am4charts.PieChart);

      chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

      // Set up data source
      chart.dataSource.url = "<?php echo base_url('covid_informasi/statistik_gender') ?>";

      var series = chart.series.push(new am4charts.PieSeries());
      series.dataFields.value = "JML";
      series.dataFields.radiusValue = "value";
      series.dataFields.category = "SEX";
      series.slices.template.cornerRadius = 6;
      series.colors.step = 3;

      series.hiddenState.properties.endAngle = -90;

      chart.legend = new am4charts.Legend();
    }

    age()
    function age(){
      // Themes begin
      am4core.useTheme(am4themes_kelly);
      am4core.useTheme(am4themes_animated);
      // Themes end
      const chart = am4core.create("chartAge", am4charts.PieChart);

      chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

      // Set up data source
      chart.dataSource.url = "<?php echo base_url('covid_informasi/statistik_age') ?>";

      var series = chart.series.push(new am4charts.PieSeries());
      series.dataFields.value = "JML";
      series.dataFields.radiusValue = "value";
      series.dataFields.category = "JENISUSIA";
      series.slices.template.cornerRadius = 6;
      series.colors.step = 3;

      series.hiddenState.properties.endAngle = -90;
      series.colors.list = [
        am4core.color("#d2d219"),
        am4core.color("#28a745"),
      ];
      chart.legend = new am4charts.Legend();
    }
  });
</script>
</body>
</html>
