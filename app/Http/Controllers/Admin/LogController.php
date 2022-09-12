<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ZKLibrary;


class LogController extends Controller
{
    public $zk;

    function __construct()
    {
        $this->zk = new ZKLibrary('192.168.1.201', 4370);
        $this->zk->connect();
        $this->zk->disableDevice();
    }

    public function index()
    {
        $data = (isset($_GET['data'])) ? $_GET['data'] : NULL ;
        switch ($data) {
            case 'testsuara':
                $this->zk->testVoice();
                $data   = 'Test Suara Alat';
                break;
            case 'hapuslog':
                $this->zk->clearAttendance();
                $data   = 'Log Dalam Mesin telah terhapus';
                break;
            case 'hapususer':
                $this->zk->clearUser();
                $data   = 'Hapus User';
                break;
            case 'tambahuser':
                $this->zk->setUser(2, 101, 'agum gurnida', '', 0);
                $data   = 'Tambah User';
                break;
            case 'getdevicename':
                $data = 'Nama Alat Merk Solution Model '.$this->zk->getDeviceName();
                break;
            default:
                return view('admin.absensi.log.index');
                break;
        }
    }
}
