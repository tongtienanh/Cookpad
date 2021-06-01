@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/cookies.css', 'statics/assets') }}">
@stop
@section('title')
    Chính Sách Sử Dụng Cookies - Cookpad
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('pages.setting.components._coockies_main')
    @include('component.footer.footer')


@stop
