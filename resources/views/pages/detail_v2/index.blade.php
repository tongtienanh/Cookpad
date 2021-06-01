@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{ asset('statics/blog_static/css/blog_detail.css') }}">
    <style>
        .fix-adv-scroll{
            visibility: hidden;
        }
    </style>
@stop
@section('title')
    Cách làm món Cockpad
@stop
@section('content')
    @include('component.modal_like_btn.modal_like_btn')
    @include('component.modal_dislike_btn.modal_dislike_btn')
    @include('component.header.header',['border_bottom'=> 1])
    @include('blog::pages.blog_detail.components.box_main')
{{--    @include('component.footer.footer')--}}
    @include('component.footer.blog')

@stop
@section('script')
    <script src="{{ asset('base/js/blazy.min.js') }}"></script>
    <script src="{{asset('statics/blog_static/js/blog_detail.js')}}"></script>
@stop
