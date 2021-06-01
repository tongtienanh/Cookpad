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
                    <h1>Chính sách hoàn tiền</h1>
                </div>
                <hr>
                <div class="content-body">
                    <h2>1. Điều kiện áp dụng</h2>
                    <p>Theo các điều khoản và điều kiện được quy định trong Chính sách hoàn tiền này, offerjob đảm bảo quyền
                        lợi của Nhà Tuyển Dụng bằng cách cho phép gửi yêu cầu ‘Báo cáo’ giao dịch trước khi hết hạn. offerjob
                        ghi nhận và xử lý yêu cầu nhằm hỗ trợ Người dùng trong việc giải quyết tranh chấp phát sinh trong quá
                        trình giao dịch.</p>

                    <h2>2. Điều kiện hoàn tiền</h2>
                    <p>Nhà Tuyển Dụng đồng ý rằng chỉ có thể hoàn tiền trong các điều kiện sau:</p>
                    <ul>
                        <li>Nhà Tuyển Dụng ‘báo cáo’ sản phẩm trong thời gian 10 phút kể từ khi thời điểm mở và thanh toán cho đơn hàng.</li>
                        <li>‘Báo cáo’ kèm lý do đúng và được kiểm duyệt từ offerjob.</li>
                        <li class="red">
                            Các lý do hồ sơ có thể bị "Báo cáo":
                            <ul>
                                <li>Phát hiện thông tin trên hồ sơ là giả mạo, không tồn tại</li>
                                <li>Không thể liên lạc được với ứng viên</li>
                                <li>Thông tin ghi trên hồ sơ là không chính chủ, không thuộc quyền sở hữu của đối tượng được ghi trên hồ sơ</li>
                            </ul>
                        </li>
                    </ul>
                    <p>Tất cả các yêu cầu hoàn tiền phải được thực hiện trên nền tảng của Sàn giao dịch OfferJob. </p>
                    <p>OfferJob luôn xem xét cẩn thận từng yêu cầu hoàn tiền của Người tìm kiếm và có quyền đưa ra quyết định
                        cuối cùng đối với yêu cầu đó dựa trên các quy định nêu trên và  theo Điều khoản Dịch vụ của OfferJob.</p>

                    <h2>3. Quy trình hoàn tiền</h2>
                    <p><strong>Bước 1</strong>: Người tìm kiếm chọn trạng thái “Báo cáo” khi phát hiện thông tin sai trên hồ
                        sơ và muốn hoàn tiền trong thời gian 5 phút kể từ khi Người tìm kiếm xác nhận mở hồ sơ và hoàn tất thanh toán</p>
                    <p><strong>Bước 2</strong>: Ban quản trị OfferJob sẽ xác thực lý do báo cáo hồ sơ trong vòng <span class="red">7 ngày kể từ khi nhận được yêu cầu</span>.</p>
                    <p><strong>Bước 3</strong>: Trong trường hợp Ban quản trị xác nhận yêu cầu là không hợp lý, OfferJob có q
                        uyền bác bỏ báo cáo và không cần hoàn tiền cho Người tìm kiếm.
                        <br>
                        Trường hợp báo cáo đã được xác nhận là đúng, Nhà Tuyển Dụng sẽ nhận lại được 100% giá trị của đơn hàng trừ đi khoản phí dịch vụ Nhà Tuyển Dụng sẽ phải trả cho offerjob. Hồ sơ bị báo cáo sẽ lập tức bị hủy bỏ và không được phép xuất hiện trên offerjob.
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('component.footer.simple')
@stop

@section('script')
    <script src="{{ mix('js/static.js', "statics/assets") }}"></script>
@stop

