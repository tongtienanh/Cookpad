@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/search_job.css', "statics/assets") }}">
@stop
@section('title')
    Cookpad - nơi chia sẻ cách làm món ngon mới mỗi ngày nhiều nhất Việt Nam
@stop
@section('content')
    @include('component.modal_search_fillter.modal_search_fillter')
    @include('component.header.header', ['border_bottom'=> 1])
    @include('component.header.sub_header')
    @include('component.header.header_search')
    <section id="main">

        <div class="container">
            @include('component.breadcrumb')
            <div class="row">
                @include('pages.search_job.components.listing')
                @include('pages.search_job.components.aside_left')
            </div>
        </div>
    </section>
    @include('component.nav_bottom')
    @include('component.footer.simple')
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
    <script src="{{ mix('js/search_job.js', "statics/assets") }}"></script>
@stop
