import 'jquery-modal';
const DetailCollectionProfile={
    init(){
        this.ModalShow();
    },
    ModalShow(){
        $('.btn-default').click(function () {
            var that = $(this);
            $('#modal-delete_collection').modal('show');
            $('.js-btn-close').click(function (e){
                e.preventDefault();
                $('.jquery-modal').css('display','none');
                that.closest('.recipe-row-item').remove()
                $('body').css('overflow','unset')

            })
        })
    }
}
$(function (){
    DetailCollectionProfile.init()
})
