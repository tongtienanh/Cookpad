<div id="background-bg"></div>
<div class="pushmenu pushmenu-right in {{ isset($sub_main) ? 'main' : '' }}">
    <div class="user-area">
        <div>
            <div class="m-user-ava u-login">

            </div>
            <div class="user-action u-logout">
                <a href="{{ route('get.auth.login') }}">{{ __('static.login') }}</a>
                <a class="register" href="{{ route('get.auth.register') }}">{{ __('static.register') }}</a>
            </div>
        </div>
    </div>
    <div class="slide-menu">
        <ul class="dropdown-navigative-menu">
            <li class="lv0">
                <a href="#" rel="nofollow">
                    <span class="icon">
                        <img alt="" src="https://staticfile.batdongsan.com.vn/images/mobile/ic_house.svg">
                    </span>
                    <span class="text">{{ __('static.home') }}</span>
                </a>
            </li>
            <li class="lv0">
                <a href="#" rel="nofollow">
                    <span class="icon">
                        <img alt="" src="https://staticfile.batdongsan.com.vn/images/mobile/icons/24x24/filled/ic_shortlist.svg">
                    </span>
                    <span class="text">{{ __('static.job_save') }}</span>
                </a>
            </li>
            <li class="lv0">
                <a href="#" rel="nofollow">
                    <span class="icon">
                        <img alt="" src="https://staticfile.batdongsan.com.vn/images/mobile/ic_contact_list.svg">
                    </span>
                    <span class="text">{{ __('static.search_job') }}</span>
                </a>
            </li>
            <li class="lv0">
                <a href="#" rel="nofollow">
                    <span class="icon">
                        <img alt="" src="https://staticfile.batdongsan.com.vn/images/mobile/ic_buy_rent.svg">
                    </span>
                    <span class="text">{{ __('static.search_company') }}</span>
                </a>
            </li>
            <li class="lv0">
                <a href="#" rel="nofollow" class="haslink">
                    <span class="icon">
                        <img alt="" src="https://staticfile.batdongsan.com.vn/images/mobile/ic_news.svg">
                    </span>
                    <span class="text">{{ __('static.job') }}</span>
                </a>
                <div class="arrrow"></div>
                <ul class="">
                    <li class="lv1">
                        <a rel=nofollow href="#" rel="nofollow" class="haslink ">{{ __('static.job_save') }}</a>
                    </li>
                    <li class="lv1 active">
                        <a href="#" rel="nofollow"  class="haslink" rel=nofollow>{{ __('static.job_match') }}</a>
                    </li>
                    <li class="lv1">
                        <a href="#" rel="nofollow" class="haslink" rel=nofollow>{{ __('static.job_apply') }}</a>
                    </li>
                    <li class="lv1">
                        <a  href="#" rel="nofollow" class="haslink" rel=nofollow>{{ __('static.job_seen') }}</a>
                    </li>
                </ul>
            </li>
            <li class="lv0 bg_menu">
                <a href="#" rel="nofollow">{{ __('static.introduce') }}</a>
            </li>
            <li class="lv0 bg_menu">
                <a href="#" rel="nofollow">{{ __('static.123work_operating') }}</a>
            </li>
            <li class="lv0 bg_menu">
                <a href="#" rel="nofollow">{{ __('static.term_of_use') }}</a>
            </li>
            <li class="lv0 bg_menu">
                <a href="#" rel="nofollow">{{ __('static.policy_info_security') }}</a>
            </li>

        </ul>
    </div>
</div>
