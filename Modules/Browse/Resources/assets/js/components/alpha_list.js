const AlphaList = {
    init() {
        this.checkWindowScrollTop();
    },

    checkWindowScrollTop() {
        $(window).scroll(function () {
            let offsetTop = $(window).scrollTop();

            if (offsetTop >= 265) {
                $('.alpha-fixed').fadeIn();
            } else {
                $('.alpha-fixed').fadeOut();
            }
        });
    }
};

export default AlphaList;
