<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\File_Informasi;
use App\Kelas;
use App\Kode_Registrasi;
use App\Pelajaran;
use App\Kelas_Pelajaran;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        // $nm = $request->file_doc;
        // $namaFile = $nm->getClientOriginalName();

        $file_informasi = new File_Informasi;
        $file_informasi->file_info = $request->file_info;
        $file_informasi->keterangan = $request->keterangan;
        $file_informasi->tanggal_unggah = $request->tanggal_unggah;
        $file_informasi->satu = $request->satu;
        $file_informasi->dua = $request->satu;
        $file_informasi->tiga = $request->satu;
        $file_informasi->empat = $request->satu;
        $file_informasi->lima = $request->satu;
        $file_informasi->enam = $request->satu;
        $file_informasi->tujuh = $request->satu;
        $file_informasi->delapan = $request->satu;
        // $file_informasi->file_doc = $namaFile;

        // $nm->move(public_path().'/file_info', $namaFile);
        $file_informasi->save();

        return redirect('/homesite-admin')->with('success', 'Latihan Soal berhasil diunggah!');
    }

        // $request->validate([
        //     'file_info' => 'required|unique:file_informasi',
        //     'keterangan' => 'required',
        //     'tanggal_unggah' => 'required'
        // ]);

        // $query = DB::table('file_informasi')->insert([
        //     "file_info" => $request["file_info"],
        //     "keterangan" => $request["keterangan"],
        //     "tanggal_unggah" => $request["tanggal_unggah"],
        //     "informasi" => $request["informasi"],
        //     "file_doc" => $request["file_doc"] -> store("file_informasi")
        // ]);

        
    public function index()
    {
        $file_informasi = File_Informasi::latest()->get();

        return view('admin.admhomesite', compact('file_informasi'));
    }

    public function edit($id)
    {
        $file_informasi = File_Informasi::latest()->where('id', $id)->first();
        return view('admin.adm-edit', compact('file_informasi'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'file_info' => 'required',
            'keterangan' => 'required',
            'tanggal_unggah' => 'required',
            // 'satu' => '',
            // 'dua' => '',
            // 'tiga' => '',
            // 'empat' => '',
            // 'lima' => '',
            // 'enam' => '',
            // 'tujuh' => '',
            // 'delapan' => ''

        ]);

        $query = DB::table('file_informasi')
                    ->where('id', $id)
                    ->update([
                        'file_info' => $request['file_info'],
                        'keterangan' => $request['keterangan'],
                        'tanggal_unggah' => $request['tanggal_unggah'],
                        'satu' => $request['satu'],
                        'dua' => $request['dua'],
                        'tiga' => $request['tiga'],
                        'empat' => $request['empat'],
                        'lima' => $request['lima'],
                        'enam' => $request['enam'],
                        'tujuh' => $request['tujuh'],
                        'delapan' => $request['delapan']
                    ]);

        return redirect('/homesite-admin')->with('success', 'Latihan Soal Berhasil di Ubah!');
    }

    public function destroy($id)
    {
        $query = DB::table('file_informasi')->where('id', $id)->delete();
        return redirect('/homesite-admin')->with('success', 'Latihan Soal Berhasil di Hapus!');
    }

    public function upload()
    {
        return view('admin.adm-upload');
    }

    //penggunga akun pelajar
    public function pengguna1()
    {
        $users = DB::table('users')->get()->where('roles', 'pelajar');
        return view('admin.admpengguna', compact('users'));
    }

    //hapus pengguna pelajar
    public function destroyguru($name)
    {
        $query = DB::table('users')->where('name', $name)->delete();
        return redirect('/pengguna-pelajar')->with('success', 'Akun Pengguna Berhasil di Hapus!');
    }

    public function pengguna2()
    {
        $users = DB::table('users')->get()->where('roles', 'siswa');
        return view('admin.admpengguna2', compact('users'));
    }

    public function destroysiswa($name)
    {
        $query = DB::table('users')->where('name', $name)->delete();
        return redirect('/pengguna-siswa')->with('success', 'Akun Pengguna Berhasil di Hapus!');
    }

    public function kodereg()
    {
        $latihansoal = DB::table('latihansoal')->get();
        $file_informasi = DB::table('file_informasi')->get();

        return view('admin.admkodereg', compact('latihansoal', 'file_informasi'));
    }

    //PENILAIAN
    public function edit2($id)
    {
        $latihansoal = DB::table('latihansoal')->where('id', $id)->first();
        $file_informasi = DB::table('file_informasi')->get();

        return view('admin.admkodereg-edit', compact('latihansoal', 'file_informasi'));
    }

    public function update2($id, Request $request)
    {
        // $request->validate([
            
        // ]);

        $query = DB::table('latihansoal')
                    ->where('id', $id)
                    ->update([
                        'nilai' => $request['nilai']
                    ]);

        return redirect('/penilaian')->with('success', 'Penilaian Berhasil dilakukan!');
    }



    public function pelajaran()
    {
        $pelajaran = \App\Pelajaran::all();
        $kelas = \App\Kelas::all();

        $pelajaran = DB::table('pelajaran')->get();
        return view('admin.admpelajaran', compact('pelajaran'), ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
    }

    public function upload2()
    {
        $pelajaran = \App\Pelajaran::all();

        return view('admin.admpelajaran-upload', ['pelajaran' => $pelajaran]);
    }

    public function store2(Request $request)
    {
        $request->validate([
            'nama_pelajaran' => 'required'
            
        ]);

        $query = DB::table('pelajaran')->insert([
            "nama_pelajaran" => $request["nama_pelajaran"]
        ]);

        return redirect('/pelajaran')->with('success', 'Mata Pelajaran berhasil ditambahkan!');
    }

    public function kelas7()
    {
        $pelajaran = \App\Pelajaran::all();
        $kelas = \App\Kelas::all();

        // foreach($kelas->pelajaran as $relasi) {
        //     $relasi = App\Kelas::all()->get();
        // }

        $kelas_pelajaran = DB::table('kelas_pelajaran')->where('kelas_id', '<=', 6)->get();
        // $kelas = Kelas::with('pelajaran')->get();
        return view('admin.admpelajaran7', compact('kelas_pelajaran'), ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
        // 
    }

    // public function upload3()
    // {
    //     $pelajaran = \App\Pelajaran::all();
    //     $kelas = \App\Kelas::all();

    //     return view('admin.admtambah-mpkelas', ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
    // }

    // public function store3(Request $request)
    // {
    //     $request->validate([
    //         'kelas_id' => 'required',
    //         'pelajaran_id' => 'required'
    //     ]);

    //     $query = DB::table('kelas_pelajaran')->insert([
    //         "kelas_id" => $request["kelas_id"],
    //         "pelajaran_id" => $request["pelajaran_id"]
    //     ]);

    //     return redirect('/pelajaran-7')->with('success', 'Mata Pelajaran pada Kelas berhasil ditambahkan!');
    // }

    public function kelas8()
    {
        $kelas_pelajaran = DB::table('kelas_pelajaran')->where('kelas_id', '>=', 7)->get();
        return view('admin.admpelajaran8', compact('kelas_pelajaran'));
    }

    public function kelas9()
    {
        $kelas_pelajaran = DB::table('kelas_pelajaran')->where('kelas_id', '>=', 13)->get();
        return view('admin.admpelajaran9', compact('kelas_pelajaran'));
    }
}
