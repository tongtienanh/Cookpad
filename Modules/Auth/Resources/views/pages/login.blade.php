@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/register.css', "statics/assets") }}">
@stop
@section('content')
    @include('component.header.header', ['border_bottom'=> 1])
    <div class="container ">
        @include('component.login')
    </div>
@stop

@section('script')
    <script src="{{ mix('js/login.js', "statics/auth_static") }}"></script>
@stop
