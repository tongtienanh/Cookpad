<div class="input-group input-where">
    <div class="box-input">
        @php
            $locale = \Illuminate\Support\Facades\Session::get('website_language') ?? 'vi';
        @endphp

        <label style="color:#FFFFFF;" for="search">.
            <input type="text" name="l"
                   autocomplete="disabled"
                   placeholder="{{ __('static.box_search_mobile.placeholder_address') }}"
                   class="{{ $locale == 'vi' ? 'form-input' : 'js-typeahead-location' }}"
                {{ $locale == 'vi' ? 'readonly' : '' }}>
        </label>
        <i class="la la-map-marker"></i>

        @if($locale == 'vi')
            <div class="list_city_child scroll-bar-wrap dropdown list_child_id">
                <div class="scroll-box">
                    <div class="list-city">
                        <div class="filter-city mt-3">
                            <i class="la la-search"></i>
                            <label for="">
                            <input id="" type="text" placeholder="{{ __('static.box_search_mobile.search_city') }}" class="bbb" autocomplete="off">
                            </label>
                        </div>
                        <div class="list-city-li">
                            <ul>
                                <li class="active">Toàn quốc</li>
                                <li><i class="la la-angle-right"></i>Hồ Chí Minh </li>
                                <li><i class="la la-angle-right"></i>Hà Nội</li>
                                <li><i class="la la-angle-right"></i>Đà Nẵng</li>
                                <li><i class="la la-angle-right"></i>Cần Thơ</li>
                                <li><i class="la la-angle-right"></i>Bình Dương</li>
                                <li><i class="la la-angle-right"></i>An Giang</li>
                                <li><i class="la la-angle-right"></i>Bà Rịa - Vũng Tàu</li>
                                <li><i class="la la-angle-right"></i>Bắc Giang</li>
                                <li><i class="la la-angle-right"></i>Bắc Kạn</li>
                                <li><i class="la la-angle-right"></i>Bạc Liêu</li>
                                <li><i class="la la-angle-right"></i>Bắc Ninh</li>
                                <li><i class="la la-angle-right"></i>Bến Tre</li>
                                <li><i class="la la-angle-right"></i>Bình Định</li>
                                <li><i class="la la-angle-right"></i>Bình Phước</li>
                                <li><i class="la la-angle-right"></i>Bình Thuận</li>
                                <li><i class="la la-angle-right"></i>Cà mau</li>
                                <li><i class="la la-angle-right"></i>Cao Bằng</li>
                                <li><i class="la la-angle-right"></i>Đắk Lắk</li>
                                <li><i class="la la-angle-right"></i>Đắk Nông</li>
                                <li><i class="la la-angle-right"></i>Điện Biên</li>
                                <li><i class="la la-angle-right"></i>Đồng Nai</li>
                                <li><i class="la la-angle-right"></i>Đồng Tháp</li>
                                <li><i class="la la-angle-right"></i>Gia Lai</li>
                                <li><i class="la la-angle-right"></i>Hà Giang</li>
                                <li><i class="la la-angle-right"></i>Hà Nam</li>
                                <li><i class="la la-angle-right"></i>Hà Tĩnh</li>
                                <li><i class="la la-angle-right"></i>Hải Dương</li>
                                <li><i class="la la-angle-right"></i>Hải Phòng</li>
                                <li><i class="la la-angle-right"></i>Hậu Giang</li>
                                <li><i class="la la-angle-right"></i>Hòa Bình</li>
                                <li><i class="la la-angle-right"></i>Long An</li>
                            </ul>
                        </div>
                    </div>
                    <div class="list-district">
                        <div class="city mb-1">
                            <a href="#" rel="nofollow"><i class="la la-angle-left"></i>Hà Nội</a>
                        </div>
                        <div class="filter-district">
                            <i class="la la-search"></i>
                            <label for="">
                            <input  type="text" placeholder="{{ __('static.box_search_mobile.search_district') }}" class="bbb" autocomplete="off">
                            </label>
                        </div>
                        <div class="list-district-li">
                            <ul>
                                <li class="active">
                                    <a href="#" rel="nofollow">Tất cả quận, huyện</a>
                                </li>
                                <li>
                                    <a href="#" rel="nofollow">Thanh Xuân</a>
                                </li>
                                <li>
                                    <a href="#" rel="nofollow">Đống Đa</a>
                                </li>
                                <li>
                                    <a href="#" rel="nofollow">Cầu giấy</a>
                                </li>
                                <li>
                                    <a href="#" rel="nofollow">Hai Bà Trưng</a>
                                </li>
                                <li>
                                    <a href="#" rel="nofollow">Hà Đông</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cover-bar"></div>
            </div>
        @else
            <div class="list_city_child scroll-bar-wrap dropdown list_child_id keyword-expand" id="suggest-location">
                <div class="scroll-box">
                    <div class="list-address-suggest">
                       <div class="ul-location"></div>
                    </div>
                </div>
                <div class="cover-bar"></div>
            </div>
        @endif
    </div>
</div>

