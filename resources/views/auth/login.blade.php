<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

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

<body id="app-layout">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4" style="padding-top: 25%">
            <img src="{{ asset('main_logo.svg') }}" style="width: 20rem" >
            <div class="panel panel-default">
                <div class="panel-body login">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}" style="padding-top: 5%;">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <div class="form-floating">

                                    <input id="floatingInputValue" placeholder="Email" type="email"
                                           class="form-control" name="email" value="{{ old('email') }}"
                                    >
                                    <label for="floatingInputValue" style="color: #BBBBBB;font-size: .8rem">Email</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="padding-top: 5%;">
                            <div class="form-floating ">
                                <input type="password" class="form-control" id="floatingInputValue"
                                       placeholder="password" name="password">
                                <label for="floatingInputValue" style="color: #BBBBBB;font-size: .8rem">Password</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group" style="padding-top: 5%;">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <input type="checkbox" name="remember">
                                    <label>Remember Me</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style="padding-top: 5%;">
                            <div class="d-grid gap-2">
                                <!---
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>-->
                                <button class="btn btn-primary" type="submit"
                                        style="background-color: #336B90;">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>

</html>


