<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kount</title>

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <img src="{{ asset('img/logo-with-text.svg') }}" alt="Logo">
        </div>
        <div class="col">
            <div class="card">
                <div class="title">Member Login</div>
                @if(session('message'))
                <div class="alert alert-{{session('message')['status']}}">
                    {{ session('message')['desc'] }}
                </div>
                @endif
                <form action="{{ route('dologin') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="username"><i class="fas fa-user"></i></label>
                        <input type="username" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fas fa-key"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>

                    <button type="submit" class="btn-login"><em>Log In</em></button>
                </form>
                {{-- <div class="text-center">Forgot your <a href=""><strong>login details?</strong></a></div> --}}
            </div>
        </div>
    </div>
</body>
</html>
