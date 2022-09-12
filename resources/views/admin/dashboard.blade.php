<x-admin-layout title="Dashboard" menu="dashboard">
  <x-slot name="header">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </x-slot>
  <x-slot name="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
    
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Tenaga Pengajar</span>
              <span class="info-box-number">
                {{-- {{ $main['statistik']['pengajar'] }} --}}
                {{-- <small>%</small> --}}
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
    
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Siswa</span>
              {{-- <span class="info-box-number">{{ $main['statistik']['siswa'] }}</span> --}}
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
    
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
    
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-box"></i></span>
    
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Inventaris</span>
              {{-- <span class="info-box-number">{{ $main['statistik']['inventaris'] }}</span> --}}
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-chart-line"></i></span>
    
            <div class="info-box-content">
              <span class="info-box-text">Total Pengunjung</span>
              {{-- <span class="info-box-number">{{ $main['statistik']['pengunjung'] }}</span> --}}
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              {{-- <a href="{{ url('log/user') }}" class="btn btn-primary btn-sm">lihat data user</a> --}}
              <a href="{{ url('log?data=testsuara') }}" class="btn btn-primary btn-sm">Test Suara</a>
              {{-- <a href="{{ url('log?data=getdevicename') }}" class="btn btn-primary btn-sm">Get Nama Device</a> --}}
              <a href="{{ url('log?data=hapuslog') }}" class="btn btn-danger btn-sm">Hapus Log</a>
              {{-- <a href="{{ url('log?data=hapususer') }}" class="btn btn-danger btn-sm">Hapus User</a> --}}
              {{-- <a href="{{ url('log?data=tambahuser') }}" class="btn btn-success btn-sm">Tambah User</a> --}}
              <a href="{{ url('log?data=data') }}" class="btn btn-primary btn-sm">Data Log</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </x-slot>
</x-admin-layout>