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

  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <style>
      .title-kesehatan{
        font-family: cursive;
        font-size: 40px;
        padding-top: 55px;
      }
      .sembuh{
        color: green;
      }
      .dirawat{
        color: #ef9732;
      }
      .meniggal{
        color: #dc3545;
      }
      .total-kesehatan{
        font-size: 90px;
        color: green;
      }
      .total-persen{
          font-size : 40px;
      }
      .line-buttom{
        border-bottom: 2px solid rgba(253, 249, 249, 0.99);
        position: absolute;
        bottom: 0;
        width: 20%;
        left: 40%;
      }
      .text-white{
        color: white;
      }
      .text-green{
        color: #7dba75;
        position: relative;
      }
      .header-kes{
        font-size: 30px;
      }
      .oval{
        padding:20px;
      }
      .title-kes-center{
        padding: 5px;
        text-align: center;
      }
      .conten-sub{
        background-color: white;
        border-radius: 20px; 
        box-shadow:0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
      }
      .line-rawat{
        background-color: #f4f6f9;
        position: absolute;
        top: 10%;
        width: 20%;
        height: 65px;
        left: 40%;
        border-radius:7px 7px 0 0;
      }
      .content-header{
        padding: 15px .5rem;
        height: 143px;
        position: relative;
        border-radius: 0 0 100px 100px;
        /* z-index: 0; */
        width: 100%;
        background-color: #9cca82;
      }
      .content{
        position: relative;
        bottom: 60px;
      }
      .navbar {
        position:sticky;
        top: 0;
      }
      .hexagon {
        position: relative;
        width: 300px; 
        height: 173.21px;
        background-color: #9cca82;
        margin: 86.60px 0;
        box-shadow: 0 0 20px rgba(0,0,0,0.35);
      }
      .hexagon:hover{
        background: #9cca82;
        -webkit-transition: all 0.25s ease-in;
        transition: all 0.25s ease-in;
      }
      .hexagon:before,
      .hexagon:after {
        content: "";
        position: absolute;
        z-index: 1;
        width: 212.13px;
        height: 212.13px;
        -webkit-transform: scaleY(0.5774) rotate(-45deg);
        -ms-transform: scaleY(0.5774) rotate(-45deg);
        transform: scaleY(0.5774) rotate(-45deg);
        background-color: inherit;
        left: 43.9340px;
        box-shadow: 0 0 20px rgba(0,0,0,0.35);
      }

      .hexagon:before {
        top: -106.0660px;
      }

      .hexagon:after {
        bottom: -106.0660px;
        background: #9cca82;
      }

      /*cover up extra shadows*/
      .hexagon span {
        display: block;
        position: absolute;
        top:0px;
        left: 0;
        width:300px;
        height:173.2051px;
        z-index: 2;
        background: inherit;
      }
      .hexagon:hover:before {
        height: 0;
        -webkit-transition: all 0.45s ease-in;
        transition: all 0.45s ease-in;
      }
      .title-hexa{
        font-size: 2em;
        padding-left: 14%;    
        font-weight: 100;
        color: #7a8474;
        background-color: white;
        border-radius: 20px;
        width: 300px;
      }
      .title-hexa-bawah{
        font-size: 2em;
        text-align: center;  
        font-weight: 100;
        color: #7a8474;
        background-color: white;
        border-radius: 20px;
        width: 310px;
      }
  </style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <img src="<?php echo base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Some action </a></li>
              <li><a href="#" class="dropdown-item">Some other action</a></li>

              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                  </li>

                  <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                  <!-- End Level three -->

                  <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li>
              <!-- End Level two -->
            </ul>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?php echo base_url()?>assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?php echo base_url()?>assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="<?php echo base_url()?>assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
              class="fas fa-th-large"></i></a>
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
            <h1 class="m-0 text-dark"> Top Navigation <small>Example 3.0</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container new-container" style="max-width:1350px;">
        <div class="row">
          <div class="col-md-12 contains-hexa" style="left:0;">
            <div class="row">
              <div class="col-md-6" style="left:12%;">
                <div class="hexagon">
                  <span></span>
                  <div class="total-pas" style="    position: absolute;
                    z-index: 10;
                    left: 24%;
                    top: -25%;
                    font-size: 10em;
                    color: white;
                    border-bottom-style: inset;">90</div>
                </div>
                <div class="title-hexa">SEMBUH</div>
              </div>
              <div class="col-md-6" style="left: 12%;">
                <div class="hexagon">
                  <span></span>
                  <div class="total-pas" style="    position: absolute;
                    z-index: 10;
                    left: 24%;
                    top: -25%;
                    font-size: 10em;
                    color: white;
                    border-bottom-style: inset;">90</div>
                </div>
                <div class="title-hexa">DI RAWAT</div>
              </div>
            </div>
          </div>
          <div class="col-md-12 contains-hexa">
            <div class="row">
              <div class="col-md-3">
                <div class="hexagon">
                  <span></span>
                  <div class="total-pas" style="    position: absolute;
                    z-index: 10;
                    left: 24%;
                    top: -25%;
                    font-size: 10em;
                    color: white;
                    border-bottom-style: inset;">90</div>
                </div>
                <div class="title-hexa-bawah">MENINGGAL</div>
              </div>
              <div class="col-md-3">
                <div class="hexagon">
                  <span></span>
                  <div class="total-pas" style="    position: absolute;
                    z-index: 10;
                    left: 24%;
                    top: -25%;
                    font-size: 10em;
                    color: white;
                    border-bottom-style: inset;">90</div>
                </div>
                <div class="title-hexa-bawah">REACTIVE</div>
              </div>
              <div class="col-md-3">
                <div class="hexagon">
                  <span></span>
                  <div class="total-pas" style="    position: absolute;
                    z-index: 10;
                    left: 24%;
                    top: -25%;
                    font-size: 10em;
                    color: white;
                    border-bottom-style: inset;">90</div>
                </div>
                <div class="title-hexa-bawah">ISOLASI MANDIRI</div>
              </div>
              <div class="col-md-3">
                <div class="hexagon">
                  <span></span>
                  <div class="total-pas" style="    position: absolute;
                    z-index: 10;
                    left: 24%;
                    top: -25%;
                    font-size: 10em;
                    color: white;
                    border-bottom-style: inset;">90</div>
                </div>
                <div class="title-hexa-bawah">ISOLASI RUMAH DINAS</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                  <div class="row">
                        <div class="col-md-6" style="border-right-style:groove;">
                            <div class="ico-sehat" style="text-align: center;">
                                <div class="title-kesehatan">Sembuh</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="total-kesehatan">
                                    80
                                </div>
                            </div>
                            <div class="col-md-12" style="border-top-style: groove;">
                                <div class="total-persen">
                                    <span class="badge badge-success">
                                        20%
                                    </span>
                                </div> 
                            </div>
                        </div>
                  </div> 
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                  <div class="row">
                        <div class="col-md-6" style="border-right-style:groove;">
                            <div class="ico-sehat" style="text-align: center;">
                                <div class="title-kesehatan">Di Rawat</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="total-kesehatan">
                                    80
                                </div>
                            </div>
                            <div class="col-md-12" style="border-top-style: groove;">
                                <div class="total-persen">
                                    <span class="badge badge-success">
                                        20%
                                    </span>
                                </div> 
                            </div>
                        </div>
                  </div> 
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                  <div class="row">
                        <div class="col-md-6" style="border-right-style:groove;">
                            <div class="ico-sehat" style="text-align: center;">
                                <div class="title-kesehatan">Meniggal</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="total-kesehatan">
                                    80
                                </div>
                            </div>
                            <div class="col-md-12" style="border-top-style: groove;">
                                <div class="total-persen">
                                    <span class="badge badge-success">
                                        20%
                                    </span>
                                </div> 
                            </div>
                        </div>
                  </div> 
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                  <div class="row">
                        <div class="col-md-6" style="border-right-style:groove;">
                            <div class="ico-sehat" style="text-align: center;">
                                <div class="title-kesehatan">Reactive</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="total-kesehatan">
                                    80
                                </div>
                            </div>
                            <div class="col-md-12" style="border-top-style: groove;">
                                <div class="total-persen">
                                    <span class="badge badge-success">
                                        20%
                                    </span>
                                </div> 
                            </div>
                        </div>
                  </div> 
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                  <div class="row">
                        <div class="col-md-12" style="border-bottom-style:groove;">
                            <div class="ico-sehat" style="text-align: center;">
                                <div class="title-kesehatan">Isolasi Mandiri</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-6">
                                <div class="total-kesehatan">
                                    80
                                </div>
                            </div>
                            <div class="col-md-6" style="border-left-style: groove;">
                                <div class="total-persen">
                                    <span class="badge badge-success">
                                        20%
                                    </span>
                                </div> 
                            </div>
                          </div>
                            
                        </div>
                  </div> 
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                  <div class="row">
                        <div class="col-md-6" style="border-right-style:groove;">
                            <div class="ico-sehat" style="text-align: center;">
                                <div class="title-kesehatan">Isolasi RumDin</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="total-kesehatan">
                                    80
                                </div>
                            </div>
                            <div class="col-md-12" style="border-top-style: groove;">
                                <div class="total-persen">
                                    <span class="badge badge-success">
                                        20%
                                    </span>
                                </div> 
                            </div>
                        </div>
                  </div> 
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- <div class="col-lg-12">
              <div class="sparator text-center">
                  <div class="rawat-inap">Rawat Inap</div>
                  <div class="line-buttom-rawat"></div>
              </div>
          </div> -->
          <!-- /.col-md-6 -->
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <div class="content rawatinap" style="background-color:#9cca82">
      <div class="container">
        <!-- Rawat Inap -->
        <div class="col-lg-12">
            <div class="" style="background-color:#9cca82">
              <div class="card-header text-center" style="border-bottom: 0px;">
                <div class="line-buttom"></div>
                <div class="card-title m-0 header-kes text-white">
                    Confirm Covid-19
                </div>
                <div class="m-0 header-kes text-white" style="padding-right: 24%;">
                    Dewasa
                </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-4 oval">
                        <div class="row conten-sub" style="background-color: white;border-radius: 20px">
                          <div class="col-md-8 title-kes-center">
                            <div class="title-kes text-green" style="font-size: 40px;">
                              Sembuh
                            </div>
                          </div>
                          <div class="col-md-4 text-green"><div class="persen" style="font-size:50px;">90</div></div>
                        </div>
                      </div>   
                      <div class="col-md-4 oval">
                        <div class="row conten-sub" style="background-color: white;border-radius: 20px">
                          <div class="col-md-8 title-kes-center">
                            <div class="title-kes text-green" style="font-size: 40px;">
                              Di Rawat
                            </div>
                          </div>
                          <div class="col-md-4 text-green"><div class="persen" style="font-size:50px;">90</div></div>
                        </div>
                      </div>
                      <div class="col-md-4 oval">
                        <div class="row conten-sub" style="background-color: white;border-radius: 20px">
                          <div class="col-md-8 title-kes-center">
                            <div class="title-kes text-green" style="font-size: 40px;">
                              Meninggal
                            </div>
                          </div>
                          <div class="col-md-4 text-green"><div class="persen" style="font-size:50px;">90</div></div>
                        </div>
                      </div>                
                  </div> 
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
              <div class="card-header text-center" style="border-bottom: 0px;">
                <div class="line-buttom"></div>
                  <div class="m-0 header-kes text-white">
                      Anak
                  </div>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 oval">
                      <div class="row conten-sub">
                        <div class="col-md-8 title-kes-center">
                          <div class="title-kes text-green" style="font-size: 40px;">
                            Sembuh
                          </div>
                        </div>
                        <div class="col-md-4 text-green"><div class="persen" style="font-size:50px;">90</div></div>
                      </div>
                    </div>   
                    <div class="col-md-4 oval">
                      <div class="row conten-sub">
                        <div class="col-md-8 title-kes-center">
                          <div class="title-kes text-green" style="font-size: 40px;">
                            Di Rawat
                          </div>
                        </div>
                        <div class="col-md-4 text-green"><div class="persen" style="font-size:50px;">90</div></div>
                      </div>
                    </div>
                    <div class="col-md-4 oval">
                      <div class="row conten-sub">
                        <div class="col-md-8 title-kes-center">
                          <div class="title-kes text-green" style="font-size: 40px;">
                            Meninggal
                          </div>
                        </div>
                        <div class="col-md-4 text-green"><div class="persen" style="font-size:50px;">90</div></div>
                      </div>
                    </div>                
                </div> 
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
              <div class="card-header text-center" style="border-bottom: 0px;">
                <div class="line-rawat"></div>
                  <div class="m-0 header-kes text-green">
                      Rawat Inap
                  </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- Rawat Inap -->
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
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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
</body>
</html>
