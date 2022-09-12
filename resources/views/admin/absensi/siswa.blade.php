<x-admin-layout title="Data User Pegawai" menu="user">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Data Absensi Siswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Daftar Absensi</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
    </x-slot>
    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header text-right">
                    <a href="#" class="btn btn-outline-info btn-flat btn-sm"><i class="fas fa-calendar"></i> {{ bulan_indo() }} {{ ambil_tahun() }}</a>
                  </div>
                  <div class="card-body">
                    <div class="alert alert-info text-center">
                        proses maintenance
                    </div>
                      {{-- <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th rowspan="3">Nama Siswa</th>
                                    <th colspan="10">Tanggal Absensi</th>
                                    <th rowspan="2" colspan="3">Total</th>
                                </tr>
                                <tr>
                                    <th colspan="2">1</th>
                                    <th colspan="2">2</th>
                                    <th colspan="2">3</th>
                                    <th colspan="2">4</th>
                                    <th colspan="2">5</th>
                                </tr>
                                <tr>
                                    <th>Pagi</th>
                                    <th>Sore</th>
                                    <th>Pagi</th>
                                    <th>Sore</th>
                                    <th>Pagi</th>
                                    <th>Sore</th>
                                    <th>Pagi</th>
                                    <th>Sore</th>
                                    <th>Pagi</th>
                                    <th>Sore</th>
                                    <th>Target</th>
                                    <th>Pagi</th>
                                    <th>Sore</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $item)
                                    <tr>
                                        <td>{{ ucwords($item->nama_siswa)}}</td>
                                        @php
                                            $jumlah = 0;
                                        @endphp
                                        @for ($i = 1; $i <= 10; $i++)
                                            @if ($loop->iteration == $i AND $loop->iteration <> 1)
                                                <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                            @else
                                                @php
                                                    $jumlah = $jumlah + 1
                                                @endphp
                                                <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                            @endif
                                        @endfor
                                        <td class="text-center">10</td>
                                        <td class="text-center">{{ $jumlah }}</td>
                                        <td class="text-center">{{ $jumlah }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="kodejs">
        <script>
            $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            });
        </script>
    </x-slot>
</x-admin-layout>