<!doctype html>
@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{ asset('statics/blog_static/css/blog_detail.css') }}" lazyload  media="print"
          onload="this.media='all'">
{{--    <link rel="stylesheet" type="text/css" href="../../../../../../public/statics/plugin_css/star-rating-svg.css">--}}

@stop

@section('title')
    Cách làm món Cockpad
@stop
@section('content')
    @include('component.modal_like_btn.modal_like_btn')
    @include('component.modal_dislike_btn.modal_dislike_btn')
    @include('blog::components.blog_toolbar')
    @include('component.header.header',['border_bottom'=> 1])
    @include('component.blog_nav')
    @include('blog::pages.blog_detail.components.box_main')
{{--    @include('component.footer.footer')--}}
    @include('component.footer.blog')

@stop
@section('script')
    <script src="{{asset('statics/blog_static/js/blog_detail.js')}}"></script>
    <script src="{{ asset('base/js/blazy.min.js') }}"></script>
{{--    <script src="jquery.min.js"></script>--}}
{{--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>--}}
{{--    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>--}}
    <script>
        // $(".my-rating").starRating({
        //     initialRating: 4,
        //     strokeColor: '#894A00',
        //     strokeWidth: 10,
        //     starSize: 25
        // });

    </script>
@stop
