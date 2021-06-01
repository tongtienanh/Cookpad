<section class="section section-background" id="prod_vip">
    <div class="container">
        <div class="section-head">
            <h2 class="section-head-title text-center">Việc làm chất dành cho bạn</h2>
            <p class="section-head-des text-center">Khám phá cơ hội việc làm chất nhất</p>
        </div>
            <div class="job-hot-your owl-carousel owl-theme">
                @for($i = 1; $i < 3; $i++)
                    <div class="row">
                        @foreach($data as $key => $item)
                            <div class="col col-4 item-hot mb-3{{ in_array($key, [1,4,7,10]) ? ' n-p-rl' : '' }}">
                                <a href="javascript:void(0)" class="item__favorite item__save js-popup-auth" data-id="login-box-{{ $key }}">
                                    <i class="fa fa-heart-o"></i>
                                </a>
                                @if(in_array($key, [1,4,7,10]))
                                    <span class="item__hot-top">Top</span>
                                @endif
                                <a href="" class="item item-product white">
                                    <div class="img">
                                        <img src="{{ $item['avatar'] }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h3 class="mb-1 {{ in_array($key, [1,4,7,10]) ? ' top' : '' }}">{{ $item['name'] }}</h3>
                                        <p class="from">{{ $item['company'] }}</p>
                                        <p class="address">{{ $item['address'] }}</p>
                                        <p class="money">{{ $item['salary'] }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endfor
            </div>
    </div>
</section>
