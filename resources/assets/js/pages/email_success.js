const EmailSuccess = {
    init()
    {
        this.anchorElement();
    },

    anchorElement()
    {
        $('.menu li a').click(function(e){
            $('.menu li a').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
            let target = $($(this).attr('href'));
            if(target.length){
                let scrollTo = target.offset().top;
                $('body, html').animate({scrollTop: scrollTo+'px'}, 800);
            }
        });
    }
};

$(function () {
    EmailSuccess.init();
});
