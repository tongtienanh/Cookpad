@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/user_info.css', 'statics/assets') }}">
@stop
@section('title')
    Anh Tống Tiến - Cookpad
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('user::pages.profile.components.user_background')
    @include('user::pages.user_info.components.user_header_info')
    @include('user::pages.profile.components.fillter_category_user_info')
    @include('user::pages.my_recipes.components._my_recipes')
    @include('component.footer.footer')

@stop
