@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{ mix('css/site_map.css', 'statics/assets') }}">
@stop
@section('title')
    Cookpad - nơi chia sẻ cách làm món ngon mới mỗi ngày nhiều nhất Việt Nam
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('pages.site_map.components.page-container')
    @include('component.footer.footer')
@stop

