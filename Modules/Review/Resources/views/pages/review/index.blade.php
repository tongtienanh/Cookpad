<!DOCTYPE html>
@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{asset('statics/review_static/css/review.css') }}" lazyload  media="print"
          onload="this.media='all'">
{{--    <link rel="stylesheet" type="text/css" href="../../../../../../public/statics/plugin_css/star-rating-svg.css">--}}
    @include('component.preload_font')
@stop
@section('title')
    Cách làm món Cockpad
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
{{--    @include('component.header.header_review')--}}
    @include('review::pages.review.components.box_main')
    @include('component.footer.footer')

@stop
@section('script')
    <script src="{{ asset('statics/review_static/js/review.js') }}"></script>
    <script src="{{ asset('base/js/blazy.min.js') }}"></script>
{{--    <script src="jquery.min.js"></script>--}}
{{--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>--}}
{{--    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>--}}
{{--    <script src="../../../../../../resources/assets/js/components/owl_carousel.js"></script>--}}
{{--    <script src="owlcarousel/owl.carousel.min.js"></script>--}}
@stop
