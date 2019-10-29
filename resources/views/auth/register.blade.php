<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="css/login.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
            .navbar-custom {
                background-color: #a400d6;
              }
          
              body {
                padding-bottom: 30px;
                height: 100vh;
              }
          
              .navbar {
                margin-bottom: 20px;
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
              i{
                color: white;
              }
    </style>
</head>
<body style="background-color: #a400d6;">     
        <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('login') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-reply-all fa-2x" aria-hidden="true" ></i></a>
            </div>
        </div>
    </div>
    <!-- <div class="container"><a type="button" href="index.html" class="btn btn-primary fadeInDown">Primary</a></div> -->
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            
            <!-- Icon -->
            <div class="fadeIn first">
                <img src="img/logo.gif" id="icon" alt="User Icon" />
            </div>
            <br>
            <!-- Login Form -->
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror fadeIn second" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror fadeIn second" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="User Name">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror " name="password" required autocomplete="new-password" placeholder="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input id="password-confirm" type="password" class="form-control fadeIn third" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                <br>
                <hr width="200px">
                <button type="submit" class="btn navbar-custom text-white">{{ __('Register') }}</button>
            </form>
<br>
        </div>
    </div>
</body>

</html>