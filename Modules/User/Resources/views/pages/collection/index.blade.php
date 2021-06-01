@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/profile_collections.css', 'statics/assets') }}">
@stop
@section('title')
    Trang ca nhan
@stop
@section('content')
    @include('component.modal_create_collection.create_collection')
    @include('component.header.header',['border_bottom'=> 1])
    @include('user::pages.profile.components.user_background')
    @include('user::pages.user_info.components.user_header')
    @include('user::pages.profile.components.fillter_category')
    @include('user::pages.collection.components.collections_item')
    @include('component.footer.footer')

@stop
@section('script')
    <script src="{{ mix('js/create_collection.js', "statics/assets") }}"></script>
@stop
