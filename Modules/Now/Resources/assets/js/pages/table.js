import '../../../../../../resources/assets/js/components/course';
const table ={
    init(){
      this.owlCarousel();
    },
    owlCarousel(){

    }
}
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    dots:false,
    autoplay:true,
    lazyLoad: true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        768:{
            items:2,
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})

    console.log($('.container-show'))
$(function (){
    $('.container-show:eq(0) , .container-show:eq(3)').css('display','flex')
    $('.tbnow-type .item-type').click(function (){
        $('.tbnow-type .item-type').removeClass('active')
        var index =$(this).index();
        $(this).addClass('active')
        $('.container-show').hide()
        $('.container-show').eq(index).css('display','flex');
    })
})
// $('.tbnow-type .item-type:last').click(function (){
//     $('#modal-where-booking').modal('show')
// })
console.log($('.tbnow-type .item-type:last'))
$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
});
jQuery.event.special.touchstart = {
    setup: function setup(_, ns, handle) {
        this.addEventListener("touchstart", handle, {
            passive: !ns.includes("noPreventDefault")
        });
    }
};
jQuery.event.special.touchmove = {
    setup: function setup(_, ns, handle) {
        this.addEventListener("touchmove", handle, {
            passive: !ns.includes("noPreventDefault")
        });
    }
};
$(function (){
    var bLazy = new Blazy({});
    table.init()
})
