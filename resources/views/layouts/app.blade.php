<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Horizon POS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>   
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">   
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />    
   
    <link rel="stylesheet" href="{{ asset('purple_admin/css/bootstrap-datepicker.min.css') }}">
    
    <!-- <link rel="stylesheet" href="{{ asset('purple_admin/css/style.css') }}">   -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div id="app">
        <main>      
            @yield('content')
        </main>     
    </div>

    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- <script src="{{ asset('assets/js/dashboard.js') }}"></script> -->
     
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('purple_admin/js/dashboard.js') }}"></script>
    <script src="https://kit.fontawesome.com/65bbd02746.js" crossorigin="anonymous"></script>
    <!-- End custom js for this page -->
</body>
</html>
