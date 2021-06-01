@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/location.css', "statics/browse_static") }}">
@stop
@section('content')
    @include('component.header.header')
    @include('component.header.sub_header_browse')
    @include('browse::pages.location.components.content')
    @include('component.footer.simple')
@stop

@section('script')
    <script src="{{ mix('js/location.js', "statics/browse_static") }}"></script>
@stop
