@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/terms_of_service.css', 'statics/assets') }}">
@stop
@section('title')
    Cookpad - nơi chia sẻ cách làm món ngon mới mỗi ngày nhiều nhất Việt Nam
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('pages.setting.components._terms_content')
    @include('component.footer.footer')


@stop
