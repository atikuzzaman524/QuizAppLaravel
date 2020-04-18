<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'QuizzBuzz') }}</title>

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <script src="https://use.fontawesome.com/0bf232d69e.js"></script>
    <link rel="stylesheet" href="{{ URL::to('vendor/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>

        <div id="app">
        @include('partials.header')

    <div class="container" >

        @include('partials.errors')
        @include('partials.success')

            <div class="container">
                @yield('content')
            
            </div>
         </div>

    </div>
    @include('partials.footer')
    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
        <script src="{{ URL::to('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ URL::to('vendor/popper/popper.min.js') }}"></script>
        <script src="{{ URL::to('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>
