<section class="section section-background" id="enterprise-hot">
    <div class="container">
        <div class="section-head">
            <h2 class="section-head-title text-center">Doanh nghiệp tiêu biểu</h2>
            <p class="section-head-des text-center">Hơn 500+ doanh nghiệp đã lựa chọn Huntpro để tuyển dụng hiệu quả hơn</p>
        </div>
        <div class="section-body">
            <div class="row m-right">
                @php $i = 0; @endphp
                @foreach($data as $employer)
                    @php ++$i @endphp
                    <div class="col col-2 item-col">
                        <a href="/company/{{ $employer['name'] }}" target="_blank" class="item item-customer">
                            <div class="img">
                                <img src="{{ $employer['avatar'] }}" alt="">
                            </div>
                            <div class="name">
                                {{ $employer['name'] }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
