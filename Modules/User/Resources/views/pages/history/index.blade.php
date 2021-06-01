@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/profile_history.css', 'statics/assets') }}">
@stop
@section('title')
    Trang ca nhan
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('user::pages.profile.components.user_background')
    @include('user::pages.user_info.components.user_header')
    @include('user::pages.profile.components.fillter_category')
    @include('user::pages.history.components.history_content')
    @include('component.footer.footer')

@stop
