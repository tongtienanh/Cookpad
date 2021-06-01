@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/register.css', "statics/assets") }}">
@stop
@section('content')
    @include('component.header.header', ['border_bottom'=> 1])
    <div class="container">
        <div class="row">
            <div class="page-auth page-auth--forgot">
                <div class="card auth-form">
                    <div class="card-body"><h2 class="title text-center">{{ __('auth.fogot_pass') }}</h2>
                        <p class="text-sm text-justify mb-1 text-forgot">{{ __('auth.text_forgot') }}</p>
                        <form action="" method="post">
                            <input type="hidden" name="_token" value="">
                            <input type="hidden" name="type" value="user">
                            <div class="form-group"><input type="text" name="email" class="form-control form-control-md"
                                                           value=""
                                                           placeholder="{{ __('auth.email_register') }}"></div>
                            <button type="submit" class="btn btn-green btn-not-radius btn-p-1230 btn-block">
                                {{ __('auth.get_pass_again') }}
                            </button>
                        </form>
                        <div class="text-center text-sm mt-2"> {{ __('auth.not_account') }} <a
                                href="{{ route('get.auth.register') }}" class="text-pink">{{ __('auth.register_') }}</a>
                        </div>
                    </div>
                </div>
                {{--                <div class="back-home text-center">--}}
                {{--                    <a href="/"><i class="fa fa-arrow-lef"></i>< Quay lại trang chủ</a>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src="{{ mix('js/forgot_pass.js', "statics/auth_static") }}"></script>
@stop
