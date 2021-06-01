const PostNews={
    init(){
        this.ShowCount();
        this.dropdownOption();
        this.addStep();
    },
    addStep(){
        $(document).ready(function (){
            $('.add-step').click(function (){
                $(this).closest('#sort2').append(' <div  class="group-step">\n' +
                    '                <div class="item">\n' +
                    '                    <div class="left-icon">\n' +
                    '                        <i class="fa fa-arrows" aria-hidden="true"></i>\n' +
                    '                    </div>\n' +
                    '                <input class="text-input" type="text" placeholder="100ml nước">\n' +
                    '                    <i class="fa fa-ellipsis-h icon-drop" aria-hidden="true" style="position: relative">\n' +
                    '                        <ul class="option">\n' +
                    '                            <li class="add-step">Thêm bước này</li>\n' +
                    '                            <li class="remove-item">Xóa bước này</li>\n' +
                    '                        </ul>\n' +
                    '                    </i>\n' +
                    '\n' +
                    '                </div>\n' +
                    '                <div class="image-here d-flex">\n' +
                    '                    <label>\n' +
                    '                        <div class="upload">\n' +
                    '                            <div class="editor-step">\n' +
                    '                                <label class="icon-edit">\n' +
                    '                                    <span aria-label="Đổi" class="p-px"><i class="fa fa-camera" style="padding-left: 8px;margin: 9px 0;" aria-hidden="true"></i></span>\n' +
                    '                                    <input type="file" class="fileUpload" name="file" aria-label="Bạn đã đăng hình món mình nấu ở đây chưa?" accept="image/*">\n' +
                    '                                </label>\n' +
                    '                                <a data-confirm="Chắc chắn xoá?" class="delete" data-behavior="delete_image"\n' +
                    '                                   aria-label="Xóa hình món này" href="#"><i class="fa fa-trash delete-img-step" style="padding-right: 8px" aria-hidden="true"></i></a>\n' +
                    '                            </div>\n' +
                    '                            <div class="se-pre-con"></div>\n' +
                    '                            <div class="image-holder-1" for="" class=" bg-cookpad-gray-200">\n' +
                    '                                <div class="loader" style="display: none"></div>\n' +
                    '                            </div>\n' +
                    '                            <i class="fa fa-camera icon-upload-step" aria-hidden="true"></i>\n' +
                    '                            <input class="file-upload-1"  type="file" style="opacity: 0">\n' +
                    '                        </div>\n' +
                    '                    </label>\n' +
                    '                </div>\n' +
                    '\n' +
                    '            </div>')
            })
        })
    },
    ShowCount(){

    },
    dropdownOption(){
        $('.icon-drop').each(function (index){
            console.log(index);
            $(this).click(function (){
              $(this).children('.option').toggle()
            })
        })
    }
}
$(function (){
    PostNews.init()
})

