<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use ZKLibrary;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $zk;

    function __construct()
    {
        $this->zk = new ZKLibrary('192.168.7.201', 4370);
        $this->zk->connect();
        $this->zk->disableDevice();
    }

    public function index()
    {
        $data = (isset($_GET['data'])) ? $_GET['data'] : NULL ;
        $log    = [];
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
            case 'data':
                $data = 'Data Log';
                $log = $this->zk->getAttendance();
                $notif = FALSE;
                if (isset($_GET['s'])) {
                    foreach ($log as $key) {
                        // cek jika sudah ada data jangan di simpan
                        $ceklog = Log::where('userid',$key[1])->where('waktu',$key[3])->first();
                        if (!$ceklog) {
                            Log::create([
                                'userid' => $key[1],
                                'waktu' => $key[3],
                            ]);
                            $notif = TRUE;
                        }
                    }
                }
                return view('admin.absensi.log.log', compact('log','notif'));
            default:
                return view('admin.absensi.log.index', compact('data'));
                break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function show(Log $log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function edit(Log $log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Log $log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function destroy(Log $log)
    {
        //
    }
}
