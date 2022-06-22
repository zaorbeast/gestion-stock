<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Styles -->
    <link href="{{ asset('/users/css/material-dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/users/css/recherche.css')}}">
</head>
<body>
    <div class="card">
        <div class="card-body center"  style=margin-left:10cm>
            <div class="wrapper">
                @include('layouts.user.inc.userSidebar')
                <div class="content-wrapper">
                <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
                    @include('layouts.user.inc.userNav')
                    <div class="content">
                        @yield('content')
                    </div>
                </main>
               </div>
            </div>
        </div>
    </div>

    
    <!-- Scripts -->
    <script src="{{ asset('/users/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('/users/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('/users/js/perfect-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('/users/js/smooth-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('/users/js/chartjs.min.js') }}" defer></script>
@yield('scripts')
</body>
</html>
