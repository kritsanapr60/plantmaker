<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ Auth::user() }}</title>
    <meta charset="UTF-8">
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
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark navbar-custom">
        <img src="{{ asset('img/logo.gif') }}" alt="" width="30" height="35"> &nbsp;
        <a href="/" class="navbar-brand" style="color:white;">UBONRATCHATANI </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"></li>
            </ul>

            <a class="nav-link" href=""style="color:white;font-weight:lighter;">|&nbsp;&nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><button type="button" class="btn btn-warning ">{{ __('Logout') }}</button></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>

    @yield('content')

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
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
