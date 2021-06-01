@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/email_success.css', "statics/assets") }}">
@stop
@section('content')
    <header class="header {{ isset($border_bottom) ? 'header-border-bottom' : '' }}"
            id="header-default"
            style="background: #fff; margin-bottom: 10px">
        <div class="wrap-header {{ $container ?? '' }}">
            <div class="logo-header ">
                <a href="/">
                    {{ config('app.app_name') }}
                </a>
            </div>
            <nav>
                <ul class="menu-header">
                </ul>
            </nav>
            <div class="header-right-box">
                <ul class="menu-header">
                    <li><a href="{{route('get.user.get_email')}}">Email</a></li>
                    <li><a href="{{ route('get.user.popup') }}">Popup</a></li>
                </ul>
            </div>
        </div>
    </header>
    <ul class="menu">
        <li><a href="#email-register-success">1. Email đăng kí tài khoản thành công</a></li>
        <li><a href="#email-support-work">2. Email đăng ký hỗ trợ việc làm</a></li>
        <li><a href="#email-support-work-in-email">3. Email đăng ký hỗ trợ việc làm qua email</a></li>
        <li><a href="#email-work">4. Email việc làm đề xuất</a></li>
        <li><a href="#email-acc-ntd-success">5. Email đăng ký tài khoản NTD thành công</a></li>
        <li><a href="#email-candidate-ntd">6. Email có ứng viên ứng tuyển</a></li>
        <li><a href="#email-reset-password">7. Email thay đổi password</a></li>
        <li><a href="#email-verify-license-fail">8. Email xác minh giấy phép thất bại</a></li>
        <li><a href="#email-verify-license-success">9. Email xác minh giấy phép thành công</a></li>
        <li><a href="#email-verify-info-ntd-fail">10. Email xác minh thông tin yêu cầu thất bại</a></li>
        <li><a href="#email-verify-info-ntd-success">11. Email xác minh thông tin yêu cầu thành công</a></li>
        <li><a href="#email-verify-job-fail">12. Email duyệt tin việc làm thất bại</a></li>
        <li><a href="#email-verify-job-success">13. Email duyệt tin việc làm thành công</a></li>
        <li><a href="#email-verify-acc-ntd">14. Email xác thực nhà tuyển dụng</a></li>
        <li><a href="#email-verify-acc">15. Email xác thực tài khoản</a></li>
    </ul>
    @include("pages.email_success.components.email_success")
    @include("pages.email_success.components.email_support_work")
    @include("pages.email_success.components.email_support_work_in_email")
    @include("pages.email_success.components.email_work")
    @include("pages.email_success.components.email_acc_success_ntd")
    @include("pages.email_success.components.email_candidate_ntd")
    @include("pages.email_success.components.email_reset_password")
    @include("pages.email_success.components.email_verify_license_fail")
    @include("pages.email_success.components.email_verify_license_success")
    @include("pages.email_success.components.email_verify_info_ntd_fail")
    @include("pages.email_success.components.email_verify_info_ntd_success")
    @include("pages.email_success.components.email_verify_job_fail")
    @include("pages.email_success.components.email_verify_job_success")
    @include("pages.email_success.components.email_verify_acc_ntd")
    @include("pages.email_success.components.email_verify_acc")
@stop
@section('script')
    <script src="{{ mix('js/email_success.js', "statics/assets") }}"></script>
@stop
