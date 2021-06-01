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
                    <h1>Quy trình giải quyết tranh chấp, khiếu nại</h1>
                </div>
                <hr>
                <div class="content-body">
                    <p>Khi phát sinh khiếu nại liên quan đến hồ sơ, Nhà Tuyển Dụng / Người Giới Thiệu thực hiện theo quy trình sau:</p>
                    <p><strong>Bước 1</strong>: Nhà Tuyển Dụng / Người Giới Thiệu (Bên Khiếu Nại) khiếu nại trực tiếp tới Công ty
                        bằng một trong các cách sau: điện thoại 0969.080.985, chat online trên Website https://123work.vn/
                        hoặc gửi email tới cskh@123work.vn.</p>
                    <p><strong>Bước 2</strong>: Trong vòng 03 (ba) ngày làm việc kể từ ngày tiếp nhận khiếu nại, Công ty sẽ
                        kiểm tra, xem xét và xác nhận thông tin khiếu nại và thông báo cho các bên có liên quan. Bên Khiếu Nại
                        cần cung cấp các bằng chứng liên quan tới nội dung khiếu nại theo yêu cầu của Công ty.</p>
                    <p><strong>Bước 3</strong>: Trong vòng 10 (mười) ngày làm việc kể từ khi kết thúc công việc của bước 2,
                        Công ty đưa ra phương án giải quyết đối với khiếu nại của Bên Khiếu Nại</p>
                    <p><strong>Bước 4</strong>: Công ty thông báo cho Bên Khiếu Nại phương án giải quyết khiếu nại, nếu Bên
                        Khiếu Nại đồng ý với phương án giải quyết Công ty trao đổi, hai bên sẽ tiếp tục thực hiện theo biện
                        pháp đã thỏa thuận. Nếu Bên Khiếu Nại không đồng ý với phương án giải quyết khiếu nại Công ty đã trao
                        đổi thì các Bên sẽ tiếp tục thương lượng để cùng thống nhất các biện pháp khác để phù hợp với hai bên.</p>
                    <p><strong>Bước 5</strong>: Nếu trong vòng 30 ngày kể từ ngày phát sinh khiếu nại mà các Bên không thể giải
                        quyết khiếu nại bằng hòa giải, thương lượng thì một trong các Bên có quyền đưa vụ việc lên Tòa án có thẩm
                        quyền tại thành phố Hà Nội để giải quyết theo quy định của pháp luật.</p>
                </div>
            </div>
        </div>
    </div>
    @include('component.footer.simple')
@stop

@section('script')
    <script src="{{ mix('js/static.js', "statics/assets") }}"></script>
@stop

