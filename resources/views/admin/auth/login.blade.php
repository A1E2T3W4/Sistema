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

                        {{-- Logótipo --}}
                        <div class="account-logo">
                            <a href="{{ route('login') }}">
                                <img
                                    src="{{ asset('assets/img/logo-dark.png') }}"
                                    alt="Logótipo do hospital">
                            </a>
                        </div>

                        {{-- Mensagem de erro --}}
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                        @endif

                        {{-- Email --}}
                        <div class="form-group">
                            <label>Email ou Nome de Utilizador</label>
                            <input
                                type="text"
                                name="login"
                                class="form-control"
                                value="{{ old('login') }}"
                                autofocus
                                required>
                        </div>

                        {{-- Palavra-passe --}}
                        <div class="form-group">
                            <label>Palavra-passe</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required>
                        </div>

                        {{-- Recuperar palavra-passe --}}
                        <div class="form-group text-right">
                            <a href="{{ route('password.forgot') }}">
                                Esqueceu-se da palavra-passe?
                            </a>
                        </div>

                        {{-- Botão --}}
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">
                                Entrar
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