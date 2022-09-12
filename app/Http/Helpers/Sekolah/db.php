<?php
namespace App\Http\Helpers\Sekolah;

use App\Models\Kbm;
use App\Models\Matapelajaran;
use Illuminate\Support\Facades\DB;

class DbSekolah {

    public static function jumlahSiswaKelasPerTahunAjaran($tahunajaran_id,$kelas_id) {
        $jumlah = Kbm::where('tahunajaran_id',$tahunajaran_id)->where('kelas_id',$kelas_id)->count();
        return $jumlah;
    }

    public static function namaPelajaranId($id) {
        $result = Matapelajaran::find($id);
        return $result;
    }
}