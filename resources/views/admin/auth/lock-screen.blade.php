
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

    <title>Ecrã de Bloqueio | Sistema Hospitalar</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div class="main-wrapper error-wrapper">

        <div class="error-box">

            <form action="#" method="POST">
                @csrf

                {{-- Utilizador --}}
                <div class="lock-user">
                    <img
                        class="rounded-circle"
                        src="{{ asset('assets/img/user.jpg') }}"
                        alt="Fotografia do utilizador">

                    <h6>Administrador</h6>
                </div>

                {{-- Palavra-passe --}}
                <div class="form-group">
                    <input
                        class="form-control"
                        name="password"
                        placeholder="Introduza a sua palavra-passe"
                        type="password"
                        required>
                </div>

                {{-- Outro utilizador --}}
                <div class="text-center">
                    <a href="{{ route('login') }}">
                        Entrar com outro utilizador?
                    </a>
                </div>

            </form>

        </div>

    </div>

    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</body>
</html>
