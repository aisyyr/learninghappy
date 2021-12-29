<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\LatihanSoal;

class PelajarController extends Controller
{
    // BANGUN DATAR
    public function index()
    {
        return view('pelajar.bdmateri');
    }

    public function store(Request $request)
    {
        $latihansoal = new LatihanSoal;
        $latihansoal->id = $request->id;
        $latihansoal->nama_pengguna = $request->nama_pengguna;
        $latihansoal->jenis_bangun = $request->jenis_bangun;
        $latihansoal->latihan_ke = $request->latihan_ke;
        $latihansoal->satu1 = $request->satu1;
        $latihansoal->dua2 = $request->dua2;
        $latihansoal->tiga3 = $request->tiga3;
        $latihansoal->empat4 = $request->empat4;
        $latihansoal->lima5 = $request->lima5;
        $latihansoal->enam6 = $request->enam6;
        $latihansoal->tujuh7 = $request->tujuh7;
        $latihansoal->delapan8 = $request->delapan8;
        $latihansoal->nilai = $request->nilai;

        $latihansoal->save();

        return redirect('/latihansoal-bangundatar')->with('success', 'Latihan Soal Selesai Dikerjakan!');
    }

    public function latihan()
    {
        $file_informasi = DB::table('file_informasi')->get();
        $latihansoal = DB::table('latihansoal')->get();
        return view('pelajar.bdlatihan', compact('file_informasi', 'latihansoal'));
        
        // $pelajaran = \App\Pelajaran::all();
        // $kelas = \App\Kelas::all();

        // $file_mtguru = DB::table('file_mtguru')->get();
        // return view('siswa.svclass-materi', compact('file_mtguru'), ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
    }

    // BANGUN RUANG
    public function index2()
    {
        return view('pelajar.brmateri');
    }

    public function latihan2()
    {
        $latihansoal = DB::table('latihansoal')->get();
        $file_informasi = DB::table('file_informasi')->get();
        
        return view('pelajar.brlatihan', compact('file_informasi', 'latihansoal'));
    }
}
