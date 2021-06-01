@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/profile.css', 'statics/assets') }}">
@stop
@section('title')
    Trang cá nhân
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('user::pages.profile.components.user_background')
    @include('user::pages.user_info.components.user_header')
    @include('user::pages.profile.components.fillter_category')
    @include('user::pages.my_recipes.components.recipe_list')
    @include('component.footer.footer')
@stop
