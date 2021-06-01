<header class="header {{ isset($border_bottom) ? 'header-border-bottom' : '' }}" id="header-detail">
    <div class="wrap-header {{ $container ?? '' }}">
        <a href="{{ route('get.search.index') }}" class="prev-page">
            <i class="la la-angle-left"></i>
        </a>
        <div class="logo-header " style="    justify-content: center;align-items: center;display: flex;">
            <a href="/">
                {{ config('app.app_name') }}
            </a>
        </div>
        <nav>
            <ul class="menu-header">
            </ul>
        </nav>
        <div class="header-right-box header-right-box-detail">
{{--            <div class="search">--}}
{{--                <img src="{{ url('statics/images/icon/search.svg') }}" alt="">--}}
{{--            </div>--}}
            <div class="heart js-show-box js-popup-auth">
                <a href="javascript:void(0)" class="item__favorite item__save" data-id="login-box-0">
                    <span>6</span>
                    <i class="fa fa-heart-o"></i>
                </a>
            </div>
            <div class="menu-dropdown">

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
    </div>
    <div class="form-search-fk">
        <div class="form-search__input form-search__input--mb">
            <span class="input-icon"></span>
            <h1 class="input-title">{{ __('static.box_search.search_key') }}</h1>
        </div>
    </div>

</header>
