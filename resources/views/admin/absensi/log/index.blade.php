<x-admin-layout title="Data Pegawai" menu="pegawai">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Aplikasi FingerPrint</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Halaman Akses</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </x-slot>
    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                       Data Akses
                  </div>
                  <div class="card-body">
                    @if (!is_null($data))
                        <div class="alert alert-info">
                            {{ $data }}
                        </div>
                    @endif
                     <h2>SELAMAT DATANG</h2>
                     <a href="{{ url('log') }}" class="btn btn-primary btn-sm">Beranda</a>
                     {{-- <a href="{{ url('log/user') }}" class="btn btn-primary btn-sm">lihat data user</a> --}}
                     <a href="{{ url('log?data=testsuara') }}" class="btn btn-primary btn-sm">Test Suara</a>
                     <a href="{{ url('log?data=getdevicename') }}" class="btn btn-primary btn-sm">Get Nama Device</a>
                     <a href="{{ url('log?data=hapuslog') }}" class="btn btn-danger btn-sm">Hapus Log</a>
                     <a href="{{ url('log?data=hapususer') }}" class="btn btn-danger btn-sm">Hapus User</a>
                     <a href="{{ url('log?data=tambahuser') }}" class="btn btn-success btn-sm">Tambah User</a>
                     <a href="{{ url('log?data=data') }}" class="btn btn-primary btn-sm">Data Log</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>