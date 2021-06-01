const Suggestion = {
    init()
    {
        this.keywordFocus();
        this.addValue();
        this.closeSuggest();
    },

    keywordFocus()
    {
        let $jsSuggestKeyword   = $('.form-search-job .js-suggest-keyword'),
            $jsSuggestLocation  = $('.form-search-job .js-suggest-location');

        $jsSuggestKeyword.focus(function ()
        {
            $('#keyword-title').removeClass('hide');
        });

        $jsSuggestLocation.focus(function ()
        {
            $('#location').removeClass('hide');
        });
    },

    addValue()
    {
        $(document).on('click', '#keyword-title .content-box a', function(e)
        {
            e.preventDefault();

            let value = $(this).html().trim();

            $('.form-search-job .js-suggest-keyword').val(value);

            $('.form-search-job .js-suggest-location').focus();

            $('#location').removeClass('hide');
        });

        $(document).on('click', '#location .content-box a', function(e)
        {
            e.preventDefault();

            let value = $(this).html().trim();

            $('.form-search-job .js-suggest-location').val(value);

            $('.form-search-job').submit();
        })
    },

    closeSuggest()
    {
        $(document).on('click', '.keyword-expand .btn-close', function ()
        {
            $(this).parent().addClass('hide');
        });

        $(document).click(function(event) {
            let target = $(event.target);
            let result_search =  $('#keyword-title');
            if(!target.closest('.form-search-job .js-suggest-keyword').length && result_search.is(":visible"))
            {
                result_search.addClass('hide');
            }
        });

        $(document).click(function(event) {
            let target = $(event.target);
            let result_search =  $('#location');
            if(!target.closest('.form-search-job .js-suggest-location').length && !target.is('#keyword-title a') &&
                result_search.is(":visible"))
            {
                result_search.addClass('hide');
            }
        });
    }
};

export default Suggestion;
