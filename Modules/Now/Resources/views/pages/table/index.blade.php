<!Doctype html>
@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{ asset('statics/now_static/css/table.css') }}" lazyload  media="print"
          onload="this.media='all'">
@stop
@section('title')
    Cách làm món Cockpad
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('now::pages.table.components.mobile_search_top')
    @include('component.modal_where_booking.where_booking')
    @include('now::pages.table.components.search_form')
    @include('now::pages.table.components.top_offer')
    @include('now::pages.table.components.collection')
    @include('now::pages.table.components.collections')
    @include('now::pages.table.components.place')
    @include('now::pages.table.components.posts')
    @include('now::pages.table.components.cooperation')
    @include('component.footer.footer')

@stop
@section('script')
    <script src="{{ asset('statics/now_static/js/table.js') }}"></script>
    <script src="{{ asset('base/js/blazy.min.js') }}"></script>
@stop
