@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/news_post_profile.css', 'statics/assets') }}">
@stop
@section('title')
    Trang ca nhan
@stop
@section('content')
    @include('component.header.header',['border_bottom'=> 1])
    @include('user::pages.profile.components.user_background')
    @include('user::pages.user_info.components.user_header')
    @include('user::pages.profile.components.fillter_category')
    @include('user::pages.new_post.components.news_post_profile_contents')
    @include('component.footer.footer')

@stop
@section('script')
    {{--    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>--}}
    {{--    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>--}}
    {{--    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>--}}
    {{--    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>--}}
    <script src="{{ asset('statics/assets/js/profile_image.js') }}"></script>


@endsection
