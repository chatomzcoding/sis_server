<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Iklan;
use App\Models\Infowebsite;
use App\Models\Kategoriartikel;
use App\Models\Kategoriproduk;
use App\Models\Produk;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class LandingController extends Controller
{

    public function index()
    {
        $datapokok  = Infowebsite::first();
        return view('auth.login',compact('datapokok'));
    }
}
