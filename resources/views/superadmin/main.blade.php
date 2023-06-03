<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> SiPupuk | SuperAdmin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('Style/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('Style/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('Style/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }} ">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('Style/plugins/jqvmap/jqvmap.min.css') }} ">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('Style/dist/css/adminlte.min.css') }} ">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('Style/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('Style/plugins/daterangepicker/daterangepicker.css')}} ">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('Style/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- Sweetalert -->
  <link rel="stylesheet" href="{{ asset('sweetalert2/dist/sweetalert2.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('Style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('Style/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="shortcut icon" href="{{asset('foto/k8.png')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('Style/dist/img/logo_load.png') }}"alt="Logo load" height="150" width="150">
    <center>Harap Tunggu...</center>
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/superadmin" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block ">
        @yield('menu')
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  sidebar-light-info elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('Style/dist/img/logo_dashboard.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sipupuk</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('Style/dist/img/user.png') }}" class="img-circle elevation-2" style="margin-top: 10px" height="100" width="100" alt="User Image">
        </div>
        <div class="info">
          <div class="row">
            <div class="col-md-2">
              <a href="#" class="d-block">{{ auth()->guard('petugas')->user()->Nama }}</a>
            </div>
            <div class="col-md-12">
              <span class="right badge badge-success">{{ auth()->guard('petugas')->user()->level }}</span>
            </div>
          </div>

        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/superadmin" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active" >
                <i class="nav-icon fas fa-users"></i>
                <p>
                    PEGAWAI
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/data_pegawai" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Pegawai</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/jenis_pupuk" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Jenis Pupuk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pupuk_masuk" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Pupuk Masuk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pupuk_keluar" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Pupuk Keluar</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    KARYAWAN GUDANG
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/data_karyawangudang" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Karyawan Gudang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/data_gudang" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Gudang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/data_stock" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Stock Pupuk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/data_pupuk" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Barang Pupuk</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    SUPIR PENGIRIM
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/datasupir" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Supir</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/datatruk" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Truk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/datapengiriman" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Pengiriman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/datajadwal" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Jadwal Pengiriman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dataoutlet" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Outlet Toko</p>
                    </a>
                </li>
            </ul>
        </li>

      <li class="nav-item">
        <a href="do_logout" class="nav-link text-red">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
                Logout
            </p>
        </a>
    </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            @yield('judul')
              {{-- <h1 class="m-0">SiPupuk || SuperAdmin</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/superadmin">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard SuperAdmin</li>
              </ol>
          </div><!-- /.col -->
      </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
{{-- conten wraper --}}
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2023-2024 <a href="https://adminlte.io">SiPupuk</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.9.2.2
    </div>
  </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


<!-- jQuery -->
<script src="{{asset('Style/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('Style/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('Style/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('Style/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('Style/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('Style/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('Style/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('Style/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('Style/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('Style/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('Style/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('Style/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('Style/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('Style/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('Style/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('Style/dist/js/pages/dashboard.js')}}"></script>
<!-- jQuery -->
<script src="{{asset('sweetalert2/dist/sweetalert2.min.js')}}"></script>
<!-- Message -->
<script src="{{asset('script/message.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('Style/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('Style/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('Style/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('Style/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $("#example3").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
  });
</script>
</body>
</html>
