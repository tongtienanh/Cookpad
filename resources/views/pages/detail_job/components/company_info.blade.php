<div class="col-lg-4 aside">
    <div class="company-box padding-0" id="info-company">
        <div class="header-company">
            <div class="close">
                <img src="{{ url('statics/images/icon/prev_333.svg') }}" alt="">
            </div>
            <span>Thông tin công ty</span>
        </div>
        <div class="company-info-job">
            <div class="company-info">
                <div class="company-info__body">
                    <div class="company-info__logo">
                        <img
                            src="https://cdn.123job.vn/123job/uploads/2020/05/11/2020_05_11______32cfd17467c88398fe64a7cd95d9d40a.jpg"
                            class="avatar"
                            alt="Logo Công ty Cổ phần DTP">
                    </div>
                    <div class="company-info__button">
                        <a href="#" class="btn btn-radius">{{ __('detail_job.fllow_') }}</a>
                    </div>
                    <div class="company-info__content">
                        <p class="cpn-name">VNP Group</p>
                        <div class="info">
                            <div class="people">
                        <span class="icon">
                            <img src="{{ url('statics/images/icon/team.svg') }}" alt="">
                        </span>
                                <span>200-500</span>
                            </div>
                            <div class="address">
                        <span class="icon">
                            <img src="{{ url('statics/images/icon/address_v2.svg') }}" alt="">
                        </span>
                                <span>102 Thái Thịnh, Phường Trung Liệt, Quận Đống Đa, Thành phố Hà Nội</span>
                            </div>
                            <div class="people">
                        <span class="icon">
                            <img src="{{ url('statics/images/icon/phone.svg') }}" alt="">
                        </span>
                                <span>1234556789087</span>
                            </div>
                        </div>
                        <p class="cpn-description">
                            Công Ty Cổ phần VNP GROUP - Viet Nam Price Joint Stock Company (VNP)- được thành lập ngày 21 tháng 8 năm 2006, tọa lạc tại số 102, phố Thái Thịnh, phường Trung Liệt, quận Đống Đa, thành phố Hà Nội.

                            Trải qua 10 năm hình thành và phát triển, VNP đã từng bước khẳng định vị trí đi đầu của mình trong lĩnh vực thương mại điện tử cũng như truyền thông Internet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("component.suggest_job")
    @include("component.detail_job.share_social")
</div>

