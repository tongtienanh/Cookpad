@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/register.css', "statics/assets") }}">
@stop
@section('content')
    @include('component.header.header', ['border_bottom'=> 1])
    <div class="container ">
        <div class="page-auth">
            <div class="card auth-form">
                <div class="card-body">
                    <h2 class="title text-center">{{ __('auth.register_') }}</h2>
                    <p class="text-center mb-2">Hoàn tất thông tin cho những lần đăng nhập sau</p>
                    <form action="" method="post">
                        <input type="hidden" name="_token" value="">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-md" name="email" value=""
                                   placeholder="{{ __('auth.email_phone') }}">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-md" name="password" value=""
                                   placeholder="{{ __('auth.password') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-md" name="name" value=""
                                   placeholder="{{ __('auth.full_name') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-md" name="phone" value=""
                                   placeholder="{{ __('auth.phone_number') }}">
                        </div>
                        <input type="hidden" name="callback" value="">
                        <button type="submit"
                                class="btn btn-green btn-not-radius btn-p-1230 btn-block js-iframe-register">{{ __('auth.complete') }}</button>
                    </form>
                    <div class="social-text">
                        <p>{{ __('auth.privacy_text') }} <a
                                href="" target="_blank">{{ __('auth.term_') }}</a>{{ __('auth.and_') }}
                            <a
                                href="" target="_blank">{{ __('auth.privacy_text_2') }}</a>
                        </p>
                        <div class="text-center text-sm mt10"> {{ __('auth.not_account') }}
                            <a href="{{ route('get.auth.register') }}" class="text-pink">{{ __('auth.register_') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop


@section('script')
    <script src="{{ mix('js/complete.js', "statics/auth_static") }}"></script>
@stop
