var Footer = {
    init() {
        this.showHideItem();
        this.changeLocale();
    },
    showHideItem() {
        $('.footer__tabs .js-title-mb').click(function (e) {
            //e.preventDefault();
            $(".js-content").hide();
            $(this).parent().find('.js-content').fadeIn();
        });
    },
    changeLocale() {
        $('#js-change-locale').change(function () {
            $('#frm-change-locale').submit();
        })
    }
};

$(function () {
    Footer.init();
});
