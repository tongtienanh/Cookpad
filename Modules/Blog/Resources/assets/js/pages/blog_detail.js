import 'jquery-modal';
import Share from "../../../../../../resources/assets/js/components/share_popup";
import Sidebar from "../../../../../../resources/assets/js/components/sibar_right";
import owl_carousel from "../../../../../../resources/assets/js/components/owl_carousel";
const BlogDetail ={
    init(){
        this.dropBtn();
        this.windowScroll();
        // this.owlCarousel()
    },
    // owl_carousel(){
    //     $('#cooksnaps').owlCarousel({
    //         loop: true,
    //         margin: 10,
    //         pagination: false,
    //         nav: true,
    //         lazyLoad: true,
    //         navText: ['', ''],
    //         // autoplay: true,
    //         dots: false,
    //         autoplayTimeout: 4000,
    //         autoplayHoverPause: true,
    //         responsive: {
    //             0: {
    //                 items: 1.5
    //             },
    //             600: {
    //                 items: 3
    //             },
    //             1000: {
    //                 items: 5
    //             }
    //         }
    //     })
    // },
    dropBtn(){
        $('.dropbtn').click(function (){
            $(this).closest('#ftwp-contents').find('ol').slideToggle(400);
        })
    },
    windowScroll(){
        $(window).scroll(function () {
            let offsetTop = $(this).scrollTop()
            console.log(offsetTop)

            if (offsetTop >= 145 )  {
                $('.floating-bar').addClass('fixed')
            }
            else {
                $('.floating-bar').removeClass('fixed')
            }
        })
    }
}


$(function (){
    let bLazy = new Blazy({});
    BlogDetail.init()
    Share.init()
    Sidebar.__init()
})
