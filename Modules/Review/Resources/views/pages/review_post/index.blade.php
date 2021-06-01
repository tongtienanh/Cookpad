<!Doctype html>
@extends('layouts.layout_master')
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{ asset('statics/review_static/css/review_post.css') }}">
{{--    <link rel="stylesheet" type="text/css" href="../../../../../../public/statics/plugin_css/star-rating-svg.css">--}}
    <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css"/>--}}

@stop
@section('title')
    Cách làm món Cockpad
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    <div class="container">
        <div class="" style="padding-top: 20px"></div>
        @include('review::pages.review_post.components.content')

    </div>
    @include('component.footer.footer')
@stop
@section('script')
    <script src="{{ asset('statics/review_static/js/review_post.js') }}"></script>
    <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>--}}

{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            $('.js-wrap-image a').fancybox();--}}
{{--        });--}}
{{--    </script>--}}

    <!-- Initialize Quill editor -->
    <script>
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],
            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],

            ['clean']                                         // remove formatting button
        ];
        var editor = new Quill('#editor', {
            modules: { toolbar: toolbarOptions},
            theme: 'snow'
        });
    </script>
@stop
