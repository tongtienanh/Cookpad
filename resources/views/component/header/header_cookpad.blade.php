<header class="header {{ isset($border_bottom) ? 'header-border-bottom' : '' }}" id="header-default">
    <div class="wrap-header {{ $container ?? 'container' }}">
        <a href="/" class="prev-page">
            <i class="la la-angle-left"></i>
        </a>
        <div>
        <div class="logo-header ">
            <a href="/">
                {{ config('app.app_name') }}
            </a>
        </div>
            <div class="header-right-box">
                <a href="{{ route('get.auth.login') }}" class="btn btn-radius mb-login">
                    Đăng nhập
                </a>

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

                            <ul class="menu-header">
                                <li><a href="{{ route('post') }}" class="active"><i class="la la-plus-circle"></i> Đăng</a></li>
                                <li><a href="#" rel="nofollow"><i class="fa fa-bell"></i> Thông báo</a></li>
                                <li><a href="#" rel="nofollow"><i class="fa fa-heart-o"></i> Bộ sưu tập</a></li>
                                @if(isset($is_login) && $is_login ==1)
                                    <li><a href="{{ route('get.auth.login') }}">{{ __('home.account') }}
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </a>
                                        @include('component.header.inc_account_candidate')
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('get.auth.login') }}">{{ __('home.login') }}</a>
                                        <div id="form-login" class="dropdown dropdown-login">
                                            @include('component.login', ['autocomplete' => 1])
                                        </div>
                                    </li>
                                @endif
                            </ul>

                <ul class="menu-header">
                    <li><a href="{{ route('post') }}" class="active"><i class="la la-plus-circle"></i>Đồ ăn</a></li>
                    <li><a href="#" rel="nofollow"><i class="fa fa-bell"></i> Đặt bàn</a></li>
                    <li><a href="#" rel="nofollow"><i class="fa fa-heart-o"></i> Blog</a></li>
                    <li><a href="#" rel="nofollow"><i class="fa fa-heart-o"></i> Review</a></li>
                </ul>
            </div>
        </div>
        @if(isset($is_login) && $is_login ==1)
            <li><a href="{{ route('get.auth.login') }}">{{ __('home.account') }}
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                @include('component.header.inc_account_candidate')
            </li>
        @else
            <li>
                <a href="{{ route('get.auth.login') }}">{{ __('home.login') }}</a>
                <div id="form-login" class="dropdown dropdown-login">
                    @include('component.login', ['autocomplete' => 1])
                </div>
            </li>
        @endif
        <nav>
            <ul class="menu-header">
            </ul>
        </nav>
    </div>
</header>
@if (isset($nav_link))
    <style>
        .nav-top-link {
            display: flex;
            margin-top: 10px;
        }
        .nav-top-link li {
            margin-right: 20px;
        }
        a.nav-link {
            padding: 20px 10px;
            border: 1px solid #ccc;
            border-radius: 12px;
            margin-right: 20px;
            display: block;
            width: 100%;
            position: relative;
            min-width: 163px;
        }
        span.text {
            font-weight: 600;
        }
        span.icon {
            position: absolute;
            top: 30%;
            right: 5%;
            font-size: 20px;
        }
    </style>
    <div class="nav">
        <div class="container">
            <ul class="nav-top-link">
                <li><a href="#" rel="nofollow" class="nav-link">
                        <span class="text">Hôm nay ăn gì?</span>
                        <span class="icon"><i class="la la-question-circle"></i></span>
                    </a></li>
                <li><a href="#" rel="nofollow" class="nav-link">
                        <span class="text">Món ăn mới nhất</span>
                        <span class="icon"><i class="la la-star"></i></span>
                    </a></li>
                <li><a href="#" rel="nofollow" class="nav-link">
                        <span class="text">Viết món mới</span>
                        <span class="icon"><i class="la la-pencil-square"></i></span>
                    </a></li>
                <li><a href="#" rel="nofollow" class="nav-link">
                        <span class="text">Khám phá</span>
                        <span class="icon"><i class="la la-bars"></i></span>
                    </a></li>
                <li><a href="#" rel="nofollow" class="nav-link">
                        <span class="text">Thêm</span>
                        <span class="icon"><i class="fa fa-ellipsis-h"></i></span>
                    </a></li>
            </ul>
        </div>
    </div>
@endif
@include('component.sidebar')
