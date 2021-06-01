import '../../../../../../resources/assets/js/components/course';
const reviewDetail ={
    init (){
        this.owlCarousel();
        this.postAction();
        this.uploadImage();
    },
    owlCarousel(){
        $(function(){
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                autoplay: 2000,
                items:1,
                loop: true,
                lazyLoad: true,
                onInitialized  : counter, //When the plugin has initialized.
                onTranslated : counter //When the translation of the stage has finished.
            });

            function counter(event) {
                var element   = event.target;         // DOM element, in this example .owl-carousel
                var items     = event.item.count;     // Number of items
                var item      = event.item.index + 1;     // Position of the current item

                // it loop is true then reset counter from 1
                if(item > items) {
                    item = item - items
                }
                $('.span-number').html(item+"/"+items)
            }
        });
    },
    postAction(){
        $('.post-action span i').click(function (){
            if($(this).hasClass('active')){
                $(this).removeClass('active')
                var old = $(this).parent('.number-count').text()
                $(this).parent('.number-count').text(parseInt(old)-1)
            }
            else {
                $(this).addClass('active')
                var old = $(this).parent('.number-count').text()
                $(this).parent('.number-count').text(parseInt(old)+1)
            }
        })

    },
    uploadImage(){
        $('.image-click').click(function (){
                $('#file-upload').click()
        })
        $('#file-upload').change(function (){
            var tienanh = $('#tienanh')
            $('#output').show()
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            tienanh.href = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
                URL.revokeObjectURL(tienanh.href) // free memory

            }
        })
    }
}
$(function (){
    let bLazy = new Blazy({});
    reviewDetail.init()
})
