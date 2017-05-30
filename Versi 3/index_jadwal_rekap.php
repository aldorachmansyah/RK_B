<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Status Kendaraan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>F</b>RN</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>For</b>Rent</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 1 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">

                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i>Rekap bulan februari
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Admin
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="index.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Rekap Kendaraan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="jadwal_rekap_baru.php"><i class="fa fa-circle-o"></i>Home</a></li>
          </ul>
          <ul class="treeview-menu">
            <li class="active"><a href="index_jadwal_rekap.php"><i class="fa fa-circle-o"></i>List</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"

    <!-- Main content -->
    <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <h2 style="color: black">Jadwal Rekap/Pembayaran Kendaraan</h2>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr style="background: #C9C9C9;">
                    <th style="text-align: center;padding: 8px;">Nopol</th>
                    <th style="text-align: center;padding: 8px;">Driver</th>
                    <th style="text-align: center;padding: 8px;">Merk</th>
                    <th style="text-align: center;padding: 8px;">Jenis</th>
                    <th style="text-align: center;padding: 8px;">Harga Sewa (per hari)</th>
                    <th style="text-align: center;padding: 8px;">Pengeluaran Service</th>
                    <th style="text-align: center;padding: 8px;">Pemasukan Total</th>
                    <th style="text-align: center;padding: 8px;">Bulan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="text-align: center;">
                    <td>B 510 NDA</td>
                    <td>Ario Bimo</td>
                    <td>Kia</td>
                    <td>Rio</td>
                    <td>250.000</td>
                    <td>500.000</td>
                    <td>1.500.000</td>
                    <td>Januari</td>
                  </tr>
                  <tr style="text-align: center;">
                    <td>B 4707 BAN</td>
                    <td>Bimo Ario</td>
                    <td>Honda</td>
                    <td>City</td>
                    <td>250.000</td>
                    <td>1.000.000</td>
                    <td>2.000.000</td>
                    <td>Januari</td>
                  </tr>
                  <tr style="text-align: center;">
                    <td>L 1712 KL</td>
                    <td>Sumila</td>
                    <td>Suzuki</td>
                    <td>Ertiga</td>
                    <td>350.000</td>
                    <td>300.000</td>
                    <td>1.000.000</td>
                    <td>Januari</td>
                  </tr>

                  <tr style="text-align: center;">
                    <td>D 123 VE</td>
                    <td>Faizul</td>
                    <td>Toyota</td>
                    <td>Innova</td>
                    <td>400.000</td>
                    <td>400.000</td>
                    <td>2.500.000</td>
                    <td>Januari</td>
                  </tr>

                  <tr style="text-align: center;">
                    <td>W 120 SI</td>
                    <td>Sina</td>
                    <td>Toyota</td>
                    <td>Agya</td>
                    <td>280.000</td>
                    <td>200.000</td>
                    <td>500.000</td>
                    <td>Januari</td>
                  </tr>

                   <tr style="text-align: center;">
                    <td>B 510 NDA</td>
                    <td>Ario Bimo</td>
                    <td>Kia</td>
                    <td>Rio</td>
                    <td>250.000</td>
                    <td>400.000</td>
                    <td>1.250.000</td>
                    <td>Februari</td>
                  </tr>
                  <tr style="text-align: center;">
                    <td>B 4707 BAN</td>
                    <td>Bimo Ario</td>
                    <td>Honda</td>
                    <td>City</td>
                    <td>250.000</td>
                    <td>500.000</td>
                    <td>2.500.000</td>
                    <td>Februari</td>
                  </tr>
                  <tr style="text-align: center;">
                    <td>L 1712 KL</td>
                    <td>Sumila</td>
                    <td>Suzuki</td>
                    <td>Ertiga</td>
                    <td>350.000</td>
                    <td>200.000</td>
                    <td>1.400.000</td>
                    <td>Februari</td>
                  </tr>

                  <tr style="text-align: center;">
                    <td>D 123 VE</td>
                    <td>Faizul</td>
                    <td>Toyota</td>
                    <td>Innova</td>
                    <td>400.000</td>
                    <td>600.000</td>
                    <td>3.200.000</td>
                    <td>Februari</td>
                  </tr>

                  <tr style="text-align: center;">
                    <td>W 120 SI</td>
                    <td>Sina</td>
                    <td>Toyota</td>
                    <td>Agya</td>
                    <td>280.000</td>
                    <td>400.000</td>
                    <td>800.000</td>
                    <td>Februari</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
