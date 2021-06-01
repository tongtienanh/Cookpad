@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/protected.css', 'statics/assets') }}">
@stop
@section('title')
    Chính Sách Bảo Mật - Cookpad
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('pages.setting.components._protected_main_content')
    @include('component.footer.footer')


@stop
