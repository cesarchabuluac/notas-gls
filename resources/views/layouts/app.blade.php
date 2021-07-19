<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Notas GLS | Sistema de Logística') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('assets/css/themes/lite-purple.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/themes/lite-blue.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/plugins/perfect-scrollbar.min.css')}}" rel="stylesheet" />    
    
    <!--- FONTAWESOME pinorachi --->
    <script src="https://kit.fontawesome.com/2c7ad12115.js" crossorigin="anonymous"></script>

</head>
<body class="text-left">    
    <div id="app"> 
        <div class="app-admin-wrap layout-sidebar-large">
            @auth
            <!-- Logout -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>        
            @include('layouts.navbars.navs.auth')
            @include('layouts.navbars.sidebar')
            <div class="main-content-wrap sidenav-open d-flex flex-column">
                @yield('content')            
                @include('layouts.footers.auth')
            </div>
            @endauth
        </div>
    </div>
</body>

<script src="{{asset('assets/js/plugins/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/scripts/script.min.js')}}"></script>
<script src="{{asset('assets/js/scripts/sidebar.large.script.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/scripts/echart.options.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/scripts/dashboard.v2.script.min.js')}}"></script>
<script src="{{asset('assets/js/scripts/customizer.script.min.js')}}"></script>
</html>
