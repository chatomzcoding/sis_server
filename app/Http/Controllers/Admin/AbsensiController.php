<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use ZKLibrary;

class AbsensiController extends Controller
{
   

    public function index()
    {
        
    }

    public function show($s)
    {
        switch ($s) {
            case 'user':
                $users = $this->zk->getUser();
                return view('admin.absensi.user', compact('users'));
                break;
            case 'testsuara':
                $users = $this->zk->testVoice();
                return redirect('admin/absensi');
                break;
            case 'log':
                $log = $this->zk->getAttendance();
                return view('admin.absensi.log', compact('log'));
                break;
            default:
                return redirect('admin/absensi');
                break;
        }
    }

    function __destruct()
    {
        $this->zk->enableDevice();
        $this->zk->disconnect();
    }
}
