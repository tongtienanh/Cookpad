const profileImage={
    init (){
      this.tabs();
      this.openWindowShare();
      this.bookmark();
    },
    tabs(){
        $(function () {
            $('.list-group-menu li').on('click', function (){
                $('.list-group-menu li span').removeClass('active');
                $(this).find('span').addClass('active');
                var index = $(this).index();
                $('.box-item').hide()
                $('.box-item').eq(index).show();
            });
        })
    },
    openWindowShare(){
        $(document).ready(function() {
            $('.fb-share').click(function(e) {
                e.preventDefault();
                window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
                return false;
            });
        });
    },
    bookmark(){
        $('.bookmark').click(function (){
            $(this).toggleClass('active')
        })

    }
}
$(function() {
    $('.lazy').Lazy();
});

$(function (){
    profileImage.init()
})
