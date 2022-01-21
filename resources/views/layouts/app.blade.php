<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INFINITY TASK</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&family=Roboto:wght@700&display=swap"
          rel="stylesheet">


    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('app.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('iconbar.svg') }}"/>
</head>
<body id="app-layout" onload="myFunction()">
@if (Auth::guest())
    <nav class="navbar navbar-expand-lg " style="background-color: white;padding: 3%">
        <img src="{{ asset('main_logo.svg') }}" alt="" width="auto" height="24"
             style="display: block;margin-left: auto;margin-right: auto;width: 50%;">
    </nav>
    <div class="container">
        <div class="row">
            <div class="col" style="position: relative;left: 20%;">
                <a href="{{ url('/login') }}" style=" text-decoration: none;">
                    <div class="card" style="width: 23rem;height: 30rem;">
                        <img src="{{ asset('login.svg') }}" class="card-img">
                        <div class="card-body">
                            <center><p class="txt-description"> Login </p></center>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="{{ url('/register') }}" style=" text-decoration: none;">
                    <div class="card" style="width: 25rem;height: 30rem;">
                        <img src="{{ asset('welcome.svg') }}" class="card-img">
                        <div class="card-body" style="align-content: center">
                            <center><p class="txt-description"> Register </p></center>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
@else
    @yield('content')
    <center><button class="btn btn-dark" type="submit"
            style="background-color: black;">
        <i class="fa fa-btn fa-sign-in"></i>Logout
    </button></center>
@endif


<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
