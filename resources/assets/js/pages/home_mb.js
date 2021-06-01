import Sidebar from "../components/sibar_right";
import PopupAuth from "../components/popup_auth";
import SearchMobile from "../components/search_mobile";
import ShowMoreUser from "../components/show_more_mb";
import ShowSuggestionKeyword from "../components/show_suggestion_search";
import TypeaheadSearch from "../components/typeahead_search";
import 'slick-carousel'

const HomeMb = {
    init() {
        this.checkElementScroll();
        this.carouselSpotlight();
        this.setHeightContent();
        this.loadingShow();
        this.goToTop();
    },

    goToTop() {
        let $goToTop = $('.scroll-top'),
            $content_dynamic = $('#content-dynamic');
        $content_dynamic.scroll(function () {
            if ($(this).scrollTop() > 300) {
                $goToTop.fadeIn();
            } else {
                $goToTop.fadeOut();
            }
        });

        $goToTop.on('click', function (e) {
            e.preventDefault();
            $content_dynamic.animate({scrollTop: 0}, '300');
        });
    },

    setHeightContent(){
        let $content_dynamic = $('#content-dynamic'),
            $content_fixed = $('#content-fixed'),
            $height = $content_fixed.height(),
            $height_fixed = $height + 25;

        $content_fixed.css('height', 'calc('+ $height_fixed + 'px)')
        $content_dynamic.css('height', 'calc(100% - ' + $height +'px)')
    },

    loadingShow()
    {
        $(document).ready(function(){
           setTimeout(() => {
               $('#bg-loading').fadeOut();
           }, 500);
        });
    },

    carouselSpotlight() {
        $('.js-slider-mb').slick({
            dots: false,
            prevArrow: false,
            nextArrow: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 5000,
        });
    },

    checkElementScroll(){
        document.getElementById('content-dynamic').addEventListener('touchstart', handleTouchStart, {passive: false});
        document.getElementById('content-dynamic').addEventListener('touchmove', handleTouchMove, {passive: false});

        let xDown = null;
        let yDown = null;

        function getTouches(evt) {
            return evt.touches || evt.originalEvent.touches;
        }

        function handleTouchStart(evt) {
            const firstTouch = getTouches(evt)[0];
            xDown = firstTouch.clientX;
            yDown = firstTouch.clientY;
        }

        function handleTouchMove(evt) {
            if ( ! xDown || ! yDown ) {
                return;
            }
            let xUp = evt.touches[0].clientX,
                yUp = evt.touches[0].clientY,
                $content_dynamic = $('#content-dynamic'),
                $body = $('body'),
                xDiff = xDown - xUp,
                yDiff = yDown - yUp;

            if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {
                if ( xDiff > 0 ) {
                    console.log('left');
                    /* left swipe */
                } else {
                    console.log('right');
                    /* right swipe */
                }
            } else {
                if ( yDiff > 0 ) {
                    console.log('up');
                    if ($content_dynamic.scrollTop() === 0)
                    {
                        $content_dynamic.addClass('height-change');
                        $content_dynamic.addClass('overflow');
                        $body.addClass('hide-refresh');
                        $('#content-dynamic .search-input').addClass('hide')
                        $('#container-mb .search').addClass('show');
                    }
                    /* up swipe */
                } else {
                    if ($content_dynamic.scrollTop() === 0) {
                        event.preventDefault();
                        $content_dynamic.removeClass('height-change');
                        $content_dynamic.removeClass('overflow');
                        $('#content-dynamic .search-input').removeClass('hide')
                        $('#container-mb .search').removeClass('show');
                    }
                    if ($content_dynamic.scrollTop() === 0 && !$content_dynamic.hasClass('height-change')) {
                        setTimeout((function () {
                            $body.removeClass('hide-refresh');
                        }), 2000);
                    }
                    console.log('down');
                    /* down swipe */
                }
            }
            xDown = null;
            yDown = null;
        }
    }
};

$(function () {
    Sidebar.__init();
    PopupAuth.init();
    HomeMb.init();
    SearchMobile.init();
    TypeaheadSearch.init();
    ShowMoreUser.loadMoreMenu();
    ShowSuggestionKeyword.init();
})
