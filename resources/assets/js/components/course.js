
import OwlCarousel from "./owl_carousel";

const Course = {
    init() {
        this.courseCarousel();
    },

    courseCarousel()
    {
        let options = {
            items:4,
            loop:true,
            margin:15,
            nav:true,
            autoplay:true,
            dots: false,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            navText:
                ["<img src='../../../statics/images/icon/prev_green.svg'>",
                    "<img src='../../../statics/images/icon/next_green.svg'>"],
        };
        OwlCarousel.checkMode(992, '#course .list-course', options);
    }
};

$(function () {
    Course.init();
});
