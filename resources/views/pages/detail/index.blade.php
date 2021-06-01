<!doctype html>
@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{ mix('css/detail.css', 'statics/assets') }}">
@stop
@section('title')
  Cách làm món Cockpad
@stop
@section('content')
@include('component.header.header',['border_bottom'=> 1])
@include('component.modal_detail.modal_detail')
    @include('pages.detail.components.top_header')
    @include('pages.detail.components.image')
    @include('pages.detail.components.name_eating')
    @include('pages.detail.components.resources')
    @include('pages.detail.components.steps')
    @include('pages.detail.components.author_profile')
    @include('pages.detail.components.practice_img')
    @include('pages.detail.components.question')
    @include('pages.detail.components.comment')
    @include('pages.detail.components.new_eat')
    @stop
@section('script')
    <script src="{{ mix('js/detail.js', "statics/assets") }}"></script>
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/gh/BossBele/cropzee@v2.0/dist/cropzee.js" defer></script>--}}
{{--    <script src="../../../assets/js/components/cropzee.js"></script>--}}
    <script>
        $(document).ready(function(){
            $("#cropzee-input").cropzee({startSize: [100, 100, '%'],});
        });
    </script>
    @stop
