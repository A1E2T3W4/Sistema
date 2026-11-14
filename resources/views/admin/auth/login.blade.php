<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('assets/img/favicon.ico') }}">

    <title>Login | Sistema de Gestão Hospitalar</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">


                    <form action="{{ route('login.submit') }}" method="POST" class="form-signin">
                        @csrf

                       
                        <div class="account-logo">
                            <a href="{{ route('login') }}">
                                <img
                                    src="{{ asset('assets/img/logo-dark.png') }}"
                                    alt="Logótipo do hospital">
                            </a>
                        </div>

                        
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                        @endif

                       
                        <div class="form-group">
                            <label>Email or Username</label>
                            <input
                                type="text"
                                name="login"
                                class="form-control"
                                value="{{ old('login') }}"
                                autofocus
                                required>
                        </div>

                       
                        <div class="form-group">
                            <label>Password</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required>
                        </div>

                       
                        <div class="form-group text-right">
                            <a href="{{ route('password.forgot') }}">
                                Forgot your password?
                            </a>
                        </div>

                     
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">
                                Login
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>