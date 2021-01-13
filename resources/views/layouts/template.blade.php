<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ (isset($title_view)) ? $title_view : '' }} - {{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.6/js/bootstrap-select.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.6/css/bootstrap-select.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
        rel="stylesheet" />


    <script src="{{ asset('js/app.js') }}" defer></script>


    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
        crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><i class="fas fa-exchange-alt"></i> {{ config('app.name', 'Laravel') }} </a>
        
        <div class="navbar-nav ml-auto ml-md-0"> <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
            class="fas fa-bars"></i></button></div>
                


    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Encomendas</div>
                        <a class="nav-link {{ isset($section) && $section == 'encomendasgeral' ? 'active' : '' }}"
                            href="{{ route('encomendasgeral') }}">
                            <div class="sb-nav-link-icon "><i class="fas fa-border-all"></i></div>
                            Geral
                        </a>
                        <a class="nav-link {{ isset($section) && $section == 'checkin' ? 'active' : '' }}"
                            href="{{ route('checkin') }}">
                            <div class="sb-nav-link-icon "><i class="far fa-clipboard"></i></div>
                            Nova encomenda
                        </a>
                        <a class="nav-link {{ isset($section) && $section == 'checkout' ? 'active' : '' }}"
                            href="{{ route('checkout') }}">
                            <div class="sb-nav-link-icon "><i class="fas fa-arrow-up"></i></div>
                            Aguardando Retirada
                        </a>
                        <div class="sb-sidenav-menu-heading">Geral </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Condominio
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link {{ isset($section) && $section == 'listaunidades' ? 'active' : '' }}"
                                    href="{{ route('listaunidades') }}"> Unidades</a>
                                    <a class="nav-link {{ isset($section) && $section == 'cadmorador' ? 'active' : '' }}"
                                    href="{{ route('cadmorador') }}"> Cadastrar Unidade</a>

                                <a class="nav-link {{ isset($section) && $section == 'listamoradores' ? 'active' : '' }}"
                                    href="{{ route('listamoradores') }}">Moradores</a>
                                <a class="nav-link {{ isset($section) && $section == 'cadmorador' ? 'active' : '' }}"
                                    href="{{ route('cadmorador') }}">Cadastrar Morador</a>
                            </nav>
                        </div>

                        <div class="sb-sidenav-menu-heading">Sistema </div>
                        
                        
                        <a class="nav-link"
                                    href="mailto:jonathanrsv@gmail.com">
                                    <div class="sb-nav-link-icon"><i class="fas fa-envelope-open"></i></div>
                                    Ajuda</a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logado como:</div>
                    {{ Auth::user()->name }} - <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Sair</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">


                    @yield('content')

                </div>
            </main>


            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>





</body>

</html>