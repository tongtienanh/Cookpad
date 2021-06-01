<div class="box-popup-forget-password modal">
    <div class="modal-header">
        <span class="modal-title">{{ __('static.box_auth.forgot_password.forgot_password_text') }}</span>
    </div>
    <div class="modal-body">
        <div class="page-auth">
            <p class="text-sm text-justify mb-1 text-forgot">{{ __('static.box_auth.forgot_password.description') }}</p>
            <form action="" method="post">
                <input type="hidden" name="_token" value="">
                <input type="hidden" name="type" value="user">
                <div class="form-group"><input type="text" name="email" class="form-control form-control-md" value=""
                                               placeholder="{{ __('static.box_auth.forgot_password.placeholder_email') }}"></div>
                <button type="submit" class="btn btn-green btn-not-radius btn-p-1230 btn-block">
                    {{ __('static.box_auth.forgot_password.forgot') }}
                </button>
            </form>
            <div class="text-center text-sm mt-2 text-login">
                <span> {{ __('static.box_auth.forgot_password.text_register') }}</span>
                <a href="#" rel="nofollow" class="text-pink js-popup-res-register"> {{ __('static.box_auth.forgot_password.register') }}</a>
            </div>
        </div>
    </div>
</div>
