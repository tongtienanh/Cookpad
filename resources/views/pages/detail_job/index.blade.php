@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/detail_job.css', "statics/assets") }}">
@stop
@section('title')
    Tìm việc làm mới nhất, tuyển  mới nhất
@stop
@section('content')
    @include('component.header.header')
    @include('component.header.header_detail_job', ['border_bottom' => 1])
    @include('component.header.sub_header')
    @include('component.header.header_search')
    <div class="btn-as-mobile">
        <a href="javascript:void(0)" class="btn btn-gray btn-p-1015 js-popup-auth btn-save-mobile">
            <i class="fa fa-heart-o mr-1" aria-hidden="true"></i>
            {{ __('detail_job.save_job') }}
        </a>
        <a href="javascript:void(0)" class="btn btn-green btn-p-1015 js-popup-auth btn-apply-mobile"> {{ __('detail_job.apply_now') }}</a>
    </div>

    <section id="main">
        <div class="container">
            @include('component.breadcrumb')
        </div>
    </section>

    <div class="container">
        <div class="row">
            @include("pages.detail_job.components.content")
            @include("pages.detail_job.components.company_info")
        </div>
    </div>

    <section id="main">
        <div class="container">
            @include('component.detail_job.box_suggest_work')
            @include('component.course.course')
        </div>
    </section>

    @include('component.footer.simple')

    <form action="" class="form-search-job">
        @include('component.filter._inc_box_search_mb')
    </form>

@stop
@section('modal')
    @include('component.modal_auth._show_popup_need_login')
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
    <script src="{{ mix('js/detail_job.js', "statics/assets") }}"></script>
@stop
