import '../../../../../../resources/assets/js/components/course';
jQuery.event.special.touchstart = {
    setup: function( _, ns, handle ){
        this.addEventListener("touchstart", handle, { passive: true });
    }
};
const Blog = {
    init() {
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            dots:false,
            nav:true,
            // autoplay:true,
            // autoplayTimeout:2000,
            // autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:false
                },
                1000:{
                    items:1,
                    nav:true,
                    loop:false
                }
            }
        })

    }
}

$(function () {
    let bLazy = new Blazy({});
    Blog.init();
})
