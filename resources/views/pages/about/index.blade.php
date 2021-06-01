@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/about.css', "statics/assets") }}">
@stop
@section('content')
    @include('component.header.header')
    @include('pages.about.components._inc_banner')
    @include('pages.about.components._inc_intro')
    @include('pages.about.components._inc_development')
    @include('pages.about.components._inc_about')
    @include('pages.about.components._inc_statistic')
    @include('pages.about.components._inc_box_register')
    @include('component.footer.simple')
@stop

@section('script')
    <script src="{{ mix('js/about.js', "statics/assets") }}"></script>
@stop
