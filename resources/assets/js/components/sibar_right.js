import './footer';
var Sidebar = {
    __init()
    {
        this.showHideSidebarDetailJob();
        this.goToTop();
        this.showSupportBox();
        this.showHideSubMenuSidebar();
    },

    showHideSubMenuSidebar(){
        $('.dropdown-navigative-menu .arrrow').click(function () {
            let $this = $(this);
            if ($(this).hasClass('uparrrow')){
                $this.removeClass('uparrrow');
                $this.closest('li').removeClass('active');
                $this.siblings('ul').removeClass('show-sub')
            }else{
                $this.addClass('uparrrow');
                $this.closest('li').addClass('active');
                $this.siblings('ul').addClass('show-sub')
            }
        });
    },

    showHideSidebarDetailJob(){
        $('.js-mb-sidebar').click(function () {
            $('#background-bg').fadeIn();
            $('.pushmenu').addClass('show');
            $('body').css('overflow', 'hidden');
        });

        $('#background-bg').click(function () {
            $('#background-bg').fadeOut();
            $('.pushmenu').removeClass('show');
            $('body').css('overflow', 'auto');
        })
    },

    goToTop() {
        let $goToTop = $('.scroll-top');
        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                $goToTop.fadeIn();
            } else {
                $goToTop.fadeOut();
            }
        });

        $goToTop.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, '300');
        });
    },

    showSupportBox() {
        $('.support_main_when_hide').click(function () {
            $('.support_main_when_show').removeClass('hide');
            $('.support_box > i').attr('class', 'fa fa-comment');
            $(this).addClass('hide');
            if ($('.support_main_when_show.hide').length) {
                $('.support_box > i').attr('class', 'fa fa-comment');
            } else {
                $('.support_box > i').attr('class', 'la la-times');
            }
        });

        $('.support_box > i').click(function () {
            $('.support_main_when_show').toggleClass('hide');
            $('.support_main_when_hide').toggleClass('hide');
            if ($('.support_main_when_show.hide').length) {
                $('.support_box > i').attr('class', 'fa fa-comment');
            } else {
                $('.support_box > i').attr('class', 'la la-times');
            }
        });

        $('.support_main_when_hide .btn-close').click(function () {
            event.stopPropagation();
            $('.support_main_when_hide').css('display', 'none');
        })
    },
};
export default Sidebar;
