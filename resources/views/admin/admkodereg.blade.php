<head>
     <title>Kode Registrasi</title>
</head>

@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-700">Penilaian</h1>

          <div class="wrapper wrapper--w960 ml-1">
          <div class="card card-4">
               <div class="card-body"><br>
                    <div class="card-body">
                         <table class="table table-bordered">
                         <thead>
                         <tr>
                              <th style="width: 10px">No.</th>
                              <th>Nama Pelajar</th>
                              <th>Jenis Bangun</th>
                              <th>Latihan ke-</th>
                              <th>Nilai</th>
                              <th style="width: 40px">Pengaturan</th>
                         </tr>
                         </thead>
                         <tbody>
                         @foreach($latihansoal as $key => $latihansoal)
                         <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $latihansoal->nama_pengguna }}</td>
                              <td>{{ $latihansoal->jenis_bangun }}</td>
                              <td>{{ $latihansoal->latihan_ke }}</td>
                              <td>{{ $latihansoal->nilai }}</td>
                              <td style="display:flex;">
                                   <a href="/penilaian/{{$latihansoal->id}}/edit" class="btn btn-primary">Koreksi</a>
                              </td>
                         </tr>
                         @endforeach
                         </tbody>
                         </table>
                    </div>
               </div>
          </div>
          </div>

     </div>
     <!-- /.container-fluid -->

@endsection