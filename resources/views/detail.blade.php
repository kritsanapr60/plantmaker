<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{$data -> Name}}</title>
    <meta charset="UTF-8">
<link rel="shortcut icon" href="{{ asset('img/logo.gif') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แผนที่แสดงตำแหน่งหน่วยงานร่วมสนองพระราชดำริโครงการอนุรักษ์พันธุกรรมพืชอันเนื่องมาจากพระราชดำริฯ</title>
    <link rel="shortcut icon" href="img/logo.gif" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- cdn --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/theme.css"> -->
    <style>
        .navbar-custom {
            background-color: #a400d6;
        }
        .navbar {
            margin-bottom: 20px;
        }

        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100px;
            background-color: #a400d6;
            color: white;
            text-align: center;
            position: absolute;
        }
        .imgsize{
            width: 720px;
            height: 480px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark navbar-custom">
        <img src="{{ asset('img/logo.gif') }}" alt="" width="30" height="35"> &nbsp;
        <a href="{{ url('/map') }}" class="navbar-brand" style="color:white;">UBONRATCHATANI </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">

                    </li>

                <form class="form-inline my-2 my-lg-0">
                    @guest
                        <a href="/login" class="btn btn-warning" type="buton"><i class='fas fa-sign-in-alt'></i>  เข้าสู่ระบบ</a>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}
                            @if (Route::has('register'))
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> --}}
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/home') }}">
                                         แก้ไขข้อมูล
                                     </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        {{-- ------- --}}
                        @guest
                        <a href="{{ url('/login') }}" class="btn btn-outline-success" type="buton" style="display: none;"><i class='fas fa-sign-in-alt'></i>  เข้าสู่ระบบ</a>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}
                            @if (Route::has('register'))
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> --}}
                            @endif
                        @else
                            {{-- <li class="nav-item dropdown"> --}}
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" style="display: none;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="display: none;">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            {{-- </li> --}}
                        @endguest
                </form>
            </ul>


            {{-- <a class="nav-link" href=""style="color:white;font-weight:lighter;">|&nbsp;&nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><button type="button" class="btn btn-warning ">{{ __('Logout') }}</button></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form> --}}



        </div>
    </nav>


<div class="container">
        <!-- Portfolio Item Heading -->
        <h1 class="my-4">
            {{$data -> Name}}
        </h1>
        <hr>
        <!-- Portfolio Item Row -->
        <div class="row">

          <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                          
                        </ol>
                        <div class="carousel-inner imgsize">
                        
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('image_school/img_'.$data->Name.'_0.jpg') }}" alt="no photo">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image_school/img_'.$data->Name.'_1.jpg') }}" alt="no photo">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image_school/img_'.$data->Name.'_2.jpg') }}" alt="no photo">
                          </div>
                           <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image_school/img_'.$data->Name.'_3.jpg') }}" alt="no photo">
                          </div>
                           <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image_school/img_'.$data->Name.'_4.jpg') }}" alt="no photo">
                          </div>
                           <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image_school/img_'.$data->Name.'_5.jpg') }}" alt="no photo">
                          </div>
                           <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image_school/img_'.$data->Name.'_6.jpg') }}" alt="no photo">
                          </div>
                           <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image_school/img_'.$data->Name.'_7.jpg') }}" alt="no photo">
                          </div>
                           <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image_school/img_'.$data->Name.'_8.jpg') }}" alt="no photo">
                          </div>
                           <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('image_school/img_'.$data->Name.'_9.jpg') }}" alt="no photo">
                          </div>
                          
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
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

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">วีดีโอ <i class="fas fa-video"></i> </button>

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">วีดีโอ</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                            <iframe width="100%" height="500" src="{{$data -> Vdo}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
          </div>

        </div>


            </div>
            <hr>
    <div class="footer">
        <br>
        <p>
            โครงการอนุรักษ์พันธุกรรมพืชอันเนื่องมาจากพระราชดำริ
            สมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี
            <br>
             มหาวิทยาลัยอุบลราชธานี โทร 045-353035
             <hr width="35%">
        </p>
    </div>
    </div>
    
    <script>
            function standby() {
            document.getElementById('foo1').src = "{{ asset('img/NoImageFound.jpg.png') }}"
            document.getElementById('foo2').src = "{{ asset('img/NoImageFound.jpg.png') }}"
            document.getElementById('foo3').src = "{{ asset('img/NoImageFound.jpg.png') }}"
            }
          </script>

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
