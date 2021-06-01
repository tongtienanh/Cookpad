@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/setting.css', 'statics/assets') }}">
@stop
@section('title')
    Friend
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('pages.setting.components.__box_friend_suggestion')
    @include('component.footer.footer')


@stop
