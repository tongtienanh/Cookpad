// import 'owl.carousel/dist/assets/owl.carousel.css';
// import 'owl.carousel/dist/assets/owl.theme.default.css';
// import 'owl.carousel';
// import 'jquery-modal';
import Sidebar from "../components/sibar_right";
import "../components/list_item.js";
import Suggestion from "../components/suggestion";
import OwlCarousel from "../components/owl_carousel";
import PopupAuth from "../components/popup_auth";
import ShowMoreUser from "../components/show_more_mb";
import SearchMobile from "../components/search_mobile";
import ShowSuggestionKeyword from "../components/show_suggestion_search";
import 'jquery-modal'
import '../../../assets/js/components/course'
const Home = {
    init() {
        this.banner();
        this.banner1();
        this.banner2();
        this.friend();
        this.cooksnaps();
        this.iconDrop();
        this.dataLink();
        this.modalAuthShow();
    },
    banner() {
        $('#banner').owlCarousel({
            loop: true,
            margin: 10,
            pagination: false,
            nav: false,
            lazyLoad: true,
            navText: ['', ''],
            autoplay: true,
            dots: false,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    },
    banner1() {
        $('#banner-1').owlCarousel({
            loop: true,
            margin: 10,
            pagination: false,
            nav: true,
            lazyLoad: true,
            navText: ['', ''],
            autoplay: true,
            dots: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 4
                }
            }
        })
    },
    banner2(){
        $('#banner-2').owlCarousel({
            loop: true,
            margin: 10,
            pagination: false,
            nav: true,
            lazyLoad: true,
            navText: ['', ''],
            autoplay: true,
            dots: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 4
                }
            }
        })
    },
    friend(){
        $('#friend').owlCarousel({
            loop: true,
            margin: 10,
            pagination: false,
            nav: true,
            lazyLoad: true,
            navText: ['', ''],
            // autoplay: true,
            dots: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1.5
                },
                600: {
                    items: 2.5
                },
                1000: {
                    items: 4
                }
            }
        })
    },
    cooksnaps(){
        $('#cooksnaps').owlCarousel({
            loop: true,
            margin: 10,
            pagination: false,
            nav: true,
            lazyLoad: true,
            navText: ['', ''],
            // autoplay: true,
            dots: false,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1.5
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    },
    iconDrop(){
        $('.icon-drop').click(function () {
            $(this).children('.option').toggle()
        })
    },
    dataLink(){
        $(document).ready(function () {
            $("[data-link]").click(function () {
                window.location.href = $(this).attr("data-link");
                return false;
            });
        });
    },
    modalAuthShow(){
        $('.post-comment').click(function (){
            $('.box-popup-login').modal('show')
        })
    }
}
console.log($('.box-popup-login'))





// const Home = {
//     init : function ()
//     {
//         Suggestion.init();
//         Sidebar.__init();
//         this.carouselSpotlight();
//         // this.showModalSaveJob();
//         PopupAuth.init();
//         ShowMoreUser.loadMoreMenu();
//     },
//
//     carouselSpotlight()
//     {
//         $('.company-hot').owlCarousel({
//             items:1,
//             loop:true,
//             margin:10,
//             nav:true,
//             autoplay:true,
//             dots: false,
//             autoplayTimeout:3000,
//             autoplayHoverPause:true,
//             navText:
//                 ["<img src='../../../statics/images/icon/prev_green.svg'>",
//                 "<img src='../../../statics/images/icon/next_green.svg'>"]
//         });
//
//         $('.job-hot').owlCarousel({
//             items:1,
//             loop:true,
//             margin:10,
//             autoplay:true,
//             autoplayTimeout:3000,
//             autoplayHoverPause:true,
//         });
//
//         let option_feed_back = {
//             items:3,
//             loop:true,
//             margin:0,
//             autoplay:true,
//             autoplayTimeout:3000,
//             autoplayHoverPause:true,
//         };
//         OwlCarousel.checkMode(1123, '.feed-back', option_feed_back);
//
//         let job_hot_your = {
//             items:1,
//             loop:true,
//             margin:0,
//             nav:true,
//             autoplay:true,
//             autoplayTimeout:4000,
//             autoplayHoverPause:true,
//             navText:
//                 ["<img src='../../../statics/images/icon/prev_green.svg'>",
//                     "<img src='../../../statics/images/icon/next_green.svg'>"],
//         };
//         OwlCarousel.checkMode(992, '.job-hot-your', job_hot_your);
//
//         let option_talks_about = {
//             items:4,
//             loop:true,
//             margin:10,
//             nav:true,
//             autoplay:true,
//             dots: false,
//             autoplayTimeout:3000,
//             autoplayHoverPause:true,
//             navText:
//                 ["<img src='../../../statics/images/icon/prev_green.svg'>",
//                     "<img src='../../../statics/images/icon/next_green.svg'>"],
//         };
//         OwlCarousel.checkMode(1123, '.talks-about', option_talks_about);
//     },
//
//     // showModalSaveJob()
//     // {
//     //     $('.js-show-box').click(function () {
//     //         $('.box-popup-need-login').modal('show');
//     //     })
//     // }
// };
//
$(function () {
    Home.init();
    Sidebar.__init()
    // SearchMobile.init();
    // ShowSuggestionKeyword.init();
});
