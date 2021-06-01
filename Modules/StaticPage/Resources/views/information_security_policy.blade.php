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
                    <h1>Chính sách bảo mật thông tin chủ sở hữu</h1>
                </div>
                <hr>
                <div class="content-body">
                    <p>
                        Offerjob luôn coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất để bảo vệ thông tin
                        cá nhân trong quá trình giới thiệu. Ngoài việc Người giới thiệu cần chắc chắn rằng thông tin hồ sơ
                        mình đưa ra đã được sự cho phép của chủ sở hữu. offerjob cũng có những chính sách xác minh nhằm bảo mật
                        thông tin chủ sở hữu hồ sơ như sau:
                    </p>
                    <ul>
                        <li><strong>Gọi điện thoại xác minh:</strong> Nhân viên offerjob sẽ gọi điện thoại tới số điện thoại có trong hồ sơ để
                            xác minh thông tin hồ sơ được sự cho phép từ chủ sở hữu và được phép hiển thị công khai trên offerjob
                            nhằm mục đích tìm kiếm việc làm. Quá trình xác minh sẽ được ghi âm và lưu trữ cuộc gọi bởi offerjob.</li>
                        <li>
                            <strong>Xác minh bằng email:</strong> offerjob sau khi có thông tin hồ sơ từ việc đăng tải của Người giới thiệu sẽ
                            tự động gửi email xác nhận tới chủ sở hữu nhằm mục đích xác minh thông tin hồ sơ được sự cho phép
                            từ chủ sở hữu và được phép hiển thị công khai trên offerjob nhằm mục đích tìm kiếm việc làm. Chủ
                            sở hữu click “xác nhận” đồng nghĩa với việc cho phép hiển thị công khai trên offerjob.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('component.footer.simple')
@stop

@section('script')
    <script src="{{ mix('js/static.js', "statics/assets") }}"></script>
@stop

