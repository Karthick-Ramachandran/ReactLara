<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ReactLara - Laravel And React Forum</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

@include('nav')
  @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>

    <script>
     $(document).ready(function(){
    $('.sidenav').sidenav();
    
  });
    </script>
    <script>
        $(document).ready(function(){
          $('.tabs').tabs();
        });
    </script>
</body>
</html>
