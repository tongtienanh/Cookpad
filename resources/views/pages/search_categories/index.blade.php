@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/search_categories.css', 'statics/assets') }}">
@stop
@section('title')
    Cookpad - nơi chia sẻ cách làm món ngon mới mỗi ngày nhiều nhất Việt Nam
@stop
@section('content')
    @include('component.header.header')
    @include('pages.setting.components.box')
    @include('component.footer.footer')


@stop
