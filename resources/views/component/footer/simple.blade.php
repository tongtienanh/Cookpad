<footer class="footer footer-format-simple pt-2 pb-2">
    <div class="container">
        <div class="mb-1">
            <ul class="menu-footer">
                <li><a href="{{ route('get.about.index') }}">{{ __('footer.about') }}</a></li>
                <li><a href="{{ route('get.cv.template') }}">Viết món mới</a></li>
                <li><a href="#" rel="nofollow">Blog chia sẻ</a></li>
                <li><a href="#" rel="nofollow">Liên hệ hợp tác</a></li>
            </ul>
        </div>
        <div class="">
            <ul class="menu-footer">
                <li><a href="#" rel="nofollow">&copy; {{ date('Y') }} {{ config('app.app_name') }} {{__('footer.copy_right') }}</a></li>
                <li><a href="{{ route('get.static.policy_info_security') }}">Chính sách bảo mật</a></li>
                <li><a href="{{ route('get.static.policy_info_security') }}">Chính sách hoạt động</a></li>
                <li><a href="{{ route('get.browse_skill.index') }}">Sitemap</a></li>
            </ul>
        </div>
        <form action="{{ route('post.language.change') }}" method="GET" id="frm-change-locale">
            @php
                $locale = \Illuminate\Support\Facades\Session::get('website_language') ?? 'vi';
            @endphp
            <label style="color: #EEEEEE" for="">x
            <select name="locale" id="js-change-locale" style="padding: 4px 10px" class="mt-2">
                <option value="vi" {{  $locale == 'vi' ? 'selected' : '' }}>Việt Nam</option>
                <option value="en" {{  $locale == 'en' ? 'selected' : '' }}>English</option>
                <option value="id" {{  $locale == 'id' ? 'selected' : '' }}>Indonesia</option>
            </select>
            </label>
        </form>
    </div>
</footer>
