<div class="filter-form-mb" id="filter-all">
    <div class="header-filter">
        <div class="search">
            <div class="prev">
                <img class="img-svg" src="{{ url('statics/images/icon/prev_333.svg') }}" alt="">
            </div>
            <div class="clear-filter">
                <span>{{ __('static.box_search.reset') }}</span>
            </div>
            <div class="txt-filter">
                <span>Lọc tìm kiếm</span>
            </div>
        </div>
    </div>
    <div class="filter-column">
        <ul class="list-item-f">
            <li class="item-f" data-id="#filter-city" id="location">
                <div class="left">
                    <span>Địa điểm</span>
                </div>
                <div class="right">
                    <span class="txt-chose">{{ __('static.box_search.all') }}</span>
                    <span class="choose-next"><img class="img-svg" src="{{ url('statics/images/icon/next.svg') }}" alt=""></span>
                    <span class="choose-close"><img class="img-svg" src="{{ url('statics/images/icon/close_white.svg') }}" alt=""></span>
                </div>
            </li>
            <li class="item-f" data-id="#filter-career"  id="career">
                <div class="left">
                    <span>Loại món</span>
                </div>
                <div class="right">
                    <span class="txt-chose">{{ __('static.box_search.all') }}</span>
                    <span class="choose-next"><img class="img-svg" src="{{ url('statics/images/icon/next.svg') }}" alt=""></span>
                    <span class="choose-close"><img class="img-svg" src="{{ url('statics/images/icon/close_white.svg') }}" alt=""></span>
                </div>
            </li>
            <li class="item-f" data-id="#filter-level" id="level">
                <div class="left">
                    <span>Cách thực hiện</span>
                </div>
                <div class="right">
                    <span class="txt-chose">{{ __('static.box_search.all') }}</span>
                    <span class="choose-next"><img class="img-svg" src="{{ url('statics/images/icon/next.svg') }}" alt=""></span>
                    <span class="choose-close"><img class="img-svg" src="{{ url('statics/images/icon/close_white.svg') }}" alt=""></span>
                </div>
            </li>
            <li class="item-f" data-id="#filter-salary" id="salary">
                <div class="left">
                    <span>Nguyên liệu</span>
                </div>
                <div class="right">
                    <span class="txt-chose">{{ __('static.box_search.all') }}</span>
                    <span class="choose-next"><img class="img-svg" src="{{ url('statics/images/icon/next.svg') }}" alt=""></span>
                    <span class="choose-close"><img class="img-svg" src="{{ url('statics/images/icon/close_white.svg') }}" alt=""></span>
                </div>
            </li>
            <li class="item-f" data-id="#filter-experience" id="experience">
                <div class="left">
                    <span>Độ khó</span>
                </div>
                <div class="right">
                    <span class="txt-chose">{{ __('static.box_search.all') }}</span>
                    <span class="choose-next"><img class="img-svg" src="{{ url('statics/images/icon/next.svg') }}" alt=""></span>
                    <span class="choose-close"><img class="img-svg" src="{{ url('statics/images/icon/close_white.svg') }}" alt=""></span>
                </div>
            </li>
            <li class="item-f" data-id="#filter-fr-work" id="fr-work">
                <div class="left">
                    <span>Mùa,dịp lễ</span>
                </div>
                <div class="right">
                    <span class="txt-chose">{{ __('static.box_search.all') }}</span>
                    <span class="choose-next"><img class="img-svg" src="{{ url('statics/images/icon/next.svg') }}" alt=""></span>
                    <span class="choose-close"><img class="img-svg" src="{{ url('statics/images/icon/close_white.svg') }}" alt=""></span>
                </div>
            </li>
        </ul>
    </div>
    <div class="apply-filter">
        <button type="submit">{{ __('static.box_search.search') }}</button>
    </div>
</div>
