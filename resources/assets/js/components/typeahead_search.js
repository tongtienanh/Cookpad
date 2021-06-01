import 'jquery-typeahead';

const TypeaheadSearch = {
    init(){
        this.initTypeaheadLocation($('.js-typeahead-location'))
    },

    cityHot: {
        1 : 'Hà Nội', 63 : 'Hồ Chí Minh', 2 : 'Đà Nẵng', 6 : 'Hải Phòng', 16: 'Bắc Ninh', 3 : 'Bình Dương', 4 : 'Đồng Nai'
    },

    initTypeaheadLocation($dom_location)
    {
        let that = this;
        let $locationSuggest = $('#suggest-location .list-address-suggest .ul-location');
        that.searchTypeaheadLocation({
            cancelButton: false,
            maxItem: 10,
            template : "<a href='javascript:void(0)' title='{{name}}' data-id='{{id}}'>{{name}}</a>",
            emptyTemplate: "Không tìm thấy kết quả cho {{query}}",
            resultContainer: '#suggest-location .list-address-suggest .ul-location',
            callback: {
                onSearch: function()
                {
                    $('#suggest-location.dropdown').addClass('show-sk');
                    $('#suggest-location').removeClass('hide');
                    if(!$dom_location.val())
                    {
                        $locationSuggest.html(that.renderLocationDefault());
                    }
                },
                onClickAfter: function (node, a, item, event) {
                    console.log('Submit Form');
                }
            }
        });
        $dom_location.focusout(function (e) {
            e.preventDefault();
            let $location = $(e.relatedTarget).closest("#suggest-location");
            if(!$location.hasClass('keyword-expand'))
            {
                that.hideSuggest();
            }
        });
    },
    hideSuggest()
    {
        $('#suggest-location').addClass('hide');
        $('#suggest-location.dropdown').removeClass('show-sk');
    },


    searchTypeaheadLocation(params)
    {
        let typeahead = {
            input: '.js-typeahead-location',
            // cache: "sessionStorage",
            minLength: 1,
            searchOnFocus: false,
            highlight: true,
            hint : true,
            display: [
                'description', 'slug', 'slug_fix'
            ],
            source: {
                data : arrLocation
            }
        };
        typeahead = Object.assign(typeahead, params);
        return $.typeahead(typeahead);
    },

    renderLocationDefault()
    {
        let cityHot = this.cityHot;
        let html = '';
        $.each(cityHot, function (key, val) {
            html += `<a href="javascript:void(0)" title="${val}" data-id="${key}" class="js-assert-location">${val}</a>`;
        });
        return html;
    },

}

export default TypeaheadSearch;
