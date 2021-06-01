$(function (){
$('.item-filter').click(function (){
    $(this).addClass('show')
    index=$(this).index();
    $('.container-box-filter').hide()
    $('.container-box-filter').eq(index).show();
})
    $(document).mouseup(function (e){

        var container = $(".container-box-filter");

        if (!container.is(e.target) && container.has(e.target).length === 0){

            container.hide();
            $('.item-filter').removeClass('show')

        }
    });
})
console.log($('.item-filter '))

