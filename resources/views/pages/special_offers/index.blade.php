@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{ mix('css/special_offers.css', 'statics/assets') }}">
    {{--    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">--}}
    {{--    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">--}}
@stop
@section('title')
    Cách làm món Cockpad
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('pages.special_offers.components.top_banner')
    @include('pages.special_offers.components.special_offer')
    @include('Modules.Now.Resources.views.pages.eat_search.components.paginate')
    @include('component.footer.footer')

@stop
@section('script')
    <script src="{{ mix('js/eat_search.js', "statics/assets") }}"></script>
    <script src="jquery.min.js"></script>
    <script src="../../../assets/js/components/owl_carousel.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
@stop