$(function () {
    $('.about-form').focus(function () {
        console.log(0);
        $(this).closest('.test').find('.the-count').css('visibility','visible')
    });
    $('.about-form').blur(function () {
        $('.the-count').css('visibility', 'hidden');
    })
});
$(document).ready(function () {
    var max_fields = 10; //maximum input boxes allowed
    var wrapper = $(".list"); //Fields wrapper
    var container = $(".tienanh")
    var add_button = $(".add-btn"); //Add button ID
    var add_button_part = $(".add-part"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append(' <div class="test">\n' +
                '                    <div class="group">\n' +
                '                        <i class="fa fa-arrows" aria-hidden="true"></i>\n' +
                '                        <div class="item">\n' +
                '                            <input class="js-tienanh about-form " type="text" placeholder="250 bột">\n' +
                '                        </div>\n' +
                '                        <i class="fa fa-times" aria-hidden="true"></i>\n' +
                '                    </div>\n' +
                '                    <div class="the-count" >\n' +
                '                        <span class="current">0</span>\n' +
                '                        <span class="maximum">/ 300</span>\n' +
                '                    </div>\n' +
                '                </div>').ready(function (){

                $(function () {
                    $('.about-form').focus(function () {
                        // var n = $('.about-form').index(this);
                        console.log(0);
                        // $('.the-count:eq(' + n + ')').css('visibility', 'visible')
                        $(this).closest('.test').find('.the-count').css('visibility','visible')
                    });

                    $('.about-form').blur(function () {
                        $('.the-count').css('visibility', 'hidden');
                    })
                });
            });
        }

    });
    $(add_button_part).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('  <div class="test">\n' +
                '            <div class="group">\n' +
                '                <i class="fa fa-arrows" aria-hidden="true"></i>\n' +
                '                <div class="item">\n' +
                '                    <input class="js-tienanh about-form" type="text" placeholder="Phần bột">\n' +
                '                </div>\n' +
                '                <i class="fa fa-times" aria-hidden="true"></i>\n' +
                '            </div>\n' +
                '            <div class="the-count" >\n' +
                '                <span class="current">0</span>\n' +
                '                <span class="maximum">/ 300</span>\n' +
                '            </div>\n' +
                '            </div>').ready(function (){


                    $('.about-form').focus(function () {
                        // var n = $('.about-form').index(this);
                        console.log(0);
                        // $('.the-count:eq(' + n + ')').css('visibility', 'visible')
                        $(this).closest('.test').find('.the-count').css('visibility','visible')
                    });

                    $('.about-form').blur(function () {
                        $('.the-count').css('visibility', 'hidden');
                    })
                    // $(document).on('click', function (e) {
                    //     if ($(e.target).closest(".about-form").length === 0) {
                    //         $(".the-count").hide();
                    //     }
                    // });
                ;
            }); //add input box
        }
    });

    $(wrapper).on("click", ".fa-times", function (e) { //user click on remove text
        e.preventDefault();
        $(this).parent('div').parent('div').remove();
        x--;
    })
});
$(document).ready(function () {
    var max_fields = 10; //maximum input boxes allowed
    var wrapper = $(".list-step"); //Fields wrapper
    var container = $(".tienanh")
    var add_button = $(".add-step-btn"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append(' <div  class="group-step">\n' +
                '                <div class="item">\n' +
                '                    <div class="left-icon">\n' +
                '                        <i class="fa fa-arrows" aria-hidden="true"></i>\n' +
                '                    </div>\n' +
                '                <input class="text-input" type="text" placeholder="100ml nước">\n' +
                '                    <i class="fa fa-ellipsis-h icon-drop" aria-hidden="true" style="position: relative">\n' +
                '                        <ul class="option">\n' +
                '                            <li>Thêm bước này</li>\n' +
                '                            <li class="remove-item">Xóa bước này</li>\n' +
                '                        </ul>\n' +
                '                    </i>\n' +
                '\n' +
                '                </div>\n' +
                '                <div class="image-here d-flex">\n' +
                '                    <label>\n' +
                '                        <div class="upload">\n' +
                '                            <div class="editor-step">\n' +
                '                                <label class="icon-edit">\n' +
                '                                    <span aria-label="Đổi" class="p-px"><i class="fa fa-camera" style="padding-left: 8px;margin: 9px 0;" aria-hidden="true"></i></span>\n' +
                '                                    <input type="file" class="fileUpload" name="file" aria-label="Bạn đã đăng hình món mình nấu ở đây chưa?" accept="image/*">\n' +
                '                                </label>\n' +
                '                                <a data-confirm="Chắc chắn xoá?" class="delete" data-behavior="delete_image"\n' +
                '                                   aria-label="Xóa hình món này" href="#"><i class="fa fa-trash delete-img-step" style="padding-right: 8px" aria-hidden="true"></i></a>\n' +
                '                            </div>\n' +
                '                            <div class="se-pre-con"></div>\n' +
                '                            <div class="image-holder-1" for="" class=" bg-cookpad-gray-200">\n' +
                '                                <div class="loader" style="display: none"></div>\n' +
                '                            </div>\n' +
                '                            <i class="fa fa-camera icon-upload-step" aria-hidden="true"></i>\n' +
                '                            <input class="file-upload-1"  type="file" style="opacity: 0">\n' +
                '                        </div>\n' +
                '                    </label>\n' +
                '                </div>\n' +
                '\n' +
                '            </div>'); //add input box
            $('.left-icon::before').css('content','counter(mini-step)')
        }
    });
    // $(this).closest('.container').children('#sort2').find('.item').find('.icon-drop').click(function (){
    //     // $('.option').toggle()
    //     alert('tienanh')
    // })
    $(wrapper).on("click", ".remove-item", function (e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.group-step').remove();
        x--;
    })
});


$(document).on('keyup', function () {
    let characterCount = $(this).val().length,
        current = $('#current'),
        maximum = $('#maximum'),
        theCount = $('#the-count');

    let $this = $(this),
        $parent = $this.closest('.js-tienanh');

    $parent.find(".test .the-count .current").text(characterCount);
})
$('.about-form').keyup(function() {

    var characterCount = $(this).val().length,
        current = $(this).closest('.test').find('.current'),
        maximum = $('.maximum'),
        theCount = $('.the-count');

    current.text(characterCount);

});

