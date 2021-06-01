@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{ asset('statics/now_static/css/eat_collections.css') }}">
    {{--    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">--}}
    {{--    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">--}}
@stop
@section('title')
    Cách làm món Cockpad
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('now::pages.eat_collections.components.top_banner')
    @include('now::pages.eat_collections.components.eat_collection')
    @include('now::pages.eat_search.components.paginate')
    @include('component.footer.footer')

@stop
@section('script')
    <script src="{{ asset('statics/now_static/js/eat_collections.js') }}"></script>
    <script src="jquery.min.js"></script>
    <script src="../../../assets/js/components/owl_carousel.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
@stop
