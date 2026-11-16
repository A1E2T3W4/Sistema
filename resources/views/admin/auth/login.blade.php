
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Sistema de Gestão Hospitalar</title>

    <meta name="description" content="Sistema de Gestão Hospitalar">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}">

    {{-- CSS Medflex --}}
    <link rel="stylesheet" href="{{ asset('assets/fonts/remix/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">

</head>

<body class="login-bg">

    {{-- Container --}}
    <div class="container">

        {{-- Auth wrapper --}}
        <div class="auth-wrapper">

            {{-- Formulário --}}
            <form action="{{ route('login.submit') }}" method="POST">

                @csrf

                <div class="auth-box">

                    {{-- Logótipo --}}
                    <a href="{{ route('login') }}" class="auth-logo mb-4">
                        <img
                            src="{{ asset('assets/images/logo-dark.svg') }}"
                            alt="Logótipo do hospital">
                    </a>

                    <h4 class="mb-2">Bem-vindo de volta!</h4>

                    <p class="text-muted mb-4">
                        Entre na sua conta para aceder ao sistema hospitalar.
                    </p>

                    {{-- Mensagens de erro --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <i class="ri-error-warning-line me-1"></i>
                            {{ $errors->first() }}
                        </div>
                    @endif

                    {{-- Login --}}
                    <div class="mb-3">

                        <label class="form-label" for="login">
                            E-mail ou nome de utilizador
                            <span class="text-danger">*</span>
                        </label>

                        <input
                            type="text"
                            id="login"
                            name="login"
                            class="form-control @error('login') is-invalid @enderror"
                            placeholder="Introduza o seu e-mail ou utilizador"
                            value="{{ old('login') }}"
                            autocomplete="username"
                            autofocus
                            required>

                        @error('login')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- Palavra-passe --}}
                    <div class="mb-2">

                        <label class="form-label" for="password">
                            Palavra-passe
                            <span class="text-danger">*</span>
                        </label>

                        <div class="input-group">

                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-control"
                                placeholder="Introduza a sua palavra-passe"
                                autocomplete="current-password"
                                required>

                            <button
                                class="btn btn-outline-secondary"
                                type="button"
                                id="togglePassword"
                                aria-label="Mostrar palavra-passe">

                                <i class="ri-eye-line text-primary" id="passwordIcon"></i>

                            </button>

                        </div>

                        @error('password')
                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- Recuperar palavra-passe --}}
                    <div class="d-flex justify-content-end mb-4">

                        <a href="{{ route('password.forgot') }}"
                           class="text-decoration-underline">

                            Esqueceu-se da palavra-passe?

                        </a>

                    </div>

                    {{-- Botão de login --}}
                    <div class="mb-3 d-grid">

                        <button type="submit" class="btn btn-primary">
                            <i class="ri-login-box-line me-1"></i>
                            Entrar no Sistema
                        </button>

                    </div>

                    <div class="text-center mt-4">
                        <small class="text-muted">
                            Sistema de Gestão Hospitalar
                        </small>
                    </div>

                </div>

            </form>

        </div>

    </div>

    {{-- Mostrar / ocultar palavra-passe --}}
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {

            const password = document.getElementById('password');
            const icon = document.getElementById('passwordIcon');

            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('ri-eye-line');
                icon.classList.add('ri-eye-off-line');
            } else {
                password.type = 'password';
                icon.classList.remove('ri-eye-off-line');
                icon.classList.add('ri-eye-line');
            }

        });
    </script>

</body>
</html>
