@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{ asset('statics/now_static/css/eat_search.css') }}">
{{--    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">--}}
{{--    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">--}}
@stop
@section('title')
    Cách làm món Cockpad
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('now::pages.eat_search.components.fillter')
    @include('now::pages.eat_search.components.list_item')
    @include('now::pages.eat_search.components.paginate')
{{--    @include('pages.table.components.top_offer')--}}
{{--    @include('pages.table.components.collection')--}}
{{--    @include('pages.table.components.collections')--}}
{{--    @include('pages.table.components.place')--}}
{{--    @include('pages.table.components.posts')--}}
{{--    @include('pages.table.components.cooperation')--}}
    @include('component.footer.footer')

@stop
@section('script')
    <script src="{{ asset('statics/now_static/js/eat_search.js') }}"></script>
    <script src="jquery.min.js"></script>
    <script src="../../../assets/js/components/owl_carousel.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
@stop
