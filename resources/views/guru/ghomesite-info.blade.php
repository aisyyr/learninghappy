<head>
     <title>File Informasi Sekolah</title>
</head>

@extends('masterdashboard')

@section('content')

          <div class="wrapper wrapper--w960 ml-1">
               <div class="card card-4">
                    <div class="card-body">

                    <form role="form" action="/latihansoal-bangundatar" method="POST" enctype="multipart/form-data">
                    @csrf
                         <!-- Page Heading -->
                         <h4 name="file_info">{{ old('file_info', $file_informasi->file_info)}}</h4>
                         <br>

                         <h4 name="keterangan">{{ old('keterangan', $file_informasi->keterangan)}}</h4>
                         <br>

                         <h4>Tanggal Unggah : </h4>
                         <h6 class="label" name="tanggal_unggah">{{ old('tanggal_unggah', $file_informasi->tanggal_unggah)}}</h6>
                         <br>
                         
                         <hr><br><br>

                         <h4>Isi Identitas Dibawah ini Sebelum Mengerjakan Soal</h4><br>
                         <div class="input-group">
                            <label for="nama_pengguna" class="label">Nama : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="nama_pengguna" id="nama_pengguna" class="form-control @error('nama_pengguna') is-invalid @enderror" name="nama_pengguna" required autocomplete="nama_pengguna">
                                    <option disabled="disabled" selected="selected">------</option>
                                    <option value="{{Auth::user()->name}}"> {{ Auth::user()->name }}</option>
                                </select>
                                <div class="select-dropdown"></div>
                                @error('nama_pengguna')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="input-group">
                            <label for="latihan_ke" class="label">Latihan ke- : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="latihan_ke" id="latihan_ke" class="form-control @error('latihan_ke') is-invalid @enderror" name="latihan_ke" required autocomplete="latihan_ke">
                                    <option disabled="disabled" selected="selected">------</option>
                                    <option value="{{$file_informasi->file_info}}"> {{ $file_informasi->file_info }}</option>
                                </select>
                                <div class="select-dropdown"></div>
                                @error('latihan_ke')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="input-group">
                            <label for="jenis_bangun" class="label">Jenis Bangun (Datar / Ruang) : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="jenis_bangun" id="jenis_bangun" class="form-control @error('jenis_bangun') is-invalid @enderror" name="jenis_bangun" required autocomplete="jenis_bangun">
                                    <option disabled="disabled" selected="selected">------ </option>
                                    <option value="{{$file_informasi->keterangan}}"> {{ $file_informasi->keterangan }}</option>
                                </select>
                                <div class="select-dropdown"></div>
                                @error('jenis_bangun')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <br><br><hr><br>

                         <h4>SOAL LATIHAN BANGUN DATAR - LEVEL 1</h4><br>
                         <h4>Nomor 1</h4>
                         <h6 class="label" name="satu">{{ old('satu', $file_informasi->satu)}}</h6>
                         <h6>Jawab : </h6><input class="input--style-4" type="text" name="satu1" value="{{ old('satu1'), '' }}">
                         <br><br><br>

                         <h4>Nomor 2</h4>
                         <h6 class="label" name="dua">{{ old('dua', $file_informasi->dua)}}</h6>
                         <h6>Jawab : </h6><input class="input--style-4" type="text" name="dua2" value="{{ old('dua2'), '' }}">
                         <br><br><br>

                         <h4>Nomor 3</h4>
                         <h6 class="label" name="tiga">{{ old('tiga', $file_informasi->tiga)}}</h6>
                         <h6>Jawab : </h6><input class="input--style-4" type="text" name="tiga3" value="{{ old('tiga3'), '' }}">
                         <br><br><br>

                         <h4>Nomor 4</h4>
                         <h6 class="label" name="empat">{{ old('empat', $file_informasi->empat)}}</h6>
                         <h6>Jawab : </h6><input class="input--style-4" type="text" name="empat4" value="{{ old('empat4'), '' }}">
                         <br><br><br>

                         <h4>Nomor 5</h4>
                         <h6 class="label" name="lima">{{ old('lima', $file_informasi->lima)}}</h6>
                         <h6>Jawab : </h6><input class="input--style-4" type="text" name="lima5" value="{{ old('lima5'), '' }}">
                         <br><br><br>

                         <h4>Nomor 6</h4>
                         <h6 class="label" name="enam">{{ old('enam', $file_informasi->enam)}}</h6>
                         <h6>Jawab : </h6><input class="input--style-4" type="text" name="enam6" value="{{ old('enam6'), '' }}">
                         <br><br><br>

                         <h4>Nomor 7</h4>
                         <h6 class="label" name="tujuh">{{ old('tujuh', $file_informasi->tujuh)}}</h6>
                         <h6>Jawab : </h6><input class="input--style-4" type="text" name="tujuh7" value="{{ old('tujuh7'), '' }}">
                         <br><br><br>

                         <h4>Nomor 8</h4>
                         <h6 class="label" name="delapan">{{ old('delapan', $file_informasi->delapan)}}</h6>
                         <h6>Jawab : </h6><input class="input--style-4" type="text" name="delapan8" value="{{ old('delapan8'), '' }}">
                         <br>

                         <br><br>
                         <div>
                              <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Selesai&nbsp;&nbsp;&nbsp;</button>
                         </div>
                    </form>

                    </div>
               </div>
          </div>

@endsection