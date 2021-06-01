const reviewPost={
       init(){
           this.switchText()
       }
}
$('.switch-text').click(function (){
   var text = $(this).text()
    $(this).text(
        text == 'Chuyển chế độ viết bài nâng cao' ? 'Chuyển chế độ viết bài thường' : 'Chuyển chế độ viết bài nâng cao'
    );
    $('.text-option').toggle()
    $('.media-wrapper').toggle()
    $('.body-review').toggle()
})

$('.multiselect__input').click(function (){
    $('.multiselect__content-wrapper').show()
    $(document).mouseup(function (e){

        var container = $(".multiselect__content-wrapper");

        if (!container.is(e.target) && container.has(e.target).length === 0){

            container.hide();
            $('.multiselect__content-wrapper').removeClass('show')

        }
    });
})
$('#huhu').click(function (){
    $('#selectedFile')[0].click();
})

$('#selectedFile').change(function () {
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

$(document).ready(function() {
    /*
     * Hiệu ứng khi rê chuột lên ngôi sao
     */
    $('a.star').mouseenter(function() {
        if ($('#cate-rating').hasClass('rating-ok') == false) {
            var eID = $(this).attr('id');
            eID = eID.split('-').splice(-1);
            $('a.star').removeClass('vote-active');
            for (var i = 1; i <= eID; i++) {
                $('#star-' + i).addClass('vote-hover');
            }
        }
    }).mouseleave(function() {
        if ($('#cate-rating').hasClass('rating-ok') == false) {
            $('a.star').removeClass('vote-hover');
        }
    });

    /*
     * Sự kiện khi cho điểm
     */
    $('a.star').click(function() {
        if ($('#cate-rating').hasClass('rating-ok') == false) {
            var eID = $(this).attr('id');
            eID = eID.split('-').splice(-1).toString();
            for (var i = 1; i <= eID; i++) {
                $('#star-' + i).addClass('vote-active');
            }
            $('p#vote-desc').html('<span class="blue">' + eID + ' (' + eID * 10 + '%)</span> &middot; ' + 1 + ' đánh giá');
            $('#cate-rating').addClass('rating-ok');
        }
    });
});



var loadFile = function(event) {

};
