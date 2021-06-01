@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/company.css', "statics/browse_static") }}">
@stop
@section('content')
    @include('component.header.header')
    @include('component.header.sub_header_browse')
    @include('browse::pages.company.components.content')
    @include('component.footer.simple')
@stop

@section('script')
    <script src="{{ mix('js/company.js', "statics/browse_static") }}"></script>
@stop
