<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Gestão Hospitalar')</title>
    <meta name="description" content="Sistema de Gestão Hospitalar">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/remix/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}">

    @stack('styles')
    @livewireStyles

</head>

<body>


    <div id="loading-wrapper">
        <div class="spin-wrapper">

            <div class="spin">
                <div class="inner"></div>
            </div>

            <div class="spin">
                <div class="inner"></div>
            </div>

            <div class="spin">
                <div class="inner"></div>
            </div>

            <div class="spin">
                <div class="inner"></div>
            </div>

            <div class="spin">
                <div class="inner"></div>
            </div>

            <div class="spin">
                <div class="inner"></div>
            </div>

        </div>
    </div>



    <div class="page-wrapper">


        @include('layouts.header')


        <div class="main-container" >


            @hasSection('sidebar')

            @yield('sidebar')

            @else

            @include('layouts.sidebar')

            @endif



            <div class="app-container">


                {{-- Cabeçalho da página --}}
                <div class="app-hero-header d-flex align-items-center" >

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item">

                            <i class="ri-home-8-line lh-1 pe-3 me-3 border-end"></i>

                            <a href="{{ route('dashboard') }}">
                                Início
                            </a>

                        </li>

                        <li class="breadcrumb-item text-primary" aria-current="page">

                            @yield('page-title', 'Painel de Controlo')

                        </li>

                    </ol>

                </div>


                {{-- Conteúdo das páginas --}}
                @yield('content')




            </div>

        </div>

    </div>



    <div class="sidebar-overlay"></div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>


    {{-- Scripts específicos de cada página --}}
    @stack('scripts')


    @livewireScripts


</body>

</html>