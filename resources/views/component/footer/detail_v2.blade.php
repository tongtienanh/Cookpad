<footer class="footer">
    <div class="footer__content {{ $container ?? 'container' }}">
        <div class="footer__tabs">
            @foreach (config('menu.footer') as $items)
                <div class="item {{ $items['class'] }}">
                    <h3 class="item__title title title-des">
                        <span>{{ trans('footer.'. $items['title']) }}</span>
                        <span class="line"></span>
                    </h3>
                    <h3 class="item__title title title-mb js-title-mb">
                        <span>{{ trans('footer.'. $items['title']) }}</span>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </h3>
                    <div class="item__content js-content" id="{{ $items['id'] }}">
                        @foreach ($items['sub'] as $item)
                            <a href="{{  ($item['route'] !== '') ? route($item['route']) : $item['link'] }}" target="_blank">{{ trans('footer.'. $item['title']) }}</a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <div class="footer__contact">
            <div class="contact-item">
                <h3 class="title">{{ trans('footer')['footer']['company_name'] }}</h3>
                <p>{{ trans('footer')['footer']['GCNĐKDN'] }}</p>
                <p>{{ trans('footer')['footer']['address'] }}</p>
            </div>
            <div class="contact-item">
                <h3 class="title">{{ trans('footer')['footer']['contact'] }}</h3>
                <p>{{ trans('footer')['footer']['email'] }}</p>
                <p>{{ trans('footer')['footer']['work_time'] }}</p>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="{{ $container ?? 'container' }} content-footer">
            <div class="content-footer__left">
                <p>Copyright 2020 - Copyright 123work.vn</p>
            </div>
            <div class="content-footer__right">
                <form action="{{ route('post.language.change') }}" method="GET" id="frm-change-locale">
                    @php
                        $locale = \Illuminate\Support\Facades\Session::get('website_language') ?? 'vi';
                    @endphp
                    <select name="locale" id="js-change-locale" class="form-control">
                        <option value="vi" {{  $locale == 'vi' ? 'selected' : '' }}>Việt Nam</option>
                        <option value="en" {{  $locale == 'en' ? 'selected' : '' }}>English</option>
                        <option value="id" {{  $locale == 'id' ? 'selected' : '' }}>Indonesia</option>
                    </select>
                </form>
            </div>
        </div>
    </div>
</footer>
