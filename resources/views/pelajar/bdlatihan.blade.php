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
                         <div class="card-body">
                              <h5 class="card-title">{{ $file_informasi->file_info }}</h5>
                              <p class="card-text">{{ $file_informasi->keterangan }}</p>
                              <p class="card-text">{{ $file_informasi->tanggal_unggah }}</p>
                              <div style="display: flex;">
                              <a href="/homesite-info/{{$file_informasi->id}}" class="btn btn-primary">Lihat Informasi</a>
                              </div>
                         </div>
                    </div>
               </div>
               @endforeach

          </div>

     </div>
     <!-- /.container-fluid -->

@endsection