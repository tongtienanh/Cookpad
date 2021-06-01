import 'jquery-modal';
const Detail ={
    init(){
      this.bookmark();
        this.shareBtn();
        this.addFriend();
        this.modalShow();
        this.modalImage();
        this.hidePopup();
        // this.inputCommetn();
    },
    bookmark(){
        $(' ul li:first-child').click(function (){
            $('.bookmark-selected').toggleClass('bookmark-active');
        })
    },
    shareBtn(){
        $('.share-btn').click(function (){
            $('.share-popup').toggle()
        })
    },
    addFriend(){
        $('.btn').click(function (){
            $(this).val('Bạn bếp').css('background',' #ECEBE9');
        })
    },
    modalShow(){
        $('.js-modal-question').click(function () {
            $('#modal-question').modal('show');
        })
    },
    modalImage(){
        $('.top-image').click(function () {
            $('#modal-image').modal('show');
        })
    },
    inputComment(){
        $('.input-comment').focus(function (){
            $('.comment-action').css('color','#F99932')
            $('.input-comment').blur(function (){
                $('.comment-action').css('color','#cecece')
            })
        })
    },
    hidePopup(){
        $(document).on('click', function (e) {
            if ($(e.target).closest(".share-btn").length === 0) {
                $(".share-popup").hide();
            }
        });
    }
}
//modal

//modal image





$(document).ready(function(){
    $("#input").cropzee();
    $.each($("input[name='enable']"), function(){
        if ($(this).is(":checked")) {
            $(this).closest("div.uk-position-relative").find("textarea").removeAttr("disabled");
        } else {
            $(this).closest("div.uk-position-relative").find("textarea").attr("disabled", "disabled");
        }
    });
    $("input, select, textarea").on( "keyup change", $.debounce(300, function() {
        destroyPlugin($("#input"));
        $.each($("input[name='enable']"), function(){
            if ($(this).is(":checked")) {
                $(this).closest("div.uk-position-relative").find("textarea").removeAttr("disabled");
            } else {
                $(this).closest("div.uk-position-relative").find("textarea").attr("disabled", "disabled");
            }
        });
        var aspectRatio = "";
        $.each($("input[name='aspectRatio']"), function(){
            aspectRatio += $(this).val();
        });
        var maxSize = [];
        $.each($("input[name='maxSize'], select[name='maxSize']"), function(){
            maxSize.push($(this).val());
        });
        var minSize = [];
        $.each($("input[name='minSize'], select[name='minSize']"), function(){
            minSize.push($(this).val());
        });
        var startSize = [];
        $.each($("input[name='startSize'], select[name='startSize']"), function(){
            startSize.push($(this).val());
        });
        var allowedInputs = [];
        $.each($("input[name='allowedInputs']:checked"), function(){
            allowedInputs.push($(this).val());
        });
        var imageExtension = "";
        $.each($("input[name='imageExtension']:checked"), function(){
            imageExtension += $(this).val();
        });
        var returnImageMode = "";
        $.each($("input[name='returnImageMode']:checked"), function(){
            returnImageMode += $(this).val();
        });
        var modalAnimation = "";
        $.each($("select[name='modalAnimation']"), function(){
            modalAnimation += $(this).val();
        });
        var onCropStart = null;
        $.each($("textarea[name='onCropStart']"), function(){
            if (!$(this).is(":disabled")) {
                onCropStart = $(this).val();
            }
        });
        var onCropMove = null;
        $.each($("textarea[name='onCropMove']"), function(){
            if (!$(this).is(":disabled")) {
                onCropMove = $(this).val();
            }
        });
        var onCropEnd = null;
        $.each($("textarea[name='onCropEnd']"), function(){
            if (!$(this).is(":disabled")) {
                onCropEnd = $(this).val();
            }
        });
        var onInitialize = null;
        $.each($("textarea[name='onInitialize']"), function(){
            if (!$(this).is(":disabled")) {
                onInitialize = $(this).val();
            }
        });
        window.options = {
            aspectRatio: aspectRatio,
            maxSize: maxSize,
            minSize: minSize,
            startSize: startSize,
            onCropStart: onCropStart,
            onCropMove: onCropMove,
            onCropEnd: onCropEnd,
            onInitialize: onInitialize,
            modalAnimation: modalAnimation,
            allowedInputs: allowedInputs,
            imageExtension: imageExtension,
            returnImageMode: returnImageMode,
        }
        // alert(JSON.stringify(options));
        $("#input").cropzee(options);
    }));
});
var destroyPlugin = function($elem, eventNamespace) {
    var isInstantiated  = !! $.data($elem.get(0));
    if (isInstantiated) {
        $.removeData($elem.get(0));
        $elem.off(eventNamespace);
        $elem.unbind('.' + eventNamespace);
    }
};
$(function (){
    Detail.init()
})
