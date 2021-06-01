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
                    <h1>CHÍNH SÁCH BẢO MẬT THÔNG TIN</h1>
                </div>
                <hr>
                <div class="content-body">
                    <h2>1. Mục đích và phạm vị thu thập thông tin</h2>
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
                    <h2>2. Phạm vị sử dụng thông tin</h2>
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
                    <h2>3. Thời gian lưu trữ thông tin</h2>
                    <p>Thông tin của người dùng được tự động lưu và bảo mật trong bộ nhớ của máy chủ của Website https://123work.vn/
                        cho đến khi Công ty nhận được yêu cầu xóa thông tin của người dùng hoặc người dùng xóa tài khoản đăng nhập</p>
                    <h2>4. Những người hoặc tổ chức có thể tiếp cận thông tin</h2>
                    <p>Người dùng đồng ý rằng: trong trường hợp cần thiết, các cơ quan/ tổ chức/cá nhân sau có quyền được tiếp cận và thu thập các thông tin liên quan, bao gồm:</p>
                    <ul>
                        <li>Công ty Cổ phần VNP Group</li>
                        <li>Bên thứ 3 có tích hợp dịch vụ của <a href="">http://123work.vn</a> (nếu có)</li>
                        <li>Cơ quan Nhà nước có thẩm quyền</li>
                        <li>Cơ quan thuế, cố vấn tài chính, pháp lý và kiểm toán cho Công ty khi phát sinh trường hợp cần phải biết thông tin của Người dùng</li>
                    </ul>
                    <h2>5. Địa chỉ của đơn vị thu thập và quản lý thông tin</h2>
                    <ul>
                        <li>CÔNG TY CỔ PHẦN VNP GROUP</li>
                        <li>Trụ sở Công ty: số 102, phố Thái Thịnh phường Trung Liệt, quận Đống Đa, thành phố Hà Nội, Việt Nam.</li>
                        <li class="red">Hotline: 0969.080.985</li>
                        <li class="red">Email CSKH: cskh@123job.vn</li>
                    </ul>
                    <h2>6. Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình</h2>
                    <p>Người dùng có quyền tự kiểm tra, cập nhật, điều chỉnh hoặc hủy bỏ bất kỳ thông tin cá nhân của mình bằng
                        cách đăng nhập vào tài khoản và click vào trang quản trị của tài khoản hoặc liên lạc với Công ty theo
                        thông tin tại mục 5. Tuy nhiên, bất kỳ sự sửa đổi, bổ sung hoặc hủy bỏ bất kỳ thông tin cá nhân vẫn
                        phải tuân thủ đầy đủ và theo đúng các quy định về thông tin đăng ký tài khoản trên Webiste https://123work.vn/</p>
                    <h2>7. Cam kết bảo mật thông tin cá nhân người dùng</h2>
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
                    <h2>8. Cơ chế tiếp nhận và giải quyết khiếu nại liên quan đến thông tin bị sử dụng sai mục đích hoặc ngoài phạm
                        vi đã được quy định tại chính sách này</h2>
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
                    <h2>9. Thừa nhận và chấp nhận</h2>
                    <p>Bằng hình thức trao đổi với Công ty và/hoặc tiếp tục sử dụng các dịch vụ trên Website https://123work.vn/,
                        Người dùng đồng ý rằng đã đọc nội dung của Quy chế này và đồng ý để Công ty thu thập, sử dụng và chuyển giao
                        thông tin cá nhân của mình theo đúng quy định tại Chính sách này.</p>
                    <p>Công ty có quyền sửa đổi, bổ sung các nội dung của quy định này tại từng thời điểm và bằng cách công bố
                        thông báo sửa đổi/bổ sung trên Website https://123work.vn/ và các sửa đổi/bổ sung này sẽ có hiệu lực
                        kể từ 00:00 phút của ngày thứ hai kể từ ngày sửa đổi/bổ sung được công bố trên Website https://123work.vn/.
                        Bằng việc tiếp tục sử dụng dịch vụ trên Website https://123work.vn/ sau khi sửa đổi/bổ sung được đăng tải
                        công khai trên Website https://123work.vn/, đồng nghĩa với việc Người dùng đã thừa nhận và đồng ý tuân
                        thủ các quy định của sửa đổi/bổ sung đó.</p>
                </div>
            </div>
        </div>
    </div>
    @include('component.footer.simple')
@stop

@section('script')
    <script src="{{ mix('js/static.js', "statics/assets") }}"></script>
@stop

