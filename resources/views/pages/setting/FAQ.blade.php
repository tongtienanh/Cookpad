@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/FAQ.css', 'statics/assets') }}">
@stop
@section('title')
    Hướng Dẫn Dành Cho Cộng Đồng Sử Dụng Cookpad - Cookpad
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('pages.setting.components._FAQ_main')
    @include('component.footer.footer')


@stop


