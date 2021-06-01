<div class="search-form-mb {{ isset($is_home) ? 'form-search-job-mb' : '' }}">
    <div class="close">
        <i class="la la-times"></i>
    </div>
    <div class="header-search">
        <form action="{{ route('get.search.index') }}" method="GET">
            <div class="form-group">
                <div class="title">
                    <label>{{ __('static.box_search_mobile.search') }}</label>
                    <p>Từ khóa</p>
                </div>
                <div class="form">
                    <div class="icon icon-search">
                        <i class="la la-search"></i>
                    </div>
                    <div class="input-keyword box-input">
                        <label style="color: #FFFFFF" for="key">.
                        <input type="text" class="form-control" placeholder="Công thức,món ăn hoặc nhà hàng">
                        </label>
                        <span class="keyword-cancel rm-text">×</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-green">{{ __('static.box_search_mobile.search') }}</button>
            </div>
        </form>
{{--        @include('component.filter._inc_result_filter')--}}
{{--        @include('component.filter._inc_suggestion_location_mb')--}}
    </div>

    <div class="result-default">
        <div class="history-search">
            <div class="border"></div>
            <div class="title">
                <span>{{ __('static.box_search_mobile.recent_search') }}</span>
            </div>
            <a href="#" rel="nofollow">{{ __('static.box_search_mobile.remove_all') }}</a>
            <ul class="list-item-h">
                <li class="item-h">
                    <a href="#" rel="nofollow">Sub gà thập cẩm<span>(704 {{ __('static.box_search_mobile.new') }})</span></a>
                    <img class="img-svg" src="{{ url('statics/images/icon/close_gray.svg') }}" alt="">
                </li>
                <li class="item-h">
                    <a href="#" rel="nofollow">Sup gà rau củ <span>(109 {{ __('static.box_search_mobile.new') }})</span></a>
                    <img class="img-svg" src="{{ url('statics/images/icon/close_gray.svg') }}" alt="">
                </li>
                <li class="item-h">
                    <a href="#" rel="nofollow">Gà rang mối<span>(678 {{ __('static.box_search_mobile.new') }})</span></a>
                    <img class="img-svg" src="{{ url('statics/images/icon/close_gray.svg') }}" alt="">
                </li><li class="item-h">
                    <a href="#" rel="nofollow">Trứng trộn nấm kim chiên</a>
                    <img class="img-svg" src="{{ url('statics/images/icon/close_gray.svg') }}" alt="">
                </li><li class="item-h">
                    <a href="#" rel="nofollow">Cháo tôm hàu</a>
                    <img class="img-svg" src="{{ url('statics/images/icon/close_gray.svg') }}" alt="">
                </li><li class="item-h">
                    <a href="#" rel="nofollow">Chè đậu xanh có vỏ và dong biển</a>
                    <img class="img-svg" src="{{ url('statics/images/icon/close_gray.svg') }}" alt="">
                </li>
            </ul>
        </div>

        <div class="keyword-hot">
            <div class="border"></div>
            <div class="title">
                <span>{{ __('static.box_search_mobile.popular_keywords') }}</span>
            </div>
            <ul class="list-item-k">
                <li><a href="#" rel="nofollow" class="item-k">Phở gà nướng trộn</a></li>
                <li><a href="#" rel="nofollow" class="item-k">Cút lộn xào me</a></li>
                <li><a href="#" rel="nofollow" class="item-k">Cá ba sa hấp xả</a></li>
                <li><a href="#" rel="nofollow" class="item-k">Cháo tôm hàu</a></li>
                <li><a href="#" rel="nofollow" class="item-k">Chè đậu xanh</a></li>
                <li><a href="#" rel="nofollow" class="item-k">Trứng chiên</a></li>
                <li><a href="#" rel="nofollow" class="item-k">Cơm gà rang vừng</a></li>
                <li><a href="#" rel="nofollow" class="item-k">Cơm</a></li>
                <li><a href="#" rel="nofollow" class="item-k">Chè hoa quả</a></li>
                <li><a href="#" rel="nofollow" class="item-k">Sữa bơ cốt dừa</a></li>
            </ul>
        </div>

    </div>
</div>
