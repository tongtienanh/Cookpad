@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/detail_collection_content.css', 'statics/assets') }}">
@stop
@section('title')
    Trang ca nhan
@stop
@section('content')
    @include('component.modal_delete_collection.modal_delete_collection')
    @include('component.header.header',['border_bottom'=> 1])
    @include('user::pages.profile.components.user_background')
    @include('user::pages.user_info.components.user_header')
    @include('user::pages.profile.components.fillter_category')
    @include('user::pages.detail_collection.components.detail_collection_content')
    @include('component.footer.footer')

@stop
@section('script')
    <script src="{{ mix('js/detail_collection_profile.js', "statics/assets") }}"></script>
@stop
