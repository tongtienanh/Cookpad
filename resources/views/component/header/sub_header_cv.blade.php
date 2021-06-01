<section id="sub-header">
    <div class="container">
        <div id="sub-navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="{{ route('get.cv.create') }}">
                       {{ __('static.sub_menu.cv.cv_manage') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('get.cover_letter.create') }}">
                        {{ __('static.sub_menu.cv.cover_letter_manage') }}
                    </a>
                </li>
                <li class="active">
                    <a href="{{ route('get.cv.template') }}">{{ __('static.sub_menu.cv.create_cv') }}</a>
                </li>
                <li>
                    <a href="{{ route('get.cover_letter.template') }}">{{ __('static.sub_menu.cv.create_cover_letter') }}</a>
                </li>
            </ul>
        </div>
    </div>
</section>
