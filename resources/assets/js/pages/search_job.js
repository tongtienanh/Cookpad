import 'jquery-modal'
import String from "../helpers/String";
import TypeaheadSearch from "../components/typeahead_search";
import Sidebar from "../components/sibar_right";
import OwlCarousel from "../components/owl_carousel";
import SearchMobile from "../components/search_mobile";
import PopupAuth from "../components/popup_auth";
import ShowMoreUser from "../components/show_more_mb";
import ShowSuggestionKeyword from "../components/show_suggestion_search";

const SearchJob = {
    init() {
        this.carouselItemTop();
        this.showBox();
        this.hideBox();
        this.fixedContent();
        this.addBoxShadow();
        this.hideSearchMore();
        this.hideSearchMoreDetail();
        this.toggleLi();
        this.getText();
        this.clearAllFilter();
        this.showFilter();
        this.showLocation();
        this.closeTextInput();
        this.eventScrollSearch();
        this.showRelated();
        this.tabModalFllter();
        this.openModalFillter();
    },
    openModalFillter(){
        $('.fillter-icon').click(function (){
            $('#modal-search-fillter').modal('show')
        })
    },
    tabModalFllter(){
        $(function(){
            $('.filter-table:eq(0)').show();
            $('.block-left li').click(function() {
                var index =$(this).index();
                $('.filter-table').hide();
                $('.filter-table:eq('+index+')').show();
            });
        });
    },
    showRelated(){
        $('.js-related .more').click(function () {
            $(this).parent().children().removeClass('hide');
            $(this).remove();
        });
    },

    eventScrollSearch() {
        $(window).scroll(function () {
            let $scrollTop = $(this).scrollTop();
            console.log($scrollTop);
            if ($scrollTop > 120 ) {
                $('#header-default').addClass('fixed-top');
                $('#header-search').addClass('fixed-top');
                $('.tag-job').addClass('fixed-top');
            }
            else {
                $('#header-default').removeClass('fixed-top');
                $('#header-search').removeClass('fixed-top');
                $('.tag-job').removeClass('fixed-top');
            }
        });
    },

    carouselItemTop() {
        let options = {
            items: 4,
            loop: true,
            nav: true,
            center: true,
            autoplay: true,
            dots: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText:
                ["<img src='../../../statics/images/icon/prev_green.svg'>",
                    "<img src='../../../statics/images/icon/next_green.svg'>"]
        };

        OwlCarousel.checkMode(1123, '.wrap-top', options);
    },

    showBox() {
        $('.js-popup-auth').click(function () {
            $('.box-popup-login').modal('show');
        });

        $('.js-read-more').click(function () {
            let id = $(this).attr('data-id');
            let dom = $(this).closest('.item').children('.box-alert-item').hide();
            $('#' + id).toggle().toggleClass('active');

        });
    },

    hideBox() {
        $('.js-hide-box').click(function () {
            $(this).closest('.box-alert-item').hide();
        });
    },

    fixedContent() {
        $(window).bind('scroll', function () {
            let navHeight = $('#content');
            if (navHeight.length) {
                if ($(window).scrollTop() > navHeight.offset().top) {
                    $('.box-detail').addClass('sticky');
                } else {
                    $('.box-detail').removeClass('sticky');
                }
            }
        });
    },

    addBoxShadow() {
        $('.js-content-detail').scroll(function () {
            $('.box-detail__head').addClass('js-box-shadow');
        });
    },

    closeTextInput() {
        $('.search-form-mb .close-text').click(function () {
            $(this).prev().val('');
        })
    },

    hideSearchMore() {
        $(document).on('click', '#filter-all .prev', function () {
            $('#bg-black').fadeOut();
            $(this).parent().parent().parent().removeClass('show');
            $('body').css('overflow', 'auto');
        });
    },

    toggleLi() {
        String.showHideSearch('#filter-location .input-location input', '.list-item-l .item-l');
        String.showHideSearch('#filter-level .input-level input', '.list-item-le .item-le');
        String.showHideSearch('#filter-career .input-career input', '.list-item-ca .item-ca');
        String.showHideSearch('#filter-city .input-city input', '.list-item-c .item-c');
        String.showHideSearch('#filter-experience .input-experience input', '.list-item-ex .item-ex');
        String.showHideSearch('#filter-fr-work .input-fr-work input', '.list-item-w .item-w');
        String.showHideSearch('#filter-salary .input-salary input', '.list-item-s .item-s');
    },

    getText() {
        this.getValueInputChecked('.list-item-l .item-l input', '#location');
        this.getValueInputChecked('.list-item-ca .item-ca input', '#career');
        this.getValueInputChecked('.list-item-le .item-le input', '#level');
        this.getValueInputChecked('.list-item-sa .item-sa input', '#salary');
        this.getValueInputChecked('.list-item-ex .item-ex input', '#experience');
        this.getValueInputChecked('.list-item-w .item-w input', '#fr-work');
    },

    getValueInputChecked($ele, $ele_contain_input) {
        $(document).on('change', $ele, function () {
            let text = $(this).siblings().text(),
                $txtLocation = $($ele_contain_input + ' .txt-chose'),
                $txtCloseLocation = $($ele_contain_input + ' .choose-close'),
                $txtNextLocation = $($ele_contain_input + ' .choose-next'),
                txtLocation = $txtLocation.html();

            if ($(this).prop('checked')) {
                if (txtLocation !== 'Tất cả') {
                    txtLocation += ', ' + text;
                    $txtLocation.html(txtLocation);
                } else {
                    txtLocation = text;
                    $txtLocation.html(txtLocation);
                }

                $($txtNextLocation).css('display', 'none');
                $($txtCloseLocation).css('display', 'inline-block');
            } else {
                $txtLocation.html($txtLocation.html().replace(', ' + text, ''));
                $txtLocation.html($txtLocation.html().replace(text, ''));

                if ($txtLocation.html() === '') {
                    $txtLocation.html('Tất cả');
                    $($txtCloseLocation).css('display', 'none');
                    $($txtNextLocation).css('display', 'inline-block');
                }

                let regex = /^[,][a-z]*/;
                if (regex.test($txtLocation.html())) {
                    $txtLocation.html($txtLocation.html().replace(', ', ''));
                }
            }
        });
    },

    clearAllFilter() {
        $(document).on('click', '.filter-form-mb .clear-filter', function () {
            $('.clear-filter span').css('color', '#cccccc');
            $('.choose-close').css('display', 'none');
            $('.choose-next').css('display', 'inline-block');
            $('.form-search.form-search-job input[type="checkbox"]:checked').prop('checked', false);
            $('.form-search.form-search-job input[type="radio"]:checked').prop('checked', false);
            $('.form-search.form-search-job .txt-chose').html('Tất cả');
        });
    },

    showFilter() {
        $('.tag-job .item').click(function () {
            let $dataId = $(this).attr('href');
            $('#bg-black').fadeIn();
            $($dataId).addClass('show');
            $('body').css('overflow', 'hidden');
        });

        $('.list-item-f .item-f').click(function () {
            let $dataId = $(this).data('id');
            $($dataId).addClass('show');
        }).find('.choose-close').click(function () {
            let $this = $(this),
                $parent = $this.closest('li'),
                $dataIdParent = $parent.data('id'),
                $id = $this.closest('li').attr('id');

            if ($dataIdParent === '#filter-city') {
                $($dataIdParent + ' input[type="radio"]:checked').prop('checked', false);
                $('#filter-location input[type="checkbox"]:checked').prop('checked', false);
            } else {
                $($dataIdParent + ' input[type="checkbox"]:checked').prop('checked', false);
            }

            $this.siblings().eq(0).html('Tất cả');
            $('#' + $id + ' .choose-close').css('display', 'none');
            $('#' + $id + ' .choose-next').css('display', 'inline-block');

            if (!$('.form-search-job input[type="checkbox"], .form-search-job input[type="radio"]').is(':checked')) {
                $('.filter-form-mb .clear-filter span').css('color', '#cccccc');
            }
            return false;
        });
    },

    hideSearchMoreDetail() {
        $(document).on('click', '#filter-location .prev', function () {
            $(this).parent().parent().parent().removeClass('show');
        });

        $(document).on(
            'click',
            `#filter-city .prev-city,
             #filter-level .prev-level,
              #filter-career .prev-career,
               #filter-fr-work .prev-fr-work,
                #filter-salary .prev-salary,
                #filter-experience .prev-experience`,
            function () {
                if ($('#filter-all').height() <= 0) {
                    $('#bg-black').fadeOut();
                    $('body').css('overflow', 'auto');
                } else {
                    if ($('.form-search-job input[type="checkbox"], .form-search-job input[type="radio"]').is(':checked')) {
                        $('.filter-form-mb .clear-filter span').css('color', '#333');
                    }
                    $('body').css('overflow', 'hidden')
                }

                $(this).parent().parent().parent().removeClass('show');

            });

        $('#bg-black').click(function () {
            $(this).fadeOut();
            $(`#filter-all, #filter-city, #filter-level, #filter-career, #filter-fr-work,
            #filter-salary, #filter-experience, #filter-location`).removeClass('show');
            $('body').css('overflow', 'auto');
        })

    },

    showLocation() {
        $('.list-item-c .item-c input').change(function () {
            if ($(this).prop('checked')) {
                let $dataId = $(this).data('id');
                $($dataId).addClass('show');
            }
        });
    },
};

$(function () {
    Sidebar.__init();
    TypeaheadSearch.init();
    SearchMobile.init();
    ShowSuggestionKeyword.init();
    PopupAuth.init();
    ShowMoreUser.loadMoreMenu();
    SearchJob.init();
});