$(".fileUpload").on('change', function () {
    let that = this;
    $.ajax({
        type:"GET",
        url:"/upload",
        beforeSend: function() {
            $(".loading").css('display','block')
        },
        success:function (){
                setTimeout(function (){
                    if (typeof (FileReader) != "undefined") {

                        var image_holder = $(".image-holder");
                        image_holder.empty();

                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $("<img />", {
                                "src": e.target.result,
                                "class": "thumb-image"
                            }).appendTo(image_holder);
                        }
                        image_holder.show();
                        reader.readAsDataURL($(that)[0].files[0]);
                        $(".editor").css('visibility','visible')
                        $(".delete-img").click(function (){
                            if (confirm('Are you sure ?')) {
                                $(".image-holder img").remove()
                            }
                            else {
                                    return(false)
                            }
                            $(".editor").css('visibility','hidden')
                            $(".image-holder").append('  <div class="loading" style="display: none"></div>\n' +
                                '                                <div class="image-upload text-center" >\n' +
                                '                                    <div class="text-cookpad">\n' +
                                '                                        <img class="" alt="" src="//assets-global.cpcdn.com/assets/camera-e526534167ed86f4891b97ae3da7bb6327b7679a0ad7c9b837434847f8457434.png">\n' +
                                '                                        <h3 class="">Bạn đã đăng hình món mình nấu ở đây chưa?</h3>\n' +
                                '                                        <p class="text-cookpad-14">Truyền cảm hứng nấu món của bạn đến mọi người\n' +
                                '                                            nào!</p>\n' +
                                '                                    </div>\n' +
                                '                                    <label style="color: #FFFFFF;display: flex" for="">.\n' +
                                '                                    <input type="file" class="fileUpload" id="fileUpload" name="file" aria-label="Bạn đã đăng hình món mình nấu ở đây chưa?" accept="image/*">\n' +
                                '                                    </label>\n' +
                                '                                    <div id="" style="width: 680px"></div>\n' +
                                '                                </div>')
                        })


                    } else {
                        alert("This browser does not support FileReader.");
                    }
                },1000)

        },
        complete: function() {
            $(".loader").removeClass('loading');
        },
    })



});

$(document).on('change', ".file-upload-1", function () {
    let that = this;
    let $parent = $(this).closest('.upload');
    let $elePreview = $parent.children('.image-holder-1');
    let $imageHere = $(this).closest('.image-here');
    $.ajax({
        type:"GET",
        url:"/upload",
        beforeSend: function() {
            $parent.find('.loader').show();
        },
        success:function (){
            setTimeout(function (){
                if (typeof (FileReader) != "undefined") {
                    var image_holder = $elePreview;
                    image_holder.empty();
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var id =  Math.random();
                        $("<img  />", {
                            "src": e.target.result,
                            "class": "thumb-image-" + Math.random()
                        }).appendTo(image_holder);


                    }
                    image_holder.show();
                    reader.readAsDataURL($(that)[0].files[0]);
                    $(that).closest('.upload').find('.editor-step').css('visibility','visible')
                    // $(".editor-step").css('visibility','visible')
                    $(".icon-upload-step").hide()
                    $imageHere.append('  <label>\n' +
                        '                        <div class="upload">\n' +
                        '                            <div class="editor-step">\n' +
                        '                                <label class="icon-edit">\n' +
                        '                                    <span aria-label="Đổi" class="p-px"><i class="fa fa-camera" style="padding-left: 8px;margin: 9px 0;" aria-hidden="true"></i></span>\n' +
                        '                                    <input type="file" class="fileUpload" name="file" aria-label="Bạn đã đăng hình món mình nấu ở đây chưa?" accept="image/*">\n' +
                        '                                </label>\n' +
                        '\n' +
                        '                                <a data-confirm="Chắc chắn xoá?" class="delete" data-behavior="delete_image"\n' +
                        '                                   aria-label="Xóa hình món này" href="#"><i class="fa fa-trash delete-img-step" style="padding-right: 8px" aria-hidden="true"></i></a>\n' +
                        '\n' +
                        '                            </div>\n' +
                        '                            <div class="se-pre-con"></div>\n' +
                        '                            <div class="image-holder-1" for="" class=" bg-cookpad-gray-200">\n' +
                        '\n' +
                        '                                <div  class="loader" style="display: none"></div>\n' +
                        '\n' +
                        '                            </div>\n' +
                        '\n' +
                        '                            <i class="fa fa-camera icon-upload-step" aria-hidden="true"></i>\n' +
                        '                            <input class="file-upload-1"  type="file" style="opacity: 0">\n' +
                        '                        </div>\n' +
                        '                    </label></div>')
                    $(".icon-upload-step").show()

                    $(".delete-img-step").click(function (){
                        console.log($(this).closest(".upload"))
                        $(this).closest(".upload").remove()

                    })

                } else {
                    alert("This browser does not support FileReader.");
                }
            },1000)
        },
    })
});



