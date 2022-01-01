<head>
     <title>Latihan Soal Bangun Datar</title>
</head>

@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-700">Latihan Soal Bangun Datar</h1>

          <div class="mt-4 card-deck">

               @foreach($file_informasi as $key => $file_informasi)
               <div class="col-md-4 mt-4">
                    <div class="card" style="width: 18rem;">
                         <img src="{{asset('admin/img/open-book.png')}}" class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">{{ $file_informasi->file_info }}</h5>
                              <p class="card-text">{{ $file_informasi->keterangan}}</p>
                              <p class="card-text">{{ $file_informasi->tanggal_unggah }}</p>
                              <div style="display: flex;">
                              <a href="/homesite-info/{{$file_informasi->id}}" class="btn btn-primary">Mulai Kerjakan</a>
                              </div>
                         </div>
                    </div>
               </div>
               @endforeach

          </div><br><br><hr><br>

          <div class="wrapper wrapper--w960 ml-1">
          <h4>List Nilai Pelajar - Latihan Soal Bangun Datar</h4><br>
          
          <div class="card card-4">
               <div class="card-body"><br>
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                         <th>Nama Pelajar</th>
                         <td>Latihan Ke - </td>
                         <td>Tipe</td>
                         <th>Nilai</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($latihansoal as $key => $latihansoal)
                         <tr>
                              <td> {{$latihansoal->nama_pengguna}} </td>
                              <td> {{$latihansoal->latihan_ke}} </td>
                              <td> {{$latihansoal->jenis_bangun}}</td>
                              <td> {{ $latihansoal->nilai }} </td>
                         </tr>
                    @endforeach
                    </tbody>
                    </table>
               </div>
          </div>

          </div>

     </div>
     <!-- /.container-fluid -->

@endsection