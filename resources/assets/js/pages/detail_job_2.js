import 'jquery-modal';
import '../components/course';
import Sidebar from "../components/sibar_right";
import PopupAuth from "../components/popup_auth";
import SearchMobile from "../components/search_mobile";
import ShowSuggestionKeyword from "../components/show_suggestion_search";
import TypeaheadSearch from "../components/typeahead_search";

const DetailJob2 = {
    init() {
        this.showBoxApplyJob();
        this.showSearch();
        this.hideSearch();
        this.showDropdownMenu();
        this.showTab();
        this.fixedHeader();
    },

    fixedHeader(){
        $(window).scroll(function () {
            let $offsetTop = $(this).scrollTop();
            if ($offsetTop > 110){
                $('#header-detail').addClass('fixed-top');
                $('#main').addClass('pt')
            }
            else{
                $('#header-detail').removeClass('fixed-top');
                $('#main').removeClass('pt');
            }
        });
    },

    showBoxApplyJob() {
        $(window).scroll(function () {
            let scroll = $(window).scrollTop();
            if (scroll >= 480) {
                $('#apply-bar').fadeIn();
            } else {
                $('#apply-bar').fadeOut();
            }

            if (scroll >= 570) {
                $('.btn-apply-mobile').addClass('show');
            } else {
                $('.btn-apply-mobile').removeClass('show');
            }
        });
    },

    showSearch() {
        $('.header-right-box .search').click(function () {
            $('.form-search-job').fadeIn();
            $('.search-form-mb').addClass('show');
            $('body').css('overflow', 'hidden');
        })
    },

    hideSearch() {
        $(document).on('click', '.search-form-mb .close', function () {
            $('.search-form-mb').removeClass('show');
            $('body').css('overflow', 'auto')
        });
    },

    showDropdownMenu() {
        $('.header-right-box .menu-dropdown').click(function () {
            $('.list-item-menu').toggle();
        });

        $(document).click(function (event) {
            let $target = $(event.target);
            let $select_file = $('.list-item-menu');
            if (!$target.closest('.header-right-box .menu-dropdown').length &&
                $select_file.is(":visible")) {
                $select_file.hide();
            }
        });
    },

    showTab() {
        $('#tab-company-mb .nav-pills li a').click(function (e) {
            e.preventDefault();
            let $this = $(this),
                $dataId = $this.attr('href');
            $('#tab-company-mb .nav-pills li').removeClass('active');
            $('.tab-pane-job').removeClass('active');

            $($dataId).addClass('active');
            $this.parent().addClass('active');
        });
    }
};

$(function () {
    Sidebar.__init();
    TypeaheadSearch.init();
    PopupAuth.init();
    ShowSuggestionKeyword.init();
    SearchMobile.init();
    DetailJob2.init();
});
