const Share ={
    init(){
        this.modalLike();
        this.modalDislike();
        this.clickShowLike();
        this.coppyText();
        this.showSharePopup();
        this.hidePopup();
    },
    modalLike(){
        $('.social-like').click(function (){
            $('#modal-like-btn').modal('show')
        })
    },
    modalDislike(){
        $('.social-dislike').click(function (){
            $('#modal-dislike-btn').modal('show')
        })
    },
    clickShowLike(){
        $('.fa-caret-down').click(function (){
            $('.question-text').hide()
            $(this).closest('.question-box').find('.question-text').slideToggle(500)
        })
    },
    coppyText(){
        $('.input-share-btn').click(function (){
            // val= $('#sharedUrlInput').text()
            $(this).children('span').text('Đã sao chép')
        })
    },
    showSharePopup(){
        $('.social-share').click(function (){
            $('.share-popup').show()
        })
    },
    hidePopup(){
        $(document).on('click', function (e) {
            if ($(e.target).closest(".social-share").length === 0) {
                $(".share-popup").hide();
            }
        });
    }
}
export default Share;
