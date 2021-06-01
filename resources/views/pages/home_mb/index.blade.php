@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/home_mb.css', "statics/assets") }}">
@stop
@section('content')
    <div id="bg-loading">
        <img src="{{ url('statics/images/icon/consulting.svg') }}" alt="">
    </div>
    <div id="container-mb">
        <div class="content">
            <div class="content__fixed" id="content-fixed">
               <div class="swap">
                   @include('pages.home_mb.components.header')
                   @include('pages.home_mb.components.slider_company')
               </div>
            </div>
            <div class="content__dynamic js-content-scroll" id="content-dynamic">
                @include('pages.home_mb.components.search_input')
                @include('pages.home_mb.components.category_hot')
                @include('pages.home_mb.components.job_math')
                @include('pages.home_mb.components.job_highlight')
                @include('pages.home_mb.components.top_employer')
                @include('pages.home_mb.components.job_like')
                @include('pages.home_mb.components.hr_insider')
                @include('pages.home_mb.components.suggest_link')
                @include('component.footer.simple')
            </div>
        </div>
    </div>
    @include('component.sidebar', ['sub_main' => 1])
    @include('component.filter._inc_box_search_mb', ['is_home' => 1])
    @include('component.nav_bottom')
@stop

@section('modal')
    @include('component.modal_auth._login')
    @include('component.modal_auth._register')
    @include('component.modal_auth._reset_password')
@stop

@section('script')
    <script>
        let arrLocation = [];
        @php
            $locations = config('setting.locations.location');
        @endphp
        @foreach($locations as $location)
        arrLocation.push({
            id : '{{$location['id']}}',
            name : '{{$location['name']}}',
            slug : '{{$location['slug']}}',
            description : '{{$location['description']}}',
            slug_full : '{{$location['slug_full']}}',
            slug_fix : '{{$location['slug_fix']}}'
        });
        @endforeach;
    </script>
    <script src="{{ mix('js/home_mb.js', "statics/assets") }}"></script>
@stop
