<section class="section section-background" id="section-employer">
    <div class="container">
        <div class="section-head">
            <h2 class="section-head-title text-center">Lĩnh vực hot nhất</h2>
            <p class="section-head-des text-center">Khám phá các công việc hot nhất hiện nay</p>
        </div>
        <div class="section-body">
            <div class="row m-right">
                @foreach($data as $item)
                    <div class="col col-2 item-col">
                        <a href="" class="item item-customer">
                            <div class="img">
                                <img src="{{ url('statics/images/icon/' . $item['avatar']) }}" alt="">
                            </div>
                            <div class="name">
                                {{ $item['name'] }}
                            </div>
                        </a>
                    </div>
                @endforeach
                @php
                    $data = array_reverse($data)
                @endphp
                @foreach($data as $item)
                    <div class="col col-2 item-col">
                        <a href="" class="item item-customer">
                            <div class="img">
                                <img src="{{ url('statics/images/icon/' . $item['avatar']) }}" alt="">
                            </div>
                            <div class="name">
                                {{ $item['name'] }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
