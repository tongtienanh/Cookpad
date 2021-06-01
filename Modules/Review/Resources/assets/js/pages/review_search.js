const reviewSearch={
    init(){
        this.fillterTop();
        this.tabs();
        this.heartCount();
    },
    fillterTop(){
        $('.fillter li').click(function (){
            $('.fillter li span').removeClass('active')
            $(this).find('span').addClass('active')
            var index = $(this).index();
            $('.box-item').hide()
            $('.box-item').eq(index).css('display','flex');
            let bLazy = new Blazy({});

        })

    },
    tabs(){
        $('.list-group-menu li').click(function (){
            $('.list-group-menu li span').removeClass('active')
            $(this).find('span').addClass('active')
            var index = $(this).index();
            $('.box').hide()
            $('.box').eq(index).show()

        })

    },
    heartCount(){
        $('.like i').click(function (e){
            e.stopPropagation();
            console.log(1)
            if ($(this).hasClass('change-color')){
                $(this).removeClass('change-color')
                var old= $(this).parent('.like').find('.my-auto').text()
                $(this).parent('.like').find('.my-auto').text(parseInt(old)-1)

            }
            else{
                $(this).addClass('change-color')
                var old= $(this).parent('.like').find('.my-auto').text()
                $(this).parent('.like').find('.my-auto').text(parseInt(old)+1)
            }
        })
    }
}
$(function () {
    let bLazy = new Blazy({});
    reviewSearch.init();
})
