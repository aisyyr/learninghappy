<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PelajarController extends Controller
{
    // BANGUN DATAR
    public function index()
    {
        return view('pelajar.bdmateri');
    }

    public function latihan()
    {
        $file_informasi = DB::table('file_informasi')->get();
        return view('pelajar.bdlatihan', compact('file_informasi'));
    }

    // BANGUN RUANG
    public function index2()
    {
        return view('pelajar.brmateri');
    }

    public function latihan2()
    {
        $file_informasi = DB::table('file_informasi')->get();
        return view('pelajar.brlatihan', compact('file_informasi'));
    }
}
