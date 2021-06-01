@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{ asset('statics/review_static/css/review_profile.css') }}">
    <link rel="stylesheet" type="text/css" href="public/statics/plugin_css/star-rating-svg.css">

@stop
@section('title')
    Cách làm món Cockpad
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    <div class="container">
        @include('component.breadcrumb')
        @include('review::pages.review_profile.components.top_info')
        @include('review::pages.review_profile.components.image')
        <div class="row" style="margin-top: 0px">
            @include('review::pages.review_profile.components.block_left')
            @include('review::pages.review_profile.components.block_right')

        </div>

    </div>
    {{--    @include('pages.review.components.box_main')--}}
    @include('component.footer.footer')

@stop
@section('script')
    <script src="{{ asset('statics/review_static/js/review_profile.js') }}"></script>
    <script src="jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <script src="../../../assets/js/components/owl_carousel.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
@stop
