<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Shop')</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>

<div class="{{root_class()}}-page">
@include('layouts._header')
    <div class="container">
        @include('shared._messages')
        @yield('content')

    </div>

</div>
@include('layouts._footer')
<script src="{{mix('js/app.js')}}"></script>
@yield('scriptsAfterJs')
</body>
</html>
