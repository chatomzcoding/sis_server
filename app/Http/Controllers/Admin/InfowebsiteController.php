<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Infowebsite;
use Illuminate\Http\Request;

class InfowebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info   = Infowebsite::first();
        $sosial = [
            'email' => NULL,
            'telp' => NULL,
            'kode_pos' => NULL,
            'wa' => NULL,
            'website' => NULL,
        ];
        return view('admin.infowebsite.index', compact('info'));
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
     * @param  \App\Models\Infowebsite  $infowebsite
     * @return \Illuminate\Http\Response
     */
    public function show(Infowebsite $infowebsite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infowebsite  $infowebsite
     * @return \Illuminate\Http\Response
     */
    public function edit(Infowebsite $infowebsite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Infowebsite  $infowebsite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infowebsite $infowebsite)
    {
        $infowebsite    = Infowebsite::find($request->id);
        if (isset($request->logo_mini)) {
            $request->validate([
                'logo_mini' => 'required|file|image|mimes:jpeg,png,jpg|max:5000',
            ]);
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('logo_mini');
            
            $logo_mini = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'public/img/admin/info';
            // isi dengan nama folder tempat kemana file diupload
            $file->move($tujuan_upload,$logo_mini);
            deletefile($tujuan_upload.'/'.$infowebsite->logo_mini);
        } else {
            $logo_mini  = $infowebsite->logo_mini;
        }

        if (isset($request->logo)) {
            $request->validate([
                'logo' => 'required|file|image|mimes:jpeg,png,jpg|max:5000',
            ]);
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('logo');
            
            $logo = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'public/img/admin/info';
            // isi dengan nama folder tempat kemana file diupload
            $file->move($tujuan_upload,$logo);
            deletefile($tujuan_upload.'/'.$infowebsite->logo);
        } else {
            $logo  = $infowebsite->logo;
        }

        $sosial = [
            'fb' => $request->fb,
            'tw' => $request->tw,
            'ig' => $request->ig,
            'yt' => $request->yt,
            'pt' => $request->pt,
            'lk' => $request->lk,
        ];

        $kontak = [
            'email' => $request->email,
            'telp' => $request->telp,
            'kode_pos' => $request->kode_pos,
            'wa' => $request->wa,
            'website' => $request->website,
        ];
        
        Infowebsite::where('id',$infowebsite->id)->update([
            'nama_sekolah'  => $request->nama_sekolah,
            'alamat'  => $request->alamat,
            'tentang'  => $request->tentang,
            'maps'  => $request->maps,
            'sosial_media'  => json_encode($sosial),
            'kontak'  => json_encode($kontak),
            'logo_mini' => $logo_mini,
            'logo' => $logo,
        ]);
        
        return back()->with('du','Data Pokok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infowebsite  $infowebsite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infowebsite $infowebsite)
    {
        //
    }
}
