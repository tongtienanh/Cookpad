import 'jquery-modal';
import '../components/course';
import Sidebar from "../components/sibar_right";
import PopupAuth from "../components/popup_auth";
import SearchMobile from "../components/search_mobile";
import ShowSuggestionKeyword from "../components/show_suggestion_search";
import TypeaheadSearch from "../components/typeahead_search";

const DetailJob = {
    init()
    {
        this.showSearch();
        this.hideSearch();
        this.showDropdownMenu();
        this.fixedHeader();
        this.showHideSidebarDetailJob();
    },

    showHideSidebarDetailJob(){
        $('#background-bg').click(function () {
            $('#background-bg').fadeOut();
            $('.pushmenu').removeClass('show');
        });

        $('.js-mb-sidebar-job').click(function () {
            $('#background-bg').fadeIn();
            $('.pushmenu').addClass('show');
        });
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

    showSearch()
    {
        $('.header-right-box .search').click(function ()
        {
            $('.form-search-job').fadeIn();
            $('.search-form-mb').addClass('show');
            $('body').css('overflow', 'hidden');
        })
    },

    hideSearch()
    {
        $(document).on('click', '.search-form-mb .close', function ()
        {
            $('.search-form-mb').removeClass('show');
            $('body').css('overflow', 'auto')
        });
    },

    showDropdownMenu()
    {
        $('.header-right-box .menu-dropdown').click(function ()
        {
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
};

$(function () {
    Sidebar.__init();
    TypeaheadSearch.init();
    SearchMobile.init();
    ShowSuggestionKeyword.init();
    PopupAuth.init();
    DetailJob.init();
});
