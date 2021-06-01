@extends('layouts.layout_master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/static.css', "statics/assets") }}">
@stop

@section('content')
    @include('component.header.header')
    <div class="container">
        <div class="static-page">
            <div class="static-page__sidebar">
                @include('staticpage::include._inc_sidebar')
            </div>
            <div class="static-page__content">
                <div class="content-title">
                    <h1>Các câu hỏi thường gặp</h1>
                </div>
                <hr>
                <div class="content-body frequently-question">
                    <div class="item">
                        <h2>1. Có thể giới thiệu tối đa bao nhiêu ứng viên?</h2>
                        <p>
                            <strong>Bước 1: Đăng ký tài khoản</strong> <br>
                            Bạn đăng ký tài khoản tại đây: <a href="{{ route('get.auth.register') }}">link</a> <br>
                            Sau khi điền đầy đủ thông tin, bạn bấm chọn "<strong>Đăng ký</strong>" để hoàn tất đăng ký tài khoản <br>
                            Chúng tôi sẽ gửi tới email bạn vừa sử dụng để đăng ký tài khoản một hướng dẫn kích hoạt tài khoản. Việc của bạn là làm theo hướng dẫn và hoàn tất việc đăng ký.
                        </p>
                        <p>
                            <strong>Bước 2: Đăng nhập</strong>  <br>
                            Bạn đăng nhập bằng tài khoản vừa tạo tại đây: <a href="{{ route('get.auth.login') }}">link</a>
                        </p>
                        <p>
                            <strong>Bước 3: Giới thiệu ứng viên</strong> <br>
                            Sau khi đăng nhập thành công, bạn sẽ thấy nút “Đăng hồ sơ”. Ấn chọn và thực hiện thao tác theo yêu cầu.
                            Để giới thiệu ứng viên, bạn cần upload hồ sơ và điền các thông tin bắt buộc. Sau khi điền xong, bạn chỉ cần ấn nút “Đăng hồ sơ”.
                            Hồ sơ của bạn sẽ được chúng tôi xác thực và thông báo cho bạn trước khi hiển thị trên hệ thống.
                        </p>
                    </div>
                    <div class="item">
                        <h2>2. Có thể giới thiệu tối đa bao nhiêu ứng viên?</h2>
                        <p>Bạn có thể giới thiệu <strong>không giới hạn</strong> số lượng ứng viên. Nên giới thiệu những ứng
                            viên đang có nhu cầu tìm việc làm sẽ tạo độ uy tín tới nhà tuyển dụng.</p>
                    </div>
                    <div class="item">
                        <h2>3. Có xảy ra trường hợp nhiều người cùng giới thiệu một ứng viên không?</h2>
                        <p>Trường hợp nhiều người cùng giới thiệu một ứng viên sẽ không thể xảy ra vì chúng tôi sẽ kiểm duyệt
                            hồ sơ trước khi hiển thị trên website.</p>
                    </div>
                    <div class="item">
                        <h2>4. Nhận hoa hồng từ việc giới thiệu ứng viên như thế nào?</h2>
                        <p>Sau khi đã xác nhận không có “Báo cáo” nào từ Nhà tuyển dụng, chúng tôi sẽ chuyển vào ví tài khoản
                            của bạn tương ứng với giá trị hoa hồng mà bạn đã định mức trước đó.</p>
                        <p>Từ ví tài khoản, bạn có thể rút về tài khoản ngân hàng của mình hoặc chuyển sang ví tài khoản sử dụng
                            để dùng cho những dịch vụ khác được cung cấp trên website của chúng tôi.</p>
                    </div>
                    <div class="item">
                        <h2>5. Ngoài việc tìm kiếm ứng viên, tôi có thể giới thiệu ứng viên được không?</h2>
                        <p>Tất nhiên rồi, bạn có thể giới thiệu ứng viên trên website tại mục “Đăng hồ sơ”. Sau đó, thực hiện
                            điền thông tin theo yêu cầu và hoàn tất Đăng tải hồ sơ. Như vậy là bạn đã trở thành người giới thiệu.
                            Vừa tạo cơ hội việc làm cho người khác vừa tăng thu nhập cá nhân.</p>
                    </div>
                    <div class="item">
                        <h2>6. Hồ sơ được đảm bảo chất lượng ra sao?</h2>
                        <p>Mọi thông tin hồ sơ ứng viên được chúng tôi kiểm duyệt trước khi hiển thị trên hệ thống. Đảm bảo ứng
                            viên đang có nhu cầu tìm việc. Cho phép người tìm kiếm “Báo cáo” hồ sơ.</p>
                        <p>Vì vậy, bạn có thể hoàn toàn tin tưởng vào việc tìm kiếm hồ sơ trên hệ thống của chúng tôi.</p>
                    </div>
                    <div class="item">
                        <h2>7. “Báo cáo” như thế nào là hợp lệ?</h2>
                        <p>Để “Báo cáo” hồ sơ hợp lệ, sau khi xem chi tiết hồ sơ ứng viên, bạn nên liên hệ ngay với ứng viên đó.
                            Nếu thông tin sai hoặc không liên lạc được. Vui lòng “Báo cáo” trước thời gian quy định. Sau thời
                            gian quy định “Báo cáo” sẽ không được xử lý. Nội dung “Báo cáo” được quy định tại <a
                                href="">chính sách hoàn tiền</a> của chúng tôi.</p>
                    </div>
                    <div class="item">
                        <h2>8. Thông tin người giới thiệu có được bảo mật?</h2>
                        <p>Thông tin người giới thiệu sẽ không được hiển thị, mọi liên lạc đều thông qua chúng tôi.</p>
                    </div>
                    <div class="item">
                        <h2>9. Mức độ uy tín sẽ được đánh giá như thế nào?</h2>
                        <p>Sau khi giới thiệu hồ sơ, người tìm việc sẽ xem xét và đánh giá hồ sơ cũng như đánh giá mức độ tin
                            cậy của bạn. Bạn nên giới thiệu hồ sơ chất lượng để được đánh giá cao. Từ đó giúp hồ sơ tiếp theo
                            của bạn sẽ tiếp cận được nhiều nhà tuyển dụng hơn.</p>
                    </div>
                    <div class="item">
                        <h2>10. Tham gia cộng đồng tìm kiếm ứng viên như thế nào?</h2>
                        <p>
                            <strong>Bước 1: Đăng ký tài khoản</strong> <br>
                            Bạn đăng ký tài khoản tại đây: <a href="{{ route('get.auth.register') }}">link</a> <br>
                            Sau khi điền đầy đủ thông tin, bạn bấm chọn "<strong>Đăng ký</strong>" để hoàn tất đăng ký tài khoản
                            Chúng tôi sẽ gửi tới email bạn vừa sử dụng để đăng ký tài khoản một hướng dẫn kích hoạt tài khoản. Việc của bạn là làm theo hướng dẫn và hoàn tất việc đăng ký.
                        </p>
                        <p>
                            <strong>Bước 2: Đăng nhập</strong> <br>
                            Bạn đăng nhập bằng tài khoản vừa tạo tại đây: <a href="{{ route('get.auth.login') }}">link</a>
                        </p>
                        <p>
                            <strong>Bước 3: Tìm kiếm ứng viên</strong> <br>
                            Sau khi đã đăng nhập, bạn vào mục “Tìm ứng viên”. Hệ thống sẽ hiển thị danh sách ứng viên. Bạn có thể tìm kiếm theo chức vụ, địa điểm, tiêu đề, kỹ năng,... sau đó click vào từng hồ sơ để xem chi tiết
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('component.footer.simple')
@stop

@section('script')
    <script src="{{ mix('js/static.js', "statics/assets") }}"></script>
@stop
