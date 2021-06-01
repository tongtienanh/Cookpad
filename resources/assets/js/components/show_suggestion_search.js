const ShowSuggestionSearch = {
    init(){
        this.showSuggestion();
        this.hideSuggestion();
        this.getDistrict();
        this.hideDistrict();
        this.getTextSuggestChoose();
    },

    showSuggestion(){
        let that = this;
        $('.input-group .form-input').click(function (event) {
            event.stopPropagation();

            let $this = $(this);
            $this.attr('autocomplete', 'off');
            that.removeMoreSuggest();
            $this.parent().siblings('.dropdown').addClass('show-sk');
            $this.addClass('focus');
        });
        $(".input-group .dropdown").on("click", function (event) {
            event.stopPropagation();
        });
    },

    hideSuggestion(){
        let that = this;
        $(document).on("click", function () {
            that.removeMoreSuggest();
        });
    },

    removeMoreSuggest(){
        $(".dropdown").removeClass('show-sk');
        $('.input-group input').removeClass('focus');
    },

    getDistrict(){
        $('.list-city-li li').click(function () {
            $('.list-district').addClass('show-ld');
            $('.list-city').addClass('hide-lc');
        });
    },

    hideDistrict(){
        $('.list-district .city').click(function () {
            $('.list-district').removeClass('show-ld');
            $('.list-city').removeClass('hide-lc');
        });
    },

    getTextSuggestChoose(){
        $('.form-search__input--dk .dropdown li').not('.city').click(function () {
            let $this = $(this),
                $text_li =  $this.text();

            $this.closest('.box-input').children('.form-input').val($text_li.trim());
        });
    }
};

export default ShowSuggestionSearch
