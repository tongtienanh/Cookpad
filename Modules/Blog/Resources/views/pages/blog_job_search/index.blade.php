@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{ asset('statics/blog_static/css/blog_job_search.css') }}">
@stop
@section('title')
    Cách làm món Cockpad
@stop
@section('content')
    @include('blog::components.blog_toolbar')
    @include('component.header.header',['border_bottom'=> 1])
    @include('component.blog_nav')
    @include('blog::pages.blog_job_search.components.box_main')
{{--    @include('component.footer.footer')--}}
    @include('component.footer.blog')

@stop
@section('script')
{{--    <script src="{{ mix('static/blog_static/blog_job_search.js') }}"></script>--}}
    <script src="jquery.min.js"></script>
    <script src="../../../../../../resources/assets/js/components/owl_carousel.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
@stop
