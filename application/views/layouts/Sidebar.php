<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->      
        <!-- <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
                </p>
            </a>
        </li> -->
        <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
            Import Data Excel
            <i class="fas fa-angle-left right"></i>
            <!-- <span class="badge badge-info right">6</span> -->
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo site_url('import/v1')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Import V1</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('import/v2')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Import V2</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('importdata/complementary')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Complementary</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('importdata/Covid')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Import Total Covid</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('importdata/Rekap')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Import Total Rekap</p>
                </a>
            </li>
        </ul>
        </li>
        <!-- <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
            Charts
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>ChartJS</p>
            </a>
            </li>
        </ul>
        </li> -->
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<script>
   const induk = document.querySelector(".nav-treeview");
   console.log(induk.firstChild.nodeName);
</script>