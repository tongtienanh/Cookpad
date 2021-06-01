@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/post_news.css', 'statics/assets') }}">

@stop
@section('title')
  Đăng tin
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('pages.post_news.components.about')
    @include('pages.post_news.components.resources')
    @include('pages.post_news.components.steps')

@stop
@section('script')
    <script src="{{ mix('js/post_news.js', "statics/assets") }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#sort" ).sortable();
            $( "#sort" ).disableSelection();
            $( "#sort2" ).sortable();
            $( "#sort2" ).disableSelection();
        } );
    </script>



@stop
