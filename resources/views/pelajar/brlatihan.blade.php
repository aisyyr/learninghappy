<head>
     <title>Latihan Soal Bangun Ruang</title>
</head>

@extends('masterdashboard')

@section('content')

     <!-- Begin Page Content -->
     <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-700">Latihan Soal Bangun Ruang</h1>

          <div class="mt-4 card-deck">

               @foreach($file_informasi as $key => $file_informasi)
               <div class="col-md-4 mt-4">
               @if($file_informasi->keterangan == 'Bangun Ruang')
                    <div class="card" style="width: 18rem;">
                         <img src="{{asset('admin/img/book.png')}}" class="card-img-top" alt="...">
                         <div class="card-body">
                              <h5 class="card-title">{{ $file_informasi->file_info }}</h5>
                              <p class="card-text">{{ $file_informasi->keterangan}}</p>
                              <p class="card-text">{{ $file_informasi->tanggal_unggah }}</p>
                              <div style="display: flex;">
                              <a href="/homesite-info/{{$file_informasi->id}}" class="btn btn-primary">Mulai Kerjakan</a>
                              </div>
                         </div>
                    </div>
               @endif
               </div>
               @endforeach

          </div><br><br><hr><br>

          <div class="wrapper wrapper--w960 ml-1">
          <h4>List Nilai Pelajar - Latihan Soal Bangun Ruang</h4><br>
          <div class="card card-4">
          @if($file_informasi->keterangan == 'Bangun Ruang')
               <div class="card-body"><br>
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                         <th>Nama Pelajar</th>
                         <td>Latihan Ke - </td>
                         <th>Nilai</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($latihansoal as $key => $latihansoal)
                         <tr>
                              <td> {{$latihansoal->nama_pengguna}} </td>
                              <td> {{$latihansoal->latihan_ke}} </td>
                              <td> {{ $latihansoal->nilai }} </td>
                         </tr>
                    @endforeach
                    </tbody>
                    </table>
               </div>
          @endif
          </div>
          </div>

     </div>
     <!-- /.container-fluid -->

@endsection