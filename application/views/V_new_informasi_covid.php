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
  <title>Informasi Covid 19</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css');?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/informasi.css');?>">
  
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
        <img src="<?php echo base_url('assets/dist/img/logo.png');?>" alt="RSUD TUGUREJO" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-size: larger;"> RSUD Tugurejo</span>
      </a>
      <ul class="menu navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <?php echo $this->session->userdata('username')?>
          <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB4Ij48Zz48cGF0aCBkPSJtMjU2IDAtMTYwLjM5OCAyNTYgMTYwLjM5OCAyNTZjMTQxLjM4NSAwIDI1Ni0xMTQuNjE1IDI1Ni0yNTZzLTExNC42MTUtMjU2LTI1Ni0yNTZ6IiBmaWxsPSIjMjhhYmZhIi8+PHBhdGggZD0ibTAgMjU2YzAgMTQxLjM4NSAxMTQuNjE1IDI1NiAyNTYgMjU2di01MTJjLTE0MS4zODUgMC0yNTYgMTE0LjYxNS0yNTYgMjU2eiIgZmlsbD0iIzE0Y2ZmZiIvPjxwYXRoIGQ9Im0yNTYgNjAtNjUuNzg4IDEwNSA2NS43ODggMTA1YzU3Ljk5IDAgMTA1LTQ3LjAxIDEwNS0xMDVzLTQ3LjAxLTEwNS0xMDUtMTA1eiIgZmlsbD0iIzM3M2U5ZiIvPjxwYXRoIGQ9Im0xNTEgMTY1YzAgNTcuOTkgNDcuMDEgMTA1IDEwNSAxMDV2LTIxMGMtNTcuOTkgMC0xMDUgNDcuMDEtMTA1IDEwNXoiIGZpbGw9IiM2MjQxZWEiLz48cGF0aCBkPSJtNDI0LjY0OSAzMzUuNDQzYy0xOS45MzMtMjIuNTI1LTQ4LjYtMzUuNDQzLTc4LjY0OS0zNS40NDNoLTkwbC02MCA3NiA2MCA3NmM3MC4zMjIgMCAxMzUuNjM2LTM4LjAxIDE3MC40NTQtOTkuMTk4bDUuMzA2LTkuMzI1eiIgZmlsbD0iIzM3M2U5ZiIvPjxwYXRoIGQ9Im0xNjYgMzAwYy0zMC4wNDkgMC01OC43MTYgMTIuOTE4LTc4LjY0OSAzNS40NDNsLTcuMTEgOC4wMzUgNS4zMDYgOS4zMjVjMzQuODE3IDYxLjE4NyAxMDAuMTMxIDk5LjE5NyAxNzAuNDUzIDk5LjE5N3YtMTUyeiIgZmlsbD0iIzYyNDFlYSIvPjwvZz48L3N2Zz4K"
          alt="RSUD TUGUREJO" class="brand-image img-circle elevation-3" style="opacity: .8" />
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="position: absolute;">
            <a href="<?php echo site_url('signin')?>" class="dropdown-item">
              <!-- Message Start -->
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
              <!-- Message End -->
            </a>
        </div>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark"> Form <small>Deteksi Awal</small></h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<div class="content">
      <div class="container">
        </div>
	</div>
    <!-- Main content -->
    <div class="content">
      <div class="">
        <div class="row">

          <!-- /.col-md-12 -->
          <div class="col-lg-12">
            <div class="card card-danger card-outline">
              <div class="card-header" style="text-align: center;align-items: center;display: grid;font-family: fantasy;">
                <h1 class="card-title m-0" style="text-align: center;font-size: 34px;">&nbsp;Informasi Pasien Covid-19 NEW</h1>
              </div>
              <h1 class="card-title m-0" style="text-align: center;font-size: 60px; color:red;"> &nbsp; <i class="fa fa-user" style="color: red;"></i> <b>TOTAL KASUS <?php echo $total_global ?></b></h1>
            <div class="card-body">
              
              <!-- One "tab" for each step in the form: -->
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="card card-success">
                            <div class="card-header" style="background:#28a745; color:white;">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-12 text-center">
                                      <div class="title-text" style="font-size:30px;"> 
                                        Sembuh
                                      </div>
                                      <div class="col-md-12">
                                        <div class="title-total">
                                          <b> <?php echo $data['status'][0]['SEMBUH']?></b><span class="badge badge-sembuh font-badge"><?php echo round($persen_sembuh) ?> %</span>
                                        </div>
                                      </div>
                                    
                                    </div>
                                    </div>
                                </div>
                                <div class="card-footer" style="background-color: white; display:none;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card card-warning">
                            <div class="card-header" style="background: orange; color:white;">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-12 text-center" >
                                      <div class="title-text" style="font-size:30px;">
                                          Dirawat
                                      </div>
                                      <div class="col-md-12">
                                        <div class="title-total">
                                            <b> <?php echo $data['status'][0]['DIRAWAT']?> </b><span class="badge badge-drawat font-badge"><?php echo round($persen_drwt) ?> %</span>
                                        </div>
                                      </div>
                                    
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-danger">
                            <div class="card-header" style="background:#dc3545; color:white;">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-12 text-center">
                                      <div class="title-text" style="font-size:30px;">
                                        Meninggal
                                      </div>
                                      <div class="col-md-12">
                                        <div class="title-total">
                                          <b><?php echo $data['status'][0]['MENINGGAL']?></b><span class="badge badge-mnggl font-badge"><?php echo round($persen_mnggal) ?> %</span>
                                        </div>
                                      </div>
                                    
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-danger">
                            <div class="card-header" style="background:#dc3545; color:white;">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-12 text-center">
                                      <div class="title-text" style="font-size:30px;">
                                        Reactive
                                      </div>
                                      <div class="col-md-12">
                                        <div class="title-total">
                                          <b> <?php echo $data['status'][0]['REACTIVE']?></b><span class="badge badge-mnggl font-badge"><?php echo round($persen_reactive) ?> %</span>
                                        </div>
                                      </div>
                                    
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-danger">
                            <div class="card-header" style="background:#dc3545; color:white;">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-12 text-center">
                                      <div class="title-text" style="font-size:30px;">
                                        Isolasi Mandiri
                                      </div>
                                      <div class="col-md-12">
                                        <div class="title-total">
                                          <b> <?php echo $data['status'][0]['ISOMANDIRI']?></b><span class="badge badge-mnggl font-badge"><?php echo round($persen_isoman) ?> %</span>
                                        </div>
                                      </div>
                                    
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-danger">
                            <div class="card-header" style="background:#6c84f1; color:white;">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-12 text-center">
                                      <div class="title-text" style="font-size:30px;">
                                        Isolasi Rumah Dinas
                                      </div>
                                      <div class="col-md-12">
                                        <div class="title-total">
                                          <b> <?php echo $data['status'][0]['ISORUMDIN']?></b><span class="badge badge-mnggl font-badge"><?php echo round($persen_isorudin) ?> %</span>
                                        </div>
                                      </div>
                                    
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
              
              
              <!-- Circles which indicates the steps of the form: -->
              
              <div style="overflow:auto; display:none">
                <div style="float:right;">
                  <button type="button" class="btn btn-warning" id="prevBtn" onclick="nextPrev(-1)">Sebelumnya</button>
                  <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Selanjutnya</button>
                </div>
              </div>
              <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px; display:none;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="title-rinap"><i class="fas fa-bed"></i> Rawat Inap</div>
            <div class="line-buttom"></div>
          </div>
          <!-- covid -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header" style="text-align: center;align-items: center;display: grid;">
                <h1 class="card-title m-0" style="text-align: center;font-size: 40px;"><i class="fas fa-user-injured" style="color: red;"></i> &nbsp; Confirm Covid-19</h1>
                <h1 class="card-title m-0" style="text-align: center;font-size: 54px; color:red; font-family: fantasy;"><?php echo $total_confirm ?></h1>
              </div>
              <h1 class="card-title m-0" style="text-align: center;font-size: 34px;"></h1>
            <div class="card-body">
              
              <!-- One "tab" for each step in the form: -->
              
              <div class="tab">
             <div class="row">
                <div class="col-md-12">
                    <div class="card card-danger card-outline">
                        <div class="card-header" style="text-align: center;align-items: center;display: grid;">
                            <h1 class="card-title m-0" style="text-align: center;font-size: 35px;"> &nbsp;Dewasa</h1>
                            <h1 class="card-title m-0" style="text-align: center;font-size: 40px;font-family: fantasy;color:red;"> &nbsp; <?php echo $total_confirm_dew ?></h1>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-success" >
                                        <div class="card-header" style="background:#28a745; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <!-- <div class="text-title" style="font-size:18px;">
                                                  Sembuh
                                              </div> -->
                                              <div class="title-status" style="font-size:25px;">Sembuh</div>    
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                  <?php echo $data['status'][0]['RIDWS_CONFIRMSEMBUH']?>
                                                </div>
                                              </div>
                                              
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="card card-warning">
                                        <div class="card-header" style="background: orange; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Dirawat</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                  <?php echo $data['status'][0]['RIDWS_CONFIRMRAWATISO']?>
                                                </div>
                                              </div>
                                                <!-- Dirawat -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="card card-danger">
                                        <div class="card-header" style="background:#dc3545; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Meninggal</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                  <?php echo $data['status'][0]['RIDWS_CONFIRMMATI']?>
                                                </div>
                                              </div>
                                                <!-- Meninggal -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>                          
                        </div>
                    </div>
                    <div class="card card-danger card-outline">
                        <div class="card-header" style="text-align: center;align-items: center;display: grid;">
                            <h1 class="card-title m-0" style="text-align: center;font-size: 35px;"> &nbsp;Anak</h1>
                            <h1 class="card-title m-0" style="text-align: center;font-size: 40px;font-family: fantasy; color:red;"><?php echo $total_confirm_ank ?></h1>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="card card-success">
                                        <div class="card-header" style="background:#28a745; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Sembuh</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                    <?php echo $data['status'][0]['RIAN_CONFIRMSEMBUH'];?>
                                                </div>
                                              </div>
                                                <!-- Sembuh -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="card card-warning">
                                        <div class="card-header" style="background: orange; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Dirawat</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                    <?php echo $data['status'][0]['RIAN_CONFIRMRAWATISO'];?>
                                                </div>
                                              </div>
                                            <!-- Dirawat -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-danger">
                                        <div class="card-header" style="background:#dc3545; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Meniggal</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                    <?php echo $data['status'][0]['RIAN_CONFIRMMATI'];?>
                                                </div>
                                              </div>
                                            <!-- Meninggal -->
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
              
              
              <!-- Circles which indicates the steps of the form: -->
              
              <div style="overflow:auto; display:none">
                <div style="float:right;">
                  <button type="button" class="btn btn-warning" id="prevBtn" onclick="nextPrev(-1)">Sebelumnya</button>
                  <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Selanjutnya</button>
                </div>
              </div>
              <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px; display:none;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
              </div>
            </div>
          </div>
          <!-- PDP -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header" style="text-align: center;align-items: center;display: grid;">
                <h1 class="card-title m-0" style="text-align: center;font-size: 40px;"><i class="fa fa-user-injured" style="color: orange;"></i>  &nbsp; Suspect Covid-19</h1>
                <h1 class="card-title m-0" style="text-align: center;font-size: 54px;font-family: fantasy; color:orange;"><?php echo $total_suspect ?></h1>
              </div>
              <h1 class="card-title m-0" style="text-align: center;font-size: 34px;"></h1>
              <div class="card-body">
              
              <!-- One "tab" for each step in the form: -->
              
              <div class="">
             <div class="row">
                <div class="col-md-12">
                    <div class="card card-warning card-outline">
                        <div class="card-header" style="text-align: center;align-items: center;display: grid;">
                            <h1 class="card-title m-0" style="text-align: center;font-size: 35px;"> &nbsp;Dewasa</h1>
                            <h1 class="card-title m-0" style="text-align: center;font-size: 40px;font-family: fantasy; color:red;"><?php echo $total_sus_dew ?></h1>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-success">
                                        <div class="card-header" style="background:#28a745; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Sembuh</div>
                                              <div class="col-md-12">
                                              <div class="title-total" style="font-size:45px;">
                                                    <?php echo $data['status'][0]['RIDWS_SUSPEKSEMBUH'] ?>
                                                </div>
                                              </div>
                                            <!-- Sembuh -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-warning">
                                        <div class="card-header" style="background: orange; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                            <div class="title-status" style="font-size:25px;">Dirawat</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                    <?php echo $data['status'][0]['RIDWS_SUSPEKRAWAT'] ?>
                                                </div>
                                              </div>
                                            <!-- Dirawat -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="card card-danger">
                                        <div class="card-header" style="background:#dc3545; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Meninggal</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                    <?php echo $data['status'][0]['RIDWS_SUSPEKMATI'] ?>
                                                </div>
                                              </div>
                                              <!-- Meninggal -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>                          
                        </div>
                    </div>
                    <div class="card card-warning card-outline">
                        <div class="card-header" style="text-align: center;align-items: center;display: grid;">
                            <h1 class="card-title m-0" style="text-align: center;font-size: 35px;"> &nbsp;Anak</h1>
                            <h1 class="card-title m-0" style="text-align: center;font-size: 40px;font-family: fantasy; color:red;"><?php echo $total_sus_ank ?></h1>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-success">
                                        <div class="card-header" style="background:#28a745; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Sembuh</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                    <?php echo $data['status'][0]['RIAN_SUSPEKSEMBUH'] ?>
                                                </div>
                                              </div>
                                            <!-- Sembuh -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-warning">
                                        <div class="card-header" style="background: orange; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Dirawat</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                    <?php echo $data['status'][0]['RIAN_SUSPEKRAWAT'] ?>
                                                </div>
                                              </div>
                                              <!-- Dirawat -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-4">
                                    <div class="card card-danger">
                                        <div class="card-header" style="background:#dc3545; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Meniggal</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                    <?php echo $data['status'][0]['RIAN_SUSPEKMATI'] ?>
                                                </div>
                                              </div>
                                              <!-- Meninggal -->
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
              
              
              <!-- Circles which indicates the steps of the form: -->
              
              <div style="overflow:auto; display:none">
                <div style="float:right;">
                  <button type="button" class="btn btn-warning" id="prevBtn" onclick="nextPrev(-1)">Sebelumnya</button>
                  <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Selanjutnya</button>
                </div>
              </div>
              <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px; display:none;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
              </div>
            </div>
          </div>
          <!-- PDP -->
          <div class="col-md-12">
            <div class="title-rinap"><i class="fas fa-walking"></i> Rawat Jalan</div>
            <div class="line-buttom"></div>
          </div>
          <!-- Rawat Jalan -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header" style="text-align: center;align-items: center;display: grid;">
                <h1 class="card-title m-0" style="text-align: center;font-size: 20px;"> &nbsp; </h1>
                <h1 class="card-title m-0" style="text-align: center;font-size: 54px;font-family: fantasy; color:orange;"></h1>
              </div>
              <h1 class="card-title m-0" style="text-align: center;font-size: 34px;"></h1>
              <div class="card-body">
              
              <!-- One "tab" for each step in the form: -->
              
            <div class="">
             <div class="row">
                <div class="col-md-12">
                    <div class="card card-warning card-outline">
                        <div class="card-header" style="text-align: center;align-items: center;display: grid;">
                            <h1 class="card-title m-0" style="text-align: center;font-size: 35px;"> &nbsp;Dewasa</h1>
                            <h1 class="card-title m-0" style="text-align: center;font-size: 40px;font-family: fantasy; color:red;"><?php echo $total_rj_dew ?></h1>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card card-success">
                                        <div class="card-header" style="background:#28a745; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Sembuh</div>
                                              <div class="col-md-12">
                                              <div class="title-total" style="font-size:45px;">
                                                <?php echo $data['status'][0]['RJDWS_SEMBUH'] ?>
                                                </div>
                                              </div>
                                            <!-- Sembuh -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-warning">
                                        <div class="card-header" style="background: orange; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Reactive</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                  <?php echo $data['status'][0]['RJDWS_REACTIVE'] ?>
                                                </div>
                                              </div>
                                            <!-- Reactive -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="card card-danger">
                                        <div class="card-header" style="background:#dc3545; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Confirm Isolasi Mandiri</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                  <?php echo $data['status'][0]['RJDWS_CONFIRMISOMANDIRI'] ?>
                                                </div>
                                              </div>
                                              <!-- Confirm Isolasi Mandiri -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="card card-danger">
                                        <div class="card-header" style="background:#6c84f1; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Confirm Isolasi Rumah Dinas</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                  <?php echo $data['status'][0]['RJDWS_CONFIRMISORUMDIN'] ?>
                                                </div>
                                              </div>
                                              <!-- Confirm Isolasi Rumah Dinas -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                    </div>
                    <div class="card card-warning card-outline">
                        <div class="card-header" style="text-align: center;align-items: center;display: grid;">
                            <h1 class="card-title m-0" style="text-align: center;font-size: 35px;"> &nbsp;Anak</h1>
                            <h1 class="card-title m-0" style="text-align: center;font-size: 40px;font-family: fantasy; color:red;"><?php echo $total_rj_ank ?></h1>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card card-success">
                                        <div class="card-header" style="background:#28a745; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Sembuh</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                  <?php echo $data['status'][0]['RJAN_SEMBUH'] ?>
                                                </div>
                                              </div>
                                            <!-- Sembuh -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-warning">
                                        <div class="card-header" style="background: orange; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Reactive</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                  <?php echo $data['status'][0]['RJAN_REACTIVE'] ?>
                                                </div>
                                              </div>
                                              <!-- Reactive -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-3">
                                    <div class="card card-danger">
                                        <div class="card-header" style="background:#dc3545; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Confirm Isolasi Mandiri</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                  <?php echo $data['status'][0]['RJAN_CONFIRMISOMANDIRI'] ?>
                                                </div>
                                              </div>
                                              <!-- Confirm Isolasi Mandiri -->
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-danger">
                                        <div class="card-header" style="background:#6c84f1; color:white;">
                                        <div class="card-body body-padding">
                                            <div class="row">
                                            <div class="col-md-12 text-center">
                                              <div class="title-status" style="font-size:25px;">Confirm Isolasi Rumah Dinas</div>
                                              <div class="col-md-12">
                                                <div class="title-total" style="font-size:45px;">
                                                  <?php echo $data['status'][0]['RJAN_CONFIRMISORUMDIN'] ?>
                                                </div>
                                              </div>
                                              <!-- Confirm Isolasi Rumah Dinas -->
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
              
              
              <!-- Circles which indicates the steps of the form: -->
              
              <div style="overflow:auto; display:none">
                <div style="float:right;">
                  <button type="button" class="btn btn-warning" id="prevBtn" onclick="nextPrev(-1)">Sebelumnya</button>
                  <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Selanjutnya</button>
                </div>
              </div>
              <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px; display:none;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
              </div>
            </div>
          </div>
          <!-- ODP -->
          <div class="col-lg-12" style="display:none;">
            <div class="card card-warning card-outline">
              <div class="card-header" style="text-align: center;align-items: center;display: grid;font-family: fantasy;">
                <h1 class="card-title m-0" style="text-align: center;font-size: 34px;"><i class="fa fa-user" style="color: blue;"></i>  &nbsp; ODP Covid-19</h1>
              </div>
              <h1 class="card-title m-0" style="text-align: center;font-size: 34px;">900</h1>
            <div class="card-body">
              
              <!-- One "tab" for each step in the form: -->
              
              <div class="">
             <div class="row">
                <div class="col-md-6">
                <div class="card card-warning card-outline">
                    <div class="card-header">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-12 text-center">
                        <h4>Dirawat</h4>
                            <div class="col-md-12">
                            <div class="">
                                <h4>128</h4>
                            </div>
                            </div>
                            <!-- <div class="col-sm-10">
                            <div class="">
                                <input class="-input validate" type="radio" name="" id="" value="">
                                <label class="-label" for="gridRadios1">
                                Tidak
                                </label>
                            </div>
                            </div> -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="card card-warning card-outline">
                    <div class="card-header">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-12 text-center">
                        <h4>Sembuh</h4>
                            <div class="col-md-12">
                            <div class="">
                                <h4>128</h4>
                            </div>
                            </div>
                            <!-- <div class="col-sm-10">
                            <div class="">
                                <input class="-input validate" type="radio" name="" id="" value="">
                                <label class="-label" for="gridRadios1">
                                Tidak
                                </label>
                            </div>
                            </div> -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
             </div>
              
              </div>
              
              
              <!-- Circles which indicates the steps of the form: -->
              
              <div style="overflow:auto; display:none">
                <div style="float:right;">
                  <button type="button" class="btn btn-warning" id="prevBtn" onclick="nextPrev(-1)">Sebelumnya</button>
                  <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Selanjutnya</button>
                </div>
              </div>
              <!-- Circles which indicates the steps of the form: -->
              <div style="text-align:center;margin-top:40px; display:none;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
              </div>
              </div>
            </div>
          </div>
          <!-- ODP -->
          <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <footer class="main-footer text-center">
    <!-- Default to the left -->
    <h6>Copyright &copy; 2020 <a href="https://rstugurejo.jatengprov.go.id">RSUD Tugurejo Provinsi Jawa Tengah</a>.</h6>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js');?>"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  var nama = $('#nama').val()
  var alamat = $('#alamat').val();
  $('#nama_lengkap').html(nama)
  $('#alamat_lengkap').html(alamat)
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  //$('html, body').animate({scrollTop : 0},900);
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    //document.getElementById("regForm").submit();
    // alert('ok')
    var obj = document.forms.namedItem("regForm")
    $.ajax({
    type: "POST",
    url: "<?php echo base_url('Screening_c/simpan') ?>",
    //url: "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/test",
    processData:false,
    contentType:false,
    cache:false,
    async:true,
    crossOrigin : true,
    data: new FormData(obj),
    dataType: "json",
    beforeSend: function() {
        $('.overlay').css('display', 'block');
    },
    success: function (response) {
      $('.overlay').css('display', 'none');
      if(response.status == false){
        var exp = '<?php echo base_url('404_override')?>';
        window.location.replace(exp);
      }else {     
        var analisa = '<?php echo base_url('analisa')?>/'+response.ID
        window.location.replace(analisa);
        //window.location.reload()
        console.log(response.ID)
      }
    }
    });
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, a, valid = true;
  x = document.getElementsByClassName("tab");
  z = x[currentTab].getElementsByClassName("validate-card");
  y = x[currentTab].getElementsByClassName("validate");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      var idku = y[i].id
      console.log(idku)
      $('.'+idku).css("background-color", "yellow");
      $('html, body').animate({scrollTop : 0},600);
      swal('Informasi','Ada form yang belum di isi.','info')
      // and set the current valid status to false
      valid = false;
    } else {
      var idku = y[i].id
      $('.'+idku).css("background-color", "white");
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

function allowContactNumberOnly(a){
  if(!/^[0-9.]+$/.test(a.value)){
    a.value = a.value.substring(0,a.value.length-1000);
  }
}

function allowNumbersOnly(a, event) {
   
    // if(!/^[0-9.]+$/.test(a.value))
    if(!/^\d+$/.test(a.value))
    {
    a.value = a.value.substring(0,a.value.length-1000);
    }
    //ambil data ktp
    var kode = $(this).event;
    var telp = $('#telp').val();
    $('#telp_lengkap').html(telp);
    var code = (event.which) ? event.which : event.keyCode;
    
    //if(code == 13){
      
    //} 
  }

  $(function () {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
      } else {
        $('.back-to-top').fadeOut('slow');
      }
    });
    $('.back-to-top').click(function(){
      $('html, body').animate({scrollTop : 0},1500);
      return false;
    });

   
  });
</script>
</body>
</html>
