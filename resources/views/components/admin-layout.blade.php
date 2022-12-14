<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{ $meta ?? '' }}

  <title>SIS - {{ $title }}</title>

  <link rel="shortcut icon" href="{{ asset('img/admin/info/'.$datapokok->logo_mini)}}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/admin/lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('template/admin/lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('template/admin/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('template/admin/lte/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/admin/lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/admin/lte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template/admin/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

  <link rel="stylesheet" href="{{ asset('css/style.css')}}">

  {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('template/admin/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/admin/lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('template/admin/lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}"> --}}
    <script type="text/javascript" src="{{ asset('/vendor/ckeditor/ckeditor.js')}}"></script>

    <script src="{{ asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert2.css')}}"></script>

  {{ $head ?? ''}}
  @livewireStyles

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" target="_blank" class="nav-link">Server Local</a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('member') }}" class="nav-link">Kontak</a>
      </li> --}}
    </ul>

    <ul class="navbar-nav ml-auto">

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/dashboard')}}" class="brand-link">
      <img src="{{ asset('img/admin/info/'.$datapokok->logo_mini)}}" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ $datapokok->nama_aplikasi }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image pt-2">
          <img src="{{ asset(sistem_cekuserphoto($user->photo))}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info text-white pt-0">
          <span href="#" class="d-block text-capitalize">{{ $user->name}} <br> <small>{{ $user->level }} 
          </small></span> 
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="{{ url('/dashboard')}}" class="nav-link {{ classMenuAktif($menu,'beranda')}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p class="text">Dashboard</p>
            </a>
          </li>
          @includeWhen(view()->exists($user->level.'.menu'), $user->level.'.menu')
          @if ($user->level == 'guru' || $user->level == 'tu')
            @include('sekolah.menu')
          @endif
          <li class="nav-header">SISTEM</li>
          {{-- <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>
                Bantuan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-book-open nav-icon"></i>
                  <p>Panduan (coming soon)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-address-book nav-icon"></i>
                  <p>Kontak Kami (coming soon)</p>
                </a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item">
              <form method="POST" action="{{ route('logout') }}">
               @csrf
               <a href="{{ route('logout') }}"  class="nav-link"
                        onclick="event.preventDefault();
                               this.closest('form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i> Keluar
            </a>
            </form>
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
            {{ $header }}
        </div><!-- /.container-fluid -->
    </div>
      <!-- /.content-header -->
        <section class="content">
          @include('sistem.notifikasi')
          {{ $content }}
        </section>
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <a href="#">Sistem Informasi Sekolah</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.4.22
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
<script src="{{ asset('template/admin/lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('template/admin/lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/admin/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('template/admin/lte/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('template/admin/lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('template/admin/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/admin/lte/dist/js/adminlte.js')}}"></script>

<!-- DataTables  & Plugins -->
<script src="{{ asset('template/admin/lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('template/admin/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('template/admin/lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('template/admin/lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('template/admin/lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('template/admin/lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('template/admin/lte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('template/admin/lte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('template/admin/lte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('template/admin/lte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('template/admin/lte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
{{-- <script src="{{ asset('vendor/select2/dist/js/select2.min.js')}}"></script> --}}

<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('template/admin/lte/dist/js/demo.js')}}"></script> --}}

{{-- javascript chatomz --}}
<script src="{{ asset('/js/chatomz.js')}}"></script>

<script>
 //Initialize Select2 Elements
 $(function () {
    //Initialize Select2 Elements
    // $('.select2').select2()

        //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
 })
</script>

{{ $kodejs ?? ''}}
@stack('modals')

@livewireScripts

</body>
</html>
