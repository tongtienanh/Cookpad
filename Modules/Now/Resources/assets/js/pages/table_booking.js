import '../../../../../../resources/assets/js/components/course';
import 'flatpickr/dist/flatpickr'
import 'jquery-modal';
const tableBooking ={
    init(){
      this.owlCarousel();
      this.owlCarouselTow();
      this.owlCarouselThree();
      this.flatpickr();
      this.modaBooking();
      this.Tab();
    },
    owlCarousel(){
        $(document).ready(function() {
            var sync1 = $("#sync1");
            var sync2 = $("#sync2");
            var slidesPerPage = 4; //globaly define number of elements per page
            var syncedSecondary = true;

            sync1.owlCarousel({
                items : 1,
                slideSpeed : 2000,
                nav: false,
                dots: false,
                responsiveRefreshRate : 200,
                navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
            }).on('changed.owl.carousel', syncPosition);

            sync2
                .on('initialized.owl.carousel', function () {
                    sync2.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                    items : slidesPerPage,
                    dots: false,
                    nav: false,
                    // center:true,
                    smartSpeed: 200,
                    slideSpeed : 500,
                    URLhashListener:true,
                    startPosition: 'URLHash',
                    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                    responsiveRefreshRate : 100
                }).on('changed.owl.carousel', syncPosition2);

            function syncPosition(el) {
                //if you set loop to false, you have to restore this next line
                var current = el.item.index;



                sync2
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = sync2.find('.owl-item.active').length - 1;
                var start = sync2.find('.owl-item.active').first().index();
                var end = sync2.find('.owl-item.active').last().index();

                if (current > end) {
                    sync2.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    sync2.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }

            function syncPosition2(el) {
                if(syncedSecondary) {
                    var number = el.item.index;
                    sync1.data('owl.carousel').to(number, 100, true);
                }
            }

            sync2.on("click", ".owl-item", function(e){
                e.preventDefault();
                var number = $(this).index();
                sync1.data('owl.carousel').to(number, 300, true);
            });
        });
    },
    owlCarouselTow(){
        $('.owl-two').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            pagination: false,
            dots:false,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:4
                },
                1000:{
                    items:8
                }
            }
        })
    },
    owlCarouselThree(){
        $('.owl-three').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:2,
                    nav:false,
                    pagination:false,
                    dots:false,
                    margin:10,
                },
                600:{
                    items:3,
                    nav:false,
                    pagination:false,
                    dots:false,
                    margin:10,
                },
                1000:{
                    items:4
                }
            }
        })
    },
    flatpickr(){
        $(".flatpickr-input").flatpickr({
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });
    },
    modaBooking(){
        $('.close').click(function (){
            $('.jquery-modal').hide()
        })
        $(window).on('load', function() {
            $('#modal-booking').modal('show');
        });
    },
    Tab(){
        $(function (){
            $('.container-show:eq(0)').css('display','flex')
            $('.nav-item').click(function (){
                $('.nav-item').removeClass('active')
                var index =$(this).index();
                $(this).addClass('active')
                $('.container-show').hide()
                $('.container-show').eq(index).css('display','flex');
            })
        })
    }
}
//

//modal


$(function (){
    var bLazy = new Blazy({});
    tableBooking.init()
})
