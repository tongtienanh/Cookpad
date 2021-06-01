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
                    <h1>Quy chế hoạt động</h1>
                </div>
                <hr>
                <div class="content-body">
                    <h2>I. NGUYÊN TẮC CHUNG</h2>
                    <p>Website https://123work.vn/ thuộc quyền sở hữu và điều hành bởi Công ty Cổ phần VNP Group (gọi tắt là
                        “Công ty”, một Công ty được thành lập và hoạt động hợp pháp tại Việt Nam). Công ty hoạt động theo
                        nguyên tắc công khai, minh bạch và tuân thủ quy định của pháp luật.</p>
                    <p>Công ty giữ quyền sửa đổi, bổ sung nội dung của Quy chế hoạt động này theo từng thời điểm, theo tình hình
                        kinh doanh thực tế của Website https://123work.vn/ và theo quy định của pháp luật.</p>
                    <p>Bản quy chế này áp dụng cho việc đăng tải thông tin trên Website https://123work.vn/.</p>

                    <h2>II. ĐỊNH NGHĨA</h2>
                    <p><strong>Website https://123work.vn/:</strong> là sàn giao dịch thương mại điện tử, cung cấp nền tảng online để kết nối
                        và quản lý giao dịch dịch vụ giữ Người Giới Thiệu và Nhà Tuyển Dụng.</p>
                    <p><strong>Nhà Tuyển Dụng:</strong> là các công ty, tổ chức, cá nhân có nhu cầu tìm kiếm thông tin, hoặc xem thông tin được
                        đăng tải trên 123work.vn bởi Người Giới Thiệu.</p>
                    <p><strong>Người Giới Thiệu:</strong> là các cá nhân hoặc đơn vị có nhu cầu cung cấp sử dụng dịch vụ của 123work.vn bao gồm:
                        đăng tải hồ sơ kinh nghiệm, hồ sơ năng lực để cung cấp dịch vụ.</p>

                    <h2>III. QUY TRÌNH GIAO DỊCH</h2>
                    <h3>1. Quy trình giao dịch cho Người tìm kiếm</h3>
                    <p>Khi có nhu cầu mua dịch vụ trên OfferJob, Người tìm kiếm cần thực hiện theo các bước sau đây:</p>
                    <p><strong>Bước 1</strong>: Nhà Tuyển Dụng tạo tài khoản đăng nhập trên Website https://123work.vn/ của
                        mình bằng cách truy cập vào mục “Đăng ký” tại trang chủ của Website https://123work.vn/, điền đầy đủ
                        các thông tin theo trường có sẵn như: Tài khoản (email/số điện thoại), Mật khẩu, Họ và Tên, Số điện thoại
                        và thực hiện một số yêu cầu liên quan.</p>
                    <p><strong>Bước 2</strong>: Sau bước trên, hệ thống sẽ tự tạo một tài khoản theo email tương ứng ở dạng
                        chờ kích hoạt. Nhà Tuyển dụng sẽ nhận được một email tới địa chỉ email vừa nhập với Tên đăng nhập
                        và Mật khẩu vừa tạo kèm theo hướng dẫn kích hoạt tài khoản. Sau khi hoàn tất hướng dẫn, tài khoản Nhà
                        Tuyển Dụng sẽ chính thức được kích hoạt.
                    </p>
                    <p><strong>Bước 3</strong>: Nhà Tuyển Dụng đăng nhập vào trang chủ Website https://123work.vn/ với Tên
                        đăng nhập và Mật khẩu vừa tạo.</p>
                    <p><strong>Bước 4</strong>: Nhà Tuyển Dụng tiếp tục thao tác bấm chuột vào hồ sơ ứng viên. Sau khi chọn hồ sơ,
                        tại giao diện Website 123work.vn sẽ hiển thị hồ sơ ứng viên và các thông tin liên quan đến hồ sơ đó.</p>
                    <p><strong>Bước 5</strong>: Nhà Tuyển Dụng bấm chuột vào dòng chữ “Mở hồ sơ” để xác nhận lựa chọn hồ sơ ứng viên.
                    </p>
                    <p><strong>Bước 6</strong>: Nhà Tuyển Dụng tiến hành thanh toán cho 123work.vn theo quy trình thanh toán.</p>
                    <p><strong>Bước 7</strong>: Trong vòng 24 giờ kể từ khi Nhà Tuyển Dụng chọn mở hồ sơ ứng viên, 123work.vn
                        sẽ thực hiện chuyển xu vào ví tài khoản của Người Giới Thiệu. Và sau 10 phút kể từ khi Nhà Tuyển Dụng
                        hoàn tất thanh toán. Nhà Tuyển Dụng có quyền “Báo cáo” hồ sơ nếu xảy ra các vấn đề phát sinh đối với hồ
                        sơ đó. Nếu sau thời gian quy định, Nhà Tuyển Dụng sẽ không được phép ‘Báo cáo’ hồ sơ.</p>
                    <p><strong>Bước 8</strong>: Trạng thái “Báo cáo” sẽ được admin 123work.vn kiểm duyệt. Thông tin sau khi
                        được xác thực sẽ được tiến hành giải quyết theo quy định tại <a href="{{ route('get.static.policy_refund') }}">Chính sách hoàn tiền.</a></p>

                    <h3>2. Quy trình giao dịch cho Người Giới Thiệu</h3>
                    <p>Để có thể sử dụng Website https://123work.vn/ , trước hết Người Giới Thiệu cần đăng ký thông tin đăng
                        nhập trên 123work.vn theo các bước 1 và bước 2 như đối với Nhà Tuyển Dụng.</p>
                    <p>Sau khi có tài khoản, Người Giới Thiệu thực hiện các bước sau để sử dụng dịch vụ tại 123work.vn:</p>
                    <p><strong>Bước 1</strong>: Tại trang chủ Website, chọn “Đăng hồ sơ”. Khi đó, màn hình sẽ hiển thị ra cho
                        phép Người Giới Thiệu đăng tải hồ sơ ứng viên. Người Giới Thiệu tiến hành đăng tải hồ sơ theo những
                        yêu cầu và định mức hoa hồng nhận được từ việc giới thiệu hồ sơ và thỏa thuận hoa hồng trả cho 123work.vn.
                        Để chắc chắn hồ sơ xuất hiện trên hệ thống Website https://123work.vn/ , Người Giới Thiệu cần đảm bảo
                        rằng thông tin hồ sơ mình đưa ra đã được sự cho phép của chủ sở hữu và sẽ được 123work.vn xác thực
                        lại theo quy định tại <a href="{{ route('get.static.information_security_policy') }}">Chính sách bảo mật thông tin chủ sở hữu</a>.</p>
                    <p><strong>Bước 2</strong>: Sau khi hồ sơ ứng viên được đăng tải, hồ sơ đó sẽ được đưa vào danh sách “Chờ duyệt”
                        trên hệ thống và chưa được phép hiển thị trên website. Hồ sơ sẽ được xác thực lại bởi 123work.vn để
                        chắc chắn hồ sơ được đăng tải với thông tin chính xác và đã được sự cho phép của chủ sở hữu. Sau khi
                        quá trình xác thực thành công, hồ sơ ứng viên sẽ chuyển sang trạng thái “Đã duyệt” và được hiển thị
                        trên giao diện Website https://123work.vn/.</p>
                    <p><strong>Bước 3</strong>: Sau khi hồ sơ được chọn mở, hồ sơ sẽ được chuyển sang trạng thái “Đã mở”.</p>
                    <p><strong>Bước 4</strong>: Trong vòng 24 giờ kể từ khi hồ sơ được chọn mở, nếu hồ sơ không bị chuyển sang
                        trạng thái “Báo cáo” hoặc trạng thái đó được xác nhận là không chính xác, Người Giới Thiệu sẽ được
                        thanh toán với giá trị được định mức hoa hồng nhận được từ việc giới thiệu hồ sơ và thỏa thuận hoa
                        hồng trả cho 123work.vn như đã thỏa thuận.</p>
                    <p><strong>Bước 5</strong>: Trong trường hợp phát sinh “Báo cáo” từ Nhà Tuyển Dụng và thông
                        tin ‘Báo cáo’ đó được 123work.vn xác nhận là chính xác, Người Giới Thiệu sẽ không được thanh toán
                        và hồ sơ bị “Báo cáo” sẽ không được hiển thị trên Website.</p>

                    <h3>3. Quy trình giao nhận, vận chuyển: (không có)</h3>

                    <h3>4. Quy trình xác nhận và hủy dịch vụ</h3>
                    <h4>a. Quy trình xác nhận đơn hàng</h4>
                    <p class="red">Khi Nhà Tuyển Dụng xác nhận việc mở hồ sơ thì đơn hàng chính thức được tính là đơn hàng hoàn thành.</p>
                    <h4>b. Quy trình hủy đơn hàng</h4>
                    <p>Khi Người tìm kiếm báo cáo về hồ sơ trong vòng 24 giờ kể từ thời điểm mở hồ sơ và được xác nhận báo cáo
                        đó là chính xác thì đơn hàng đó không được tính là đơn hàng hoàn thành. Đồng thời, Nhà Tuyển Dụng sẽ
                        được hoàn trả 100% giá trị đơn hàng vào ví tài khoản trên 123work.vn. Giá trị đơn hàng đó đó sẽ được
                        bảo lưu cho lần thanh toán tiếp theo hoặc được rút về tài khoản Ngân hàng.</p>
                    <h4>c. Quy trình hoàn tiền</h4>
                    <p>Quy trình hoàn tiền cho Nhà Tuyển Dụng như sau:</p>
                    <p><strong>Bước 1</strong>: Người tìm kiếm click ‘Báo cáo’ dịch vụ sau khi đã thanh toán dịch vụ. Tiếp theo điền lý do ‘Báo cáo’.</p>
                    <p><strong>Bước 2</strong>: ‘Báo cáo’ này sẽ được dẫn đến hệ thống lưu trữ của 123work.vn.</p>
                    <p><strong>Bước 3</strong>: 123work.vn xử lý ‘Báo cáo’ theo quy định tại Chính sách hoàn tiền của 123work.vn.</p>
                    <p><strong>Bước 4</strong>: Nếu đủ điều kiện hoàn tiền, 123work.vn sẽ hoàn trả tiền vào Ví tài khoản của Nhà Tuyển Dụng.</p>

                    <h3>5. Quy trình hỗ trợ/bảo hành</h3>
                    <p>Nếu gặp khó khăn về kỹ thuật, Nhà Tuyển Dụng / Người Giới Thiệu có thể liên hệ với Công ty trong giờ hành chính theo 2 cách dưới đây:</p>
                    <ul>
                        <li class="red">Hotline: 0969.080.985</li>
                        <li class="red">Email CSKH: cskh@123work.vn</li>
                    </ul>

                    <h3>6. Quy trình giải quyết tranh chấp, khiếu nại</h3>
                    <p>Khi phát sinh khiếu nại liên quan đến hồ sơ, Nhà Tuyển Dụng / Người Giới Thiệu thực hiện theo quy trình sau:</p>
                    <p><strong>Bước 1</strong>: Nhà Tuyển Dụng / Người Giới Thiệu (Bên Khiếu Nại) khiếu nại trực tiếp tới Công ty
                        bằng một trong các cách sau: điện thoại 0969.080.985, chat online trên Website https://123work.vn/
                        hoặc gửi email tới cskh@123work.vn.</p>
                    <p><strong>Bước 2</strong>: Trong vòng 03 (ba) ngày làm việc kể từ ngày tiếp nhận khiếu nại, Công ty sẽ
                        kiểm tra, xem xét và xác nhận thông tin khiếu nại và thông báo cho các bên có liên quan. Bên Khiếu
                        Nại cần cung cấp các bằng chứng liên quan tới nội dung khiếu nại theo yêu cầu của Công ty. </p>
                    <p><strong>Bước 3</strong>: Trong vòng 10 (mười) ngày làm việc kể từ khi kết thúc công việc của bước 2,
                        Công ty đưa ra phương án giải quyết đối với khiếu nại của Bên Khiếu Nại. </p>
                    <p><strong>Bước 4</strong>: Công ty thông báo cho Bên Khiếu Nại phương án giải quyết khiếu nại, nếu Bên
                        Khiếu Nại đồng ý với phương án giải quyết Công ty trao đổi, hai bên sẽ tiếp tục thực hiện theo biện
                        pháp đã thỏa thuận. Nếu Bên Khiếu Nại không đồng ý với phương án giải quyết khiếu nại Công ty đã
                        trao đổi thì các Bên sẽ tiếp tục thương lượng để cùng thống nhất các biện pháp khác để phù hợp với hai bên.</p>
                    <p><strong>Bước 5</strong>: Nếu trong vòng 30 ngày kể từ ngày phát sinh khiếu nại mà các Bên không thể
                        giải quyết khiếu nại bằng hòa giải, thương lượng thì một trong các Bên có quyền đưa vụ việc lên Tòa
                        án có thẩm quyền tại thành phố Hà Nội để giải quyết theo quy định của pháp luật.
                    </p>

                    <h2>IV. QUY TRÌNH TÍNH PHÍ VÀ THANH TOÁN</h2>
                    <h3>1. Quy trình tính phí với Người Giới Thiệu</h3>
                    <p>ức phí do Người Giới Thiệu trả cho bên cung cấp dịch vụ (ở đây là 123work.vn) gọi tắt là “hoa hồng”
                        được quy định và thể hiện trong từng đơn hàng.</p>
                    <p>Hoa hồng sẽ được thanh toán và trừ trực tiếp vào giá trị đơn hàng của Người Giới Thiệu vào Ví tài khoản
                        trên 123work.vn sau 24 giờ hoàn tất đơn hàng.</p>
                    <h3>2. Quy trình thanh toán</h3>
                    <p>a. Quy trình thanh toán với Nhà Tuyển Dụng</p>
                    <p>Quy trình thanh toán giữa Nhà Tuyển Dụng như sau:</p>
                    <p>Nhà Tuyển Dụng sẽ phải chi trả mức hoa hồng do Người Giới Thiệu đã định mức ngay sau khi “Mở hồ sơ” thông qua Ví tài khoản</p>
                    <p>Quy trình thanh toán giữa Nhà Tuyển Dụng như sau:</p>
                    <p>Quy trình thanh toán giữa Người Giới Thiệu như sau:</p>
                    <p>Sau khi Nhà Tuyển Dụng hoàn tất thanh toán và sau 10 phút không có “Báo cáo” thì 123work.vn sẽ tiến
                        hành thanh toán ngay cho Người Giới Thiệu bằng cách chuyển vào Ví tài khoản của Nhà Tuyển Dụng hoặc
                        nếu có “Báo cáo” thì sau 24 giờ 123work.vn sẽ tiến hành xử lý báo cáo. Nếu báo cáo không đúng thì sẽ
                        tiến hành thanh toán cho Người Giới Thiệu khoản hoa hồng đã thỏa thuận giữa hai bên. Nếu báo cáo đúng
                        sẽ không tiến hành thanh toán cho Người Giới Thiệu theo quy định tạo <a href="{{ route('get.static.policy_refund') }}">Chính sách hoàn tiền</a></p>

                    <h2>V. ĐẢM BẢO AN TOÀN GIAO DỊCH</h2>
                    <p>Công ty áp dụng các biện pháp bảo mật cần thiết để bảo vệ thông tin trên Website https://123work.vn/</p>
                    <p>Công ty yêu cầu Người dùng phải đảm bảo tính chính xác và trung thực về các thông tin đã cung cấp. 123work.vn
                        không chịu bất kỳ trách nhiệm trước pháp luật, bên thứ ba nào về những thông tin mà Người dùng đã cung cấp.</p>
                    <p>Nhà Tuyển Dụng cần có trách nhiệm kiểm tra và xem xét kỹ nội dung sản phẩm và thông tin Người Giới Thiệu
                        trước khi thực hiện giao dịch.</p>
                    <p>Người dùng không được sử dụng bất kỳ chương trình, công cụ hoặc/và hình thức khác để cố ý hoặc vô ý can
                        thiệp vào hệ thống của Website https://123work.vn/ hoặc làm thay đổi cấu trúc dữ liệu. Mọi hình thức
                        phát tán, truyền bá hoặc cổ vũ cho bất kỳ hành động nào nhằm can thiệp, phá hoại, hoặc xâm hại hệ thống
                        của Website https://123work.vn/ đều bị nghiêm cấm tuyệt đối. Mọi vi phạm sẽ bị xử lý theo quy định
                        tại Quy chế này và quy định của pháp luật.</p>
                    <p>Người Giới Thiệu không được tiết lộ/để lộ bất kỳ thông tin về tên đăng nhập và mật khẩu của email, tên
                        và mật khẩu đăng nhập vào Website https://123work.vn/ và thông tin tài khoản ngân hàng thanh toán Phí Sử Dụng.</p>
                    <p>123work.vn cam kết bảo mật các thông tin cá nhân của Người dùng, ngoại trừ các trường hợp buộc phải cung
                        cấp và tiết lộ theo quy định của pháp luật và Quy chế hoạt động này.</p>
                    <p>Trong trường hợp Người dùng khiếu nại về vấn đề an toàn giao dịch, Công ty tiếp nhận khiếu nại và giải
                        quyết theo quy định tại mục III.4d Quy trình giải quyết tranh chấp, khiếu nại.</p>

                    <h2>VI. CHÍNH SÁCH BẢO MẬT THÔNG TIN</h2>
                    <h3>1. Mục đích và phạm vị thu thập thông tin</h3>
                    <p>Công ty thu thập thông tin cá nhân của Nhà Tuyển Dụng / Người Giới Thiệu nhằm hỗ trợ tạo tài khoản,
                        quản lý cơ sở dữ liệu và kịp thời xử lý các vấn đề phát sinh (nếu có). Các thông tin thu thập là các
                        thông tin mang tính chất nhận dạng, bao gồm và không giới hạn: Họ tên, Email, Số điện thoại, Mật khẩu
                        để đăng ký tài khoản và sử dụng dịch vụ</p>
                    <p>Công ty cũng thu thập thông tin Cookies của Người dùng. Việc đăng ký cho Người dùng ghé thăm, truy cập
                        và sử dụng “Cookies” cũng như đèn báo hiệu website để giúp nâng cao chất lượng và thời gian sử dụng
                        của Người dùng. Website https://123work.vn/ có sử dụng công nghệ “Cookies”. Cookies là những mã nhỏ,
                        thường được lưu trữ trong ổ cứng máy tính của Người dùng, chúng cho phép một website tự “tùy chỉnh”
                        cho mỗi người dùng bằng cách ghi nhớ thông tin về việc truy cập website của người dùng đó. Cookies có
                        thể lưu trữ nhiều thông tin, như địa chỉ IP, dữ liệu điều hướng, thông tin máy chủ, thời gian truyền dữ
                        liệu, ưu tiên của người dùng, địa chỉ email. Phần “trợ giúp” trên thanh công cụ của hầu hết các trình duyệt
                        sẽ giúp Người dùng biết cách ngăn chặn trình duyệt chấp nhận Cookies mới hoặc cách định cấu hình trình
                        duyệt để nó loại bỏ tất cả các Cookies. Nếu Người dùng vô hiệu Cookies, Người dùng không truy cập được
                        vào những tính năng quan trọng và việc sử dụng Website https://123work.vn/ có thể bị hạn chế. Cookies
                        dùng trên Website https://123work.vn/ có liên quan đến dữ liệu cá nhân của Người dùng, chi tiết như sau:</p>
                    <ul>
                        <li>Về Cookies và đèn báo hiệu web: Cookies là những thư mục dữ liệu được lưu trữ tạm thời hoặc lâu dài
                            trong ổ cứng máy tính của Người dùng. Cookies được sử dụng để xác minh, truy tìm lượt (bảo vệ trạng thái)
                            và duy trì thông tin cụ thể về việc sử dụng và người sử dụng Website https://123work.vn/, như các tuỳ
                            chọn cho trang web hoặc thông tin về giỏ hàng điện tử của họ. Nếu không đồng ý, Người dùng có thể xoá
                            tất cả cookies đã nằm trong ổ cứng máy tính của mình bằng cách tìm kiếm các thư mục với “Cookies”
                            trong tên của nó và xoá đi. Trong tương lai, Người dùng có thể chỉnh sửa các lựa chọn trong trình
                            duyệt của mình để các Cookies (tương lai) bị chặn. Xin được lưu ý rằng: Nếu làm vậy, Người dùng
                            có thể không sử dụng được đầy đủ các tính năng của Website https://123work.vn/. Để biết thêm thông
                            tin về (cách sử dụng và không nhận) Cookies, Người dùng vui lòng truy cập vào website www.allaboutcookies.org.</li>
                        <li>Đèn báo hiệu web: Là các sợi mã phần mềm nhỏ tượng trưng cho yêu cầu về hình ảnh đồ thị trên một
                            website hay email. Nó có thể có hoặc không có hình ảnh đồ thị nhìn thấy được liên quan đến đèn
                            báo hiệu web, và thông thường hình ảnh được thiết kế để trộn lẫn vào nền của website hoặc email.
                            Đèn báo hiệu web có thể được sử dụng vào các mục đích như: báo cáo lưu lượng truy cập website, số
                            khách truy cập, kiểm tra và báo cáo quảng cáo, và tính cá nhân hoá. Đèn báo hiệu web mà Công ty
                            sử dụng chỉ để thu thập dữ liệu vô danh.</li>
                    </ul>
                    <h3>2. Phạm vị sử dụng thông tin</h3>
                    <p>Các thông tin mà Công ty thu thập từ Người dùng sẽ được sử dụng vào các mục đích sau:</p>
                    <ul>
                        <li>Cung cấp dịch vụ đến các thành viên</li>
                        <li>Tư vấn, hỗ trợ cho Người dùng về các dịch vụ trên Website <a href="">http://123work.vn</a></li>
                        <li>Hỗ trợ, tư vấn giải quyết khiếu nại (nếu có)</li>
                        <li>Gửi thông báo về việc trao đổi thông tin giữa thành viên và Công ty</li>
                        <li>Trong trường hợp có yêu cầu của cơ quan Nhà nước có thẩm quyền, Công ty có trách nhiệm và nghĩa
                            vụ hợp tác cung cấp thông tin cá nhân người dùng khi có yêu cầu của Cơ quan tư pháp bao gồm: Viện
                            kiểm sát, tòa án, cơ quan điều tra liên quan đến hành vi vi phạm pháp luật nào đó của Người dùng.</li>
                    </ul>
                    <h3>3. Thời gian lưu trữ thông tin</h3>
                    <p>Thông tin của người dùng được tự động lưu và bảo mật trong bộ nhớ của máy chủ của Website https://123work.vn/
                        cho đến khi Công ty nhận được yêu cầu xóa thông tin của người dùng hoặc người dùng xóa tài khoản đăng nhập</p>
                    <h3>4. Những người hoặc tổ chức có thể tiếp cận thông tin</h3>
                    <p>Người dùng đồng ý rằng: trong trường hợp cần thiết, các cơ quan/ tổ chức/cá nhân sau có quyền được tiếp cận và thu thập các thông tin liên quan, bao gồm:</p>
                    <ul>
                        <li>Công ty Cổ phần VNP Group</li>
                        <li>Bên thứ 3 có tích hợp dịch vụ của <a href="">http://123work.vn</a> (nếu có)</li>
                        <li>Cơ quan Nhà nước có thẩm quyền</li>
                        <li>Cơ quan thuế, cố vấn tài chính, pháp lý và kiểm toán cho Công ty khi phát sinh trường hợp cần phải biết thông tin của Người dùng</li>
                    </ul>
                    <h3>5. Địa chỉ của đơn vị thu thập và quản lý thông tin</h3>
                    <ul>
                        <li>CÔNG TY CỔ PHẦN VNP GROUP</li>
                        <li>Trụ sở Công ty: số 102, phố Thái Thịnh phường Trung Liệt, quận Đống Đa, thành phố Hà Nội, Việt Nam.</li>
                        <li class="red">Hotline: 0969.080.985</li>
                        <li class="red">Email CSKH: cskh@123job.vn</li>
                    </ul>
                    <h3>6. Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình</h3>
                    <p>Người dùng có quyền tự kiểm tra, cập nhật, điều chỉnh hoặc hủy bỏ bất kỳ thông tin cá nhân của mình bằng
                        cách đăng nhập vào tài khoản và click vào trang quản trị của tài khoản hoặc liên lạc với Công ty theo
                        thông tin tại mục 5. Tuy nhiên, bất kỳ sự sửa đổi, bổ sung hoặc hủy bỏ bất kỳ thông tin cá nhân vẫn
                        phải tuân thủ đầy đủ và theo đúng các quy định về thông tin đăng ký tài khoản trên Webiste https://123work.vn/</p>
                    <h3>7. Cam kết bảo mật thông tin cá nhân người dùng</h3>
                    <p>Thông tin cá nhân của thành viên trên Website https://123work.vn/ được cam kết bảo mật tuyệt đối theo
                        chính sách bảo vệ thông tin cá nhân của 123work.vn. Việc thu thập và sử dụng thông tin của Người dùng
                        chỉ được thực hiện khi có sự đồng ý của Người dùng đó trừ những trường hợp khác theo quy định của pháp luật.</p>
                    <p>Không sử dụng, chuyển giao, cung cấp hay tiết lộ thông tin cá nhân người dùng cho bên thứ 3 khi chưa có sự cho phép của người dùng.</p>
                    <p>Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân thành viên,
                        123work.vn có trách nhiệm báo cáo sự  việc với Cơ quan chức năng có thẩm quyền giải quyết và
                        thông báo lại sự việc cho phía Người dùng được biết.</p>
                    <p>Bảo mật tuyệt đối mọi thông tin giao dịch trực tuyến của Người dùng bao gồm: thông tin hóa đơn kế toán
                        chứng từ số hóa tại trung tâm an toàn cấp 1 của 123work.vn.</p>
                    <p>Ban quản lý 123work.vn yêu cầu các cá nhân khi đăng ký sử dụng dịch vụ, phải cung cấp đầy đủ thông tin
                        cá nhân có liên quan như: Họ và tên, Địa chỉ liên lạc, Email, Số chứng minh nhân dân, Số điện thoại,
                        … và chịu trách nhiệm về tính pháp lý của các thông tin trên. Ban quản trị 123work.vn không chịu trách
                        nhiệm cũng như không giải quyết mọi khiếu nại liên quan đến quyền lợi của người dùng đó nếu xét thấy thông tin
                        của người dùng đó cung cấp khi đăng ký ban đầu là không chính xác.</p>
                    <h3>8. Cơ chế tiếp nhận và giải quyết khiếu nại liên quan đến thông tin bị sử dụng sai mục đích hoặc ngoài phạm
                        vi đã được quy định tại chính sách này</h3>
                    <p>Người dùng tự chịu trách nhiệm về tính chính xác và hợp pháp của các thông tin được đăng tải trên Website
                        https://123work.vn/ trước bên thứ 3 và các cơ quan có thẩm quyền. Công ty không chịu trách nhiệm trước
                        bất kỳ nội dung nào Người dùng đăng tải.</p>
                    <p>Thông tin của Người dùng chỉ được sử dụng theo đúng mục đích thu thập và và sử dụng thông tin cá nhân
                        được quy định tại Chính sách này và theo quy định của pháp luật. Mọi hình thức thu thập và sử dụng
                        thông tin của Người dùng với mục đích khác với quy định của Chính sách này mà chưa được sự đồng ý
                        của Người dùng đều là hành vi vi phạm pháp luật.</p>
                    <p>Công ty tiếp nhận và giải quyết các khiếu nại của Người dùng liên quan đến việc sử dụng sai mục đích
                        và phạm vi thông tin cá nhân của Người dùng theo quy trình sau:</p>
                    <p><strong>Bước 1</strong>: Người dùng khiếu nại với Công ty bằng cách liên hệ với các thông tin hỗ trợ đã
                        được đăng tải công khai trên Website https://123work.vn/ hoặc theo số điện thoại 0969.080.985 - Email CSKH:
                        cskh@123work.vn (sau đây gọi tắt là “Bên Khiếu Nại”).</p>
                    <p><strong>Bước 2</strong>: Bộ phận tiếp nhận chuyển cho phòng ban chịu trách nhiệm tìm hiểu và giải quyết vụ việc.</p>
                    <p><strong>Bước 3</strong>: Trong thời hạn 10 (mười) ngày làm việc kể từ ngày nhận được khiếu nại của Bên Khiếu Nại,
                        Công ty sẽ trả lời cho Bên Khiếu Nại về kết quả giải quyết khiếu nại.</p>
                    <h3>9. Thừa nhận và chấp nhận</h3>
                    <p>Bằng hình thức trao đổi với Công ty và/hoặc tiếp tục sử dụng các dịch vụ trên Website https://123work.vn/,
                        Người dùng đồng ý rằng đã đọc nội dung của Quy chế này và đồng ý để Công ty thu thập, sử dụng và chuyển giao
                        thông tin cá nhân của mình theo đúng quy định tại Chính sách này.</p>
                    <p>Công ty có quyền sửa đổi, bổ sung các nội dung của quy định này tại từng thời điểm và bằng cách công bố
                        thông báo sửa đổi/bổ sung trên Website https://123work.vn/ và các sửa đổi/bổ sung này sẽ có hiệu lực
                        kể từ 00:00 phút của ngày thứ hai kể từ ngày sửa đổi/bổ sung được công bố trên Website https://123work.vn/.
                        Bằng việc tiếp tục sử dụng dịch vụ trên Website https://123work.vn/ sau khi sửa đổi/bổ sung được đăng tải
                        công khai trên Website https://123work.vn/, đồng nghĩa với việc Người dùng đã thừa nhận và đồng ý tuân
                        thủ các quy định của sửa đổi/bổ sung đó.</p>

                    <h2>VII. QUẢN LÝ THÔNG TIN XẤU</h2>
                    <h3>1. Quy định về đăng ký tài khoản</h3>
                    <h4>a. Tên tài khoản</h4>
                    <p>Nghiêm cấm đặt tên tài khoản giả danh Ban quản trị như: Admin 123work.vn, Admin, webmaster hay bất kỳ
                        tên khác nhằm giả dạng Ban Quản trị website 123work.vn.</p>
                    <p>Các tài khoản dùng tên các chính trị gia Việt Nam, quốc kỳ, quốc ca, tên theo kiểu chữ số, ký tự lạ.</p>
                    <p>Các tài khoản có tên dễ gây nhầm lẫn, kích động hay tuyên truyền thông tin vi phạm pháp luật hoặc thuần
                        phong mỹ tục của Việt Nam.</p>
                    <h4>b. Hình ảnh đại diện</h4>
                    <p>Không được sử dụng logo của Website http://123work.vn/ để đặt làm hình đại diện.</p>
                    <p>Không được sử dụng, đăng tải các hình ảnh khiêu dâm, hình ảnh tuyên truyền chính trị, tôn giáo, các hình
                        ảnh vi phạm bản quyền hoặc các hình ảnh trái với pháp luật, thuần phong mỹ tục của Việt Nam.</p>
                    <h4>c. Thông tin liên hệ</h4>
                    <p>Nghiêm cấm các hành vi cung cấp sai địa chỉ liên hệ bao gồm: tên người liên lạc, số điện thoại, địa chỉ,
                        email hoặc dẫn link tới các website, email không thuộc quyền sở hữu hợp pháp của Người dùng nhằm bất kỳ mục đích nào.</p>
                    <h3>2. Cơ chế rà soát, kiểm soát thông tin của OfferJob và biện pháp xử lý khi vi phạm quy định đăng tin.</h3>
                    <p><strong>Cơ chế rà soát, kiểm soát thông tin</strong>: Cơ chế rà soát, kiểm soát thông tin: Các thông tin được
                        đăng bởi Người dùng trên Website https://123work.vn/ được Ban quản trị Website của OfferJob kiểm soát
                        và xét duyệt chặt chẽ liên tục theo cơ chế riêng trước khi được hiển thị. Công ty sử dụng các biện pháp
                        công nghệ - kỹ thuật tích hợp các tính năng giúp kiểm soát thông tin trên Website https://123work.vn/
                        tự động, nhanh chóng và chính xác. Theo đó, Công ty xây dựng danh sách các từ khóa bị cấm đăng tải trên
                        Website https://123work.vn (gọi tắt là “Blacklist”), thông tin có từ khóa nằm trong Blacklist thì tin
                        đó sẽ được cho vào chuyên mục vi phạm để Công ty xóa ngay khi kiểm duyệt. Ngoài ra, tin đăng tải trên
                        Website https://123work.vn/ sẽ được kiểm duyệt bởi 13 đội ngũ quản trị nội dung, tin có chứa nội dung
                        vi phạm sẽ được đội ngũ quản trị nội dung xóa ngay khi kiểm duyệt. </p>
                    <p>Biện pháp xử lý các tin đăng vi phạm quy chế đăng tin: Công ty thực hiện xóa, loại bỏ các tin đăng không
                        phù hợp hoặc vi phạm quy định đăng tin khỏi Website https://123work.vn/. Các tin đăng tải của Người
                        dùng trên Website https://123work.vn/ sẽ được kiểm duyệt bởi đội ngũ quản trị nội dung, tin có chứa
                        nội dung vi phạm sẽ được đội ngũ quản trị nội dung xóa ngay khi kiểm duyệt. Trong trường hợp Website
                        https://123work.vn/ nhận được khiếu nại của bên thứ ba và xác định được nội dung tin đăng trái quy
                        chế đăng tin, tin đăng đó có thể bị xóa hoặc chỉnh sửa lại nội dung mà không cần thông báo trước. Đối
                        với tên tài khoản hoặc/và hình ảnh hoặc/và tiêu đề hoặc/và mô tả không đúng với quy định đăng tin của
                        Quy chế này thì Công ty ngay lập tức sẽ xóa hoặc/và gửi thông báo đến Người dùng khi phát hiện hoặc
                        nhận được thông báo từ bên thứ ba.</p>

                    <h2>VIII. TRÁCH NHIỆM TRONG TRƯỜNG HỢP PHÁT SINH LỖI KỸ THUẬT</h2>
                    <p>Khi thực hiện các giao dịch trên Website http://123work.vn/, khách hàng cần thực hiện theo đúng các
                        quy trình như được hướng dẫn.</p>
                    <p>Công ty cam kết rằng: bằng sự cố gắng và nỗ lực tốt nhất của mình sẽ đảm bảo hệ thống kỹ thuật của Website
                        http://123work.vn/ hoạt động ổn định, liên tục và an toàn. Tuy nhiên, trong trường hợp xảy ra sự cố do
                        lỗi khách quan hoặc của Công ty, Công ty sẽ ngay lập tức sẽ áp dụng các biện pháp tối ưu và tốt nhất
                        để đảm bảo quyền lợi cho Người dùng khi đăng tải thông tin và sử dụng dịch vụ trên Website https://123work.vn/.</p>
                    <p>Công ty cam kết xử lý hoặc/và phối hợp tích cực với bên thứ ba để xử lý lỗi kỹ thuật, lỗi đường truyền
                        phát sinh trên Website http://123work.vn/ trong thời hạn <span class="red">72 (bảy mươi hai) giờ</span>
                        kể từ thời điểm nhận được thông tin phản hồi của Người dùng. Khi xảy ra lỗi kỹ thuật, lỗi phần mềm hoặc
                        lỗi khách quan khác, Người dùng có thể liên hệ trực tiếp với Ban quản trị qua 3 hình thức: <span class="red">gọi
                        vào số điện thoại 0969.080.985, chat online trên Website http:// 123work.vn/ hoặc gửi email tới
                        cskh@123work.vn để được hỗ trợ kịp thời và nhanh nhất</span>.</p>
                    <h2>IX. PHÂN ĐỊNH QUYỀN VÀ TRÁCH NHIỆM GIỮA CÔNG TY (Ban quản trị Website https://123work.vn/) VỚI NHÀ TUYỂN DỤNG VÀ NGƯỜI GIỚI THIỆU</h2>
                    <h3>1. Quyền và trách nhiệm của Ban quản trị Website http://123work.vn/</h3>
                    <h4>a. Quyền của Ban quản trị Website http://123work.vn</h4>
                    <p>Cung cấp các dịch vụ cho Người dùng sau khi hoàn thành các thủ tục và điều kiện mà 123work.vn nêu ra</p>
                    <p>Yêu cầu Người dùng phải cung cấp thông tin đầy đủ, chính xác và trung thực. Trong trường hợp có cơ sở
                        chứng minh Người dùng cung cấp thông tin không chính xác, sai lệch, không đầy đủ hoặc vi phạm pháp luật
                        hay thuần phong mỹ tục Việt Nam thì Công ty có quyền từ chối, tạm ngừng hoặc chấm dứt quyền sử dụng dịch
                        vụ của Người dùng đó.</p>
                    <p>Chấm dứt quyền đăng nhập, quyền sử dụng một, một số hoặc tất cả các dịch vụ của Người dùng trong trường
                        hợp Người dùng vi phạm Quy chế của 123work.vn hoặc có những hành vi ảnh hưởng đến hoạt động kinh doanh
                        trên 123work.vn.</p>
                    <p>TTạm ngừng hiển thị hồ sơ, chỉnh sửa hoặc xóa nội dung hồ sơ ra khỏi Website https://123work.vn/ nếu Công
                        ty phát hiện hồ sơ đó có nội dung vi phạm pháp luật và vi phạm đạo đức xã hội.</p>
                    <p>Giữ bản quyền về tất cả các nội dung, biểu tượng được thể hiện/đăng tải trên Website https://123work.vn/
                        theo các quy định pháp luật về bảo hộ sở hữu trí tuệ tại Việt Nam. Website https://123work.vn/ nghiêm
                        cấm mọi hành vi sao chép, sử dụng và phổ biến bất hợp pháp các biểu tượng, nội dung thuộc quyền sở hữu
                        của Công ty.</p>
                    <p>Chấm dứt quyền sử dụng dịch vụ của Người dùng nếu có những hoạt động lừa đảo, giả mạo, gây rối loạn trên
                        Website https://123work.vn/; có hành vi vi phạm pháp luật hiện hành của Việt Nam. Trong trường hợp bị
                        chấm dứt quyền sử dụng dịch vụ của Người dùng thì tất cả các quyền của Người dùng được cấp sẽ mặc nhiên
                        hết giá trị và bị chấm dứt tại thời điểm Ban quản trị thông báo tới Người dùng.</p>
                    <p>Ngoài ra, 123work.vn cũng được hưởng toàn bộ những quyền lợi khác theo quy định của pháp luật Việt Nam.</p>
                    <h3>b. Trách nhiệm của Ban quản trị Website http://123work.vn/</h3>
                    <p>Đăng ký thiết lập Website https://123work.vn/ cung cấp dịch vụ theo quy định tại Mục 2 Chương IV Nghị
                        định số 52/2013/NĐ-CP về Thương mại điện tử và công bố các thông tin đã đăng ký trên trang chủ Website https://123work.vn/.</p>
                    <p>Xây dựng và công bố công khai trên Website https://123work.vn/ quy chế hoạt động; theo dõi và đảm bảo
                        việc thực hiện quy chế đó trên Website https://123work.vn</p>
                    <p>Chịu trách nhiệm xây dựng website bao gồm một số công việc chính như: nghiên cứu, thiết kế, mua sắm các
                        thiết bị phần cứng, phần mềm, kết nối Internet; triển khai hợp tác với các đối tác trong việc xây dựng
                        hệ thống các dịch vụ, các công cụ tiện ích phục vụ cho việc giao dịch giữa Người tìm kiếm và Người
                        giới thiệu trên Website https://123work.vn/ .</p>
                    <p>Yêu cầu Người giới thiệu trên Website https://123work.vn/ cung cấp thông tin theo quy định tại Điều 29
                        Nghị định số 52/2013/NĐ-CP về Thương mại điện tử khi đăng ký sử dụng dịch vụ.</p>
                    <p>Ngăn chặn, loại bỏ khỏi Website https://123work.vn/ những thông tin lừa đảo, thăm dò thông tin bất
                        hợp pháp, vi phạm quy định pháp luật khi phát hiện hoặc nhận được phản ánh có căn cứ xác thực về những
                        thông tin này theo quy định tại Điều 4 Thông tư 47/2014/TT BCT</p>
                    <p>Xây dựng cơ chế kiểm tra, giám sát để đảm bảo việc cung cấp thông tin của Người dùng trên Website
                        https://123work.vn/ được thực hiện chính xác, đầy đủ theo quy định tại khoản 4 Điều 36 Nghị định
                        52/2013/NĐ-CP.</p>
                    <p>Lưu trữ thông tin đăng ký của Người Giới Thiệu/Nhà Tuyển Dụng tham gia Website https://123work.vn/
                        và thường xuyên cập nhật những thông tin thay đổi, bổ sung có liên quan.</p>
                    <p>Áp dụng các biện pháp cần thiết để đảm bảo an toàn thông tin liên quan đến bí mật kinh doanh của thương
                        nhân, tổ chức, cá nhân và thông tin cá nhân của Người dùng.</p>
                    <p>Có biện pháp xử lý kịp thời khi phát hiện hoặc nhận được phản ánh về hành vi đăng tải thông tin có nội
                        dung vi phạm pháp luật trên Website https://123work.vn/.</p>
                    <p>Hỗ trợ cơ quan quản lý nhà nước điều tra các hành vi đăng tải thông tin vi phạm pháp luật, cung cấp
                        thông tin đăng ký, lịch sử giao dịch và các tài liệu khác về đối tượng có hành vi đăng tải thông tin
                        có nội dung vi phạm pháp luật trên Website https://123work.vn/. </p>
                    <p>Công bố công khai cơ chế giải quyết các tranh chấp phát sinh trong quá trình giao dịch trên Website
                        https://123work.vn/. Khi Nhà Tuyển Dụng trên website phát sinh mâu thuẫn với Người giới thiệu hoặc
                        bị tổn hại lợi ích hợp pháp, phải cung cấp cho Người tìm kiếm thông tin về Người giới thiệu, tích cực
                        hỗ trợ Người tìm kiếm bảo vệ quyền và lợi ích hợp pháp của mình.</p>
                    <p>Đảm bảo Website https://123work.vn/ hoạt động ổn định và liên tục; Khắc phục các sự cố kỹ thuật về máy
                        móc, phần mềm, hệ thống đường truyền Internet, nhân sự, các biến động xã hội, thiên tai, các quyết định
                        của cơ quan nhà nước hay một tổ chức liên quan thứ ba. Trong trường hợp các sự cố xảy ra nằm ngoài khả
                        năng kiểm soát, là những trường hợp bất khả kháng mà gây thiệt hại cho thành viên thì 123work.vn không
                        phải chịu trách nhiệm.</p>
                    <p>Hỗ trợ giải quyết khiếu nại giữa Người tìm kiếm và Người giới thiệu. Ban quản trị có trách nhiệm tiếp
                        nhận khiếu nại, phản ánh của Người tìm kiếm và Người giới thiệu và hỗ trợ giải quyết theo quy trình giải
                        quyết tranh chấp như đã quy định.</p>
                    <p>Loại bỏ khỏi Website https://123work.vn/ những thông tin việc làm vi phạm pháp luật khi phát hiện hoặc
                        nhận được phản ánh có căn cứ xác thực về những thông tin này.</p>
                    <h3>2. Quyền và trách nhiệm của người sử dụng dịch vụ tại Website http://123work.vn/</h3>
                    <h4>a. Quyền</h4>
                    <p>Sau khi đăng ký tài khoản và được 123work.vn đồng ý, thành viên là Người Giới Thiệu sẽ được 123work.vn
                        hướng dẫn, hỗ trợ để thực hiện và sử dụng các dịch vụ tại 123work.vn</p>
                    <p>Thành viên được sử dụng tài khoản để sử dụng dịch vụ và quản lý sản phẩm</p>
                    <p>Thành viên có quyền đóng góp ý kiến cho Sàn giao dịch OfferJob trong quá trình hoạt động. Các kiến nghị
                        được gửi trực tiếp bằng thư, fax hoặc email đến cho OfferJob</p>
                    <h4>b. Trách nhiệm</h4>
                    <p>Thành viên sẽ tự chịu trách nhiệm về bảo mật và lưu giữ mọi hoạt động sử dụng dịch vụ dưới tên đăng ký,
                        mật khẩu và hộp thư điện tử của mình</p>
                    <p>Thành viên có trách nhiệm thông báo kịp thời cho OfferJob về những hành vi sử dụng trái phép, lạm dụng,
                        vi phạm bảo mật, lưu giữ tên đăng ký và mật khẩu của mình để hai bên cùng hợp tác xử lý.</p>
                    <p>Thành viên cam kết những thông tin cung cấp cho OfferJob và những thông tin đăng tải trên này là chính xác</p>
                    <p>Thành viên tự chịu trách nhiệm về nội dung, hình ảnh của thông tin doanh nghiệp và các thông tin khác
                        cũng như toàn bộ quá trình giao dịch với đối tác OfferJob.</p>
                    <p>Thành viên cam kết, đồng ý không sử dụng dịch vụ của OfferJob vào những mục đích bất hợp pháp, không
                        hợp lý, lừa đảo, đe dọa, thăm dò thông tin bất hợp pháp, phá hoại, tạo ra và phát tán virus gây hư hại
                        đến hệ thống, cấu hình, truyền tải thông tin của OfferJob hay sử dụng dịch vụ của mình vào mục đích đầu
                        cơ, lũng đoạn thị trường tạo ra những đơn đặt hàng, chào hàng giả, kể cả phục vụ cho việc nghiên cứu,
                        phán đoán nhu cầu thị trường. Trong trường hợp vi phạm thì thành viên phải chịu trách nhiệm về hành vi
                        của mình trước pháp luật.</p>
                    <p>Thành viên cam kết không được thay đổi, chỉnh sửa, sao chép, truyền bá, phân phối, cung cấp và tạo những
                        công cụ tương tự của dịch vụ do OfferJob cung cấp cho một bên thứ 3 nếu chưa có sự đồng ý của OfferJob
                        trong Quy định này.</p>
                    <p>Thành viên không được hành động gây mất uy tín của OfferJob dưới mọi hình thức như gây mất đoàn kết giữa
                        các thành viên bằng cách sử dụng tên đăng ký thứ hai, thông qua một bên thứ ba hoặc tuyên truyền, phổ
                        biến những thông tin không có lợi cho uy tín của OfferJob.</p>
                    <h3>3. Phân định trách nhiệm giữa Ban quản trị và Người dùng</h3>
                    <p>Công ty và Người bán có trách nhiệm phối hợp tiếp nhận khiếu nại từ <span class="red">phía Người tìm kiếm</span>
                        bằng một trong những hình thức sau: <span class="red">điện thoại 0969.080.985 hoặc gửi email tới cskh@123work.vn.
                        Trong vòng 03 (ba) ngày làm việc</span> kể từ ngày nhận được khiếu nại, Công ty và Người tìm kiếm sẽ kiểm
                        tra, xem xét và xác nhận thông tin của khiếu nại và thông báo cho các bên có liên quan. Công ty tiến hành xác
                        minh nội dung khiếu nại và/hoặc đề nghị Người tìm kiếm cung cấp các bằng chứng liên quan tới nội dung khiếu
                        nại và gửi khiếu nại sang cho Công ty. </p>
                    <p>Ban quản trị có trách nhiệm giải quyết khiếu nại cho Người tìm kiếm theo Quy trình giải quyết tranh chấp,
                        khiếu nại tại mục III.4d.</p>

                    <h2>X. ĐIỀU KHOẢN ÁP DỤNG</h2>
                    <p>Trong trường hợp phát sinh tranh chấp, Công ty và Người giới thiệu sẽ hòa giải trên cơ sở thương lượng
                        và đôi bên cùng có lợi. Trong trường hợp có những tranh chấp mà đôi bên không thể hòa giải, một trong
                        hai bên sẽ đưa vụ việc ra Tòa án có Thẩm quyền ở Hà Nội để giải quyết. Phán quyết của Tòa án là quyết
                        định cuối cùng và có hiệu lực ràng buộc  thực hiện đối với các bên. Mọi chi phí phát sinh bao gồm cả
                        phí luật sư của bên thắng kiện do bên thua kiện chịu. </p>

                    <h2>XI. ĐIỀU KHOẢN CAM KẾT</h2>
                    <p>Địa chỉ liên lạc chính thức  https://123work.vn/:</p>
                    <ul>
                        <li class="red">Công ty Cổ phần VNP Group</li>
                        <li class="red">Hotline: 0969.080.985</li>
                        <li class="red">Email: cskh@123work.vn</li>
                        <li class="red"> Địa chỉ: Số 102, Thái Thịnh, phường Trung Liệt, quận Đống Đa, TP. Hà Nội</li>
                    </ul>
                    <p>
                        Quy chế của offerjob.net chính thức có hiệu lực kể từ ngày được đăng lên Website https://123work.vn/.
                        Công ty có quyền điều chỉnh, thay đổi, bổ sung nội dung của Quy chế này cho phù hợp với thực tiễn hoạt
                        động. Quy chế sửa đổi có hiệu lực kể từ ngày có thông báo sửa đổi, Nhà Tuyển Dụng/ Người Giới Thiệu
                        tiếp tục sử dụng dịch vụ sau khi Quy chế sửa đổi được công bố thì đồng nghĩa với việc họ đã đồng ý
                        tuân thủ nội dung của Quy chế sửa đổi này.
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

