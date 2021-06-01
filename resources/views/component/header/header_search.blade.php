<section id="header-search">
    <div class="container">
        <div class="header-wrap {{ $row ?? '' }}">
            <div class="wrap-form-search">
                <form class="form-search form-search-job flex-item" action="{{ route('get.search.submit') }}" autocomplete="off">
                    <div class="content-form-search">
                        <a href="/" class="prev-page-search">
                            <i class="la la-angle-left"></i>
                        </a>
                        <div class="form-search__input form-search__input--mb">
                            <span class="input-icon"></span>
                            <h1 class="input-title">{{ __('static.box_search.search_key') }}</h1>
                        </div>
                        <div class="mb-menu">
                            <a href="#" rel="nofollow" class="item__favorite item__save" data-id="login-box-0">
                                <span>6</span>
                                <i class="fa fa-heart-o"></i>
                            </a>
                            <div class="mb-menu__button js-mb-sidebar">
                                <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg">
                                    <g transform="translate(-2 -5)">
                                        <rect x="2" y="5" width="20" height="2" rx="1"></rect>
                                        <rect x="2" y="17" width="20" height="2" rx="1"></rect>
                                        <rect x="2" y="11" width="20" height="2" rx="1"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="form-search__input--dk">
                        <div class="input-group input-what">
                            <div class="box-input">
                                <label for="search" class="label-lighthouse">.
                                <input type="search" name="q" autocomplete="off" placeholder="{{ __('home.input_placeholder_keyword') }}" class="form-input">
                                </label>
                                <i class="la la-search"></i>
                                <div class="fillter-icon">
                                    <span>Bộ Lọc<i class="fa fa-filter" aria-hidden="true"></i></span>
                                </div>
                                @include('component.search.box_keyword')
                            </div>
                        </div>
{{--                        <div class=" more-fillter d-flex">--}}
{{--                            <i class="fa fa-filter" aria-hidden="true"></i>--}}
{{--                            Bộ lọc--}}
{{--                        </div>--}}
                        <div class="button-search">
                            <button class="btn btn-green">{{ __('home.search') }}</button>
                        </div>
                    </div>

                    <div id="bg-black"></div>
                    @include('component.filter._inc_box_search_mb')
                    @include('component.filter._inc_box_filter_mb')
                    @include('component.filter._inc_box_location_mb')
                    @include('component.filter._inc_box_city_mb')
                    @include('component.filter._inc_box_career_mb')
                    @include('component.filter._inc_box_salary_mb')
                    @include('component.filter._inc_box_experience_mb')
                    @include('component.filter._inc_box_fr_work_mb')
                    @include('component.filter._inc_box_level_mb')
                </form>
            </div>
        </div>
    </div>
</section>
<div class="form-search-job">
    @include('component.filter._inc_box_search_mb')
</div>

<div class="tag-job">
    <div class="tag-job-list">
        <a href="#filter-all" class="item">
            {{ __('static.box_search.all') }}
            <img src="{{ url('statics/images/icon/dropdown.svg') }}" alt="">
        </a>
        <a href="#filter-city" class="item">
           Địa điểm
            <img src="{{ url('statics/images/icon/dropdown.svg') }}" alt="">
        </a>
        <a href="#filter-career" class="item">
            Loại món
            <img src="{{ url('statics/images/icon/dropdown.svg') }}" alt="">
        </a>
        <a href="#filter-salary" class="item">
           Nguyên liệu
            <img src="{{ url('statics/images/icon/dropdown.svg') }}" alt="">
        </a>
        <a href="#filter-experience" class="item">
            Độ khó
            <img src="{{ url('statics/images/icon/dropdown.svg') }}" alt="">
        </a>
        <a href="#filter-fr-work" class="item">
           Mùa, dịp lễ
            <img src="{{ url('statics/images/icon/dropdown.svg') }}" alt="">
        </a>
        <a href="#filter-level" class="item">
            Cách thực hiện
            <img src="{{ url('statics/images/icon/dropdown.svg') }}" alt="">
        </a>
    </div>
</div>
