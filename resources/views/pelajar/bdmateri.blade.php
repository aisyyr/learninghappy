<head>
     <title>Materi Bangun Datar</title>
</head>

@extends('masterdashboard')

@section('content')

          <div class="wrapper wrapper--w960 ml-1">
               <div class="card card-4">
                    <div class="card-body">

                         <!-- Page Heading -->
                         <h1 class="h3 mb-4 text-gray-700">Materi Bangun Datar</h1>

                         <img src="{{asset('admin/images/bd1.png')}}" width="100%" height="100%" srcset="">
                         <br><br><br>
                         <iframe src="{{ asset('file_contoh/cthsoal_bd.pdf') }}" frameborder="2"  width="900" height="400"></iframe>
                         <br><br>
                    </div>
               </div>
          </div>

@endsection