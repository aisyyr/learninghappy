<head>
     <title>Homesite</title>
</head>

@extends('masterdashboard')

@section('content')

          <!-- Begin Page Content -->
          <div class="container-fluid" >

               <form role="form" action="/homesite-admin/{{$file_informasi->id}}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('PUT')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-700">Edit Latihan Soal</h1>
                    
                    <label class="label" for="judul">Judul</label>
                    <input class="input--style-4" type="text" name="file_info" value="{{ old('file_info', $file_informasi->file_info)}}">
                    @error('file_info')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="keterangan">Keterangan</label>
                    <input class="input--style-4" type="text" name="keterangan" value="{{ old('keterangan', $file_informasi->keterangan)}}">
                    @error('keterangan')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="tanggal_unggah">Tanggal Unggah</label>
                    <input class="input--style-4" type="date" name="tanggal_unggah" value="{{ old('tanggal_unggah', $file_informasi->tanggal_unggah)}}">
                    @error('tanggal_unggah')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <br>
                    <br>
                    <hr>

                    <label class="label" for="tanggal_unggah">Nomor satu</label>
                    <input class="input--style-4" type="text" name="satu" value="{{ old('satu', $file_informasi->satu)}}">
                    @error('satu')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="tanggal_unggah">Nomor dua</label>
                    <input class="input--style-4" type="text" name="dua" value="{{ old('dua', $file_informasi->dua)}}">
                    @error('dua')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="tanggal_unggah">Nomor tiga</label>
                    <input class="input--style-4" type="text" name="tiga" value="{{ old('tiga', $file_informasi->tiga)}}">
                    @error('tiga')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="tanggal_unggah">Nomor empat</label>
                    <input class="input--style-4" type="text" name="empat" value="{{ old('empat', $file_informasi->empat)}}">
                    @error('empat')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="tanggal_unggah">Nomor lima</label>
                    <input class="input--style-4" type="text" name="lima" value="{{ old('lima', $file_informasi->lima)}}">
                    @error('lima')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="tanggal_unggah">Nomor enam</label>
                    <input class="input--style-4" type="text" name="enam" value="{{ old('enam', $file_informasi->enam)}}">
                    @error('enam')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="tanggal_unggah">Nomor tujuh</label>
                    <input class="input--style-4" type="text" name="tujuh" value="{{ old('tujuh', $file_informasi->tujuh)}}">
                    @error('tujuh')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label class="label" for="tanggal_unggah">Nomor delapan</label>
                    <input class="input--style-4" type="text" name="delapan" value="{{ old('delapan', $file_informasi->delapan)}}">
                    @error('delapan')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <br><br><br>

                    <div>
                         <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Ubah&nbsp;&nbsp;&nbsp;</button>
                    </div>
               </form>

          </div>
          <!-- /.container-fluid -->

@endsection