@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/skill.css', "statics/browse_static") }}">
@stop
@section('content')
    @include('component.header.header')
    @include('browse::pages.skill.components.content')
    @include('component.footer.simple')
@stop

@section('script')
    <script src="{{ mix('js/skill.js', "statics/browse_static") }}"></script>
@stop
