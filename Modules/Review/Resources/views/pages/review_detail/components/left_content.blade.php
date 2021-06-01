<div class="media-wrapper">
    <div class="container-fluid">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img class="owl-lazy" data-src="{{asset('statics/images/review/banner-detail.jpeg')}}"
                        alt=""></div>
                <div class="item">
                    <img class="owl-lazy" data-src="{{asset('statics/images/review/banner-detail.jpeg')}}"
                        alt=""></div>
                <div class="item">
                    <img class="owl-lazy" data-src="{{asset('statics/images/review/banner-detail.jpeg')}}"
                        alt=""></div>
                <div class="item">
                    <img class="owl-lazy" data-src="{{asset('statics/images/review/banner-detail.jpeg')}}"
                        alt=""></div>
            </div>
            <div class="span-number"></div>
        </div>
    </div>
</div>
@include('review::pages.review_detail.components.account_pane_moblie')
<div class="content-body">
    <div class="top d-flex align-items-center justify-content-between">
        <div class="flex-grow-1" style="flex:1;">
            <h1 class="title">Lẩu dookki ăn cực đã</h1>
            <!---->
        </div>
    </div>
    <div id="container-content" class="white-space-word text-justify  text-content">
        Fan của dookki đâu hết rồi mọi
        người, phải nói là em bị ghiền dookki á mọi người. Mỗi lần đi ăn với nhóm bạn là em xác định lăn về nhà vì quá
        no :))
        Nói đến dookki thì mình thấy không chỉ lẩu ngon ( mà ngon hay không cũng 1 phần do mình nêm nếm đúng hay sai nữa
        mọi người :)) ) , gà rán ở đấy cũng ngon nữa. Sushi cũng không ngoại lệ
        Tuy nhiên 1 lời khuyên dành cho các bạn đi ăn lẩu buffet như dookki là nên uống nước có ga, để dễ tiêu hoá thức
        ăn, ăn vặt như gà, sushi, đồ chiên ít thôi vì dễ no, không ăn được nhiều món khác. Chúc các bạn đi ăn ngon miệng
        nhé
        Địa chỉ: Lottemart Vũng Tàu
    </div>
    <div class="tags-wrapper  d-flex my-2" style="flex-flow:wrap;">
        <a href="/mlemvt" class="mr-3">
            <div class="text-tag mt-2">#mlemvt</div>
        </a>
        <a href="/laubuffet" class="mr-3">
            <div class="text-tag mt-2">#laubuffet</div>
        </a>
        <a href="/dookki" class="mr-3">
            <div class="text-tag mt-2">#dookki</div>
        </a>
        <a href="/reviewcucchat" class="mr-3">
            <div class="text-tag mt-2">#reviewcucchat</div>
        </a>
        <a href="/anngon" class="mr-3">
            <div class="text-tag mt-2">#anngon</div>
        </a>
    </div>
</div>

<div class="place-wrapper align-items-stretch justify-content-between">
    <div class="info-wrapper">
        <div class="image-wrapper">
            <a href="#" rel="nofollow" class="place-avatar hover">
                <div class="thumbnail-wrapper d-flex align-items-center justify-content-center ratio_1-1">
                    <img  alt="" title="Dookki Vũng Tàu" data-src="{{asset('statics/images/review/rate.jpeg')}}"
                         class=" b-lazy  thumbnail-inner" style="object-fit:cover;"></div>
            </a>
        </div>
        <div class="place-info">
            <a href="#" rel="nofollow" class="">
                <div class="title hover">Dookki Vũng Tàu</div>
                <div class="address">tầng 1 Lotte Mart, Phường 1, Thành phố Vũng Tàu, Bà Rịa - Vũng Tàu</div>
                <div class="item-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span class="span-post">4</span>
                    <span class="rating-count">(2 đánh giá)</span></div>
            </a>
        </div>
        <div class="write-review">
            <a href="{{route('review_post')}}" class="">
                <img src="https://riviu.vn/images/post/write_review.svg" alt="write_review.svg" class="write-img">
                <span class="text-write">Viết Review</span>
            </a>
        </div>
    </div>
</div>
{{--post action--}}
<div class="d-flex post-action" >
    <span class="hover hover-ic number-count flex-grow-1">
       <i class="fa fa-heart" aria-hidden="true"></i>59
    </span>
    <span class="hover hover-ic ml-3">
        <i class="fa fa-share-alt" aria-hidden="true"></i>
    </span>
    <span class="hover hover-ic ml-3">
       <i class="fa fa-bookmark" aria-hidden="true"></i>
    </span>
</div>
{{--view--}}
<div  class="count-view">
    <span  style="">987</span>
    lượt xem bài viết
</div>
{{--comment--}}
<div  class="comment">
    <div  class="title"><b >0 bình luận</b></div>
    <div>
        <div  class="comment-input d-flex align-items-center mb-3">
            <a  href="/tong.tien.anh" class="avatar">
                <div  style="width: 60px;">
                    <div   class="thumbnail-wrapper d-flex align-items-center justify-content-center ratio_1-1">
                        <img src="https://static.riviu.co/320/image/2021/01/22/f72a196aab125a6ae3c8bdd6ada6e8a6.jpeg"  alt="tong tien anh" title="Tống Tiến Anh" class="rounded-circle  thumbnail-inner" style="object-fit: cover;">
                    </div>
                </div>
            </a>
            <div  class="btn-action d-flex align-items-center" style="width: 100%;">
                <label for="" class="label-lighthouse" style="width: 100%;">.
                <input type="text" placeholder="Viết bình luận">
                </label>
                <img  src="https://riviu.vn/images/icon/comment_image.png" class="image-click" alt="comment_image.png">
                <input  type="file" id="file-upload" accept="image/png, image/jpg, image/jpeg" style="display: none;"></div>
        </div>
        <div  class="control-comment d-flex justify-content-end mb-2">
            <div  class="btn-comment">
                Bình luận
            </div>
            <div  class="cancel-comment">Hủy</div>
        </div>
        <!---->
    </div>
    <!---->
    <div  id="" class="comment-banner" style="">
        <div id="" style="border: 0pt none; width: 100%; height: 0%;"></div>
    </div>
</div>

<div  class="list-medias">
    <div>
        <div  class="wrapper row">
            <div  class="col-2">
                <div >
                    <a href="#" rel="nofollow" id="tienanh"   title="Morning on Camaret (Tony N.)" class="hover thumbnail-wrapper d-flex ">
                        <img style="display:none;" id="output" src="#" alt="">
                    </a>
                    <i  class="fas fa-times-circle"></i>
                </div>
                <!---->
            </div>
        </div>
        <!---->
    </div>
</div>
