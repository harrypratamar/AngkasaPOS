
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Angkasa</title>
    <!--favicon-->
    <link rel="shorcut icon" href="<?=base_url()?>assets/images/fav.jpg">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Datepicker -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/select2/dist/css/select2.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
    <div class="wrapper">
            <!-- header -->
      <header class="main-header">
        <!-- Logo -->
        <a href="<?=site_url('dashboard')?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>AK</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Angkasa</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <!--<span class="sr-only">Toggle navigation</span>-->
              <!--<span class="icon-bar"></span>-->
            </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?=base_url()?>assets/images/prof.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <!--header-->
                  <li class="user-header">
                    <img src="<?=base_url()?>assets/images/prof.png" class="img-circle" alt="User Image">

                    <p>
                      <?php echo $this->session->userdata('username');?>
                      <small><?php echo $this->session->userdata('level');?></small>
                    </p>
                  </li>
                  <!-- Menu Footer header-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?=site_url('Auth/logout')?>" class="btn btn-default btn-flat"><b>Keluar</b></a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?=base_url()?>assets/images/prof.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $this->session->userdata('username');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i><?php echo $this->session->userdata('level');?></a>
            </div>
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>>
              <a href="<?=site_url('dashboard')?>">
                <i class="fa fa-dashboard"></i> <span>Beranda</span>
              </a>
            </li>
            <li <?=$this->uri->segment(1) == 'transaksi'  ?'class="active"':''?>>
              <a href="<?=site_url('transaksi')?>">
                <i class="fa fa-shopping-cart"></i><span>Transaksi</span>
              </a>
            </li>
            <li <?=$this->uri->segment(1) == 'stock'  ?'class="active"':''?>>
              <a href="<?=site_url('stock')?>">
                <i class="fa fa-folder"></i> <span>Stock Barang</span>
              </a>
            </li>
            <li <?=$this->uri->segment(1) == 'pemasukan_barang'  ?'class="active"':''?>>
              <a href="<?=site_url('pemasukan_barang')?>">
                <i class="fa  fa-truck"></i><span>Pemasukkan Barang</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa  fa-line-chart"></i><span>Laporan</span>
              </a>
            </li>
            <li <?=$this->uri->segment(1)== 'user'? 'class="active"':''?>">
              <a href="<?=site_url('user')?>">
                <i class="fa fa-users"></i><span>Pengguna</span>
              </a>
            </li>
            <li <?=$this->uri->segment(1)== 'bantuan'? 'class="active"':''?>">
              <a href="<?=site_url('bantuan')?>">
                <i class="fa fa-info-circle"></i><span>Bantuan</span>
              </a>
            </li>
          </ul>

            
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <?php echo $contents ?>
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <strong>Copyright &copy; 2019 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Made with <i class="fa fa-heartbeat"></i> by Angkasa Squad.</strong>
      </footer>

      <!-- Control Sidebar -->
      
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar"></div>
    </div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Select2 -->
<script src="<?=base_url()?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?=base_url()?>assets/js/moment.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
//Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
  })
</script>

</body>
</html>
