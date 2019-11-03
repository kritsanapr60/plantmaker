<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <!-- ใช้ไม่ได้ -->
        <link rel="shortcut icon" href="{{ asset('img/logo.gif') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>API UBU</title>
        <link rel="shortcut icon" href="img/logo.gif" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <style>
            body {
            background-image: url('/pix/samples/bg1.gif');
            }
            main {
                margin-bottom: 200%;
            }
            .floating-menu {
                font-family: sans-serif;
                background: white;
                padding: 20px;;
                width: 200px;
                z-index: 100;
                position: fixed;
                left: 5px;

                border-radius: 10px 10px 10px 10px;
                -moz-border-radius: 10px 10px 10px 10px;
                -webkit-border-radius: 10px 10px 10px 10px;
                border: 0px solid #000000;

                -webkit-box-shadow: 10px 10px 21px -6px rgba(0,0,0,0.43);
                -moz-box-shadow: 10px 10px 21px -6px rgba(0,0,0,0.43);
                box-shadow: 10px 10px 21px -6px rgba(0,0,0,0.43);
            }
            .floating-menu a,
            .floating-menu h3 {
                font-size: 0.9em;
                display: block;
                margin: 0 0.5em;
                color: black;
            }

            .navbar-custom {
            background-color: #a400d6;
            }

            body, html {
            padding-bottom: 20px;
            overflow-x: hidden;
            overflow-y: hidden;
            }

            .navbar {
            margin-bottom: 0px;
            }

            .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100px;
            background-color: #a400d6;
            color: white;
            text-align: center;
            }

            #map {
                height: 1200px;  /* The height is 400 pixels */
                width: 100%;  /* The width is the width of the web page */
    }
        </style>
    </head>
    <body>
<nav class="navbar fixed-top navbar-expand-sm navbar-dark navbar-custom">
    <img src="{{ asset('img/logo.gif') }}" alt="" width="30" height="35"> &nbsp;
    <a class="navbar-brand" href="{{ url('/map') }}">UBONRATCHATHANI </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
    aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="{{ url('/get/โรงเรียน') }}" id="dropdown03"  aria-expanded="false">โรงเรียน</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('/get/องค์การบริหารส่วนตําบล') }}" id="dropdown03"  aria-expanded="false">องค์การบริหารส่วนตําบล</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href=""  id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">จังหวัด</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
            <a class="dropdown-item" href="{{ url('/get/อุบลราชธานี') }}">อุบลราชธานี</a>
            <a class="dropdown-item" href="{{ url('/get/ศรีสะเกษ') }}">ศรีสะเกษ</a>
            <a class="dropdown-item" href="{{ url('/get/สุรินทร์') }}">สุรินทร์</a>
            <a class="dropdown-item" href="{{ url('/get/บุรีรัมย์') }}">บุรีรัมย์</a>
            <a class="dropdown-item" href="{{ url('/get/อำนาจเจริญ') }}">อำนาจเจริญ</a>
            <a class="dropdown-item" href="{{ url('/get/ยโสธร') }}">ยโสธร</a>
        </div>
        </li>
            <button type="button" onclick="myFunction()" class="btn btn-outline-warning">เเสดงเเถบป้าย <i class="fa fa-eye" aria-hidden="true"></i></button>
            &nbsp;

            <form class="form-inline my-2 my-lg-0">
                @guest
                    <a href="{{ url('/login') }}" class="btn btn-warning" type="buton"><i class='fas fa-sign-in-alt'></i>  เข้าสู่ระบบ</a>
                        @if (Route::has('register'))

                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->hasRole('super-admin')) 
                             <a class="dropdown-item" href="{{ asset('admin/user') }}">
                                    <i class="fas fa-user-edit"></i> เเก้ไขข้อมูล
                                 </a>

                            @else 
                                <a class="dropdown-item" href="{{ asset('/home') }}">
                                    <i class="fas fa-user-edit"></i> เเก้ไขข้อมูล
                                 </a>
                                 @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                   <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    {{-- ------- --}}
                    @guest
                    <a href="/login" class="btn btn-warning float-right" type="buton" style="display: none;"><i class='fas fa-sign-in-alt'></i>  เข้าสู่ระบบ</a>
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

    {{-- <form action="">
        <a href="{{ route('login') }}"><button type="button" class="btn btn-warning "><i class="fa fa-user"></i> LOGIN</button></a>
    </form> --}}
    </div>
</nav>
<!-- ================= -->
<div class="container-fulid">
        <br><br>
        <div class="col-sm-4">
            <nav class="floating-menu" id="myDIV">
                <center><p><b>ข้อมูลสีเเต่ละป้าย</b></p></center>
                <hr>
                    <table style="width:100% " text-align="center" border="2" bordercolor="white">
                            <tr>
                            </tr>
                            <tr>
                            <td bgcolor="#F6D400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>&nbsp;&nbsp; ก.2</td>
                            </tr>
                            <tr>
                            <td bgcolor="#630436">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>&nbsp;&nbsp; ก.1</td>
                            </tr>
                            <tr>
                            <td bgcolor="#B65FCF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>&nbsp;&nbsp; ป้ายพระราชทาน</td>
                            </tr>
                        </table>
                        <br>
                        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg" ><i class='fas fa-address-card' style='font-size:19px'></i> ข้อมูลสมาชิกเเผนที่</button>
                        <hr>
                        <center><i class="fa fa-times" aria-hidden="true" style="color: red;" data-toggle="tooltip" data-placement="bottom" title="ปิดเเถบ" onclick="myFunction()"></i></center>
                        </nav>
        </div>
</div>

<div class="containe-fluid">
    <div class="row">
    <div class="col-md-12">

            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ข้อมูลสมาชิกจังหวัด</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        @foreach ($abts as $key=> $abt)
                                            {{$key+1}}. {{$abt->Name}} จังหวัด {{$abt->Province}} ระดับ {{$abt->Status}}
                                            <br>
                                        @endforeach
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                    </div>
                                </div>
                    </div>
                </div>

<div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ข้อมูลสมาชิกจังหวัด</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                @foreach ($abts as $key=> $abt)
                    {{$key+1}}. {{$abt->Name}} จังหวัด {{$abt->Province}} ระดับ {{$abt->Status}}
                    <br>
                @endforeach
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
        </div>
    </div>

<div id="map"></div>
    <script >
    function initMap(){
    var locations = [
    @foreach($abts as $abt)
    ['{!! $contentStrings[$abt->Name] !!}', {{ $abt->Latitude }}, {{ $abt->Longitude }},'{{ $abt->Status }}','{{ $abt->Name }}'],
    @endforeach
    ];
    var myLatlng = { lat: {{$lat}}, lng: {{$lng}} };
    var zoom = {{$zoom}}
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: zoom,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;
    // http://maps.google.com/mapfiles/ms/icons/blue-dot.png
    for (i = 0; i < locations.length; i++) {
    if (locations[i][3] == "ป้ายพระราชทาน") {
        var urlmaker = "{{ asset('img/3.png') }}"
    } else if(locations[i][3] == "ก.1") {
        var urlmaker = "{{ asset('img/2.png') }}"
    } else if(locations[i][3] == "ก.2") {
        var urlmaker = "{{ asset('img/1.png') }}"
    }


    marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: urlmaker,
        title: locations[i][4],
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
        }
    })(marker, i));
    }
    }


    // Modal
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

    <script>
            function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
            }
    </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByxAxM_f64MaGCNie0y3joCJmUUA_TRZE&amp;callback=initMap"></script>

    
<script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    </div>
    </div>
</div>
</body>
</html>
