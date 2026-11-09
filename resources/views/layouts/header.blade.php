
<div class="header">

    {{-- Logótipo --}}
    <div class="header-left">
        <a href="{{ route('dashboard') }}" class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" width="35" height="35" alt="Logótipo">
            <span>Preclinic</span>
        </a>
    </div>

    {{-- Botões do menu lateral --}}
    <a id="toggle_btn" href="javascript:void(0);">
        <i class="fa fa-bars"></i>
    </a>

    <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar">
        <i class="fa fa-bars"></i>
    </a>

    <ul class="nav user-menu float-right">

        {{-- Notificações --}}
        <li class="nav-item dropdown d-none d-sm-block">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
            </a>

            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span>Notificações</span>
                </div>

                <div class="drop-scroll">
                    <ul class="notification-list">
                        {{-- As notificações serão adicionadas posteriormente --}}
                    </ul>
                </div>

                <div class="topnav-dropdown-footer">
                    <a href="{{ route('settings.notification') }}">
                        Configurar notificações
                    </a>
                </div>
            </div>
        </li>

     

        {{-- Menu do utilizador --}}
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">

                <span class="user-img">
                    <img class="rounded-circle"
                         src="{{ asset('assets/img/user.jpg') }}"
                         width="40"
                         alt="Foto do utilizador">

                    <span class="status online"></span>
                </span>

                <span>{{ auth()->user()->name ?? 'Administrador' }}</span>
            </a>

            <div class="dropdown-menu">

                <a class="dropdown-item" href="{{ route('profile.index') }}">
                    <i class="fa fa-user m-r-5"></i>
                    Meu Perfil
                </a>

                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                    <i class="fa fa-pencil m-r-5"></i>
                    Editar Perfil
                </a>

                <a class="dropdown-item" href="{{ route('settings.index') }}">
                    <i class="fa fa-cog m-r-5"></i>
                    Configurações
                </a>

                <a class="dropdown-item" href="{{ route('lock-screen') }}">
                    <i class="fa fa-lock m-r-5"></i>
                    Bloquear Ecrã
                </a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="{{ route('login') }}">
                    <i class="fa fa-sign-out m-r-5"></i>
                    Terminar Sessão
                </a>

            </div>
        </li>

    </ul>

    {{-- Menu do utilizador em dispositivos móveis --}}
    <div class="dropdown mobile-user-menu float-right">

        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-ellipsis-v"></i>
        </a>

        <div class="dropdown-menu dropdown-menu-right">

            <a class="dropdown-item" href="{{ route('profile.index') }}">
                Meu Perfil
            </a>

            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                Editar Perfil
            </a>

            <a class="dropdown-item" href="{{ route('settings.index') }}">
                Configurações
            </a>

            <a class="dropdown-item" href="{{ route('lock-screen') }}">
                Bloquear Ecrã
            </a>

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="{{ route('login') }}">
                Terminar Sessão
            </a>

        </div>
    </div>

</div>
