import 'jquery-modal';
import 'select2/dist/js/select2.full';

const Popup = {
    init()
    {
        this.runSelect2();
        this.runSelect2Multi()
    },

    runSelect2()
    {
        $(".select2").select2({
            containerCssClass: 'job123-select2-container',
            dropdownCssClass: 'job123-select2-dropdown',
            width: '100%'
        });
    },

    runSelect2Multi()
    {
        let options = {
            containerCssClass: 'multiple-select2-container',
            dropdownCssClass: 'job123-select2-dropdown',
            placeholder: 'Chọn các từ khóa',
            tags: true,
            tokenSeparators: [','],
            width: '100%'
        };
        let $should   = $("#skills");

        $should.select2(options);
        $should.on('select2:select', function (e) {
            let value = $(this).val().join(',');
            $('input[name=skill]').val(value);
        });
        $should.on('select2:clear', function (e) {
            $('input[name=skill]').val('');
        });
    }
};

$(function () {
    Popup.init();
});
