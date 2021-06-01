<div class="row mb-5">
    <div class="col-10 offset-1 mb-1" style="background: rgb(255, 255, 255);">
        <div class="d-flex title">
            <div class="label-title">
                Tiêu đề
            </div>
            <span style="line-height: 40px; color: rgb(220, 220, 220);">|</span>
            <div class="input-box">
                <label for="" class="label-lighthouse">.
                    <input type="text" placeholder="Hãy viết tiêu đề bài"></div>
            </label>
        </div>
    </div>
    <div class="col-10 offset-1 mb-1" style="background: rgb(255, 255, 255);">
        <label for="" class="label-lighthouse">.
        <textarea type="text" placeholder="Hãy viết cảm nhận của bạn" rows="10" class="body-review"
                  style="width: 100%;"></textarea>
        </label>
        <div class="text-option">
            <div id="editor">
                <i>Insert text here ...</i>
            </div>
        </div>
        <div class="list-medias mt-3">
            <div>
                <div class="media-wrapper row">
                    <div class="col-2" style="margin-bottom: 10px;">
                        <div class="js-wrap-image">

                            <a id="tienanh" href="" title="Morning on Camaret (Tony N.)"
                               class="hover thumbnail-wrapper d-flex ">
                                <img style="display:none;" id="output" src="#" alt=""/>
                            </a>
                            <i class="fas fa-times-circle"></i> <!----> <!---->
                        </div>
                        <!---->
                    </div>
                </div>
            </div>
        </div>
        <div class="switch-text">
            Chuyển chế độ viết bài nâng cao
        </div>
    </div>
    <div class="col-10 offset-1 mb-1" style="background: rgb(255, 255, 255);">
        <div class="d-flex title">
            <div class="p-2 flex-shrink-1 align-self-center label-title">
                Tag
            </div>
            <span style="line-height: 40px; color: rgb(220, 220, 220);">|</span>
            <div class="w-100" style="width: 100%;">
                <div tabindex="-1" class="multiselect multiselect--above">
                    <div class="multiselect__select"></div>
                    <div class="multiselect__tags">
                        <div class="multiselect__tags-wrap" style="display: none;"></div>
                        <div class="multiselect__spinner" style="display: none;"></div>
                        <label for="" class="label-lighthouse">.
                        <input name="" id="123kuk" type="text" autocomplete="nope" placeholder="Tìm kiếm hay thêm tag"
                               tabindex="0" class="multiselect__input">
                        </label>
                        <span class="multiselect__placeholder">Tìm kiếm hay thêm tag</span>
                    </div>
                    <div tabindex="-1" class="multiselect__content-wrapper" style="max-height: 300px; display: none;">
                        <ul class="multiselect__content" style="display: block;">
                            <!---->
                            <li style="display: none;"><span class="multiselect__option">No elements found. Consider changing the search query.</span>
                            </li>
                            <li><span class="multiselect__option">List is empty.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-10 offset-1 mb-1" style="background: rgb(255, 255, 255);">
        <div class="service-info d-flex">
            <div class="service-item d-flex " id="huhu">
                <span class="image-item">
                    <img src="{{url('https://riviu.vn/images/icon/icon_image.png')}}" width="30px"
                         alt="Đặt món trên Riviu">
                </span> <b class="text-center flex-grow-1">
                    <a class="service-item" href="#" rel="nofollow">Thêm hình</a>
                </b>
                <label for="" class="label-lighthouse">.
                <input type="file" id="selectedFile" style="display: none;"/>
                </label>
            </div>
            <span class="split-item">|</span>
            <div class="service-item py-2 px-5 mr-2 rounded-lg hover d-flex align-items-center">
                <span class="video-item">
                    <img src="{{url('https://riviu.vn/images/icon/icon_video.png')}}" width="30px"
                         style="object-fit: cover" alt="Đặt món trên Riviu">
                </span>
                <b class="">
                    <a href="#" rel="nofollow">Thêm video</a>
                </b>
                <label for="" class="label-lighthouse">.
                <input type="file" accept="video/*" style="display: none;">
                </label>
            </div>
        </div>
    </div>
    <div class="col-10 offset-1 mb-1" style="background: rgb(255, 255, 255);">
        <div class="d-flex py-2 hover">
            <div class="p-2 align-self-center label-title flex-grow-1 hover">
                Chọn địa điểm
            </div>
            <div class="p-2" style="display: none"><i class="fa fa-chevron-right"></i></div>
        </div>
    </div>
    <!---->
    <div class="col-10 offset-1 place-info mb-1 pb-2" style="background: rgb(255, 255, 255);">
        <div class=" d-flex info-wrapper" style="background: rgb(255, 255, 255);">
            <div class="place-avatar">
                <div class="thumbnail-wrapper d-flex ">
                    <img alt="Tiny Hut- Nguyễn Công Hoan" title="Riviu"
                         src="{{url('https://static.riviu.co/320/image/2021/03/04/1c3d9ec3c177a18e0aece69e9282b277_output.jpeg')}}"
                         class="  thumbnail-inner" style="object-fit: cover;"></div>
            </div>
            <div class="box-info ml-2">
                <h3 class="title"><b>Tiny Hut- Nguyễn Công Hoan</b></h3>
                <div class="d-flex align-items-center mb-1">
                    {{--                    <div class="star-rating">--}}
                    {{--                        <label class="star-rating__star is-selected is-disabled">--}}
                    {{--                            <input type="radio" disabled="disabled" class="star-rating star-rating__checkbox" value="0">--}}
                    {{--                            <i class="fas-star">★</i>--}}
                    {{--                        </label>--}}
                    {{--                        <label class="star-rating__star is-selected is-disabled">--}}
                    {{--                            <input type="radio" disabled="disabled" class="star-rating star-rating__checkbox" value="1">--}}
                    {{--                            <i class="fas-star">★</i>--}}
                    {{--                        </label>--}}
                    {{--                        <label class="star-rating__star is-selected is-disabled">--}}
                    {{--                            <input type="radio" disabled="disabled" class="star-rating star-rating__checkbox" value="2">--}}
                    {{--                            <i class="fas-star">★</i>--}}
                    {{--                        </label>--}}
                    {{--                        <label class="star-rating__star is-selected is-disabled">--}}
                    {{--                            <input type="radio" disabled="disabled" class="star-rating star-rating__checkbox" value="3">--}}
                    {{--                            <i class="fas-star">★</i>--}}
                    {{--                        </label>--}}
                    {{--                        <label class="star-rating__star is-selected is-disabled">--}}
                    {{--                            <input type="radio" disabled="disabled" class="star-rating star-rating__checkbox" value="4">--}}
                    {{--                            <i class="fas-star">★</i>--}}
                    {{--                        </label>--}}
                    {{--                    </div>--}}
                    <span class="review-count">2 reviews</span>
                </div>
                <p class="address text-truncate" style="max-width: 90%;">145/3 Nguyễn Công Hoan, Phường 07, Quận Phú
                    Nhu...</p>
            </div>
            <i class="fas fa-times btn-remove hover"></i> <!---->
        </div>
    </div>
    <div class="col-10 offset-1 mb-1" style="background: rgb(255, 255, 255);">
        <div class="d-flex py-2">
            <div class="p-2 align-self-center label-title flex-grow-1">
                Đánh giá của bạn
            </div>
        </div>
    </div>
    <div class="col-10 offset-1 mb-1 rating-detail py-2" style="background: rgb(255, 255, 255);">
        <div class="row p-8 rate-box">
            <div class="col-3 pl-3 pr-3 "><span class="rate">Đánh giá chung :</span></div>
            <div class="col-4 star-rating">
                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                <div class="col-5" style="float: right"><span>
            Rất tốt
            </span>
                </div>
            </div>
        </div>

    </div>
    <div class="col-10 offset-1 mb-1" style="background: rgb(255, 255, 255);">
        <div class="d-flex title">
            <div class="p-2 flex-shrink-1 label-title">
                Youtube
            </div>
            <div class="box-youtube">
                <label for="" class="label-lighthouse">.
                <input style="width: 100%;" type="text" placeholder="https://www.youtube.com/watch?v=zzzzzzzzz"></div>
            </label>
        </div>
    </div>
    <div class="col-10 offset-1 mb-2">
        <button type="button" class="btn btn-review btn-submit hover">
            Đăng bài
        </button>
    </div>
</div>

