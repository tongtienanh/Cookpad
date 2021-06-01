<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/popup.css', "statics/assets") }}">
</head>
<body>
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
        <li><a href="#welcome" rel="modal:open">1. Webcome</a></li>
        <li><a href="#welcome-back" rel="modal:open">2. Webcome Back</a></li>
        <li> <a href="#help-one" rel="modal:open">3. Help One</a></li>
        <li><a href="#help-second" rel="modal:open">4. Help two</a></li>
        <li><a href="#help-three" rel="modal:open">5. Help three</a></li>
        <li><a href="#help-last" rel="modal:open">6. Help last</a></li>
        <li> <a href="#update-avatar" rel="modal:open">7. Update Avatar</a></li>
        <li><a href="#register-job" rel="modal:open">8. Register JOb</a></li>
        <li><a href="#guest-info" rel="modal:open">9. Guest info</a></li>
        <li> <a href="#user-profile" rel="modal:open">10. User profile</a></li>
        <li><a href="#user-info" rel="modal:open">11. User info</a></li>
        <li> <a href="#profile-confirm-detail" rel="modal:open">12. Confirm profile</a></li>
        <li><a href="#profile-confirm-upload" rel="modal:open">13.Confirm upload</a></li>
        <li><a href="#apply-success" rel="modal:open">14. Apply Success</a></li>
    </ul>
    @include('component.modal_home.welcome')
    @include('component.modal_home.welcome_back')
    @include('component.modal_help.help_step_one')
    @include('component.modal_help.help_step_second')
    @include('component.modal_help.help_step_three')
    @include('component.modal_help.help_step_last')
    @include('component.modal_user.update_avatar')
    @include('component.modal_search.register_job')
    @include('component.modal_user.guest_info')
    @include('component.modal_user.user_profile')
    @include('component.modal_user.user_info')
    @include('component.modal_user.confirm_profile')
    @include('component.modal_user.confirm_profile_upload')
    @include('component.modal_user.apply_success')
    <script src="{{ mix('js/popup.js', "statics/assets") }}"></script>
</body>
</html>
