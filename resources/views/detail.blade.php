@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Portfolio Item Heading -->
    <h1 class="my-4">
        {{$data -> Name}}
    </h1>
    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        {{-- <iframe  width="750" height="500" src="{{$data -> Vdo }}"> </iframe> --}}
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
              <img src="{{ asset('img/la.jpg') }}" alt="Los Angeles" style="width:100%;">
              </div>

              <div class="item">
              <img src="{{ asset('img/chicago.jpg') }}" alt="Chicago" style="width:100%;">
              </div>

              <div class="item">
              <img src="{{ asset('img/ny.jpg') }}" alt="New york" style="width:100%;">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </div>

      <div class="col-md-4">
        <p class="my-3"><b>ที่อยู่ :</b> {{$data -> Address}}<p>
        <p class="my-3"><b>จังหวัด :</b> {{$data -> Province}}<p>
        <p class="my-3"><b>ระดับ :</b> {{$data -> Status}}<p>
        <p class="my-3"><b>วันที่สมัคร :</b> {{$data -> Register_date}}<p>
        <p class="my-3"><b>วันที่ได้รับรางวัล :</b> {{$data -> Award_date}}<p>
      </div>

    </div>

    <hr>

    <!-- /.row -->
    <script>
      function standby() {
      document.getElementById('foo1').src = "{{ asset('img/NoImageFound.jpg.png') }}"
      document.getElementById('foo2').src = "{{ asset('img/NoImageFound.jpg.png') }}"
      document.getElementById('foo3').src = "{{ asset('img/NoImageFound.jpg.png') }}"
      }
    </script>

  </div>
  <!-- /.container -->
  @endsection
