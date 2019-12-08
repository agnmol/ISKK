<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div id="body">
    <div class="col-12 col-md-9">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{!! \Session::get('success') !!}</p>
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <p>jūsų įvedamuose duomenyse yra klaidu:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </div>

    <a href="{{ URL::to('/') }}">
        <div id="header" href="{{url('/')}}">
            <h3 id="slogan" >Knygos</h3>
        </div>
    </a>
    <div id="content">
        @include('layouts.topmenu')
        @yield('left')
        @yield('right')
        <div id="footer">
        </div>
    </div>

</div>
</body>
</html>

