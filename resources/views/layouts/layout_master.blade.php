<!doctype html>
<html lang="en">
<head>
    <meta
        name="description"
        content=".">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta_title')
    @include('component.preload_font')
    @yield('css')
    <title>@yield('title')</title>
</head>
<body class="{{ (new \Jenssegers\Agent\Agent)->robot() ? 'robot-access' : '' }}">
{{--@components('component.verify_account.notifi_verify_top')--}}
@include('component.go_to_top')
@include('component.support_box')
@yield('content')
@yield('modal')
@yield('script')
</body>
</html>
