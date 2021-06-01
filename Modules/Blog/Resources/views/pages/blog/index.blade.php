<!doctype html>
@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
{{--    <link rel="stylesheet" href="{{asset('statics/blog_static/css/blog.css') }}" lazyload  media="print"--}}
{{--          onload="this.media='all'">--}}
    <link rel="stylesheet" href="{{asset('statics/blog_static/css/blog.css') }}">
@stop
@section('title')
    Cách làm món Cockpad
@stop
@section('content')
    @include('blog::components.blog_toolbar')
    @include('component.header.header',['border_bottom'=> 1])
    @include('component.blog_nav')
    @include('blog::pages.blog.components.news_feed')
    @include('component.blog_main_news')
        @include('blog::pages.blog.components.list_blog')
        @include('blog::pages.blog.components.list_blog')
        @include('blog::pages.blog.components.list_blog')
        @include('blog::pages.blog.components.newest')
{{--    @include('component.footer.footer')--}}
    @include('component.footer.blog')

@stop
@section('script')
    <script src="{{ asset('statics/blog_static/js/blog.js') }}"></script>
    <script src="{{ asset('base/js/blazy.min.js') }}"></script>
@stop
