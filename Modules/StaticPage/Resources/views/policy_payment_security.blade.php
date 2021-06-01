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
                    <h1>CHÍNH SÁCH BẢO MẬT THANH TOÁN</h1>
                </div>
                <hr>
                <div class="content-body">
                    <h2>1. Chính sách bảo mật thanh toán</h2>
                    <p>OfferJob luôn coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất để bảo vệ thông tin cá
                        nhân của quý khách trong quá trình thanh toán. Quý khách không được sử dụng bất kỳ chương trình, công
                        cụ hay hình thức nào để can thiệp vào hệ thống làm thay đổi cấu trúc dữ liệu.</p>
                    <p>Cá nhân hay tổ chức có hành vi can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống sẽ bị tước bỏ
                        mọi quyền lợi cũng như bị truy tố trước pháp luật nếu cần thiết.</p>
                    <p>Tất cả thông tin giao dịch đều được bảo mật trừ trường hợp phải thực hiện theo yêu cầu của cơ quan Nhà
                        nước có thẩm quyền.</p>
                    <h2>2. Mục đích áp dụng</h2>
                    <p>Hệ thống thanh toán thẻ trên website 123work.vn (sau đây gọi là “offerjob") được cung cấp bởi các đối
                        tác cổng thanh toán đã được cấp phép hoạt động hợp pháp tại Việt Nam (“Đối Tác Cổng Thanh Toán”). Theo
                        đó, các tiêu chuẩn bảo mật thanh toán thẻ của offerjob đảm bảo tuân thủ theo các tiêu chuẩn bảo mật của
                        Đối Tác Cổng Thanh Toán.</p>
                    <p>Ngoài ra, offerjob còn có các tiêu chuẩn bảo mật giao dịch thanh toán riêng, đảm bảo an toàn các thông
                        tin thanh toán của khách hàng.</p>

                    <h2>3. Quy định cụ thể</h2>
                    <p>Chính sách giao dịch thanh toán bằng thẻ nội địa và thẻ quốc tế đảm bảo tuân thủ các tiêu chuẩn bảo mật
                        của các Đối Tác Cổng Thanh Toán gồm:</p>
                    <ul>
                        <li>Thông tin tài chính của khách hàng được bảo vệ bằng giao thức SSL (Secure Sockets Layer). Giao thức
                            SSL sẽ mã hóa thông tin khách hàng cung cấp trong suốt quá trình giao dịch.</li>
                        <li>Hệ thống thanh toán đáp ứng chuẩn bảo mật thông tin của PCI Security Standards Council (https://www.pcisecuritystandards.org).</li>
                        <li>Các nguyên tắc và quy định bảo mật thông tin trong ngành tài chính ngân hàng theo quy định của Ngân hàng Nhà nước Việt Nam.</li>
                        <li>Chính sách bảo mật giao dịch trong thanh toán của OfferJob áp dụng với khách hàng:</li>
                        <li>
                            OfferJob cung cấp tiện ích lưu giữ thông tin thẻ để sử dụng cho các lần thanh toán sau trên offerjob
                            với nguyên tắc offerjob chỉ lưu khóa thông tin thẻ thanh toán đã được các Đối Tác Cổng Thanh Toán mã hóa. Vì vậy:
                            <ul>
                                <li>Khách hàng lựa chọn sử dụng tiện ích: trong trường hợp phát sinh vấn đề liên quan đến việc
                                    bảo mật thông tin thẻ thanh toán, khách hàng liên hệ với Đối Tác Cổng Thanh Toán để được giải quyết.</li>
                                <li>Khách hàng không lựa chọn sử dụng tiện ích: thông tin thẻ thanh toán của khách hàng không
                                    lưu trên hệ thống của offerjob mà được lưu giữ và bảo mật theo tiêu chuẩn quốc tế PCI DSS trên Đối Tác Cổng Thanh Toán.</li>
                            </ul>
                        </li>
                        <li>Khách hàng truy cập vào website thông qua giao thức HTTPS - HyperText Transfer Protocol Secure
                            (giao thức truyền tải siêu văn bản bảo mật).</li>
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
