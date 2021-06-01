import 'jquery-modal';
const createCollection = {
    init(){
        this.modal();
        this.link();
    },
    modal(){
        $('.create-collection').click(function () {
            $('#modal-create_collection').modal('show');
        })
    },
    link(){
        $(document).ready(function() {
            $("[data-link]").click(function() {
                window.location.href = $(this).attr("data-link");
                return false;
            });
        });
    }
}

$(function (){
    createCollection.init()
})
