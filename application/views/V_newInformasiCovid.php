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
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/newcovid.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300&display=swap" rel="stylesheet">
  <!-- open sans -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <style>
      
      .chartdiv {
        width: 100%;
        height: 500px;
      }
  </style>
   <!-- Resources -->
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/kelly.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
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
            <h1 class="m-0 text-dark"> <small></small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="chartRekap">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title"> Pergerakan Total Kasus Pasien Covid-19</div>
                <div class="card-tools"></div>
              </div>
              <div class="card-body">
                <div id="chartRekapBulan" class="chartdiv"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title"> Persentase Kesembuhan Pasien Covid-19</div>
                <div class="card-tools"></div>
              </div>
              <div class="card-body">
                <div id="chartPersentaseSembuh" class="chartdiv"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title"> Persentase Kematian Pasien Covid-19</div>
                <div class="card-tools"></div>
              </div>
              <div class="card-body">
                <div id="chartPersentaseKematian" class="chartdiv"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title"> Pasien Covid-19 Berdasarkan Jenis Kelamin</div>
                <div class="card-tools"></div>
              </div>
              <div class="card-body">
                <div id="chartGender" class="chartdiv"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title"> Pasien Covid-19 Berdasarkan Jenis Usia</div>
                <div class="card-tools"></div>
              </div>
              <div class="card-body">
                <div id="chartAge" class="chartdiv"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- /.content -->
    <div class="content" style="background-color:transparent">
      <div class="container rawatinap">
        <div class="row">
          <div class="col-md-4">
            <div class="">
              <div class="card card-widget widget-user">
                <div class="widget-user-header bg-success health">
                  <div class="title-total">
                    800
                  </div>
                  <div class="title-persent">
                     <span class="span-persent badge badge-light number-health"> 20% </span>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="detail-health">
                        sembuh
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="">
              <div class="card card-widget widget-user">
                <div class="widget-user-header bg-info treated">
                  <div class="title-total">
                    800
                  </div>
                  <div class="title-persent">
                     <span class="span-persent badge badge-light number-treated"> 20% </span>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="detail-health">
                        dirawat
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="">
              <div class="card card-widget widget-user">
                <div class="widget-user-header bg-info death">
                  <div class="title-total">
                    800
                  </div>
                  <div class="title-persent">
                     <span class="span-persent badge badge-light number-death"> 20% </span>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="detail-health">
                        meninggal
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="">
              <div class="card card-widget widget-user">
                <div class="widget-user-header bg-info reactive">
                  <div class="title-total">
                    800
                  </div>
                  <div class="title-persent">
                     <span class="span-persent badge badge-light number-reactive"> 20% </span>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="detail-health">
                        reactive
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="">
              <div class="card card-widget widget-user">
                <div class="widget-user-header bg-info isoman">
                  <div class="title-total">
                    800
                  </div>
                  <div class="title-persent">
                     <span class="span-persent badge badge-light number-isoman"> 20% </span>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="detail-health-iso">
                        isolasi mandiri
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="">
              <div class="card card-widget widget-user">
                <div class="widget-user-header bg-info isorumdin">
                  <div class="title-total">
                    800
                  </div>
                  <div class="title-persent">
                     <span class="span-persent badge badge-light number-isorumdin"> 20% </span>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="detail-health-iso">
                        isolasi rumah dinas
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
<script>
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
