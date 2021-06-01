import 'jquery-modal';

const PopupAuth = {
    init()
    {
        this.showPopLogin();
        this.showPopRegister();
        this.showPopRegisterToLogin();
        this.showPopForgetPassword();
        this.showPopResetPasswordToRegister();
    },

    showPopLogin()
    {
        $(document).on('click', '.js-popup-auth', function () {
            $('.box-popup-login').modal('show');
        })
    },

    showPopRegister()
    {
        $(document).on('click', '.js-popup-register', function () {
            $('.box-popup-login').modal('hide');
            $('.box-popup-register').modal('show');
        })
    },

    showPopRegisterToLogin()
    {
        $(document).on('click', '.js-popup-login', function () {
            $('.box-popup-register').modal('hide');
            $('.box-popup-login').modal('show');
        })
    },

    showPopForgetPassword()
    {
        $(document).on('click', '.js-popup-forget-password', function () {
            $('.box-popup-login').modal('hide');
            $('.box-popup-forget-password').modal('show');
        })
    },

    showPopResetPasswordToRegister()
    {
        $(document).on('click', '.js-popup-res-register', function () {
            $('.box-popup-forget-password').modal('hide');
            $('.box-popup-register').modal('show');
        })
    }
};

export default PopupAuth;
