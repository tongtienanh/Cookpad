@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/regions.css', 'statics/assets') }}">
@stop
@section('title')
    Chọn Vùng bạn ở - Cookpad
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('pages.regions.components._regions_main_contents')
    @include('component.footer.footer')


@stop
