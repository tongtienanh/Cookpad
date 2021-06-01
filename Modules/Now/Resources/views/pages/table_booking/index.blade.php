<!doctype html>
@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{ asset('statics/now_static/css/table_booking.css') }}" lazyload  media="print"
          onload="this.media='all'">
    {{--    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">--}}
    {{--    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">--}}
@stop
@section('title')
    Cách làm món Cockpad
@stop
@section('content')
    <div class="container">
        @include('component.modal_booking.modal_booking')
    </div>
    @include('component.header.header',['border_bottom'=> 1])
    @include('now::pages.table_booking.components.top_header')
    @include('now::pages.table_booking.components.promotion')
    @include('now::pages.table_booking.components.detail')
    @include('now::pages.table_booking.components.recently_viewed')
    @include('component.footer.footer')

@stop
@section('script')
    <script src="{{ asset('statics/now_static/js/table_booking.js') }}"></script>
    <script src="{{ asset('base/js/blazy.min.js') }}"></script>
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}

@stop
