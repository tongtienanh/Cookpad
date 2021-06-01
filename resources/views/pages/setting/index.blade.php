@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/setting.css', 'statics/assets') }}">
@stop
@section('title')
   Cai dat
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('pages.setting.components.box')
    @include('component.footer.footer')


@stop
