<div class="list-item-job">
    @for ($i=0; $i < 10; $i++)
        @php
            $array_images = [
                'https://www.hoteljob.vn/uploads/images/20-01-30-20/84773407_210611413405723_8758927875626762240_n_144.jpg',
                'https://www.hoteljob.vn/uploads/images/20-04-24-14/Baemin_Vietnamworks_Logo_Baemin_244x100_144.png',
                'https://www.hoteljob.vn/uploads/images/17-04-21-16/palazzo-1_144.png',
                'https://www.hoteljob.vn/uploads/images/19-08-06-08/download_144.png',
                'https://www.hoteljob.vn/uploads/images/17-02-22-09/Screenshot_3_144.jpg',
                'https://www.hoteljob.vn/uploads/images/17-12-08-09/Logo_Full_%C4%91en_144.png',
                'https://www.hoteljob.vn/uploads/images/20-02-06-16/logo-12_144.png',
                'https://www.hoteljob.vn/uploads/images/15-12-11-08/10127221_144.png',
                'https://www.hoteljob.vn/uploads/images/20-01-30-20/84773407_210611413405723_8758927875626762240_n_144.jpg',
                'https://www.hoteljob.vn/uploads/images/20-04-24-14/Baemin_Vietnamworks_Logo_Baemin_244x100_144.png',
            ];
        @endphp
        <div class="item js-item-job">
            <div class="item__wrap ml-3">
                <h2 class="item__title{{ in_array($i, [1,4,7,10]) ? ' top' : '' }}">
                    <a href="{{route('detail')}}">
                        Sấu dầm thanh mát giải nhiệt mùa hè</a>
                </h2>
                <div class="item__group-info">
                    <div class="d-inline">
                        <span class="d-inline-block">
                            <a href="#" class="item__location">
                                Bởi Mẹ Gấu
                            </a>
                        </span>
                        <span style="color:#666" class="text-muted">|</span>
                        <span class="d-inline-block item__time">30 {{ __('search_job.yesterday_') }}</span>
                    </div>
                </div>
                <div class="item__description mt-2 mb-2">
                    Linux Apache MySQL PHP (LAMP stack). We are looking for a PHP Web Developer
                    to join our in-house development team, located in Plymouth.
                </div>
                <p class="item__link">

                    <span class="item__time">Nếu trong 30 phút</span>
                    <span class="item__time">10 người ăn</span>
                    <span class="item__more item__save js-popup-auth"><i class="fa fa-heart-o"></i> Lưu lại</span>
                </p>
                @if(in_array($i, [1,4,7,10]))
                    <span class="item__hot-top">Top</span>
                @endif
            </div>
            <div class="img img-robot">
                <img class="item__image avatar-company" src="{{ $array_images[$i] }}" alt="">
            </div>
        </div>
    @endfor
</div>
