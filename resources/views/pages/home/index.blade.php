<!DOCTYPE html>
@extends('layouts.layout_master')

{{--@section('meta_title')--}}
{{--    {!! SEOMeta::generate() !!}--}}
{{--@stop--}}
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! JsonLd::generate() !!}
@section('css')
    <link rel="stylesheet" href="{{ mix('css/home.css', "statics/assets") }}">
@stop
@section('title')
    Cookpad,ẩm thực hàng đầu việt nam
@stop
@section('content')
    @include('component.header.header', [
        'nav_link' => 1
    ])
    @foreach($components as $component)
        @include($component['view'], ['data' => $component['data']])
    @endforeach
    @include('component.nav_bottom')
    @include('component.footer.simple')
    @include('component.filter._inc_box_search_mb', ['is_home' => 1])
@stop

@section('modal')
    @include('component.modal_auth._login')
    @include('component.modal_auth._register')
    @include('component.modal_auth._reset_password')
@stop

@section('script')
    <script src="{{ mix('js/home.js', "statics/assets") }}"></script>
    <script src="{{ asset('base/js/blazy.min.js') }}"></script>
  <script>
      // $('.rating i').click(function (e) {
      //     e.stopPropagation();
      //     if ($(this).hasClass('heart-active')) {
      //
      //         $(this).removeClass('heart-active');
      //         var old = $(this).parent('.rating').find('.number-count').text()
      //         $(this).parent('.rating').find('.number-count').text(parseInt(old) - 1)
      //     } else {
      //         $(this).addClass('heart-active');
      //         var old = $(this).parent('.rating').find('.number-count').text()
      //         $(this).parent('.rating').find('.number-count').text(parseInt(old) + 1)
      //     }
      // });
  </script>
@stop
