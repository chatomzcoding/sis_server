{{-- <li class="nav-item">
  <a href="{{ url('/pegawai')}}" class="nav-link">
    <i class="nav-icon fas fa-user-tie"></i>
    <p class="text">Data Pegawai</p>
  </a>
</li> --}}
<li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-calendar-check"></i>
      <p>
        Data Absensi
        <i class="fas fa-angle-left right"></i>
        {{-- <span class="badge badge-info right">6</span> --}}
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ url('/admin/absensi')}}" class="nav-link">
          &nbsp;&nbsp;<i class="fas fa-file nav-icon"></i>
          <p>Absensi Pegawai</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/admin/absensi?s=siswa')}}" class="nav-link">
          &nbsp;&nbsp;<i class="fas fa-file nav-icon"></i>
          <p>Absensi Siswa</p>
        </a>
      </li>
    </ul>
</li>