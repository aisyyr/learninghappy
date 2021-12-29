<head>
     <title>Kode Registrasi</title>
</head>

@extends('masterdashboard')

@section('content')

          <!-- Begin Page Content -->
          <div class="container-fluid" >
          <h1 class="h3 mb-4 text-gray-700">Koreksi Jawaban</h1>
          <div class="card card-4">
               <div class="card-body">

                    <form role="form" action="/penilaian/{{$latihansoal->id}}" method="POST">
                    @csrf
                    @method('PUT')
                         <!-- Page Heading -->
                         <h4 name="latihan_ke">{{ old('latihan_ke', $latihansoal->latihan_ke)}}</h4>
                         <br>

                         <h4 name="jenis_bangun">{{ old('jenis_bangun', $latihansoal->jenis_bangun)}}</h4>
                         <br>

                         <h4>Nomor 1</h4>
                         <h6>Jawaban Pelajar :</h6><input class="input--style-4" type="text" disabled="true" name="satu1" value="{{ old('satu1', $latihansoal->satu1)}}">
                         <br><br><br>

                         <h4>Nomor 2</h4>
                         <h6>Jawaban Pelajar :</h6><input class="input--style-4" type="text" disabled="true" name="dua2" value="{{ old('dua2', $latihansoal->dua2)}}">
                         <br><br><br>

                         <h4>Nomor 3</h4>
                         <h6>Jawaban Pelajar :</h6><input class="input--style-4" type="text" disabled="true" name="tiga3" value="{{ old('tiga3', $latihansoal->tiga3)}}">
                         <br><br><br>

                         <h4>Nomor 4</h4>
                         <h6>Jawaban Pelajar :</h6><input class="input--style-4" type="text" disabled="true" name="empat4" value="{{ old('empat4', $latihansoal->empat4)}}">
                         <br><br><br>

                         <h4>Nomor 5</h4>
                         <h6>Jawaban Pelajar :</h6><input class="input--style-4" type="text" disabled="true" name="lima5" value="{{ old('lima5', $latihansoal->lima5)}}">
                         <br><br><br>

                         <h4>Nomor 6</h4>
                         <h6>Jawaban Pelajar :</h6><input class="input--style-4" type="text" disabled="true" name="enam6" value="{{ old('enam6', $latihansoal->enam6)}}">
                         <br><br><br>

                         <h4>Nomor 7</h4>
                         <h6>Jawaban Pelajar :</h6><input class="input--style-4" type="text" disabled="true" name="tujuh7" value="{{ old('tujuh7', $latihansoal->tujuh7)}}">
                         <br><br><br>

                         <h4>Nomor 8</h4>
                         <h6>Jawaban Pelajar :</h6><input class="input--style-4" type="text" disabled="true" name="delapan8" value="{{ old('delapan8', $latihansoal->delapan8)}}">
                         <br><br><br>
                         
                         <hr>
                         <br>
                         <br>

                         <h6>Nilai : </h6>
                         <input class="input--style-4" type="text" name="nilai" value="{{ old('nilai', $latihansoal->nilai)}}">
                         <br><br><br>

                         <div>
                              <button type="submit" class="btn btn-primary">Simpan Penilaian</button>
                         </div>
                    </form>
               </div>
          </div>
          </div>
          <!-- /.container-fluid -->

@endsection