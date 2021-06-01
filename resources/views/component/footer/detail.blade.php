<footer class="footer-format-one">
    <div class="container footer">
        <div class="top row">
            <div class="col">
                <div class="item">
                    <div class="title">{{ config('app.app_name') }}.vn</div>
                    <a href="" title="Về chúng tôi" target="_blank">Về chúng tôi</a>
                    <a href="" title="Điều khoản sử dụng" target="_blank">Điều khoản sử dụng</a>
                    <a href="" title="Quy chế hoạt động" target="_blank">Quy chế hoạt động</a>
                    <a href="" title="Chính sách bảo mật" target="_blank">Chính sách bảo mật</a>
                    <a href="" title="Giải quyết khiếu nại" target="_blank">Giải quyết khiếu nại</a></div>
            </div>
            <div class="col">
                <div class="item">
                    <div class="title">Dịch vụ</div>
                    <a href="" title="Giới thiệu dịch vụ" target="_blank">Giới thiệu
                        dịch vụ</a>
                    <a href="" title="Dịch vụ đăng tin" target="_blank">Dịch vụ đăng tin</a>
                    <a href="" title="Dịch vụ tìm ứng viên" target="_blank">Dịch vụ tìm ứng viên</a>
                    <a href="" title="Dịch vụ headhunt" target="_blank">Dịch vụ headhunt</a>
                    <a href="" title="Báo giá" target="_blank">Báo giá</a></div>
            </div>
            <div class="col">
                <div class="item">
                    <div class="title">Nhà tuyển dụng</div>
                    <a href="" title="Đăng tin tuyển dụng" target="_blank">Đăng tin tuyển dụng</a>
                    <a href="" title="Quản lý ứng viên" target="_blank">Quản lý ứng viên</a>
                    <a href="" title="Quản lý tin tuyển dụng" target="_blank">Quản lý tin tuyển dụng</a>
                    <a href="" title="Tìm kiếm ứng viên" target="_blank">Tìm kiếm ứng viên</a></div>
            </div>
            <div class="col">
                <div class="item">
                    <div class="title">Ứng viên</div>
                    <a href="" title="Tạo CV online" target="_blank">Tạo CV online</a>
                    <a href="" title="Hồ sơ cá nhân" target="_blank">Hồ sơ cá nhân</a>
                    <a href="" title="Mẫu CV" target="_blank">Mẫu CV</a>
                    <a href="" title="Mẫu CV nhóm ngành" target="_blank">Mẫu CV nhóm ngành</a>
                    <a href="" title="Mẫu CV tiếng anh" target="_blank">Mẫu CV tiếng anh</a>
                    <a href="" title="Tải mẫu CV file word" target="_blank">Tải mẫu CV file word</a></div>
            </div>
            <div class="col">
                <div class="item">
                    <div class="title">Sitemap</div>
                    <a href="" title="Tư vấn nghề nghiệp" target="_blank">Tư vấn nghề nghiệp</a>
                    <a href="" title="Tìm việc" target="_blank">Tìm việc</a>
                    <a href="" title="Viết CV xin việc" target="_blank">Viết CV xin việc</a>
                    <a href="" title="Câu hỏi phỏng vấn" target="_blank">Câu hỏi phỏng vấn</a>
                    <a href="" title="Liên hệ" target="_blank">Liên hệ</a>
                    <a href="" title="Review công ty" target="_blank">Review công ty</a>
                </div>
            </div>
        </div>
        <div class="bot row">
            <div class="col">
                <div class="item">
                    <div class="title">Liên hệ</div>
                    <p>Tổng đài tư vấn và hỗ trợ khách hàng: 0986 420 994</p>
                    <p>Email liên hệ: contact@123job.vn</p>
                    <p>Từ 8h00 – 22h00 các ngày từ thứ 2 đến Chủ nhật</p></div>
            </div>
            <div class="col">
                <div class="item">
                    <div class="title">Công ty Cổ phần VNP Group</div>
                    <p>Số GCNĐKDN: 0102015284, cấp ngày 21/06/2012, nơi cấp: Sở kế hoạch và đầu tư thành phố Hà Nội</p>
                    <p>Địa chỉ: 102 Thái Thịnh, Phường Trung Liệt, Quận Đống Đa, Thành phố Hà Nội, Việt Nam</p></div>
                <div class="item">
                    <a href="https://wehelp.vn/" target="_blank">123job.vn </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container content">
            <div class="row">
                <div class="col">
                    <p>Copyright © 2020 {{ config('app.app_name') }}.vn - Nền tảng
                        <a href="https://dev.123job.vn/"><b>tìm kiếm việc làm</b></a> và
                        <a href="https://dev.123job.vn/company"><b>review công ty</b></a> hàng đầu tại Việt Nam</p>
                </div>
                <div class="col float-right text-right ">
                    <style>
                        .lang-img {
                            width: 40px;
                            height: 35px;
                            display: inline-block;
                            margin-right: 5px;
                            border-radius: 3px;
                        }
                        .lang-img img {
                            width: 100%;
                            height: 100%;
                        }
                    </style>
{{--                    <button class="dropbtn">{{ $text_lang ?? 'Vietnamese' }}</button>--}}
                    @foreach ($data_lang as $key => $lang_item)
                        <a class="lang-img" href="?lang={{ $key }}">
                            <img src="{{ url('statics/images/icon/'. $key .'.png') }}" alt="icon">
                        </a>
                    @endforeach
{{--                    <div class="change-lang">--}}
{{--                        <div class="dropdown">--}}

{{--                            <div class="dropdown-content">--}}
{{--                                @foreach ($data_lang as $key => $lang_item)--}}
{{--                                    <a href="?lang={{ $key }}"><img src="{{ url('images/icon/'. $key .'.png') }}"--}}
{{--                                                                    alt="icon"> {{ \Arr::get($lang_item, 'title') }}</a>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</footer>
