<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    <title></title>

    {{-- css styles --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

    {{--
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    --}}


</head>
<body>


@include('partials.navigation')


@yield('content')


@include('partials.footer')


{{-- all elixir generated scripts
<script src="{{ elixir('js/all.js') }}"></script>--}}

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('js/materialize.js')}}"></script>
<script src="{{asset('js/init.js')}}"></script>


</body>
</html>