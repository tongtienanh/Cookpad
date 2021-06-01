<div class="container">
    <div class="promotion">
        <div class="promotion-header d-flex">
            <h2 class="title-promotion">Ưu đãi khi đặt bàn</h2>
            <div class="chose-time">
                <label for="">Chọn ngày
                <input value="" type="text" id="basicDate" class="flatpickr-input" readonly="readonly">
                </label>
            </div>
        </div>
        <div class=promotion-body">
            <div class="row-time-booking">
                <div class="promotion-booking">
                    <div class="promotion-booking-title">Giảm 20%</div>
                </div>
                <div class="detail-booking">
                    <h3 class="font16 txt-bold detail-booking-title"><span style="color: rgb(61, 154, 232);">Cả ngày</span><span> - Giảm 20% cho món mới giá 286.000đ còn 229.000đ</span></h3>
                    <div class="text-semibold">Giảm 20% cho món mới giá 286.000đ còn 229.000đ</div>
                    <div class="time-booking">
                        <div class="owl-two owl-carousel owl-theme">
                            <div class="item">20:00</div>
                            <div class="item">20:15</div>
                            <div class="item">20:30</div>
                            <div class="item">20:30</div>
                            <div class="item">20:30</div>
                            <div class="item">20:30</div>
                            <div class="item">20:30</div>
                            <div class="item">20:30</div>
                            <div class="item">20:30</div>
                            <div class="item">20:30</div>
                            <div class="item">20:30</div>
                        </div>
                    </div>
                </div>
            </div>
            @for($i=1;$i<3;$i++)
                <div class="row-time-booking">
                    <div class="promotion-booking">
                        <div class="promotion-booking-title">Giảm 15%</div>
                    </div>
                    <div class="detail-booking">
                        <h3 class="font16 txt-bold detail-booking-title"><span style="color: rgb(61, 154, 232);">Cả ngày</span><span> - Giảm 15% hóa đơn thức ăn, tối đa 300.000đ</span></h3>
                        <div class="text-semibold">Giảm 15% hóa đơn thức ăn, tối đa 300.000đ</div>
                        <div class="time-booking"></div>
                        <div class="not-time">Xin lỗi, ưu đãi không áp dụng vào thời gian này</div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
