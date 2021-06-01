@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/action.css', "statics/assets") }}">
@stop
@section('content')
    @include('component.header.header')
    @include('pages.action.components._inc_box_intro')
    <div class="container">
        @include('pages.action.components._inc_text_image')
    </div>
    @include('component.footer.simple')
@stop

@section('script')
    <script src="{{ mix('js/action.js', "statics/assets") }}"></script>
@stop
