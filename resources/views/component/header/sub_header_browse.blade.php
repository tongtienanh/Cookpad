@php
    $topNavSub = $navSub ?? config('setting.menu.top_nav_sub.browse');
    $activeNav = $active_nav ?? 0;
@endphp
<section id="sub-header">
    <div class="container">
        <div id="sub-navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                @foreach($topNavSub as $key => $navSubItem)
                    @php $classActive = ($key == $activeNav) ? 'active': '' @endphp
                <li class="{{ $classActive }}">
                    <a href="{{ $navSubItem['link'] }}">{{ __($navSubItem['title']) }}</a>
                </li>
                @endforeach
{{--                <li class="dropdown-sub-header">--}}
{{--                    <a href="javascript:showLoginPopup(null, 'Đăng nhập hoặc Đăng ký để truy cập')">--}}
{{--                        Xem thêm<i class="fa fa-sort-desc" aria-hidden="true"></i></a>--}}
{{--                    <div class="container dropdowm-sub-header-content">--}}
{{--                        <div class="dropdowm-content">--}}
{{--                            <p><a href="">Việc làm phù hợp</a></p>--}}
{{--                            <p><a href="">Việc làm đã ứng tuyển</a></p>--}}
{{--                            <p><a href="">Việc làm đã xem</a></p>--}}
{{--                            <p><a href="">Việc làm phù hợp</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}

            </ul>
        </div>
    </div>
</section>
