@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/site_map_category.css', 'statics/assets') }}">
@stop
@section('title')
    category
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 0])
    @include('pages.site_map.components.top_header')
    @include('pages.site_map.components.list_category')
    @include('pages.site_map.components.pages')
    @include('component.footer.footer')

@stop
