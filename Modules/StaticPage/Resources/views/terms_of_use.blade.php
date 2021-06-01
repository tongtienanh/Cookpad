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
                    <h1>Điều khoản sử dụng</h1>
                </div>
                <hr>
                <div class="content-body">
                    <h2>1. Quyền và trách nhiệm của Ban quản trị Website http://123work.vn/</h2>
                    <h3>a. Quyền của Ban quản trị Website http://123work.vn</h3>
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
                    <h2>2. Quyền và trách nhiệm của người sử dụng dịch vụ tại Website http://123work.vn/</h2>
                    <h3>a. Quyền</h3>
                    <p>Sau khi đăng ký tài khoản và được 123work.vn đồng ý, thành viên là Người Giới Thiệu sẽ được 123work.vn
                        hướng dẫn, hỗ trợ để thực hiện và sử dụng các dịch vụ tại 123work.vn</p>
                    <p>Thành viên được sử dụng tài khoản để sử dụng dịch vụ và quản lý sản phẩm</p>
                    <p>Thành viên có quyền đóng góp ý kiến cho Sàn giao dịch OfferJob trong quá trình hoạt động. Các kiến nghị
                        được gửi trực tiếp bằng thư, fax hoặc email đến cho OfferJob</p>
                    <h3>b. Trách nhiệm</h3>
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
                    <h2>3. Phân định trách nhiệm giữa Ban quản trị và Người dùng</h2>
                    <p>Công ty và Người bán có trách nhiệm phối hợp tiếp nhận khiếu nại từ <span class="red">phía Người tìm kiếm</span>
                        bằng một trong những hình thức sau: <span class="red">điện thoại 0969.080.985 hoặc gửi email tới cskh@123work.vn.
                        Trong vòng 03 (ba) ngày làm việc</span> kể từ ngày nhận được khiếu nại, Công ty và Người tìm kiếm sẽ kiểm
                        tra, xem xét và xác nhận thông tin của khiếu nại và thông báo cho các bên có liên quan. Công ty tiến hành xác
                        minh nội dung khiếu nại và/hoặc đề nghị Người tìm kiếm cung cấp các bằng chứng liên quan tới nội dung khiếu
                        nại và gửi khiếu nại sang cho Công ty. </p>
                    <p>Ban quản trị có trách nhiệm giải quyết khiếu nại cho Người tìm kiếm theo Quy trình giải quyết tranh chấp,
                        khiếu nại tại mục III.4d.</p>
                </div>
            </div>
        </div>
    </div>
    @include('component.footer.simple')
@stop

@section('script')
    <script src="{{ mix('js/static.js', "statics/assets") }}"></script>
@stop
