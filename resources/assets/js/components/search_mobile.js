const SearchMobile = {
    init()
    {
        this.addTextResultInput();
        this.getJobWithValue();
        this.focusLocationMobile();
        this.clearTextInputMobile();
        this.showSearch();
        this.hideSearch();
    },

    getJobWithValue() {
        $('.input-keyword input').keyup(function ()
        {
            let keyword = $(this).val().trim();

            if (keyword.length > 0)
            {
                $('.keyword-cancel').show();
                $('.res-k-search').stop().show();
                $('.icon-search').hide();
            }
            else {
                $('.keyword-cancel').hide();
                $('.res-k-search').stop().hide();
                $('.icon-search').show();
            }
        });

        $('.input-address input').keyup(function ()
        {
            let keyword = $(this).val().trim();

            if (keyword.length > 0)
            {
                $('.address-cancel').show();
                $('.list-location-mb').stop().show();
                $('.icon-address').hide();
            }
            else {
                $('.address-cancel').hide();
                $('.list-location-mb').stop().hide();
                $('.icon-address').show();
            }
        });
    },

    addTextResultInput()
    {
        $('.res-k-search .list a').click(function (e)
        {
            e.preventDefault();

            let value = $(this).html().trim();

            $('.input-keyword input').val(value);

            $('.res-k-search').stop().hide();

            $('.input-address input').focus();
        });

        $('.list-location-mb .list a').click(function (e)
        {
            e.preventDefault();

            let value = $(this).html().trim();

            $('.input-address input').val(value);

            $('.form-search-job').submit();
        });
    },

    focusLocationMobile()
    {
        $('.input-address input').focus(function ()
        {
            $('.list-location-mb').show();
        });
    },

    clearTextInputMobile()
    {
        $('.keyword-cancel').click(function ()
        {
            let $inputKeyword = $('.input-keyword input');

            $(this).stop().hide();
            $inputKeyword.val('');
            $inputKeyword.focus();
            $('.res-k-search').hide();
            $('.icon-search').show();
        });

        $('.address-cancel').click(function ()
        {
            let $inputAddress = $('.input-address input');

            $(this).stop().hide();
            $inputAddress.val('');
            $inputAddress.focus();
            $('.list-location-mb').hide();
            $('.icon-address').show();
        })
    },

    showSearch() {
        $('.form-search__input.form-search__input--mb').click(function () {
            $('.search-form-mb').addClass('show');
            $('.search-form-mb .input-keyword input').focus();
            $('body').css('overflow', 'hidden');
        });
    },

    hideSearch() {
        $(document).on('click', '.search-form-mb .close', function () {
            $('.search-form-mb').removeClass('show');
            $('body').css('overflow', 'auto')
        });
    },
};

export default SearchMobile;
