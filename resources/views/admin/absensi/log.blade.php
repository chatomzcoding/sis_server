<x-admin-layout title="Data Pegawai" menu="pegawai">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Log</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Daftar</li>
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
                       <a href="{{ url('admin/absensi') }}" class="btn btn-secondary btn-sm">Kembali</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <td width="25">No</td>
                                  <td>ID</td>
                                  <td>Tanggal</td>
                                </tr>
                              </thead>
                            <tbody>
                                @foreach ($log as $item)
                                    <tr>
                                    <td>{{ $item[0]}}</td>
                                    <td>{{ $item[1]}}</td>
                                    <td>{{ $item[3]}}</td>
                                    </tr>
                                @endforeach
                              </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>
